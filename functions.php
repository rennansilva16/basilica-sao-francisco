<?php
function basilica_wp_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('style_css', get_stylesheet_uri());
    wp_enqueue_style('main_css', get_stylesheet_directory_uri(). '/assets/css/main.css' );
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap', false );
    // CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/style.css', [], '5.3');

    // JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/scripts.js', [], '5.3', true);
}

add_action('wp_enqueue_scripts', 'basilica_wp_styles');