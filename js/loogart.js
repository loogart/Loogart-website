//navigation animation       
$(window).scroll(function () {
    if ($(document).scrollTop() > 50) {
        $('nav').addClass('shrink');
    } else {
        $('nav').removeClass('shrink');
    }
});

//lazy load
$(function () {
    $("img.img-responsive").lazyload({
        effect: "fadeIn"
    });
});

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

$(document).ready(function () {
    var loc = window.location.href; // returns the full URL
    if (/about/.test(loc)) {
        $("#aboutPage").addClass("active");
    } else if (/contact/.test(loc)) {
        $("#contactPage").addClass("active");
    }
});


// interval and custom config passed to reveal
window.sr = ScrollReveal();
sr.reveal('.appear-1', {
    duration: 1000,
    delay: 150,
    origin: 'bottom',
    distance: '150px',
    opacity: 0,
    scale: 0.95,
    easing: 'ease-in-out',
    mobile: true,
    reset: false,
    useDelay: 'onload',
    viewFactor: 0.5
}, 250);

