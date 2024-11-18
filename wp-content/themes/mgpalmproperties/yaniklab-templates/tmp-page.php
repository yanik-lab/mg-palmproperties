<?php
/*
Template Name: Builder Tyméo
*/
?>
<?php get_header(); ?>

<?php
while (have_posts()) : the_post();
    get_template_part('yaniklab-flexibles/flexibles');
endwhile;
?>

<?php get_footer(); ?>