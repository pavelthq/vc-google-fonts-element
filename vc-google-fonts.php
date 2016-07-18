<?php
/*
Plugin Name: Vc Google Font Element
Plugin URI: http://vc.wpbakery.com/
Description: Text element with google font
Version: 1.0
Author: WPBakery
Author URI: http://wpbakery.com
*/

if ( ! defined( 'ABSPATH' ) ) {
	die( '' ); // Don't call directly
}

add_action( 'vc_after_init', function () {
	vc_lean_map( 'vc_custom_google_fonts', null, dirname( __FILE__ ) . '/shortcode/vcmap.php' );
	require_once "shortcode/class.php";
} );
