document.addEventListener('alpine:init', () => {

    Alpine.data('contact_us_form', () => ({
        fields : {
            "firstname" : '',
            "lastname" : '',
            "email_address" : '',
            "contact_number" : '',
            "message" : ''
        },

        on_submit_form() {
            
            if (this.fields.firstname === '') {
                document.getElementById('firstname').classList.add('error')
                document.getElementById('firstname').scrollIntoView({ behavior: "smooth", block: "center" })
                this.$event.preventDefault()
            
            } else if (this.fields.email_address === '') {
                document.getElementById('email_address').classList.add('error')
                document.getElementById('email_address').scrollIntoView({ behavior: "smooth", block: "center" })
                this.$event.preventDefault()

            } else if (this.fields.message === '') {
                document.getElementById('message').classList.add('error')
                document.getElementById('message').scrollIntoView({ behavior: "smooth", block: "center" })
                this.$event.preventDefault()
            }
        },
        
        on_active_input() {
            if (this.$event.target.classList.contains('error')) {
                this.$event.target.classList.remove('error')
            }
        }
    }))

    Alpine.data('notification', () => ({

        show_notification : true,

        close_notification() {
            this.show_notification = false
            window.history.pushState({}, '', localized.site_url +'/contact-us');
        }
    }))
})