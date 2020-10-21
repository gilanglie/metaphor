<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Theme functions and definitions
 */

if ( ! defined( 'US_ACTIVATION_THEMENAME' ) ) {
	define( 'US_ACTIVATION_THEMENAME', 'Zephyr' );
}

global $us_theme_supports;
$us_theme_supports = array(
	'plugins' => array(
		'js_composer' => 'plugins-support/js_composer/js_composer.php',
		'Ultimate_VC_Addons' => 'plugins-support/Ultimate_VC_Addons.php',
		'revslider' => 'plugins-support/revslider.php',
		'contact-form-7' => NULL,
		'woocommerce' => 'plugins-support/woocommerce.php',
		'tablepress' => 'plugins-support/tablepress.php',
		'tiny_mce' => 'plugins-support/tiny_mce.php',
		'post_views_counter' => 'plugins-support/post_views_counter.php',
		'the-events-calendar' => 'plugins-support/the_events_calendar.php',
	),
	// Include plugins that relate to translations and can be used in helpers.php
	'translate_plugins' => array(
		'wpml' => 'plugins-support/wpml.php',
		'polylang' => 'plugins-support/polylang.php',
	),
);

require dirname( __FILE__ ) . '/common/framework.php';
