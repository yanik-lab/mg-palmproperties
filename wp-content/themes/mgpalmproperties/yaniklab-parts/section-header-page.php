<section class="section-header-page full bgGreen">
    <div class="container-fluid bgSection reveal revealBG reveal1 h-100">
        <div class="bgHeader">
            <div class="reveal revealFB reveal1 h-100">
                <div class="reveal revealIMG reveal2 h-100">
                    <?php echo wp_get_attachment_image($args['hero']['image'], 'large', '',  ['class' => '']); ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-center justify-content-md-start align-items-center h-100 position-relative z-3">
            <div class="col-sm-20 col-md-18 offset-md-2 col-lg-14 offset-lg-3 col-xl-12 offset-xl-4">
                <div class="reveal revealFB reveal1">
                    <i class="ico pictofavicon"></i>
                </div>
                <div class="reveal revealFB reveal2">
                    <?php echo $args['hero']['contenu']; ?>
                </div>
            </div>
        </div>
    </div>
</section>