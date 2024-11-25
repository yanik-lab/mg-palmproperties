<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-24 text-center introduction">
            <?php if ($args['icon'] != false): ?>
                <div class="reveal revealFB reveal1">
                    <i class="ico pictofavicon"></i>
                </div>
            <?php endif; ?>
            <div class="reveal revealFB reveal2">
                <?php echo $args['introduction'] ?>
            </div>
        </div>
    </div>
</div>