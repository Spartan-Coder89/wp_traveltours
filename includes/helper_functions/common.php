<?php

/**
 * Receives nav menu name as parameter
 * Outputs the the menu items in html format
 */
function output_menu($menu_name) {

  if (!empty(wp_get_nav_menu_object($menu_name))) {

    $main_nav_menu = wp_get_nav_menu_object($menu_name);
    $main_nav_menu_items = wp_get_nav_menu_items($main_nav_menu);

    foreach ($main_nav_menu_items as $key => $menu_item) {
      if (($key + 1) <= 5) {
        echo '<a href="'. $menu_item->url .'">'. $menu_item->post_title .'</a>';
      } else {
        break;
      }
    }
  }
}

/**
 * Get the inner page title
 */
function get_inner_title() {

	$page_subtitle = '';
  $page_title = '';

  if (is_page('explore-destinations') or is_post_type_archive('explore-destinations')) {
		$page_subtitle = 'Explore';
    $page_title = 'Destinations';
  }

  if (is_page('about-us')) {
		$page_subtitle = 'About us';
    $page_title = 'Get To Know Us';
  }

  if (is_page('blog') or is_archive()) {
		$page_subtitle = 'What’s the latest';
    $page_title = 'Blog and Articles';
  }

	if (is_page('contact-us')) {
    $page_subtitle = 'Contact Us';
		$page_title = 'Let’s Get Connected';
  }

	if (is_page('appointment')) {
    $page_subtitle = 'Contact Us';
		$page_title = 'Book Your Destination';
  }

  if (is_singular('destinations')) {
		global $post;
		$page_subtitle = 'Destination';
    $page_title = $post->post_title;
  }

	if (is_singular('post')) {
		global $post;
		$page_subtitle = 'Destination';
    $page_title = get_the_title($post->ID);
  }

  return '<p>'. $page_subtitle .'</p><h1>'. $page_title .'</h1>';
}

/**
 * Get header logo
 */
function get_header_logo() {

  $return_value = THEME_URI .'/assets/images/header_logo.png';

  if (!empty(get_theme_mod( 'traveltours_header_logo_setting' ))) {
    $return_value = wp_get_attachment_image_url(get_theme_mod('traveltours_header_logo_setting'));
  }

  return $return_value;
}

/**
 * Get homepage hero background image from customizer
 */
function get_home_hero_theme_mod_img() {

  $return_value = '';
  
  if (!empty(get_theme_mod( 'traveltours_hero_bg_setting' ))) {
    $return_value = '
      background: linear-gradient(90deg, rgba(46,196,182,25%) 50%, rgba(46,196,182,0) 100%), url('. wp_get_attachment_image_url(get_theme_mod('traveltours_hero_bg_setting'), 'large') .');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    ';
  }

  return $return_value;
}

/**
 * Get homepage about section image from customizer
 */
function get_about_section_theme_mod_img() {

  $return_value = '';
  
  if (!empty(get_theme_mod( 'traveltours_about_section_img_setting' ))) {
    $return_value = 'background-image: url('. wp_get_attachment_image_url(get_theme_mod('traveltours_about_section_img_setting'), 'large') .');';
  }

  return $return_value;
}

/**
 * Get theme mod img url
 */
function get_theme_mod_img_url($setting, $default) {

  $return_value = $default;

  if (!empty(get_theme_mod( $setting ))) {
    $return_value = wp_get_attachment_image_url(get_theme_mod($setting), 'large');
  }

  return $return_value;
}


/**
 * Get theme mod text values
 */
function get_theme_mod_text($setting, $default = '') {
  
  $return_value = $default;

  if (!empty(get_theme_mod($setting))) {
    $return_value = get_theme_mod($setting);
  }

  return $return_value;
}


/**
 * Get video attachment url by id
 */
function get_video_attachment($id) {

  $return_value = '';

  if (!empty($id)) {
    $return_value = '<video id="video_promotion_element" src="'. wp_get_attachment_url($id) .'" controls></video>';
  }
  
  return $return_value;
}


/**
 * Get single destination saved gallery images
 */
function get_single_destination_gallery($id, $is_admin = false) {

  $return_value = '';
  $gallery_images = json_decode(html_entity_decode(get_post_meta($id, '_destination_gallery', true)), true);

  if (is_array($gallery_images)) {

    if ($is_admin) {
      foreach ($gallery_images as $key => $attachment) {
        $return_value .= '<div class="img" style="background-image: url('. $attachment['url'] .')">
          <span class="dashicons dashicons-remove remove_img" data-id="'. $attachment['id'] .'"></span>
        </div>';
      }

    } else {

      foreach ($gallery_images as $key => $attachment) {
        $return_value .= '<div class="img" style="background-image: url('. $attachment['url'] .')"></div>';
      }
    }
  }

  return $return_value;
}


/**
 * Get single destination key highlights
 */
function get_single_destination_key_highlights($id, $is_admin = false) {

  $return_value = '';
  $key_highlights = json_decode(html_entity_decode(get_post_meta($id, '_key_highlights', true)), true);

  if (is_array($key_highlights)) {

    if ($is_admin) {
      foreach ($key_highlights as $key => $item) {
        $return_value .= '<li>
          <span class="dashicons dashicons-remove remove_highlight" data-id="'. $item['id'] .'"></span>
          <span>'. $item['highlight'] .'</span>
        </li>';
      }

    } else {
      $return_value .= '<li class="highlight">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.6667 22.6667L26.5 12.8333C26.8056 12.5278 27.1944 12.375 27.6667 12.375C28.1389 12.375 28.5278 12.5278 28.8333 12.8333C29.1389 13.1389 29.2917 13.5278 29.2917 14C29.2917 14.4722 29.1389 14.8611 28.8333 15.1667L17.8333 26.1667C17.5 26.5 17.1111 26.6667 16.6667 26.6667C16.2222 26.6667 15.8333 26.5 15.5 26.1667L11.1667 21.8333C10.8611 21.5278 10.7083 21.1389 10.7083 20.6667C10.7083 20.1944 10.8611 19.8056 11.1667 19.5C11.4722 19.1944 11.8611 19.0417 12.3333 19.0417C12.8056 19.0417 13.1944 19.1944 13.5 19.5L16.6667 22.6667Z" fill="#2EC4B6"/>
          </svg>
          <p>'. $item['highlight'] .'</p>
      </li>';
    }
  }

  return $return_value;
}


/**
 * Get top featured destination 
 */
function get_top_featured_destination() {

  $return_value = '';
}

/**
 * Get is featured destination value
 */
function get_is_featured_destination($post_id) {

  $return_value = 0;

  $is_top_featured = get_post_meta($post_id, 'is_top_featured', true);

  return $return_value;
}