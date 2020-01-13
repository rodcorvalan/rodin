<?php
/**
 * Template Name: Basic
 *
 * @package ARMIX
 */

?>

<?php get_header(); ?>

<div class="template-basic">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : ?>

			<?php the_post(); ?>

			<div class="template-basic__inner">
		
				<div class="template-basic__heading">
					<h1 class="template-basic__title"><?php the_title(); ?></h1>
				</div>

				<div class="template-basic__content">
					<?php the_content(); ?>
				</div>

			</div>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>

<?php
