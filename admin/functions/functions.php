<?php
//REMOVE STOREFRONT HEADER CONTENT
function woobizzheader_remove_storefront_content(){
    //add_filter("storefront_customizer_css", "__return_false");
    //add_filter("storefront_customizer_woocommerce_css", "__return_false");

    remove_action( "storefront_header", "storefront_skip_links",                         0);       
    remove_action( "storefront_header", "woobizz_storefront_header_logo",		        10);
    remove_action( "storefront_header", "storefront_site_branding",			            20);
    remove_action( "storefront_header", "storefront_secondary_navigation",		        30);
    remove_action( "storefront_header", "storefront_primary_navigation",		        50);
    remove_action( "storefront_header", "woobizz_storefront_header_content",		    70);
    remove_action( "storefront_header", "woobizz_storefront_header_lang",		        80);
    remove_action( "storefront_header", "storefront_product_search",		            40);
    remove_action( "storefront_header", "storefront_primary_navigation_wrapper",        42);
    remove_action( "storefront_header", "storefront_primary_navigation_wrapper_close",  68);
    remove_action( "storefront_header", "storefront_header_cart",                       60);
	remove_action( "woocommerce_after_single_product_summary", "storefront_single_product_pagination",30);

}
add_action("init","woobizzheader_remove_storefront_content");

//TRASFORM HEX TO RGB
function woobizzheader_hextorgb($hex) {
	$hex = str_replace("#", "", $hex);
	if(strlen($hex) == 3) {
	$r = hexdec(substr($hex,0,1).substr($hex,0,1));
	$g = hexdec(substr($hex,1,1).substr($hex,1,1));
	$b = hexdec(substr($hex,2,1).substr($hex,2,1));
	} else {
	$r = hexdec(substr($hex,0,2));
	$g = hexdec(substr($hex,2,2));
	$b = hexdec(substr($hex,4,2));
	}
	$rgb = array($r, $g, $b);
	return implode(",", $rgb); // returns the rgb values separated by commas
	//return $rgb; // returns an array with the rgb values
}

//ADD CUSTOM MENUS
function woobizzheader_register_my_menu() {
  register_nav_menu('woobizz-menu-1',__( 'Woobizz Menu 1' ));
  register_nav_menu('woobizz-menu-2',__( 'Woobizz Menu 2' ));
  register_nav_menu('woobizz-menu-3',__( 'Woobizz Menu 3' ));
}
add_action( 'init', 'woobizzheader_register_my_menu' );

//-------------------------------------------------------------------------
//WOOBIZZ CUSTOM WIDGET1 SIDEBAR
//-------------------------------------------------------------------------

function woobizzheader_custom_widget1() {
	$args = array(
				'id'            => 'woobizzheadercustomwidget1',
				'name'          => __( 'Woobizz Header Widget1', 'storefront' ),
				'description'   => 'Add your content here',
				'before_title'  => '<h2 class="widgettitle">',
				'before_title'   => '</h2>',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'before_widget'  => '</li>',
	);
	register_sidebar( $args );	
}
add_action( 'widgets_init', 'woobizzheader_custom_widget1',4);

//-------------------------------------------------------------------------
//WOOBIZZ CUSTOM WIDGET2 SIDEBAR
//-------------------------------------------------------------------------

function woobizzheader_custom_widget2() {
	$args = array(
				'id'            => 'woobizzheadercustomwidget2',
				'name'          => __( 'Woobizz Header Widget2', 'storefront' ),
				'description'   => 'Add your content here',
				'before_title'  => '<h2 class="widgettitle">',
				'before_title'   => '</h2>',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'before_widget'  => '</li>',
	);
	register_sidebar( $args );	
}
add_action( 'widgets_init', 'woobizzheader_custom_widget2',4);
//-------------------------------------------------------------------------
//WOOBIZZ CUSTOM SIDENAV1
//-------------------------------------------------------------------------

function woobizzheader_custom_sidenav1() {
	$args = array(
				'id'            => 'woobizzheadercustomsidenav1',
				'name'          => __( 'Woobizz Header Sidenav1', 'storefront' ),
				'description'   => 'Add your content here',
				'before_title'  => '<h2 class="widgettitle">',
				'before_title'   => '</h2>',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'before_widget'  => '</li>',
	);
	register_sidebar( $args );	
}
add_action( 'widgets_init', 'woobizzheader_custom_sidenav1',4);
//-------------------------------------------------------------------------
//WOOBIZZ CUSTOM SIDENAV2
//-------------------------------------------------------------------------

function woobizzheader_custom_sidenav2() {
	$args = array(
				'id'            => 'woobizzheadercustomsidenav2',
				'name'          => __( 'Woobizz Header Sidenav2', 'storefront' ),
				'description'   => 'Add your content here',
				'before_title'  => '<h2 class="widgettitle">',
				'before_title'   => '</h2>',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'before_widget'  => '</li>',
	);
	register_sidebar( $args );	
}
add_action( 'widgets_init', 'woobizzheader_custom_sidenav2',4);
//-------------------------------------------------------------------------
//WOOBIZZ UPDATE AJAX CART SMALL SCREEN
//-------------------------------------------------------------------------

function iconic_cart_count_fragments( $fragments ) {
    
    $fragments['div.woobizzheader-cart-count'] = '<div class="woobizzheader-cart-count">' . WC()->cart->get_cart_contents_count() . '</div>';
    
    return $fragments;
    
}
add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );

function megamenu_add_theme_menu_principal_fraganza_1541241574($themes) {
    $themes["menu_principal_fraganza_1541241574"] = array(
        'title' => 'Menu principal fraganza',
        'container_background_from' => 'rgb(93, 93, 93)',
        'container_background_to' => 'rgb(93, 93, 93)',
        'arrow_up' => 'dash-f343',
        'arrow_down' => 'dash-f347',
        'arrow_left' => 'dash-f341',
        'arrow_right' => 'dash-f345',
        'menu_item_background_from' => 'rgb(41, 41, 41)',
        'menu_item_background_to' => 'rgb(41, 41, 41)',
        'menu_item_background_hover_from' => 'rgb(254, 189, 105)',
        'menu_item_background_hover_to' => 'rgb(254, 189, 105)',
        'menu_item_link_font_size' => '16px',
        'menu_item_link_height' => '50px',
        'menu_item_link_color' => 'rgb(255, 255, 255)',
        'menu_item_link_color_hover' => 'rgb(93, 93, 93)',
        'menu_item_link_text_decoration_hover' => 'underline',
        'menu_item_link_padding_left' => '15px',
        'menu_item_border_color' => 'rgba(255, 255, 255, 0)',
        'menu_item_border_color_hover' => 'rgba(255, 255, 255, 0)',
        'menu_item_divider' => 'on',
        'menu_item_divider_color' => 'rgba(255, 255, 255, 0)',
        'panel_background_from' => 'rgb(255, 255, 255)',
        'panel_background_to' => 'rgb(255, 255, 255)',
        'panel_width' => 'body',
        'panel_inner_width' => '.col-full',
        'panel_border_color' => 'rgba(44, 45, 51, 0)',
        'panel_border_radius_bottom_left' => '3px',
        'panel_border_radius_bottom_right' => '3px',
        'panel_header_color' => 'rgb(97, 101, 107)',
        'panel_header_text_transform' => 'none',
        'panel_header_font_weight' => 'normal',
        'panel_header_padding_bottom' => '15px',
        'panel_header_margin_bottom' => '10px',
        'panel_header_margin_left' => '20px',
        'panel_header_border_color' => 'rgb(191, 191, 191)',
        'panel_widget_padding_top' => '5px',
        'panel_widget_padding_bottom' => '5px',
        'panel_font_size' => '14px',
        'panel_font_color' => 'rgb(67, 69, 75)',
        'panel_font_family' => 'inherit',
        'panel_second_level_font_color' => 'rgb(97, 101, 107)',
        'panel_second_level_font_color_hover' => 'rgb(67, 69, 75)',
        'panel_second_level_text_transform' => 'none',
        'panel_second_level_font' => 'inherit',
        'panel_second_level_font_size' => '16px',
        'panel_second_level_font_weight' => 'normal',
        'panel_second_level_font_weight_hover' => 'normal',
        'panel_second_level_text_decoration' => 'none',
        'panel_second_level_text_decoration_hover' => 'none',
        'panel_second_level_border_color' => 'rgb(191, 191, 191)',
        'panel_third_level_font_color' => 'rgb(97, 101, 107)',
        'panel_third_level_font_color_hover' => 'rgb(67, 69, 75)',
        'panel_third_level_font' => 'inherit',
        'panel_third_level_font_size' => '15px',
        'panel_third_level_text_decoration' => 'underline',
        'flyout_width' => 'auto',
        'flyout_menu_background_from' => 'rgb(255, 255, 255)',
        'flyout_menu_background_to' => 'rgb(255, 255, 255)',
        'flyout_menu_item_divider' => 'on',
        'flyout_menu_item_divider_color' => 'rgb(221, 221, 221)',
        'flyout_link_padding_left' => '15px',
        'flyout_link_padding_right' => '0px',
        'flyout_background_from' => 'rgba(44, 45, 51, 0)',
        'flyout_background_to' => 'rgba(44, 45, 51, 0)',
        'flyout_background_hover_from' => 'rgba(255, 255, 255, 0.05)',
        'flyout_background_hover_to' => 'rgba(255, 255, 255, 0.05)',
        'flyout_link_size' => '15px',
        'flyout_link_color' => 'rgb(97, 101, 107)',
        'flyout_link_color_hover' => 'rgb(67, 69, 75)',
        'flyout_link_family' => 'inherit',
        'responsive_breakpoint' => '767px',
        'shadow_vertical' => '1px',
        'shadow_blur' => '4px',
        'shadow_color' => 'rgba(0, 0, 0, 0.15)',
        'mobile_columns' => '1',
        'toggle_background_from' => 'rgb(67, 69, 75)',
        'toggle_background_to' => 'rgb(67, 69, 75)',
        'toggle_font_color' => 'rgb(255, 255, 255)',
        'mobile_background_from' => 'rgb(67, 69, 75)',
        'mobile_background_to' => 'rgb(67, 69, 75)',
        'mobile_menu_item_link_font_size' => '16px',
        'mobile_menu_item_link_color' => 'rgb(255, 255, 255)',
        'mobile_menu_item_link_text_align' => 'left',
        'mobile_menu_item_link_color_hover' => 'rgb(255, 255, 255)',
        'mobile_menu_item_background_hover_from' => 'rgb(93, 93, 93)',
        'mobile_menu_item_background_hover_to' => 'rgb(67, 69, 75)',
        'custom_css' => '#{$wrap} #{$menu} > li.mega-menu-item > a.mega-menu-link:after {
    font-size: 0.8em;
    font-weight: normal;
}
#{$wrap} #{$menu} .product_list_widget li img {
    max-width: 2.618em;
}
@include mobile {
    #{$wrap} {
        clear: both;
    }
}',
    );
    return $themes;
}
add_filter("megamenu_themes", "megamenu_add_theme_menu_principal_fraganza_1541241574");

function megamenu_add_theme_menu_secundario_fraganza_1541241823($themes) {
    $themes["menu_secundario_fraganza_1541241823"] = array(
        'title' => 'Menu secundario fraganza',
        'container_background_from' => 'rgba(0, 0, 0, 0)',
        'container_background_to' => 'rgba(0, 0, 0, 0)',
        'menu_item_background_hover_from' => 'rgba(0, 0, 0, 0)',
        'menu_item_background_hover_to' => 'rgba(0, 0, 0, 0)',
        'menu_item_link_text_decoration_hover' => 'underline',
        'panel_header_border_color' => '#555',
        'panel_widget_padding_left' => '0px',
        'panel_widget_padding_right' => '0px',
        'panel_widget_padding_top' => '0px',
        'panel_widget_padding_bottom' => '0px',
        'panel_font_size' => '14px',
        'panel_font_color' => '#666',
        'panel_font_family' => 'inherit',
        'panel_second_level_font_color' => '#555',
        'panel_second_level_font_color_hover' => '#555',
        'panel_second_level_text_transform' => 'uppercase',
        'panel_second_level_font' => 'inherit',
        'panel_second_level_font_size' => '16px',
        'panel_second_level_font_weight' => 'bold',
        'panel_second_level_font_weight_hover' => 'bold',
        'panel_second_level_text_decoration' => 'none',
        'panel_second_level_text_decoration_hover' => 'none',
        'panel_second_level_border_color' => '#555',
        'panel_third_level_font_color' => '#666',
        'panel_third_level_font_color_hover' => '#666',
        'panel_third_level_font' => 'inherit',
        'panel_third_level_font_size' => '14px',
        'flyout_link_size' => '14px',
        'flyout_link_color' => '#666',
        'flyout_link_color_hover' => '#666',
        'flyout_link_family' => 'inherit',
        'toggle_background_from' => '#222',
        'toggle_background_to' => '#222',
        'toggle_font_color' => '#ffffff',
        'mobile_background_from' => '#222',
        'mobile_background_to' => '#222',
        'mobile_menu_item_link_font_size' => '14px',
        'mobile_menu_item_link_color' => '#ffffff',
        'mobile_menu_item_link_text_align' => 'left',
        'mobile_menu_item_link_color_hover' => '#ffffff',
        'mobile_menu_item_background_hover_from' => '#333',
        'mobile_menu_item_background_hover_to' => '#333',
        'disable_mobile_toggle' => 'on',
        'custom_css' => '/** Push menu onto new line **/ 
#{$wrap} { 
    clear: both; 
}',
    );
    return $themes;
}
add_filter("megamenu_themes", "megamenu_add_theme_menu_secundario_fraganza_1541241823");
//Disable kirki loader
function kirki_demo_configuration_sample_styling( $config ) {
	return wp_parse_args( array(
		'disable_loader' => true,
        
	), $config );
}
add_filter( 'kirki_config', 'kirki_demo_configuration_sample_styling' );

//Hide some customizer Menus
function mytheme_customize_register( $wp_customize ) {
  
  $wp_customize->remove_section( 'title_tagline');
  $wp_customize->remove_section( 'colors');
  $wp_customize->remove_section( 'header_image');
  $wp_customize->remove_section( 'background_image');
  $wp_customize->remove_panel( 'nav_menus');
  $wp_customize->remove_section( 'static_front_page');
  $wp_customize->remove_section( 'custom_css');

}
//add_action( 'customize_register', 'mytheme_customize_register',50 );

function wpdocs_remove_nav_menus_panel( $components ) {
    $i = array_search( 'nav_menus', $components );
    if ( false !== $i ) {
        unset( $components[ $i ] );
    }
    return $components;
}
add_filter( 'customize_loaded_components', 'wpdocs_remove_nav_menus_panel' );

function allow_users_who_can_edit_posts_to_customize( $caps, $cap, $user_id ) {
  $required_cap = 'edit_posts';
  if ( 'customize' === $cap && user_can( $user_id, $required_cap ) ) {
    $caps = array( $required_cap );
  }
  return $caps;
}
add_filter( 'map_meta_cap', 'allow_users_who_can_edit_posts_to_customize', 10, 3 );


function woobizzheader_style_customizer() {
//Get options vars
$woobizzheader_medium_maxwidth= get_theme_mod('woobizzheader_medium_maxwidth');
$woobizzheader_medium_minwidth= get_theme_mod('woobizzheader_medium_minwidth');

$woobizzheader_medium_maxwidth= get_theme_mod('woobizzheader_medium_maxwidth');


        $tablet_margin_left = '-400px'; //Half of -$tablet_width
        $tablet_width = '800px';
        $tablet_height = '100vh';

        $mobile_margin_left = '-200px'; //Half of -$mobile_width
        $mobile_width = '400px';
        $mobile_height = '100vh';

        

?>
        <style>
            .wp-customizer .preview-mobile .wp-full-overlay-main {
                margin-left: <?php echo $mobile_margin_left; ?>;
                width: <?php echo $mobile_width; ?>;
                height: <?php echo $mobile_height; ?>;
            }

            .wp-customizer .preview-tablet .wp-full-overlay-main {
                margin-left: <?php echo $tablet_margin_left; ?>;
                width: <?php echo $tablet_width; ?>;
                height: <?php echo $tablet_height; ?>;
            }
            .wp-full-overlay-sidebar {
                
                min-width: 250px!important;
                width: 10%!important;
                
            }
            .wp-full-overlay.expanded {
                margin-left: 250px!important;
            }
            .wp-full-overlay {
                background: #f1f1f1!important;
            }
            .expanded .wp-full-overlay-footer {
                min-width: 249px!important;
                width: 17%!important;
            } 
            #customize-preview {
                box-shadow: 1px 1px 16px grey!important;
            } 
            .customize-partial-edit-shortcut button svg {
                
                background: red!important;
            }
            .customize-partial-icon button{
                background:red;
            }
            .customize-partial-edit-shortcut-large_brand_edit,
            .customize-partial-edit-shortcut-large_bg_edit,
            .customize-partial-edit-shortcut-large_menu1_edit,
            .customize-partial-edit-shortcut-large_menu2_edit,
            .customize-partial-edit-shortcut-large_menu3_edit,
            .customize-partial-edit-shortcut-large_cart_edit,
            .customize-partial-edit-shortcut-large_search_edit,
            .customize-partial-edit-shortcut-large_box1_edit,
            .customize-partial-edit-shortcut-large_box2_edit,
            .customize-partial-edit-shortcut-large_widget1_edit,
            .customize-partial-edit-shortcut-large_widget2_edit,

            .customize-partial-edit-shortcut-medium_brand_edit,
            .customize-partial-edit-shortcut-medium_bg_edit,
            .customize-partial-edit-shortcut-medium_menu1_edit,
            .customize-partial-edit-shortcut-medium_menu2_edit,
            .customize-partial-edit-shortcut-medium_menu3_edit,
            .customize-partial-edit-shortcut-medium_cart_edit,
            .customize-partial-edit-shortcut-medium_search_edit,
            .customize-partial-edit-shortcut-medium_box1_edit,
            .customize-partial-edit-shortcut-medium_box2_edit,
            .customize-partial-edit-shortcut-medium_widget1_edit,
            .customize-partial-edit-shortcut-medium_widget2_edit,

            .customize-partial-edit-shortcut-small_brand_edit,
            .customize-partial-edit-shortcut-small_bg_edit,
            .customize-partial-edit-shortcut-small_menu1_edit,
            .customize-partial-edit-shortcut-small_menu2_edit,
            .customize-partial-edit-shortcut-small_menu3_edit,
            .customize-partial-edit-shortcut-small_cart_edit,
            .customize-partial-edit-shortcut-small_search_edit,
            .customize-partial-edit-shortcut-small_box1_edit,
            .customize-partial-edit-shortcut-small_box2_edit,
            .customize-partial-edit-shortcut-small_widget1_edit,
            .customize-partial-edit-shortcut-small_widget2_edit
            {
                top: 0!important;
                left: 35px!important;
            }
            .iris-picker.iris-border {
                width: 225px!important;
            }
            .iris-slider {
                width: 15px!important;
                height: 182px!important;
                
            }
            .iris-square {
                width: 167px!important;
            }
            .iris-border .iris-picker-inner {
                top: 5px!important;
                right: 0px!important;
                left: 5px!important;
                bottom: 0px!important;
            }
            input, select {
                margin: 0!important;
                padding: 0!important;
            }
            .customize-control-kirki-slider .wrapper input[type=range] {
                background-color: #bbbbbb!important;
                width: 80%!important;
                height: 1px!important;
                border-radius: 0px!important;
                margin: 0 auto!important;
                outline: 0!important;
            }
            .wp-picker-container .wp-color-result.button{
                width: 82%!important;
                
            }
            .customize-control-kirki-slider .wrapper{
                padding:0!important;
            }
            .customize-control-kirki-slider .wrapper .slider-reset {
                top: -20px!important;
            } 

        </style>
<?php

    }

    add_action( 'customize_controls_print_styles', 'woobizzheader_style_customizer', 1 );