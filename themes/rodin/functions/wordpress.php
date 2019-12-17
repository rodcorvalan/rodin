<?php
/**
 * Wordpress Config
 *
 * @package ARMIX
 */

/**
 * WP Title
 *
 * @param  string $title Title.
 * @return string
 */
function armix_wp_title( $title ) {

	if ( ! is_front_page() || ! is_home() ) {
		return $title . get_bloginfo( 'name' );
	}
}
add_filter( 'wp_title', 'armix_wp_title' );
