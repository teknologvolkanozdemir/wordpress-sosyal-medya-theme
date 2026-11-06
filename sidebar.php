<?php
/**
 * Search, community navigation and optional widgets.
 *
 * @package Sosyal_Medya
 */
?>
<aside class="sidebar" aria-label="<?php esc_attr_e( 'Topluluk ve araçlar', 'sosyal-medya' ); ?>">
	<section class="widget">
		<h2><?php esc_html_e( 'Sitede ara', 'sosyal-medya' ); ?></h2>
		<?php get_search_form(); ?>
	</section>
	<?php $sosyal_medya_links = sosyal_medya_community_links(); ?>
	<?php if ( $sosyal_medya_links ) : ?>
		<nav class="widget" aria-label="<?php esc_attr_e( 'Topluluk', 'sosyal-medya' ); ?>">
			<h2><?php esc_html_e( 'Topluluk', 'sosyal-medya' ); ?></h2>
			<ul>
				<?php foreach ( $sosyal_medya_links as $community_link ) : ?>
					<li><a href="<?php echo esc_url( $community_link['url'] ); ?>"><?php echo esc_html( $community_link['label'] ); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</nav>
	<?php endif; ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
