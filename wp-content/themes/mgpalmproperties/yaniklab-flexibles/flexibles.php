<?php
global $counterS;

if (have_rows('page_builder')) :
    while (have_rows('page_builder')) : the_row();
?>

<?php
        if (get_row_layout() == 'section_contenu') :
            $hero = get_sub_field('contenu');
            if ($hero) :
                get_template_part('yaniklab-flexibles/section', 'contenu', array('hero' => $hero));
            endif;
        // elseif (get_row_layout() == 'section_ig_td') :
        //     $hero = get_sub_field('contenu');
        //     if ($hero) :
        //         get_template_part('yaniklab-flexibles/section', 'deux-colonnes', array('hero' => $hero));
        //     endif;
        endif;
?>

<?php
        $counterS++;
    endwhile;
endif;
?>