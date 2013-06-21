<?php
/**
 * Admin functions for the listnerd_shortcodes class
 * @version 0.0.1
 */

if( !class_exists( 'Listnerd_Shortcodes' ) )
	/**
	 * Make sure the parent class exists
	 */
	require_once( 'class-listnerd-shortcodes.php' );

if( !class_exists( 'Listnerd_Shortcodes_Admin' ) ) {
	/**
	 * Define the admin child class for listnerd_shortcodes
	 */
	class Listnerd_Shortcodes_Admin extends Listnerd_Shortcodes {
		
	}
}
?>