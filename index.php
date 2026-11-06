<?php
/**
 * Posts, archives and search results.
 *
 * @package Sosyal_Medya
 */
get_header();
?>
<main id="main-content" class="site-main" tabindex="-1">
	<header class="page-header">
		<?php if ( is_search() ) : ?>
			<h1><?php printf( esc_html__( 'Arama sonuçları: %s', 'sosyal-medya' ), esc_html( get_search_query( false ) ) ); ?></h1>
		<?php elseif ( is_archive() ) : ?>
			<?php the_archive_title( '<h1>', '</h1>' ); ?>
			<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
		<?php else : ?>
			<h1><?php echo esc_html( is_home() && get_option( 'page_for_posts' ) ? get_the_title( get_option( 'page_for_posts' ) ) : __( 'Son paylaşımlar', 'sosyal-medya' ) ); ?></h1>
		<?php endif; ?>
	</header>
	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content' );
		endwhile;
		the_posts_pagination(
			array(
				'prev_text' => __( 'Önceki sayfa', 'sosyal-medya' ),
				'next_text' => __( 'Sonraki sayfa', 'sosyal-medya' ),
			)
		);
		?>
	<?php else : ?>
		<section class="no-results">
			<h2><?php esc_html_e( 'İçerik bulunamadı', 'sosyal-medya' ); ?></h2>
			<p><?php esc_html_e( 'Başka sözcüklerle aramayı deneyebilirsiniz.', 'sosyal-medya' ); ?></p>
			<?php get_search_form(); ?>
		</section>
	<?php endif; ?>
</main>
<?php
get_sidebar();
get_footer();
