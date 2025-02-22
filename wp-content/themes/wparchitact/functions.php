<?php


function wp_architact_scripts()
{
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . "/assets/css/bootstrap.css", array(), time(), 'all');
    wp_enqueue_style('wp-architact-style', get_stylesheet_directory_uri() . "/assets/css/style.css", array(), time(), 'all');
    wp_enqueue_style('wp-architact-responsive-style', get_stylesheet_directory_uri() . "/assets/css/responsive.css", array(), time(), 'all');
    wp_enqueue_style('wp-architact-color-switcher', get_stylesheet_directory_uri() . "/assets/css/color-switcher-design.css", array(), time(), 'all');
    wp_enqueue_style('wp-architact-default-css', get_stylesheet_directory_uri() . "/assets/css/default-theme.css", array(), time(), 'all');
}
add_action("wp_enqueue_scripts", "wp_architact_scripts");