document.addEventListener('alpine:init', () => {

    Alpine.data('destinations_sidebar', () => ({
        open_filters: true,

        toggle_filters() {
            this.open_filters = ! this.open_filters
        },

        on_window_resize() {
            this.open_filters = window.innerWidth > 1468 ? true : false
        }
    }))
})