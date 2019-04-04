$(function(){
     
    // Add active class to contactpage link in navbar
    $(window).on("load",function(){
        $(".nav-services").addClass("nav-active");
    });

    $('.collapse').on('shown.bs.collapse', function() {
            $(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
        }).on('hidden.bs.collapse', function() {
            $(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
    });
});