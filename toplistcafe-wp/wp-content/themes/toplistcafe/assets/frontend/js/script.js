var GUI = (function () {
    var slidePostReview = function () {
        var bAutoHeight = $(window).width() > 1024 ? false : true;
        var slide = new Swiper(".my-slide-post-review", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoHeight: false,
            lazy: true,
            draggable: true,
            pagination: {
                el: ".list-item-post-review .swiper-pagination",
                clickable: true,
            },
        });
    };
    var slideListPostCate = function () {
        var swiper = new Swiper(".my-slide-post-cate", {
            slidesPerView: 5,
            spaceBetween: 22,
            loop: false,
            autoHeight: false,
            lazy: true,
            draggable: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
          });
    };

    return {
        _: function () {
            slidePostReview();
            slideListPostCate();
        },
    };
})();

$(document).ready(function () {
    GUI._();
});
