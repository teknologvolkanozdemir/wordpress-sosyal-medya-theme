<?php
/**
 * Single posts and pages.
 *
 * @package Sosyal_Medya
 */
get_header();
?>
<main id="main-content" class="site-main" tabindex="-1">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content' );
		if ( is_singular( 'post' ) ) {
			the_post_navigation(
				array(
					'prev_text' => __( 'Önceki paylaşım: %title', 'sosyal-medya' ),
					'next_text' => __( 'Sonraki paylaşım: %title', 'sosyal-medya' ),
				)
			);
		}
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	endwhile;
	?>
</main>
<?php
get_sidebar();
get_footer();
