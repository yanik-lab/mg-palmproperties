<?php
/*
Template Name: Services
*/
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <?php
    $hero = get_field('section_header');
    if ($hero):
        get_template_part('yaniklab-parts/section', 'header-page', array('hero' => $hero));
    endif; ?>

    <?php
    $hero = get_field('section_colonnes');
    if ($hero):
        get_template_part('yaniklab-parts/section', 'colonnes', array('hero' => $hero));
    endif;
    ?>

    <?php
    $hero = get_field('section_experience');
    if ($hero):
        get_template_part('yaniklab-parts/section', 'experience', array('hero' => $hero));
    endif;
    ?>

    <?php
    get_template_part('yaniklab-parts/section', 'contact', array(
        'hero' => $hero
    ));
    ?>

<?php endwhile; ?>

<?php get_footer(); ?>