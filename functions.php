<?php
function basilica_wp_styles() {
    // Enqueue Google Fonts
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap', false );

    // Bootstrap CSS (deve vir antes do main.css)
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], '5.3');

    // Seu CSS principal
    wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/main.css');

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', [], '5.3', true);
}
add_action('wp_enqueue_scripts', 'basilica_wp_styles');