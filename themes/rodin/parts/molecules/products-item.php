<?php
/**
 * Molecules: Products Item
 *
 * @package armix
 */

$product = wc_get_product( $product_id );
$thumbnail_url  = get_the_post_thumbnail_url( $product_id, 'products-item' );
$has_sale_price = $product->get_sale_price() > 0;
$budget_url = \Rodin_Budget\Helpers::get_add_to_budget_url( $product_id );

?>

<article class="products-item" itemscope itemtype="http://schema.org/Product" itemavailability="true">

	<div class="products-item__inner">

		<a href="<?php echo esc_url( get_the_permalink( $product_id ) ); ?>" class="products-item__thumbnail" itemprop="url">
			<img src="<?php echo esc_url( $thumbnail_url ); ?>" class="products-item__image" alt="<?php esc_attr( get_the_title( $product_id ) ); ?>" itemprop="image"  />
			<?php if ( $has_sale_price ) : ?>
				<?php $off = intval( ( 1 - ( $product->get_sale_price() / $product->get_regular_price() ) ) * 100 ); ?>
			<span class="products-item__promotion"><?php echo esc_attr( $off ); ?>% OFF</span>
			<?php endif; ?>
		</a>
		
		<div class="products-item__text-content">
			<h1 class="products-item__name" itemprop="name" data-mh="products-item__name">
				<a href="<?php echo esc_url( get_the_permalink( $product_id ) ); ?>" class="products-item__link" itemprop="url"><?php echo esc_attr( get_the_title( $product_id ) ); ?></a>
			</h1>
			
			<?php if ( false && get_the_excerpt( $product_id ) ) : ?>
			<div class="products-description" itemprop="description">
				<?php echo esc_attr( get_the_excerpt( $product_id ) ); ?>
			</div>
			<?php endif; ?>

			<div class="products-item__prices" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
				<?php if ( $has_sale_price ) : ?>
				<div class="products-item__price products-item__price--sale" itemprop="lowPrice"><?php echo wp_kses_post( wc_price( $product->get_sale_price() ) ); ?></div>
				<?php endif; ?>
				<div class="products-item__price products-item__price--regular" itemprop="price"><?php echo wp_kses_post( wc_price( $product->get_regular_price() ) ); ?></div>
			</div>
		</div>

		<div class="products-item__buttons">
			<a href="<?php echo esc_url( $budget_url ); ?>" class="button button--style-three button--size-grow products-item__button">Cotizar</a>
			<?php if ( ! is_cart() ) : ?>
			<a href="?add-to-cart=<?php echo esc_attr( $product_id ); ?>" class="button button--size-grow products-item__button">Comprar</a>
			<?php else : ?>
			<a href="<?php esc_url( get_the_permalink( $product_id ) ); ?>" class="button button--size-grow products-item__button">Ver Más</a>
			<?php endif; ?>
		</div>

	</div>

</article>
