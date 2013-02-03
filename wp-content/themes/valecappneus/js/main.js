// Menu
$(function(){
	$("header nav ul li").hover(function(){
	$('ul:first',this).css('display', 'block'); 
	}, function(){
	$('ul:first',this).css('display', 'none');
	});
});

// Slider
jQuery(document).ready(function($) {
$('.slider').royalSlider({
	//Definitons
	controlsInside: false,
	controlNavigationSpacing: 0,
	imageScaleMode: 'none',
	imageAlignCenter:false,
	loop: false,
	loopRewind: true,
	numImagesToPreload: 6,
	usePreloader: false,
	navigateByClick: false,

	//Transition
	transitionType: 'fade', // fade or move
	transitionSpeed: 0,
	//slidesOrientation: 'vertical', // move (horizontal or vertical)

	//Autoplay
	autoPlay: {
		enabled: true,
		pauseOnHover: true,
		delay: 3000
	},

	//Arrow
	allowCSS3: true,
	arrowsNav: true,

	//Ball
	controlNavigation: 'tabs',

	//Arrows keyboard
	keyboardNavEnabled: true
	});
});

// Effects hover
$(document).ready(function(){
	$(".featured").mouseover(function(){
		$(".saibamais").css('display', 'block');
	});
	$(".featured").mouseout(function(){
		$(".saibamais").css('display', 'none');
	});

	$(".type-product").mouseover(function(){
		$(".saibamais").css('display', 'block');
	});
	$(".type-product").mouseout(function(){
		$(".saibamais").css('display', 'none');
	});
});

// Abas
$(document).ready(function(){
	$(".abas ul li a").click(function(){
		$(".type-product").css("display", "none");
		$("#" + $(this).attr("title")).css("display", "block");
	});
});
