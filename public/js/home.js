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
        if (pos >= 1600) {
            $(".repons-text").addClass("fromDown");
            $(".repons-text").removeClass("hide-ele");
            $(".repons-img").addClass("fromDown");
            $(".repons-img").removeClass("hide-ele");
        }

        if (pos >= 2600) {
            $(".safty-txt").addClass("animated bounceInUp");
            $(".safty-txt").removeClass("hide-ele");
            $(".safty-img").addClass("animated jackInTheBox");
            $(".safty-img").removeClass("hide-ele");
        }
    });

    // gallery
      $('#galleryCarousel').carousel({
        interval:2000
      });
      $('. galleryCarousel.carousel .carousel-item').each(function(){
        var next = $(this).next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
      });
});