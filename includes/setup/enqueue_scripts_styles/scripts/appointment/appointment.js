document.addEventListener('alpine:init', () => {
    
    Alpine.data('appointment_form', () => ({
        fields : {
            "meeting_date" : document.getElementById('meeting_date').value,
            "meeting_time" : document.getElementById('meeting_time').value,
            "interested_trips_ids" : document.getElementById('interested_trips_ids').value,
            "sender_firstname" : document.getElementById('sender_firstname').value,
            "sender_lastname" : document.getElementById('sender_lastname').value,
            "sender_email" : document.getElementById('sender_email').value,
            "sender_contact_number" : document.getElementById('sender_contact_number').value,
            "sender_message" : document.getElementById('sender_message').value,
            "agree_to_terms" : false
        },

        submit_form() {
            this.fields.interested_trips_ids = document.getElementById('interested_trips_ids').value


            if (this.fields.interested_trips_ids === '[]') {
                document.getElementById('select_interested_trip').classList.add('error')
                document.getElementById('select_interested_trip').scrollIntoView({ behavior: "smooth", block: "center" })
                this.$event.preventDefault()

            } else if (!this.fields.meeting_date) {
                document.getElementById('meeting_date').classList.add('error')
                document.getElementById('meeting_date').scrollIntoView({ behavior: "smooth", block: "center" })
                this.$event.preventDefault()

            } else if (!this.fields.meeting_time) {
                document.getElementById('meeting_time').classList.add('error')
                document.getElementById('meeting_time').scrollIntoView({ behavior: "smooth", block: "center" })
                this.$event.preventDefault()

            } else if (!this.fields.sender_firstname) {
                document.getElementById('sender_firstname').classList.add('error')
                document.getElementById('sender_firstname').scrollIntoView({ behavior: "smooth", block: "center" })
                this.$event.preventDefault()

            } else if (!this.fields.sender_email) {
                document.getElementById('sender_email').classList.add('error')
                document.getElementById('sender_email').scrollIntoView({ behavior: "smooth", block: "center" })
                this.$event.preventDefault()

            } else if (!this.fields.agree_to_terms) {
                document.getElementById('agree_to_terms').classList.add('error')
                document.getElementById('agree_to_terms').scrollIntoView({ behavior: "smooth", block: "center" })
                this.$event.preventDefault()
            }

            console.log(this.fields)
        },

        on_active_input() {
            if (this.$event.target.classList.contains('error')) {
                this.$event.target.classList.remove('error')
            }
        }
    }))

    Alpine.data('interested_trip', () => ({
        
        interested_trips_ids : [],

        add_selected_trip() {
            
            let select = document.getElementById('select_interested_trip')
            let add_trip = true

            let trip_value = select.value
            let trip_text = select.options[select.selectedIndex].text

            for (let i = 0; i < this.interested_trips_ids.length; i++) {
                if (this.interested_trips_ids[i].text === trip_text) {
                    add_trip = false
                    break
                }
            }

            if (add_trip) {
                this.interested_trips_ids.push({
                    "value" : JSON.parse(trip_value),
                    "text" : trip_text
                })
    
                document.getElementById('interested_trips_ids').value = JSON.stringify(this.interested_trips_ids)
            }
        },

        remove_interested_trip() {
            this.interested_trips_ids.splice(this.$el.dataset.trip_index, 1)
            document.getElementById('interested_trips_ids').value = JSON.stringify(this.interested_trips_ids)
        }
    }))

    Alpine.data('notification', () => ({

        show_notification : true,

        close_notification() {
            this.show_notification = false
            window.history.pushState({}, '', localized.site_url +'/appointment');
        }
    }))
})