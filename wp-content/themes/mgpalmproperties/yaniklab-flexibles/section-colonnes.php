<?php
global $counterS;
$introduction = get_sub_field('introduction');
$colonnes = get_sub_field('colonnes');
?>
<section id="section-builder-<?php echo $counterS; ?>" class="section-colonnes standard first last bgWhite">
    <?php
    if ($introduction):
        get_template_part('yaniklab-parts/section', 'introduction', array(
            'introduction' => $introduction,
            'icon' => false
        ));
    endif;
    ?>
    <?php
    $counter = 1;
    $rows = $colonnes;
    if ($rows) :
    ?>
        <div class="container-fluid">
            <div class="row g-5 justify-content-center">
                <?php
                foreach ($rows as $row) :
                    $center = $row['centre'];
                    if ($center === true) {
                        $class = "boxCenter";
                    } else {
                        $class = "";
                    }
                ?>
                    <div class="col-lg-7 boxes">
                        <div class="reveal revealFB reveal<?php echo $counter; ?>">
                            <?php echo wp_get_attachment_image($row['image'], 'square', '',  ['class' => 'img-fluid d-block mx-auto']); ?>
                            <div class="boxContent <?php echo $class; ?>">
                                <?php echo $row['contenu']; ?>
                            </div>
                        </div>
                    </div>
                <?php
                    $counter++;
                endforeach;
                ?>
            </div>
        </div>
    <?php endif; ?>
</section>