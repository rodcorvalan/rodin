<?php
/**
 * Atoms: Cart Count
 *
 * @package ARMIX
 */

$cart_url = wc_get_cart_url();
$cart_count = WC()->cart->get_cart_contents_count();

?>
<div class="<?php echo esc_attr( $class ); ?> cart-count">
	<a href="<?php echo esc_url( $cart_url ); ?>" class="cart-count__link">
		<img class="cart-count__icon" src="<?php echo esc_attr( TDU ); ?>/images/cart-count-icon.svg" />
		<?php if ( $cart_count > 0 || true ) : ?>
		<div class="cart-count__number"><?php echo esc_attr( $cart_count ); ?></div>
		<?php endif; ?>
	</a>
</div>
<?php
unset( $class );
