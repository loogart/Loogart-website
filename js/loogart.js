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

//parallax
$('.project-montreal-cityline-img').parallax();

//flickity
$('.main-carousel').flickity({
    // options
    cellAlign: 'left',
    contain: true
});