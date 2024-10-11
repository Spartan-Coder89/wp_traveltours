<?php

add_action('save_post_testimonials', function($post_id) {

	if (!isset($_POST['testimonials_nonce'])) {
		return;
	}

	if (!wp_verify_nonce($_POST['testimonials_nonce'], 'testimonials_nonce')) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}
	
	if (isset($_POST['testimonial_position']) and !empty(isset($_POST['testimonial_position']))) {
		$testimonial_position = htmlspecialchars(strip_tags($_POST['testimonial_position']));
		update_post_meta($post_id, '_testimonial_position', $testimonial_position);
	}
});