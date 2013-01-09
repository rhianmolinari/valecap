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

//search
function my_search_form( $form ) {

	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<fieldset>
	<label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" />
	<button type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'">Buscar</button>
	</fieldset>
	</form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );

?>