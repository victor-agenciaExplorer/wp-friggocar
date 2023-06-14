<?php get_header(); ?>

<main class="page">
    <?php
    while (have_posts()):
        the_post();
        ?>

        <?php get_template_part('parts/internal-banner') ?>


        <section class="container px-4 overflow-hidden my-5">
            <?php the_content(); ?>
        </section>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>