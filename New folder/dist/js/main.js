$(document).ready(function($){
	"use strict";

	// WOW Js Active
	new WOW().init();
	
	$('.owl-carousel').owlCarousel({
		items:1,
		loop:true,
		nav:false,
		dots:true,
		autoplay:false,
	});
  

}(jQuery));