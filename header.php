<?php
/**
 * Site header.
 *
 * @package Sosyal_Medya
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e( 'İçeriğe geç', 'sosyal-medya' ); ?></a>
<header class="site-header">
	<div class="header-inner">
		<?php the_custom_logo(); ?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php if ( get_bloginfo( 'description' ) ) : ?>
			<p class="site-description"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
		<?php endif; ?>
		<nav aria-label="<?php esc_attr_e( 'Ana menü', 'sosyal-medya' ); ?>">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'primary-menu',
						'depth'          => 1,
						'fallback_cb'    => false,
					)
				);
			} else {
				?>
				<ul class="primary-menu">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Ana sayfa', 'sosyal-medya' ); ?></a></li>
					<?php foreach ( sosyal_medya_community_links() as $community_link ) : ?>
						<li><a href="<?php echo esc_url( $community_link['url'] ); ?>"><?php echo esc_html( $community_link['label'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
				<?php
			}
			?>
		</nav>
	</div>
</header>
<div class="site-layout">
