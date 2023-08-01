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
				'name'    => 'wpsup_is_target_blank',
				'default' => null,
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
		delete_option($name);
        add_option($name, $value);
	}

	/**
	 * @return array
	 * Get option value or default value
	 */
	public function firstOrDefault(): array {
		$variables = [];
		$variables = [];
		foreach ( $this->inputs as $input ) {
            $variables[ $input['name'] ] =  str_replace('\\', '', get_option($input['name'], $input['default']));
		}
		return $variables;
	}

}