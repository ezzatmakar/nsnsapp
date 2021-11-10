// JavaScript Document *Ibrahim Najib

$(document).ready(function() {
    'use strict';

    let rtl;
    if ($('html').attr('lang') === "ar") {
        rtl = true;
    } else {
        rtl = false;
    }

    // Mob Menu
    jQuery.fn.clickToggle = function(a, b) {
        function cb() {
            [b, a][this._tog ^= 1].call(this);
        }
        return this.on("click", cb);
    };

    $(".mobMenu").clickToggle(function() {
        $(this).addClass('open');
        $('.menuContent').addClass('open');
        $('.menuContent .mainMenu ul').slideDown();
    }, function() {
        $(this).removeClass('open');
        $('.menuContent').removeClass('open');
        $('.menuContent .mainMenu ul').slideUp();
    });
    $(document).on('click', function(e) {
        if ($(e.target).closest("header").length === 0) {
            if ($('.mobMenu').hasClass('open')) {
                $(".mobMenu").click();
            }
        }
    });

    function menuPos() {
        if ($(window).width() < 993) {
            $('header .mainMenu').insertAfter('.mobMenuPos');

        } else {
            $('.menuContent .mainMenu').insertAfter('header .pcMenuPos');
        }
    }
    menuPos();
    $(window).resize(function() {
        menuPos();
    });



    //mainSlider
    var mainSlider = $(".mainSlider .owl-carousel");
    mainSlider.owlCarousel({
        items: 1,
        smartSpeed: 750,
        autoplayTimeout: 8000,
        autoplay: false,
        autoplayHoverPause: false,
        margin: 0,
        rtl,
        center: false,
        loop: false,
        //animateOut: 'fadeOut',
        nav: false,
        navText: ['<span class="icon-back-left"></span>', '<span class="icon-back-right"></span>'],
        dots: true,
        // mouseDrag:false,
        // touchDrag:false,
        // pullDrag:false,
        // freeDrag:false,  

    });

    //activity
    var activity = $(".activity .owl-carousel");
    activity.owlCarousel({
        items: 1,
        smartSpeed: 750,
        autoplayTimeout: 8000,
        autoplay: false,
        autoplayHoverPause: false,
        margin: 0,
        rtl,
        center: false,
        loop: false,
        //animateOut: 'fadeOut',
        nav: true,
        navText: ['<img class="icon-left" src="' + activity.attr('data-arrow') + '">', '<img class="icon-right" src="' + activity.attr('data-arrow') + '">'],
        dots: true,
        // mouseDrag:false,
        // touchDrag:false,
        // pullDrag:false,
        // freeDrag:false,  
    });

    //mobSlider
    if ($(window).width() < 768) {
        $(".mobSlider").addClass('owl-carousel');
        $(".mobSlider .col").removeClass('col-sm-4 col-xs-8')
        var mobSlider = $(".mobSlider");
        mobSlider.owlCarousel({
            items: 1,
            smartSpeed: 750,
            autoplayTimeout: 8000,
            autoplay: false,
            autoplayHoverPause: false,
            margin: 0,
            rtl,
            center: false,
            loop: false,
            autoWidth: true,
            //animateOut: 'fadeOut',
            nav: false,
            navText: ['<img class="icon-left" src="' + activity.attr('data-arrow') + '">', '<img class="icon-right" src="' + activity.attr('data-arrow') + '">'],
            dots: false,
            // mouseDrag:false,
            // touchDrag:false,
            // pullDrag:false,
            // freeDrag:false,  
        });
    }

    //catSlider
    var catSlider = $(".catSlider .owl-carousel");
    catSlider.owlCarousel({
        items: 3,
        smartSpeed: 750,
        autoplayTimeout: 8000,
        autoplay: false,
        autoplayHoverPause: false,
        margin: 0,
        rtl,
        center: false,
        loop: false,
        //animateOut: 'fadeOut',
        nav: true,
        navText: ['<img class="icon-left" src="' + catSlider.attr('data-arrow') + '">', '<img class="icon-right" src="' + catSlider.attr('data-arrow') + '">'],
        dots: false,
        autoWidth: true,
        // mouseDrag:false,
        // touchDrag:false,
        // pullDrag:false,
        // freeDrag:false, 

    });

    //testimonials
    var testimonials = $(".testimonials .owl-carousel");
    testimonials.owlCarousel({
        items: 3,
        smartSpeed: 750,
        autoplayTimeout: 8000,
        autoplay: false,
        autoplayHoverPause: false,
        margin: 0,
        rtl,
        center: true,
        loop: true,
        //animateOut: 'fadeOut',
        nav: true,
        navText: ['<img class="icon-left" src="' + testimonials.attr('data-arrow') + '">', '<img class="icon-right" src="' + testimonials.attr('data-arrow') + '">'],
        dots: true,
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        freeDrag: false,
    });
    $('.testimonials .warp .owl-nav .owl-next').insertAfter('.testimonials .arrowPlace');
    $('.testimonials .warp .owl-nav .owl-prev').insertAfter('.testimonials .arrowPlace');
    testimonials.on('translate.owl.carousel', function(event) {
        setTimeout(() => {
            $('.testimonials .box').hide();
            $('.testimonials .box[data-box="' + $('.testimonials .owl-item.center .item').attr('data-box') + '"]').fadeIn();
        }, 10);
    });



    //vedio popup
    $('.open-vedio-link').magnificPopup({
        type: 'iframe',
        midClick: true,
        removalDelay: 300,
        mainClass: 'mfp-fade'
    });


    //cube
    function cube() {
        $('.setCube').each(function() {
            var height = $(this).outerWidth();
            $(this).css('height', height);
        });

    }
    cube();

    //Custom role email
    var emailMsg;
    if (rtl) {
        emailMsg = "من فضلك ادخل بريد إلكتروني صحيح";
    } else {
        emailMsg = "Please enter a valid email address.";
    }
    if ($('form.customValid').length > 0) {

        jQuery.validator.addMethod("customemail",
            function(value, element) {
                return /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(value);
            },
            emailMsg
        );
        jQuery.validator.addMethod("filesize_max", function(value, element, param) {
            var isOptional = this.optional(element),
                file;

            if (isOptional) {
                return isOptional;
            }

            if ($(element).attr("type") === "file") {

                if (element.files && element.files.length) {

                    file = element.files[0];
                    return (file.size && file.size <= param);
                }
            }
            return false;
        });
    }


    //blog details top slider
    $('.articleTop .sliderWarp .thumbnailGroup a').each(function() {
        $(this).css('background-image', 'url(' + $(this).attr('data-img') + ')');
    });
    $('.articleTop .sliderWarp .thumbnailGroup a').eq(0).addClass('active');
    $('.articleTop .sliderWarp .imageWarp').css('background-image', 'url(' + $('.articleTop .sliderWarp .thumbnailGroup a').eq(0).attr('data-img') + ')')

    $('.articleTop .sliderWarp .thumbnailGroup a').on('click', function(e) {
        e.preventDefault();
        $('.articleTop .sliderWarp .thumbnailGroup a').removeClass('active');
        $(this).addClass('active');
        var img = $(this).attr('data-img');
        $('.articleTop .sliderWarp .imageWarp').fadeOut('fast', function() {
            $('.articleTop .sliderWarp .imageWarp').css('background-image', 'url(' + img + ')').fadeIn();
        });

    });



    //mainSlider image position on mobile
    if ($(window).width() < 768) {
        $('.mainSlider .item').each(function() {
            var img = $(this).find('.col-image');
            var text = $(this).find('.col-text');
            text.insertAfter(img);
        });
    }

    if ($(window).width() < 768) {
        $('.whyNs .container').each(function() {
            var img = $(this).find('.col-image');
            var text = $(this).find('.col-text');
            text.insertAfter(img);
        });
    }

    if ($(window).width() < 768) {
        $('.qAndA .container').each(function() {
            var img = $(this).find('.col-image');
            var text = $(this).find('.col-text');
            text.insertAfter(img);
        });
    }

    if ($(window).width() < 768) {
        $('.contactUs .box').each(function() {
            var img = $(this).find('.col-info');
            var text = $(this).find('.col-form');
            text.insertAfter(img);
        });
    }

    if ($(window).width() < 768) {
        var img = $('footer').find('.col-contact');
        var text = $('footer').find('.col-important');
        img.insertAfter(text);
        $('footer .lang').insertBefore('footer .container');
    }

    //sameheight
    if ($('.blogs .col').length > 0) {
        $('.blogs .col').responsiveEqualHeightGrid();
    }

}); // Document ready