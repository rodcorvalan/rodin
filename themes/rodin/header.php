<?php
/**
 * Header
 *
 * @package ARMIX
 */

?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link href="<?php echo esc_attr( TDU ); ?>/favicon.ico" rel="shortcut icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>

<body <?php body_class(); ?>>

<?php include TD . '/parts/organisms/header.php'; ?>
