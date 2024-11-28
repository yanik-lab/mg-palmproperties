</main>

<footer id="footer">
    <div class="top">
        <div class="container-xl">
            <div class="row flex-column flex-md-row justify-content-center">
                <div class="col-lg-8 tabletCenter tabletBottomL">
                    <a href="<?php echo get_bloginfo('url'); ?>" class="logo group d-block" id="logo-footer">
                        <img src='<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-horizontal.png.webp' alt='<?php _e("Logo", "mgpalmproperties"); ?> <?php bloginfo('title'); ?>' srcset='<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-horizontal@2x.png.webp 2x' class='img-fluid logo-loader' loading='lazy'>
                    </a>
                </div>
                <div class="col tabletCenter mobileBottomL">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => 'menu primary-menu',
                        'depth'          => 0,
                        'fallback_cb'    => false
                    ));
                    ?>
                </div>
                <div class="col tabletCenter mobileBottomL">
                    <p><?php _e("Nous contacter", "mgpalmproperties"); ?></p>
                    <div class="second-menu">
                        <?php if (get_field('telephone', 'options')) : ?>
                            <a href="<?php echo formatPhoneNumber(get_field('telephone', 'options')); ?>" class="btn btn-icon" title="<?php _e("Nous appeler", "mgpalmproperties"); ?>">
                                <i class="ico pictophone"></i>
                                <span><?php _e("Nous appeler", "mgpalmproperties"); ?></span>
                            </a>
                        <?php endif; ?>
                        <?php if (get_field('mail', 'options')) : ?>
                            <a href="mailto:<?php echo get_field('mail', 'options'); ?>" class="btn btn-icon" title="<?php _e("Nous écrire", "mgpalmproperties"); ?>">
                                <i class="ico pictomail"></i>
                                <span><?php _e("Nous écrire", "mgpalmproperties"); ?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col tabletCenter">
                    <p><?php _e("Nous suivre", "mgpalmproperties"); ?></p>
                    <?php echo get_template_part('yaniklab-parts/part', 'socials'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <p>© MG Palm Properties <?php echo date("Y"); ?></p>
        <p><a href="<?php echo pll_get_the_permalink(43); ?>" title=""><?php echo pll_get_the_title(43); ?></a></p>
        <p><a href="<?php echo pll_get_the_permalink(3); ?>" title=""><?php echo pll_get_the_title(3); ?></a></p>
        <p>
            <em>
                <a href="https://www.studiomona.fr/" title="StudioMona" class="d-inline-block">StudioMona</a> x
                <a href="https://www.yanik-lab.fr/" title="YanikLab" class="d-inline-block">YanikLab</a>
            </em>
        </p>
    </div>
</footer>

</div>


<?php wp_footer(); ?>

</body>

</html>