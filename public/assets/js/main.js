(function ($) {

    "use strict";

    var fullHeight = function () {

        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function () {
            $('.js-fullheight').css('height', $(window).height());
        });

    };
    fullHeight();

    var owl = $('.featured-carousel');

    $('.featured-carousel').owlCarousel({
        animateOut: 'fadeOut',
        center: false,
        items: 1,
        loop: true,
        stagePadding: 0,
        margin: 0,
        smartSpeed: 1500,
        autoplay: false,
        dots: false,
        nav: false,
        navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
    });

    $('.thumbnail li').each(function (slide_index) {
        $(this).click(function (e) {
            owl.trigger('to.owl.carousel', [slide_index, 1500]);
            e.preventDefault();
        })
    })

    owl.on('changed.owl.carousel', function (event) {
        $('.thumbnail li').removeClass('active');
        $('.thumbnail li').eq(event.item.index - 2).addClass('active');
    })

})(jQuery);

$(document).ready(function () {
    // Click event for thumbnail images
    $(".featured-carousel .item").on("click", function () {
        var imgSrc = $(this).find(".img").css("background-image");
        imgSrc = imgSrc.replace('url("', '').replace('")', '');
        $("#modalImage").attr("src", imgSrc);
        $("#imageModal").modal("show");
    });

    // Close modal event
    $(".close-image").on("click", function () {
        $("#imageModal").modal("hide");
    });
});
