$(document).ready(function() {
    $('#top-booking .js-top-menu, #top-booking .js-sub-menu').on('click', function() {
        var itemHref = $(this).data('href');
        $('html, body').animate({
            scrollTop: $(itemHref).offset().top - 180
        }, 800);
    });    
});
