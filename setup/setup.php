<?php

function wpre_get_dir_contents($dir) {
  $directory_content = array_diff(scandir($dir), ['..', '.']);
  return array_values($directory_content);
}

/**
 * Create pages, register custom post types and register custom taxonomies
 */
add_action('init', function() {

  //  Create pages
  if (is_dir(THEME_DIR .'/setup/create_pages')) {

    $pages_directory_content = wpre_get_dir_contents(THEME_DIR .'/setup/create_pages');

    foreach ($pages_directory_content as $key => $page) {
      include_once THEME_DIR .'/setup/create_pages/'. $page;
    }
  }

  //  Register custom post types
  if (is_dir(THEME_DIR .'/setup/custom_post_types')) {

    $cpts_directory_content = wpre_get_dir_contents(THEME_DIR .'/setup/custom_post_types');

    foreach ($cpts_directory_content as $key => $cpt) {
      include_once THEME_DIR .'/setup/custom_post_types/'. $cpt;
    }
  }

  //  Register custom taxonomies
  if (is_dir(THEME_DIR .'/setup/custom_taxonomies')) {

    $cpts_directory_content = wpre_get_dir_contents(THEME_DIR .'/setup/custom_taxonomies');

    foreach ($cpts_directory_content as $key => $cpt) {
      include_once THEME_DIR .'/setup/custom_taxonomies/'. $cpt;
    }
  }
});


/**
 * Enqueue scripts and styles
 */
add_action('wp_enqueue_scripts', function() {

  if (!is_admin() and is_dir(THEME_DIR .'/setup/enqueue_scripts_styles/styles')) {

    $styles_directory_content = wpre_get_dir_contents(THEME_DIR .'/setup/enqueue_scripts_styles/styles');

    $first_key = array_search('thirdparty', $styles_directory_content);
    $second_key = array_search('default', $styles_directory_content);

    if ($first_key !== false) {
      unset($styles_directory_content[$first_key]);
    }
    
    if ($second_key !== false) {
        unset($styles_directory_content[$second_key]);
    }

    $styles_directory_content_rearranged = array_values($styles_directory_content);

    array_unshift($styles_directory_content_rearranged, 'default');
    array_unshift($styles_directory_content_rearranged, 'thirdparty'); 

    if (!empty($styles_directory_content_rearranged)) {
      foreach ($styles_directory_content_rearranged as $key => $directory) {
        include_once THEME_DIR .'/setup/enqueue_scripts_styles/styles/'. $directory .'/enqueue_style.php';
      }
    }
  }

  if (!is_admin() and is_dir(THEME_DIR .'/setup/enqueue_scripts_styles/scripts')) {

    $scripts_directory_content = wpre_get_dir_contents(THEME_DIR .'/setup/enqueue_scripts_styles/scripts');

    $first_key = array_search('thirdparty', $scripts_directory_content);
    $second_key = array_search('default', $scripts_directory_content);

    if ($first_key !== false) {
      unset($scripts_directory_content[$first_key]);
    }
    
    if ($second_key !== false) {
        unset($scripts_directory_content[$second_key]);
    }

    $scripts_directory_content_rearranged = array_values($scripts_directory_content);

    array_unshift($scripts_directory_content_rearranged, 'default');
    array_unshift($scripts_directory_content_rearranged, 'thirdparty'); 

    if (!empty($scripts_directory_content_rearranged)) {
      foreach ($scripts_directory_content_rearranged as $key => $directory) {
        include_once THEME_DIR .'/setup/enqueue_scripts_styles/scripts/'. $directory .'/enqueue_script.php';
      }
    }
  }
});

/**
 * Add theme support
 */
add_action('after_setup_theme', function() {

  if (is_dir(THEME_DIR .'/setup/add_theme_support')) {

    $directory_content = wpre_get_dir_contents(THEME_DIR .'/setup/add_theme_support');

    foreach ($directory_content as $key => $file) {
      include_once THEME_DIR .'/setup/add_theme_support/'. $file;
    }
  }
});


/**
 * Add meta boxes
 */
// add_action('add_meta_boxes', function() {

//   if (is_dir(THEME_DIR .'/setup/meta_boxes')) {

//     $metaboxes_directory_content = wpre_get_dir_contents(THEME_DIR .'/setup/meta_boxes');

//     foreach ($metaboxes_directory_content as $key => $metabox) {
//       include_once THEME_DIR .'/setup/meta_boxes/'. $metabox;
//     }
//   }
// });


/**
 * Add google fonts
 */
add_action('wp_head', function() {
  echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
  echo '<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Yeseva+One&display=swap" rel="stylesheet">';
});