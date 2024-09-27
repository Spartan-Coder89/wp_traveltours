<?php

/**
 * Form section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('traveltours_appointment_form_section', array(
  'title' => 'Appointment Page'
));

$wp_customize->add_setting( 'traveltours_appointment_form_title_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'traveltours_appointment_form_title_control', array(
  'label' => 'Title',
  'section' => 'traveltours_appointment_form_section',
  'settings' => 'traveltours_appointment_form_title_setting',
  'type' => 'text'
)));

$wp_customize->add_setting( 'traveltours_appointment_form_subtitle_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'traveltours_appointment_form_subtitle_control', array(
  'label' => 'Sub-Title',
  'section' => 'traveltours_appointment_form_section',
  'settings' => 'traveltours_appointment_form_subtitle_setting',
  'type' => 'text'
)));