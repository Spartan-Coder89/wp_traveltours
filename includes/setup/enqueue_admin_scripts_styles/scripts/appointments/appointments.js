document.addEventListener('alpine:init', () => {

    Alpine.data('appointments', () => ({
        
        available_times : [],

        init() {
            if (document.getElementById('available_meeting_time').value) {
                this.available_times = JSON.parse(document.getElementById('available_meeting_time').value)
            }
        },

        add_time() {

            let start_time = document.getElementById('start_time').value
            let end_time = document.getElementById('end_time').value

            if (start_time && end_time) {
                let time = start_time +' - '+ end_time

                if (!this.available_times.includes(time)) {
                    this.available_times.push(time)
                    document.getElementById('available_meeting_time').value = JSON.stringify(this.available_times)
                }

                document.getElementById('start_time').value = ''
                document.getElementById('end_time').value = ''
            }
        },

        remove_time(index_to_remove) {
            this.available_times.splice(index_to_remove, 1)
            document.getElementById('available_meeting_time').value = JSON.stringify(this.available_times)
        }
    }))
})