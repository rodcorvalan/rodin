<?php
/**
 * Organisms: Header
 *
 * @package ARMIX
 */

wp_enqueue_script( 'armix.header' ); 
?>
<header class="header">

	<?php $class = 'header__top'; include TD . '/parts/molecules/header-top.php'; ?>
	<?php $class = 'header__search-form'; include TD . '/parts/molecules/search-form.php'; ?>
	<?php $class = 'header__middle'; include TD . '/parts/molecules/header-middle.php'; ?>
	<?php $class = 'header__float-menu'; include TD . '/parts/molecules/float-menu.php'; ?>
	<div class="header__category-menu">
		<?php include TD . '/parts/molecules/category-menu.php'; ?>
	</div>
</header>
