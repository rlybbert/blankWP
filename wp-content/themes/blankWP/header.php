<?php

?><!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head data-template-set="blankWP">

	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	<?php
		if (is_search())
			echo '<meta name="robots" content="noindex, nofollow" />';
	?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<!--Google will often use this as its description of your page/site. Make it good.-->
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">

	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="wrapper">
		I'm your header file (header.php), here is your header menu:
		<?php wp_nav_menu( array('theme_location' => 'header-menu') ); ?>

