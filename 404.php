<?php
/**
 * Not found.
 *
 * @package Sosyal_Medya
 */
get_header();
?>
<main id="main-content" class="site-main" tabindex="-1">
	<section class="no-results">
		<h1><?php esc_html_e( 'Sayfa bulunamadı', 'sosyal-medya' ); ?></h1>
		<p><?php esc_html_e( 'Bağlantı değişmiş olabilir. Arama yapabilir veya ana sayfaya dönebilirsiniz.', 'sosyal-medya' ); ?></p>
		<?php get_search_form(); ?>
		<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Ana sayfaya dön', 'sosyal-medya' ); ?></a></p>
	</section>
</main>
<?php
get_sidebar();
get_footer();
