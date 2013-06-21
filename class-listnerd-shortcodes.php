<?php
/**
 * The class setup for listnerd-shortcodes plugin
 * @version 0.0.1
 */
if( !class_exists( 'Listnerd_Shortcodes' ) ) {
	/**
	 * Class and methods to implement various shortcodes for cloning content
	 */
	class Listnerd_Shortcodes {
		/**
		 * A container to hold our default shortcode attributes
		 */
		var $defaults	= array();
		/**
		 * A container to hold our global plugin settings
		 */
		var $settings 	= array();
		var $stock_settings	= array();
		var $use_styles = true;
		
		/**
		 * Build the listnerd_shortcodes object
		 */
		function __construct() {
			$this->plugin_dir_name = 'listnerd-shortcodes/listnerd-shortcodes.php';
			
			global $blog_id;
			/**
			 * Set up the default values for our shortcode attributes
			 * These attributes are used for both shortcodes
			 * @uses apply_filters() to allow filtering the list with the listnerd-shortcodes-defaults filter
			 */
			$this->defaults = apply_filters( 'listnerd-shortcodes-defaults', array(
				'url'			=> '',
				'order'			=> 'desc',
				'orderby'		=> 'rank',
				'width'	=> '100%',
				'height'	=> '400',
			) );
			
			add_shortcode( 'list', array( &$this, 'listnerd' ) );
			add_action( 'wp_print_styles', array( &$this, 'print_styles' ) );
			
		}
		
		/**
		 * Enqueue the stylesheet
		 */
		function print_styles() {
			$this->_get_options();
			if( $this->settings['use-styles'] )
				wp_enqueue_style( 'ls-styles', plugins_url( 'default-styles.css', __FILE__ ), array(), '0.3', 'screen' );
		}
		
		/**
		 * Determine whether this plugin is network active in a multisite install
		 */
		function is_plugin_active_for_network() {
			return function_exists( 'is_plugin_active_for_network' ) && is_multisite() && is_plugin_active_for_network( $this->plugin_dir_name );
		}
		
		/**
		 * Retrieve our options from the database
		 */
		protected function _get_options() {
			$this->settings = get_option( 'ls-settings', array() );
			
			$this->settings = array_merge( $this->stock_settings, $this->settings );
			return;
		}
		
		/**
		 * Handle the shortcode to display listnerd list content
		 */
		function listnerd( $atts=array() ) {
			if(!$atts[0] && !$atts['url']) return;
			$this->defaults['url'] = $atts[0];
			if(!@$atts['width']){
				$atts['width'] = $this->defaults['width'];
			}
			if(!@$atts['height']){
				$atts['height'] = $this->defaults['height'];
			}
			
			$content = '';
			/**
			 * Output a little debug info if necessary
			 */
			if ( ( defined( 'WP_DEBUG' ) && WP_DEBUG ) || isset( $_REQUEST['ls-debug'] ) )
				error_log( '[LS Debug]: Preparing to retrieve listnerd with the following args: ' . print_r( $atts, true ) );

			if($atts[0] && (strstr($atts[0], '/listnerd/') || strstr($atts[0], 'listnerd.com/')) && (strstr($atts[0], '/list/') || strstr($atts[0], '/embed/')) ){
				$content = '<iframe width="'.$atts['width'].'" height="'.$atts['height'].'" src="'.(str_replace('/list/', '/embed/', $atts[0])).'" frameborder="0"></iframe>';
			}
			
			return $content;
		}
		
	}
}
?>