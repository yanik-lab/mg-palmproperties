<?php
// REGISTER MENU
function register_my_menu()
{
    register_nav_menu('primary-menu', __('Menu Principal'));
    // register_nav_menu('footer-menu', __('Menu Footer'));
    // register_nav_menu('secondary-menu', __('Menu Secondaire'));
    // register_nav_menu('woocommerce-menu', __('Menu Woocommerce'));
    // register_nav_menu('boutique-menu', __('Menu Boutique'));
    // register_nav_menu('footer-menu-1', __('Menu Footer 1'));
    // register_nav_menu('footer-menu-2', __('Menu Footer 2'));
    // register_nav_menu('footer-menu-3', __('Menu Footer 3'));
}
add_action('init', 'register_my_menu');

// REGISTER THUMBNAILS
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('xlarge', 1920, 9999, false);
    // add_image_size('xlargeland', 1920, 800, true);
    add_image_size('bloc', 768, 500, true);
    add_image_size('bloclarge', 1920, 800, true);
}

// CACHER LA BARRE ADMINISTRATION SUR LE FRONT
show_admin_bar(false);

// DESACTIVATE JQUERY MIGRATE
add_filter('wp_default_scripts', $af = static function (&$scripts) {
    if (!is_admin()) {
        $scripts->remove('jquery');
        $scripts->add('jquery', false, array('jquery-core'), '1.12.4');
    }
}, PHP_INT_MAX);
unset($af);

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);

/*  DISABLE GUTENBERG STYLE IN HEADER| WordPress 5.9 */
function wps_deregister_styles()
{
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'wps_deregister_styles', 100);

// DESACTIVATE EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support()
{
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}
add_action('admin_init', 'df_disable_comments_post_types_support');

// Close comments on the front-end
function df_disable_comments_status()
{
    return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Hide existing comments
function df_disable_comments_hide_existing_comments($comments)
{
    $comments = array();
    return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

// Remove comments page in menu
function df_disable_comments_admin_menu()
{
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');

// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect()
{
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');

// Remove dashicons
add_action('wp_print_styles',     'my_deregister_styles', 100);
function my_deregister_styles()
{
    //wp_deregister_style( 'amethyst-dashicons-style' );
    wp_deregister_style('dashicons');
}

// Remove Polyfill and regenerator Runtime
function deregister_polyfill()
{

    wp_deregister_script('wp-polyfill');
    wp_deregister_script('regenerator-runtime');
}
add_action('wp_enqueue_scripts', 'deregister_polyfill');

// REmove Classic Theme styles
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('classic-theme-styles');
}, 20);

// Remove comments metabox from dashboard
function df_disable_comments_dashboard()
{
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');

// Remove comments links from admin bar
function df_disable_comments_admin_bar()
{
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
}
add_action('init', 'df_disable_comments_admin_bar');

// DESACTIVATE EMBED
function my_deregister_scripts()
{
    wp_dequeue_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');

// DISABLE GUTENBERG
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// DESACTIVER PAGINATION SUR PAGE ARCHIVE
function custom_archive_query($query)
{
    if (is_archive() && $query->is_main_query()) {
        $query->set('posts_per_page', -1);
    }
}
add_action('pre_get_posts', 'custom_archive_query');

// Remove tags support from posts
function myprefix_unregister_tags()
{
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'myprefix_unregister_tags');

// CURRENT MENU ITEMS
// function wp_nav_parent_class($classes, $item)
// {

//     // if (is_singular('post') && ($item->title == "Actualités" || $item->title == "News"))
//     //     array_push($classes, 'current-menu-item');
//     if (is_singular('projets') && $item->title == "Portfolio")
//         array_push($classes, 'current-menu-item');

//     if (is_singular('vins') && ($item->title == "Mes vins" || $item->title == "Wines"))
//         array_push($classes, 'current-menu-item');

//     return $classes;
// }
// add_filter('nav_menu_css_class', 'wp_nav_parent_class', 10, 2);

// function my_mce4_options($init)
// {

//     $custom_colours = '
//         "25282a", "Noir",
//         "b9975b", "Or",
//         "618228", "Vert",
//     ';

//     // build colour grid default+custom colors
//     $init['textcolor_map'] = '[' . $custom_colours . ']';

//     // change the number of rows in the grid if the number of colors changes
//     // 8 swatches per row
//     $init['textcolor_rows'] = 1;

//     return $init;
// }
// add_filter('tiny_mce_before_init', 'my_mce4_options');


// Allow SVG
function custom_upload_mimes($existing_mimes = array())
{
    $existing_mimes['svg'] = 'image/svg+xml';
    $existing_mimes['svgz'] = 'image/svg+xml';
    return $existing_mimes;
}
add_filter('mime_types', 'custom_upload_mimes');

// FORMAT PHONE NUMBER LINK
function formatPhoneNumber($phone_number)
{
    // Supprimer tous les caractères non numériques
    $formatted_phone = preg_replace('/\D+/', '', $phone_number);

    // Remplacer le code de pays "0" par "+33"
    if (substr(
        $formatted_phone,
        0,
        1
    ) === '0') {
        $formatted_phone = '+33' . substr($formatted_phone, 1);
    }

    // Ajouter le préfixe "tel: +"
    $formatted_phone = 'tel:' . $formatted_phone;

    return $formatted_phone;
}

// // DEBUG LOG FILE
// // define('WP_DEBUG', true);
// // define('WP_DEBUG_DISPLAY', true);
// // define('WP_DEBUG_LOG', true);
// if (!function_exists('write_log')) {
//     function write_log($log)
//     {
//         if (true === WP_DEBUG) {
//             if (is_array($log) || is_object($log)) {
//                 error_log(print_r($log, true));
//             } else {
//                 error_log($log);
//             }
//         }
//     }
// }