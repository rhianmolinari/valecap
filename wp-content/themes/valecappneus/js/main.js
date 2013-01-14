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
	transitionSpeed: 400,
	//slidesOrientation: 'vertical', // move (horizontal or vertical)

	//Arrow
	allowCSS3: true,
	arrowsNav: true,

	//Ball
	controlNavigation: 'tabs',

	//Arrows keyboard
	keyboardNavEnabled: true
	});
}); 

