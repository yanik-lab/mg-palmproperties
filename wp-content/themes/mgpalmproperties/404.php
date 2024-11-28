<?php
get_header(); ?>

<section class="section-properties-introduction standard firstxl bgWhite">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-24 text-center introduction">
                <div class="reveal revealFB reveal1">
                    <i class="ico pictofavicon"></i>
                </div>
                <div class="reveal revealFB reveal2">
                    <h1><?php _e("Erreur 404 <br> Page introuvable", "mgpalmproperties"); ?></h1>
                    <p>
                        <?php _e("Cette page n'existe pas ou n'existe plus.", "mgpalmproperties"); ?> <br>
                        <?php _e("Nous nous excusons pour la gêne occasionnée.", "mgpalmproperties"); ?>
                    </p>
                    <div class="buttons">
                        <a href="<?php echo get_bloginfo('url'); ?>" class="btn btn-basic btn-dark"
                            title="<?php bloginfo('title'); ?>">
                            <span><?php _e("Retour à l'accueil", "mgpalmproperties"); ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>