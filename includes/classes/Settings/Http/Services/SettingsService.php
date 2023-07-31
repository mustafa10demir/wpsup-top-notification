<?php

namespace TopNotification\Settings\Http\Services;

defined( 'ABSPATH' ) || exit;

class SettingsService {

	public $inputs;

	public function __construct() {
		$this->inputs = [
			[
				'name'    => 'wpsup_is_active_notification',
				'default' => 'false',
			],
			[
				'name'    => 'wpsup_notification',
				'default' => __( 'Notification Desktop', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ),
			],
			[
				'name'    => 'wpsup_notification_mobile',
				'default' => __( 'Notification Mobile', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ),
			],
			[
				'name'    => 'wpsup_text_color',
				'default' => '#ffffff',
			],
			[
				'name'    => 'wpsup_button_text',
				'default' => __( 'Read More', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ),
			],
			[
				'name'    => 'wpsup_button_link',
				'default' => '#',
			],
			[
				'name'    => 'wpsup_button_bg',
				'default' => '#ffffff',
			],
			[
				'name'    => 'wpsup_button_text_color',
				'default' => '#333333',
			],
			[
				'name'    => 'wpsup_header_bg',
				'default' => '#2d74b1',
			],
			[
				'name'    => 'wpsup_header_bg',
				'default' => '#2d74b1',
			],
			[
				'name'    => 'wpsup_right_img_url',
				'default' => null,
			],
			[
				'name'    => 'wpsup_left_img_url',
				'default' => null,
			],
		];
	}

	/**
	 * @param $post
	 *
	 * @return string
	 * Settings page post save
	 */
	public function saveSetting( $post ): string {
		foreach ( $this->inputs as $input ) {
			$this->updateOrCrate( $input['name'], $post[ $input['name'] ] ?? $input['default'] );
		}

		return __( 'Update Successful' );
	}

	/**
	 * @param $name
	 * @param $value
	 *
	 * @return void
	 * Update or Create option
	 */
	public function updateOrCrate( $name, $value ): void {
		if ( get_option( $name ) !== null && get_option( $name ) != '' ) {
			update_option( $name, $value );
		} else {
			add_option( $name, $value );
		}
	}

	/**
	 * @return array
	 * Get option value or default value
	 */
	public function firstOrDefault(): array {
		$variables = [];
		foreach ( $this->inputs as $input ) {
			if ( get_option( $input['name'] ) !== null && get_option( $input['name'] ) != '' ) {
				$variables[ $input['name'] ] = get_option( $input['name'] );
			} else {
				$variables[ $input['name'] ] = $input['default'];
			}
		}

		return $variables;
	}

}