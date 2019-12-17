<?php
/**
 * Atoms: My Account Link
 *
 * @package ARMIX
 */

$my_account_link = get_permalink( get_option( 'woocommerce_myaccount_page_id' ) );

?>
<div class="<?php echo esc_attr( $class ); ?> my-account-link">
	<a href="<?php echo esc_url( $my_account_link ); ?>" class="my-account-link__link">
		<img class="my-account-link__icon" src="<?php echo esc_attr( TDU ); ?>/images/my-account-icon.svg" />
		<span class="my-account-link__text">Mi cuenta</span>
	</a>
</div>
<?php
unset( $class );
