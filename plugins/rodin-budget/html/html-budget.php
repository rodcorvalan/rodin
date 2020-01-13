<?php
/**
 * HTML Budget
 *
 * @package Rodin_Budget
 */

namespace Rodin_Budget;

wp_enqueue_script( 'rodin-budget' );

?>

<div class="rodin-budget">

	<form action="<?php echo esc_url( $budget_url ); ?>" method="post" class="rodin-budget__form">
	
		<?php if ( PHP_SESSION_NONE != session_status() ) : ?>

			<?php if ( isset( $_SESSION[ PREFIX . '_sent' ] ) && $_SESSION[ PREFIX . '_sent' ] ) : ?>
				<div class="rodin-budget__messages">
					<?php if ( isset( $_SESSION[ PREFIX . '_sent_success' ] ) && $_SESSION[ PREFIX . '_sent_success' ] ) : ?>
						<p class="woocommerce-message rodin-budget__messages-item rodin-budget__messages-item--success">Mensaje enviado exitosamente. En breve nos comunicaremos con usted.</p>
					<?php else : ?>
						<p class="woocommerce-message rodin-budget__messages-item rodin-budget__messages-item--error">Error. Intente de nuevo más tarde</p>
					<?php endif; ?>
				</div>
				<?php unset( $_SESSION[ PREFIX . '_sent' ] ); ?>
				<?php unset( $_SESSION[ PREFIX . '_sent_success' ] ); ?>
			<?php endif; ?>

		<?php endif; ?>

		<?php wp_nonce_field( PREFIX ); ?>

		<table class="rodin-budget__table shop_table">
			<thead>
				<tr>
					<th></th>
					<th>Producto</th>
					<th>Cantidad</th>
				</tr>
			</thead>
			<tbody>
				<?php if ( ! empty( $budget_list ) ) : ?>
					<?php foreach ( $budget_list as $budget_item_id => $budget_item_amount ) : ?>
					<tr class="rodin-budget__item">
						<td class="product-remove"><button class="rodin-budget__button-remove remove" type="submit" name="<?php echo esc_attr( PREFIX ); ?>_action_delete" value="<?php echo esc_attr( $budget_item_id ); ?>">×</a></td>
						<td><?php echo esc_attr( get_the_title( $budget_item_id ) ); ?></td>
						<td><input class="rodin-budget__input-text qty text" type="number" name="<?php echo esc_attr( PREFIX ); ?>_list[<?php echo esc_attr( $budget_item_id ); ?>]" value="<?php echo esc_attr( $budget_item_amount ); ?>" /></td>
					</tr>
					<?php endforeach ?>
				<?php else : ?>
				<tr>
					<td colspan="3">No hay productos a cotizar</td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>

		<div class="rodin-budget__row rodin-budget__row-input-text">
			<input type="text" name="first_name" class="rodin-budget__input-text input" placeholder="Nombre" value="<?php echo ( isset( $post_data['first_name'] ) ) ? esc_attr( $post_data['first_name'] ) : ''; ?>" required>
		</div>

		<div class="rodin-budget__row rodin-budget__row-input-text">
			<input type="text" name="last_name" class="rodin-budget__input-text input" placeholder="Apellido" value="<?php echo ( isset( $post_data['last_name'] ) ) ? esc_attr( $post_data['last_name'] ) : ''; ?>" required>
		</div>

		<div class="rodin-budget__row rodin-budget__row-input-text">
			<input type="email" name="email" class="rodin-budget__input-text input" placeholder="Email" value="<?php echo ( isset( $post_data['email'] ) ) ? esc_attr( $post_data['email'] ) : ''; ?>" required>
		</div>

		<div class="rodin-budget__row rodin-budget__row-input-text">
			<input type="text" name="subject" class="rodin-budget__input-text input" placeholder="Asunto" value="<?php echo ( isset( $post_data['subject'] ) ) ? esc_attr( $post_data['subject'] ) : ''; ?>" required>
		</div>

		<div class="rodin-budget__row rodin-budget__row-input-textarea">
			<textarea name="content" class="rodin-budget__input-textarea" placeholder="Notas Adicionales"><?php echo ( isset( $post_data['content'] ) ) ? esc_attr( $post_data['content'] ) : ''; ?></textarea>
		</div>

		<div class="rodin-budget__row rodin-budget__row-submit">
			<button class="button button--style-one" type="submit" name="<?php echo esc_attr( PREFIX ); ?>_action_send" value="1">Cotizar</button>
		</div>

	</form>

</div>
