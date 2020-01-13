<?php
/**
 * Javascripts
 *
 * @package Rodin_Budget
 */

namespace Rodin_Budget {

	/**
	 * Class Javascripts
	 */
	class Javascripts {

		/**
		 * Constructor
		 */
		public function __construct() {
			add_action( 'wp_enqueue_scripts', array( $this, 'add_javascripts' ) );
		}

		/**
		 * Add Javascirpts
		 */
		public function add_javascripts() {
			wp_register_script( 'jquery.validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js', array( 'jquery' ), '1.19.1', true );
			wp_register_script( 'rodin-budget', PLUGIN_URI . 'javascripts/rodin-budget.js', array( 'jquery', 'jquery.validate' ), '1.0', true );

		}

	}

	new Javascripts();

}
