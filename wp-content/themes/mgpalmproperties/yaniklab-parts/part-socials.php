<ul class="socials">
    <?php if (get_field('instagram', 'options')) : ?>
        <li>
            <a href="<?php echo get_field('instagram', 'options'); ?>" title="Instagram" target="_blank">
                <i class="ico pictoinsta"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if (get_field('facebook', 'options')) : ?>
        <li>
            <a href="<?php echo get_field('facebook', 'options'); ?>" title="Facebook" target="_blank">
                <i class="ico pictofb"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if (get_field('linkedin', 'options')) : ?>
        <li>
            <a href="<?php echo get_field('linkedin', 'options'); ?>" title="Linkedin" target="_blank">
                <i class="ico pictolinkedin"></i>
            </a>
        </li>
    <?php endif; ?>
</ul>