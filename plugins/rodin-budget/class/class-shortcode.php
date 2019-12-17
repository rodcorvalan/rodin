<?php
/**
 * Shortcode
 *
 * @package Rodin_Budget
 */

namespace Rodin_Budget {

	/**
	 * Class Shortcode
	 *
	 * @package Rodin_Budget
	 */
	class Shortcode {

		/**
		 * Constructor
		 */
		public function __construct() {
			add_shortcode( 'rodin_budget_button', array( $this, 'button_shortcode' ) );
			add_shortcode( 'rodin_budget', array( $this, 'budget_shortcode' ) );
		}

		/**
		 * Button Shortcode
		 *
		 * @param  array $atts Attributes.
		 * @return string.
		 */
		public function button_shortcode( $atts ) {

			if ( isset( $atts['post_id'] ) ) {
				$post_id = intval( $atts['post_id'] );
			} else {
				$post_id = get_the_ID();
			}

			$url = get_option( PREFIX . '_budget_page' );

			$button_url = "$url?add-to-budget=$post_id";

			$button = "<a href='$button_url' class='button'>Cotizar</a>";

			return $button;
		}

		/**
		 * Budge Shortcode
		 *
		 * @param  array $atts Attributes.
		 */
		public function budget_shortcode( $atts ) {

			$budget_list = Budget::get_budget_array();
			$budget_url = get_option( PREFIX . '_budget_page' );

			if ( ! empty( $_POST['_wpnonce'] ) ) {
				$retrieved_nonce = sanitize_text_field( wp_unslash( $_POST['_wpnonce'] ) );
				if ( wp_verify_nonce( $retrieved_nonce, PREFIX ) ) {
					$post_data = wp_unslash( $_POST );
				}
			}
			include PLUGIN_PATH . 'html/html-budget.php';
		}

	}

	new Shortcode();

}
