document.addEventListener('alpine:init', () => {

    Alpine.data('destinations', () => ({
        open_filters: true,
        destinations_filters: {
            "destination_price" : 0,
            "destination_duration" : 0,
            "destinations" : [],
            "activities" : [],
            "trip_types" : [],
            "destinations_tags" : [],
        },
        destination_posts : [],
        current_page : 1,
        max_pages : 0,

        on_window_resize() {
            this.open_filters = window.innerWidth > 1468 ? true : false
        },

        toggle_filters() {
            this.open_filters = ! this.open_filters
        },

        update_filters(filter, value) {

            if (filter === 'destination_price' || filter === 'destination_duration') {
                this.destinations_filters[filter] = value
            } else {

                if (this.$event.target.checked) {
                    this.destinations_filters[filter].push(value)
                } else {
                    let index_to_remove = this.destinations_filters[filter].indexOf(value)
                    this.destinations_filters[filter].splice(index_to_remove, 1)
                }
            }
        },

        async update_destinations(page) {

            let url = rest_api.base +'/destinations/v1/archive/' +'?page='+ page +'&filters='+ JSON.stringify(this.destinations_filters);

            let response = await fetch(url);
            let data = await response.json();
            this.destination_posts = JSON.parse(data)

            this.max_pages = this.destination_posts.max_pages
            this.current_page = page

            if (document.getElementById('selection_pages')) {
                document.getElementById('selection_pages').value = page
            }
        },

        async reset_filters() {

            document.querySelectorAll('.range input[type="range"]').forEach(checkbox => {
                checkbox.value = 0
            })

            document.querySelectorAll('.checkboxes input[type="checkbox"]').forEach(checkbox => {
                checkbox.checked = false
            })

            this.destinations_filters = {
                "destination_price" : 0,
                "destination_duration" : 0,
                "destinations" : [],
                "activities" : [],
                "trip_types" : [],
                "destinations_tags" : [],
            }

            let url = rest_api.base +'/destinations/v1/archive/' +'?page=1&filters='+ JSON.stringify(this.destinations_filters);

            let response = await fetch(url);
            let data = await response.json();
            this.destination_posts = JSON.parse(data)

            this.max_pages = this.destination_posts.max_pages
            this.current_page = 1

            if (document.getElementById('selection_pages')) {
                document.getElementById('selection_pages').value = 1
            }
        }
    }))
})