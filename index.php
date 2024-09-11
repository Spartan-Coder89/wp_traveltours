<?php 

if ( !defined( 'ABSPATH' ) ) {
	die;
}

global $post;

if ( is_404() ) {
    get_header('404'); 
} else {
    get_header();
}

if ( is_page('home') ) {
    get_template_part( 'template_parts/home' );

} else if ( is_page('about-us') ) {
    get_template_part( 'template_parts/about_us' );

} else if ( is_page('appointment') ) {
    get_template_part( 'template_parts/appointment' );

} else if ( is_page('blog') ) {
    get_template_part( 'template_parts/blog' );

} else if ( is_page('contact-us') ) {
    get_template_part( 'template_parts/contact_us' );

} else if ( is_page('explore-destinations') ) {
    get_template_part( 'template_parts/explore_destinations' );

} else if ( is_singular('destinations') ) {
    get_template_part( 'template_parts/single_destinations' );

} else if ( is_singular('post') ) {
    get_template_part( 'template_parts/single_post' );

} else {
    get_template_part( 'template_parts/404' );
}

if ( !is_404() ) {
    get_footer();
}