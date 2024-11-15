document.addEventListener('alpine:init', () => {

    Alpine.data('blog', () => ({
        blog_posts : [],
        max_pages : 0,
        current_page : 1,

        async update_blog_posts(page) {

            let response = await fetch(rest_api.base +'/blog-posts/v1/archive?page='+ page)
            let data = await response.json()

            this.blog_posts = JSON.parse(data)
            this.max_pages = this.blog_posts.max_pages
            this.current_page = page

            if (document.getElementById('selection_pages')) {
                document.getElementById('selection_pages').value = page
            }
        }
    }))
})