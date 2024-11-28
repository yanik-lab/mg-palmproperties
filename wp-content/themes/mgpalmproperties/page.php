<?php
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <section class="section-properties-introduction standard firstxl bgWhite">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-24 text-center introduction">
                    <div class="reveal revealFB reveal1">
                        <i class="ico pictofavicon"></i>
                    </div>
                    <div class="reveal revealFB reveal2">
                        <h1> <?php the_title(); ?></h1>
                    </div>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>