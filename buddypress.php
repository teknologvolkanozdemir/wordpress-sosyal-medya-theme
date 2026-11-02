<?php
/**
 * BuddyPress theme-compat wrapper. Component markup stays with the plugin.
 *
 * @package Sosyal_Medya
 */
get_header();
?>
<main id="main-content" class="site-main community-content" tabindex="-1">
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<header class="page-header">
			<h1><?php the_title(); ?></h1>
		</header>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
