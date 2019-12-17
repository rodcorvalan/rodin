<?php
/**
 * Main Slider
 *
 * @package ARMIX
 */

wp_enqueue_script( 'armix.main-slider' );

$group = get_sub_field( 'main_slider' );

?>

<style type="text/css">

<?php foreach ( $group as $slide_key => $slide ) : ?>

.main-slider.module-<?php echo esc_attr( $module_count ); ?> .main-slider__slide--number-<?php echo esc_attr( $slide_key + 1 ); ?>
{
	background-image: url(<?php echo esc_url( $slide['image_s'] ); ?>);
}
@media ( min-width: 640px )
{
	.main-slider.module-<?php echo esc_attr( $module_count ); ?> .main-slider__slide--number-<?php echo esc_attr( $slide_key + 1 ); ?>
	{
		background-image: url(<?php echo esc_url( $slide['image_m'] ); ?>);
	}
}
@media ( min-width: 1024px )
{
	.main-slider.module-<?php echo esc_attr( $module_count ); ?> .main-slider__slide--number-<?php echo esc_attr( $slide_key + 1 ); ?>
	{
		background-image: url(<?php echo esc_url( $slide['image_l'] ); ?>);
	}
}
@media ( min-width: 1440px )
{
	.main-slider.module-<?php echo esc_attr( $module_count ); ?> .main-slider__slide--number-<?php echo esc_attr( $slide_key + 1 ); ?>
	{
		background-image: url(<?php echo esc_url( $slide['image_xl'] ); ?>);
	}	
}

<?php endforeach; ?>

</style>


<div class="module-<?php echo esc_attr( $module_count ); ?> main-slider">
	<div class="main-slider__slider">
		<?php foreach ( $group as $slide ) : ?>
			
			<?php if ( 'product' == $slide['kind'] ) : ?>

			<div class="main-slider__slide main-slider__slide--number-<?php echo esc_attr( $slide_key + 1 ); ?> main-slider__slide--kind-product">
				<div class="main-slider__slide-inner">
					<div class="main-slider__slide-heading">
						<div class="main-slider__title"><?php echo esc_attr( $slide['title'] ); ?></div>
						<div class="main-slider__subtitle"><?php echo esc_attr( $slide['subtitle'] ); ?></div>
						<div class="main-slider__description"><?php echo esc_attr( $slide['description'] ); ?></div>
					</div>
					<div class="main-slider__image-wrapper">
						<img src="<?php echo esc_url( $slide['product_image'] ); ?>" class="main-slider__image">
						<div class="main-slider__square"></div>
					</div>
					<div class="main-slider__button-wrapper">
						<a href="<?php echo esc_url( get_the_permalink( $slide['product_id'] ) ); ?>" class="main-slider__view-more button button--style-two">Ver Más</a>
					</div>
				</div>
			</div>

			<?php elseif ( 'image' == $slide['kind'] ) : ?>
			<div class="main-slider__slide main-slider__slide--number-<?php echo esc_attr( $slide_key + 1 ); ?> main-slider__slide--kind-image">
			<?php endif; ?>
			
		<?php endforeach ?>
	</div>
	<div class="dots main-slider__dots"></div>
	<div class="main-slider__arrows">
		<a href="#" class="main-slider__arrow main-slider__arrow-left">
			<img src="<?php echo esc_attr( TDU ); ?>/images/arrow-left.svg" class="main-slider__arrow-image">
		</a>
		<a href="#" class="main-slider__arrow main-slider__arrow-right">
			<img src="<?php echo esc_attr( TDU ); ?>/images/arrow-right.svg" class="main-slider__arrow-image">
		</a>
	</div>
</div>
