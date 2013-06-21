<?php
/*
Plugin Name: Listnerd Shortcodes
Plugin URI: http://dcodeit.net/listnerd-shortcodes/
Description: Adds shortcodes to show the content of list from Listnerd.com
Version: 0.0.1
Author: CodeIT
Author URI: http://codeit.com.ua/
License: GPL2
*/
/**
 * Pull in the listnerd_shortcodes class definition file
 */
if( !class_exists( 'Listnerd_Shortcodes' ) )
	require_once( 'class-listnerd-shortcodes-admin.php' );
/*if( !class_exists( 'LS_Widget' ) )
	require_once( 'class-listnerd-widgets.php' );*/

/**
 * Initiate the listnerd_shortcodes object
 */
add_action( 'init', 'init_listnerd_shortcodes', 1 );

function init_listnerd_shortcodes() {
	global $listnerd_shortcodes_obj;
	if( is_admin() )
		return $listnerd_shortcodes_obj = new Listnerd_Shortcodes_Admin;
	else
		return $listnerd_shortcodes_obj = new Listnerd_Shortcodes;
}
?>