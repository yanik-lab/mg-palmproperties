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
            var offsetPercentage = 13; // Définir le pourcentage souhaité ici
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
        // const $picture = $("#logo-header picture");
        // const $img = $picture.find("img");
        const $img = $("#logo-header img");
        // const $sources = $picture.find("source");
        const $body = $("body");
        function manageHeaderOnScroll() {
            const scrollTop = $(window).scrollTop();
            if (scrollTop > 10) {
                $header.addClass("scrolled");
                // Change uniquement le logo si les classes spécifiques sont présentes
                if (
                    $body.hasClass("page-template-tmp-page") ||
                    $body.hasClass("page-template-tmp-home") ||
                    $body.hasClass("page-template-tmp-contact")
                ) {
                    // Met à jour l'image principale
                    $img.attr("src", $img.data("logo-color"));
                    $img.attr(
                        "srcset",
                        `${$img.data("logo-color")} 1x, ${$img.data(
                            "logo-color-2x"
                        )} 2x`
                    );

                    // Met à jour les balises <source>
                    // $sources.each(function () {
                    //     $(this).attr(
                    //         "srcset",
                    //         `${$img.data("logo-color-2x")}.webp 2x`
                    //     );
                    // });
                } else {
                    // Si pas les classes, charge le logo color par défaut
                    $img.attr("src", $img.data("logo-color"));
                    $img.attr(
                        "srcset",
                        `${$img.data("logo-color")} 1x, ${$img.data(
                            "logo-color-2x"
                        )} 2x`
                    );

                    // $sources.each(function () {
                    //     $(this).attr(
                    //         "srcset",
                    //         `${$img.data("logo-color-2x")}.webp 2x`
                    //     );
                    // });
                }
            } else {
                $header.removeClass("scrolled");
                // Change uniquement le logo si les classes spécifiques sont présentes
                if (
                    $body.hasClass("page-template-tmp-page") ||
                    $body.hasClass("page-template-tmp-home") ||
                    $body.hasClass("page-template-tmp-contact")
                ) {
                    // Remet l'image principale en blanc
                    $img.attr("src", $img.data("logo-white"));
                    $img.attr(
                        "srcset",
                        `${$img.data("logo-white")} 1x, ${$img.data(
                            "logo-white-2x"
                        )} 2x`
                    );

                    // Remet les balises <source> en blanc
                    // $sources.each(function () {
                    //     $(this).attr(
                    //         "srcset",
                    //         `${$img.data("logo-white-2x")}.webp 2x`
                    //     );
                    // });
                } else {
                    // Si pas les classes, charge le logo color par défaut
                    $img.attr("src", $img.data("logo-color"));
                    $img.attr(
                        "srcset",
                        `${$img.data("logo-color")} 1x, ${$img.data(
                            "logo-color-2x"
                        )} 2x`
                    );

                    // $sources.each(function () {
                    //     $(this).attr(
                    //         "srcset",
                    //         `${$img.data("logo-color-2x")}.webp 2x`
                    //     );
                    // });
                }
            }
        }
        manageHeaderOnScroll();

        function manageHeaderOnResize() {
            const hh = $header.outerHeight();
            if ($("#breadcrumb").length > 0) {
                $("#breadcrumb").css("top", hh);
            }
            // $("body").css("padding-top", hh);
            // $("#main").css("padding-top", hh);
            // $("#main section").first().css("margin-top", hh);
            // $("#mobile-menu").css("top", hh);
        }
        manageHeaderOnResize();

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
         SWIPERS
         *************
         *************/
        if ($(".mySwiper").length) {
            $(".mySwiper").each(function (index, element) {
                const swiper = new Swiper(this, {
                    slidesPerView: 1,
                    // initialSlide: 1,
                    grabCursor: true,
                    spaceBetween: 20,
                    centeredSlides: true,
                    speed: 650,
                    loop: true,
                    // lazy: true,
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
                            slidesPerView: 2.5,
                        },
                        // when window width is >= 768px
                        768: {
                            slidesPerView: 2,
                        },
                        // when window width is >= 570px
                        570: {
                            slidesPerView: 1.5,
                        },
                        // when window width is < 570px
                        0: {
                            slidesPerView: 1,
                        },
                    },
                });
            });
        }
        // if ($(".mySwiperSingle").length) {
        //     $(".mySwiperSingle").each(function (index, element) {
        //         const swiper = new Swiper(this, {
        //             slidesPerView: 1,
        //             grabCursor: true,
        //             loop: true,
        //             speed: 650,
        //             effect: "fade",
        //             keyboard: {
        //                 enabled: true,
        //             },
        //             navigation: {
        //                 nextEl: ".swiper-button-next",
        //                 prevEl: ".swiper-button-prev",
        //             },
        //         });
        //     });
        // }
        if ($(".mySwiperSingle").length) {
            $(".mySwiperSingle").each(function (index, element) {
                const swiper = new Swiper(this, {
                    slidesPerView: 1,
                    grabCursor: true,
                    loop: true,
                    speed: 650,
                    effect: "fade",
                    keyboard: {
                        enabled: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });

                // Gestion de la galerie LightGallery pour chaque Swiper
                const slides = this.querySelectorAll(".swiper-slide a");
                const dynamicEl = [];

                slides.forEach((slide) => {
                    const src = slide.getAttribute("data-src");
                    const thumb = slide.querySelector("img")?.src || "";
                    const title = slide.querySelector("img")?.alt || "";
                    const description =
                        slide.querySelector("img")?.dataset?.description || "";

                    dynamicEl.push({
                        src: src,
                        thumb: thumb,
                        // subHtml: `<h4>${title}</h4><p>${description}</p>`,
                        subHtml: "&nbsp;",
                    });
                });

                // Initialise LightGallery
                const dynamicGallery = lightGallery(
                    this.querySelector("#mySwiperContainer"),
                    {
                        dynamic: true,
                        dynamicEl: dynamicEl,
                    }
                );

                // Ouvre la galerie LightGallery au slide actif
                document
                    .getElementById("openGallery")
                    .addEventListener("click", () => {
                        const activeIndex = swiper.realIndex; // Utilise le vrai index (sans lepliement du loop)
                        dynamicGallery.openGallery(activeIndex);
                    });
            });
        }

        function sizeNavigation() {
            if ($(".mySwiper").length) {
                let maxHeight = 0;

                // Parcourir chaque image et trouver la hauteur maximale
                $(".mySwiper .swiper-slide .img-fluid").each(function () {
                    const h = $(this).outerHeight();
                    if (h > maxHeight) {
                        maxHeight = h;
                    }
                });

                // Appliquer la hauteur maximale aux boutons de navigation
                $(".mySwiper .swiper-button-prev").css("height", maxHeight);
                $(".mySwiper .swiper-button-next").css("height", maxHeight);
            }
        }
        sizeNavigation();

        /*************
         *************
         LIGHT GALLERY
         *************
         *************/
        // const lg = document.getElementById("mySwiperContainer");

        // const plugin = lightGallery(lg, {
        //     speed: 500,
        //     showZoomInOutIcons: true,
        //     actualSize: false,
        //     controls: true,
        //     selector: ".swiper-slide > a",
        //     plugins: [lgZoom],
        // // });
        // const slides = document.querySelectorAll(
        //     "#mySwiperContainer .swiper-slide a"
        // );
        // const dynamicEl = [];

        // // console.log(slides);

        // slides.forEach((slide) => {
        //     const src = slide.getAttribute("data-src"); // Récupère l'attribut data-src
        //     const thumb = slide.querySelector("img")?.src; // Récupère l'URL de la miniature (src de l'image)
        //     const title = slide.querySelector("img")?.alt || ""; // Optionnel : Utilise l'attribut alt comme titre
        //     const description =
        //         slide.querySelector("img")?.dataset?.description || ""; // Optionnel : Description (si présente)

        //     dynamicEl.push({
        //         src: src,
        //         thumb: thumb,
        //         subHtml: `<h4>${title}</h4><p>${description}</p>`,
        //     });
        // });

        // // Initialise lightGallery avec les données générées dynamiquement
        // const dynamicGallery = lightGallery(
        //     document.getElementById("mySwiperContainer"),
        //     {
        //         dynamic: true,
        //         dynamicEl: dynamicEl,
        //     }
        // );

        // // Exemple : démarre avec la 3e image (index 2)
        // document.getElementById("openGallery").addEventListener("click", () => {
        //     const activeIndex = swiper.activeIndex; // Récupère l'index du slide actif
        //     console.log(activeIndex);

        //     if (activeIndex) {
        //         dynamicGallery.openGallery(activeIndex); // Ouvre la galerie au slide actif
        //     } else {
        //         dynamicGallery.openGallery();
        //     }
        // });

        // // plugin.slide(2);

        // //  console.log($lgContainer);
        // $("#openGallery").on("click", function () {
        //     // console.log($lgContainer);
        //     console.log("tpto");
        //     // $lgContainer.openGallery(0);
        //     $("#slide-1 a").trigger("click");
        // });

        // lightGallery(document.getElementById("mySwiperContainer"));

        // $("#openGallery").on("click", () => {
        //     $("#mySwiperContainer a:first-child > img").trigger("click");
        // });

        /*************
         *************
          MENU MOBILE SYSTEM
         *************
         *************/
        var btn = $("#myburger");
        btn.on("click", function () {
            const hh = $header.outerHeight();
            // console.log(hh);
            $("#header").toggleClass("activeMobile");
            $("body").toggleClass("no-scroll");
            $("#menu-mobile .primary-menu").css("padding-top", hh * 2);
        });

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
            manageHeaderOnResize();
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
