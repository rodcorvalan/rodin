<?php
/**
 * Banner
 *
 * @package ARMIX
 */

$group = get_sub_field( 'banner' );

?>

<style type="text/css">

.banner.module-<?php echo esc_attr( $module_count ); ?> .banner__image
{
	background-image: url(<?php echo esc_url( $group['image_s'] ); ?>);
}
@media ( min-width: 640px )
{
	.banner.module-<?php echo esc_attr( $module_count ); ?> .banner__image
	{
		background-image: url(<?php echo esc_url( $group['image_m'] ); ?>);
	}
}
@media ( min-width: 1024px )
{
	.banner.module-<?php echo esc_attr( $module_count ); ?> .banner__image
	{
		background-image: url(<?php echo esc_url( $group['image_l'] ); ?>);
	}
}
@media ( min-width: 1440px )
{
	.banner.module-<?php echo esc_attr( $module_count ); ?> .banner__image
	{
		background-image: url(<?php echo esc_url( $group['image_xl'] ); ?>);
	}	
}

</style>

<div class="module-<?php echo esc_attr( $module_count ); ?> banner">
	<a href="<?php echo esc_url( get_permalink( $group['link'] ) ); ?>" class="banner__image"></a>
</div>
