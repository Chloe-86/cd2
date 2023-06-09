<?php

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_register_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array());
    wp_enqueue_style('theme-style');
}
function dequeue_ashe_gfonts_scripts()
{
    wp_dequeue_style('ashe-playfair-font');
    wp_dequeue_style('ashe-opensans-font');
    wp_dequeue_style('ashe-kalam-font');
    wp_dequeue_style('ashe-rokkitt-font');
}
add_action('wp_print_styles', 'dequeue_ashe_gfonts_scripts', 999);


// add_action('wp_enqueue_scripts', 'remove_googlefont_stylesheet');
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
add_filter('big_image_size_threshold', '__return_false');

function enqueue_custom_script() {
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/script.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_custom_script' );
