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

function initNewWorkLightbox() {
  const grid = document.querySelector('.new-work-grid');
  if (!grid) {
    return;
  }

  const images = Array.from(grid.querySelectorAll('img.new-work-media'));
  if (!images.length) {
    return;
  }

  const lightbox = document.createElement('div');
  lightbox.className = 'new-work-lightbox';
  lightbox.setAttribute('aria-hidden', 'true');
  lightbox.innerHTML = `
    <button type="button" class="new-work-lightbox-btn new-work-lightbox-close" aria-label="Close image viewer">&times;</button>
    <button type="button" class="new-work-lightbox-btn new-work-lightbox-prev" aria-label="Previous image">&#8249;</button>
    <img class="new-work-lightbox-preview new-work-lightbox-preview-prev" src="" alt="" aria-hidden="true">
    <img class="new-work-lightbox-media" src="" alt="">
    <img class="new-work-lightbox-preview new-work-lightbox-preview-next" src="" alt="" aria-hidden="true">
    <button type="button" class="new-work-lightbox-btn new-work-lightbox-next" aria-label="Next image">&#8250;</button>
  `;
  document.body.appendChild(lightbox);

  const media = lightbox.querySelector('.new-work-lightbox-media');
  const prevPreview = lightbox.querySelector('.new-work-lightbox-preview-prev');
  const nextPreview = lightbox.querySelector('.new-work-lightbox-preview-next');
  const prevBtn = lightbox.querySelector('.new-work-lightbox-prev');
  const nextBtn = lightbox.querySelector('.new-work-lightbox-next');
  const closeBtn = lightbox.querySelector('.new-work-lightbox-close');
  let activeIndex = 0;
  let isOpen = false;
  let wheelLock = false;
  let touchStartX = 0;
  let touchStartY = 0;
  let touchInProgress = false;

  function render(index) {
    const image = images[index];
    const prevIndex = (index - 1 + images.length) % images.length;
    const nextIndex = (index + 1) % images.length;
    const prevImage = images[prevIndex];
    const nextImage = images[nextIndex];

    media.src = image.currentSrc || image.src;
    media.alt = image.alt || 'Loogart artwork';
    prevPreview.src = prevImage.currentSrc || prevImage.src;
    prevPreview.alt = prevImage.alt || 'Previous artwork';
    nextPreview.src = nextImage.currentSrc || nextImage.src;
    nextPreview.alt = nextImage.alt || 'Next artwork';
  }

  function openAt(index) {
    activeIndex = index;
    render(activeIndex);
    lightbox.classList.add('is-open');
    lightbox.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    isOpen = true;
  }

  function closeLightbox() {
    lightbox.classList.remove('is-open');
    lightbox.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    isOpen = false;
  }

  function step(offset) {
    activeIndex = (activeIndex + offset + images.length) % images.length;
    render(activeIndex);
  }

  images.forEach(function (image, index) {
    const card = image.closest('.new-work-card');
    if (card) {
      card.addEventListener('click', function (event) {
        event.preventDefault();
        openAt(index);
      });
    } else {
      image.addEventListener('click', function () {
        openAt(index);
      });
    }
  });

  prevBtn.addEventListener('click', function () {
    step(-1);
  });

  nextBtn.addEventListener('click', function () {
    step(1);
  });

  closeBtn.addEventListener('click', closeLightbox);

  lightbox.addEventListener('click', function (event) {
    if (event.target === lightbox) {
      closeLightbox();
    }
  });

  lightbox.addEventListener('wheel', function (event) {
    if (!isOpen) {
      return;
    }
    event.preventDefault();
    if (wheelLock) {
      return;
    }
    wheelLock = true;
    if (event.deltaY > 0) {
      step(1);
    } else {
      step(-1);
    }
    setTimeout(function () {
      wheelLock = false;
    }, 160);
  }, { passive: false });

  lightbox.addEventListener('touchstart', function (event) {
    if (!isOpen || event.touches.length !== 1) {
      return;
    }
    touchInProgress = true;
    touchStartX = event.touches[0].clientX;
    touchStartY = event.touches[0].clientY;
  }, { passive: true });

  lightbox.addEventListener('touchend', function (event) {
    if (!isOpen || !touchInProgress || !event.changedTouches.length) {
      return;
    }
    touchInProgress = false;
    const touch = event.changedTouches[0];
    const deltaX = touch.clientX - touchStartX;
    const deltaY = touch.clientY - touchStartY;
    const horizontalSwipe = Math.abs(deltaX) > 45 && Math.abs(deltaX) > Math.abs(deltaY);
    if (!horizontalSwipe) {
      return;
    }
    if (deltaX < 0) {
      step(1);
    } else {
      step(-1);
    }
  }, { passive: true });

  document.addEventListener('keydown', function (event) {
    if (!isOpen) {
      return;
    }
    if (event.key === 'Escape') {
      closeLightbox();
    } else if (event.key === 'ArrowLeft') {
      step(-1);
    } else if (event.key === 'ArrowRight') {
      step(1);
    }
  });
}


$(document).ready(function () {
    initNewWorkLightbox();
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
