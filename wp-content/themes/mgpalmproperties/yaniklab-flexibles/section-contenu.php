<?php
global $counterS;
global $firsting;
$bgColor = $args['hero']['couleur_de_fond'];
$contenu = $args['hero']['contenu'];
$lien = $args['hero']['lien'];
?>
<section id="section-<?php echo $counterS; ?>" class="standard <?php echo $firsting; ?> deux-colonnes">
    <div class="section-bandeau-<?php echo $bgColor; ?>">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-sm-20 col-lg-18 col-xl-16 tabletCenter">
                    <div class="reveal revealFB reveal1">
                        <?php echo $contenu; ?>
                        <?php if ($lien): ?>
                            <div class="buttons small">
                                <a href="<?php echo  $lien['url']; ?>" title="<?php echo  $lien['title']; ?>" target="<?php echo  $lien['target']; ?>" class="btn btn-primary"><?php echo  $lien['title']; ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>