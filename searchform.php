<?php
/**
 * A labelled search form; IDs remain unique when multiple forms are rendered.
 *
 * @package Sosyal_Medya
 */
$sosyal_medya_search_id = wp_unique_id( 'sosyal-medya-search-' );
?>
<form role="search" aria-label="<?php esc_attr_e( 'Site araması', 'sosyal-medya' ); ?>" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $sosyal_medya_search_id ); ?>">
		<?php esc_html_e( 'Aranacak sözcükler', 'sosyal-medya' ); ?>
		<input type="search" id="<?php echo esc_attr( $sosyal_medya_search_id ); ?>" class="search-field" name="s" value="<?php echo esc_attr( get_search_query( false ) ); ?>">
	</label>
	<button type="submit"><?php esc_html_e( 'Ara', 'sosyal-medya' ); ?></button>
</form>
