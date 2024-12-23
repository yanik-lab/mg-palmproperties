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
                    $typeprix = get_field('prix_nous_consulter', $post->ID);
                    $prix = get_field('prix', $post->ID);
                    $intro = get_field('extrait', $post->ID);
                    $pieces = get_field('pieces', $post->ID);
                    $surface_habitable = get_field('surface_habitable', $post->ID);
                ?>
                    <div class="list-propertie">
                        <div class="row g-0 align-items-center justify-content-center justify-content-lg-start">
                            <div class="col-sm-16 col-md-14 col-lg-12 tabletBottom">
                                <div class="reveal revealFL reveal1">
                                    <?php if (get_the_post_thumbnail()) : ?>
                                        <?php echo get_the_post_thumbnail($post->ID, 'xlarge', array('class' => 'img-fluid ')); ?>
                                    <?php else: ?>
                                        <img src='<?php bloginfo('template_url'); ?>/images/temp/default-propertie-large.png' alt='' class='img-fluid'>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-sm-14 col-md-12 col-lg-8 offset-lg-2 col-xl-6 offset-xl-2 tabletCenter">
                                <div class="reveal revealFR reveal2">
                                    <h3><?php the_title(); ?></h3>
                                    <?php if ($localisation) : ?>
                                        <h6 class="localisation mb-0">
                                            <i class="ico pictocity"></i>
                                            <span><?php echo $localisation; ?></span>
                                        </h6>
                                    <?php endif; ?>
                                    <?php if ($prix) : ?>
                                        <h5 class="mb-3">
                                            <?php
                                            if ($typeprix === true):
                                                _e('Prix : Nous consulter', 'mgpalmproperties');
                                            else :
                                                echo number_format($prix, 0, '', ' ') . ' €';
                                            endif;
                                            ?>
                                        </h5>
                                    <?php endif; ?>
                                    <?php if ($intro) : ?>
                                        <p>
                                            <?php echo $intro; ?>
                                        </p>
                                    <?php endif; ?>
                                    <h6 class="baseline">
                                        <?php if ($surface_habitable) : ?>
                                            <span><?php echo $surface_habitable; ?> m<sup>2</sup></span>
                                        <?php endif; ?>
                                        <?php if ($pieces) : ?>
                                            <span class="text-uppercase"><?php echo $pieces; ?> <?php _e("pièces", "mgpalmproperties"); ?></span>
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