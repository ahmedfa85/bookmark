<?php

function load_css() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style( 'bootstrap' );
    
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/all.css', array(), false, 'all');
    wp_enqueue_style( 'fontawesome' );

    wp_register_style('variables', get_template_directory_uri() . '/css/variables.css', array(), false, 'all');
    wp_enqueue_style( 'variables' );

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style( 'main' );
}
add_action('wp_enqueue_scripts', 'load_css');


function load_js() {
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script( 'bootstrap' );
}
add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');

// Menus
register_nav_menus(
    array(
        'main-menu' => 'Main Menu Location',
    )
);