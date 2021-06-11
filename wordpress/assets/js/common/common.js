function initFadeInUp() {
    var setElm = $(".fadeInUp");
    var delayHeight = 80;

    $(window)
        .on("scroll resize", function() {
            if (window.activeFadeInUp) {
                setElm.each(function() {
                    var setThis = $(this),
                        elmTop = setThis.offset().top,
                        elmHeight = setThis.height(),
                        scrTop = $(window).scrollTop(),
                        winHeight = $(window).height();
    
                    if (
                        scrTop > elmTop - winHeight + delayHeight &&
                        scrTop < elmTop + elmHeight
                    ) {
                        setThis.addClass("animated");
                    } else if (
                        scrTop < elmTop - winHeight + delayHeight &&
                        scrTop < elmTop + delayHeight
                    ) {
                        setThis.removeClass("animated");
                    }
                });
            }
            
            return false;
        })
        .trigger("scroll");

    setElm.each(function() {
        var setThis = $(this),
            elmTop = setThis.offset().top,
            winHeight = $(window).height();

        if (elmTop < winHeight) {
            setTimeout(function() {
                setThis.addClass("animated");
            }, 200);
        }
    });
}

function initCommon() {
    window.activeFadeInUp = true;
    if (!String.prototype.endsWith) {
        String.prototype.endsWith = function(pattern) {
            var d = this.length - pattern.length;
            return d >= 0 && this.lastIndexOf(pattern) === d;
        };
    }

    function getUrlParameter(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
        var results = regex.exec(location.search);
        return results === null
            ? ""
            : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
    window.getUrlParameter = getUrlParameter;
}

function beforePrint() {
    $(".lazy").data("plugin_lazy").loadAll();
}

function handlePrintPage() {
    window.onbeforeprint = beforePrint;
}

function initLazyLoad() {
    $(".lazy").Lazy({
        effect: 'fadeIn',
        threshold: 400
    });
}

$(document).ready(function() {
    initCommon();
    initFadeInUp();
    initLazyLoad();
    handlePrintPage();
});
