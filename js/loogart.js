const THEME_STORAGE_KEY = 'loogart-theme';
const systemDarkTheme = window.matchMedia('(prefers-color-scheme: dark)');

function getInitialTheme() {
  const savedTheme = localStorage.getItem(THEME_STORAGE_KEY);
  if (savedTheme === 'light' || savedTheme === 'dark') {
    return savedTheme;
  }
  return systemDarkTheme.matches ? 'dark' : 'light';
}

function applyTheme(theme) {
  document.documentElement.setAttribute('data-theme', theme);
}

function updateThemeToggleLabel() {
  const themeToggle = document.getElementById('theme-toggle');
  if (!themeToggle) {
    return;
  }
  const activeTheme = document.documentElement.getAttribute('data-theme') || 'light';
  const shouldSwitchToDark = activeTheme !== 'dark';
  themeToggle.textContent = shouldSwitchToDark ? 'Dark mode' : 'Light mode';
  themeToggle.setAttribute(
    'aria-label',
    shouldSwitchToDark ? 'Switch to dark mode' : 'Switch to light mode'
  );
}

function toggleTheme() {
  const activeTheme = document.documentElement.getAttribute('data-theme') || 'light';
  const nextTheme = activeTheme === 'dark' ? 'light' : 'dark';
  applyTheme(nextTheme);
  localStorage.setItem(THEME_STORAGE_KEY, nextTheme);
  updateThemeToggleLabel();
}

applyTheme(getInitialTheme());

// Function to load HTML file content
function loadHTML(file, element) {
  return fetch(file)
    .then(response => response.text())
    .then(data => {
      document.querySelector(element).innerHTML = data;
    })
    .catch(error => console.error('Error loading HTML:', error));
}

// Load header and footer
loadHTML('html/navbar.html', '#header-placeholder').then(() => {
  updateThemeToggleLabel();
});
loadHTML('html/footer.html', '#footer-placeholder');

document.addEventListener('click', function (event) {
  const themeToggle = event.target.closest('#theme-toggle');
  if (!themeToggle) {
    return;
  }
  toggleTheme();
});

if (typeof systemDarkTheme.addEventListener === 'function') {
  systemDarkTheme.addEventListener('change', function (event) {
    if (localStorage.getItem(THEME_STORAGE_KEY)) {
      return;
    }
    applyTheme(event.matches ? 'dark' : 'light');
    updateThemeToggleLabel();
  });
}


$(document).ready(function () {
    //flickity
    $('.montreal-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        accessibility: true,
        imagesLoaded: true
    });
    $('.sb-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        accessibility: true,
        pageDots: false,
        imagesLoaded: true
    });
    $('.ets-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        accessibility: true,
        pageDots: false,
        imagesLoaded: true
    });

    $('.upa-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        accessibility: true,
        pageDots: false,
        imagesLoaded: true
    });
    var loc = window.location.href; // returns the full URL
    if (/about/.test(loc)) {
        $("#aboutPage").addClass("active");
    } else if (/contact/.test(loc)) {
        $("#contactPage").addClass("active");
    } else if (/shop/.test(loc)) {
        $("#shopPage").addClass("active");
    }
});

// interval and custom config passed to reveal
window.sr = ScrollReveal();
sr.reveal('.appear-1', {
    duration: 1000,
    delay: 0,
    origin: 'bottom',
    distance: '69px',
    opacity: 0,
    scale: 1,
    easing: 'ease-out',
    mobile: true,
    reset: false,
    useDelay: 'onload',
    viewFactor: 0.3
}, 250);
sr.reveal('.appear-2', {
    duration: 500,
    delay: 0,
    origin: 'bottom',
    distance: '0px',
    opacity: 0,
    scale: 0.9,
    easing: 'ease-in-out',
    mobile: true,
    reset: false,
    useDelay: 'onload',
    viewFactor: 0.2
}, 250);
