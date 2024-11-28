<?php
global $counterS;
$image = get_sub_field('image');
$contenu = get_sub_field('contenu');
$liste = get_sub_field('liste');
?>
<section id="section-builder-<?php echo $counterS; ?>" class="section-liste standard first last bgGreen">
    <div class="row g-0">
        <div class="col-lg-6 imageDecal">
            <div class="reveal revealFB reveal1">
                <?php echo wp_get_attachment_image($image, 'medium_large', '',  ['class' => 'img-fluid']); ?>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1">
            <div class="reveal revealFB reveal2">
                <?php echo $contenu; ?>
            </div>
        </div>
        <?php
        $counter = 1;
        $rows = $liste;
        if ($rows) :
        ?>
            <div class="col-lg-9 offset-lg-1 contenuDecal">
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