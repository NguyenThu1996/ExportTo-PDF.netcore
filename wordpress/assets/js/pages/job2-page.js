$(document).ready(function () {
    var id = getUrlParameter("id");

    if (id) {
        $('.fadeInUp').addClass('animated');
        window.activeFadeInUp = false;
        setTimeout(function() {
            $('html, body').animate({
                scrollTop: $('#' + id).offset().top - $('.site-header').outerHeight() - 100
            }, 900);
        }, 300);

        setTimeout(function() {
            window.activeFadeInUp = true;
        }, 1000);
    }

    $('.top-job-introduce__item').on('click', function () {
        var itemId = $(this).data('id');

        $('.fadeInUp').addClass('animated');
        window.activeFadeInUp = false;

        setTimeout(function() {
            $('html, body').animate({
                scrollTop: $('#' + itemId).offset().top - $('.site-header').outerHeight() - 100
            }, 900);
        }, 300);

        setTimeout(function() {
            window.activeFadeInUp = true;
        }, 1000);
    });

    $('.top-job-navigate').on('click', function () {
        $('.fadeInUp').addClass('animated');
        window.activeFadeInUp = false;

        $('html, body').animate({
            scrollTop: $('#topJobIntroduce').offset().top - $('.site-header').outerHeight() - 50
        }, 900);

        setTimeout(function() {
            window.activeFadeInUp = true;
        }, 1000);
    });
});