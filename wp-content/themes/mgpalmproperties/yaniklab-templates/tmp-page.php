<?php
/*
Template Name: Builder de sections
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
    get_template_part('yaniklab-flexibles/flexibles');
    ?>

    <?php get_template_part('yaniklab-parts/section', 'contact', array()); ?>

<?php endwhile; ?>

<?php get_footer(); ?>