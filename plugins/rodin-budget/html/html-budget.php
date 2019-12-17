<?php
/**
 * HTML Budget
 *
 * @package Rodin_Budget
 */

namespace Rodin_Budget;

?>

<form action="<?php echo esc_url( $budget_url ); ?>" method="post">

	<?php wp_nonce_field( PREFIX ); ?>

	<table>
		<thead>
			<tr>
				<th>Productos</th>
				<th>Cantidad</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php if ( ! empty( $budget_list ) ) : ?>
				<?php foreach ( $budget_list as $budget_item_id => $budget_item_amount ) : ?>
				<tr>
					<td><?php echo esc_attr( get_the_title( $budget_item_id ) ); ?></td>
					<td><input type="number" name="<?php echo esc_attr( PREFIX ); ?>_list[<?php echo esc_attr( $budget_item_id ); ?>]" value="<?php echo esc_attr( $budget_item_amount ); ?>" /></td>
					<td><button type="submit" name="<?php echo esc_attr( PREFIX ); ?>_action_delete" value="<?php echo esc_attr( $budget_item_id ); ?>">Eliminar</a></td>
				</tr>
				<?php endforeach ?>
			<?php else : ?>
			<tr>
				<td colspan="3">No hay productos a cotizar</td>
			</tr>
			<?php endif; ?>
		</tbody>
	</table>

	<div class="row">
		<input type="text" name="first_name" class="input" placeholder="Nombre" value="<?php echo ( $post_data['first_name'] ) ? esc_attr( $post_data['first_name'] ) : ''; ?>" required>
	</div>

	<div class="row">
		<input type="text" name="last_name" class="input" placeholder="Apellido" value="<?php echo ( $post_data['last_name'] ) ? esc_attr( $post_data['last_name'] ) : ''; ?>" required>
	</div>

	<div class="row">
		<input type="email" name="email" class="input" placeholder="Email" value="<?php echo ( $post_data['email'] ) ? esc_attr( $post_data['email'] ) : ''; ?>" required>
	</div>

	<div class="row">
		<input type="text" name="subject" class="input" placeholder="Asunto" value="<?php echo ( $post_data['subject'] ) ? esc_attr( $post_data['subject'] ) : ''; ?>" required>
	</div>

	<div class="row">
		<textarea name="content" placeholder="Notas Adicionales"><?php echo ( $post_data['content'] ) ? esc_attr( $post_data['content'] ) : ''; ?></textarea>
	</div>

	<div class="row">
		<button type="submit" name="<?php echo esc_attr( PREFIX ); ?>_action_send" value="1">Enviar</button>
	</div>

</form>
