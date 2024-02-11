<?php

// Import Resources
function import_recourse()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.1', 'all');
    wp_enqueue_style('Yekan Font', get_template_directory_uri() . '/assets/fonts/Yekan-Font-3.0/Yekan.css', array(), '1.1', 'all');
}
add_action('wp_enqueue_scripts', 'import_recourse');


// Theme Support
function theme_setup()
{

    register_nav_menus(array(
        'top-header' => __("Top-Header Menu")
    ));

    register_nav_menus(array(
        'primary' => __("Primary Menu")
    ));
}

add_action('after_setup_theme', "theme_setup");
