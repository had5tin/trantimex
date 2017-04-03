$(document).ready(function(){
    // Mobile Menu
    var pushLeft = new Menu({
        wrapper: '#o-wrapper',
        type: 'push-left',
        menuOpenerClass: '.c-button',
        maskId: '#c-mask'
    });

    var pushLeftBtn = $('#c-button--push-left');
    pushLeftBtn.on('click', function(e) {
        e.preventDefault;
        pushLeft.open();
    });

    // Test Logged in
    if( $('body').hasClass('logged-in') ) {
        $('.site-branding').css('top','32px');
    } else {
        $('.site-branding').css('top',0);
    }

    if( $(window).width() > 768 ) {
        $(window).scroll(function() {
            if ($(this).scrollTop()>60)
            {
                $('.site-scroll').slideDown(500);
                $('.sub-menu').css('top','55px');
            }
            else
            {
                $('.site-scroll').slideUp(500);
                $('.sub-menu').css('top','65px');
            }
        });
    }

    // Slider Homepage
    $('#camera_wrap_2').camera({
        height: '478px',
        pagination: false,
        fx: 'simpleFade'
    });

    // News in homepage
    $(window).scroll(function() {
        var heightDiv = $('.site-header').height() + $('.sliders').height() + $('.services').height();
        if($(this).scrollTop() > heightDiv) {
            $('.item-news').addClass('animate');
            $('.item-news:even').css({"visibility":"visible",'animation-name':'fadeInLeft'});
            $('.item-news:odd').css({"visibility":"visible",'animation-name':'fadeInRight'});
        }
    });

    // Products
    $('#product-slider').owlCarousel({
        loop: true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:1
            },
            1000:{
                items:3
            }
        }
    })

    // Service
    var heightService = 0;
    $('.services .item').each(function() {
        heightService = $(this).find('.excerpt').height() > heightService ? $(this).find('.excerpt').height() : heightService;
    });
    $('.services .item').each(function(){
        $(this).find('.excerpt').height(heightService);
    });

    // Product
    var heightProduct = 0;
    $('.products .item').each(function() {
        heightProduct = $(this).find('.excerpt').height() > heightProduct ? $(this).find('.excerpt').height() : heightProduct;
    });
    $('.products .item').each(function(){
        $(this).find('.excerpt').height(heightProduct);
    });

    //Change active tab

    //grabs the hash tag from the url
    var hash = window.location.hash;
    //checks whether or not the hash tag is set
    if (hash != "") {
        //removes all active classes from tabs
        $('#tabs li').each(function() {
            $(this).removeClass('active');
        });
        $('#my-tab-content div').each(function() {
            $(this).removeClass('active');
        });
        //this will add the active class on the hashtagged value
        var link = "";
        $('#tabs li').each(function() {
            link = $(this).find('a').attr('href');
            if (link == hash) {
                $(this).addClass('active');
            }
        });
        $('#my-tab-content div').each(function() {
            link = $(this).attr('id');
            if ('#'+link == hash) {
                $(this).addClass('active');
            }
        });
    }
});








