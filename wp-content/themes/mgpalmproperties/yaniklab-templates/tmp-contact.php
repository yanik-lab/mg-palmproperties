<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <?php
    $hero = get_field('section_team');
    if ($hero):
    ?>
        <section class="section-team standard noPT last bgGreen">
            <div class="row g-0 d-flex justify-content-center justify-content-lg-start">
                <div class="col-22 col-sm-22 col-md-16 col-lg-10 offset-lg-2 col-xxl-8 offset-xxl-2 d-flex align-items-center compensealt latopTop tabletTopXL tabletBottom tabletCenter">
                    <div>
                        <div class="reveal revealFB reveal1">
                            <i class="ico pictofavicon"></i>
                        </div>
                        <div class="reveal revealFB reveal2">
                            <?php echo $hero['contenu']; ?>
                        </div>
                        <div class="reveal revealFB reveal3">
                            <div class="buttons d-flex mobile-center">
                                <?php if (get_field('mail', 'options')) : ?>
                                    <a href="mailto:<?php echo get_field('mail', 'options'); ?>" class="btn btn-basic btn-beige btn-icon" title="<?php _e("Nous écrire", "mgpalmproperties"); ?>">
                                        <i class="ico pictomail"></i>
                                        <span><?php _e("Nous écrire", "mgpalmproperties"); ?></span>
                                    </a>
                                <?php endif; ?>
                                <?php if (get_field('telephone', 'options')) : ?>
                                    <a href="<?php echo formatPhoneNumber(get_field('telephone', 'options')); ?>" class="btn btn-full btn-cuivre btn-icon" title="<?php _e("Nous appeler", "mgpalmproperties"); ?>">
                                        <i class="ico pictophone"></i>
                                        <span><?php _e("Nous appeler", "mgpalmproperties"); ?></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-11 col-sm-10 col-md-9 col-lg-5 offset-lg-2 ">
                    <?php if ($hero['image_1']):  ?>
                        <div class="reveal revealFB reveal1 ">
                            <div class="reveal revealIMG reveal2">
                                <?php echo wp_get_attachment_image($hero['image_1'], 'large', '',  ['class' => 'img-fluid w-100']); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-11 col-sm-10 col-md-9 col-lg-5 col-xxl-6 compense">
                    <?php if ($hero['image_2']): ?>
                        <div class="reveal revealFB reveal2">
                            <div class="reveal revealIMG reveal3">
                                <?php echo wp_get_attachment_image($hero['image_2'], 'large', '',  ['class' => 'img-fluid w-100']); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php endwhile; ?>

<?php get_footer(); ?>