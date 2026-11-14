# Review the Habs 117 announcement and bilingual branch

Branch: `codex/print-to-go-bilingual`, based on local `master`.
Everything is local. No push, pull request, merge or deployment was performed.

## Preview on your Mac

From this repository in Terminal:

```sh
python3 -m http.server 8000 --bind 127.0.0.1
```

Open http://127.0.0.1:8000/ for English and http://127.0.0.1:8000/fr/ for French.
Keep Terminal running; press Control-C to stop the server.
Use HTTP rather than opening HTML files directly: shared navigation requires fetch.

Review the banner across desktop and mobile, its full clickable area, French/English
switches on home and project pages, light/dark mode, gallery controls, newsletter
form labels and download links. Avoid submitting forms during testing unless you
intend to subscribe. The shop and booking links open their existing live services.

## French content

`fr/` contains generated static HTML so translated content, page titles, descriptions,
canonical URLs and language alternates are available before JavaScript runs.
English source pages retain their URLs; the French equivalents live under `/fr/`.
Assets remain shared. The language switch preserves the current page, query and hash.
The site starts in English at `/`; no automatic language redirects are introduced.

Edit English layouts in the root HTML files and translations in `locales/fr.json`,
then regenerate with:

```sh
python3 scripts/build-fr.py
```

Commit the generated French files too. No dependencies or build server are needed.
The translated scope includes all 27 current root pages, the navbar and footer.
Unlinked experiments (`huh.html`, `test2026.html`) and historical subdirectories
(`xyz/`, `prototype/`, etc.) retain their original content. Third-party shop,
booking, embedded social posts, hosted newsletter forms, emails and image artwork
are separate systems; their language settings and copy need a separate review.
Adding French website pages alone does not certify legal compliance.

## Commit and share only when ready

Review changes first:

```sh
git status
git diff
```

When you approve the changes, stage and commit the feature files. With this clean
starting checkout, the following captures this branch's changes; if you have added
other work since, select only the files you intend to include instead.

```sh
git add .
git commit -m "Add Habs 117 announcement and French website"
```

When you explicitly want the branch on GitHub:

```sh
git push -u origin codex/print-to-go-bilingual
```

On GitHub, open a pull request from `codex/print-to-go-bilingual` into `master`.
Review the Files changed tab and available checks, then merge when ready.
Merging into the publishing branch may update the live website according to your
existing hosting configuration. Check that configuration before merging.
After merging on GitHub, update your local primary branch:

```sh
git switch master
git pull --ff-only origin master
```

If you prefer to merge locally first, ensure the feature work is committed, switch
to `master`, update it with `git pull --ff-only origin master`, then run
`git merge --no-ff codex/print-to-go-bilingual`. Review the result before running
`git push origin master`, which can publish it. A pull request is recommended for
an easier final review. Do not merge or push until you are ready.

## Verification performed

- All 54 English/French page URLs returned HTTP 200 locally.
- French internal link and asset audit found no newly broken paths.
- Checked the banner at mobile and desktop widths, same-page language switching,
  translated gallery labels, opening the gallery, and 99 portfolio images.
- JavaScript syntax checks and Git whitespace checks passed; sitemap XML parsed.
- Existing HTML still references `js/validate.js` and `js/bootstrapvalidator.js`,
  which are absent from the original checkout. No external form was submitted.
