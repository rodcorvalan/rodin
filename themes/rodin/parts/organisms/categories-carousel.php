<?php
/**
 * Categories Carousel
 *
 * @package ARMIX
 */

wp_enqueue_script( 'armix.categories-carousel' );

$category_ids = get_sub_field( 'categories' );

?>
<div class="module-<?php echo esc_attr( $module_count ); ?> categories-carousel">
	<div class="categories-carousel__inner">
		<div class="categories-carousel__list">
			<?php foreach ( $category_ids as $category_id ) : ?>

				<?php $current_term = get_term_by( 'id', $category_id, 'product_cat' ); ?>
				<?php $thumbnail_id = get_term_meta( $current_term->term_id, 'thumbnail_id', true ); ?>
				<?php $image_url = wp_get_attachment_url( $thumbnail_id ); ?>

				<div class="categories-carousel__item">
					<div class="categories-carousel__item-wrapper">
						<a href="<?php echo esc_url( get_term_link( $current_term ) ); ?>" class="categories-carousel__item-image-wrapper">
							<?php if ( $image_url ) : ?>
							<img src="<?php echo esc_url( $image_url ); ?>" class="categories-carousel__item-image">
							<?php endif; ?>
						</a>
						<a href="<?php echo esc_url( get_term_link( $current_term ) ); ?>" class="categories-carousel__link"><span class="categories-carousel__text"><?php echo esc_attr( $current_term->name ); ?></span></a>
					</div>
				</div>

			<?php endforeach ?>
		</div>
	</div>
</div>
