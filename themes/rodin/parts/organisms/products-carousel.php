<?php
/**
 * Product Carousel
 *
 * @package ARMIX
 */

wp_enqueue_script( 'armix.products-carousel' );

$group = get_sub_field( 'products_carousel' );

// Kind.
if ( 'manual' == $group['kind'] ) {

	$products = $group['products'];

} else if ( 'automatic' == $group['kind'] ) {

	$products = array();

	// Amount.
	$args = array(
		'numberposts' => $group['amount'],
		'post_type' => 'product',
	);

	// Filters.
	if ( 'tag' == $group['filter'] ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'product_tag',
				'field'    => 'term_id',
				'terms'    => $group['tag'],
			),
		);
	} else if ( 'category' == $group['filter'] ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'product_cat',
				'field'    => 'term_id',
				'terms'    => $group['category'],
			),
		);
	} else if ( 'sale' == $group['filter'] ) {
		$args['meta_query'] = array(
			'relation' => 'OR',
			array(
				'key' => '_sale_price',
				'value' => 0,
				'compare' => '>',
				'type' => 'numeric',
			),
			array(
				'key' => '_min_variation_sale_price',
				'value' => 0,
				'compare' => '>',
				'type' => 'numeric',
			),
		);
	} else if ( 'featured' == $group['filter'] ) {
		$args['post__in'] = wc_get_featured_product_ids();
	}

	// Order.
	if ( 'lastest' == $group['order'] ) {
		$args['orderby'] = 'date';
		$args['order'] = 'DESC';
	} else if ( 'most_view' == $group['order'] ) {
		$args['orderby'] = 'meta_value_num';
		$args['meta_key'] = 'post_views_count';
		$args['order'] = 'DESC';
	} else if ( 'most_sold' == $group['order'] ) {
		$args['orderby'] = 'meta_value_num';
		$args['meta_key'] = 'total_sales';
		$args['order'] = 'DESC';
	}

	$current_posts = get_posts( $args );

	foreach ( $current_posts as $current_post ) {
		$products[] = $current_post->ID;
	}
}



?>

<div class="module-<?php echo esc_attr( $module_count ); ?> products-carousel">
	<div class="products-carousel__inner">
		<h2 class="heading--style-one products-carousel__title"><?php echo esc_attr( $group['title'] ); ?></h2>
		<div class="products-carousel__carousel">
			<?php foreach ( $products as $product_id ) : ?>
			<div class="products-carousel__carousel-item">
				<?php include TD . '/parts/molecules/products-item.php'; ?>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
