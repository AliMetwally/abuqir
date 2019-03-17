$(function(){
    $(window).on("load",function(){
        $(".emp-social-silder" ).hide();
        $(".emp-social-content" ).hide();
    });

    $(window).scroll(function(){
        var s_pos = $(this).scrollTop();
        if(s_pos >= 10){
            $(".title-p").fadeIn(1000);
        } 
        
        if(s_pos >= 200){
            $(".emp-social-silder" ).show();
            $(".emp-social-content" ).show();
            $(".emp-social-silder" ).animate({ "left": "0" }, 1200);
            $(".emp-social-content" ).animate({ "left": "0" }, 2000 );
        }

        if(s_pos >= 600){
            $(".social-area-slider").fadeIn(3000);
            $(".area-text" ).fadeIn(3000);
        }

        if(s_pos >=900){
            
            $(".city-slider" ).animate({ "left": "0" }, 1200);
            $(".city-text" ).animate({ "right": "0" }, 2000 );
        }
    });
})