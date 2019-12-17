jQuery(document).ready(function($) {

	jQuery('.products-carousel__carousel').addClass('owl-carousel').owlCarousel({
		items: 1.25,
		margin: 26,
		loop: true,
		autoWidth: true,
		stagePadding: 26,
		responsive: {
			1024 : {
				items: 4,
				autoWidth: false,
				stagePadding: 0,
			}
		}
	});

});