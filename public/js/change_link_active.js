$(document).ready(function () 
{
    
    $(".nav li a").on("click", function(){
        $(".nav").find(".active").removeClass("active");
        
    });

    
    // dteu 

    $("li.nav-item").on("click", function(){
        //$(".nav").find(".active").removeClass("active");
        console.log('menu clicked li open menu');
    });


    // enddteu 

});