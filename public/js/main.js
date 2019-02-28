
$(function () {
    var window_size;
    window_size = $(this).width();

    $(window).on("resize", function () {
        window_size = $(this).width();
        if (window_size >= 975) {
            $(".navbar-brand").addClass("hide-ele");
            $(".logo-bar").removeClass("hide-ele");
            $(".navbar").addClass("nav-top");
            // $(".drop-nav").removeClass("hide-ele");
        } else {
            $(".navbar-brand").removeClass("hide-ele");
            $(".logo-bar").addClass("hide-ele");
            $(".navbar").removeClass("nav-top");
            // $(".drop-nav").removeClass("hide-ele");
        }
    });

    $(window).on("load", function () {
        if (window_size >= 975) {
            $(".navbar-brand").addClass("hide-ele");
            $(".logo-bar").removeClass("hide-ele");
            $(".navbar").addClass("nav-top");
            // $(".navbar").addClass("fixed-top");
            // $(".drop-nav").removeClass("hide-ele");
        } else {
            $(".navbar-brand").removeClass("hide-ele");
            $(".logo-bar").addClass("hide-ele");
            $(".navbar").removeClass("nav-top");
            // $(".navbar").removeClass("fixed-top");
            // $(".drop-nav").removeClass("hide-ele");
        }
        console.log(window_size);
    })

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
                // $(".drop-nav").removeClass("hide-ele");
            } else {
                $(".navbar-brand").removeClass("hide-ele");
                $(".navbar").removeClass("nav-top");
                // $(".drop-nav").addClass("hide-ele");
            }

            // });
        }        
    });

});


