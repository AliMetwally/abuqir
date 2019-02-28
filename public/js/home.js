$(function () {
    $(window).scroll(function () {
        var pos = $(this).scrollTop();
        if (pos >= 300) {
            $(".camera-img").addClass("fromLeft");
            $(".card-news").addClass("fromLeft");
            $(".card-news").removeClass("hide-ele");
            $(".mission-text").addClass("fromRight");
            $(".slide-news").addClass("fromRight");
            $(".slide-news").removeClass("hide-ele");
        }
    });


    $(window).scroll(function () {
        var pos = $(this).scrollTop();
        if (pos >= 800) {
            $(".chairman-img").addClass("fromDown");
            $(".chairman-img").removeClass("hide-ele");
            $(".chairman-text").addClass("fromUp");
            $(".chairman-text").removeClass("hide-ele");

        }
    });
});