<?php
/**
 * HTML Config Page
 *
 * @package Rodin_Budget
 */

namespace Rodin_Budget;

use function do_settings_sections;
use function settings_errors;
use function settings_fields;
use function submit_button;

?>

<div class="wrap">

	<h2>Cotizador Rodin | Configuración</h2>

	<?php settings_errors(); ?>

	<form method="post" action="options.php">
		<?php settings_fields( PREFIX . '_general_section' ); ?>
		<?php do_settings_sections( PREFIX . '_config' ); ?>
		<?php submit_button(); ?>
	</form>

</div>
