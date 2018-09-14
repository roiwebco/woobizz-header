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
// The prefix Name
define('WOOBIZZHEADER', 'woobizzheader');
// Include all sections php files
foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/*.php" ) as $file ) {
    include_once $file;
}
// Include all sections php files
foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/sections/*.php" ) as $file ) {
    include_once $file;
}
// Include all sections php files
foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/sidebars/*.php" ) as $file ) {
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
// ADD OPTIONS AND SUBMENU
$options_page = new WoobizzHeaderOptions( 'WooBizz Header', 'woobizz-header', WOOBIZZHEADER, 'woobizz', null, 'read', null, true, false, true, $options );