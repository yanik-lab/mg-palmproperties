<?php
/*
Template Name: Accueil
*/
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <?php
    $hero = get_field('section_header');
    if ($hero):
    ?>
        <section class="section-header fullxl bgGreen bgResponsive bgFixed" style="background-image:url('<?php echo $hero['image']['sizes']['xlarge']; ?>');">
            <div class="backgroundFixed"></div>
            <div class="special">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-20">
                            <div class="reveal revealFB reveal1 tabletCenter">
                                <?php echo $hero['contenu']; ?>
                                <?php
                                if ($hero['lien']):
                                    get_template_part('yaniklab-parts/part', 'link', array(
                                        'lien' => $hero['lien'],
                                        'buttons' => '',
                                        'btn' => 'btn-basic btn-beige',
                                    ));
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $hero = get_field('section_team');
    if ($hero):
    ?>
        <section class="section-team bgGreen">
            <div class="row g-0 d-flex justify-content-center justify-content-lg-start">
                <div class="col-11 col-sm-10 col-md-9 col-lg-6">
                    <?php if ($hero['image_1']):  ?>
                        <div class="reveal revealFB reveal1 ">
                            <div class="reveal revealIMG reveal2">
                                <?php echo wp_get_attachment_image($hero['image_1'], 'large', '',  ['class' => 'img-fluid w-100']); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-11 col-sm-10 col-md-9 col-lg-6 compense">
                    <?php if ($hero['image_2']): ?>
                        <div class="reveal revealFB reveal2">
                            <div class="reveal revealIMG reveal3">
                                <?php echo wp_get_attachment_image($hero['image_2'], 'large', '',  ['class' => 'img-fluid w-100']); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-22 col-sm-22 col-md-16 col-lg-8 offset-lg-2 col-xl-6 offset-xl-2 d-flex align-items-center tabletTop tabletBottom tabletCenter">
                    <div class="reveal revealFR reveal4">
                        <?php echo $hero['contenu']; ?>
                        <?php
                        if ($hero['lien']):
                            get_template_part('yaniklab-parts/part', 'link', array(
                                'lien' => $hero['lien'],
                                'buttons' => '',
                                'btn' => 'btn-basic btn-beige',
                            ));
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $hero = get_field('section_proprietes');
    if ($hero):
    ?>
        <section class="section-carousel standard first last bgWhite">
            <?php
            if ($hero['introduction']):
                get_template_part('yaniklab-parts/section', 'introduction', array(
                    'introduction' => $hero['introduction'],
                    'icon' => true
                ));
            endif;
            ?>
            <?php
            $properties_featured = $hero['properties_featured'];
            if ($properties_featured):
            ?>
                <div class="row g-0 justify-content-center">
                    <div class="col-24">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($properties_featured as $propertie):
                                    $ID = $propertie->ID;
                                    $link = get_the_permalink($propertie->ID);
                                    $titre = get_the_title($propertie->ID);
                                    $image = get_the_post_thumbnail($propertie->ID, 'bloc',  ['class' => 'img-fluid']);
                                    $chambres = get_field('chambres', $propertie->ID);
                                    $surface_habitable = get_field('surface_habitable', $propertie->ID);
                                    $localisation = get_field('localisation', $propertie->ID);
                                ?>
                                    <a href="<?php echo $link; ?>" title="<?php echo $titre; ?>" class="swiper-slide">
                                        <div class="thumb">
                                            <?php if ($image) : ?>
                                                <?php echo $image; ?>
                                            <?php else: ?>
                                                <img src='<?php bloginfo('template_url'); ?>/images/temp/default-propertie.webp' alt='' class='img-fluid'>
                                            <?php endif; ?>
                                        </div>
                                        <div class="baseline">
                                            <h6>
                                                <span class="text-uppercase"><b><?php echo $titre; ?></b></span>
                                                <?php if ($chambres) : ?>
                                                    <span class="text-uppercase"><?php echo $chambres; ?> <?php _e("chambres", "mgpalmproperties"); ?></span>
                                                <?php endif; ?>
                                                <?php if ($surface_habitable) : ?>
                                                    <span><?php echo $surface_habitable; ?> m<sup>2</sup></span>
                                                <?php endif; ?>
                                                <?php if ($localisation) : ?>
                                                    <span class="text-uppercase"><?php echo $localisation; ?></span>
                                                <?php endif; ?>
                                            </h6>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                            <div class="swiper-scrollbar"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="col-20">
                        <?php
                        if ($hero['lien']):
                            get_template_part('yaniklab-parts/part', 'link', array(
                                'lien' => $hero['lien'],
                                'buttons' => 'bigger center',
                                'btn' => 'btn-basic btn-dark',
                            ));
                        endif;
                        ?>
                    </div>
                </div>
            <?php endif; ?>
        </section>
    <?php endif; ?>

    <?php
    $hero = get_field('seciton_luxe');
    if ($hero):
    ?>
        <section class="section-luxe standard firstxl lastxl bgGreen">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center justify-content-lg-start">
                    <div class="col-sm-22 col-md-16 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 d-flex align-items-center tabletBottom tabletCenter">
                        <div class="reveal revealFL reveal4">
                            <?php echo $hero['contenu']; ?>
                            <?php
                            if ($hero['lien']):
                                get_template_part('yaniklab-parts/part', 'link', array(
                                    'lien' => $hero['lien'],
                                    'buttons' => '',
                                    'btn' => 'btn-basic btn-beige',
                                ));
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="col-20 col-sm-10 col-md-9 col-lg-6 offset-lg-1 compenseTop">
                        <?php if ($hero['image_1']): ?>
                            <div class="reveal revealFB reveal1">
                                <div class="reveal revealIMG reveal2 position-relative">
                                    <?php echo wp_get_attachment_image($hero['image_1'], 'large', '',  ['class' => 'img-fluid w-100']); ?>
                                    <?php if ($hero['detail_1']): ?>
                                        <div class="contentHover">
                                            <div class="reveal revealFB reveal4">
                                                <i class="ico pictotransition-immo"></i>
                                                <h4><?php echo $hero['detail_1']; ?></h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-20 col-sm-10 col-md-9 col-lg-6 compenseBottom">
                        <?php if ($hero['image_2']): ?>
                            <div class="reveal revealFB reveal2">
                                <div class="reveal revealIMG reveal3 position-relative">
                                    <?php echo wp_get_attachment_image($hero['image_2'], 'large', '',  ['class' => 'img-fluid w-100']); ?>
                                    <?php if ($hero['detail_2']): ?>
                                        <div class="contentHover">
                                            <div class="reveal revealFB reveal5">
                                                <i class="ico pictobien"></i>
                                                <h4><?php echo $hero['detail_2']; ?></h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    $hero = get_field('section_experience');
    if ($hero):
        get_template_part('yaniklab-parts/section', 'experience', array('hero' => $hero));
    endif;
    ?>

    <?php
    $hero = get_field('section_expertise');
    if ($hero):
    ?>
        <section class="section-expertise standard first noPB bgWhite">
            <?php
            if ($hero['introduction']):
                get_template_part('yaniklab-parts/section', 'introduction', array(
                    'introduction' => $hero['introduction'],
                    'icon' => true
                ));
            endif;
            ?>
            <div class="row g-0 justify-content-center">
                <?php
                $bloc = $hero['bloc_1'];
                if ($bloc) : ?>
                    <div class="col-md-16 col-lg-8 colFull position-relative tabletBottomOnly">
                        <div class="reveal revealFB reveal1 w-100 h-100">
                            <div class="reveal revealIMG reveal2 w-100 h-100 bgLink">
                                <div class="picture">
                                    <?php echo wp_get_attachment_image($bloc['image_de_fond'], 'medium_large', '',  ['class' => 'img-fluid']); ?>
                                </div>
                                <div class="wContent w-100 h-100">
                                    <div class="reveal revealFB reveal2 position-relative z-1 w-100 h-100">
                                        <div class="content w-100 h-100">
                                            <div>
                                                <h5 class="text-uppercase mb-0">
                                                    <?php echo $bloc['titre']; ?>
                                                </h5>
                                                <div class="bottom">
                                                    <p>
                                                        <?php echo $bloc['detail']; ?>
                                                    </p>
                                                    <a href="<?php echo $bloc['lien']['url']; ?>" class="stretched-link btn btn-link btn-icon">
                                                        <span>En savoir plus </span>
                                                        <i class="ico pictoarrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php
                $bloc = $hero['bloc_2'];
                if ($bloc) : ?>
                    <div class="col-md-16 col-lg-8 colFull position-relative tabletBottomOnly">
                        <div class="reveal revealFB reveal2 w-100 h-100">
                            <div class="reveal revealIMG reveal3 w-100 h-100 bgLink">
                                <div class="picture">
                                    <?php echo wp_get_attachment_image($bloc['image_de_fond'], 'medium_large', '',  ['class' => 'img-fluid']); ?>
                                </div>
                                <div class="wContent w-100 h-100">
                                    <div class="reveal revealFB reveal3 position-relative z-1 w-100 h-100">
                                        <div class="content w-100 h-100">
                                            <div>
                                                <h5 class="text-uppercase mb-0">
                                                    <?php echo $bloc['titre']; ?>
                                                </h5>
                                                <div class="bottom">
                                                    <p>
                                                        <?php echo $bloc['detail']; ?>
                                                    </p>
                                                    <a href="<?php echo $bloc['lien']['url']; ?>" class="stretched-link btn btn-link btn-icon">
                                                        <span>En savoir plus </span>
                                                        <i class="ico pictoarrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php
                $bloc = $hero['bloc_3'];
                if ($bloc) : ?>
                    <div class="col-md-16 col-lg-8 colFull position-relative tabletBottomOnly">
                        <div class="reveal revealFB reveal3 w-100 h-100">
                            <div class="reveal revealIMG reveal4 w-100 h-100 bgLink">
                                <div class="picture">
                                    <?php echo wp_get_attachment_image($bloc['image_de_fond'], 'medium_large', '',  ['class' => 'img-fluid']); ?>
                                </div>
                                <div class="wContent w-100 h-100">
                                    <div class="reveal revealFB reveal4 position-relative z-1 w-100 h-100">
                                        <div class="content w-100 h-100">
                                            <div>
                                                <h5 class="text-uppercase mb-0">
                                                    <?php echo $bloc['titre']; ?>
                                                </h5>
                                                <div class="bottom">
                                                    <p>
                                                        <?php echo $bloc['detail']; ?>
                                                    </p>
                                                    <a href="<?php echo $bloc['lien']['url']; ?>" class="stretched-link btn btn-link btn-icon">
                                                        <span>En savoir plus </span>
                                                        <i class="ico pictoarrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php get_template_part('yaniklab-parts/section', 'contact', array()); ?>

<?php endwhile; ?>

<?php get_footer(); ?>