<?php
/**
 * Site footer.
 *
 * @package Sosyal_Medya
 */
?>
</div>
<footer class="site-footer">
	<div class="footer-inner">
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Alt menü', 'sosyal-medya' ); ?>">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'footer-menu', 'depth' => 1, 'fallback_cb' => false ) ); ?>
			</nav>
		<?php endif; ?>
		<p><?php echo esc_html( get_bloginfo( 'name' ) ); ?> &mdash; <?php esc_html_e( 'Birlikte paylaş, birlikte keşfet.', 'sosyal-medya' ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
