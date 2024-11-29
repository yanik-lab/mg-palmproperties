<?php
global $counterS;
$image = get_sub_field('image');
$contenu = get_sub_field('contenu');
$liste = get_sub_field('liste');
?>
<section id="section-builder-<?php echo $counterS; ?>" class="section-liste standard first last bgGreen">
    <div class="row g-0 align-items-start justify-content-center justify-content-lg-start">
        <div class="col-22 col-sm-14 col-md-8 col-lg-6 col-xl-5 col-xxxl-6 imageDecal">
            <div class="reveal revealFB reveal1">
                <?php echo wp_get_attachment_image($image, 'medium_large', '',  ['class' => 'img-fluid']); ?>
            </div>
        </div>
        <div class="col-22 col-sm-18 col-md-18 col-lg-5 offset-lg-1 col-xl-6 offset-xl-1 col-xxxl-4 offset-xxxl-1 tabletCenter">
            <div class="reveal revealFB reveal2">
                <?php echo $contenu; ?>
            </div>
        </div>
        <?php
        $counter = 1;
        $rows = $liste;
        if ($rows) :
        ?>
            <div class="col-22 col-sm-18 col-md-12 col-lg-10 offset-lg-1 col-xl-10 offset-xl-1 col-xxxl-9 offset-xxxl-1 contenuDecal tabletCenter">
                <?php foreach ($rows as $row) : ?>
                    <div class="liste reveal revealFB reveal1">
                        <h5>
                            <i class="ico pictoarrow"></i>
                            <span><?php echo $row['titre']; ?></span>
                        </h5>
                        <p><?php echo $row['description']; ?></p>
                    </div>
                <?php $counter++;
                endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>