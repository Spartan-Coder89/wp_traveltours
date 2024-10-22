<?php

function list_about_page_gallery_images() {

	$return_value = '';

	if (!empty(get_theme_mod('traveltours_aboutus_gallery_setting'))) {
		$gallery = json_decode(get_theme_mod('traveltours_aboutus_gallery_setting'), true);
		
		foreach ($gallery as $key => $image) {
			$return_value .= '<div class="img" style="background-image: url('. $image['url'] .')"></div>';
		}
	}
	
	return $return_value;
}


function list_about_page_contact_info() {

	$return_value = '';

	$email = get_theme_mod_text('traveltours_aboutus_email_setting', '');
	$contact_number = get_theme_mod_text('traveltours_aboutus_number_setting', '');
	$office_number = get_theme_mod_text('traveltours_aboutus_address_setting', '');

	if (!empty($email)) {
		$return_value .= '<section>
			<h3>Email:</h3>
			<p>'. $email .'</p>
		</section>';
	}

	if (!empty($contact_number)) {
		$return_value .= '<section>
			<h3>Contact number:</h3>
			<p>'. $contact_number .'</p>
		</section>';
	}

	if (!empty($office_number)) {
		$return_value .= '<section>
			<h3>Office address:</h3>
			<p>'. $office_number .'</p>
		</section>';
	}

	return $return_value;
}


function list_about_page_get_accreditations() {

	$return_value = '';

	$posts = get_posts([
		'posts_per_page' => -1,
		'post_type' => 'accreditations'
	]);

	if (!empty($posts)) {

		foreach ($posts as $key => $post) {
			
			$return_value .= '<li>
				<div class="img" style="background-image: url('. get_the_post_thumbnail_url($post->ID) .')"></div>
				<div class="details">
					<p class="name">'. $post->post_title .'</p>
					<p class="creds_description">'. $post->post_content .'</p>
				</div>
			</li>';
		}
	}

	return $return_value;
}