$(function () {
    // Add active class to homepage link in navbar
    $(window).on("load",function(){
        $(".nav-home").addClass("nav-active");
    });

    //Add animation on news section
    $(window).scroll(function () {
        var pos = $(this).scrollTop();
        if (pos >= 300) {
            $(".card-news").addClass("fromLeft");
            $(".card-news").removeClass("hide-ele");
            $(".slide-news").addClass("fromRight");
            $(".slide-news").removeClass("hide-ele");
        }
    });

    //Add animation on chairman section
    $(window).scroll(function () {
        var pos = $(this).scrollTop();
        if (pos >= 900) {
            $(".chairman-img").addClass("fromDown");
            $(".chairman-img").removeClass("hide-ele");
            $(".chairman-text").addClass("fromUp");
            $(".chairman-text").removeClass("hide-ele");

        }
    });
});