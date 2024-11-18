<?php
function seopress_theme_slug_setup()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'seopress_theme_slug_setup');


// function sp_titles_template_variables_array($array)
// {
//     $array[] = '%%my_gamme_introduction%%';
//     $array[] = '%%my_parquet_descriptif%%';
//     $array[] = '%%my_accessoires_parquets_intro%%';
//     $array[] = '%%my_finitions_parquets_intro%%';
//     $array[] = '%%my_accessoires_exterieurs_intro%%';
//     $array[] = '%%my_single_intro%%';
//     return $array;
// }
// add_filter('seopress_titles_template_variables_array', 'sp_titles_template_variables_array');

// function sp_titles_template_replace_array($array)
// {
//     $gammeIntroduction = '';
//     $parquetDescriptif = '';
//     $my_accessoires_parquets_intro = '';
//     $my_finitions_parquets_intro = '';
//     $my_accessoires_exterieurs_intro = '';
//     $my_single_intro = '';

//     $queried_object = get_queried_object();
//     // var_dump($queried_object);

//     if ($queried_object instanceof WP_Post) {
//         // $gammeIntroduction = get_field('introduction', $queried_object);
//         $parquetDescriptif = get_field('descriptif', $queried_object->ID);
//         if ($queried_object->post_type === 'post') {
//             $my_single_intro = get_field('introduction', $queried_object->ID);
//         } else {
//             $my_single_intro = get_the_excerpt($queried_object->ID);
//         }
//     } elseif ($queried_object instanceof WP_Term) {
//         $gammeIntroduction = get_field('introduction', $queried_object);
//     } else {
//         // Traitez les autres types d'objets ou aucun objet retourné par get_queried_object()
//     }

//     $my_accessoires_parquets_intro = get_field('introduction', 'options');
//     $my_finitions_parquets_intro = get_field('introduction_2', 'options');
//     $my_accessoires_exterieurs_intro = get_field('introduction_3', 'options');

//     $array[] = esc_attr(preg_replace('/\s+/', ' ', wp_strip_all_tags($gammeIntroduction)));
//     $array[] = esc_attr(preg_replace('/\s+/', ' ', wp_strip_all_tags($parquetDescriptif)));
//     $array[] = esc_attr(preg_replace('/\s+/', ' ', wp_strip_all_tags($my_accessoires_parquets_intro)));
//     $array[] = esc_attr(preg_replace('/\s+/', ' ', wp_strip_all_tags($my_finitions_parquets_intro)));
//     $array[] = esc_attr(preg_replace('/\s+/', ' ', wp_strip_all_tags($my_accessoires_exterieurs_intro)));
//     $array[] = esc_attr(preg_replace('/\s+/', ' ', wp_strip_all_tags($my_single_intro)));
//     return $array;
// }
// add_filter('seopress_titles_template_replace_array', 'sp_titles_template_replace_array');

// function sp_get_dynamic_variables($array)
// {
//     $array['%%my_gamme_introduction%%'] = 'Gamme Parquet - Introduction';
//     $array['%%my_parquet_descriptif%%'] = 'Parquet - Descriptif';
//     $array['%%my_accessoires_parquets_intro%%'] = 'Accessoires - Parquets - Introduction';
//     $array['%%my_finitions_parquets_intro%%'] = 'Finitions - Parquets - Introduction';
//     $array['%%my_accessoires_exterieurs_intro%%'] = 'Accessoires - Extérieurs - Introduction';
//     $array['%%my_single_intro%%'] = 'Actualités - Introduction';
//     return $array;
// }
// add_filter('seopress_get_dynamic_variables', 'sp_get_dynamic_variables');
