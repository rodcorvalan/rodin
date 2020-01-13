<?php
/**
 * Page Cover
 *
 * @package ARMIX
 */

$module_count = ( isset( $module_count ) ) ? $module_count : 0;
$image_url = TDU . '/images/page-cover.jpg';

$group = get_sub_field( 'page_cover' );

?>

<style type="text/css">
.page-cover.module-<?php echo esc_attr( $module_count ); ?> .page-cover__image
{
	background-image: url(<?php echo esc_url( $image_url ); ?>);
}
</style>

<div class="module-<?php echo esc_attr( $module_count ); ?> page-cover">
	<div class="page-cover__inner">
		<div class="page-cover__image"></div>
		<div class="page-cover__content">
			<div class="page-cover__content-inner">
				<h1 class="page-cover__title"><?php the_title(); ?></h1>
				<?php $class = 'page-cover__breadcrumbs' ; include TD . '/parts/molecules/breadcrumbs.php'; ?>
			</div>
		</div>
	</div>
</div>
