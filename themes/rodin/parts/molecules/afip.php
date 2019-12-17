<?php
/**
 * Molecules: AFIP
 *
 * @package ARMIX
 */

?>
<div class="<?php echo esc_attr( $class ); ?> afip">
	<?php the_field( 'afip', 'options' ); ?>
</div>
<?php
unset( $class );
