<?php
/**
 * Molecules: Category Menu
 *
 * @package ARMIX
 */

$menu_name = 'category_menu';
$locations = get_nav_menu_locations();
$category_menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
$category_menu_items = wp_get_nav_menu_items( $category_menu->term_id, array( 'order' => 'DESC' ) );
?>


<nav class="category-menu">
	<div class="category-menu__inner">

		<div class="category-menu__selector">
			<div class="category-menu__selector-inner">
			<?php foreach ( $category_menu_items as $item ) : ?>
				<?php if ( 0 == $item->post_parent ) : ?>
					<div class="category-menu__selector-item" data-menu-id="<?php echo esc_attr( $item->ID ); ?>">
						<a href="#" class="category-menu__selector-link"><?php echo esc_attr( $item->title ); ?></a>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
			</div>
		</div>

		<div class="category-menu__contents">
			<?php foreach ( $category_menu_items as $item ) : ?>
				<?php if ( 0 == $item->post_parent ) : ?>
				<div class="category-menu__content category-menu__content--menu-id-<?php echo esc_attr( $item->ID ); ?>">
				
					<div class="category-menu__content-inner">

						<div class="category-menu__heading">
							<?php if ( get_field( 'subtitle', $item ) ) : ?>
							<span class="category-menu__content-subtitle"><?php echo esc_attr( get_field( 'subtitle', $item ) ); ?></span>
							<?php endif; ?>
							<span class="category-menu__content-title"><?php echo esc_attr( $item->title ); ?></span>
						</div>
						
						<?php $current_term_id = get_post_meta( $item->ID, $key = '_menu_item_object_id', true ); ?>
						<?php $thumbnail_id = get_term_meta( $current_term_id, 'thumbnail_id', true ); ?>
						<?php $image_url = wp_get_attachment_url( $thumbnail_id ); ?>
						
						<div class="category-menu__content-image-wrapper">
							<img class="category-menu__content-image" src="<?php echo esc_url( $image_url ); ?>">
						</div>

						<ul class="category-menu__list category-menu__list--level-two">
							<?php foreach ( $category_menu_items as $item_level_two ) : ?>
								<?php if ( $item_level_two->menu_item_parent == $item->ID ) : ?>
								<li class="category-menu__item category-menu__item--level-two">
									<a href="<?php echo esc_url( $item_level_two->url ); ?>" class="category-menu__link category-menu__link--level-two"><?php echo esc_attr( $item_level_two->title ); ?></a>
									<ul class="category-menu__list category-menu__list--level-three">
										<?php foreach ( $category_menu_items as $item_level_three ) : ?>
											<?php if ( $item_level_three->menu_item_parent == $item_level_two->ID ) : ?>
											<li class="category-menu__item category-menu__item--level-three">
												<a href="<?php echo esc_url( $item_level_three->url ); ?>" class="category-menu__link category-menu__link--level-three"><?php echo esc_attr( $item_level_three->title ); ?></a>
											</li>
											<?php endif; ?>
										<?php endforeach; ?>
									</ul>
								</li>
								<?php endif; ?>
							<?php endforeach; ?>
						</ul>

						<a href="<?php echo esc_url( $item->url ); ?>" class="category-menu__content-read-more">
							<span class="category-menu__content-read-more-text">Ver más</span>
							<img class="category-menu__content-read-more-icon" src="<?php echo esc_attr( TDU ); ?>/images/more.svg">
						</a>
					
					</div>

				</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</div>
</nav>
