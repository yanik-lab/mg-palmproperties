(function (root, $, undefined) {
    "use strict";
    $(document).ready(function () {
        setTimeout(function () {
            $("#loader").addClass("loaded");
            setTimeout(function () {
                reveals();
            }, 1250);
        }, 250);

        /*************
         *************
          VIEWPORT CHECKER
         *************
         *************/
        $.fn.isOnScreen = function () {
            var offsetPercentage = 20; // Définir le pourcentage souhaité ici
            var win = $(window);
            var viewport = {
                top: win.scrollTop(),
            };
            viewport.bottom = viewport.top + win.height();
            var bounds = this.offset();
            bounds.bottom = bounds.top + this.outerHeight();

            // Calculate the percentage of the element in the viewport
            var visiblePercent = Math.min(
                100,
                (100 *
                    (Math.min(viewport.bottom, bounds.bottom) -
                        Math.max(viewport.top, bounds.top))) /
                    this.outerHeight()
            );

            // Check if the percentage of the element in the viewport meets the offset percentage
            return visiblePercent >= offsetPercentage;
        };

        /*************
         *************
         DEBUG RESOLUTION
         *************
         *************/
        function debug() {
            var width = $(window).width();
            var height = $(window).height();
            $("#debug").html("<span>" + width + " * " + height + "</span>");
        }
        debug();

        /*************
         *************
         REVEAL
         *************
         *************/
        function reveals() {
            $(".reveal").each(function () {
                if ($(this).isOnScreen()) {
                    setTimeout(() => {
                        $(this).addClass("loaded");
                    }, 50);
                } else {
                    setTimeout(() => {
                        $(this).removeClass("loaded");
                    }, 50);
                }
            });
        }

        /*************
         *************
         SCROLL PIN HEADER
         *************
         *************/
        const $header = $("#header");
        const $logo = $("#logo-header img");
        function manageHeaderOnScroll() {
            const scrollTop = $(window).scrollTop();
            if (scrollTop > 10) {
                $header.addClass("scrolled");
                $logo.attr("src", $logo.data("logo-color")); // Logo coloré standard
                $logo.attr(
                    "srcset",
                    `${$logo.data("logo-color")} 1x, ${$logo.data(
                        "logo-color-2x"
                    )} 2x`
                ); // Logo coloré Retina
            } else {
                $header.removeClass("scrolled");
                $logo.attr("src", $logo.data("logo-white")); // Logo blanc standard
                $logo.attr(
                    "srcset",
                    `${$logo.data("logo-white")} 1x, ${$logo.data(
                        "logo-white-2x"
                    )} 2x`
                ); // Logo blanc Retina
            }
        }
        manageHeaderOnScroll();

        function manageHeaderOnResize() {
            const hh = $header.outerHeight();
            // $("body").css("padding-top", hh);
            // $("#main").css("padding-top", hh);
            // $("#main section").first().css("margin-top", hh);
            // $("#mobile-menu").css("top", hh);
        }
        // manageHeaderOnResize();

        /*************
         *************
         SAME HEIGHT
         *************
         *************/
        function sameHeight() {
            $(".sameHeightContainer").each(function () {
                var highestBox = 0;
                $(".sameHeight", this).each(function () {
                    if ($(this).height() > highestBox) {
                        highestBox = $(this).height();
                    }
                });
                $(".sameHeight", this).height(highestBox);
            });
        }
        sameHeight();

        /*************
         *************
         MENU / SUBMENU / MENU MOBILE
         *************
         *************/
        // $(document).on("click", function (e) {
        //     if (!$(e.target).closest(".menu-item-has-children").length) {
        //         $(".menu-item-has-children").removeClass("active");
        //         $(".sub-menu").removeClass("active");
        //     }
        // });
        // $(".menu-item-has-children > a").click(function (e) {
        //     e.preventDefault();
        //     var $parentMenuItem = $(this).parent();
        //     $(".menu-item-has-children")
        //         .not($parentMenuItem)
        //         .removeClass("active");
        //     $(".sub-menu")
        //         .not($parentMenuItem.find(".sub-menu"))
        //         .removeClass("active");
        //     $parentMenuItem
        //         .toggleClass("active")
        //         .find(".sub-menu")
        //         .toggleClass("active");
        // });

        /*************
         *************
         SWIPER
         *************
         *************/
        if ($(".mySwiper").length) {
            $(".mySwiper").each(function (index, element) {
                const swiper = new Swiper(this, {
                    slidesPerView: 1,
                    // initialSlide: 1,
                    spaceBetween: 20,
                    centeredSlides: true,
                    speed: 650,
                    loop: true,
                    keyboard: {
                        enabled: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    scrollbar: {
                        el: ".swiper-scrollbar",
                        hide: false,
                        draggable: false,
                    },
                    breakpoints: {
                        // when window width is >= 992px
                        992: {
                            slidesPerView: 2,
                        },
                        // when window width is >= 570px
                        570: {
                            slidesPerView: 1,
                        },
                        // when window width is < 570px
                        0: {
                            slidesPerView: 1,
                        },
                    },
                });
            });
        }
        function sizeNavigation() {
            if ($(".mySwiper").length) {
                const hslide = $(".swiper-slide img").outerHeight();
                $(".swiper-button-prev").css("height", hslide);
                $(".swiper-button-next").css("height", hslide);
            }
        }
        sizeNavigation();

        /*************
         *************
          MENU MOBILE SYSTEM
         *************
         *************/
        // var btn = $("#myburger");
        // btn.on("click", function () {
        //     const hh = $header.outerHeight();
        //     console.log(hh);
        //     $("#header").toggleClass("activeMobile");
        //     $("body").toggleClass("no-scroll");
        //     $("#header .primary-menu").css("padding-top", hh / 2);
        // });

        /*************
         *************
        HOVER BLOC
         *************
         *************/
        document.querySelectorAll(".bgLink").forEach((link) => {
            const bottom = link.querySelector(".bottom");
            link.addEventListener("mouseenter", () => {
                bottom.style.maxHeight = `${bottom.scrollHeight}px`;
            });
            link.addEventListener("mouseleave", () => {
                bottom.style.maxHeight = "0px";
            });
        });

        /*************
         *************
         ON RESIZE
         *************
         *************/
        $(window).on("resize", function () {
            debug();
            reveals();
            sameHeight();
            sizeNavigation();
            // manageHeaderOnResize();
        });

        /*************
         *************
         ON SCROLL
         *************
         *************/
        $(window).scroll(function () {
            manageHeaderOnScroll();
            reveals();
        });
    });
})(this, jQuery);
