<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog / Kickass Website</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
	<link rel="stylesheet" href="css/animations.css">
	<?php wp_head() ?>
</head>
<body <?php body_class( get_the_title() ) ?>>


	<header class="site-header">
		<nav class="container">
			<?php
				wp_nav_menu([
					'menu' => 'primary'
				])
			?>
		</nav>
	</header>

	<main>
		<section class="content container">