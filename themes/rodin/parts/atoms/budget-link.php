<?php
/**
 * Atoms: Budget Link
 *
 * @package ARMIX
 */

$budget_url = get_field( 'budget_link', 'option' );

?>
<div class="<?php echo esc_attr( $class ); ?> budget-link">
	<a href="<?php echo esc_url( $budget_url ); ?>" class="budget-link__link">
		<img class="budget-link__icon" src="<?php echo esc_attr( TDU ); ?>/images/budget-link-icon.svg" />
	</a>
</div>
<?php
unset( $class );
