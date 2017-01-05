        $(window).scroll(function () {
            if ($(document).scrollTop() > 50) {
                $('nav').addClass('shrink');
            } else {
                $('nav').removeClass('shrink');
            }
        });

$('.project-1-starbucks').parallaxScroll({
  friction: 0.4
});