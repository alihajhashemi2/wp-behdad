<?php

// Import resources
function import_recourse()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.1', 'all');
    wp_enqueue_style('Yekan Font', get_template_directory_uri() . '/assets/fonts/Yekan-Font-3.0/Yekan.css', array(), '1.1', 'all');
}
add_action('wp_enqueue_scripts', 'import_recourse');
