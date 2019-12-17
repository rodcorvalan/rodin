<?php
/**
 * Woocommerce
 *
 * @package armix
 */


add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


/**
 * Products Item
 */


function woocommerce_template_loop_product_link_open() {
	global $product;

	$link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );

	echo '<a href="' . esc_url( $link ) . '" class="products-item__link woocommerce-LoopProduct-link woocommerce-loop-product__link">';
}