<?php
// LOAD SCRIPTS
function tswtb_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin() && TSWTB_DEV === true) {
        wp_register_script('libs', get_template_directory_uri() . '/js/libs.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('libs');
        wp_register_script('app', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('app');
    } else if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin() && TSWTB_DEV === false) {
        wp_register_script('libs', get_template_directory_uri() . '/js/libs.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('libs');
        wp_register_script('app', get_template_directory_uri() . '/js/app.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('app');
    }
    if (is_front_page() || is_singular('propriete')) {
        wp_register_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '11.1.14', true);
        wp_enqueue_script('swiper');
    }
    if (is_singular('propriete')) {
        wp_register_script('lightgallery', get_template_directory_uri() . '/js/libs-alone/lightgallery.min.js', array('jquery'), '2.5.0', true);
        wp_enqueue_script('lightgallery');
        wp_register_script('lightgalleryZoom', get_template_directory_uri() . '/js/libs-alone/lg-zoom.min.js', array('jquery'), '2.5.0', true);
        wp_enqueue_script('lightgalleryZoom');
    }
}
// add_action('init', 'tswtb_scripts');
add_action('wp_enqueue_scripts', 'tswtb_scripts', 450);

// LOAD STYLES
function tswtb_styles()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin() && TSWTB_DEV === true) {
        wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 'all');
        wp_enqueue_style('style');
    } else if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin() && TSWTB_DEV === false) {
        wp_register_style('style', get_template_directory_uri() . '/style.min.css', array(), '1.0', 'all');
        wp_enqueue_style('style');
    }
    if (is_front_page() || is_singular('propriete')) {
        wp_register_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.0', 'all');
        wp_enqueue_style('swiper');
    }
    if (is_singular('propriete')) {
        wp_register_style('lightgallery', get_template_directory_uri() . '/css/libs-alone/lightgallery-bundle.min.css', array(), '2.5.0', 'all');
        wp_enqueue_style('lightgallery');
    }
}
add_action('wp_enqueue_scripts', 'tswtb_styles', 500);
