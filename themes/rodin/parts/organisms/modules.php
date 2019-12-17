<?php $module_count = 0; if ( have_rows('modules') ) : while ( have_rows('modules') ) : the_row('modules'); ?>
		
	<?php if ( get_row_layout() == 'main_slider' ) : include TD . '/parts/organisms/main-slider.php'; endif; ?>
	<?php if ( get_row_layout() == 'banner' ) : include TD . '/parts/organisms/banner.php'; endif; ?>
	<?php if ( get_row_layout() == 'products_carousel' ) : include TD . '/parts/organisms/products-carousel.php'; endif; ?>
	<?php if ( get_row_layout() == 'categories_carousel' ) : include TD . '/parts/organisms/categories-carousel.php'; endif; ?>
	<?php if ( get_row_layout() == 'subscription_form' ) : include TD . '/parts/organisms/subscription-form.php'; endif; ?>

<?php $module_count++; endwhile; endif; ?>