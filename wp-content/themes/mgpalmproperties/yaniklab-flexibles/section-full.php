<?php
global $counterS;
$image = get_sub_field('image');
$contenu = get_sub_field('contenu');
$lien = get_sub_field('lien');
?>
<section id="section-builder-<?php echo $counterS; ?>" class="section-experience full bgGreen bgResponsive bgFixed" style="background-image:url('<?php echo $image['sizes']['xlarge']; ?>');">
    <div class=" container-fluid h-100">
        <div class="row align-items-center justify-content-center justify-content-lg-start h-100">
            <div class="col-sm-20 col-md-16 col-lg-11 offset-lg-10 col-xl-9 offset-xl-12 col-xxl-7 offset-xxl-12 tabletCenter">
                <div class="reveal revealFB reveal1">
                    <?php echo $contenu; ?>
                    <?php
                    if ($lien):
                        get_template_part('yaniklab-parts/part', 'link', array(
                            'lien' => $lien,
                            'buttons' => '',
                            'btn' => 'btn-basic btn-beige',
                        ));
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>