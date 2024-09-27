<?php

add_action('customize_register', function($wp_customize) {
  include_once 'header.php';
  include_once 'home.php';
  include_once 'about_us.php';
  include_once 'contact_us.php';
  include_once 'appointment.php';
});