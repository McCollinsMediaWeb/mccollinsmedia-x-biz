jQuery(document).ready(function ($) {
  console.log("ready!");
  jQuery(window).scroll(function () {
    var scroll = jQuery(window).scrollTop();

    if (scroll >= 100) {
      jQuery("body").addClass("StickHeader");
    } else {
      jQuery("body").removeClass("StickHeader");
    }
  });
  jQuery(".Cst-select").addClass("activated");
  jQuery(".T1").addClass("activated");

  jQuery(window).scroll(function () {
    inViewport();
  });

  jQuery(window).resize(function () {
    inViewport();
  });

  function inViewport() {
    jQuery(".rombus").each(function () {
      var divPos = jQuery(this).offset().top,
        topOfWindow = jQuery(window).scrollTop();

      if (divPos < topOfWindow + 900) {
        jQuery(this).addClass("activated");
      }
    });
  }

  jQuery(".CloseClick svg, .MenuClick").click(function () {
    jQuery("body").toggleClass("ActivePanel");
  });

  jQuery(".JuriSlider").slick({
    draggable: true,
    accessibility: false,
    centerMode: false,
    variableWidth: true,
    slidesToShow: 1,
    arrows: true,
    dots: true,
    swipeToSlide: true,
    infinite: false,
  });

  jQuery(".JuriSlider").on("init", function (event, slick) {
    jQuery(".JuriSliderItem:first-child").addClass("active");
  });


  jQuery(".JuriSliderItem:first-child").addClass("active");

  jQuery(".JuriSliderItem ").mouseover(function () {
    jQuery(".JuriSliderItem:first-child ").removeClass("active");
    jQuery(this).addClass("active");
  });

  jQuery(".JuriSliderItem ").mouseout(function () {
    jQuery(this).removeClass("active");
    jQuery(".JuriSliderItem:first-child ").addClass("active");
  });

  jQuery(".JuriSliderItem ").mouseleave(function () {
    jQuery(".BackContent").removeClass("flip");
  });

  jQuery(".ContenTTp1 ").click(function () {
    jQuery(".BackContent").removeClass("flip");
    jQuery(this).next(".BackContent").toggleClass("flip");
  });
  jQuery(".BackContent").click(function () {
    jQuery(".BackContent").removeClass("flip");
  });
  jQuery(".OverLay , .openpopup").click(function () {
    jQuery("body").toggleClass("activeform");
    jQuery("body").toggleClass("disablescroll");
  });

  jQuery(".StpTp1").slick({
    draggable: true,
    accessibility: false,
    centerMode: false,
    slidesToShow: 5,
    arrows: true,
    dots: true,
    swipeToSlide: true,
    infinite: true,
  });
  jQuery(".BankSlider").slick({
    draggable: true,
    accessibility: false,
    centerMode: false,
    slidesToShow: 4,
    arrows: true,
    dots: true,
    swipeToSlide: true,
    infinite: true,
  });
  
 
});
