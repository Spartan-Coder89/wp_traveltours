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
 * Get theme mod text values
 */
function get_theme_mod_text($setting, $default = '') {
  
  $return_value = $default;

  if (!empty(get_theme_mod($setting))) {
    $return_value = get_theme_mod($setting);
  }

  return $return_value;
}