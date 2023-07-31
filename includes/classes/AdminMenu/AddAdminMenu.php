<?php

namespace TopNotification\AdminMenu;

use TopNotification\Settings\Http\Controller\SettingsController;
use TopNotification\Settings\Http\Services\SettingsService;

defined( 'ABSPATH' ) || exit;

class AddAdminMenu {

	/**
	 * @return void
	 * Add action admin menu
	 */
	public function addAdminMenu(): void {
		add_action( 'admin_menu', function () {
			$this->addMenuItem();
		} );
	}

	/**
	 * @return void
	 * WordPress Panel, settings add submenu Top Notification
	 */
	public function addMenuItem(): void {
		add_submenu_page(
			'options-general.php',
			__( 'Top Notification', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ),
			__( 'Top Notification', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ),
			'manage_options',
			WP_SUP_TOP_NOT_PLUGIN_DOMAIN,
			function () {
				$service = new SettingsService();
				$controller = new SettingsController( $service );
				$controller->getSettingsPage();
			}
		);
	}

}