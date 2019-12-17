<?php
/**
 * Subscription Form
 *
 * @package ARMIX
 */

$group = get_sub_field( 'subscription_form' );

?>

<div class="module-<?php echo esc_attr( $module_count ); ?> subscription-form">
	<div class="subscription-form__inner">
		<div class="subscription-form__title">
			<img src="<?php echo esc_attr( TDU ); ?>/images/subscription-form-icon.svg" class="subscription-form__icon" />
			<h4 class="subscription-form__text"><?php echo esc_attr( $group['title'] ); ?></h4>
		</div>
		<div class="subscription-form__form-wrapper">
			<?php echo do_shortcode( $group['shortcode'] ); ?>
		</div>
	</div>
</div>
