<?php
/**
 * Molecules: Social Links
 *
 * @package ARMIX
 */

$social_links = new ARMIX\Social_Links();
$social_links = $social_links->get_array();

?>
<nav class="<?php echo esc_attr( $class ); ?> social-links">
	<ul class="social-links__list">
		<?php foreach ( $social_links as $social_link ) : ?>
		<li class="social-links__item">
			<a href="<?php the_field( $social_link . '_link', 'option' ); ?>" class="social-links__link social-links__<?php echo esc_attr( $social_link ); ?>">
				<img class="social-links__icon" src="<?php echo esc_attr( TDU ); ?>/images/<?php echo esc_attr( $social_link ); ?>.svg" />
			</a>
		</li>
		<?php endforeach ?>
	</ul>
</nav>
<?php
unset( $class );
