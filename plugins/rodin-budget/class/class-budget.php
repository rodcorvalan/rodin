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
	class Budget {

		/**
		 * Constructor
		 */
		public function __construct() {
			add_action( 'init', array( $this, 'session_start' ) );
			add_action( 'init', array( $this, 'delete_from_budget' ) );
			add_action( 'init', array( $this, 'add_to_budget' ) );
			add_action( 'init', array( $this, 'update_budget' ) );
			add_action( 'init', array( $this, 'send_email' ) );
		}

		/**
		 * Session Start
		 */
		public function session_start() {
			session_start();
		}

		/**
		 * Add to budget
		 */
		public function add_to_budget() {

			if ( isset( $_GET['add-to-budget'] ) ) {

				$post_id = intval( $_GET['add-to-budget'] );
				session_start();

				if ( isset( $_SESSION[ PREFIX . '_budget' ] ) ) {
					$budget = $_SESSION[ PREFIX . '_budget' ];
				} else {
					$budget = array();
				}

				if ( isset( $budget[ $post_id ] ) && is_int( $budget[ $post_id ] ) ) {
					$budget[ $post_id ]++;
				} else {
					$budget[ $post_id ] = 1;
				}

				$_SESSION[ PREFIX . '_budget' ] = $budget;

			}
		}

		/**
		 * Delete From Budget
		 */
		public function delete_from_budget() {

			$post_data = wp_unslash( $_POST );

			if ( ! empty( $_POST['_wpnonce'] ) ) {
				$retrieved_nonce = sanitize_text_field( wp_unslash( $_POST['_wpnonce'] ) );
				if ( wp_verify_nonce( $retrieved_nonce, PREFIX ) ) {

					if ( isset( $post_data[ PREFIX . '_action_delete' ] ) ) {

						$post_id = intval( $post_data[ PREFIX . '_action_delete' ] );
						$budget = $_SESSION[ PREFIX . '_budget' ];
						unset( $budget[ $post_id ] );
						$_SESSION[ PREFIX . '_budget' ] = $budget;
					}
				}
			}

		}

		/**
		 * Update Budget
		 */
		public function update_budget() {

			$post_data = wp_unslash( $_POST );

			if ( isset( $post_data['rodin_budget_submit'] ) && wp_verify_nonce( $post_data['rodin_budget_submit'], 'rodin_budget' ) && isset( $post_data[ PREFIX . '_action_update' ] ) ) {
				if ( isset( $post_data['rodin_budget_update'] ) && is_array( $post_data['rodin_budget_update'] ) ) {
					$budget = $_SESSION[ PREFIX . '_budget' ];
					$items = wp_unslash( $post_data['rodin_budget_update'] );
					foreach ( $items as $post_id => $amount ) {
						if ( $amount > 0 ) {
							$budget[ $post_id ] = $amount;
						} else {
							unset( $budget[ $post_id ] );
						}
					}
					$_SESSION[ PREFIX . '_budget' ] = $budget;
				}
			}
		}

		/**
		 * Get Budget Array
		 *
		 * @return array.
		 */
		public static function get_budget_array() {

			if ( isset( $_SESSION[ PREFIX . '_budget' ] ) ) {
				$budget = $_SESSION[ PREFIX . '_budget' ];
			} else {
				$budget = array();
			}

			return $budget;
		}

		/**
		 * Send Mail
		 */
		public function send_email() {

			$post_data = wp_unslash( $_POST );

			if ( ! empty( $_POST['_wpnonce'] ) ) {
				$retrieved_nonce = sanitize_text_field( wp_unslash( $_POST['_wpnonce'] ) );
				if ( wp_verify_nonce( $retrieved_nonce, PREFIX ) ) {

					if ( isset( $post_data[ PREFIX . '_action_send' ] ) ) {

						$user_email = sanitize_email( $post_data['email'] );
						$reply_to = $user_email;
						$to = sanitize_email( get_option( PREFIX . '_budget_email' ) );
						$first_name = $post_data['first_name'];
						$last_name = $post_data['last_name'];

						$subject = $post_data['subject'];

						$message = '<b>Nombre:</b> ' . $first_name . '</br></br>';
						$message .= '<b>Apellido: </b>' . $last_name . '</br></br>';
						$message .= '<b>Email: </b>' . $post_data['email'] . '</br></br>';
						$message .= '<b>Asunto: </b>' . $post_data['subject'] . '</br></br>';
						$message .= '<b>Notas Adicionales: </b>' . $post_data['content'] . '</br></br>';

						$message .= '
						<table border="1">
							<thead>
								<tr>
									<th>Productos</th>
									<th>Cantidad</th>
								</tr>
							</thead>
							<tbody>';
						if ( ! empty( $post_data[ PREFIX . '_list' ] ) ) {
							foreach ( $post_data[ PREFIX . '_list' ] as $post_id => $amount ) {
								$message .=
								'<tr>
									<td>' . get_the_title( $post_id ) . '</td>
									<td>' . $amount . '</td>
								</tr>';
							}
						}
						$message .= '
							</tbody>
						</table>';

						$headers[] = 'Content-Type: text/html; charset=UTF-8';
						$headers[] = "Reply-To: $first_name $last_name <$reply_to>";

						wp_mail( $to, $subject, $message, $headers );

					}
				}
			}

		}

	}

	new Budget();

}

