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
    }
});
//navigation animation       
$(window).scroll(function () {
    if ($(document).scrollTop() > 50) {
        $('nav').addClass('shrink');
    } else {
        $('nav').removeClass('shrink');
    }
});

// interval and custom config passed to reveal
window.sr = ScrollReveal();
sr.reveal('.appear-1', {
    duration: 500,
    delay: 100,
    origin: 'bottom',
    distance: '0px',
    opacity: 0.5,
    scale: 0.95,
    easing: 'ease-in-out',
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
