<?php
get_header();
$localisation = get_field('localisation', $post->ID);
$typeprix = get_field('prix_nous_consulter', $post->ID);
$prix = get_field('prix', $post->ID);
$reference = get_field('reference', $post->ID);
$details_intro = get_field('details_intro', $post->ID);
$pieces = get_field('pieces', $post->ID);
$chambres = get_field('chambres', $post->ID);
$surface_habitable = get_field('surface_habitable', $post->ID);
$surface_terrain = get_field('surface_terrain', $post->ID);
$salle_de_bain = get_field('salle_de_bain', $post->ID);
$video = get_field('video', $post->ID);
$descriptif = get_field('descriptif', $post->ID);
$pe = get_field('performance_energetique', $post->ID);
$images = get_field('galerie');
if ($pe) {
    $ce = $pe['classe_energetique'];
    $cetxt = $pe['classe_energetique_txt'];
    $ges = $pe['ges'];
    $gestxt = $pe['ges_txt'];
}
?>

<section id="single-header" class="full">
    <div id="breadcrumb" class="container-fluid">
        <div class="row g-0 justify-content-center">
            <div class="col col-22">
                <div class="reveal revealFT reveal2">
                    <?php get_breadcrumb(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php if ($images): ?>
        <div class="swiper mySwiperSingle">
            <div id="mySwiperContainer" class="swiper-wrapper">
                <?php $counter = 1;
                foreach ($images as $image_id): ?>
                    <div id="slide-<?php echo $counter; ?>" class="swiper-slide">
                        <a data-src="<?php echo wp_get_attachment_url($image_id); ?>">
                            <?php echo wp_get_attachment_image($image_id, 'bloclarge', '',  ['class' => '']); ?>
                        </a>
                    </div>
                <?php $counter++;
                endforeach; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div id="allpicture" class="container-fluid">
            <div class="row g-0 justify-content-center">
                <div class="col-xl-21 col-xxl-19 col-xxxl-17 position-relative">
                    <div class="reveal revealFR reveal2 d-flex justify-content-center justify-content-xl-end">
                        <button type="button" class="btn btn-header btn-icon" id="openGallery">
                            <i class="ico pictophotos"></i>
                            <span><?php _e('Toutes les photos', 'mgpalmproperties'); ?></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<section id="single-description" class="">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-start">
            <div class="col-22 col-sm-18 col-md-14 col-lg-14 col-xl-9 col-xxl-8 col-xxxl-7 bien-info">
                <div class="reveal revealFB reveal1">
                    <div class="box text-center">
                        <?php if ($localisation) : ?>
                            <h6 class="localisation mb-0">
                                <i class="ico pictocity"></i>
                                <span><?php echo $localisation; ?></span>
                            </h6>
                        <?php endif; ?>
                        <h1 class="h2 mb-3 mt-3"><?php the_title(); ?></h1>
                        <h5 class="mb-1">
                            <?php
                            if ($typeprix === true):
                                _e('Prix : Nous consulter', 'mgpalmproperties');
                            else :
                                echo number_format($prix, 0, '', ' ') . ' €';
                            endif;
                            ?>
                        </h5>
                        <?php
                        if ($reference) :
                            echo "<p>" . __('REF : ', 'mgpalmproperties') . "" . $reference . "</p>";
                        endif;
                        ?>
                        <?php if (get_field('mail', 'options') || get_field('telephone', 'options')) : ?>
                            <div class="buttons full">
                                <?php if (get_field('mail', 'options')) : ?>
                                    <a href="mailto:<?php echo get_field('mail', 'options'); ?>?Subject=<?php _e('Propriété : ', 'mgpalmproperties'); ?><?php echo get_the_title(); ?> <?php _e('à', 'mgpalmproperties'); ?> <?php echo $localisation; ?>&amp;body=<?php _e("Bonjour,%0D%0A%0D%0AJe souhaiterais obtenir plus d'information concernant la propriété ", 'mgpalmproperties'); ?> '<?php echo get_the_title(); ?>' <?php _e('à', 'mgpalmproperties'); ?> <?php echo $localisation; ?>" class="btn btn-icon btn-basic btn-dark" title="<?php _e("Demander + d'infos par email", "mgpalmproperties"); ?>">
                                        <i class="ico pictomail"></i>
                                        <span><?php _e("Demander + d'infos par email", "mgpalmproperties"); ?></span>
                                    </a>
                                <?php endif; ?>
                                <?php if (get_field('telephone', 'options')) : ?>
                                    <a href="<?php echo formatPhoneNumber(get_field('telephone', 'options')); ?>" class="btn btn-icon btn-full  btn-cuivre" title="<?php _e("Nous appeler", "mgpalmproperties"); ?>">
                                        <i class="ico pictophone"></i>
                                        <span><?php _e("Nous appeler", "mgpalmproperties"); ?></span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php
                        if ($details_intro):
                            echo '<p class="mt-5"><em>' . $details_intro . '</em></p>';
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-22 col-sm-18 col-md-18 col-lg-18 col-xl-12 offset-xl-1 col-xxl-10 offset-xxl-1 col-xxxl-9 offset-xxxl-1 bien-description">
                <div class="reveal revealFB reveal1">
                    <div class="bloc noPB bloc1">
                        <div class="reveal revealFB reveal1">
                            <h4><?php _e('Détail du bien', 'mgpalmproperties'); ?></h4>
                        </div>
                        <div class="row g-0 details flex-column flex-md-row">
                            <?php if ($surface_habitable) : ?>
                                <div class="col-md-8 marged">
                                    <div class="reveal revealFB reveal2">
                                        <p class="top">
                                            <i class="ico pictosuperficie"></i>
                                            <span><?php _e('Surface habitable', 'mgpalmproperties'); ?> <span class="d-none d-md-inline-block">:</span> </span>
                                        </p>
                                        <h4 class="value">
                                            <?php echo $surface_habitable; ?> m<sup>2</sup>
                                        </h4>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($pieces) : ?>
                                <div class="col-md-8 marged">
                                    <div class="reveal revealFB reveal3">
                                        <p class="top">
                                            <i class="ico pictosuperficie"></i>
                                            <span><?php _e('Pièces', 'mgpalmproperties'); ?> <span class="d-none d-md-inline-block">:</span> </span>
                                        </p>
                                        <h4 class="value">
                                            <?php echo $pieces; ?>
                                        </h4>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($chambres) : ?>
                                <div class="col-md-8 marged">
                                    <div class="reveal revealFB reveal4">
                                        <p class="top">
                                            <i class="ico pictobedroom"></i>
                                            <span><?php _e('Chambres', 'mgpalmproperties'); ?> <span class="d-none d-md-inline-block">:</span> </span>
                                        </p>
                                        <h4 class="value">
                                            <?php echo $chambres; ?>
                                        </h4>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($salle_de_bain) : ?>
                                <div class="col-md-8 marged">
                                    <div class="reveal revealFB reveal1">
                                        <p class="top">
                                            <i class="ico pictobathroom"></i>
                                            <span><?php _e('Salles de bains', 'mgpalmproperties'); ?> <span class="d-none d-md-inline-block">:</span> </span>
                                        </p>
                                        <p class="value">
                                            <?php echo $salle_de_bain; ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($surface_terrain) : ?>
                                <div class="col-md-8 marged">
                                    <div class="reveal revealFB reveal2">
                                        <p class="top">
                                            <i class="ico pictosuperficie"></i>
                                            <span><?php _e('Surface terrain', 'mgpalmproperties'); ?> <span class="d-none d-md-inline-block">:</span> </span>
                                        </p>
                                        <h4 class="value">
                                            <?php echo $surface_terrain; ?> m<sup>2</sup>
                                        </h4>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if ($video): ?>
                        <div class="bloc bloc2">
                            <div class="reveal revealFB reveal1">
                                <h4><?php _e('Vidéo', 'mgpalmproperties'); ?></h4>
                            </div>
                            <div class="reveal revealFB reveal2">
                                <?php echo $video; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($descriptif): ?>
                        <div class="bloc bloc2">
                            <div class="reveal revealFB reveal1">
                                <h4><?php _e('Descriptif', 'mgpalmproperties'); ?></h4>
                            </div>
                            <div class="reveal revealFB reveal2">
                                <?php echo $descriptif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($ce || $ges): ?>
                        <div class="bloc bloc2">
                            <div class="reveal revealFB reveal1">
                                <h4><?php _e('Performances énergétiques', 'mgpalmproperties'); ?></h4>
                            </div>
                            <?php if ($ce): ?>
                                <div class="reveal revealFB reveal2">
                                    <h6 class="text-uppercase mb-4"><?php _e('Classe énergie', 'mgpalmproperties'); ?></h6>
                                    <div class="classes ce">
                                        <?php
                                        $letters = range('A', 'G');
                                        foreach ($letters as $letter) {
                                            $activeClass = ($letter === $ce) ? ' active' : '';
                                            echo '<div class="box box' . $letter . $activeClass . '">' . $letter . '</div>';
                                        }
                                        ?>
                                        <?php if ($cetxt) : ?>
                                            <div class="value">
                                                <p>
                                                    <?php echo $cetxt; ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($ges): ?>
                                <div class="reveal revealFB reveal3 mt-4">
                                    <h6 class="text-uppercase mb-4"><?php _e('GES', 'mgpalmproperties'); ?></h6>
                                    <div class="classes ges">
                                        <?php
                                        $letters = range('A', 'G');
                                        foreach ($letters as $letter) {
                                            $activeClass = ($letter === $ges) ? ' active' : '';
                                            echo '<div class="box box' . $letter . $activeClass . '">' . $letter . '</div>';
                                        }
                                        ?>
                                        <?php if ($gestxt) : ?>
                                            <div class="value">
                                                <p>
                                                    <?php echo $gestxt; ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$bg = get_field('image_bandeau_de_contact');
if ($bg) {
    $image = $bg['sizes']['xlarge'];
} else {
    $image = get_bloginfo('template_url') . '/images/bg/bg-contact-single@2x.jpg';
}
?>
<section class="standard bgGreen bgResponsive bgFixed firstxl lastxl" style="background-image:url('<?php echo $image; ?>');">
    <div class=" container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="reveal revealFB reveal1">
                    <h2><?php _e('Intéressé par ce bien ?', 'mgpalmproperties'); ?></h2>
                    <div class="buttons center">
                        <a href="<?php echo pll_get_the_permalink(380); ?>" class="btn btn-icon btn-basic btn-beige" title="<?php echo pll_get_the_title(380); ?>">
                            <i class="ico pictophone"></i>
                            <span><?php echo pll_get_the_title(380); ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-carousel standard first bgWhite">
    <?php
    get_template_part('yaniklab-parts/section', 'introduction', array(
        'introduction' => '<h2>' . __('Nos autres propriétés à la vente', 'mgpalmproperties') . '</h2>',
        'icon' => true
    ));
    ?>
    <?php
    $args = array(
        'post_type'              => array('propriete'),
        'posts_per_page'         => '-1',
        'order' => 'ASC',
        'orderby'                => 'menu_order',
        'post__not_in' => array($post->ID)
    );
    $properties = new WP_Query($args);
    if ($properties->have_posts()) :
    ?>
        <div class="row g-0">
            <div class="col-24">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php
                        while ($properties->have_posts()) : $properties->the_post();
                            $link = get_the_permalink($post->ID);
                            $titre = get_the_title($post->ID);
                            $image = get_the_post_thumbnail($post->ID, 'bloc',  ['class' => 'img-fluid']);
                            $chambres = get_field('chambres', $post->ID);
                            $surface_habitable = get_field('surface_habitable', $post->ID);
                            $localisation = get_field('localisation', $post->ID);
                        ?>
                            <a href="<?php echo $link; ?>" title="<?php echo $titre; ?>" class="swiper-slide">
                                <div class="thumb">
                                    <?php if ($image) : ?>
                                        <?php echo $image; ?>
                                    <?php else: ?>
                                        <img src='<?php bloginfo('template_url'); ?>/images/temp/default-propertie.png' alt='' class='img-fluid'>
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
                        <?php endwhile; ?>
                    </div>
                    <div class="swiper-scrollbar"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <?php
                $hero = array(
                    'url' => pll_get_the_permalink(22),
                    'title' => __('Découvrez tous nos biens', 'mgpalmproperties'),
                    'target' => '',
                );
                get_template_part('yaniklab-parts/part', 'link', array(
                    'lien' => $hero,
                    'buttons' => 'bigger center',
                    'btn' => 'btn-basic btn-dark',
                ));
                ?>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php get_template_part('yaniklab-parts/section', 'contact', array()); ?>

<?php get_footer(); ?>