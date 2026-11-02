<?php
/**
 * Shared post content.
 *
 * @package Sosyal_Medya
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<header class="entry-header">
		<?php $sosyal_medya_title = get_the_title() ? get_the_title() : __( 'Başlıksız paylaşım', 'sosyal-medya' ); ?>
		<?php if ( is_singular() ) : ?>
			<h1 class="entry-title"><?php echo esc_html( $sosyal_medya_title ); ?></h1>
		<?php else : ?>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo esc_html( $sosyal_medya_title ); ?></a></h2>
		<?php endif; ?>
		<?php if ( 'post' === get_post_type() ) : ?>
			<p class="entry-meta">
				<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
				&mdash; <?php the_author_posts_link(); ?>
			</p>
		<?php endif; ?>
	</header>
	<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="post-thumbnail"><?php the_post_thumbnail( 'large' ); ?></div>
	<?php endif; ?>
	<div class="entry-content">
		<?php
		if ( is_singular() ) {
			the_content();
			wp_link_pages( array( 'before' => '<nav aria-label="' . esc_attr__( 'İçerik sayfaları', 'sosyal-medya' ) . '">', 'after' => '</nav>' ) );
		} else {
			the_excerpt();
		}
		?>
	</div>
</article>
