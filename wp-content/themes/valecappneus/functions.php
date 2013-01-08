<?php
/**
 * @package WordPress
 * @subpackage Valecap_Pneus
 * @since Valecap Pneus 1.0
 */

//remove barra admin na pagina inicial
//add_filter('show_admin_bar', '__return_false');  


//add suporte ao menu
	register_nav_menu( 'primary', __( 'Menu Principal', 'valecappneus' ) );

?>