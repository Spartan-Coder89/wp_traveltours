<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

// echo '<pre>';
// var_dump($current_screen);
// echo '</pre>';

if ($current_screen->base == 'toplevel_page_appointments' and $current_screen->id == 'toplevel_page_appointments') {
  wp_enqueue_script('appointments_js', ADMIN_ENQUEUE_SCRIPTS_DIR_URI .'/appointments/appointments.js', array(), '', true);
}