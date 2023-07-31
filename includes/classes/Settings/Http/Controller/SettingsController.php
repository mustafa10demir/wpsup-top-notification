<?php

namespace TopNotification\Settings\Http\Controller;

use TopNotification\Settings\Http\Services\SettingsService;

class SettingsController {

	public SettingsService $service;

	/**
	 * @param SettingsService $service
	 */
	public function __construct( SettingsService $service ) {
		$this->service = $service;
	}

	/**
	 * @return void
	 * Setting page Callback Function
	 */
	public function getSettingsPage(): void {
		$message = null;

		if ( $_POST ) {
			$message = $this->saveSettings( $_POST );
		}

		$variables = $this->service->firstOrDefault();

		$this->getSettingsView( $variables, $message );
	}

	/**
	 * @return void
	 * Settings Page View Page
	 */
	private function getSettingsView( $variables, $message = null ): void {
		require( WP_SUP_TOP_NOT_PLUGIN_DIR . '/includes/classes/Settings/Views/SettingsView.php' );
	}


	/**
	 * @param $post
	 *
	 * @return string
	 * Save Settings
	 */
	private function saveSettings( $post ): string {
		return $this->service->saveSetting( $post );
	}
}