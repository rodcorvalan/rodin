<?php
/**
 * Atoms: Menu Icon
 *
 * @package ARMIX
 */

?>
<div class="<?php echo esc_attr( $class ); ?> menu-icon">
	<a href="#" class="menu-icon__link menu-icon__link--state-close">
		<img class="menu-icon__icon menu-icon__icon--menu" src="<?php echo esc_attr( TDU ); ?>/images/menu-icon.svg" />
		<img class="menu-icon__icon menu-icon__icon--close" src="<?php echo esc_attr( TDU ); ?>/images/close-icon.svg" />
	</a>
</div>
<?php
unset( $class );
