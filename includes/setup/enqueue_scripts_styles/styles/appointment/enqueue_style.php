<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_page('appointment')) {
  wp_enqueue_style( 'appointment_style', ENQUEUE_STYLES_DIR_URI .'/appointment/appointment.css');
}
