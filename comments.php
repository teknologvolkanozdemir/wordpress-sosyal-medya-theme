<?php
/**
 * WordPress-native comments and labelled comment form.
 *
 * @package Sosyal_Medya
 */
if ( post_password_required() ) {
	return;
}
?>
<section id="comments" class="comments-area" aria-label="<?php esc_attr_e( 'Yorumlar', 'sosyal-medya' ); ?>">
	<?php if ( have_comments() ) : ?>
		<h2>
			<?php
			printf(
				esc_html( _n( '%s yorum', '%s yorum', get_comments_number(), 'sosyal-medya' ) ),
				esc_html( number_format_i18n( get_comments_number() ) )
			);
			?>
		</h2>
		<ol class="comment-list">
			<?php wp_list_comments( array( 'style' => 'ol', 'short_ping' => true, 'avatar_size' => 48 ) ); ?>
		</ol>
		<?php the_comments_navigation(); ?>
	<?php endif; ?>
	<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p><?php esc_html_e( 'Bu paylaşım yorumlara kapalıdır.', 'sosyal-medya' ); ?></p>
	<?php endif; ?>
	<?php comment_form( array( 'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">', 'title_reply_after' => '</h2>' ) ); ?>
</section>
