<?php

namespace TopNotification\Setup;

defined( 'ABSPATH' ) || exit;

class Setup {
	/**
	 * @return void
	 * Plugin Setup
	 */
	public function setup(): void {
		$this->loadLanguage();
	}

	/**
	 * @return void
	 * Load language file
	 */
	private function loadLanguage(): void {
		load_theme_textdomain( WP_SUP_TOP_NOT_PLUGIN_DOMAIN, WP_SUP_TOP_NOT_PLUGIN_DIR . '/languages' );
	}
}