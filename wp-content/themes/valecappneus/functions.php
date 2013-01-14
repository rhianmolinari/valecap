<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */


//add suporte ao menu
	register_nav_menu( 'primary', __( 'Menu Principal', 'valecappneus' ) );

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