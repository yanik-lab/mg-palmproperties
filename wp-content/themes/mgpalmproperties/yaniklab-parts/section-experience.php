<section class="section-experience full bgGreen bgResponsive bgFixed" style="background-image:url('<?php echo $args['hero']['image']['sizes']['xlarge']; ?>');">
    <div class=" container-fluid h-100">
        <div class="row align-items-center justify-content-start h-100">
            <div class="col-lg-7 offset-lg-12">
                <div class="reveal revealFB reveal1">
                    <?php echo $args['hero']['contenu']; ?>
                    <?php
                    if ($args['hero']['lien']):
                        get_template_part('yaniklab-parts/part', 'link', array(
                            'lien' => $args['hero']['lien'],
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