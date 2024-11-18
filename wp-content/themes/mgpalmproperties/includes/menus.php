<?php
// ---------------------------- //
// MENU HEADER - ACTIVE MENU ITEM ANCESTOR
// ---------------------------- //
// Ajoute la classe 'current-menu-ancestor' pour l'item du menu "Les vins" dans le header
add_filter('nav_menu_css_class', function ($classes, $item, $args, $depth) {
    // Vérifie que l'on travaille avec le menu principal
    if ($args->theme_location === 'primary-menu') {
        // Obtient l'URL de l'archive des vins
        $archive_url = get_post_type_archive_link('vins');

        // Vérifie si on est sur une page de type 'vins' ou sur l'archive des vins
        if ((is_singular('vins') || is_post_type_archive('vins')) && $item->url === $archive_url) {
            $classes[] = 'current-menu-ancestor'; // Ajoute la classe 'current-menu-ancestor' pour l'item de menu correspondant
        }
    }
    return $classes;
}, 10, 4);

// ---------------------------- //
// MENU FOOTER - AUTOMATIQUE CPT
// ---------------------------- //
class Vins_Menu_Walker extends Walker_Nav_Menu
{

    // Début de l'élément de menu
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $archive_url = get_post_type_archive_link('vins');

        // Ajoute la classe 'current-menu-ancestor' au parent si on est sur une page 'vin'
        if (is_singular('vins') && $item->url === $archive_url && $depth === 0) {
            $item->classes[] = 'current-menu-ancestor';
        }

        // Convertit l'élément de menu en HTML avec les classes modifiées
        parent::start_el($output, $item, $depth, $args, $id);

        // Ajoute les sous-éléments pour chaque vin si l'item est l'archive des vins
        if ($item->url === $archive_url && $depth === 0) {
            // Requête pour obtenir tous les vins dans l'ordre du menu_order
            $vins = get_posts(array(
                'post_type' => 'vins',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC'
            ));

            // Génère les sous-items pour chaque vin
            if ($vins) {
                $output .= '<ul class="sub-menu">';
                foreach ($vins as $vin) {
                    // Crée les classes pour chaque vin
                    $vin_classes = array('menu-item', 'menu-item-type-post_type', 'menu-item-' . $vin->ID);
                    if (is_singular('vins') && get_the_ID() === $vin->ID) {
                        $vin_classes[] = 'current-menu-item';
                    }
                    $class_names = join(' ', apply_filters('nav_menu_css_class', $vin_classes, $vin, $args, $depth));

                    // Ajoute l'élément de menu avec les classes appropriées
                    $output .= '<li class="' . esc_attr($class_names) . '">';
                    $output .= '<a href="' . get_permalink($vin->ID) . '">' . esc_html($vin->post_title) . '</a>';
                    $output .= '</li>';
                }
                $output .= '</ul>';
            }
        }
    }
}
