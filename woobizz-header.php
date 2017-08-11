<?php
/**
* Plugin Name: Woobizz Header 
* Plugin URI: https://woobizz.com
* Description: Woocommerce Storefront Header Customiser
* Author: Woobizz
* Author URI: https://woobizz.com
* Version: 1.0.0
* Text Domain: woobizz-header
* Domain Path: /languages/
*/
 if (!defined('ABSPATH')) {
    die;
} 
define('WOOBIZZHEADER', 'woobizzheader');
/** Include the Whitelabel plugin */
include('admin/header-admin-page.php' );
/** Include the $options array */
include( 'admin/header-options.php' );
/** Include the Custom CSS Variables */
include( 'admin/header-functions.php' );
/** Create the Options Page */
$options_page = new WoobizzHeaderOptions( 'WooBizz Header', 'woobizz-header', WOOBIZZHEADER, 'WooBizz', null, 'read', null, true, false, true, $options );
function woobizz_header_submenu(){
	//add_submenu_page($parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function);
	add_submenu_page( 'woobizz', '', 'Woobizz Header','manage_options', 'woobizz-header');
}
add_action( 'admin_menu', 'woobizz_header_submenu',10);
