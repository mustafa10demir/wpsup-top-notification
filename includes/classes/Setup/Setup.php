<?php

namespace TopNotification\Setup;

use TopNotification\AdminMenu\AddAdminMenu;
use TopNotification\TopView\Http\Controller\HeaderViewController;

defined( 'ABSPATH' ) || exit;

class Setup {

	/**
	 * @return void
	 * Plugin Setup
	 */
	public function setup(): void {
		$this->loadLanguage();
		$this->addMenu();
		$this->viewNotification();
	}

	/**
	 * @return void
	 * Load language file
	 */
	private function loadLanguage(): void {
		load_theme_textdomain( WP_SUP_TOP_NOT_PLUGIN_DOMAIN, WP_SUP_TOP_NOT_PLUGIN_DIR . '/languages' );
	}

	/**
	 * @return void
	 * Add Admin Menu
	 */
	private function addMenu(): void {
		( new AddAdminMenu )->addAdminMenu();
	}

	/**
	 * @return void
	 * Frontend Get Notification
	 */
	private function viewNotification(): void {
		( new HeaderViewController() )->getNotification();
	}
}