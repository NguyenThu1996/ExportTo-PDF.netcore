//IE9+ support Element.matches()
if (!Element.prototype.matches) {
    Element.prototype.matches =
        Element.prototype.msMatchesSelector ||
        Element.prototype.webkitMatchesSelector;
}

function initGoToTop() {
    var pageTopButton = $("#pageTop");
    var contactButton = $("#btnContact");
    $(window).on("scroll", function() {
        if ($(this).scrollTop() > 50) {
            $(pageTopButton).fadeIn();
            $(contactButton).fadeIn();
        } else {
            $(pageTopButton).fadeOut();
            $(contactButton).fadeOut();
        }
    });

    $(pageTopButton).click(function() {
        $("html, body").animate({ scrollTop: 0 }, 1000);
    });
}

function initSlider() {
    $("#slider").slick({
        fade: true,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: true,
        speed: 3000,
        pauseOnHover: false,
        pauseOnDotsHover: false,
        pauseOnFocus: false,
        infinite: true
    });

    $(".slide-container").css("top", $(".site-header").outerHeight());
    $(".top-main-container").css("margin-top", $("#slider").outerHeight() + $(".site-header").outerHeight());

    if (window.matchMedia("(max-width: 991px)").matches) {
        $(".slide-content-container").css(
            "top",
            $(".site-header").outerHeight()
        );
        $(".slick-dots").css("bottom", $(".slide-content").outerHeight());
    }

    $(window).on("scroll", function() {
        if ($(window).scrollTop() > $("#slider").height()) {
            $(".slide-container").css("opacity", 0);
        } else {
            $(".slide-container").css("opacity", 1);
        }
    });

    var slideEffects = ["slick-now1", "slick-now2", "slick-now3", "slick-now4"];
    var currentSlideEffect = slideEffects[0];
    var nextSlideEffect;
    $("#slider").on("beforeChange", function(
        event,
        slick,
        currentSlide,
        nextSlide
    ) {
        let currentSlideElement = [currentSlide]
            .map(n => `[data-slick-index="${n}"]`)
            .join(", ");
        let nextSlideElement = [nextSlide]
            .map(n => `[data-slick-index="${n}"]`)
            .join(", ");

        do {
            nextSlideEffect =
                slideEffects[Math.floor(Math.random() * slideEffects.length)];
        } while (currentSlideEffect == nextSlideEffect);

        $(nextSlideElement).addClass(nextSlideEffect);

        setTimeout(function() {
            $(currentSlideElement).removeClass(currentSlideEffect);
            currentSlideEffect = nextSlideEffect;
        }, 4000);
    });
}

$(document).ready(function() {
    initGoToTop();

    if (isHomePage) {
        initSlider();
    }
});
