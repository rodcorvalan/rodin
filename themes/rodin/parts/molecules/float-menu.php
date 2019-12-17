<?php
/**
 * Molecules: Float Menu
 *
 * @package ARMIX
 */

?>
<div class="<?php echo esc_attr( $class ); ?> float-menu">
	<?php $class = 'float-menu__main-menu'; include TD . '/parts/molecules/main-menu.php'; ?>
	<?php $class = 'float-menu__social-links'; include TD . '/parts/molecules/social-links.php'; ?>
</div>
<?php
unset( $class );
