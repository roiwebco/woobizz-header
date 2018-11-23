<?php
/**
* Plugin Name: Woobizz Header 
* Plugin URI: https://woobizz.com
* Description: WooCommerce Storefront Header Customiser
* Author: WOOBIZZ
* Author URI: https://woobizz.com
* Version: 1.0.3
* Text Domain: woobizz-header
* Domain Path: /lang/
*/
//Prevent direct acces
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Load translation
add_action( 'plugins_loaded', 'woobizz_header_load_textdomain' );
function woobizz_header_load_textdomain() {
  load_plugin_textdomain( 'woobizz-header', false, basename( dirname( __FILE__ ) ) . '/lang' ); 
}
require_once( dirname(__FILE__) . '/admin/includes/kirki.php');
require_once( dirname(__FILE__) . '/admin/sections/ls-section.php');
require_once( dirname(__FILE__) . '/admin/sections/ms-section.php');
require_once( dirname(__FILE__) . '/admin/sections/ss-section.php');
require_once( dirname(__FILE__) . '/admin/sections/gs-section.php');

// Include all sections php files
foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/*.php" ) as $file ) {
    include_once $file;
}

//Include all functions php files
foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/functions/*.php" ) as $file ) {
    include_once $file;
}
//Include all functions php files
foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/options/*.php" ) as $file ) {
    include_once $file;
}

function my_customize_preview_js() {
		wp_enqueue_script( 'customizer-preview', plugin_dir_url( __FILE__ ) . 'admin/js/customize-ls-preview.js', array( 'customize-preview' ), '20170422', true );
	}
add_action( 'customize_preview_init', 'my_customize_preview_js' );