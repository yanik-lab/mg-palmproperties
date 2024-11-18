<?php

/**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles()
{
    add_editor_style('myadmin-style.css');
    $random_version = rand(); // Générer une valeur aléatoire
    add_editor_style('myadmin-style.css?ver=' . $random_version);
}
add_action('admin_init', 'wpdocs_theme_add_editor_styles');


// TINYMCE
// add_filter('tiny_mce_before_init', 'mytheme_tinymce_formats');
// function mytheme_tinymce_formats($init_array)
// {
//     $style_formats = array(
//         // array(
//         //     'title' => 'Paragraphe en Titre 1',
//         //     'block' => 'p',
//         //     'classes' => 'h1',
//         //     // 'wrapper' => true
//         // ),
//         // array(
//         //     'title' => 'Sous-titre (fond jaune)',
//         //     'block' => 'p',
//         //     'classes' => 'sousTitre',
//         //     // 'wrapper' => true
//         // ),
//         array(
//             'title' => 'Intro',
//             'block' => 'p',
//             'classes' => 'intro'
//         ),
//         array(
//             'title' => 'Titre',
//             'block' => 'p',
//             'classes' => 'titre'
//         ),
//         array(
//             'title' => 'Sous-Titre',
//             'block' => 'p',
//             'classes' => 'sousTitre'
//         ),
//         // array(
//         //     'title' => 'Bouton texte (lien)',
//         //     'inline' => 'button',
//         //     'classes' => 'btn btn-txt btn-orange',
//         //     // 'wrapper' => true
//         // ),
//     );
//     $init_array['style_formats'] = json_encode($style_formats);
//     return $init_array;
// }

// // Ajouter le menu déroulant des formats dans TinyMCE
// add_filter('mce_buttons_2', 'mytheme_tinymce_styleselect');
// function mytheme_tinymce_styleselect($buttons)
// {
//     array_push($buttons, 'styleselect');
//     return $buttons;
// }


// function my_mce4_options($init)
// {
//     $custom_colours = '
//         "ffffff", "Blanc",
//         "000000", "Noir",
//         "2d393a", "Gris",
//         "7e7e7e", "Gris Moyen",
//         "c82254", "Rose",
//     ';
//     // build colour grid default+custom colors
//     $init['textcolor_map'] = '[' . $custom_colours . ']';
//     // change the number of rows in the grid if the number of colors changes
//     // 8 swatches per row
//     $init['textcolor_rows'] = 2;
//     return $init;
// }
// add_filter('tiny_mce_before_init', 'my_mce4_options');