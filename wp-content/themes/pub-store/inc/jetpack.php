<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Pub Store
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function pub_store_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'pub_store_jetpack_setup' );
