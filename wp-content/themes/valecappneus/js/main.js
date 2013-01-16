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
	$(".destaque").mouseover(function(){
		$(".saibamais").slideToggle(200, "linear");
	});
	$(".destaque").mouseout(function(){
		$(".saibamais").slideToggle(200, "linear");
	});
});

