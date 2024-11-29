<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if ($current_screen->base == 'toplevel_page_appointments' and $current_screen->id == 'toplevel_page_appointments') {
  wp_enqueue_style('appointments_style', ADMIN_ENQUEUE_STYLES_DIR_URI .'/appointments/appointments.css');
}