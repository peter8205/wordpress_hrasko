<?php
add_action('after_setup_theme','petoBear_setup');
function petoBear_setup() 
{
    add_theme_support('menus');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    //add_theme_support('post-formats',array('aside', 'gallery','quote','video'));
    add_theme_support('html5',array('comment-list', 'comment-form','search-form','gallery','caption'));
}

add_shortcode('button', 'petoBear_button_shortcode');
function petoBear_button_shortcode($atts, $text= 'enter text'){
	$atts = shortcode_atts(array(
	'color' => '',
	'link' => '#',
), $atts );

if($atts['color']) $atts['color'] = 'btn-'.$atts['color'];

$parsed = wp_parse_url( $atts['link'] );
//var_dump($parsed);

if (!isset($parsed['scheme'])) {
	$atts['link'] = home_url( $atts['link']);
}
$html = '<a href="'.$atts['link'].'" class="btn '. $atts['color'] .' animate">';
$html .= $text;
$html .= '</a>';
return $html;
}


//povoli shortcode vo widget
add_filter('widget_text', 'do_shortcode');


//register sidebar
add_action('widgets_init', 'petoBear_widget_init');
function petoBear_widget_init(){
	register_sidebar( array(
	'name' => 'Pre-footer Sidebar',
	'id' => 'sidebar-priamry',
	'description' => 'show up under every page',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',


));
}