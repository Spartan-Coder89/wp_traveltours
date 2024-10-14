<?php

$wp_customize->add_section('traveltours_social_section', array(
    'title' => 'Social Links'
));

/**
 * Facebook
 * ==============================================================================================================================
 */
$wp_customize->add_setting( 'traveltours_facebook_link_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'traveltours_facebook_link_control', array(
  'label' => 'Facebook Link',
  'section' => 'traveltours_social_section',
  'settings' => 'traveltours_facebook_link_setting',
  'type' => 'text'
)));


/**
 * Twitter 
 * ==============================================================================================================================
 */
$wp_customize->add_setting( 'traveltours_twitter_link_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'traveltours_twitter_link_control', array(
  'label' => 'Twitter Link',
  'section' => 'traveltours_social_section',
  'settings' => 'traveltours_twitter_link_setting',
  'type' => 'text'
)));


/**
 * Youtube 
 * ==============================================================================================================================
 */
$wp_customize->add_setting( 'traveltours_youtube_link_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'traveltours_youtube_link_control', array(
  'label' => 'Youtube Link',
  'section' => 'traveltours_social_section',
  'settings' => 'traveltours_youtube_link_setting',
  'type' => 'text'
)));


/**
 * Instagram 
 * ==============================================================================================================================
 */
$wp_customize->add_setting( 'traveltours_instagram_link_setting');
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'traveltours_instagram_link_control', array(
  'label' => 'Instagram Link',
  'section' => 'traveltours_social_section',
  'settings' => 'traveltours_instagram_link_setting',
  'type' => 'text'
)));