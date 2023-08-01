<?php

namespace TopNotification\TopView\Http\Controller;

use TopNotification\Settings\Http\Services\SettingsService;

class HeaderViewController {
	public $variables;

	/**
	 * @return void
	 * Get Notification Controller
	 */
	public function getNotification(): void {
		$this->addActionWpEnqueueScripts();
		$this->variables = ( new SettingsService )->firstOrDefault();
		if ( $this->variables['wpsup_is_active_notification'] === 'checked' ) {
			$this->addActionWpHead();
		}
	}

	/**
	 * @return void
	 * Add Action Wp Head
	 */
	public function addActionWpHead(): void {
		add_action( 'wp_head', function () {
			$this->viewNotification( $this->variables );
		} );
	}

	/**
	 * @return void
	 * Add Action Wp enqueue Scripts
	 */
	public function addActionWpEnqueueScripts(): void {
		add_action( 'wp_enqueue_scripts', function () {
			$this->addCssFile();
		} );
	}

	/**
	 * @return void
	 * Add css file
	 */
	public function addCssFile(): void {
		wp_enqueue_style( WP_SUP_TOP_NOT_PLUGIN_DOMAIN,
			WP_SUP_TOP_NOT_PLUGIN_DIR_URL . '/assets/css/header-notification.css' );
	}


	/**
	 * @param $variables
	 *
	 * @return void
	 * View notification
	 */
	public function viewNotification( $variables ): void {
		require( WP_SUP_TOP_NOT_PLUGIN_DIR . '/includes/classes/TopView/Views/NotificationView.php' );
	}
}