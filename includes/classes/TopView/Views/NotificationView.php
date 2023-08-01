<div id="top-warning"
     style="background:url(<?= $variables['wpsup_left_img_url'] ?>) 100% no-repeat,url(<?= $variables['wpsup_right_img_url'] ?>) 0 no-repeat <?= $variables['wpsup_header_bg'] ?>;"
     class="d-flex">

    <div class="message" style="margin-right: 1rem; color: <?= $variables['wpsup_text_color'] ?>">
        <span class="mobile_banner_text">
            <?= $variables['wpsup_notification_mobile'] ?>
        </span>
        <span class="desktop_banner_text">
            <?= $variables['wpsup_notification'] ?>
        </span>
    </div>

    <a style="color:<?= $variables['wpsup_button_text_color'] ?>; background-color: <?= $variables['wpsup_button_bg'] ?>;"
       href=" <?= $variables['wpsup_button_link'] ?> "
       class="btn btn-default button_description_banner">
		<?= $variables['wpsup_button_text'] ?>
    </a>
    <a href="<?= $variables['wpsup_button_link'] ?>">
        <img class="top_banner_mobile_icon" style="display: none;"
             src="wp-content/plugins/<?= WP_SUP_TOP_NOT_PLUGIN_DOMAIN ?>/assets/img/arrow.png" alt="" width="20">
    </a>
</div>