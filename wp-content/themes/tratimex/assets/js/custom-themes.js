/**
 * Created by ThanhMinh92it on 4/2/2017.
 */
$(document).ready(function () {
    // $('.search_submit').click(function () {
    //
    // });
    $('.camera_caption div').css('background', '#002265');
    $('.camera_caption div p').css('color', '#fff');

    var owl = $('div#slider');
    owl.owlCarousel({
        items: 5,
        lazyLoad: true,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        smartSpeed: 450,
        responsiveRefreshRate: 200,
    });
});
