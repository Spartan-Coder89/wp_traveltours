<?php

add_action('save_post_social-links', function($post_id) {

	if (!isset($_POST['social_links_nonce'])) {
		return;
	}

	if (!wp_verify_nonce($_POST['social_links_nonce'], 'social_links_nonce')) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	
	if (isset($_POST['social_link']) and !empty(isset($_POST['social_link']))) {
		$social_link = htmlspecialchars(strip_tags($_POST['social_link']));
		update_post_meta($post_id, '_social_link', $social_link);
	}
});