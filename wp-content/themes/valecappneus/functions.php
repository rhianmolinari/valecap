<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

//add suporte ao menu
	register_nav_menu( 'primary', __( 'Menu Principal' ) );

//post-thumbnail
	add_theme_support( 'post-thumbnails' );

//current url
function current_url() {
	$pageURL = 'http';
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
	$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

//breadcrumb
function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo "</a> Â» ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " Â» ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}

//widget


?>