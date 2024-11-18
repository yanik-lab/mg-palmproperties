<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <section class="section-header fullxl bgGreen bgResponsive bgFixed" style="background-image:url('<?php bloginfo('template_url'); ?>/images/bg/home-1.jpg');">
        <div class="special">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-22">
                        <div class="reveal revealFB reveal1">
                            <h1>
                                L'excellence immobilière, <br>
                                l'attention humaine.
                            </h1>
                            <div class="buttons">
                                <a href="<?php echo get_the_permalink(22); ?>" class="btn btn-basic btn-beige">
                                    Nos biens à la vente
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-team bgGreen">
        <div class="row g-0 d-flex">
            <div class="col-lg-6">
                <div class="reveal revealFB reveal1">
                    <div class="reveal revealIMG reveal2">
                        <img src='<?php bloginfo('template_url'); ?>/images/temp/team-1.jpg' alt='' srcset='<?php bloginfo('template_url'); ?>/images/temp/team-1.jpg@2x 2x' class='img-fluid w-100' loading='lazy'>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 compense">
                <div class="reveal revealFB reveal2">
                    <div class="reveal revealIMG reveal3">
                        <img src='<?php bloginfo('template_url'); ?>/images/temp/team-2.jpg' alt='' srcset='<?php bloginfo('template_url'); ?>/images/temp/team-2.jpg@2x 2x' class='img-fluid w-100' loading='lazy'>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-2 d-flex align-items-center">
                <div class="reveal revealFR reveal4">
                    <h3>
                        Votre tandem idéal : <br>
                        entre agence immobilière et conciergerie de luxe
                    </h3>
                    <p>Bienvenue chez MG Palm Properties, où l'expertise immobilière rencontre l'attention personnalisée. Nous ne sommes pas qu'une simple agence immobilière, nous sommes votre allié dans la réalisation de projets immobiliers&nbsp;d'exception.</p>
                    <div class="buttons">
                        <a href="<?php echo get_the_permalink(20); ?>" class="btn btn-basic btn-beige" title="<?php echo get_the_title(20); ?>">
                            <?php echo get_the_title(20); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-carousel standard first last bgWhite">
        <div class="container-fluid">
            <div class="row">
                <div class="col-24 text-center introduction">
                    <div class="reveal revealFB reveal1">
                        <i class="ico pictofavicon"></i>
                    </div>
                    <div class="reveal revealFB reveal2">
                        <h2>Notre sélection de propriétés</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-24">
                <!-- Slider main container -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src='<?php bloginfo('template_url'); ?>/images/bg/home-1.jpg' alt='' class='img-fluid' loading='lazy'>
                            <div class="baseline">
                                <h6>
                                    <span><b>VILLA LORRAINE</b></span>
                                    <span>7 chambres</span>
                                    <span>400m<sup>2</sup></span>
                                    <span>Vence</span>
                                </h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src='<?php bloginfo('template_url'); ?>/images/bg/home-1.jpg' alt='' class='img-fluid' loading='lazy'>
                            <div class="baseline">
                                <h6>
                                    <span><b>VILLA LORRAINE</b></span>
                                    <span>7 chambres</span>
                                    <span>400m<sup>2</sup></span>
                                    <span>Vence</span>
                                </h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src='<?php bloginfo('template_url'); ?>/images/bg/home-1.jpg' alt='' class='img-fluid' loading='lazy'>
                            <div class="baseline">
                                <h6>
                                    <span><b>VILLA LORRAINE</b></span>
                                    <span>7 chambres</span>
                                    <span>400m<sup>2</sup></span>
                                    <span>Vence</span>
                                </h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src='<?php bloginfo('template_url'); ?>/images/bg/home-1.jpg' alt='' class='img-fluid' loading='lazy'>
                            <div class="swiper-lazy-preloader"></div>
                            <div class="baseline">
                                <h6>
                                    <span><b>VILLA LORRAINE</b></span>
                                    <span>7 chambres</span>
                                    <span>400m<sup>2</sup></span>
                                    <span>Vence</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-scrollbar"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="buttons bigger center">
                    <a href="<?php echo get_the_permalink(22); ?>" class="btn btn-basic btn-dark" title="<?php _e('Découvrez tous nos biens', 'mgpalmproperties'); ?>">
                        <?php _e('Découvrez tous nos biens', 'mgpalmproperties'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-luxe standard firstxl lastxl bgGreen">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 d-flex align-items-center">
                    <div class="reveal revealFL reveal4">
                        <h3>
                            Vous offrir une <br>
                            expérience luxe simplifiée
                        </h3>
                        <p>Notre mission dépasse la simple transaction. Nous nous engageons à vous offrir une expérience de luxe simplifiée, où chaque détail&nbsp;compte.</p>
                        <div class="buttons">
                            <a href="<?php echo get_the_permalink(16); ?>" class="btn btn-basic btn-beige" title="<?php echo get_the_title(16); ?>">
                                <?php echo get_the_title(16); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 compenseTop">
                    <div class="reveal revealFB reveal1">
                        <div class="reveal revealIMG reveal2 position-relative">
                            <img src='<?php bloginfo('template_url'); ?>/images/temp/image-1.jpg' alt='' srcset='<?php bloginfo('template_url'); ?>/images/temp/image-1.jpg@2x 2x' class='img-fluid w-100' loading='lazy'>
                            <div class="contentHover">
                                <div class="reveal revealFB reveal4">
                                    <i class="ico pictotransition-immo"></i>
                                    <h4>Transaction <br>immobilière</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 compenseBottom">
                    <div class="reveal revealFB reveal2">
                        <div class="reveal revealIMG reveal3 position-relative">
                            <img src='<?php bloginfo('template_url'); ?>/images/temp/image-2.jpg' alt='' srcset='<?php bloginfo('template_url'); ?>/images/temp/image-2.jpg@2x 2x' class='img-fluid w-100' loading='lazy'>
                            <div class="contentHover">
                                <div class="reveal revealFB reveal5">
                                    <i class="ico pictobien"></i>
                                    <h4>Recherche de biens<br>prestigieux</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-experience full bgGreen bgResponsive bgFixed" style="background-image:url('<?php bloginfo('template_url'); ?>/images/bg/home-1.jpg');">
        <div class="container-fluid h-100">
            <div class="row align-items-center justify-content-start h-100">
                <div class="col-lg-8 offset-lg-12">
                    <div class="reveal revealFB reveal1">
                        <h2>
                            L'expérience <br>
                            MG Palm Properties
                        </h2>
                        <p>
                            Découvrez une nouvelle approche du service immobilier, alliant l’excellence d’une conciergerie de luxe et l’attention humaine d’une agence à taille humaine. Nous orchestrons chaque détail pour que votre projet soit une réussite, dans un cadre de confiance et de personnalisation unique.
                        </p>
                        <div class="buttons">
                            <a href="<?php echo get_the_permalink(18); ?>" class="btn btn-basic btn-beige" title="<?php echo get_the_title(18); ?>">
                                <?php echo get_the_title(18); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-carousel standard first noPB bgWhite">
        <div class="container-fluid">
            <div class="row">
                <div class="col-24 text-center introduction">
                    <div class="reveal revealFB reveal1">
                        <i class="ico pictofavicon"></i>
                    </div>
                    <div class="reveal revealFB reveal2">
                        <h2 class="mb-5">
                            Quand l’expertise immobilière rencontre <br>
                            l’attention personnalisée
                        </h2>
                    </div>
                    <div class="reveal revealFB reveal3">
                        <p>
                            Choisir MG Palm Properties, c’est opter pour un partenaire unique et <br>
                            privilégié dans la vente de votre bien immobilier de luxe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-8 colFull position-relative">
                <div class="reveal revealFB reveal1 w-100 h-100">
                    <div class="reveal revealIMG reveal2 w-100 h-100 bgLink">
                        <img src='<?php bloginfo('template_url'); ?>/images/temp/image-3.jpg' alt='' srcset='<?php bloginfo('template_url'); ?>/images/temp/image-3.jpg 2x' class='img-fluid imgResponsive imgAbsolute' loading='lazy'>
                        <div class="wContent w-100 h-100">
                            <div class="reveal revealFB reveal2 position-relative z-1 w-100 h-100">
                                <div class="content w-100 h-100">
                                    <div>
                                        <h5 class="text-uppercase mb-0">
                                            Un duo d’experts <br> dévoués
                                        </h5>
                                        <div class="bottom">
                                            <p>
                                                Velit sit esse magna sunt mollit in incididunt aliqua consequat pariatur velit et pariatur. Consequat sunt commodo excepteur nisi nulla aliquip fugiat do enim ullamco.
                                            </p>
                                            <a href="#" class="stretched-link btn btn-link btn-icon">
                                                <span>En savoir plus </span>
                                                <i class="ico pictoarrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 colFull position-relative">
                <div class="reveal revealFB reveal2 w-100 h-100">
                    <div class="reveal revealIMG reveal3 w-100 h-100 bgLink">
                        <img src='<?php bloginfo('template_url'); ?>/images/temp/image-4.jpg' alt='' srcset='<?php bloginfo('template_url'); ?>/images/temp/image-4.jpg 2x' class='img-fluid imgResponsive imgAbsolute' loading='lazy'>
                        <div class="wContent w-100 h-100">
                            <div class="reveal revealFB reveal3 position-relative z-1 w-100 h-100">
                                <div class="content w-100 h-100">
                                    <div>
                                        <h5 class="text-uppercase mb-0">
                                            un Service exclusif <br> et réactif
                                        </h5>
                                        <div class="bottom">
                                            <p>
                                                Pariatur est nisi elit nostrud in dolore nulla et officia dolore aliquip elit nisi. Incididunt id nulla veniam cillum id pariatur cillum velit ex officia aute.
                                            </p>
                                            <a href="#" class="stretched-link btn btn-link btn-icon">
                                                <span>En savoir plus </span>
                                                <i class="ico pictoarrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 colFull position-relative">
                <div class="reveal revealFB reveal3 w-100 h-100">
                    <div class="reveal revealIMG reveal4 w-100 h-100 bgLink">
                        <img src='<?php bloginfo('template_url'); ?>/images/temp/image-5.jpg' alt='' srcset='<?php bloginfo('template_url'); ?>/images/temp/image-5.jpg 2x' class='img-fluid imgResponsive imgAbsolute' loading='lazy'>
                        <div class="wContent w-100 h-100">
                            <div class="reveal revealFB reveal4 position-relative z-1 w-100 h-100">
                                <div class="content w-100 h-100">
                                    <div>
                                        <h5 class="text-uppercase mb-0">
                                            une Promotion <br> haut de gamme
                                        </h5>
                                        <div class="bottom">
                                            <p>
                                                Pariatur labore voluptate consectetur laborum mollit. Nulla minim occaecat Lorem est cupidatat.
                                            </p>
                                            <a href="https://google.fr" class="stretched-link btn btn-link btn-icon">
                                                <span>En savoir plus </span>
                                                <i class="ico pictoarrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-contact standard first last bgWhite">
        <div class="container-fluid bgSection">
            <div class="row">
                <div class="col-24 text-center introduction">
                    <div class="reveal revealFB reveal1 mb-5">
                        <img src='<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-small-light.png' alt='<?php echo bloginfo('title'); ?> - <?php echo bloginfo('description'); ?>' srcset='<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-small-light@2x.png 2x' class='img-fluid' loading='lazy'>
                    </div>
                    <div class="reveal revealFB reveal2">
                        <h2 class="mb-5">
                            Prêts à concrétiser <br>
                            votre projet immobilier de luxe <br>
                            sur la Côte d'Azur ?
                        </h2>
                    </div>
                    <div class="reveal revealFB reveal3">
                        <div class="buttons center">
                            <a href="#" class="btn btn-basic btn-dark btn-icon">
                                <i class="ico pictophone"></i>
                                <span>Nous contacter</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>