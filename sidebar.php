<?php
//register sidebar
	register_sidebar( array(
	'name' => 'Pre-footer Sidebar',
	'id' => 'sidebar-priamry',
	'description' => 'show up under every page',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
));
