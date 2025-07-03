var GUI = (function () {
    var slideBannerHome = function () {
        var bAutoHeight = $(window).width() > 1024 ? false : true;
        var slide = new Swiper(".slide-banner-home .swiper", {
            slidesPerView: 1,
            loop: true,
            autoHeight: bAutoHeight,
            lazy: true,
            draggable: true,
            // pagination: {
            //     el: ".slide-banner-home .swiper-pagination",
            //     clickable: true,
            // },
        });
    };

    return {
        _: function () {
            slideBannerHome();
        },
    };
})();

$(document).ready(function () {
    GUI._();
});
