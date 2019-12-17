<?php
/**
 * Stylesheets
 *
 * @package armix
 */

/**
 * Add Stylesheets
 */
function armix_add_stylesheets() {

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap', array(), '1.0' );
	wp_enqueue_style( 'armix-style', get_template_directory_uri() . '/stylesheets/style.css', array(), '1.02' );

	wp_dequeue_style( 'select2' );
	wp_deregister_style( 'select2' );
}
add_action( 'wp_enqueue_scripts', 'armix_add_stylesheets', 100 );


 /**
  * Disable Woocommerce Styles
  */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Disable Contact Form 7
 */
function armix_deregister_styles() {
	wp_deregister_style( 'contact-form-7' );
}
add_action( 'wp_print_styles', 'armix_deregister_styles', 100 );
