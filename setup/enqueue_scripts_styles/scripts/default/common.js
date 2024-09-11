document.addEventListener('alpine:init', () => {

    Alpine.data('header', () => ({

        on_window_scroll() {
            let header_height = document.querySelector('header').clientHeight
            this.$store.header.scrolled_menu_state = window.scrollY >= header_height ? true : false
        }
    }))

    Alpine.data('scrolled_menu', () => ({

        toggle_mobile_menu() {
            this.$store.header.mobile_menu_state = !this.$store.header.mobile_menu_state
        }
    }))

    Alpine.data('mobile_menu', () => ({

        toggle_mobile_menu() {
            this.$store.header.mobile_menu_state = !this.$store.header.mobile_menu_state
        }
    }))

    Alpine.store('header', {
        mobile_menu_state: false,
        scrolled_menu_state : false,
    })
})