<?php
/**
 * Molecules: Header Top
 *
 * @package ARMIX
 */

?>
<div class="<?php echo esc_attr( $class ); ?> header-top">
	<div class="header-top__inner">
		<?php $class = 'header-top__main-menu'; include TD . '/parts/molecules/main-menu.php'; ?>
		<?php $class = 'header-top__menu-icon';  include TD . '/parts/atoms/menu-icon.php'; ?>
		<?php $class = 'header-top__logo'; include TD . '/parts/atoms/logo.php'; ?>
		<?php $class = 'header-top__search-icon'; include TD . '/parts/atoms/search-icon.php'; ?>
		<?php $class = 'header-top__my-account-link'; include TD . '/parts/atoms/my-account-link.php'; ?>
		<?php $class = 'header-top__social-links'; include TD . '/parts/molecules/social-links.php'; ?>
	</div>
</div>
<?php
unset( $class );
