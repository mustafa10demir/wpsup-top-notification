<?php

namespace TopNotification\Setup;

use TopNotification\AdminMenu\AddAdminMenu;

defined( 'ABSPATH' ) || exit;

class Setup {

	/**
	 * @return void
	 * Plugin Setup
	 */
	public function setup(): void {
		$this->loadLanguage();
		$this->addMenu();
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

}