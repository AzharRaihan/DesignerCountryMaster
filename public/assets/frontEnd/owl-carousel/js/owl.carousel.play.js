$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: 1000,
    responsiveClass: true,

    responsive: {
        0: {
            items: 3,
            nav: true
        },
        600: {
            items: 4,
            nav: false
        },
        1000: {
            items: 6,
            nav: true,
            loop: false
        }
    }
});
