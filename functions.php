<?php

/**
 * Register and enqueue styles
 *
 * wp_register_style( $handle, $src, $deps, $ver, $media );
 */

function enqueue_css() {
    wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', false, null, 'all' );
    wp_register_style( 'screen', get_template_directory_uri() . '/stylesheets/screen.css', false, null, 'screen, projection' );
    wp_register_style( 'ie', get_template_directory_uri() . '/stylesheets/screen.css', false, null, 'screen, projection' );
    wp_register_style( 'print', get_template_directory_uri() . '/stylesheets/screen.css', false, null, 'print' );

    wp_enqueue_style( 'normalize' );
    wp_enqueue_style( 'screen' );
    wp_enqueue_style( 'ie' );
    wp_enqueue_style( 'print' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_css' );

?>