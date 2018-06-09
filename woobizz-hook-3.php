<?php
/*
Plugin Name: Woobizz Hook 3 
Plugin URI: http://woobizz.com
Description: Disable emojis on wordpress
Author: WOOBIZZ.COM
Author URI: http://woobizz.com
Version: 1.0.1
Text Domain: woobizzhook3
Domain Path: /lang/
*/
//Prevent direct acces
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Load translation
add_action( 'plugins_loaded', 'woobizzhook3_load_textdomain' );
function woobizzhook3_load_textdomain() {
  load_plugin_textdomain( 'woobizzhook3', false, basename( dirname( __FILE__ ) ) . '/lang' ); 
}
//Add Hook 3
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 