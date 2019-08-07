<?php
/**
 * homelife enqueue scripts
 *
 * @package homelife
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'homelife_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function homelife_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'homelife-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		
		wp_enqueue_style( 'homelife-fonts', 'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Source+Sans+Pro:400,700&display=swap');

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'homelife-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		
		

	}
} // endif function_exists( 'homelife_scripts' ).

add_action( 'wp_enqueue_scripts', 'homelife_scripts' );
