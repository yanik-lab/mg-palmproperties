<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="stylesheet" href="https://use.typekit.net/yzw7bzt.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>

    <?php wp_body_open(); ?>

    <?php
    // DEBUG
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin() && TSWTB_DEBUG_RESOLUTION === true) {
        echo '<div id="debug"></div>';
    }
    ?>

    <div id="wrapper">

        <div id="loader">
            <img src='<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties.png' alt='<?php _e("Logo", "mgpalmproperties"); ?> <?php bloginfo('title'); ?>' srcset='<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties@2x.png 2x' class='img-fluid logo-loader' loading='lazy'>
        </div>
        <header id="header">
            <div class="reveal revealFT reveal1 altmobile">
                <div class="header">
                    <div class="left">
                        <a href="<?php echo get_bloginfo('url'); ?>" class="logo group" id="logo-header">
                            <img
                                src="<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-horizontal.png"
                                srcset="<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-horizontal@2x.png 2x"
                                alt="<?php _e('Logo', 'mgpalmproperties'); ?> <?php bloginfo('title'); ?>"
                                class="img-fluid"
                                loading="lazy"
                                data-logo-white="<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-horizontal.png"
                                data-logo-white-2x="<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-horizontal@2x.png"
                                data-logo-color="<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-horizontal-color.png"
                                data-logo-color-2x="<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-horizontal-color@2x.png">
                        </a>
                    </div>
                    <div class="middle d-none d-xl-flex">
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
                    <div class="right">
                        <ul id="langs" class="d-none d-lg-flex">
                            <?php
                            pll_the_languages(array(
                                'dropdown' => 0,
                                'show_flags' => 0,
                                'show_names' => 1,
                                'display_names_as' => 'slug'
                            ));
                            ?>
                        </ul>
                        <a href="<?php echo pll_get_the_permalink(380); ?>" title="<?php echo pll_get_the_title(380); ?>" class="btn btn-header btn-icon">
                            <i class="ico pictophone"></i>
                            <span><?php echo pll_get_the_title(380); ?></span>
                        </a>
                        <button class="btn btn-burger d-flex d-xl-none">
                            <div id="myburger" class="">
                                <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="30">
                                    <path class="line top"
                                        d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                                    <path class="line middle" d="m 30,50 h 40" />
                                    <path class="line bottom"
                                        d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div id="menu-mobile">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'menu primary-menu',
                    'depth'          => 0,
                    'fallback_cb'    => false
                ));
                ?>
                <ul id="langs-mobile">
                    <?php
                    pll_the_languages(array(
                        'dropdown' => 0,
                        'show_flags' => 0,
                        'show_names' => 1,
                    ));
                    ?>
                </ul>
                <div class="bottom">
                    <a href="<?php echo pll_get_the_permalink(380); ?>" title="<?php echo pll_get_the_title(380); ?>" class="btn btn-header btn-icon">
                        <i class="ico pictophone"></i>
                        <span><?php echo pll_get_the_title(380); ?></span>
                    </a>
                </div>
            </div>
        </header>

        <main id="main">