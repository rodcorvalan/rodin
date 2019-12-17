<?php
/**
 * Budget
 *
 * @package Rodin_Budget
 */

namespace Rodin_Budget {

	/**
	 * Class Budget
	 *
	 * @package Rodin_Budget
	 */
	class Helpers {

		/**
		 * Get Add to Budget Url
		 *
		 * @param  int $product_id Product ID.
		 * @return string.
		 */
		public static function get_add_to_budget_url( $product_id ) {
			return get_option( PREFIX . '_budget_page' ) . '?add-to-budget=' . $product_id;
		}

	}

}
