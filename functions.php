<?php

/**
 * Simple WordPress child theme for development purposes
 *
 * @author Dzikri Aziz <kucrut@kucrut.org>
 * @license GPLv2
 */
final class Kc_Child_Theme {

	const VERSION = '0.1.1';


	/**
	 * Setup our child theme
	 */
	public static function setup() {
		add_action( 'wp_enqueue_scripts', array( __CLASS__, '_enqueue_parent_style' ), 7 );
	}


	/**
	 * Enqueue parent theme's style
	 *
	 */
	public static function _enqueue_parent_style() {
		wp_enqueue_style(
			'parent-theme',
			get_template_directory_uri() . '/style.css',
			false,
			self::VERSION
		);
	}
}
add_action( 'after_setup_theme', array( 'Kc_Child_Theme', 'setup' ) );
