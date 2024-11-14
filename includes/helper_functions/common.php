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
 * Get Footer logo
 */
function get_footer_logo() {

  $return_value = THEME_URI .'/assets/images/footer_logo.png';

  if (!empty(get_theme_mod( 'traveltours_footer_logo_setting' ))) {
    $return_value = wp_get_attachment_image_url(get_theme_mod('traveltours_footer_logo_setting'));
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
 * List social icons and links
 */
function list_social_links() {

  $return_value = '';

  if (!empty(get_theme_mod_text('traveltours_facebook_link_setting', ''))) {
    $facebook = get_theme_mod_text('traveltours_facebook_link_setting', '');

    $return_value .= '<a href="'. $facebook .'">
        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.0531 16.7569V19.3387H18.1631V22.4944H20.0531V31.875H23.9381V22.4944H26.5444C26.5444 22.4944 26.79 20.9812 26.9081 19.3256H23.9531V17.1694C23.9531 16.845 24.3769 16.4119 24.7969 16.4119H26.9119V13.125H24.0337C19.9575 13.125 20.0531 16.2844 20.0531 16.7569Z" fill="#DDF4F0"/>
            <path d="M22.5 37.5C26.4782 37.5 30.2936 35.9196 33.1066 33.1066C35.9196 30.2936 37.5 26.4782 37.5 22.5C37.5 18.5218 35.9196 14.7064 33.1066 11.8934C30.2936 9.08035 26.4782 7.5 22.5 7.5C18.5218 7.5 14.7064 9.08035 11.8934 11.8934C9.08035 14.7064 7.5 18.5218 7.5 22.5C7.5 26.4782 9.08035 30.2936 11.8934 33.1066C14.7064 35.9196 18.5218 37.5 22.5 37.5ZM22.5 41.25C12.1444 41.25 3.75 32.8556 3.75 22.5C3.75 12.1444 12.1444 3.75 22.5 3.75C32.8556 3.75 41.25 12.1444 41.25 22.5C41.25 32.8556 32.8556 41.25 22.5 41.25Z" fill="#DDF4F0"/>
        </svg>
    </a>';
  }

  if (!empty(get_theme_mod_text('traveltours_twitter_link_setting', ''))) {
    $twitter = get_theme_mod_text('traveltours_twitter_link_setting', '');

    $return_value .= '<a href="'. $twitter .'">
        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.5 37.5C26.4782 37.5 30.2936 35.9196 33.1066 33.1066C35.9196 30.2936 37.5 26.4782 37.5 22.5C37.5 18.5218 35.9196 14.7064 33.1066 11.8934C30.2936 9.08035 26.4782 7.5 22.5 7.5C18.5218 7.5 14.7064 9.08035 11.8934 11.8934C9.08035 14.7064 7.5 18.5218 7.5 22.5C7.5 26.4782 9.08035 30.2936 11.8934 33.1066C14.7064 35.9196 18.5218 37.5 22.5 37.5ZM22.5 41.25C12.1444 41.25 3.75 32.8556 3.75 22.5C3.75 12.1444 12.1444 3.75 22.5 3.75C32.8556 3.75 41.25 12.1444 41.25 22.5C41.25 32.8556 32.8556 41.25 22.5 41.25Z" fill="#DDF4F0"/>
            <path d="M31.875 16.7756C31.185 17.0756 30.4444 17.2819 29.6662 17.3719C30.4612 16.9031 31.0688 16.1606 31.3575 15.2775C30.5999 15.719 29.7733 16.0296 28.9125 16.1962C28.5504 15.8167 28.1148 15.5149 27.6322 15.3092C27.1496 15.1036 26.6302 14.9983 26.1056 15C23.9813 15 22.26 16.6969 22.26 18.7875C22.26 19.0838 22.2938 19.3725 22.3594 19.65C20.8356 19.5776 19.3437 19.1885 17.9787 18.5073C16.6138 17.8261 15.4058 16.8679 14.4319 15.6937C14.0898 16.2696 13.9097 16.9271 13.9106 17.5969C13.9106 18.9094 14.5912 20.0719 15.6225 20.7487C15.0121 20.7296 14.4147 20.5671 13.8787 20.2744V20.3212C13.8845 21.2015 14.1952 22.0525 14.758 22.7294C15.3207 23.4063 16.1006 23.8673 16.965 24.0337C16.3975 24.1838 15.8038 24.2056 15.2269 24.0975C15.4784 24.8548 15.9594 25.5149 16.6032 25.9863C17.2469 26.4577 18.0215 26.717 18.8194 26.7281C17.4506 27.7829 15.7699 28.3528 14.0419 28.3481C13.7325 28.3481 13.4269 28.3294 13.125 28.2956C14.8884 29.4118 16.9331 30.0029 19.02 30C26.0962 30 29.9644 24.2287 29.9644 19.2225L29.9513 18.7312C30.7056 18.2011 31.3574 17.5385 31.875 16.7756Z" fill="#DDF4F0"/>
        </svg>
    </a>';
  }

  if (!empty(get_theme_mod_text('traveltours_youtube_link_setting', ''))) {
    $youtube = get_theme_mod_text('traveltours_youtube_link_setting', '');

    $return_value .= '<a href="'. $youtube .'">
        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.5 37.5C26.4782 37.5 30.2936 35.9196 33.1066 33.1066C35.9196 30.2936 37.5 26.4782 37.5 22.5C37.5 18.5218 35.9196 14.7064 33.1066 11.8934C30.2936 9.08035 26.4782 7.5 22.5 7.5C18.5218 7.5 14.7064 9.08035 11.8934 11.8934C9.08035 14.7064 7.5 18.5218 7.5 22.5C7.5 26.4782 9.08035 30.2936 11.8934 33.1066C14.7064 35.9196 18.5218 37.5 22.5 37.5ZM22.5 41.25C12.1444 41.25 3.75 32.8556 3.75 22.5C3.75 12.1444 12.1444 3.75 22.5 3.75C32.8556 3.75 41.25 12.1444 41.25 22.5C41.25 32.8556 32.8556 41.25 22.5 41.25Z" fill="#DDF4F0"/>
            <path d="M27.9806 15.9862H17.0194C14.8688 15.9862 13.125 17.7112 13.125 19.8375V25.2563C13.125 27.3844 14.8688 29.1075 17.0194 29.1075H27.9806C30.1313 29.1075 31.875 27.3825 31.875 25.2563V19.8375C31.875 17.7094 30.1313 15.9862 27.9806 15.9862ZM25.3481 22.8113L20.22 25.23C20.1886 25.2448 20.154 25.2515 20.1194 25.2494C20.0848 25.2473 20.0512 25.2365 20.0219 25.218C19.9925 25.1995 19.9683 25.1739 19.9515 25.1435C19.9347 25.1132 19.9258 25.0791 19.9256 25.0444V20.0569C19.9259 20.0217 19.9352 19.9872 19.9526 19.9567C19.97 19.9262 19.9949 19.9006 20.0249 19.8823C20.055 19.8641 20.0892 19.8539 20.1243 19.8526C20.1595 19.8513 20.1943 19.859 20.2256 19.875L25.3519 22.4438C25.3856 22.4614 25.4138 22.488 25.4333 22.5206C25.4528 22.5532 25.463 22.5906 25.4626 22.6286C25.4622 22.6667 25.4513 22.7039 25.4311 22.7361C25.4109 22.7683 25.3822 22.7943 25.3481 22.8113Z" fill="#DDF4F0"/>
        </svg>
    </a>';
  }

  if (!empty(get_theme_mod_text('traveltours_instagram_link_setting', ''))) {
    $instagram = get_theme_mod_text('traveltours_instagram_link_setting', '');

    $return_value .= '<a href="'. $instagram .'">
        <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.5 5C17.7509 5 17.1538 5.02188 15.2878 5.105C13.4219 5.1925 12.1509 5.48562 11.0375 5.91875C9.86958 6.35804 8.8117 7.04712 7.93781 7.93781C7.04767 8.81215 6.35867 9.8699 5.91875 11.0375C5.48562 12.1487 5.19031 13.4219 5.105 15.2812C5.02188 17.1516 5 17.7466 5 22.5022C5 27.2534 5.02188 27.8484 5.105 29.7144C5.1925 31.5781 5.48562 32.8491 5.91875 33.9625C6.36719 35.1131 6.96438 36.0887 7.93781 37.0622C8.90906 38.0356 9.88469 38.635 11.0353 39.0812C12.1509 39.5144 13.4197 39.8097 15.2834 39.895C17.1516 39.9781 17.7466 40 22.5 40C27.2534 40 27.8463 39.9781 29.7144 39.895C31.5759 39.8075 32.8512 39.5144 33.9647 39.0812C35.1319 38.6417 36.189 37.9527 37.0622 37.0622C38.0356 36.0887 38.6328 35.1131 39.0812 33.9625C39.5122 32.8491 39.8075 31.5781 39.895 29.7144C39.9781 27.8484 40 27.2534 40 22.5C40 17.7466 39.9781 17.1516 39.895 15.2834C39.8075 13.4219 39.5122 12.1487 39.0812 11.0375C38.6414 9.86987 37.9524 8.8121 37.0622 7.93781C36.1886 7.04679 35.1306 6.35766 33.9625 5.91875C32.8469 5.48562 31.5737 5.19031 29.7122 5.105C27.8441 5.02188 27.2513 5 22.4956 5H22.5022H22.5ZM20.9316 8.15438H22.5022C27.1747 8.15438 27.7281 8.16969 29.5722 8.255C31.2784 8.33156 32.2059 8.61812 32.8228 8.85656C33.6388 9.17375 34.2228 9.55438 34.8353 10.1669C35.4478 10.7794 35.8263 11.3612 36.1434 12.1794C36.3841 12.7941 36.6684 13.7216 36.745 15.4278C36.8303 17.2719 36.8478 17.8253 36.8478 22.4956C36.8478 27.1659 36.8303 27.7216 36.745 29.5656C36.6684 31.2719 36.3819 32.1972 36.1434 32.8141C35.8629 33.5739 35.4151 34.261 34.8331 34.8244C34.2206 35.4369 33.6388 35.8153 32.8206 36.1325C32.2081 36.3731 31.2806 36.6575 29.5722 36.7362C27.7281 36.8194 27.1747 36.8391 22.5022 36.8391C17.8297 36.8391 17.2741 36.8194 15.43 36.7362C13.7238 36.6575 12.7984 36.3731 12.1816 36.1325C11.4214 35.8523 10.7337 35.4053 10.1691 34.8244C9.58664 34.2601 9.13814 33.5724 8.85656 32.8119C8.61812 32.1972 8.33156 31.2697 8.255 29.5634C8.17188 27.7194 8.15438 27.1659 8.15438 22.4912C8.15438 17.8187 8.17188 17.2675 8.255 15.4234C8.33375 13.7172 8.61813 12.7897 8.85875 12.1728C9.17594 11.3569 9.55656 10.7728 10.1691 10.1603C10.7816 9.54781 11.3634 9.16937 12.1816 8.85219C12.7984 8.61156 13.7238 8.32719 15.43 8.24844C17.0444 8.17406 17.67 8.15219 20.9316 8.15V8.15438ZM31.8428 11.0594C31.567 11.0594 31.294 11.1137 31.0392 11.2192C30.7844 11.3248 30.5529 11.4794 30.3579 11.6745C30.1629 11.8695 30.0082 12.101 29.9027 12.3557C29.7971 12.6105 29.7428 12.8836 29.7428 13.1594C29.7428 13.4352 29.7971 13.7082 29.9027 13.963C30.0082 14.2178 30.1629 14.4493 30.3579 14.6443C30.5529 14.8393 30.7844 14.994 31.0392 15.0995C31.294 15.2051 31.567 15.2594 31.8428 15.2594C32.3998 15.2594 32.9339 15.0381 33.3277 14.6443C33.7216 14.2505 33.9428 13.7163 33.9428 13.1594C33.9428 12.6024 33.7216 12.0683 33.3277 11.6745C32.9339 11.2806 32.3998 11.0594 31.8428 11.0594ZM22.5022 13.5138C21.3102 13.4952 20.1263 13.7139 19.0196 14.1572C17.9129 14.6005 16.9055 15.2595 16.056 16.0959C15.2064 16.9323 14.5317 17.9294 14.0712 19.029C13.6107 20.1286 13.3735 21.3089 13.3735 22.5011C13.3735 23.6933 13.6107 24.8735 14.0712 25.9732C14.5317 27.0728 15.2064 28.0699 16.056 28.9063C16.9055 29.7427 17.9129 30.4017 19.0196 30.845C20.1263 31.2883 21.3102 31.507 22.5022 31.4884C24.8615 31.4516 27.1117 30.4886 28.7671 28.8071C30.4226 27.1257 31.3504 24.8607 31.3504 22.5011C31.3504 20.1415 30.4226 17.8765 28.7671 16.1951C27.1117 14.5136 24.8615 13.5506 22.5022 13.5138ZM22.5022 16.6659C24.0495 16.6659 25.5334 17.2806 26.6275 18.3747C27.7216 19.4688 28.3363 20.9527 28.3363 22.5C28.3363 24.0473 27.7216 25.5312 26.6275 26.6253C25.5334 27.7194 24.0495 28.3341 22.5022 28.3341C20.9549 28.3341 19.471 27.7194 18.3769 26.6253C17.2828 25.5312 16.6681 24.0473 16.6681 22.5C16.6681 20.9527 17.2828 19.4688 18.3769 18.3747C19.471 17.2806 20.9549 16.6659 22.5022 16.6659Z" fill="#DDF4F0"/>
        </svg>
    </a>';
  }

  return $return_value;
}