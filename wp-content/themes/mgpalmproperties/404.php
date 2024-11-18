<?php
get_header(); ?>

<section class="standard">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-24">
                <div class="reveal revealFB reveal1 intro-content">
                    <h1 class="titre">
                        <?php _e("Erreur 404 <br> Page introuvable", "yaniklab"); ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-24 page-content">
                <p>
                    <?php _e("Cette page n'existe pas ou n'existe plus.", "yaniklab"); ?> <br>
                    <?php _e("Nous nous excusons pour la gêne occasionnée.", "yaniklab"); ?>
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