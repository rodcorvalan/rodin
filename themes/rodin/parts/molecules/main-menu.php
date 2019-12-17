<?php
/**
 * Molecules: Main Menu
 *
 * @package ARMIX
 */

$args = array(
	'theme_location' => 'main_menu',
	'container' => '',
	'items_wrap' => '%3$s',
	'echo' => false,
	'walker' => new BEM_Menu_Walker(),
);
?>
<nav class="<?php echo esc_attr( $class ); ?> menu main-menu">
	<?php echo wp_nav_menu( $args ); ?>
</nav>
<?php
unset( $class );
