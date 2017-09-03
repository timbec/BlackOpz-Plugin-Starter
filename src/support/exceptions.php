<?php
/**
 * Exception handling
 *
 * @package BlackOpz\PluginName\Support
 * @since 1.0.0
 * @author Preston Davis <prestonkdavis@gmail.com>
 * @link https://sleepertechnologies.com
 * @license GNU-2.0+
 */

namespace BlackOpz\PluginName\Support;

use \Whoops\Handler\PrettyPageHandler;
use \Whoops\Run;

// Load whoops right after the plugin is loaded
add_action( 'plugins_loaded', __NAMESPACE__ . '\load_whoops', 1 );

/**
 * Load Whoops.
 * 
 * @since 1.0.0 
 * @return void
 */
function load_whoops(){
	$whoops = new Run();
	$error_page = new PrettyPageHandler();
	$error_page->setEditor( 'sublime' );
	$whoops->pushHandler( $error_page );
	$whoops->register();
}

// This SHOULD be unnecessary as it is called on plugins_loaded. 
// Must be something wrong with my namespacing.
load_whoops();