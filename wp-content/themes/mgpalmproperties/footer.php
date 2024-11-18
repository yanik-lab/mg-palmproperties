</main>

<footer id="footer">
    <div class="top">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <a href="<?php echo get_bloginfo('url'); ?>" class="logo group" id="logo-footer">
                        <img src='<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-horizontal.png.webp' alt='<?php _e("Logo", "yaniklab"); ?> <?php bloginfo('title'); ?>' srcset='<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-horizontal@2x.png.webp 2x' class='img-fluid logo-loader' loading='lazy'>
                    </a>
                </div>
                <div class="col">
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
                <div class="col">
                    <p><?php _e("Nous contacter", "mgpalmproperties"); ?></p>
                    <div class="second-menu">
                        <a href="#" class="btn btn-icon">
                            <i class="ico pictophone"></i>
                            <span><?php _e("Nous appeler", "mgpalmproperties"); ?></span>
                        </a>
                        <a href="#" class="btn btn-icon">
                            <i class="ico pictomail"></i>
                            <span><?php _e("Nous écrire", "mgpalmproperties"); ?></span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <p><?php _e("Nous suivre", "mgpalmproperties"); ?></p>
                    <ul class="socials">
                        <li>
                            <a href="#" title="Instagram" target="_blank">
                                <i class="ico pictoinsta"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Facebook" target="_blank">
                                <i class="ico pictofb"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Linkedin" target="_blank">
                                <i class="ico pictolinkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <p>© MG Palm Properties 2024</p>
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