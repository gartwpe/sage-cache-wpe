<?php
/**
 * Plugin Name: WP Engine Sage Cache 
 * Version: 0.1.0
 * Plugin URI: https://github.com/gartwpe/sage-cache-wpe
 * Description: Ensures that sage's cache folders are present on WP Engine. Make sure to update your Sage theme <code>compiled</code> path to <code>'compiled' => '/tmp/sage-cache-' . PWP_NAME,</code> (ie. inside <code>/wp-content/themes/YOUR_THEME/config/view.php</code>, <code>/THEME/vendor/roots/acorn/config/view.php</code>)
 * Author: Gart
 * Requires at least: 5.0
 * Tested up to: 5.8
 *
 * Text Domain: sage-cache-wpe
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Gart
 * @since 0.1.0
 */

// Don't allow direct execution of this file
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Exclude CLI commands from being subject 
if ( ! defined('WP_CLI') && WP_CLI) {  

// Define the cache directory on WP Engine based on the install name
$dir = "/tmp/sage-cache-" . PWP_NAME;

// Create the cache directory directory if it doesn't exist
if ( !is_dir( $dir ) ) {
    mkdir( $dir, 0775 );
	}
}
