<?php
/*
Template Name: Soon
*/
?>
<?php get_header(); ?>

<section class="standard firstxl last bgWhite">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-10 text-center introduction">
                <div class="reveal revealFB reveal1">
                    <i class="ico pictofavicon"></i>
                </div>
                <div class="reveal revealFB reveal2">
                    <h1><?php _e("Bientôt disponible", "mgpalmproperties"); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-24 text-center introduction">
            <div class="reveal revealFB reveal2">
                <p>
                    <?php _e("La traduction n'est pas encore disponible, <br> veuillez revenir plus tard", "mgpalmproperties"); ?>
                </p>
                <div class="buttons">
                    <a href="<?php echo get_the_permalink(14); ?>" class="btn btn-basic btn-dark"
                        title="<?php bloginfo('title'); ?>">
                        <span><?php _e("Retour à la version française", "mgpalmproperties"); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>