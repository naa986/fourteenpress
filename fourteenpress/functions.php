<?php
/**
 * Functions and definitions for the Fourteenpress theme.
 */
add_action( 'after_setup_theme', 'fourteenpress_theme_setup' );

function fourteenpress_theme_setup() {
    load_child_theme_textdomain( 'fourteenpress', get_stylesheet_directory() . '/languages' );
}

add_action('wp_enqueue_scripts', 'fourteenpress_enqueue_theme_style');

function fourteenpress_enqueue_theme_style() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_action('twentyfourteen_credits', 'fourteenpress_credits_handler');

function fourteenpress_credits_handler() {
    printf( __( '%s theme', 'fourteenpress' ), 'Fourteenpress' ); ?> |
    <?php
}

add_action('widgets_init', 'fourteenpress_remove_left_sidebar', 11);

function fourteenpress_remove_left_sidebar() {
    unregister_sidebar('sidebar-1');
}
