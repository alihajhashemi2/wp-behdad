<?php

require get_theme_file_path("/include/settings-option.php");


// Import Resources
function import_recourse()
{
    // Yekan Font
    wp_enqueue_style('Yekan Font', get_template_directory_uri() . '/assets/fonts/Yekan-Font-3.0/Yekan.css', array(), '1.1', 'all');
    // Fontawesome
    wp_enqueue_style('Fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome-pro/css/all.min.css', array(), '1.1', 'all');
    // Bootstrap
    wp_enqueue_style('Bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), '1.1', 'all');
    // Reset Style
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.1', 'all');
    // Main Style
    wp_enqueue_style('style', get_stylesheet_uri());

    // Main JS
    wp_enqueue_script("Main JS", get_template_directory_uri() . "/assets/js/main.js", array('jquery'), "1.1", "all");
    // Jquery
    wp_enqueue_script("jquery", get_template_directory_uri() . "/node_modules/jquery/dist/jquery.min.js", array(), "1.1", "all");
    // Bootstrap
    wp_enqueue_script("Bootstrap", get_template_directory_uri() . "/node_modules/bootstrap/dist/js/bootstrap.min.js", array(), "1.1", "all");
}
add_action('wp_enqueue_scripts', 'import_recourse');


// Theme Support
function theme_setup()
{

    register_nav_menus(array(
        'top-header' => __("Top-Header Menu")
    ));

    register_nav_menus(array(
        'header-navigation' => __("Header-Navigation")
    ));

    register_nav_menus(array(
        'slider-help' => __("slider-help")
    ));

    add_theme_support("custom-logo");

    add_theme_support("woocommerce");
}

add_action('after_setup_theme', "theme_setup");

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'textdomain'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');
