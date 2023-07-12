<?php

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_register_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array());
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

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
add_filter('big_image_size_threshold', '__return_false');

function dequeue_ashe_script()
{
    wp_dequeue_script( 'ashe-plugins' );
}

add_action('wp_enqueue_scripts', 'dequeue_ashe_script', 9999);

function enqueue_custom_scripts()
{
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
    
    wp_enqueue_script('custom-plugins', get_stylesheet_directory_uri() . '/assets/js/custom-plugins-child.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function modifier_balise_titre_produit() {
    echo '<h3 class="woocommerce-loop-product__title">';
    echo get_the_title();
    echo '</h3>';
}

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'modifier_balise_titre_produit', 10);
