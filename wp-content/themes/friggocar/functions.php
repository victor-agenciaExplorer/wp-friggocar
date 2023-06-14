<?php

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
function friggocar_load_scripts()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;900&family=Oswald:wght@700&family=Roboto+Condensed&display=swap', array(), null);

    wp_enqueue_style('friggocar-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('friggocar-bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('friggocar-slick-style', get_template_directory_uri() . '/assets/lib/slick/css/slick.css', array(), null);
    wp_enqueue_style('friggocar-slick-theme', get_template_directory_uri() . '/assets/lib/slick/css/slick-theme.css', array(), null);
    wp_enqueue_style('friggocar-main-style', get_template_directory_uri() . '/assets/styles/css/styles.css', array(), null);

    wp_enqueue_script('friggocar-jquery', 'http://code.jquery.com/jquery-1.11.0.min.js', array(), null, true);
    wp_enqueue_script('friggocar-jquery-migrate', 'http://code.jquery.com/jquery-migrate-1.2.1.min.js', array(), null, true);

    wp_enqueue_script('friggocar-bootstrap-bundle', get_template_directory_uri() . '/assets/lib/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('friggocar-slick-script', get_template_directory_uri() . '/assets/lib/slick/js/slick.min.js', array('jquery'), null, true);

    wp_enqueue_script('friggocar-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'friggocar_load_scripts');

function friggocar_config()
{
    register_nav_menus(
        array(
            'friggocar_main_menu' => 'Menu'
        )
    );

    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'friggocar_config', 0);