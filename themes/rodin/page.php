<?php
/**
 * Page
 *
 * @package ARMIX
 */

?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'parts/organisms/page-cover' ); ?>

	<?php get_template_part( 'parts/organisms/basic-content' ); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
