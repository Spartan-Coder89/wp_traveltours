<?php

//	Header Logo
$wp_customize->add_setting('traveltours_header_logo_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'traveltours_header_logo_control', [
	'label' => 'Header Logo',
	'section' => 'title_tagline',
	'settings' => 'traveltours_header_logo_setting',
	'flex_width' => true,
	'flex_height' => true
]));

//	Header CTA Text
$wp_customize->add_setting('traveltours_header_cta_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_header_cta_control', [
	'label' => 'Header CTA',
	'section' => 'title_tagline',
	'settings' => 'traveltours_header_cta_setting',
	'type' => 'text'
]));