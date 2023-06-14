<?php
/*
Template Name: Contato
*/
?>

<?php get_header(); ?>

<main id="contact" class="contact">
    <?php
    while (have_posts()):
        the_post(); ?>

        <?php get_template_part('parts/internal-banner') ?>

    <?php endwhile; ?>

    <section id="contactForm" class="container my-5 col-lg-5">
        <h2 class="title mb-5">
            Tem interesse em algum dos nossos produtos ou serviços?
        </h2>

        <?php get_template_part('parts/form') ?>
    </section>

    <?php get_template_part('parts/maps') ?>
</main>


<?php get_footer(); ?>