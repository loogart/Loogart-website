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
    imagesLoaded: true
});

$('.ets-carousel').flickity({
    // options
    cellAlign: 'center',
    contain: true,
    accessibility: true,
    pageDots: false,
    imagesLoaded: true
});

