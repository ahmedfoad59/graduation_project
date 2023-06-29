

let aboutOffset = $("#about").offset().top;
$(window).scroll(function(){
    
    let wScroll = $(window).scrollTop();
    if(wScroll>aboutOffset -50)
    {
        $("#main-nav").css("backgroundColor" , "orange");
    }
    else
    {
        $("#main-nav").css("backgroundColor" , "transparent");

    }


})