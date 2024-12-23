<?php
// Charger le Text Domain
// load_theme_textdomain('mgpalmproperties', get_template_directory() . '/languages');

function pll_get_the_id($post_id)
{
    if (function_exists('pll_get_post')) {
        return pll_get_post($post_id);
    } else {
        return $post_id;
    }
}

function pll_get_the_permalink($post_id)
{
    if (function_exists('pll_get_post')) {
        return get_the_permalink(pll_get_post($post_id));
    } else {
        return get_the_permalink($post_id);
    }
}

function pll_get_the_term_ID($term_id)
{
    if (function_exists('pll_get_term')) {
        return pll_get_term($term_id);
    } else {
        return $term_id;
    }
}

function pll_get_term_link($term_id)
{
    if (function_exists('pll_get_term')) {
        return get_term_link(pll_get_term($term_id));
    } else {
        return get_term_link($term_id);
    }
}

function pll_get_the_title($post_id)
{
    if (function_exists('pll_get_post')) {
        return get_the_title(pll_get_post($post_id));
    } else {
        return get_the_title($post_id);
    }
}

function pll_get_current_lang()
{
    if (function_exists('pll_current_language')) {
        return pll_current_language();
    } else {
        return 'fr';
    }
}
