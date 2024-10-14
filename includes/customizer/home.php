<?php

$wp_customize->add_panel('traveltours_homepage_panel', array(
    'title' => 'Homepage'
));

/**
 * Banner Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('traveltours_hero_section', array(
	'title' => 'Hero Section',
	'panel' => 'traveltours_homepage_panel'
));

//	Background
$wp_customize->add_setting('traveltours_hero_bg_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'traveltours_hero_bg_control', [
	'label' => 'Background',
	'section' => 'traveltours_hero_section',
	'settings' => 'traveltours_hero_bg_setting',
	'flex_width' => true,
	'flex_height' => true
]));

//	Headline
$wp_customize->add_setting('traveltours_hero_headline_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_hero_headline_control', [
	'label' => 'Headline',
	'section' => 'traveltours_hero_section',
	'settings' => 'traveltours_hero_headline_setting',
	'type' => 'textarea'
]));

//	Subheadline
$wp_customize->add_setting('traveltours_hero_subheadline_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_hero_subheadline_control', [
	'label' => 'Sub-headline',
	'section' => 'traveltours_hero_section',
	'settings' => 'traveltours_hero_subheadline_setting',
	'type' => 'textarea'
]));

//	CTA Button
$wp_customize->add_setting('traveltours_hero_cta_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_hero_cta_control', [
	'label' => 'Call to action',
	'section' => 'traveltours_hero_section',
	'settings' => 'traveltours_hero_cta_setting',
	'type' => 'text'
]));


/**
 * About Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('traveltours_about_section', array(
	'title' => 'About Section',
	'panel' => 'traveltours_homepage_panel'
));

//	Section title
$wp_customize->add_setting('traveltours_about_section_title_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_about_section_title_control', [
	'label' => 'Section Title',
	'section' => 'traveltours_about_section',
	'settings' => 'traveltours_about_section_title_setting',
	'type' => 'text'
]));

//	Section subtitle
$wp_customize->add_setting('traveltours_about_section_subtitle_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_about_section_subtitle_control', [
	'label' => 'Section Sub-title',
	'section' => 'traveltours_about_section',
	'settings' => 'traveltours_about_section_subtitle_setting',
	'type' => 'text'
]));

//	Section description
$wp_customize->add_setting('traveltours_about_section_description_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_about_section_description_control', [
	'label' => 'Section Description',
	'section' => 'traveltours_about_section',
	'settings' => 'traveltours_about_section_description_setting',
	'type' => 'textarea'
]));

//	Section subtitle
$wp_customize->add_setting('traveltours_about_section_cta_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_about_section_cta_control', [
	'label' => 'Section Sub-title',
	'section' => 'traveltours_about_section',
	'settings' => 'traveltours_about_section_cta_setting',
	'type' => 'text'
]));

//	Section subtitle
$wp_customize->add_setting('traveltours_about_section_img_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'traveltours_about_section_img_control', [
	'label' => 'Section Image',
	'section' => 'traveltours_about_section',
	'settings' => 'traveltours_about_section_img_setting',
	'flex_width' => true,
	'flex_height' => true
]));


/**
 * Pointers Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('traveltours_pointers_section', array(
	'title' => 'Pointers Section',
	'panel' => 'traveltours_homepage_panel'
));

//	Pointer 1 Icon
$wp_customize->add_setting('traveltours_pointers_section_img_1_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'traveltours_pointers_section_img_1_control', [
	'label' => 'Item 1 Icon',
	'section' => 'traveltours_pointers_section',
	'settings' => 'traveltours_pointers_section_img_1_setting',
	'flex_width' => true,
	'flex_height' => true
]));

//	Pointer 1 Title
$wp_customize->add_setting('traveltours_pointers_section_title_1_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_pointers_section_title_1_control', [
	'label' => 'Item 1 Title',
	'section' => 'traveltours_pointers_section',
	'settings' => 'traveltours_pointers_section_title_1_setting',
	'type' => 'text'
]));

//	Pointer 1 Description
$wp_customize->add_setting('traveltours_pointers_section_description_1_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_pointers_section_description_1_control', [
	'label' => 'Item 1 Description',
	'section' => 'traveltours_pointers_section',
	'settings' => 'traveltours_pointers_section_description_1_setting',
	'type' => 'textarea'
]));

//	Pointer 2 Icon
$wp_customize->add_setting('traveltours_pointers_section_img_2_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'traveltours_pointers_section_img_2_control', [
	'label' => 'Item 2 Icon',
	'section' => 'traveltours_pointers_section',
	'settings' => 'traveltours_pointers_section_img_2_setting',
	'flex_width' => true,
	'flex_height' => true
]));

//	Pointer 2 Title
$wp_customize->add_setting('traveltours_pointers_section_title_2_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_pointers_section_title_2_control', [
	'label' => 'Item 2 Title',
	'section' => 'traveltours_pointers_section',
	'settings' => 'traveltours_pointers_section_title_2_setting',
	'type' => 'text'
]));

//	Pointer 2 Description
$wp_customize->add_setting('traveltours_pointers_section_description_2_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_pointers_section_description_2_control', [
	'label' => 'Item 2 Description',
	'section' => 'traveltours_pointers_section',
	'settings' => 'traveltours_pointers_section_description_2_setting',
	'type' => 'textarea'
]));

//	Pointer 3 Icon
$wp_customize->add_setting('traveltours_pointers_section_img_3_setting');
$wp_customize->add_control(new WP_Customize_Cropped_Image_Control( $wp_customize, 'traveltours_pointers_section_img_3_control', [
	'label' => 'Item 3 Icon',
	'section' => 'traveltours_pointers_section',
	'settings' => 'traveltours_pointers_section_img_3_setting',
	'flex_width' => true,
	'flex_height' => true
]));

//	Pointer 3 Title
$wp_customize->add_setting('traveltours_pointers_section_title_3_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_pointers_section_title_3_control', [
	'label' => 'Item 3 Title',
	'section' => 'traveltours_pointers_section',
	'settings' => 'traveltours_pointers_section_title_3_setting',
	'type' => 'text'
]));

//	Pointer 3 Description
$wp_customize->add_setting('traveltours_pointers_section_description_3_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_pointers_section_description_3_control', [
	'label' => 'Item 3 Description',
	'section' => 'traveltours_pointers_section',
	'settings' => 'traveltours_pointers_section_description_3_setting',
	'type' => 'textarea'
]));


/**
 * Explore Destinations Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('traveltours_explore_section', array(
	'title' => 'Explore Section',
	'panel' => 'traveltours_homepage_panel'
));

//	Explore Section Title
$wp_customize->add_setting('traveltours_explore_section_title_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_explore_section_title_control', [
	'label' => 'Section Title',
	'section' => 'traveltours_explore_section',
	'settings' => 'traveltours_explore_section_title_setting',
	'type' => 'text'
]));

//	Explore Section Sub-Title
$wp_customize->add_setting('traveltours_explore_section_subtitle_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_explore_section_subtitle_control', [
	'label' => 'Section Sub-Title',
	'section' => 'traveltours_explore_section',
	'settings' => 'traveltours_explore_section_subtitle_setting',
	'type' => 'text'
]));


/**
 * Testimonial Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('traveltours_testimonial_section', array(
	'title' => 'Testimonial Section',
	'panel' => 'traveltours_homepage_panel'
));

//	Testimonial Section Title
$wp_customize->add_setting('traveltours_testimonial_section_title_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_testimonial_section_title_control', [
	'label' => 'Section Title',
	'section' => 'traveltours_testimonial_section',
	'settings' => 'traveltours_testimonial_section_title_setting',
	'type' => 'text'
]));

//	Testimonial Section Sub-Title
$wp_customize->add_setting('traveltours_testimonial_section_subtitle_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_testimonial_section_subtitle_control', [
	'label' => 'Section Sub-Title',
	'section' => 'traveltours_testimonial_section',
	'settings' => 'traveltours_testimonial_section_subtitle_setting',
	'type' => 'text'
]));


/**
 * Contact Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('traveltours_contact_section', array(
	'title' => 'Contact Section',
	'panel' => 'traveltours_homepage_panel'
));

//	Contact Section Title
$wp_customize->add_setting('traveltours_contact_section_title_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_contact_section_title_control', [
	'label' => 'Section Title',
	'section' => 'traveltours_contact_section',
	'settings' => 'traveltours_testimonial_section_title_setting',
	'type' => 'text'
]));

//	Contact Section Sub-Title
$wp_customize->add_setting('traveltours_contact_section_subtitle_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_contact_section_subtitle_control', [
	'label' => 'Section Sub-Title',
	'section' => 'traveltours_contact_section',
	'settings' => 'traveltours_contact_section_title_setting',
	'type' => 'text'
]));

//	Contact Section Note
$wp_customize->add_setting('traveltours_contact_section_note_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_contact_section_note_control', [
	'label' => 'Section Note',
	'section' => 'traveltours_contact_section',
	'settings' => 'traveltours_contact_section_note_setting',
	'type' => 'text'
]));


/**
 * Blog Section
 * ==========================================================================================================================================
 */
$wp_customize->add_section('traveltours_blog_section', array(
	'title' => 'Blog Section',
	'panel' => 'traveltours_homepage_panel'
));

//	Blog Section Title
$wp_customize->add_setting('traveltours_blog_section_title_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_blog_section_title_control', [
	'label' => 'Section Title',
	'section' => 'traveltours_blog_section',
	'settings' => 'traveltours_blog_section_title_setting',
	'type' => 'text'
]));

//	Blog Section Sub-Title
$wp_customize->add_setting('traveltours_blog_section_subtitle_setting');
$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'traveltours_blog_section_subtitle_control', [
	'label' => 'Section Sub-Title',
	'section' => 'traveltours_blog_section',
	'settings' => 'traveltours_blog_section_subtitle_setting',
	'type' => 'text'
]));