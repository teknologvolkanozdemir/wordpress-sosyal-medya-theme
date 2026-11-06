<?php
/**
 * Theme setup and assets.
 *
 * @package Sosyal_Medya
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function sosyal_medya_setup() {
	load_theme_textdomain( 'sosyal-medya', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-logo', array( 'flex-width' => true, 'flex-height' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus(
		array(
			'primary' => __( 'Ana menü', 'sosyal-medya' ),
			'footer'  => __( 'Alt menü', 'sosyal-medya' ),
		)
	);
}
add_action( 'after_setup_theme', 'sosyal_medya_setup' );

function sosyal_medya_assets() {
	wp_enqueue_style( 'sosyal-medya', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sosyal_medya_assets' );

function sosyal_medya_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Kenar çubuğu', 'sosyal-medya' ),
			'id'            => 'sidebar-1',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'sosyal_medya_widgets_init' );

/**
 * Use component URLs rather than assuming BuddyPress directory slugs.
 */
function sosyal_medya_community_links() {
	$links = array();
	if ( ! function_exists( 'bp_is_active' ) ) {
		return $links;
	}
	$components = array(
		'activity' => array( 'bp_get_activity_directory_permalink', __( 'Etkinlik akışı', 'sosyal-medya' ) ),
		'members'  => array( 'bp_get_members_directory_permalink', __( 'Üyeler', 'sosyal-medya' ) ),
		'groups'   => array( 'bp_get_groups_directory_permalink', __( 'Gruplar', 'sosyal-medya' ) ),
	);
	foreach ( $components as $component => $details ) {
		if ( bp_is_active( $component ) && function_exists( $details[0] ) ) {
			$url = call_user_func( $details[0] );
			if ( $url ) {
				$links[] = array( 'url' => $url, 'label' => $details[1] );
			}
		}
	}
	return $links;
}
