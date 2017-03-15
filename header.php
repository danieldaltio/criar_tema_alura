<!DOCTYPE html>
<html lang="en">
<head>
	<?php $home = get_template_directory_uri(); ?>

	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?=
	$home; ?>/reset.css">
	<link rel="stylesheet" type="text/css" href="<?=
	$home; ?>/style.css">

	<link rel="stylesheet" type="text/css" href="<?=
	$home; ?>/assets/css/comum.css">
	<link rel="stylesheet" type="text/css" href="<?=
	$home; ?>/assets/css/header.css">
	
	<link rel="stylesheet" type="text/css" href="<?=
	$home; ?>/assets/css/<?= $css_especifico; ?>.css">
	
	<title> 
		<?php
			function geraTitle(){
				bloginfo('name');
				if( !is_home()) echo ' | ';
				the_title();
			}
			geraTitle(); ?>
	</title>	
	
	<?php wp_head(); ?>
</head>
<body>

<header>
	<div class="container">
		<?php
			$args = array(
				'theme_location' => 'header-menu'
				);
			wp_nav_menu( $args );
		 ?>
	</div>
</header>