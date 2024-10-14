<?php

/**
 * Footer section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('traveltours_footer_section', array(
    'title' => 'Footer'
));

//	Footer Logo
$wp_customize->add_setting('traveltours_footer_logo_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'traveltours_footer_logo_control', [
	'label' => 'Footer Logo',
	'section' => 'traveltours_footer_section',
	'settings' => 'traveltours_footer_logo_setting',
	'flex_width' => true,
	'flex_height' => true
]));

//	Footer Description Text
$wp_customize->add_setting('traveltours_footer_description_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_header_cta_control', [
	'label' => 'Footer Description',
	'section' => 'traveltours_footer_section',
	'settings' => 'traveltours_footer_description_setting',
	'type' => 'textarea',
    'input_attrs' => ['style' => 'height:200px']
]));

//	Footer Copyright Text
$wp_customize->add_setting('traveltours_footer_copyright_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_footer_copyright_control', [
	'label' => 'Footer Copyright',
	'section' => 'traveltours_footer_section',
	'settings' => 'traveltours_footer_copyright_setting',
	'type' => 'text'
]));

//	Footer Contact Number Text
$wp_customize->add_setting('traveltours_footer_number_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_footer_number_control', [
	'label' => 'Footer Contact Number',
	'section' => 'traveltours_footer_section',
	'settings' => 'traveltours_footer_number_setting',
	'type' => 'text'
]));

//	Footer Email Text
$wp_customize->add_setting('traveltours_footer_email_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_footer_email_control', [
	'label' => 'Footer Email',
	'section' => 'traveltours_footer_section',
	'settings' => 'traveltours_footer_email_setting',
	'type' => 'text'
]));