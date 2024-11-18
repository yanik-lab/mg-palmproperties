<?php
get_header();
?>
<?php //var_dump('page.php');
?>
<?php while (have_posts()) : the_post(); ?>

    <section class="standard">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-24">
                    <div class="reveal revealFB reveal1 intro-content">
                        <h1 class="titre">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-24 page-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>