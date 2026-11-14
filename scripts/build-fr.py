#!/usr/bin/env python3
"""Regenerate the French static pages using only Python's standard library.
English HTML is the source layout; locales/fr.json contains editorial translations.
"""
from pathlib import Path
from html.parser import HTMLParser
from urllib.parse import urlsplit, unquote
import html
import json
import re

ROOT = Path(__file__).resolve().parents[1]
EXCLUDED = {'test2026.html', 'huh.html'}  # Unlinked experiments, outside the public site.
PAGES = {p.name for p in ROOT.glob('*.html') if p.name not in EXCLUDED}
TRANSLATIONS = json.loads((ROOT / 'locales/fr.json').read_text())

def translate(value):
    normalized = ' '.join(html.unescape(value).split())
    return TRANSLATIONS.get(normalized, normalized)

def route(value, french=True):
    parsed = urlsplit(value)
    if parsed.scheme or parsed.netloc:
        if parsed.netloc not in ('loogart.com', 'www.loogart.com'):
            return value
    elif value.startswith(('#', 'mailto:', 'tel:', 'data:')):
        return value
    path = parsed.path.removeprefix('./').lstrip('/')
    if path.startswith('projects/') and Path(path).name in PAGES:
        path = Path(path).name
    if path.startswith(('img/', 'css/', 'js/', 'assets/', 'fonts/', 'notion-export/')):
        return '/' + path + ('?' + parsed.query if parsed.query else '') + ('#' + parsed.fragment if parsed.fragment else '')
    if path in ('illustration', 'illustration.html'):
        path = 'portfolio.html'
    if path == '':
        path = ''
    elif path not in PAGES:
        if path + '.html' in PAGES: path += '.html'
        else: return value
    return ('/fr/' if french else '/') + path + ('?' + parsed.query if parsed.query else '') + ('#' + parsed.fragment if parsed.fragment else '')

class FrenchHTML(HTMLParser):
    def __init__(self, name):
        super().__init__(convert_charrefs=True)
        self.name = name
        self.output = []
        self.skip = 0
        self.heading = ''
        title_match = re.search(r'<title>(.*?)</title>', (ROOT/name).read_text(), re.S) if name in PAGES else None
        self.title = translate(title_match[1]) if title_match else 'Loogart'
        self.image_number = 0

    def handle_starttag(self, tag, attrs):
        attrs_dict = dict(attrs)
        rendered = []
        for key, value in attrs:
            if value is None:
                rendered.append(key); continue
            if tag == 'html' and key == 'lang': value = 'fr'
            elif key in ('src', 'href', 'poster'):
                if 'data-language-switch' in attrs_dict: value = '/'
                elif not (tag == 'link' and attrs_dict.get('rel') == 'alternate'): value = route(value)
            elif key == 'content' and tag == 'meta':
                kind = attrs_dict.get('name', attrs_dict.get('property', ''))
                if kind == 'og:url': value = 'https://loogart.com/fr/' + ('' if self.name == 'index.html' else self.name)
                elif kind in ('description', 'og:description', 'twitter:description'):
                    translated = translate(value)
                    value = translated if translated != value else self.title
                elif kind in ('og:title', 'twitter:title'): value = self.title
                elif attrs_dict.get('http-equiv') == 'refresh': value = re.sub(r'url=(.*)', lambda m: 'url='+route(m[1]), value)
                elif kind == 'msapplication-config': value = route(value)
            elif key == 'href' and 'data-language-switch' in attrs_dict: value = '/'
            elif key in ('alt', 'title', 'placeholder', 'aria-label'):
                source = value
                if key == 'alt' and attrs_dict.get('title') and ('-by-loogart' in value or value.islower()):
                    source = attrs_dict['title']
                    value = source
                value = translate(value)
                if key == 'alt' and value and value == source:
                    if re.search(r' logo$', value, re.I):
                        value = 'Logo de ' + re.sub(r' logo$', '', value, flags=re.I).replace('Yellow Pages', 'Pages Jaunes').replace('Government of Canada', 'Gouvernement du Canada')
                    elif 'Loogmoji of ' in value:
                        value = value.replace('Animated Loogmoji of ', 'Loogmoji animé de ').replace('Loogmoji of ', 'Loogmoji de ').replace(' by Loogart', ' par Loogart').replace(' in ', ' dans ')
                    elif 'Loogmoji' in value and ' by Loogart' in value:
                        value = re.sub(r'^(?:Animated )?Loogmoji of (.*?) by Loogart$', r'Loogmoji de \1 par Loogart', value)
                        value = re.sub(r'^(.*?) Loogmoji by Loogart$', r'Loogmoji de \1 par Loogart', value)
                    if value == source and 'Cityline Illustration by Loogart' in source:
                        subject = source.replace(' Cityline Illustration by Loogart', '').replace('Montreal', 'Montréal').replace('Downtown', 'Centre-ville de').replace('Old Montréal', 'Vieux-Montréal').replace('Little-Italy', 'Petite Italie').replace('West Island', 'Ouest-de-l’Île').replace(' and ', ' et ')
                        value = 'Illustration CityLine : ' + subject + ', par Loogart'
                    if value == source:
                        self.image_number += 1
                        value = self.title.replace(' | Loogart', '') + ' — visuel ' + str(self.image_number)
            if tag == 'link' and attrs_dict.get('rel') == 'canonical' and key == 'href':
                value = 'https://loogart.com/fr/' + ('' if self.name == 'index.html' else self.name)
            attribute_name = 'viewBox' if key == 'viewbox' else key
            rendered.append(attribute_name+'="'+html.escape(value, quote=True)+'"')
        self.output.append('<'+tag+(' '+' '.join(rendered) if rendered else '')+'>')
        if tag in ('script', 'style'): self.skip += 1

    def handle_startendtag(self, tag, attrs):
        self.handle_starttag(tag, attrs)
        # HTML void elements have no closing tag; SVG shapes do. Without this,
        # sibling circle/ellipse/path elements become invalid nested shapes.
        if tag not in {'area', 'base', 'br', 'col', 'embed', 'hr', 'img', 'input',
                       'link', 'meta', 'param', 'source', 'track', 'wbr'}:
            self.handle_endtag(tag)
    def handle_endtag(self, tag):
        if tag in ('script', 'style'): self.skip -= 1
        self.output.append('</'+tag+'>')
    def handle_data(self, value):
        if self.skip:
            # Legacy redirect points to a removed illustration route.
            value = value.replace("location.replace('./illustration')", "location.replace('/fr/portfolio.html')")
            self.output.append(value)
        else:
            normalized = ' '.join(value.split())
            translated = translate(value)
            if normalized in TRANSLATIONS:
                leading = re.match(r'^\s*', value)[0]
                trailing = re.search(r'\s*$', value)[0]
                self.output.append(leading+html.escape(translated, quote=False)+trailing)
            else: self.output.append(html.escape(value, quote=False))
    def handle_entityref(self, name): self.output.append('&'+name+';')
    def handle_charref(self, name): self.output.append('&#'+name+';')
    def handle_comment(self, data): self.output.append('<!--'+data+'-->')
    def handle_decl(self, decl): self.output.append('<!'+decl+'>')

for name in sorted(PAGES | {'html/navbar.html', 'html/footer.html'}):
    parser = FrenchHTML(name)
    parser.feed((ROOT/name).read_text())
    result = ''.join(parser.output)
    # Correct translated header language destinations before JS enhancement.
    result = result.replace('>Français</span>', '>English</span>').replace('>Français</a>', '>English</a>').replace('lang="fr" hreflang="fr"', 'lang="en" hreflang="en"')
    result = result.replace('aria-label="Consulter cette page en français"', 'aria-label="View this page in English"')
    if name == 'html/navbar.html': result = result.replace('data-language-switch="" href="/fr/"', 'data-language-switch="" href="/"')
    out = ROOT/'fr'/name
    out.parent.mkdir(parents=True, exist_ok=True)
    result = re.sub(r'[ \t]+$', '', result, flags=re.MULTILINE).rstrip() + '\n'
    out.write_text(result)
print(f'Generated {len(PAGES)} French pages and 2 shared fragments.')

# Include both languages in the sitemap without indexing error/redirect/private download pages.
public_pages = sorted(PAGES - {'404.html', 'new-work.html', 'thank-you.html', 'montreal-wallpapers-download.html'})
entries = []
for name in public_pages:
    path = '' if name == 'index.html' else name
    en = 'https://loogart.com/' + path
    fr = 'https://loogart.com/fr/' + path
    for url in (en, fr):
        entries.append('  <url><loc>'+url+'</loc><xhtml:link rel="alternate" hreflang="en" href="'+en+'"/><xhtml:link rel="alternate" hreflang="fr" href="'+fr+'"/></url>')
(ROOT/'sitemap.xml').write_text('<?xml version="1.0" encoding="UTF-8"?>\n<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">\n'+'\n'.join(entries)+'\n</urlset>\n')
