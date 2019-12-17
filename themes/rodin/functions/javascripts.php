<?php
/**
 * Javacripts
 *
 * @package armix
 */

/**
 * Armix Add Javascripts
 */
function armix_add_javascripts() {

	/* Register Lib	 */
	wp_register_script( 'jquery.slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array( 'jquery' ), '1.9.0', true );
	wp_register_script( 'owl.carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array( 'jquery' ), '2.3.4', true );
	wp_enqueue_script( 'jquery.matchHeight', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js', array( 'jquery' ), '0.7.2', true );

	/* Register Theme */
	wp_register_script( 'armix.header', TDU . '/javascripts/armix.header.js', array( 'jquery' ), '1.03', true );
	wp_register_script( 'armix.main-slider', TDU . '/javascripts/armix.main-slider.js', array( 'jquery', 'jquery.slick' ), '1.0', true );
	wp_register_script( 'armix.products-carousel', TDU . '/javascripts/armix.products-carousel.js', array( 'jquery', 'owl.carousel' ), '1.0', true );
	wp_register_script( 'armix.categories-carousel', TDU . '/javascripts/armix.categories-carousel.js', array( 'jquery', 'owl.carousel' ), '1.0', true );

}

add_action( 'wp_enqueue_scripts', 'armix_add_javascripts' );
