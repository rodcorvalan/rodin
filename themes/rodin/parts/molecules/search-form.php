<?php
/**
 * Molecules: Search Form
 *
 * @package ARMIX
 */

?>
<div class="<?php echo esc_attr( $class ); ?> search-form">
	<div class="search-form__inner">
		<form method="get" class="search-form__form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="search" class="search-form__input" name="s" id="s" placeholder="Ingrese el término" />
			<button type="submit" name="submit" class="search-form__submit button">Buscar</button>
		</form>
	</div>
</div>
<?php
unset( $class );
