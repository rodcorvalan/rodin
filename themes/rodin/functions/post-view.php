<?php
/**
 * Post View
 *
 * @package ARMIX
 */

/**
 * Get Post View
 *
 * @param  integer $post_id Post ID.
 * @return integer
 */
function armix_get_post_view( $post_id = 0 ) {
	if ( 0 == $post_id ) {
		$post_id = get_the_ID();
	}
	$post_view = get_post_meta( $post_id, 'post_views_count', true );
	return $post_view;
}

/**
 * Set Post View
 *
 * @param WP_Post $post_object Post.
 */
function armix_set_post_view( $post_object ) {
	$key = 'post_views_count';
	$post_id = $post_object->ID;
	$count = (int) get_post_meta( $post_id, $key, true );
	$count++;
	update_post_meta( $post_id, $key, $count );
}

add_action( 'the_post', 'armix_set_post_view' );
