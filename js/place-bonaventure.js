(function () {
  var scroller = document.querySelector('[data-place-bonaventure-scroll]');
  if (!scroller) {
    return;
  }

  var direction = 1;
  var speedPxPerSecond = 38;
  var resumeDelayMs = 1800;
  var lastFrameTime = 0;
  var lastManualTime = 0;
  var rafId = null;
  var programmaticScrollUntil = 0;
  var isDragging = false;
  var dragStartX = 0;
  var dragStartScrollLeft = 0;

  function updateNavbarHeightVar() {
    var navbar = document.querySelector('nav.navbar');
    var height = navbar ? navbar.offsetHeight : (window.innerWidth <= 767 ? 72 : 82);
    document.documentElement.style.setProperty('--pb-navbar-height', height + 'px');
  }

  function maxScrollLeft() {
    return Math.max(0, scroller.scrollWidth - scroller.clientWidth);
  }

  function markManualControl() {
    lastManualTime = performance.now();
  }

  function markProgrammaticScrollWindow() {
    programmaticScrollUntil = performance.now() + 120;
  }

  function isProgrammaticScrollActive() {
    return performance.now() < programmaticScrollUntil;
  }

  function setDirectionFromPosition() {
    var max = maxScrollLeft();
    if (max <= 0) {
      direction = 1;
      return;
    }
    if (scroller.scrollLeft <= 0.5) {
      direction = 1;
      return;
    }
    if (scroller.scrollLeft >= max - 0.5) {
      direction = -1;
    }
  }

  function animate(ts) {
    if (!lastFrameTime) {
      lastFrameTime = ts;
    }
    var deltaSeconds = (ts - lastFrameTime) / 1000;
    lastFrameTime = ts;

    var max = maxScrollLeft();
    if (max > 0 && ts - lastManualTime > resumeDelayMs) {
      var next = scroller.scrollLeft + (direction * speedPxPerSecond * deltaSeconds);
      if (next >= max) {
        next = max;
        direction = -1;
      } else if (next <= 0) {
        next = 0;
        direction = 1;
      }
      markProgrammaticScrollWindow();
      scroller.scrollLeft = next;
    }

    rafId = window.requestAnimationFrame(animate);
  }

  function onPointerDown(event) {
    if (event.pointerType && event.pointerType !== 'mouse') {
      return;
    }
    if (event.pointerType === 'mouse' && event.button !== 0) {
      return;
    }
    isDragging = true;
    dragStartX = event.clientX;
    dragStartScrollLeft = scroller.scrollLeft;
    scroller.classList.add('is-dragging');
    scroller.setPointerCapture(event.pointerId);
    markManualControl();
  }

  function onPointerMove(event) {
    if (!isDragging) {
      return;
    }
    var dx = event.clientX - dragStartX;
    scroller.scrollLeft = dragStartScrollLeft - dx;
    markManualControl();
    setDirectionFromPosition();
  }

  function endPointerDrag(event) {
    if (!isDragging) {
      return;
    }
    isDragging = false;
    scroller.classList.remove('is-dragging');
    if (typeof event.pointerId === 'number' && scroller.hasPointerCapture(event.pointerId)) {
      scroller.releasePointerCapture(event.pointerId);
    }
    setDirectionFromPosition();
  }

  function bindNavbarObserver() {
    updateNavbarHeightVar();

    var header = document.getElementById('header-placeholder');
    if (!header || !('MutationObserver' in window)) {
      return;
    }

    var observer = new MutationObserver(function () {
      updateNavbarHeightVar();
    });
    observer.observe(header, { childList: true, subtree: true });

    if ('ResizeObserver' in window) {
      var resizeObserver = new ResizeObserver(function () {
        updateNavbarHeightVar();
      });
      resizeObserver.observe(header);
    }
  }

  scroller.addEventListener('scroll', function () {
    if (isProgrammaticScrollActive()) {
      return;
    }
    markManualControl();
    setDirectionFromPosition();
  }, { passive: true });

  scroller.addEventListener('wheel', function () {
    markManualControl();
    setDirectionFromPosition();
  }, { passive: true });

  scroller.addEventListener('touchstart', markManualControl, { passive: true });
  scroller.addEventListener('pointerdown', onPointerDown);
  scroller.addEventListener('pointermove', onPointerMove);
  scroller.addEventListener('pointerup', endPointerDrag);
  scroller.addEventListener('pointercancel', endPointerDrag);
  window.addEventListener('resize', updateNavbarHeightVar);
  window.addEventListener('orientationchange', updateNavbarHeightVar);
  window.addEventListener('beforeunload', function () {
    if (rafId) {
      window.cancelAnimationFrame(rafId);
      rafId = null;
    }
  });

  bindNavbarObserver();
  markManualControl();
  setDirectionFromPosition();
  rafId = window.requestAnimationFrame(animate);
})();
