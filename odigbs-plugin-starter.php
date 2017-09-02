<?php
/**
 * BlackOpz Plugin Starter
 *
 * @package     ODIGBS
 * @author      Preston Davis
 * @copyright   2017 Preston Davis
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: BlackOpz Plugin Starter
 * Plugin URI:  https://github.com/blackopz/BlackOpz-Plugin-Starter
 * Description: Starter Plugin using modern development tools (for class on knowthecode.io).
 * Version:     1.0.0
 * Author:      Preston Davis
 * Author URI:  https://github.com/blackopz
 * Domain Path: /languages
 * Text Domain: odigbs
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace ODIGBS;

/**
 * ----------------------------------------------
 * Security Check: Exit if accessed directly
 * ----------------------------------------------
 */
if ( ! defined( 'ABSPATH' ) ) { 
	exit( 'Cheatin&#8217; uh?' ); 
}

/**
 * ----------------------------------------------
 * Version Check: Bail if using < version 4.8
 * ----------------------------------------------
 */
global $wp_version;
if ( ! version_compare( $wp_version, '4.8', '>=' ) ) {
	die( 'You need at least at least version 4.8 of WordPress to use this plugin.' );
}

// Load up composer's autoload.php
require_once( __DIR__ . "/assets/vendor/autoload.php" );

// Run the launch function
add_action( 'init', __NAMESPACE__ . '\launch' );

/**
 * Get plugin ready to launch
 * @return void
 */
function launch() {
	// Do stuff
}
