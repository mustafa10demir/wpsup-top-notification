<div class="wrap">
    <h1> <?= __( 'Settings' ) ?></h1>

	<?php
	if ( isset( $message ) ) {
		?>
        <div id="setting-error-settings_updated" class="notice notice-success settings-error is-dismissible">
            <p>
                <strong><?= $message; ?></strong>
            </p>
            <button type="button" class="notice-dismiss">
                <span class="screen-reader-text"> <?= __( 'Hide Message', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ); ?> </span>
            </button>
        </div>
		<?php
	}
	?>

    <form method="post">
        <table class="form-table">
            <tr>
                <th scope="row">
					<?= __( 'Active', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ) ?>
                </th>
                <td>
                    <fieldset>
                        <label for="wpsup_is_active_notification">
                            <input name="wpsup_is_active_notification" id="wpsup_is_active_notification" type="checkbox"
                                   value="checked" <?= $variables['wpsup_is_active_notification'] ?? null; ?>>
							<?= __( 'Is the notification active?', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ); ?>
                        </label>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="wpsup_notification">
						<?= __( 'Notification', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ) ?>
                    </label>
                </th>
                <td>
                    <input name="wpsup_notification" type="text" id="wpsup_notification"
                           value="<?= $variables['wpsup_notification'] ?? null; ?>"
                           class="regular-text">
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="wpsup_notification_mobile">
						<?= __( 'Notification Mobile', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ) ?>
                    </label>
                </th>
                <td>
                    <input name="wpsup_notification_mobile" type="text" id="wpsup_notification_mobile"
                           value="<?= $variables['wpsup_notification_mobile'] ?? null; ?>"
                           class="regular-text">
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="wpsup_text_color">
						<?= __( 'Text Color', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ) ?>
                    </label>
                </th>
                <td>
                    <input type="color" id="wpsup_text_color" name="wpsup_text_color"
                           value="<?= $variables['wpsup_text_color'] ?? null; ?>">
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="wpsup_button_text">
						<?= __( 'Button Text', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ) ?>
                    </label>
                </th>
                <td>
                    <input name="wpsup_button_text" type="text" id="wpsup_button_text"
                           value="<?= $variables['wpsup_button_text'] ?? null; ?>"
                           class="regular-text">
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="wpsup_button_link">
						<?= __( 'Button Link', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ) ?>
                    </label>
                </th>
                <td>
                    <input name="wpsup_button_link" type="text" id="wpsup_button_link"
                           value="<?= $variables['wpsup_button_link'] ?? null; ?>"
                           class="regular-text">
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="wpsup_button_bg">
						<?= __( 'Button Background Color', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ) ?>
                    </label>
                </th>
                <td>
                    <input type="color" id="wpsup_button_bg" name="wpsup_button_bg"
                           value="<?= $variables['wpsup_button_bg'] ?? null; ?>">
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="wpsup_button_text_color">
						<?= __( 'Button Text Color', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ) ?>
                    </label>
                </th>
                <td>
                    <input type="color" id="wpsup_button_text_color" name="wpsup_button_text_color"
                           value="<?= $variables['wpsup_button_text_color'] ?? null; ?>">
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="wpsup_header_bg">
						<?= __( 'Header Background Color', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ) ?>
                    </label>
                </th>
                <td>
                    <input type="color" id="wpsup_header_bg" name="wpsup_header_bg"
                           value="<?= $variables['wpsup_header_bg'] ?? null; ?>">
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="wpsup_bgl">
						<?= __( 'Left BG Image Link', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ) ?>
                    </label>
                </th>
                <td>
                    <input name="wpsup_left_img_url" type="text" id="wpsup_left_img_url"
                           value="<?= $variables['wpsup_left_img_url'] ?? null; ?>" class="regular-text">
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="wpsup_bgr">
						<?= __( 'Right BG Image Link', WP_SUP_TOP_NOT_PLUGIN_DOMAIN ) ?>
                    </label>
                </th>
                <td>
                    <input name="wpsup_right_img_url" type="text" id="wpsup_right_img_url"
                           value="<?= $variables['wpsup_right_img_url'] ?? null; ?>" class="regular-text">
                </td>
            </tr>
        </table>
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="<?= __( 'Update' ); ?>">
        </p>
    </form>
</div>

<script>
    jQuery(document).ready(function ($) {
        $('.notice-dismiss').on('click', function () {
            $(this).parent().fadeOut();
        });
    });
</script>