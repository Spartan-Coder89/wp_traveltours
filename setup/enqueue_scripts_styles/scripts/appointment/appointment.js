document.addEventListener('alpine:init', () => {

    Alpine.data('interested_trip', () => ({
        
        interested_trips_ids : [],

        add_selected_trip() {
            
            let select = document.getElementById('select_interested_trip')
            let interested_trips_ids_element_value = JSON.parse(document.getElementById('interested_trips_ids').value)
            let add_trip = true

            let trip_value = select.options[select.selectedIndex].value
            let trip_text = select.options[select.selectedIndex].text

            for (let i = 0; i < interested_trips_ids_element_value.length; i++) {
                if (interested_trips_ids_element_value[i].value === trip_value) {
                    add_trip = false
                    break
                }
            }

            if (add_trip) {
                this.interested_trips_ids.push({
                    "value" : trip_value,
                    "text" : trip_text
                })
    
                document.getElementById('interested_trips_ids').value = JSON.stringify(this.interested_trips_ids)
            }
        },

        remove_interested_trip() {
            this.interested_trips_ids.splice(this.$el.dataset.trip_index, 1)
        }
    }))
})