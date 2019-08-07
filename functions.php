<?php
/**
 * homelife functions and definitions
 *
 * @package homelife
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$homelife_includes = array(
	'/setup.php',                           // Theme setup and custom theme supports.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/pagination.php',                      // Custom pagination for this theme.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
);

foreach ( $homelife_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
