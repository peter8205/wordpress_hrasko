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

if (!isset($parsed['scheme'])) {
	$atts['link'] = home_url( $atts['link']);
}
$html = '<a href="'.$atts['link'].'" class="btn '. $atts['color'] .' animate">';
$html .= $text;
$html .= '</a>';
return $html;
}
