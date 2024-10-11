<?php

function list_top_featured_highlights() {

  $return_value = '';
  $counter = 1;

  $posts = get_posts([
    'posts_per_page' => -1,
    'post_type' => 'destinations',
    'meta_key' => '_top_featured',
    'meta_value' => 1
  ]);

  $key_highlights = get_post_meta($posts[0]->ID, '_key_highlights', true);

  $list = json_decode(html_entity_decode($key_highlights));

  foreach ($list as $key => $item) {

    if ($counter <= 3) {
      $return_value .= '<li class="feature">
          <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M17.955 4.50788C18.1893 4.74229 18.321 5.06017 18.321 5.39163C18.321 5.72308 18.1893 6.04097 17.955 6.27538L8.58583 15.6445C8.46202 15.7684 8.31502 15.8666 8.15323 15.9337C7.99145 16.0007 7.81804 16.0352 7.64292 16.0352C7.4678 16.0352 7.29439 16.0007 7.1326 15.9337C6.97082 15.8666 6.82382 15.7684 6.7 15.6445L2.045 10.9904C1.92561 10.8751 1.83039 10.7371 1.76487 10.5846C1.69936 10.4321 1.66488 10.2681 1.66344 10.1021C1.662 9.93616 1.69362 9.77156 1.75647 9.61794C1.81933 9.46432 1.91214 9.32475 2.02951 9.20739C2.14687 9.09002 2.28644 8.9972 2.44006 8.93435C2.59368 8.8715 2.75828 8.83987 2.92425 8.84132C3.09023 8.84276 3.25425 8.87724 3.40676 8.94275C3.55926 9.00826 3.69719 9.10349 3.8125 9.22288L7.6425 13.0529L16.1867 4.50788C16.3028 4.39172 16.4406 4.29958 16.5923 4.23671C16.744 4.17384 16.9066 4.14148 17.0708 4.14148C17.2351 4.14148 17.3977 4.17384 17.5494 4.23671C17.7011 4.29958 17.8389 4.39172 17.955 4.50788Z" fill="#2EC4B6"/>
          </svg>
          <div>
              <p class="title">'. $item->title .'</p>
              <p class="description">'. $item->highlight_excerpt .'</p>
          </div>
      </li>';
    }

    $counter++;
  }

  return $return_value;
}


function explore_destinations_list() {

  $return_value = '';

  $posts = get_posts([
    'posts_per_page' => -1,
    'post_type' => 'destinations'
  ]);

  foreach ($posts as $key => $post) {

    $basic_info = get_post_meta($post->ID, '_basic_info', true);
    $location = isset($basic_info['location']) ? $basic_info['location'] : '';
    $post_thumbnail_url = get_the_post_thumbnail_url($post->ID, 'large');
    $permalink = get_the_permalink($post->ID);

    $return_value .= '<div class="item">
        <div class="img" style="background-image: url('. $post_thumbnail_url .')">
            <a href="'. $permalink .'" class="button">
                <span>Know more</span>
            </a>
        </div>
        <div class="details">
            <h2 class="destination_name">'. get_the_title($post->ID) .'</h2>
            <p class="country">'. $location .'</p>
        </div>
    </div>';
  }

  return $return_value;
}


function testimonials_list() {

  $return_value = '';

  $posts = get_posts([
    'posts_per_page' => -1,
    'post_type' => 'testimonials'
  ]);

  foreach ($posts as $key => $post) {

    $testimonial_position = get_post_meta($post->ID, '_testimonial_position', true);

    $return_value .= '<div class="item">
        <div class="img" style="background-image: url('. get_the_post_thumbnail_url($post->ID, 'large') .');"></div>
        <div class="content">
            <p class="testimonial_content">'. get_the_content(null, false, $post->ID) .'</p>
            <p class="name">'. get_the_title($post->ID) .'</p>
            <p class="position">'. $testimonial_position .'</p>
        </div>
    </div>';
  }

  return $return_value;
}