    
$(document).ready(function(){
    $nav = $("nav");
    $toggleCollapse = $(".toggle-collapse");

    $toggleCollapse.click(function(){
        $nav.toggleClass("display");
    }); 

    $('.carousel-images').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 1500,
	  nextArrow:$(".next"),
	  prevArrow:$(".prev")
	});

    $('.carousel-projects').slick({
	  slidesToShow: 2,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 1500,
    nextArrow:" ",
    prevArrow:" ",
	  responsive: [
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 1,
        slidesToScroll:1
      }
    }
  ]
});

});



