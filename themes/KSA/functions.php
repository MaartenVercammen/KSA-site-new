<?php

function Load_css()
{
    // Order matters the last one will be the one that will be used

    // Bootstrap stylesheet
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    // Own stylesheet
    wp_register_style("main", get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts', 'Load_css');

function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', 'jquery', false, true);
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options

add_theme_support('post-thumbnails');
add_post_type_support( 'page', 'excerpt' );

// Menus

add_theme_support('menus');

// Register menus

register_nav_menus(
    array(
        'header-menu' => 'Top Menu Location',
    )
);