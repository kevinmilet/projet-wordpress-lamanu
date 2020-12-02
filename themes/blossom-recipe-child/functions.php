<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

// wp_enqueue_style( 'bootstrap-stylesheet', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');

// wp_enqueue_script( 'script-perso', get_theme_file_uri() . '/script.js' );

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    // if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    // }
}