$(function(){
     
    // Add active class to contactpage link in navbar
    $(window).on("load",function(){
        $(".nav-about").addClass("nav-active");
    });

    // About mission and vision
    $(window).scroll(function(){
        var pos = $(this).scrollTop();
        if(pos >= 200){
            $(".vision-head").removeClass("text-main-color");
            $(".vision-head").addClass("animated jackInTheBox");            
            $(".card-body").removeClass("text-white");
            $(".vision-1").addClass("animated delay-1s bounceInUp");
            $(".vision-2").addClass("animated delay-2s bounceInUp");
            $(".vision-3").addClass("animated delay-3s bounceInUp");
            $(".vision-4").addClass("animated delay-4s bounceInUp");

            $(".mission-head").removeClass("text-main-color");
            $(".mission-head").addClass("animated jackInTheBox");  
            $(".mission-1").addClass("animated delay-1s bounceInUp");
            $(".mission-2").addClass("animated delay-2s bounceInUp");
            $(".mission-3").addClass("animated delay-3s bounceInUp");
        }
    })
});