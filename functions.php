<?php

/**
 * Proper way to enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', 'tm1c2017_theme_scripts' );
function tm1c2017_theme_scripts() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
