<?php
/*
Template Name: UI
*/
?>
<?php //wp_enqueue_script( 'armix.u-i', get_template_directory_uri() . '/javascripts/armix.ui.js', array( 'jquery', 'select2' ), false, true ); ?>
<?php get_header(); ?>

<style>



</style>

<div class="container">

	<div class="rodin-budget__messages">
		<p class="rodin-budget__messages-item rodin-budget__messages-item--success">Mensaje enviado exitosamente. En breve nos comunicaremos con usted.</p>
	</div>

	<div class="woocommerce-notices-wrapper">
		<div class="woocommerce-message" role="alert">
			<a href="//localhost:3000/rodin/carrito/" tabindex="1" class="button wc-forward">Ver carrito</a> 
			“Hisopos para detección de ATP en agua AQT200 Clean Trace” se ha añadido a tu carrito.	
		</div>
	</div>

	<div class="woocommerce-notices-wrapper">
		<ul class="woocommerce-error" role="alert">
			<li>¡El cupón «1231» no existe!</li>
		</ul>
	</div>

	<div class="woocommerce-notices-wrapper">
		<div class="woocommerce-message" role="alert">Carrito actualizado.</div>	
	</div>

	<ul class="woocommerce-error" role="alert">
		<li>Por favor, introduce un código de cupón.</li>
	</ul>

	<div class="woocommerce-NoticeGroup woocommerce-NoticeGroup-checkout">
		<ul class="woocommerce-error" role="alert">
			<li>
				<strong>Facturación Nombre</strong> es un campo requerido.
			</li>
			<li>
				<strong>Facturación Código postal</strong> es un campo requerido.
			</li>
		</ul>
	</div>

	<div class="woocommerce-notices-wrapper">
		<ul class="woocommerce-error" role="alert">
			<li>
				<strong>Error:</strong> Nombre de usuario requerido.
			</li>
		</ul>
	</div>

	<div class="woocommerce-notices-wrapper">
		<ul class="woocommerce-error" role="alert">
			<li>Código postal es un campo requerido.</li>
		</ul>
	</div>

	<h2 class="ui-title">Buttons</h2>

	<div class="ui-buttons-table">
		<div class="ui-button-wrapper">
			<div class="ui-text">.button</div>
			<a href="#" class="button">Button</a>
		</div>
		<div class="ui-button-wrapper">
			<div class="ui-text">.button--style-two</div>
			<a href="#" class="button button--style-two">Button</a>
		</div>
		<div class="ui-button-wrapper">
			<div class="ui-text">.button--style-three</div>
			<a href="#" class="button button--style-three">Button <span class="button__arrow"></span></a>
		</div>
		<div class="ui-button-wrapper">
			<div class="ui-text">.button--size-small</div>
			<a href="#" class="button button--size-small">Button</a>
		</div>
		<div class="ui-button-wrapper">
			<div class="ui-text">.button--style-two<br>.button--size-small</div>
			<a href="#" class="button button--style-two button--size-small">Button</a>
		</div>
		<div class="ui-button-wrapper">
			<div class="ui-text">.button--style-three<br>.button--size-small</div>
			<a href="#" class="button button--style-three button--size-small">Button <span class="button__arrow"></span></a>
		</div>
		<div class="ui-button-wrapper">
			<div class="ui-text">.button--size-large</div>
			<a href="#" class="button button--size-large">Button</a>
		</div>
		<div class="ui-button-wrapper">
			<div class="ui-text">.button--style-two<br>.button--size-large</div>
			<a href="#" class="button button--style-two button--size-large">Button</a>
		</div>
		<div class="ui-button-wrapper">
			<div class="ui-text">.button--style-three<br>.button--size-large</div>
			<a href="#" class="button button--style-three button--size-large">Button <span class="button__arrow"></span></a>
		</div>
		<div class="ui-button-wrapper">
			<div class="ui-text">.button:disabled<br>.button--disabled</div>
			<a href="#" class="button button--disabled">Button</a>
		</div>
		<div class="ui-button-wrapper">
			<div class="ui-text">.button--style-two:disabled<br>.button--disabled</div>
			<a href="#" class="button button--style-two button--disabled">Button</a>
		</div>
		<div class="ui-button-wrapper">
			<div class="ui-text">.button--style-three:disabled<br>.button--disabled</div>
			<a href="#" class="button button--style-three button--disabled">Button <span class="button__arrow"></span></a>
		</div>
		<div class="ui-button-wrapper">
			<div class="ui-text">.button--size-grow</div>
			<a href="#" class="button button--size-grow">Button</a>
		</div>
	</div>

	<h2 class="ui-title">Heading</h2>

	<div class="ui-text">.heading--style-one</div>
	<h3 class="heading--style-one">Destacados</h3>

	<br>

	<h2 class="ui-title">Products Item</h2>

	<div class="row">
		<h1 class="heading-one">Otros productos</h1>
	</div>

	<div class="row">
		<h2 class="heading-two">Otros productos</h2>
	</div>

	<div class="row">
		<h3 class="heading-three">Otros productos</h3>
	</div>

	<div class="row">
		<h4 class="heading-four">Otros productos con text mas largo</h4>
	</div>

	<h2>Input Number</h2>

	<table>
		<tr>
			<td><input type="number" min="1" max="100" class="input-number"></td>
			<td><input type="number" min="1" max="100" class="input-number input-number--style-black"></td>
			<td><input type="number" min="1" max="100" class="input-number input-number--size-big"></td>
			<td><input type="number" min="1" max="100" class="input-number input-number--style-black input-number--size-big"></td>
		</tr>
	</table>
	
	<h2>Table Responsive</h2>

	<table class="table table--width-100 table-responsive">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr class="table-responsive__grid">
				<td class="table-responsive__col-full" data-title="Nombre">Perro</td>
				<td data-title="Cantidad">1</td>
				<td data-title="Precio">$500</td>
				<td class="table-responsive__col-full" data-title="Total">$500</td>
			</tr>
			<tr class="table-responsive__grid">
				<td class="table-responsive__col-full" data-title="Nombre">Gato</td>
				<td data-title="Cantidad">2</td>
				<td data-title="Precio">$100</td>
				<td class="table-responsive__col-full" data-title="Total">$200</td>
			</tr>
		</tbody>
	</table>

	<h2>Table Responsive Vertical</h2>

	<table class="table table-responsive">
		<tbody>
			<tr>
				<th>Subtotal</th>
				<td data-title="Subtotal">$700</td>
			</tr>
			<tr>
				<th>Impuestos</th>
				<td data-title="Impuestos">21%</td>
			</tr>
			<tr>
				<th>Total</th>
				<td data-title="Total">$1000</td>
			</tr>
		</tbody>
	</table>

	
	<h2>Table</h2>

	<table class="table">
		<thead>
			<tr>
				<th>Uno</th>
				<th>Dos</th>
				<th>Tres</th>
				<th>Cuatro</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Perro</td>
				<td>Gato</td>
				<td>Raton</td>
				<td>Leon</td>
			</tr>
			<tr>
				<td>Perro</td>
				<td>Gato</td>
				<td>Raton</td>
				<td>Leon</td>
			</tr>
		</tbody>
	</table>

	<h2>Table Vertical</h2>

	<table class="table">
		<tbody>
			<tr>
				<th>Subtotal</th>
				<td>$700</td>
			</tr>
			<tr>
				<th>Impuestos</th>
				<td>21%</td>
			</tr>
			<tr>
				<th>Total</th>
				<td>$1000</td>
			</tr>
		</tbody>
	</table>



	<h2>Input Text</h2>

	<table>
		<tr>
			<td><input type="text" class="input"></td>
			<td><input type="text" class="input input--size-small"></td>
			<td><input type="text" class="input input--size-big"></td>
		</tr>
		<tr>
			<td><input type="text" class="input" placeholder="Placeholder"></td>
			<td><input type="text" class="input input--success"></td>
			<td><input type="text" class="input input--error"></td>
		</tr>
		<tr>
			<td><input type="text" class="input" placeholder="Placeholder"></td>
			<td><input type="text" class="input input--display-block"></td>
			<td><input type="text" class="input input--display-inline"></td>
		</tr>
	</table>

	<h2>Textarea</h2>

	<table>
		<tr>
			<td><textarea class="textarea"></textarea></td>
			<td><textarea class="textarea textarea--size-small"></textarea></td>
			<td><textarea class="textarea textarea--size-big"></textarea></td>
		</tr>
		<tr>
			<td><textarea class="textarea"></textarea></td>
			<td><textarea class="textarea textarea--success"></textarea></td>
			<td><textarea class="textarea textarea--error"></textarea></td>
		</tr>
		<tr>
			<td><textarea class="textarea" placeholder="Placeholder"></textarea></td>
			<td><textarea class="textarea textarea--display-block"></textarea></td>
			<td><textarea class="textarea textarea--display-inline"></textarea></td>
		</tr>
	</table>

	<h2>Select</h2>

	<table>
		<tr>
			<td>
				<select class="select">
					<option value="one">Mendoza</option>
					<option value="two">Dos</option>
				</select>
			</td>
			<td>
				<select class="select select--size-small">
					<option value="one">Mendoza</option>
					<option value="two">Dos</option>
				</select>
			</td>
			<td>
				<select class="select select--size-big">
					<option value="one">Mendoza</option>
					<option value="two">Dos</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<select class="select">
					<option value="one">Mendoza</option>
					<option value="two">Dos</option>
				</select>
			</td>
			<td>
				<select class="select select--display-block">
					<option value="one">Mendoza</option>
					<option value="two">Dos</option>
				</select>
			</td>
			<td>
				<select class="select select--display-inline">
					<option value="one">Mendoza</option>
					<option value="two">Dos</option>
				</select>
			</td>
		</tr>
	</table>

	<h2>Select2</h2>

	<table>
		<tr>
			<td>
				<select class="select2"><option value="">Elige un país…</option><option value="AF">Afganistán</option><option value="AL">Albania</option><option value="DE">Alemania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antártida</option><option value="AG">Antigua y Barbuda</option><option value="SA">Arabia Saudita</option><option value="AR" selected="selected">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BE">Bélgica</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="PW">Belau</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BY">Bielorrusia</option><option value="MM">Birmania</option><option value="BO">Bolivia</option><option value="BQ">Bonaire, San Eustaquio y Saba</option><option value="BA">Bosnia y Herzegovina</option><option value="BW">Botswana</option><option value="BR">Brasil</option><option value="BN">Brunéi</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="CV">Cabo Verde</option><option value="KH">Camboya</option><option value="CM">Camerún</option><option value="CA">Canadá</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CY">Chipre</option><option value="VA">Ciudad del Vaticano</option><option value="CO">Colombia</option><option value="KM">Comoras</option><option value="CG">Congo (Brazzaville)</option><option value="CD">Congo (Kinshasa)</option><option value="KP">Corea del Norte</option><option value="KR">Corea del Sur</option><option value="CR">Costa Rica</option><option value="CI">Costa de Marfil</option><option value="HR">Croacia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="DK">Dinamarca</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="EC">Ecuador</option><option value="EG">Egipto</option><option value="SV">El Salvador</option><option value="AE">Emiratos Árabes Unidos</option><option value="ER">Eritrea</option><option value="SK">Eslovaquia</option><option value="SI">Eslovenia</option><option value="ES">España</option><option value="US">Estados Unidos (EEUU)</option><option value="EE">Estonia</option><option value="ET">Etiopía</option><option value="PH">Filipinas</option><option value="FI">Finlandia</option><option value="FJ">Fiyi</option><option value="FR">Francia</option><option value="GA">Gabón</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GD">Granada</option><option value="GR">Grecia</option><option value="GL">Groenlandia</option><option value="GP">Guadalupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GF">Guayana Francesa</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GQ">Guinea Ecuatorial</option><option value="GW">Guinea-Bisáu</option><option value="GY">Guyana</option><option value="HT">Haití</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungría</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Irán</option><option value="IQ">Irak</option><option value="IE">Irlanda</option><option value="BV">Isla Bouvet</option><option value="NF">Isla Norfolk</option><option value="SH">Isla Santa Elena</option><option value="IM">Isla de Man</option><option value="CX">Isla de Navidad</option><option value="IS">Islandia</option><option value="AX">Islas Åland</option><option value="KY">Islas Caimán</option><option value="CC">Islas Cocos</option><option value="CK">Islas Cook</option><option value="FO">Islas Feroe</option><option value="GS">Islas Georgias y Sandwich del Sur</option><option value="HM">Islas Heard y McDonald</option><option value="FK">Islas Malvinas</option><option value="MP">Islas Marianas del Norte</option><option value="MH">Islas Marshall</option><option value="SB">Islas Salomón</option><option value="TC">Islas Turcas y Caicos</option><option value="VG">Islas Vírgenes (Británicas)</option><option value="VI">Islas Vírgenes (EEUU)</option><option value="UM">Islas de ultramar menores de Estados Unidos (EEUU)</option><option value="IL">Israel</option><option value="IT">Italia</option><option value="JM">Jamaica</option><option value="JP">Japón</option><option value="JE">Jersey</option><option value="JO">Jordania</option><option value="KZ">Kazajistán</option><option value="KE">Kenia</option><option value="KG">Kirguistán</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="LB">Líbano</option><option value="LA">Laos</option><option value="LS">Lesoto</option><option value="LV">Letonia</option><option value="LR">Liberia</option><option value="LY">Libia</option><option value="LI">Liechtenstein</option><option value="LT">Lituania</option><option value="LU">Luxemburgo</option><option value="MX">México</option><option value="MC">Mónaco</option><option value="MO">Macao</option><option value="MK">Macedonia del Norte</option><option value="MG">Madagascar</option><option value="ML">Malí</option><option value="MY">Malasia</option><option value="MW">Malaui</option><option value="MV">Maldivas</option><option value="MT">Malta</option><option value="MA">Marruecos</option><option value="MQ">Martinica</option><option value="MU">Mauricio</option><option value="MR">Mauritania</option><option value="YT">Mayotte</option><option value="FM">Micronesia</option><option value="MD">Moldavia</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MZ">Mozambique</option><option value="NE">Níger</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NI">Nicaragua</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NO">Noruega</option><option value="NC">Nueva Caledonia</option><option value="NZ">Nueva Zelanda</option><option value="OM">Omán</option><option value="NL">Países Bajos</option><option value="PK">Pakistán</option><option value="PA">Panamá</option><option value="PG">Papúa Nueva Guinea</option><option value="PY">Paraguay</option><option value="PE">Perú</option><option value="PN">Pitcairn</option><option value="PF">Polinesia Francesa</option><option value="PL">Polonia</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="GB">Reino Unido (UK)</option><option value="CF">República Centroafricana</option><option value="CZ">República Checa</option><option value="DO">República Dominicana</option><option value="RE">Reunión</option><option value="RW">Ruanda</option><option value="RO">Rumania</option><option value="RU">Rusia</option><option value="EH">Sahara Occidental</option><option value="WS">Samoa</option><option value="AS">Samoa Americana</option><option value="BL">San Bartolomé</option><option value="KN">San Cristóbal y Nieves</option><option value="SM">San Marino</option><option value="MF">San Martín (parte de Francia)</option><option value="SX">San Martín (parte de Holanda)</option><option value="PM">San Pedro y Miquelón</option><option value="VC">San Vicente y las Granadinas</option><option value="LC">Santa Lucía</option><option value="ST">Santo Tomé y Príncipe</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leona</option><option value="SG">Singapur</option><option value="SY">Siria</option><option value="SO">Somalia</option><option value="LK">Sri Lanka</option><option value="SZ">Suazilandia</option><option value="ZA">Sudáfrica</option><option value="SD">Sudán</option><option value="SS">Sudán del Sur</option><option value="SE">Suecia</option><option value="CH">Suiza</option><option value="SR">Surinam</option><option value="SJ">Svalbard y Jan Mayen</option><option value="TN">Túnez</option><option value="TH">Tailandia</option><option value="TW">Taiwán</option><option value="TZ">Tanzania</option><option value="TJ">Tayikistán</option><option value="IO">Territorio Británico del Océano Índico</option><option value="PS">Territorios Palestinos</option><option value="TF">Territorios australes franceses</option><option value="TL">Timor Oriental</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad y Tobago</option><option value="TM">Turkmenistán</option><option value="TR">Turquía</option><option value="TV">Tuvalu</option><option value="UA">Ucrania</option><option value="UG">Uganda</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistán</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis y Futuna</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabue</option></select>
			</td>
		</tr>
		<tr>
			<td>
				<select class="select2">
					<option value="one">Mendoza</option>
					<option value="two">Buenos Aires</option>
				</select>
			</td>
			<td>
				<select class="select2 select2--display-block">
					<option value="one">Mendoza</option>
					<option value="two">Buenos Aires</option>
				</select>
			</td>
			<td>
				<select class="select2 select2--size-small">
					<option value="one">Mendoza</option>
					<option value="two">Buenos Aires</option>
				</select>
			</td>
			<td>
				<select class="select2 select2--size-big select2--display-block">
					<option value="one">Mendoza</option>
					<option value="two">Buenos Aires</option>
				</select>
			</td>
		</tr>
	</table>


</div>


<?php get_footer(); ?>