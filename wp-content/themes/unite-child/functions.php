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

/*
 * Register "Films" post type.
 */
add_action( 'init', 'unite_child_register_post_types' );

function unite_child_register_post_types() {
    register_post_type(
        'film',
        array(
            'labels' => unite_child_get_post_labels( __( 'Film', 'unite-child' ), __( 'Films', 'unite-child' ) ),
            'exclude_from_search' => false,
            'has_archive' => true,
            'public' => true,
            'rewrite' => array( 'slug' => 'film' ),
            'supports' => array( 'title', 'editor' ),
            'can_export' => true,
            'show_in_nav_menus' => true
        )
    );
}

function unite_child_get_post_labels( $singular_name, $name ) {
    return array(
        'name' => $name,
        'singular_name' => $singular_name,
        'add_new' => __( 'Add New', 'unite-child' ),
        'add_new_item' => sprintf( __( 'Add New %s', 'unite-child' ), $singular_name ),
        'edit_item' => sprintf( __( 'Edit %s', 'unite-child' ), $singular_name ),
        'new_item' => sprintf( __( 'New %s', 'unite-child' ), $singular_name ),
        'view_item' => sprintf( __( 'View %s', 'unite-child' ), $singular_name ),
        'search_items' => sprintf( __( 'Search %s', 'unite-child' ), $name ),
        'not_found' => sprintf( __( 'No %s found', 'unite-child' ), $name ),
        'not_found_in_trash' => sprintf( __( 'No %s found in Trash', 'unite-child' ), $name ),
        'parent_item_colon' => ''
    );
}

