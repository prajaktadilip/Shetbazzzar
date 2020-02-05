//alert("hellow");
$(function () {
    $(".news-content").owlCarousel({
        items: 3,
        autoplay: true,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                autoplayHoverPause: false,
            },
            480:{
                items: 1,
            },
            768:{
                items: 1,
            },
        },
    });
});