<?php
/*
 *  Author: YanikLab
 */

// TEMP DISABLE FAVICON
// add_filter(
//     'get_site_icon_url',
//     '__return_false'
// );

// ENVIRONNEMENT
define('TSWTB_DEV', true);
define('TSWTB_DEBUG_RESOLUTION', true);

// WORDPRESS ASSETS
require_once('includes/assets.php');
// WORDPRESS RESET
require_once('includes/reset.php');
// LANGS
require_once('includes/langs.php');
// WYSIWYG
require_once('includes/wysiwyg.php');
// ACF
// require_once('includes/acf.php');
// CPT
require_once('includes/cpt.php');
// MENUS
// require_once('includes/menus.php');
// SEO
require_once('includes/seo.php');
// CF7
// require_once('includes/cf7.php');

// SECURITY
remove_action("wp_head", "wp_generator");
define('DISALLOW_FILE_EDIT', true);
