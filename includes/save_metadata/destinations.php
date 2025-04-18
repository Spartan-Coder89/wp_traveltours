<?php

add_action('save_post_destinations', function($post_id) {
  
  if (defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE) {
    return;
  }

  $destination_price = isset($_POST['destination_price']) ? htmlspecialchars(strip_tags($_POST['destination_price'])) : '';
  $destination_duration = isset($_POST['destination_duration']) ? htmlspecialchars(strip_tags($_POST['destination_duration'])) : '';
  $destination_location = isset($_POST['destination_location']) ? htmlspecialchars(strip_tags($_POST['destination_location'])) : '';
  $destination_flight = isset($_POST['destination_flight']) ? htmlspecialchars(strip_tags($_POST['destination_flight'])) : '';
  $destination_board_and_lodging = isset($_POST['destination_board_and_lodging']) ? htmlspecialchars(strip_tags($_POST['destination_board_and_lodging'])) : '';
  $destination_visa = isset($_POST['destination_visa']) ? htmlspecialchars(strip_tags($_POST['destination_visa'])) : '';
  $featured = isset($_POST['featured']) ? htmlspecialchars(strip_tags($_POST['featured'])) : 0;
  $top_featured = isset($_POST['top_featured']) ? htmlspecialchars(strip_tags($_POST['top_featured'])) : 0;
  $video_promotion = isset($_POST['video_promotion']) ? htmlspecialchars(strip_tags($_POST['video_promotion'])) : '';
  $destination_gallery = isset($_POST['destination_gallery']) ? htmlspecialchars($_POST['destination_gallery']) : '[]';
  $key_highlights = isset($_POST['key_highlights']) ? htmlspecialchars($_POST['key_highlights']) : '';
  $itenerary = isset($_POST['itenerary']) ? htmlspecialchars($_POST['itenerary']) : '';

  //  Reset all previous top featured 
  //  if current destination is set to top featured
  if ($featured == 1 and $top_featured == 1) {

    $prev_top_featured_post = get_posts([
      'posts_per_page' => -1,
      'post_type' => 'destinations',
      'meta_key' => '_top_featured',
      'meta_value' => 1
    ]);

    foreach ($prev_top_featured_post as $key => $destination) {
      update_post_meta($destination->ID, '_top_featured', 0);
    }
  }

  //  Update post metadata
  update_post_meta($post_id, '_destination_price', $destination_price);
  update_post_meta($post_id, '_destination_duration', $destination_duration);
  update_post_meta($post_id, '_destination_location', $destination_location);
  update_post_meta($post_id, '_destination_flight', $destination_flight);
  update_post_meta($post_id, '_destination_board_and_lodging', $destination_board_and_lodging);
  update_post_meta($post_id, '_destination_visa', $destination_visa);
  update_post_meta($post_id, '_featured', $featured);
  update_post_meta($post_id, '_video_promotion', $video_promotion);
  update_post_meta($post_id, '_key_highlights', $key_highlights);
  update_post_meta($post_id, '_itenerary', $itenerary);

  if (!empty($destination_gallery)) {
    update_post_meta($post_id, '_destination_gallery', $destination_gallery);
  }

  if ($featured == 0) {
    update_post_meta($post_id, '_top_featured', 0);
  } else {
    update_post_meta($post_id, '_top_featured', $top_featured);
  }

});