<?php
/**
 * Atoms: Search Icon
 *
 * @package ARMIX
 */

?>
<div class="<?php echo esc_attr( $class ); ?> search-icon">
	<a href="#" class="search-icon__link search-icon__link--state-close">
		<img class="search-icon__icon search-icon__icon--search" src="<?php echo esc_attr( TDU ); ?>/images/search-icon.svg" />
		<img class="search-icon__icon search-icon__icon--close" src="<?php echo esc_attr( TDU ); ?>/images/close-icon.svg" />
	</a>
</div>
<?php
unset( $class );
