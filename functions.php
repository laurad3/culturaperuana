<?php

// adding CSS and JS
function cultura_setup() {
    // styles
    wp_enqueue_style('google-fonts-cabin-condensed', 'https://fonts.googleapis.com/css2?family=Cabin+Condensed:wght@500&display=swap');
    wp_enqueue_style('google-fonts-cabin', 'https://fonts.googleapis.com/css2?family=Cabin&display=swap');
    wp_enqueue_style('cultura-css', get_template_directory_uri() . '/frontend/css/cultura.css');

    // scripts
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/cc9d58dbce.js');
    wp_enqueue_script('cultura-js', get_template_directory_uri() . '/frontend/js/cultura.js');
}

// add action to tell wordpress to start setup
add_action('wp_enqueue_scripts', 'cultura_setup');

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu'),
        )
    );
}

add_action('init', 'register_my_menus');