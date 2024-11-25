<?php
$hero = get_field('section_contact', pll_get_the_id(get_option('page_on_front')));
if ($hero):
?>
    <section class="section-contact standard first last bgWhite">
        <div class="container-fluid bgSection">
            <div class="row">
                <div class="col-24 text-center introduction">
                    <div class="reveal revealFB reveal1 mb-5">
                        <img src='<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-small-light.png' alt='<?php echo bloginfo('title'); ?> - <?php echo bloginfo('description'); ?>' srcset='<?php bloginfo('template_url'); ?>/images/logo-mg-palm-properties-small-light@2x.png 2x' class='img-fluid' loading='lazy'>
                    </div>
                    <div class="reveal revealFB reveal2">
                        <h2 class="mb-5">
                            <?php echo $hero['introduction']; ?>
                        </h2>
                    </div>
                    <div class="reveal revealFB reveal3">
                        <div class="buttons center">
                            <a href="#" class="btn btn-basic btn-dark btn-icon">
                                <i class="ico pictophone"></i>
                                <span>Nous contacter</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>