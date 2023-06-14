<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <nav class="navbar navbar-expand-xl fixed-top">
            <div class="container justify-content-between">
                <a href="/" class="navbar-brand">
                    <img src="assets/images/logo.png" alt="" class="img-fluid">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                    <span class="open-menu"></span>
                    <span class="close-menu"></span>
                </button>

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'friggocar_main_menu',
                        'depth' => 1,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse justify-content-xl-end',
                        'container_id' => 'navbarNav',
                        'menu_class' => 'navbar-nav align-items-center gap-3',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    )
                );
                ?>

                <a href="contato.php" class="btn base-button ms-lg-5" role="button">Fale com um especialista</a>
            </div>
        </nav>
    </header>