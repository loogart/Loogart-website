// Shared fragments are loaded once, relative to the selected language.
const loogartFrench = document.documentElement.lang === 'fr';
const loogartRoot = loogartFrench ? '/fr/' : '/';

function loadHTMLFragment(file, ids) {
    const container = ids.map(id => document.getElementById(id)).find(Boolean);
    if (!container) return Promise.resolve();
    return fetch(loogartRoot + 'html/' + file)
        .then(response => {
            if (!response.ok) throw new Error('Unable to load ' + file);
            return response.text();
        })
        .then(markup => { container.innerHTML = markup; })
        .catch(error => console.error('Error loading HTML:', error));
}

function updateLanguageLinks() {
    const page = window.location.pathname.replace(/^\/fr(?:\/|$)/, '/');
    const destination = loogartFrench ? page : '/fr' + page;
    document.querySelectorAll('[data-language-switch]').forEach(link => {
        link.href = destination + window.location.search + window.location.hash;
        const label = link.querySelector('[data-language-label]') || link;
        label.textContent = loogartFrench ? 'English' : 'Français';
        link.lang = loogartFrench ? 'en' : 'fr';
        link.hreflang = link.lang;
        link.setAttribute('aria-label', loogartFrench ? 'View this page in English' : 'Consulter cette page en français');
    });
}

function updateFooterYear() {
    document.querySelectorAll('#current-year, [data-current-year]').forEach(element => {
        element.textContent = String(new Date().getFullYear());
    });
}

document.addEventListener('DOMContentLoaded', function () {
    Promise.all([
        loadHTMLFragment('navbar.html', ['header-placeholder', 'navbar']),
        loadHTMLFragment('footer.html', ['footer-placeholder', 'footer'])
    ]).then(function () {
        const promo = document.querySelector('.shop-promo');
        if (promo) {
            // Keep the floating card out of the mobile header's fixed stacking context.
            document.body.appendChild(promo);
            const isHomepage = /^\/(?:fr\/)?(?:index\.html)?$/.test(window.location.pathname);
            let dismissed = false;
            try {
                if (isHomepage) sessionStorage.removeItem('loogart-habs117-dismissed');
                dismissed = sessionStorage.getItem('loogart-habs117-dismissed') === 'true';
            } catch (error) { /* The promotion also works without browser storage. */ }
            // Start hidden in the HTML to prevent a flash before the reveal delay.
            promo.hidden = true;
            const revealTimer = dismissed ? null : window.setTimeout(function () {
                promo.hidden = false;
            }, 2500);
            promo.querySelector('[data-dismiss-shop-promo]').addEventListener('click', function () {
                window.clearTimeout(revealTimer);
                promo.hidden = true;
                try { sessionStorage.setItem('loogart-habs117-dismissed', 'true'); }
                catch (error) { /* Dismiss for this page when storage is unavailable. */ }
            });
        }
        const header = document.getElementById('header-placeholder');
        if (header) {
            const measureHeader = () => document.documentElement.style.setProperty('--site-header-height', header.getBoundingClientRect().height + 'px');
            measureHeader();
            if (typeof ResizeObserver === 'function') new ResizeObserver(measureHeader).observe(header);
            window.addEventListener('resize', measureHeader);
        }
        updateLanguageLinks();
        updateFooterYear();
        if (typeof updateThemeToggleLabel === 'function') updateThemeToggleLabel();
    });
});
