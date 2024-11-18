<?php


// add_action('do_meta_boxes', 'propriete_image_box');

// function propriete_image_box()
// {

//     remove_meta_box('postimagediv', 'propriete', 'side');
//     add_meta_box('postimagediv', __('Image principale'), 'post_thumbnail_meta_box', 'propriete', 'normal', 'high');
// }

// function propriete_reposition_featured_image_meta_box()
// {
//     remove_meta_box('postimagediv', 'propriete', 'side'); // Supprime le bloc de la colonne latérale
//     add_action('edit_form_after_title', 'propriete_display_featured_image_meta_box');
// }

// function propriete_display_featured_image_meta_box()
// {
//     global $post;
//     if ($post->post_type === 'propriete') { // Assure-toi que c'est le bon slug de ton CPT
//         echo '<h2>' . __('Image principale') . '</h2>'; // Optionnel : titre pour la boîte
//         do_meta_boxes('propriete', 'normal', $post); // Affiche la boîte sous le titre
//     }
// }

// add_action('add_meta_boxes', 'propriete_reposition_featured_image_meta_box');
