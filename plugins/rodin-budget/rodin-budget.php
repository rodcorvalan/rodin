<?php
/**
 * Plugin Name: Rodin Cotizador
 * Description: Cotizador
 * Author: ARMIX Agency
 * Version: 1.0.0
 * Author URI: http://armix.com.ar/
 *
 * @package Rodin_Budget
 */

namespace Rodin_Budget;

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_FILE', __FILE__ );
define( 'PLUGIN_URI', plugin_dir_url( __FILE__ ) );
define( 'PREFIX', 'rodin_budget' );

require 'class/class-admin-menu.php';
require 'class/class-budget.php';
require 'class/class-shortcode.php';
require 'class/class-helpers.php';
require 'class/class-javascripts.php';
