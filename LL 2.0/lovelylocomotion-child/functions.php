<?php
/**
 * Lovely Locomotion Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage lovelylocomotion
 * @since Lovely Locomotion 1.0
 */

function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'services' ),
        )
    );
    register_post_type( 'packages',
        array(
            'labels' => array(
                'name' => __( 'Packages' ),
                'singular_name' => __( 'Package' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'packages' ),
        )
    );
}

add_theme_support( 'post-thumbnails', array( 'page', 'post' ) );          // Pages only

add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 300,
    'flex-width' => true,
) );

add_action( 'init', 'create_custom_post_types' );

function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More &rsaquo;', 'textdomain' )
    );
}

add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );