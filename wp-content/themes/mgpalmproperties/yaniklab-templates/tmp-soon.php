<?php
/*
Template Name: Soon
*/
?>
<?php get_header(); ?>

<section class="standard first last">
    <div class="container-xl">
        <div class="row justify-content-center align-items-center">
            <div class="col-24">
                <div class="reveal revealFB reveal1 intro-content">
                    <h1 class="titre">
                        <?php _e("Traduction non disponible", "yaniklab"); ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-24 page-content">
                <p>
                    <?php _e("Merci de revenir ultérieurement", "yaniklab"); ?>
                </p>
                <div class="buttons">
                    <a href="<?php echo get_bloginfo('url'); ?>" class="btn btn-primary"
                        title="<?php bloginfo('title'); ?>">
                        <span><?php _e("Retour à l'accueil", "yaniklab"); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>