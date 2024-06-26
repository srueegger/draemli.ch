<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

add_action( 'wp_enqueue_scripts', 'draemli_petition_style' );
				function draemli_petition_style() {
					wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
					wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
				}

/**
 * Your code goes below.
 */

/* Zwingend benötigte Dateien hinzufügen */
require_once get_stylesheet_directory() . '/inc/inline-css.php';
require_once get_stylesheet_directory() . '/inc/gravityforms.php';
require_once get_stylesheet_directory() . '/inc/acf.php';

/* Theme Color definieren */
function add_theme_color_meta_tag() {
	echo '<meta name="theme-color" content="#00843d">';
}
add_action('wp_head', 'add_theme_color_meta_tag');