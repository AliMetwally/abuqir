$(function(){
    $(window).on("load",function(){
        $(".emp-social-silder" ).hide();
        $(".emp-social-content" ).hide();
        $(".nav-reponsibility").addClass("nav-active");
    });
    $(window).scroll(function(){
        var s_pos = $(this).scrollTop();
        if(s_pos >= 10){
            $(".title-p").fadeIn(1000);
        } 
        
        if(s_pos >= 300){
            $(".emp-social-silder" ).show();
            $(".emp-social-content" ).show();
            $(".emp-social-silder" ).animate({ "left": "0" }, 1200);
            $(".emp-social-content" ).animate({ "left": "0" }, 2000 );
        }

        if(s_pos >= 600){
            $(".social-area-slider").fadeIn(3000);
            $(".area-text" ).fadeIn(3000);
        }

        if(s_pos >=1200){
            
            $(".city-slider" ).addClass("fromDown");
            $(".city-text" ).addClass("fromDown");
        }
        
        if(s_pos >=1700){
            
            $(".env-slider" ).addClass("fromDown");
            $(".env-text" ).addClass("fromDown");
        }
    });
})