
//this file was created to add some actions and effects to navbar on template page
//created by Karim Fathy


$(function () {
    //get window size 
    var window_size;
    window_size = $(this).width();

    //get window position when scrolling
    var pos;
    $(window).scroll(function () {
        pos = $(this).scrollTop();
    });


    // actions when window resizing
    $(window).on("resize", function () {
        window_size = $(this).width();
        if (window_size >= 975) {
            $(".navbar-brand").addClass("hide-ele");
            $(".logo-bar").removeClass("hide-ele");
            if(pos >=200 ){
                $(".navbar").removeClass("nav-top");
            } else {
                $(".navbar").addClass("nav-top");
            }
        } else {
            $(".navbar-brand").removeClass("hide-ele");
            $(".logo-bar").addClass("hide-ele");
            $(".navbar").removeClass("nav-top");
        }
        console.log(pos);
    });

    // action when window loaded
    $(window).on("load", function () {
        if (window_size >= 975) {
            $(".navbar-brand").addClass("hide-ele");
            $(".logo-bar").removeClass("hide-ele");
            $(".navbar").addClass("nav-top");
        } else {
            $(".navbar-brand").removeClass("hide-ele");
            $(".logo-bar").addClass("hide-ele");
            $(".navbar").removeClass("nav-top");
        }
    })

    // add or remove class change on small size
    $(".nav-button").click(function () {
        $(".nav-button").toggleClass('change');
    });

    // Add slideDown animation to Bootstrap dropdown when expanding.
    $('.dropdown').on('show.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // Add slideUp animation to Bootstrap dropdown when collapsing.
    $('.dropdown').on('hide.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });

    //action when scrolling pages
    $(window).scroll(function () {
        var pos = $(this).scrollTop();
        if (pos >= 200) {
            $(".nav-menu").addClass("custom-navbar");
            $(".navbar").removeClass("nav-top");
            $(".navbar").addClass("fixed-top");
            $(".img-logo").addClass("custom-img-logo");
            $(".company-name").addClass("custom-company-name");
            $(".nav-menu-dropdown").addClass("custom-navbar-dropdown");
            $(".navbar-nav .menu-item").removeClass("text-white");
            $(".navbar-nav").removeClass("custom-nav");
            $(".nav-menu-dropdown").removeClass("custom-nav");
            $(".navbar-brand").removeClass("hide-ele");
        } else {
            $(".nav-menu").removeClass("custom-navbar");
            $(".navbar").removeClass("fixed-top");
            $(".navbar-nav").addClass("custom-nav");
            $(".nav-menu-dropdown").addClass("custom-nav");
            $(".navbar-nav .menu-item").addClass("text-white");
            $(".img-logo").removeClass("custom-img-logo");
            $(".company-name").removeClass("custom-company-name");
            $(".nav-menu-dropdown").removeClass("custom-navbar-dropdown");
            if (window_size >= 992) {
                $(".navbar-brand").addClass("hide-ele");
                $(".navbar").addClass("nav-top");
            } else {
                $(".navbar-brand").removeClass("hide-ele");
                $(".navbar").removeClass("nav-top");
            }
        }        
    });

});


