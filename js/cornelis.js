$(document).ready(function () {

    $(".hamburger").click(function () {
        $("#navbarNavDropdown").toggleClass("active");
        $("body, html").toggleClass("no-scroll");
        $("#wrapper-navbar").removeClass("scrolled-up").removeClass("scrolled-down");
    });

    $(".nav-link").click(function () {
        $("#navbarNavDropdown").removeClass("active");
        $("body, html").removeClass("no-scroll");
        $(".hamburgerTop, .hamburgerMiddle, .hamburgerBottom").removeClass("open");
    });

    $(".privacy_modal_link").click(function () {
        $(".privacy_modal").addClass("active");
        $("body, html").toggleClass("no-scroll");
    });

    $(".downloads, .close_overlay").click(function () {
        $(".overlay").toggleClass("active");
    });

    $(".disclaimer_modal_link").click(function () {
        $(".disclaimer_modal").addClass("active");
        $("body, html").toggleClass("no-scroll");
    });

    $(".close").click(function () {
        $(".privacy_modal, .disclaimer_modal").removeClass("active");
        $("body, html").removeClass("no-scroll");
    });


    document.onkeydown = function (evt) {
        evt = evt || window.event;
        if (evt.keyCode == 27) {
            $(".modal, .overlay").removeClass("active");
            $("body, html").removeClass("no-scroll");
        }
    };


    $(document).ready(function(){
        $('#register_form .form-group input[type="text"], #register_form .form-group input[type="email"], #register_form .form-group input[type="tel"], #register_form .form-group input[type="chechbox"]').blur(function(){
            if(!$(this).val()){
                $(this).addClass("error");
            } else{
                $(this).removeClass("error");


            }
        });
    });

    $(function () {
        $('#register_form').submit(function () {
            if($(this).valid()) {
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event': 'FormulierIngevuld'
                });
            }
        });
    });

    window.onload = function() {
        var $recaptcha = document.querySelector('#g-recaptcha-response');

        if($recaptcha) {
            $recaptcha.setAttribute("required", "required");
        }
    };




    /* Hamburger menu */
    let isOpen = false;

    /* Hamburger layers */
    const hamburgerTop = document.getElementsByClassName('hamburgerTop')[0];
    const hamburgerMiddle = document.getElementsByClassName('hamburgerMiddle')[0];
    const hamburgerBottom = document.getElementsByClassName('hamburgerBottom')[0];

    document.getElementsByClassName('hamburger')[0].addEventListener('click', toggle);

    function toggle() {
        if (isOpen) {
            hamburgerTop.classList.remove('open');
            hamburgerMiddle.classList.remove('open');
            hamburgerBottom.classList.remove('open');
            isOpen = false;
            return;
        }
        hamburgerTop.classList.add('open');
        hamburgerMiddle.classList.add('open');
        hamburgerBottom.classList.add('open');
        isOpen = true;
    }

});


document.addEventListener("DOMContentLoaded", function () {

    el_autohide = document.querySelector('#wrapper-navbar');

    // add padding-top to bady (if necessary)
    navbar_height = document.querySelector('#wrapper-navbar').offsetHeight;
    document.body.style.paddingTop = '0px';


    if (el_autohide) {
        var last_scroll_top = 0;
        window.addEventListener('scroll', function () {
            let scroll_top = window.scrollY;
            if (scroll_top < last_scroll_top) {
                el_autohide.classList.add('scrolled-up');
            } else {
                el_autohide.classList.add('scrolled-up');
            }
            last_scroll_top = scroll_top;
        });
        // window.addEventListener
    }

    window.addEventListener('scroll', myFunction);

    // Get the navbar
    var navbar = document.getElementById("wrapper-navbar");


    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        let scrollPosition = Math.round(window.scrollY);

        if (scrollPosition < 50) {
            navbar.classList.remove("scrolled-up");
            navbar.classList.remove("scrolled-down");
        } else {

        }
    }


    // if

});


$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
            &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000, function () {

                });
            }
        }
    });

window.onload = function () {
    var current = location.pathname;
    $('#nav li a').each(function () {
        var $this = $(this);
        // if the current path is like this link, make it active
        if ($this.attr('href').indexOf(current) !== -1) {
            $this.addClass('active');
        }
    })
};

$(document).ready(function () {
    $('.header_slider').slick({
        infinite: true,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        prevArrow: $('.prev_header_slide'),
        nextArrow: $('.next_header_slide'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('.voorzieningen_slider').slick({
        infinite: true,
        autoplay: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        centerMode: true,
        dots: false,
        prevArrow: $('.prev_voorzieningen_slide'),
        nextArrow: $('.next_voorzieningen_slide'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('.locatie_slider').slick({
        infinite: true,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        centerMode: true,
        dots: false,
        prevArrow: $('.prev_locatie_slide'),
        nextArrow: $('.next_locatie_slide'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('.actueel_slider').slick({
        infinite: true,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        dots: false,
        prevArrow: $('.prev_actuele_slide'),
        nextArrow: $('.next_actuele_slide'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });

    $('.impression_slider').slick({
        infinite: false,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
    });


    $('.apartments_number_slider').slick({
        infinite: false,
        autoplay: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        focusOnSelect: true,
        dots: false,
        arrows: false,
        asNavFor: ".apartments_type_slider",
        prevArrow: $('.prev_apartments_number_slide'),
        nextArrow: $('.next_apartments_number_slide'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,

                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,

                }
            },
        ]
    });

    $('.apartments_type_slider').slick({
        infinite: false,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        vertical: false,
        draggable: false,
        dots: false,
        arrows: false,
        asNavFor: ".apartments_number_slider",
    });


    $('.apartments_slider_1').slick({
        infinite: false,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        focusOnSelect: true,
        prevArrow: $('.prev_apartment_slide_1'),
        nextArrow: $('.next_apartment_slide_1'),
    });

    $('.apartments_slider_2').slick({
        infinite: false,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        focusOnSelect: true,
        prevArrow: $('.prev_apartment_slide_2'),
        nextArrow: $('.next_apartment_slide_2'),
    });

    $('.apartments_slider_3').slick({
        infinite: false,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        focusOnSelect: true,
        prevArrow: $('.prev_apartment_slide_3'),
        nextArrow: $('.next_apartment_slide_3'),
    });

    $('.apartments_slider_4').slick({
        infinite: false,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        focusOnSelect: true,
        prevArrow: $('.prev_apartment_slide_4'),
        nextArrow: $('.next_apartment_slide_4'),
    });

    $('.apartments_slider_5').slick({
        infinite: false,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        focusOnSelect: true,
        prevArrow: $('.prev_apartment_slide_5'),
        nextArrow: $('.next_apartment_slide_5'),
    });
});




