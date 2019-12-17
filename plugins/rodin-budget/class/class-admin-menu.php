<?php
/**
 * Admin Menu
 *
 * @package Rodin_Budget
 */

namespace Rodin_Budget {

	use function add_action;
	use function add_menu_page;
	use function add_settings_field;
	use function add_settings_section;
	use function add_submenu_page;
	use function get_option;
	use function get_post_types;
	use function register_setting;
	use function selected;

	/**
	 * Class Admin_Menu
	 *
	 * @package RF_Sync
	 */
	class Admin_Menu {

		/**
		 * Admin_Menu constructor.
		 */
		public function __construct() {
			add_action( 'admin_menu', array( $this, 'add_menu_page' ) );
			add_action( 'admin_init', array( $this, 'add_settings_to_config_page' ) );
		}

		/**
		 * Add Menu Page
		 */
		public function add_menu_page() {
			add_submenu_page( 'options-general.php', 'Cotizador', 'Cotizador', 'manage_options', 'rodin-budget', array( $this, 'add_menu_page_config_callback' ) );
		}

		/**
		 * Config Callback
		 */
		public function add_menu_page_config_callback() {
			require_once PLUGIN_PATH . 'html/html-config-page.php';
		}


		/**
		 * Add Setting To Config Page
		 */
		public function add_settings_to_config_page() {

			$current_page = PREFIX . '_config';

			$current_section = PREFIX . '_general_section';
			add_settings_section(
				$current_section,
				'General',
				array(),
				$current_page
			);

			$current_field = PREFIX . '_budget_page';
			add_settings_field(
				$current_field,
				'Página',
				array( $this, 'budget_page_field_callback' ),
				$current_page,
				$current_section,
				array()
			);
			register_setting( $current_section, $current_field );

			$current_field = PREFIX . '_budget_email';
			add_settings_field(
				$current_field,
				'Email',
				array( $this, 'budget_email_field_callback' ),
				$current_page,
				$current_section,
				array()
			);
			register_setting( $current_section, $current_field );

		}

		/**
		 * Base URL Field Callback
		 */
		public function budget_page_field_callback() {
			?>
			<input type="url" size="40" name="<?php echo esc_attr( PREFIX . '_budget_page' ); ?>" value="<?php echo esc_attr( get_option( PREFIX . '_budget_page' ) ); ?>">
			<?php
		}

		/**
		 * Hash Field Callback
		 */
		public function budget_email_field_callback() {
			?>
			<input type="text" size="40" name="<?php echo esc_attr( PREFIX . '_budget_email' ); ?>" value="<?php echo esc_attr( get_option( PREFIX . '_budget_email' ) ); ?>">
			<?php
		}

	}

	new Admin_Menu();
}
