<?php
/**
 * Plugin Name:       Top Notification
 * Description:       Enhance your website with a handy notification bar using our WordPress plugin! Display important announcements or promotions at the top of your site with ease.
 * Plugin URI:        https://wpsup.co/plugins/notification
 * Version:           1.0.0
 * Requires at least: 5.7
 * Requires PHP:      7.4
 * Author:            WpSup
 * Author URI:        https://wpsup.co/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wpsup-header-notification
 * Domain Path:       /languages/
 *
 * @package wpsup-top-notification
 */

namespace TopNotification;

use TopNotification\Setup\Setup;

defined( 'ABSPATH' ) || exit;

define( 'WP_SUP_TOP_NOT_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );
define( 'WP_SUP_TOP_NOT_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
define( 'WP_SUP_TOP_NOT_PLUGIN_DOMAIN', 'wpsup-top-notification' );
define( 'WP_SUP_TOP_NOT_PLUGIN_VERSION', '1.0.0' );

/**
 * PSR-4-ish autoloading
 *
 * @since 2.6
 */
spl_autoload_register(
	function ( $class ) {
		// project-specific namespace prefix.
		$prefix = 'TopNotification\\';

		// base directory for the namespace prefix.
		$base_dir = __DIR__ . '/includes/classes/';

		// does the class use the namespace prefix?
		$len = strlen( $prefix );

		if ( strncmp( $prefix, $class, $len ) !== 0 ) {
			return;
		}

		$relative_class = substr( $class, $len );

		$file = $base_dir . str_replace( '\\', '/', $relative_class ) . '.php';

		// if the file exists, require it.
		if ( file_exists( $file ) ) {
			require $file;
		}
	}
);

( new Setup )->setup();