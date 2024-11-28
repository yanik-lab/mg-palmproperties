<?php
global $counterS;

if (have_rows('sections')) :
    while (have_rows('sections')) : the_row();
?>

<?php
        if (get_row_layout() == 'section_colonnes') :
            get_template_part('yaniklab-flexibles/section', 'colonnes');
        elseif (get_row_layout() == 'section_liste') :
            get_template_part('yaniklab-flexibles/section', 'liste');
        elseif (get_row_layout() == 'section_full') :
            get_template_part('yaniklab-flexibles/section', 'full');
        endif;
?>

<?php
        $counterS++;
    endwhile;
endif;
?>