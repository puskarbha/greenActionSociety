// client section owl carousel
$('.owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    margin: 0,
    nav: false,
    dots: true,
    mouseDrag: false,
    slideBy: 2,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 2
        },
    }
})
