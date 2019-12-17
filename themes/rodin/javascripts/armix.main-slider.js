jQuery(document).ready(function($) {

	jQuery('.main-slider__slider').slick({
		arrows: false,
		dots: true,
		fade: true,
		appendDots: jQuery('.main-slider__dots'),
	});

	jQuery('.main-slider__arrow-left').click(function(){
		jQuery('.main-slider__slider').slick('prev');
		return false;
	});

	jQuery('.main-slider__arrow-right').click(function(){
		jQuery('.main-slider__slider').slick('next');
		return false;
	});

});