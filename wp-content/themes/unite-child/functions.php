<?php

if ( ! function_exists( 'unite_child_setup' ) ) :
    function unite_child_setup() {

        /*
         * Make theme available for translation.
         */
        load_theme_textdomain( 'unite-child', get_stylesheet_directory() . '/languages' );
    }
endif; // unite_child_setup
add_action( 'after_setup_theme', 'unite_child_setup' );

/*
 * Load style sheets.
 */
add_action( 'wp_enqueue_scripts', 'unite_child_css', 1001 );

function unite_child_css() {
    // unite child theme styles
    wp_register_style( 'unite-child', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'unite-child' );
}

