<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_page('appointment')) {
  wp_enqueue_style( 'appointment_style', THEME_URI .'/setup/enqueue_scripts_styles/styles/appointment/appointment.css');
}
