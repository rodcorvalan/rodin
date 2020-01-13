<?php
/**
 * Molecules: Breadcrumbs
 *
 * @package ARMIX
 */

?>
<div class="<?php echo esc_attr( $class ); ?> breadcrumbs">
	<div class="breadcrumbs__inner">
		<a href="<?php echo esc_url( get_site_url() ); ?>">Rodin</a>
		<?php if ( is_page() ) : ?>
		 > <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php endif; ?>
	</div>
</div>
<?php
unset( $class );
