// header js
function handleMobileNav() {
    let hamburger = {
        nav: document.querySelector("#mobile-nav"),
        navToggle: document.querySelector(".nav-toggle"),

        initialize() {
            this.navToggle.addEventListener("click", () => {
                this.toggle();
            });
        },

        toggle() {
            this.navToggle.classList.toggle("expanded");
            this.nav.classList.toggle("expanded");

            // prevent body content scroll on scroll menu
            document.querySelector('body').classList.toggle('no-scroll');
        }
    };

    hamburger.initialize();

    // Collapsible Menu
    if (window.matchMedia("(max-width: 991px)").matches) {
        $(".primary-menu > .menu-item > .nav-link").on("click", function() {
            $(this).toggleClass("expanded");
            if ($(this).hasClass("menu-item-expanded")) {
                setTimeout(() => {
                    $(this).removeClass("menu-item-expanded");
                }, 200);
            } else {
                $(this).addClass("menu-item-expanded");
            }

            if (
                $(this)
                    .closest(".menu-item")
                    .find("> .sub-menu")
                    .css("max-height") > "0px"
            ) {
                $(this)
                    .closest(".menu-item")
                    .find("> .sub-menu")
                    .css("max-height", "0px");
            } else {
                var maxHeightItem = $(this)
                    .closest(".menu-item")
                    .find("> .sub-menu")[0]
                    ? $(this)
                          .closest(".menu-item")
                          .find("> .sub-menu")[0].scrollHeight
                    : 0;

                $(this)
                    .closest(".menu-item")
                    .find("> .sub-menu")
                    .css("max-height", maxHeightItem);

            }

            setTimeout(() => {
                $(".primary-menu > .menu-item > .nav-link")
                    .not(this)
                    .removeClass("menu-item-expanded");
            }, 200);

            $(".primary-menu > .menu-item > .nav-link")
                .not(this)
                .removeClass("expanded");
            $(".primary-menu > .menu-item > .nav-link")
                .not(this)
                .closest(".menu-item")
                .find("> .sub-menu")
                .css("max-height", 0);
        });

        $(".mobile-nav-content").css("top", $(".site-header").outerHeight());
        $(".mobile-nav-content").css("height", `calc(100vh - ${$(".site-header").outerHeight()}px)`);
    }

    $(".main-container").css("margin-top", $(".site-header").outerHeight());

    // Language Menu
    $(".top-lang-button").on("click", function() {
        $(".top-lang-selectbox").toggleClass("show");
    });

    $(document).mouseup(function(e) {
        var container = $(".top-lang");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".top-lang-selectbox").removeClass("show");
        }
    });
}

function handleChangeLanguage() {
    $(document).on("click", ".top-lang .top-lang__item", function(e) {
        e.preventDefault();

        var languageCode = $(this).data("lang") || "";
        $.ajax({
            url: adminAjaxUrl,
            type: "post",
            dataType: "json",
            data: {
                action: "change_language",
                lang: languageCode,
                url: location.protocol + '//' + location.host + (location.pathname.endsWith('/') ? location.pathname : location.pathname + '/')
            },
            success: function(response) {
                if (response && response.success) {
                    window.location = response.data;
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {}
        });
    });
}

$(document).ready(function() {
    handleMobileNav();
    handleChangeLanguage();
});
