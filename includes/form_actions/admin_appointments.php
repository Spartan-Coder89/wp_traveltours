<?php

add_action('admin_post_appointment_settings', function() {

    if (!isset($_POST['appointment_settings_nonce'])) {
        return false;
    }

    if (!wp_verify_nonce($_POST['appointment_settings_nonce'], 'appointment_settings_nonce')) {
        return false;
    }

    if (!is_admin()) {
        return false;
    }

    if (!current_user_can('edit_user', get_current_user_id())) {
        return false;
    }

    if (isset($_POST['available_meeting_time'])) {
        update_user_meta(get_current_user_id(), '_available_meeting_time', htmlspecialchars($_POST['available_meeting_time']));
    }

    wp_safe_redirect(admin_url() .'/admin.php?page=appointments');
    exit;
});

