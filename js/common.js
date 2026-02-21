// common.js

function loadHTMLFragment(file, elementIdOptions) {
    const container = elementIdOptions
        .map(function (id) { return document.getElementById(id); })
        .find(Boolean);
    if (!container) {
        return Promise.resolve();
    }
    return fetch(file)
        .then(function (response) { return response.text(); })
        .then(function (data) {
            container.innerHTML = data;
        })
        .catch(function (error) {
            console.error('Error loading HTML:', error);
        });
}

// Load navbar from shared partial to avoid stale duplicate markup.
function loadNavbar() {
    return loadHTMLFragment('html/navbar.html', ['header-placeholder', 'navbar']);
}

// Load footer from shared partial to avoid stale duplicate markup.
function loadFooter() {
    return loadHTMLFragment('html/footer.html', ['footer-placeholder', 'footer']);
}

function updateFooterYear() {
    const currentYear = String(new Date().getFullYear());
    const yearElements = document.querySelectorAll('#current-year, [data-current-year]');
    yearElements.forEach(function (element) {
        element.textContent = currentYear;
    });
}

// Call the functions when the page loads
window.addEventListener('load', function() {
    loadNavbar();
    loadFooter();
    updateFooterYear();
});
