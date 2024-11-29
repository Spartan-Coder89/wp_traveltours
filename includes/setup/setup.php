<?php

function wpre_get_dir_contents($dir) {
  $directory_content = array_diff(scandir($dir), ['..', '.']);
  return array_values($directory_content);
}

/**
 * Create pages, register custom post types and register custom taxonomies
 * ==========================================================================================================================================
 */
add_action('init', function() {

  //  Create pages
  if (is_dir(THEME_INCLUDES_DIR .'/setup/create_pages')) {

    $pages_directory_content = wpre_get_dir_contents(THEME_INCLUDES_DIR .'/setup/create_pages');

    foreach ($pages_directory_content as $key => $page) {
      include_once THEME_INCLUDES_DIR .'/setup/create_pages/'. $page;
    }
  }

  //  Register custom post types
  if (is_dir(THEME_INCLUDES_DIR .'/setup/custom_post_types')) {

    $cpts_directory_content = wpre_get_dir_contents(THEME_INCLUDES_DIR .'/setup/custom_post_types');

    foreach ($cpts_directory_content as $key => $cpt) {
      include_once THEME_INCLUDES_DIR .'/setup/custom_post_types/'. $cpt;
    }
  }

  //  Register custom taxonomies
  if (is_dir(THEME_INCLUDES_DIR .'/setup/custom_taxonomies')) {

    $cpts_directory_content = wpre_get_dir_contents(THEME_INCLUDES_DIR .'/setup/custom_taxonomies');

    foreach ($cpts_directory_content as $key => $cpt) {
      include_once THEME_INCLUDES_DIR .'/setup/custom_taxonomies/'. $cpt;
    }
  }
});


/**
 * Enqueue scripts and styles
 * ==========================================================================================================================================
 */
add_action('wp_enqueue_scripts', function() {

  if (!is_admin() and is_dir(THEME_INCLUDES_DIR .'/setup/enqueue_scripts_styles/styles')) {

    $styles_directory_content = wpre_get_dir_contents(THEME_INCLUDES_DIR .'/setup/enqueue_scripts_styles/styles');

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
        include_once THEME_INCLUDES_DIR .'/setup/enqueue_scripts_styles/styles/'. $directory .'/enqueue_style.php';
      }
    }
  }

  if (!is_admin() and is_dir(THEME_INCLUDES_DIR .'/setup/enqueue_scripts_styles/scripts')) {

    $scripts_directory_content = wpre_get_dir_contents(THEME_INCLUDES_DIR .'/setup/enqueue_scripts_styles/scripts');

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
        include_once THEME_INCLUDES_DIR .'/setup/enqueue_scripts_styles/scripts/'. $directory .'/enqueue_script.php';
      }
    }
  }
});


/**
 * Enqueue admin scripts and styles
 * ==========================================================================================================================================
 */
add_action('admin_enqueue_scripts', function() {
  
  global $current_screen;

  if (is_admin() and is_dir(THEME_INCLUDES_DIR .'/setup/enqueue_admin_scripts_styles/styles')) {

    $styles_directory_content = wpre_get_dir_contents(THEME_INCLUDES_DIR .'/setup/enqueue_admin_scripts_styles/styles');

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
        include_once THEME_INCLUDES_DIR .'/setup/enqueue_admin_scripts_styles/styles/'. $directory .'/enqueue_style.php';
      }
    }
  }

  if (is_admin() and is_dir(THEME_INCLUDES_DIR .'/setup/enqueue_admin_scripts_styles/scripts')) {

    $scripts_directory_content = wpre_get_dir_contents(THEME_INCLUDES_DIR .'/setup/enqueue_admin_scripts_styles/scripts');

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
        include_once THEME_INCLUDES_DIR .'/setup/enqueue_admin_scripts_styles/scripts/'. $directory .'/enqueue_script.php';
      }
    }

  }
});


/**
 * Enqueue scripts and styles on customizer screen
 * ==========================================================================================================================================
 */
add_action( 'customize_controls_enqueue_scripts', function() {

  wp_enqueue_media(); // Enqueue WordPress Media Uploader
  wp_enqueue_script( 'gallery_uploader', ENQUEUE_CUSTOMIZER_SCRIPTS_DIR_URI . '/gallery_uploader/gallery_uploader.js', array( 'jquery', 'customize-controls' ), '', true );

  // Localize the script with the setting ID so that we can access it via JS
  wp_localize_script( 'gallery_uploader', 'traveltours_aboutus_gallery_data', array(
    'settingId' => 'traveltours_aboutus_gallery_setting'
  ));
});


/**
 * Add theme support
 * ==========================================================================================================================================
 */
add_action('after_setup_theme', function() {

  if (is_dir(THEME_INCLUDES_DIR .'/setup/add_theme_support')) {

    $directory_content = wpre_get_dir_contents(THEME_INCLUDES_DIR .'/setup/add_theme_support');

    foreach ($directory_content as $key => $file) {
      include_once THEME_INCLUDES_DIR .'/setup/add_theme_support/'. $file;
    }
  }
});


/**
 * Add meta boxes
 * ==========================================================================================================================================
 */
add_action('add_meta_boxes', function() {

  if (is_dir(THEME_INCLUDES_DIR .'/setup/meta_boxes')) {

    $metaboxes_directory_content = wpre_get_dir_contents(THEME_INCLUDES_DIR .'/setup/meta_boxes');

    foreach ($metaboxes_directory_content as $key => $metabox) {
      include_once THEME_INCLUDES_DIR .'/setup/meta_boxes/'. $metabox;
    }
  }
});


/**
 * Add google fonts
 * ==========================================================================================================================================
 */
add_action('wp_head', function() {
  echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
  echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
  echo '<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Yeseva+One&display=swap" rel="stylesheet">';
});


/**
 * Use classic editor
 * ==========================================================================================================================================
 */
add_filter('use_block_editor_for_post_type', function($current_status, $post_type) {
  if ($post_type === 'post') return false;
  return $current_status;
}, 10, 2);


/**
 *  Appointments admin page
 *  ==========================================================================================================================================
 */
add_action('admin_menu', function() {
  add_menu_page(
    'Appointments',
    'Appointments',
    'manage_options',
    'appointments',
    function() { ?>
      
      <form action="<?php echo admin_url('admin-post.php') .'?action=appointment_settings'; ?>" method="POST">
        <div id="meeting_time_settings">
          <h3>Meeting Time Settings</h3>
          <table class="form-table" x-data="appointments">
              <tr>
                  <th><label>Meeting Time Availability</label></th>
                  <td>
                      <div id="add_time">
                        <div>
                          <input type="time" id="start_time">
                          <span>-</span>
                          <input type="time" id="end_time">
                        </div>
                        <button type="button" x-on:click="add_time()">Add time</button>
                      </div>
                      <div id="time_availability_list">
                        <h4>Available Time</h4>
                        <ul>
                          <template x-for="(available_time, index) in available_times" :key="index">
                            <li>
                              <span x-text="available_time"></span>
                              <span class="dashicons dashicons-remove remove_time" 
                                x-bind:data-index="index"
                                x-on:click="remove_time($event.target.dataset.index)"></span>
                            </li>
                          </template>
                        </ul>
                      </div>
                      <input type="hidden" name="available_meeting_time" id="available_meeting_time" value="<?php echo get_user_meta(get_current_user_id(), '_available_meeting_time', true); ?>">
                  </td>
              </tr>
          </table>
        </div>
        <div id="meetings">
          <h3>Appointments</h3>
            <table class="form-table" x-data="appointments">
                <tr>
                    <th><label>Appointments Set</label></th>
                    <td>
                      <ul id="appointment_details">
                        <li>
                            <div class="appointment_info">
                              <label>Meeting date:</label>
                              <p>asdasdasdasd</p>
                            </div>
                            <div class="appointment_info">
                              <label>Meeting time:</label>
                              <p>asdasdasdasd</p>
                            </div>
                            <div class="appointment_info">
                              <label>Client name:</label>
                              <p>asdasdasdasd</p>
                            </div>
                            <div class="appointment_info">
                              <label>Email address:</label>
                              <p>asdasdasdasd</p>
                            </div>
                            <div class="appointment_info">
                              <label>Contact number:</label>
                              <p>asdasdasdasd</p>
                            </div>
                        </li>
                        <li>
                            <div class="appointment_info">
                              <label>Meeting date:</label>
                              <p>asdasdasdasd</p>
                            </div>
                            <div class="appointment_info">
                              <label>Meeting time:</label>
                              <p>asdasdasdasd</p>
                            </div>
                            <div class="appointment_info">
                              <label>Client name:</label>
                              <p>asdasdasdasd</p>
                            </div>
                            <div class="appointment_info">
                              <label>Email address:</label>
                              <p>asdasdasdasd</p>
                            </div>
                            <div class="appointment_info">
                              <label>Contact number:</label>
                              <p>asdasdasdasd</p>
                            </div>
                        </li>
                        <li>
                            <div class="appointment_info">
                              <label>Meeting date:</label>
                              <p>asdasdasdasd</p>
                            </div>
                            <div class="appointment_info">
                              <label>Meeting time:</label>
                              <p>asdasdasdasd</p>
                            </div>
                            <div class="appointment_info">
                              <label>Client name:</label>
                              <p>asdasdasdasd</p>
                            </div>
                            <div class="appointment_info">
                              <label>Email address:</label>
                              <p>asdasdasdasd</p>
                            </div>
                            <div class="appointment_info">
                              <label>Contact number:</label>
                              <p>asdasdasdasd</p>
                            </div>
                        </li>
                      </ul>
                    </td>
                </tr>
            </table>
        </div>
        <input type="hidden" name="appointment_settings_nonce" value="<?php echo wp_create_nonce('appointment_settings_nonce'); ?>">
        <input type="submit" name="submit" id="submit" class="button button-primary" value="Update Appointment Settings">
      </form>

      <?php
    },
    'dashicons-admin-generic',
    25
);
});