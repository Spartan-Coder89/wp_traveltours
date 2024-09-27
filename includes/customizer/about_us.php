<?php

$wp_customize->add_panel('traveltours_aboutus_panel', array(
	'title' => 'About Us Page'
));

/**
 * Gallery Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('traveltours_aboutus_gallery_section', array(
  'title' => 'Gallery Section',
  'panel' => 'traveltours_aboutus_panel'
));

$wp_customize->add_setting( 'traveltours_aboutus_gallery_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'traveltours_aboutus_gallery_control', array(
  'label' => 'Gallery Images',
  'section' => 'traveltours_aboutus_gallery_section',
  'settings' => 'traveltours_aboutus_gallery_setting',
  'type' => 'hidden',
	'input_attrs' => array('id' => 'aboutus_gallery_control'),
	'description' => __('
		<button id="add_gallery_images" type="button" style="max-width: 100px; width: 100%; padding: 4px 16px;">Add</button>
		<ul id="gallery_images_list" style="padding-top: 10px;"></ul>')
)));


/**
 * Description, Mission and Vision Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('traveltours_aboutus_dmv_section', array(
  'title' => 'Company Description, Mission and Vision Section',
  'panel' => 'traveltours_aboutus_panel'
));

$wp_customize->add_setting( 'traveltours_aboutus_description_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'traveltours_aboutus_description_control', array(
  'label' => 'Company Description',
  'section' => 'traveltours_aboutus_dmv_section',
  'settings' => 'traveltours_aboutus_description_setting',
  'type' => 'textarea',
	'input_attrs' => array('style' => 'height:200px')
)));

$wp_customize->add_setting( 'traveltours_aboutus_mission_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'traveltours_aboutus_mission_control', array(
  'label' => 'Company Mission',
  'section' => 'traveltours_aboutus_dmv_section',
  'settings' => 'traveltours_aboutus_mission_setting',
  'type' => 'textarea',
	'input_attrs' => array('style' => 'height:200px')
)));

$wp_customize->add_setting( 'traveltours_aboutus_vision_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'traveltours_aboutus_vision_control', array(
  'label' => 'Company Vision',
  'section' => 'traveltours_aboutus_dmv_section',
  'settings' => 'traveltours_aboutus_vision_setting',
  'type' => 'textarea',
	'input_attrs' => array('style' => 'height:200px')
)));


/**
 * Contact Information Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('traveltours_aboutus_contact_section', array(
  'title' => 'Contact Information Section',
  'panel' => 'traveltours_aboutus_panel'
));

$wp_customize->add_setting( 'traveltours_aboutus_email_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'traveltours_aboutus_email_control', array(
  'label' => 'Email Address',
  'section' => 'traveltours_aboutus_contact_section',
  'settings' => 'traveltours_aboutus_email_setting',
  'type' => 'text'
)));

$wp_customize->add_setting( 'traveltours_aboutus_number_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'traveltours_aboutus_number_control', array(
  'label' => 'Contact Number',
  'section' => 'traveltours_aboutus_contact_section',
  'settings' => 'traveltours_aboutus_number_setting',
  'type' => 'text'
)));

$wp_customize->add_setting( 'traveltours_aboutus_address_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'traveltours_aboutus_address_control', array(
  'label' => 'Office Address',
  'section' => 'traveltours_aboutus_contact_section',
  'settings' => 'traveltours_aboutus_address_setting',
  'type' => 'text'
)));