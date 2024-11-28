<?php
/*
Template Name: Propriétés
*/
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <?php
    $hero = get_field('section_header');
    if ($hero):
    ?>
        <section class="section-properties-introduction standard firstxl bgWhite">
            <?php
            if ($hero['introduction']):
                get_template_part('yaniklab-parts/section', 'introduction', array(
                    'introduction' => $hero['introduction'],
                    'icon' => true
                ));
            endif;
            ?>
        </section>

        <?php
        $args = array(
            'post_type'              => array('propriete'),
            'posts_per_page'         => '-1',
            'order' => 'ASC',
            'orderby'                => 'menu_order',
        );
        $properties = new WP_Query($args);
        if ($properties->have_posts()) :
        ?>
            <section class="section-properties-list last">
                <?php
                while ($properties->have_posts()) : $properties->the_post();
                    $localisation = get_field('localisation', $post->ID);
                    $chambres = get_field('chambres', $post->ID);
                    $surface_habitable = get_field('surface_habitable', $post->ID);
                ?>
                    <div class="list-propertie">
                        <div class="row g-0 align-items-center justify-content-start">
                            <div class="col-lg-12">
                                <div class="reveal revealFL reveal1">
                                    <?php echo get_the_post_thumbnail($post->ID, 'xlarge', array('class' => 'img-fluid ')); ?>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-2">
                                <div class="reveal revealFR reveal2">
                                    <h3><?php the_title(); ?></h3>
                                    <?php if ($localisation) : ?>
                                        <h6 class="localisation">
                                            <i class="ico pictocity"></i>
                                            <span><?php echo $localisation; ?></span>
                                        </h6>
                                    <?php endif; ?>
                                    <p>
                                        Sint quis aute consequat nisi. Sint sit qui elit mollit. Ad consequat excepteur laboris dolor.
                                    </p>
                                    <h6 class="baseline">
                                        <?php if ($chambres) : ?>
                                            <span class="text-uppercase"><?php echo $chambres; ?> <?php _e("chambres", "mgpalmproperties"); ?></span>
                                        <?php endif; ?>
                                        <?php if ($surface_habitable) : ?>
                                            <span><?php echo $surface_habitable; ?> m<sup>2</sup></span>
                                        <?php endif; ?>
                                    </h6>
                                    <div class="buttons">
                                        <a href="<?php echo the_permalink(); ?>" title="<?php echo get_the_title(); ?>" class="btn btn-basic btn-dark"><?php _e("Découvrir ce bien", "mgpalmproperties"); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php
        endif;
        wp_reset_postdata();
        ?>

    <?php endif; ?>

    <?php get_template_part('yaniklab-parts/section', 'contact', array()); ?>

<?php endwhile; ?>

<?php get_footer(); ?>