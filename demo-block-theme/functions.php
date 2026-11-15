<?php
/**
 * Demo Block Theme theme functions.
 *
 * @package demo-block-theme
 */

if ( ! function_exists( 'demo_block_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for WordPress features.
	 */
	function demo_block_theme_setup() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'responsive-embeds' );
	}
}
add_action( 'after_setup_theme', 'demo_block_theme_setup' );

