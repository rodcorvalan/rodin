jQuery(document).ready(function($) {

	jQuery('.categories-carousel__list').addClass('owl-carousel').owlCarousel({
		items: 1.5,
		margin: 26,
		loop: true,
		autoWidth: true,
		stagePadding: 26,
		responsive: {
			1024 : {
				items: 3,
				autoWidth: false,
				stagePadding: 0,
			},
			1440 : {
				items: 5,
				autoWidth: false,
				stagePadding: 0,
			}
		},
	});

});