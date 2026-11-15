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

// Mailchimp's public embed endpoint supports JSONP for cross-origin signups.
// Keep the audience, tag, and honeypot from the original embed; no API key is used.
function sendNewsletterSignup(form) {
    return new Promise(function (resolve, reject) {
        const callback = 'loogartSignup' + Date.now() + Math.random().toString(36).slice(2);
        const url = new URL(form.action);
        url.pathname = url.pathname.replace(/\/post$/, '/post-json');
        new FormData(form).forEach((value, key) => url.searchParams.set(key, value));
        url.searchParams.set('c', callback);
        const script = document.createElement('script');
        let settled = false;
        const cleanup = function () {
            window.clearTimeout(timer);
            script.remove();
            delete window[callback];
        };
        const fail = function () {
            if (settled) return;
            settled = true;
            cleanup();
            reject(new Error('Newsletter request failed'));
        };
        const timer = window.setTimeout(fail, 15000);
        window[callback] = function (response) {
            if (settled) return;
            settled = true;
            cleanup();
            resolve(response);
        };
        script.onerror = fail;
        script.src = url.href;
        document.head.appendChild(script);
    });
}

function initializeNewsletterForm() {
    const form = document.querySelector('.footer-newsletter-form');
    if (!form) return;
    const status = form.querySelector('#newsletter-status');
    const button = form.querySelector('button[type="submit"]');
    const email = form.querySelector('[name="EMAIL"]');
    let pending = false;
    const say = function (text, state) {
        status.textContent = text;
        status.dataset.state = state;
        form.dataset.newsletterState = state;
        if (state === 'success') status.focus();
    };
    form.addEventListener('submit', async function (event) {
        event.preventDefault();
        if (pending || !form.reportValidity()) return;
        pending = true;
        button.disabled = true;
        form.setAttribute('aria-busy', 'true');
        say(loogartFrench ? 'Un instant…' : 'One moment…', 'loading');
        try {
            const response = await sendNewsletterSignup(form);
            if (response && response.result === 'success') {
                // Works for both single and double opt-in; don't claim confirmation.
                say(loogartFrench ? 'Merci ! Surveillez votre boîte courriel pour la suite.' : 'Thanks! Check your inbox for a little note from me.', 'success');
                form.reset();
            } else {
                const message = response && typeof response.msg === 'string' ? response.msg : '';
                if (/already subscribed/i.test(message)) {
                    say(loogartFrench ? 'Vous êtes déjà sur ma liste. À bientôt !' : 'You’re already on my list. Talk soon!', 'success');
                } else if (/too many|recent signup|too many subscribe/i.test(message)) {
                    say(loogartFrench ? 'Réessayez dans quelques minutes.' : 'Give it a few minutes, then try again.', 'error');
                } else {
                    // Treat provider HTML as text, never inject it into the footer.
                    const plain = new DOMParser().parseFromString(message, 'text/html').body.textContent.trim().replace(/^\d+\s*-\s*/, '');
                    say(loogartFrench ? 'L’inscription n’a pas abouti. Vérifiez votre courriel et réessayez.' : (plain || 'That didn’t go through. Please try again.'), 'error');
                    email.focus();
                }
            }
        } catch (error) {
            say(loogartFrench ? 'Connexion interrompue. Réessayez dans un instant.' : 'Couldn’t connect. Please try again in a moment.', 'error');
        } finally {
            pending = false;
            button.disabled = false;
            form.removeAttribute('aria-busy');
        }
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
        initializeNewsletterForm();
        if (typeof updateThemeToggleLabel === 'function') updateThemeToggleLabel();
    });
});
