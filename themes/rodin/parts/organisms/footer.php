<?php
/**
 * Organisms: Footer
 *
 * @package ARMIX
 */

?>
<footer class="footer">
	<div class="footer__inner">
		<?php $class = 'footer__logo'; include TD . '/parts/atoms/logo.php'; ?>
		<?php $class = 'footer__footer-menu'; include TD . '/parts/molecules/footer-menu.php'; ?>
		<?php $class = 'footer__social-links'; include TD . '/parts/molecules/social-links.php'; ?>
		<?php $class = 'footer__afip'; include TD . '/parts/molecules/afip.php'; ?>
	</div>
	<?php $class = 'footer__copyright'; include TD . '/parts/molecules/copyright.php'; ?>
</footer>
