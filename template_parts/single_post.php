<?php 
    if ( !defined( 'ABSPATH' ) ) {
        die;
    }
?>

<main>
    <?php get_template_part( 'template_parts/inner_page_banner' ); ?>
    <div id="content">
        <div class="wrap">
            <figure class="featured_img">
                <img src="<?php echo get_the_post_thumbnail( $post->ID); ?>" alt="">
            </figure>
            <?php echo get_the_content($post->ID); ?>
        </div>
    </div>
</main>