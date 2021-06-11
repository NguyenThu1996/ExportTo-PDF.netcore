$(document).ready(function () {
    var id = getUrlParameter("title");
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
});