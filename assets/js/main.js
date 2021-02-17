$(document).ready(function() {


    $('[data-button="clear"]').click(function(){
      $("[data-colour]").removeClass("bg-purple");
      $("[data-colour]").removeClass("bg-black");
    });
    $('[data-button="purple"]').click(function(){
      $("[data-colour]").removeClass("bg-black");
      $("[data-colour]").addClass("bg-purple");
    });
    $('[data-button="black"]').click(function(){
      $("[data-colour]").removeClass("bg-purple");
      $("[data-colour]").addClass("bg-black");
    });
    // $("[button-25]").click(function(){
    //   $("[data-colour]").removeClass("font-size-50");
    //   $("[data-colour]").addClass("font-size-25");
    // });
    // $("[button-50]").click(function(){
    //   $("[data-colour]").removeClass("font-size-25");
    //   $("[data-colour]").addClass("font-size-50");
    // });


    /*======================================================
    COLOADE (like masonry but lighter)
    https://github.com/desandro/colcade
    ========================================================*/
    // function colcade(){
    //     var colc = new Colcade( '.grid', {
    //         columns: '.grid-col',
    //         items: '.grid-item'
    //     })
    // }
    // colcade();

    // USE THE FOLLOWING IN THE HTML RATHER THAN THE JS VERSION:
    // <div class="grid" data-colcade="columns: .grid-col, items: .grid-item">


    $('[data-toggle-eml]').on( 'click', function(e){
        e.preventDefault();
        $(this).toggleClass('ACTIVE');
    });

    /*======================================================
    NOT SURE...
    ========================================================*/
    $('[data-date-selected]').on( 'click', function(e){
        e.preventDefault();
        $(this).toggleClass('');
        $(this).next().slideToggle();

    });


    /*======================================================
    SLIDER
    ========================================================*/
    $('[data-slick="slider-auto-arrows"]').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        fade: false,
        autoplay: true,
        autoplaySpeed: 4000,
        adaptiveHeigh: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1
                }
            },
        ]
    });

    $('[data-slick="slider-arrows"]').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        // fade: true,
        // autoplay: false,
        // autoplaySpeed: 4000,
        // adaptiveHeigh: true,
        // responsive: [
        //     {
        //         breakpoint: 1024,
        //         settings: {
        //             slidesToShow: 3
        //         }
        //     },
        //     {
        //         breakpoint: 1024,
        //         settings: {
        //             slidesToShow: 2
        //         }
        //     },
        //     {
        //         breakpoint: 640,
        //         settings: {
        //             slidesToShow: 1
        //         }
        //     },
        // ]
    });


    /*======================================================
    LIGHTBOX VIDEO & GALLERY
    ========================================================*/
    // $('[data-magnific="gallery"]').magnificPopup({
    //     delegate: 'a',
    //     type: 'image',
    //     gallery:{
    //         enabled:true
    //     }
    // });
    //
    //
    // $('[data-magnific="inline"]').magnificPopup({
    //     type: 'inline',
    //     midClick: true,
    //     fixedContentPos: "auto"
    // });



    /*======================================================
    SUPER SIMPLE ACCORDION
    ========================================================*/
    $('[data-faq-title]').on( 'click', function(e){
        e.preventDefault();
        $(this).toggleClass('is-open');
        $(this).next().toggle();

    });

    $('[data-accordion]').on( 'click', function(e){
        e.preventDefault();
        $(this).toggleClass('is-open');
        $(this).next().slideToggle();

    });




    /*======================================================
    No UI Slider
    https://refreshless.com/nouislider/
    ========================================================*/
    // function noUiSlider(){
    // var slider = document.getElementById('slider');
    // noUiSlider.create(slider, {
    //     start: [0, 100],
    //     connect: true,
    //     range: {
    //         'min': 0,
    //         'max': 100
    //     }
    // });
    // noUiSlider();




    /*======================================================
    Animate On Scroll
    ========================================================*/
    AOS.init();


    /*======================================================
    HEADER SPACE
    ========================================================*/
    // function headerSpace(){
    //     var headerHeight = $('[data-area="header"]').outerHeight();
    //     //$('[data-area="content"]').css('margin-top', + headerHeight + "px");
    //     $('[data-area="content"] > div:first-of-type').css('padding-top', + headerHeight + "px");
    // }
    //
    // headerSpace();
    // $(window).resize(function(){
    //     headerSpace();
    // });


    /*======================================================
    MINUS HEADER SPACE
    ========================================================*/
    // function headerSpaceMinus(){
    //     var containerHeight = $('[data-area="header"]').outerHeight();
    //     $('[data-area="minus"]').css('padding-top', + containerHeight + 'px');
    // }
    //
    // headerSpaceMinus();
    // $(window).resize(function(){
    //     headerSpaceMinus();
    // });


    /*======================================================
    RELLAX - https://github.com/dixonandmoe/rellax
    ========================================================*/
    var rellax = new Rellax('[rellax]', {
        speed: -2,
        //center: true,
        round: true,
        vertical: true,
        horizontal: false,
        //wrapper: '[rellax-parent]',
        //relativeToWrapper: true
    });


    /*======================================================
    SIMPLE SHOW / HIDE FOR SEARCH
    ========================================================*/
    // $('[data-click="search"]').each(function(){
    //     $(this).click(function(){
    //         $("html, body").addClass("search-active");
    //         $('[data-element="search-overlay"]').removeClass("hide");
    //     });
    // });
    //
    // $('[data-click="search-close"]').each(function(){
    //     $(this).click(function(){
    //         $("html, body").removeClass("search-active");
    //         $('[data-element="search-overlay"]').addClass("hide");
    //     });
    // });


    /*======================================================
    MATCHHEIGHT
    ========================================================*/
    $('.js-match-height').matchHeight();
    $.fn.matchHeight._afterUpdate = function(resize) {
        $.fn.matchHeight._apply('.js-match-height');
    }

    /*========================
    SMOOTH SCROLL
    ==========================*/
    $('a[href*=\\#]:not([href=\\#]):not([data-toggle])').on('click', function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            var headerHeight = $('#masthead').outerHeight();
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - headerHeight
                }, 750);
                return false;
            }
        }
    });


    /*======================================================
    PRELOADER
    ========================================================*/
    // var timer = function(){
    //     $('[data-content]').fadeTo(600, 1);
    //     $('[data-loader]').delay(200).fadeOut(600);
    // };
    // timer();




}); // ENDS DOC READY AT TOP


// setTimeout(function(){
//     $('[data-content]').fadeTo(600, 1);
//     $('[data-loader]').delay(200).fadeOut(600);
// }, 2000); 2000;
