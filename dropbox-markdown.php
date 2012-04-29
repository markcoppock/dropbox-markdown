<?php
/*
Plugin Name: Dropbox Markdown
Plugin URI: http://markcoppock.com/code/wordpress/dropbox-markdown/
Description: Creates a shortcode ( [md url=""] ) that inserts an external Markdown-formatted file into a page or post. Uses John Gruber's Markdown and Michael Fortin's PHP Markdown.
Version: 0.9
Author: Mark Coppock
Author URI: http://markcoppock.com
*/

include_once "lib/markdown/markdown.php";

function mc_dropbox_markdown( $atts ) {
	$myurl = $atts['url'];	
	$dropbox_content = file_get_contents($myurl);
	$my_html = Markdown($dropbox_content);
	return '<div class="markdown-block">' . $my_html . '</div>';
}
add_shortcode( 'md', 'mc_dropbox_markdown' );

add_action( 'wp_print_styles', 'mc_enqueue_my_styles' );
function mc_enqueue_my_styles() {
	wp_register_style( 'markdown-styles', plugins_url('markdown.css', __FILE__) );
	wp_enqueue_style( 'markdown-styles' ); 
}

