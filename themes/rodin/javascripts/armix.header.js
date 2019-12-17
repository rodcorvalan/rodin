jQuery(document).ready(function($) {
	
	jQuery('.menu-icon__link').click(function(e){

		// Category Menu.
		jQuery('.category-menu__content').hide();
		jQuery('.category-menu__selector-item').removeClass('category-menu__selector-item--state-open');

		if ( jQuery(this).hasClass('menu-icon__link--state-close') )
		{
			jQuery(this).removeClass('menu-icon__link--state-close');
			jQuery(this).addClass('menu-icon__link--state-open');

			jQuery('.float-menu').slideDown();

		}
		else
		{
			jQuery(this).removeClass('menu-icon__link--state-open');
			jQuery(this).addClass('menu-icon__link--state-close');

			jQuery('.float-menu').slideUp();
		}
		return false;
	});

	jQuery('.search-icon__link').click(function(e){
		if ( jQuery(this).hasClass('search-icon__link--state-close') )
		{
			jQuery(this).removeClass('search-icon__link--state-close');
			jQuery(this).addClass('search-icon__link--state-open');

			jQuery('.header__search-form').slideDown();
		}
		else
		{
			jQuery(this).removeClass('search-icon__link--state-open');
			jQuery(this).addClass('search-icon__link--state-close');

			jQuery('.header__search-form').slideUp();
		}
		return false;
	});

	jQuery('.category-menu__selector-link').click(function(event) {
		
		var current_id = jQuery(this).closest('.category-menu__selector-item').data('menu-id');

		// Float Menu.
		jQuery('.float-menu').hide();
		jQuery('.menu-icon__link').removeClass('menu-icon__link--state-open');
		jQuery('.menu-icon__link').addClass('menu-icon__link--state-close');
		
		if ( jQuery(this).closest('.category-menu__selector-item').hasClass('category-menu__selector-item--state-open') )
		{
			jQuery(this).closest('.category-menu__selector-item').removeClass('category-menu__selector-item--state-open');
			jQuery('.category-menu__content--menu-id-'+current_id).slideUp();
		}
		else
		{
			jQuery('.category-menu__selector-item').removeClass('category-menu__selector-item--state-open');
			jQuery(this).closest('.category-menu__selector-item').addClass('category-menu__selector-item--state-open');
			jQuery('.category-menu__content').hide();
			jQuery('.category-menu__content--menu-id-'+current_id).slideDown();
		}

		return false;

	});



});