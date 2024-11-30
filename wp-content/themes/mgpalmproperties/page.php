<?php
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <section class="section-properties-introduction standard firstxl last bgWhite">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-10 text-center introduction">
                    <div class="reveal revealFB reveal1">
                        <i class="ico pictofavicon"></i>
                    </div>
                    <div class="reveal revealFB reveal2">
                        <h1> <?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-xl-10 text-center">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>