<?php
//ADD WOOBIZZ MAIN MENU
if (!function_exists( 'woobizz_main_menu' ) ) {
		//echo "function no existe";
		function woobizz_main_menu() {
		//add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);
		add_menu_page('Woobizz', 'Woobizz', 'manage_options', 'woobizz','woobizz_welcome_page','dashicons-admin-settings',0);
		}
	add_action( 'admin_menu', 'woobizz_main_menu',0);
}
//WELCOME PAGE
if (!function_exists( 'woobizz_welcome_page' ) ) {
	function woobizz_welcome_page(){
		$woobizz_sidebar_welcome_title= __( 'Welcome to Woobizz!', 'woobizz-sidebar' );
		$woobizz_sidebar_welcome_description= __( 'Woobizz give you the right tools to create great e-commerce sites with wordpress and woocommerce', 'woobizz-sidebar' );
		$woobizz_sidebar_welcome_link= __( 'To find more please visit', 'woobizz-sidebar' );
		?>
		<div class="wrap woobizz-welcome">
			<h2><?php echo $woobizz_sidebar_welcome_title;?></h2>
			<p><?php echo $woobizz_sidebar_welcome_description;?></p>
			<p><?php echo $woobizz_sidebar_welcome_link;?> <a href="https://woobizz.com">woobizz.com</a></p>
		</div>
		<?php
		
		echo"<style>
		.woobizz-welcome{
			background:white;
			border:1px solid #dedede;
			padding:35px;
		}
			</style>";
			
	}
}
//ADD PLUGIN TITLE 
if (!function_exists( 'woobizz_show_header_plugin_title' ) ) {
	function woobizz_show_header_plugin_title() {
		if (strpos($_SERVER['REQUEST_URI'], "page=woobizz-header") !== false){
			echo"<style>#tab-list:before{content:'WooBizz Header'!important;text-transform: uppercase;margin:18px 18px 18px 18px;display:inherit;font-size:12px;</style>";
		}else{
		 //do nothing
		}
	}
	add_action ('in_admin_header','woobizz_show_header_plugin_title');
}