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

//atvImg activator
atvImg();