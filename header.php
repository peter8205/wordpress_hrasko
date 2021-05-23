<!DOCTYPE html>
<html <?php language_attributes()  ?>>
<head>
	<meta charset="<?php bloginfo('charset')?>">
	<title><?php bloginfo('name')?> / <?php bloginfo('description') ?></title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
	<link rel="stylesheet" href="css/animations.css">
	<?php wp_head() ?>
</head>
<body <?php body_class( get_the_title() )?>>
     <header>
        <h1>
        	<a href="<?php echo home_url() ?>"><?php bloginfo('name') ?></a>
        	<!-- odkay na href="http://localhost/wordpress/"  -->
        </h1> 
        <h2><?php bloginfo('description') ?></h2>
    </header>


    <main>
        <section class="posts">
            <article>blah blah</article>
        </section>
    </main>

    <footer>
        <p><small>
            yeah, this website sucks 
        </small></p>
    </footer>

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