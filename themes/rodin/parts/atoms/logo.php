<?php
/**
 * Atom: Logo
 *
 * @package ARMIX
 */

?>
<div class="<?php echo esc_attr( $class ); ?> logo">
	<h1 class="logo__heading">
		<a href="<?php echo esc_url( get_site_url() ); ?>" class="logo__link">
			<img src="<?php echo esc_attr( TDU ); ?>/images/logo.svg" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="logo__image" />
		</a>
	</h1>
</div>
<?php
unset( $class );
