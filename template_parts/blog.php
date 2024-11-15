<?php 
    if ( !defined( 'ABSPATH' ) ) {
        die;
    }
?>

<main>
    <?php get_template_part( 'template_parts/inner_page_banner' ); ?>
    <div id="content">
        <div class="wrap" x-data="blog" x-init="update_blog_posts(1)">
            <div id="blog_posts">

                <template x-for="(blog_post, index) in blog_posts.posts" :key="index">
                    <div class="post">
                        <div class="img" x-bind:style="blog_post.post_thumbnail !== false ? 'background-image: url('+ blog_post.post_thumbnail +')' : ''"></div>
                        <div class="details">
                            <p class="date" x-text="blog_post.post_date"></p>
                            <p class="title" x-text="blog_post.post_title"></p>
                            <p class="excerpt" x-text="blog_post.post_excerpt"></p>
                            <a class="read_more" x-bind:href="blog_post.post_link">Read more</a>
                        </div>
                    </div>
                </template>

            </div>
            <?php get_template_part( 'template_parts/pagination_blog' ); ?>
        </div>
    </div>
</main>