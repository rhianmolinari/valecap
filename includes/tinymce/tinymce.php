<?php

// Enable more buttons
function enable_more_buttons($buttons) {
	$buttons[] = 'hr';
	$buttons[] = 'sup';
	$buttons[] = 'sub';
	$buttons[] = 'cleanup';

	return $buttons;
}
add_filter( 'mce_buttons', 'enable_more_buttons' );

// Custom Buttons
function valecap_add_buttons($plugin_array) {
	$plugin_array['rhianmolinari'] = get_template_directory_uri() . '/includes/tinymce/tinymce.js';

	return $plugin_array;
}
add_filter( "mce_external_plugins", "valecap_add_buttons" );

function valecap_register_buttons($buttons) {
	array_push( $buttons, 'youtube' ); // 'youtube', 'vimeo'
	return $buttons;
}
add_filter( 'mce_buttons_2', 'valecap_register_buttons' );


?>