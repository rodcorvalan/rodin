<?php
/**
 * Molecules: Header Middle
 *
 * @package ARMIX
 */

?>
<div class="<?php echo esc_attr( $class ); ?> header-middle">
	<div class="header-middle__inner">
		<?php $class = 'header-middle__logo'; include TD . '/parts/atoms/logo.php'; ?>
		<?php $class = 'header-middle__my-account-link'; include TD . '/parts/atoms/my-account-link.php'; ?>
		<?php $class = 'header-middle__search-form'; include TD . '/parts/molecules/search-form.php'; ?>
		<?php include TD . '/parts/atoms/budget-link.php'; ?>
		<?php include TD . '/parts/atoms/cart-count.php'; ?>
	</div>
</div>
<?php
unset( $class );
