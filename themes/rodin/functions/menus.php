<?php
/**
 * Menus
 *
 * @package ARMIX
 */

/**
 * Armix Add Menu
 */
function armix_add_menus() {
	register_nav_menu( 'main_menu', 'Main Menu' );
	register_nav_menu( 'category_menu', 'Category Menu' );
	register_nav_menu( 'footer_menu', 'Footer Menu' );
}
add_action( 'init', 'armix_add_menus' );



/**
 * Main Menu Icons
 *
 * @param  array $items Items.
 * @param  array $args Args.
 * @return array
 */
function armix_main_menu_icons( $items, $args ) {

	if ( 'main_menu' == $args->theme_location ) {
		foreach ( $items as &$item ) {
			$icon = get_field( 'icon', $item );
			if ( $icon ) {
				$text = $item->title;
				$item->title = '<img src="' . esc_attr( TDU . '/images/' . $icon ) . '.svg" class="main-menu__icon menu__icon" /><span class="main-menu__text menu__text">' . $text . '</span>';
			}
		}
	}

	return $items;
}
add_filter( 'wp_nav_menu_objects', 'armix_main_menu_icons', 10, 2 );
