window.addEventListener('DOMContentLoaded', () => {

    jQuery('#images_carousel').slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    })

    jQuery('#content .wrap .features .images .previous').click(() => {
        jQuery('#images_carousel .slick-prev').trigger('click')
    })

    jQuery('#content .wrap .features .images .next').click(() => {
        jQuery('#images_carousel .slick-prev').trigger('click')
    })

    jQuery('#content .wrap .features .images .fullscreen').click(() => {
        jQuery('#lightbox').addClass('show')
    })

    jQuery('#lightbox_images_carousel').slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    })

    jQuery('#lightbox .images .previous').click(() => {
        jQuery('#lightbox_images_carousel .slick-prev').trigger('click')
    })

    jQuery('#lightbox .images .next').click(() => {
        jQuery('#lightbox_images_carousel .slick-prev').trigger('click')
    })

    jQuery('#lightbox .images .close_lightbox').click(() => {
        jQuery('#lightbox').removeClass('show')
    })
})

document.addEventListener('alpine:init', () => {

    Alpine.data('itenerary_tabs', () => ({

        tabs : [
            [
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. <br> In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.'
            ],
            [
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. <br> In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
            ],
            [
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. <br> In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.'
            ],
            [
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. <br> In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.'
            ],
            [
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. <br> In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.',
                'Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam. Mauris leo dolor, egestas ac ex sed, placerat pulvinar ante. In a neque blandit, scelerisque tellus at, dignissim leo. In nec bibendum urna. Donec sed lacinia diam.'
            ]
        ],

        tab_active : 0
    }))
})