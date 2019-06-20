<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="format-detection" content="telephone=no">
		<title><?php wp_title(); ?></title>
		<meta name="author" content="Pixelfield, s.r.o." />
		<meta name="robots" content="noindex, nofollow" />
<!--		<meta name="robots" content="all" />-->
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/style.css" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<?php wp_nav_menu([
			'theme_location' => 'primary',
			'container' => false,
			'menu_class' => 'header-nav-main'
		]); ?>

		<?php //bloginfo('template_url'); ?>
		<?php //echo file_get_contents(get_bloginfo('template_url').'/images/logo.svg'); ?>


