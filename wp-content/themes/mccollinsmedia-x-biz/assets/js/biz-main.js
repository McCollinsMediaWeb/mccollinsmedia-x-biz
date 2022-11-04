jQuery( document ).ready(function($) {
    console.log( "ready!" );
    
    // $('.heroslider').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     infinite: true,
    //     speed: 500,
    //     fade: true,
    // });
    $(".CloseClick svg, .MenuClick").click(
        function(){
            $("body").toggleClass("ActivePanel");
        }
    );
});