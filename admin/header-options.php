<?php

	//WOOBIZZ HEADER PLUGIN (options.php)
	

/* 	File Paths
	================================================= */
	$imgurl = get_stylesheet_directory_uri().'/admin/images/';
	//Access the WordPress Pages via an Array
	$pages = array();
	$pages_obj = get_pages('sort_column=post_parent,menu_order');  
	foreach ( $pages_obj as $key ) { 
		$pages[$key->ID] = ucwords($key->post_title); 
	}
	
	
	//Access the WordPress Pages via an Array
	$tags = array();
	$tags_obj = get_tags('orderby=name&hide_empty=false&get=all');
	foreach ( $tags_obj as $key ) { 
		$tags[$key->term_id ] = ucwords($key->name);
	}
	
	
	//Access the WordPress Categories via an Array
	$categories = array();  
	$categories_obj = get_categories('hide_empty=0');
	foreach ( $categories_obj as $key ) {
		$categories[$key->cat_ID] = ucwords($key->cat_name);
	}
	
	
/*	Start Admin Options 
	
	================================================= */
	
	$options = array();
							
	//START HEADER SECTION -------------------------------------------
	$options[] = array( "name" => __('1.- Header Options','woobizz-header'),
						"type" => "section");	
	
	//HEADER BACKGROUND OPTIONS--------------------------------------------------------------
    $options[] = array("type" => "divider");
	$options[] = array( "name" => __('1.- Header Options','woobizz-header'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-header"));
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "1.1 HEADER CONTENT DISPLAY",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
	//Logo Position
	$options[] = array( "name" => __("Logo Position","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogoposition",
				"class" => "tiny first",
				"std" => 10,
				"min" => 1,
				"max" => 80,
				"suffix" => "",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Float Logo","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogofloat",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Initial",
					4 => "Inherit",
				));
	$options[] = array( "name" => __("Clear Logo","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogoclear",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Both",
					4 => "Initial",
					5 => "Inherit",
				));				
	$options[] = array( "name" => __("Hide Logo ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogodisplay",
				"class" => "tiny last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
	//-----------------------------------------------------------------
	//Branding Text Position
	$options[] = array( "name" => __("Branding Position","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingtextposition",
				"class" => "tiny first",
				"std" => 20,
				"min" => 1,
				"max" => 80,
				"suffix" => "",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Float Branding","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingtextfloat",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Initial",
					4 => "Inherit",
				));	
	$options[] = array( "name" => __("Clear Branding","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingclear",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Both",
					4 => "Initial",
					5 => "Inherit",
				));						
	$options[] = array( "name" => __("Hide Branding?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingdisplay",
				"class" => "tiny last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));			
	//-----------------------------------------------------------------	
	//Secondary Menu Position
	$options[] = array( "name" => __("S. Menu Position","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenuposition",
				"class" => "tiny first",
				"std" => 30,
				"min" => 1,
				"max" => 80,
				"suffix" => "",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Float S. Menu","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenufloat",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Initial",
					4 => "Inherit",
				));	
	$options[] = array( "name" => __("Clear S. Menu","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenuclear",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Both",
					4 => "Initial",
					5 => "Inherit",
				));						
	$options[] = array( "name" => __("Hide S. Menu","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenudisplay",
				"class" => "tiny last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
	//-----------------------------------------------------------------	
	//Search Position
	$options[] = array( "name" => __("Search Position","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchposition",
				"class" => "tiny first",
				"std" => 40,
				"min" => 1,
				"max" => 80,
				"suffix" => "",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Float Search","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchfloat",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Initial",
					4 => "Inherit",
				));	
	$options[] = array( "name" => __("Clear Search","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchclear",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Both",
					4 => "Initial",
					5 => "Inherit",
				));						
	$options[] = array( "name" => __("Hide Search","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchdisplay",
				"class" => "tiny last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));
	//-----------------------------------------------------------------	
	//Primary Menu Position
	$options[] = array( "name" => __("P. Menu Position","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenuposition",
				"class" => "tiny first",
				"std" => 50,
				"min" => 1,
				"max" => 80,
				"suffix" => "",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Float P. Menu","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenufloat",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Initial",
					4 => "Inherit",
				));	
	$options[] = array( "name" => __("Clear P. Menu","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenuclear",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Both",
					4 => "Initial",
					5 => "Inherit",
				));						
	$options[] = array( "name" => __("Hide P. Menu","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenudisplay",
				"class" => "tiny last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
				));	
	//-----------------------------------------------------------------	
	//Phone Position
	$options[] = array( "name" => __("Phone Position","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneposition",
				"class" => "tiny first",
				"std" => 60,
				"min" => 1,
				"max" => 80,
				"suffix" => "",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Float Phone","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phonefloat",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Initial",
					4 => "Inherit",
				));	
	$options[] = array( "name" => __("Clear Phone","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneclear",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Both",
					4 => "Initial",
					5 => "Inherit",
				));						
	$options[] = array( "name" => __("Hide Phone","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneoptionsdisplay",
				"class" => "tiny last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));		

	//-----------------------------------------------------------------	
	//Lang Position
	$options[] = array( "name" => __("Language Position","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langposition",
				"class" => "tiny first",
				"std" => 60,
				"min" => 1,
				"max" => 80,
				"suffix" => "",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Float Language","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langfloat",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Initial",
					4 => "Inherit",
				));	
	$options[] = array( "name" => __("Clear Language","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langclear",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Both",
					4 => "Initial",
					5 => "Inherit",
				));						
	$options[] = array( "name" => __("Hide Language","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langoptionsdisplay",
				"class" => "tiny last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));			
					
	//-----------------------------------------------------------------	
	//Cart Position
	$options[] = array( "name" => __("Cart Position","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartposition",
				"class" => "tiny first",
				"std" => 70,
				"min" => 1,
				"max" => 80,
				"suffix" => "",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Float Cart","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartfloat",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Initial",
					4 => "Inherit",
				));	
	$options[] = array( "name" => __("Clear Cart","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartclear",
				"class" => "tiny",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "None",
					1 => "Left",
					2 => "Right",
					3 => "Both",
					4 => "Initial",
					5 => "Inherit",
				));						
	$options[] = array( "name" => __("Hide Cart","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartdisplay",
				"class" => "tiny last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
				));	
	//-----------------------------------------------------------------	
	$options[] = array("type" => "divider");
	
	$options[] = array( "name" => "1.2 HEADER BACKGROUND IMAGE & COLORS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");			
	//Bakground Image
	$options[] = array( "name" => __("Background Image","woobizz-header"),
				"desc" => __("Note: Image will always override color", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundimage",
				"class" => "medium first",
				"std" => null,
				"type" => "upload");
	//Background Color
	$options[] = array( "name" => __("Background Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundcolor",
				"class" => "medium last",
				"std" => '#2c2d33',
				"type" => "color");	
    //Background Size
    $options[] = array( "name" => __("Background Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundsize",
				"class" => "medium first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Contain",
					1 => "Cover",
					2 => "Inherit",
					3 => "Initial",
					));
	
	//Backgroud Repeat
	$options[] = array( "name" => __("Background Repeat","woobizz-header"),
				"desc" => __("X = Horizontal Y= Vertical", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundrepeat",
				"class" => "medium last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "No-Repeat",
					1 => "Repeat X & Y",
					2 => "Repeat X Only",
					3 => "Repeat Y Only",
					4 => "Repeat Round",
					5 => "Repeat Space",
					4 => "Inherit",
					5 => "Initial",
					
				));	
	//Background position			
	$options[] = array( "name" => __("Background Position","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundposition",
				"class" => "medium first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Left Top",
					1 => "Left Center",
					2 => "Left Bottom",
					3 => "Right Top",
					4 => "Right Center",
					5 => "Right Bottom",
					6 => "Center Top",
					7 => "Center Center",
					8 => "Center Bottom",
					9 => "Inherit",
					10=> "Initial",
					
				));	
	//Background Display			
	$options[] = array( "name" => __("Background Content Display","woobizz-header"),
				"desc" => __("Inline = Best for 1 column <br> Block = Best for 2 columns <br> None = Hide Header Content", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgrounddisplay",
				"class" => "medium last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Block",
					1 => "Inline",
					2 => "None",
										
				));				
				
	//Front End Color1
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "1.3 HEADER BACKGROUND GRADIENTS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");	
	$options[] = array( "name" => __("Background Color Gradient 1","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundgradient1",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");
	//Gradient1 Opacity
	$options[] = array( "name" => __("Gradient 1 Opacity","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundgradient1opacity",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 1,
				"suffix" => "",
				"increment" => 0.01,
				"type" => "number");			
	//Front End Color2
	$options[] = array( "name" => __("Background Color Gradient 2","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundgradient2",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");	
	//Gradient 2 Opacity			
	$options[] = array( "name" => __("Gradient 2 Opacity","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundgradient2opacity",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 1,
				"suffix" => "",
				"increment" => 0.01,
				"type" => "number");		
		
	//Header Background Margins & paddings
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "1.4 HEADER BACKGROUND MARGINS & PADDINGS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");			
	$options[] = array( "name" => __("Margin Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundmargintop",
				"class" => "medium first",
				"std" => 42,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Margin Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundmarginbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
				
	$options[] = array( "name" => __("Margin Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundmarginright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	
	$options[] = array( "name" => __("Margin Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundmarginleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
				
	//Background Paddings
	$options[] = array( "name" => __("Padding Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundpaddingtop",
				"class" => "medium first",
				"std" => 42,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Padding Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundpaddingbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
				
	$options[] = array( "name" => __("Padding Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundpaddingright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	
	$options[] = array( "name" => __("Padding Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundpaddingleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
				
	//Background Box Shadow
	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "1.5 HEADER BACKGROUND SHADOWS & BORDERS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");			
	$options[] = array( "name" => __("Shadow Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundshadowcolor",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Right Distance","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundshadowrightdistance",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Bottom Distance","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_backgroundshadowbottomdistance",
					"class" => "short first",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Spread","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_backgroundshadowspread",
					"class" => "short",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Size","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_backgroundshadowsize",
					"class" => "short last",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");
	$options[] = array( "name" => __("Border Bottom Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundborderbottomcolor",
				"class" => "short first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Border Bottom Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundborderbottomsize",
				"class" => "short",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Border Style","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_backgroundborderbottomstyle",
				"class" => "short lastt",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "dotted",
					1 => "dashed",
					2 => "solid",
					3 => "none",
					));

	//HEADER POSITION	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "1.6 HEADER SCROLL POSITION",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __("Header Position","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_scrolltype",
				"class" => "short lastt",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Static",
					1 => "Fixed everywhere",
					2 => "Fixed only pc",
					
					));
	$options[] = array("type" => "divider");
	
	//HEADER BRANDING OPTIONS------------------------------------------------------------------
	//START HEADER SECTION -------------------------------------------
	$options[] = array( "name" => __('2.-Branding Options','woobizz-header'),
						"type" => "section");	
	
	$options[] = array("type" => "divider");	
	$options[] = array( "name" => __('2.- Header Branding Options','woobizz-header'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-header"));
	//Branding Logo	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "2.1 BRANDING LOGO",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");	
	$options[] = array( "name" => __("Header Branding Logo","woobizz-header"),
				"desc" => __(""),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogo",
				"class" => "medium first",
				"std" => null,
				"type" => "upload");
	$options[] = array( "name" => __("Header Branding Favicon","woobizz-header"),
				"desc" => __(""),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingfavicon",
				"class" => "medium last",
				"std" => null,
				"type" => "upload");			
	//2.2 BRANDING LOGO STYLES OPTIONS 					
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "2.2 BRANDING LOGO STYLES",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");							
	$options[] = array( "name" => __("Border Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogobordersize",
				"class" => "tiny first",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
			
	$options[] = array( "name" => __("Border Style","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogoborderstyle",
				"class" => "tiny ",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "dotted",
					1 => "dashed",
					2 => "solid",
					3 => "none",
					));			
	
	$options[] = array( "name" => __("Border Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogobordercolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Border Radius","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogoborderradius",
				"class" => "tiny last",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	
	$options[] = array( "name" => __("Apply Shadow?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogoshadowapply",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));			
	$options[] = array( "name" => __("Shadow Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogoshadowcolor",
				"class" => "short",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Right Distance","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogoshadowrightdistance",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Bottom Distance","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_brandinglogoshadowbottomdistance",
					"class" => "short first",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Spread","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_brandinglogoshadowspread",
					"class" => "short",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Size","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_brandinglogoshadowsize",
					"class" => "short last",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");
	
	//END LOGO STYLES
	
	
	// 2.1 BRANDING LOGO WIDTH SIZE
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "2.3 BRANDING LOGO WIDTH SIZE",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
	
	$options[] = array( "name" => __("Logo Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogowidthtype",
				"class" => "medium first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					2 => "Auto",
					));
	$options[] = array( "name" => __("Logo Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogowidthsize",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => " | Auto",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Set Logo Max-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogomaxwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Logo Max-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogomaxwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Logo Max-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogomaxwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Set Logo Min-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogominwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Logo Min-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogominwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Logo Min-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogominwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	//Logo Margings
	// 2.1 BRANDING LOGO WIDTH SIZE
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "2.4 BRANDING LOGO MARGINS & PADDINGS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __("Logo Margin Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogomargintop",
				"class" => "medium first",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Logo Margin Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogomarginbottom",
				"class" => "medium last",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Logo Margin Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogomarginright",
				"class" => "medium first",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Logo Margin Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogomarginleft",
				"class" => "medium last",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	//Logo Paddings
	$options[] = array( "name" => __("Logo Padding Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogopaddingtop",
				"class" => "medium first",
				"std" => 42,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Logo Padding Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogopaddingbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
				
	$options[] = array( "name" => __("Logo Padding Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogopaddingright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Logo Padding Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandinglogopaddingleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	
	//Branding Margins
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "2.5 BRANDING TITLES MARGINS & PADDINGS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");	
	$options[] = array( "name" => __("Branding Margin Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingmargintop",
				"class" => "medium first",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Branding Margin Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingmarginbottom",
				"class" => "medium last",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Branding Margin Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingmarginright",
				"class" => "medium first",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Branding Margin Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingmarginleft",
				"class" => "medium last",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	//Branding Paddings
	$options[] = array( "name" => __("Branding Padding Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingpaddingtop",
				"class" => "medium first",
				"std" => 42,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Branding Padding Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingpaddingbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
				
	$options[] = array( "name" => __("Branding Padding Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingpaddingright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Branding Padding Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingpaddingleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	
	
	//2.3 BRANDING TITLES WIDTH SIZE-------------------------------------	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "2.6 BRANDING TITLES WIDTH",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
		
	$options[] = array( "name" => __("Titles Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingtitleswidthtype",
				"class" => "medium first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					2 => "Auto",
					));
	$options[] = array( "name" => __("Titles Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingtitleswidthsize",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => " | Auto",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Set Titles Max-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingtitlesmaxwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Titles Max-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingtitlesmaxwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Titles Max-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingtitlesmaxwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Set Titles Min-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingtitlesminwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Titles Min-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingtitlesminwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Titles Min-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingtitlesminwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	//2.7 Branding Title----------------------------------------------------------	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "2.7 BRANDING TITLE & DESCRIPTION",
				"type" => "html",
				"class" => "medium first",
				"std" => "");
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __("Branding Title Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingtitlecolor",
				"class" => "short first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Branding Title Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingtitlesize",
				"class" => "short",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Hide Title ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingtitledisplay",
				"class" => "short last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));							
	//Branding Description------------------------------------------------------
	$options[] = array( "name" => __("Description Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingdescriptioncolor",
				"class" => "short first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Description Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingdescriptionsize",
				"class" => "short",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Hide Description ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_brandingdescriptiondisplay",
				"class" => "short last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));
	//3.-SECONDARY MENU
	//START HEADER SECTION -------------------------------------------
	$options[] = array( "name" => __('3.-Secondary Menu','woobizz-header'),
						"type" => "section");	
	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __('3.- Header Secondary Menu','woobizz-header'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-header"));
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "3.1 SECONDARY MENU COLOR & BACKGROUND",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __("Menu Text Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenutextcolor",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Menu Background Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenutextbackgroundcolor",
				"class" => "medium",
				"std" => '#2c2d33',
				"type" => "color");
	$options[] = array( "name" => __("Background Border Radius","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenuborderradius",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	
	// SECONDARY MENU WIDTH SIZE-------------------------------------	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "SECONDARY MENU WIDTH SIZE",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __("Secondary Menu Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenuwidthtype",
				"class" => "medium first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					2 => "Auto",
					));
	$options[] = array( "name" => __("Secondary Menu Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenuwidthsize",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => " | Auto",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Set Secondary Menu Max-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenumaxwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));	
	$options[] = array( "name" => __("Secondary Menu Max-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenumaxwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					));				
	$options[] = array( "name" => __("Secondary Menu Max-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenumaxwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Set Secondary Menu Min-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenuminwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));	
	$options[] = array( "name" => __("Secondary Menu Min-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenuminwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					));				
	$options[] = array( "name" => __("Secondary Menu Min-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenuminwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	//2.2 SECONDARY MENU MARGINS & PADDINGS	-------------------------------------	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "3.2 SECONDARY MENU MARGINS & PADDINGS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");	
	$options[] = array( "name" => __("Margin Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenumargintop",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Margin Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenumarginbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Margin Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenumarginright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Margin Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenumarginleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	
	$options[] = array( "name" => __("Padding Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenupaddingtop",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Padding Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenupaddingbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Padding Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenupaddingright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Padding Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_smenupaddingleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	//------------------------------------------------------------------------
	// 4 SEARCH OPTIONS
	//START HEADER SECTION -------------------------------------------
	$options[] = array( "name" => __('4.-Search Options','woobizz-header'),
						"type" => "section");	
	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __('4.-Header Search Options','woobizz-header'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-header"));
	//4.1 SEARCH MARGINS & PADDINGS	-------------------------------------	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "4.1 SEARCH MARGINS & PADDINGS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");	
	$options[] = array( "name" => __("Margin Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchmargintop",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Margin Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchmarginbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Margin Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchmarginright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Margin Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchmarginleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	
	$options[] = array( "name" => __("Padding Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchpaddingtop",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Padding Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchpaddingbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Padding Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchpaddingright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Padding Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchpaddingleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
				
	//4.2 SEARCH COLOR & BACKGROUND-----------------------------------
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "4.2 SEARCH COLOR & BACKGROUND",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __("Search Text Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchtextcolor",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Search Background Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchbackgroundcolor",
				"class" => "medium last",
				"std" => '#2c2d33',
				"type" => "color");
	
	$options[] = array( "name" => __("Search Transparency","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchbackgroundtransparency",
				"class" => "short first",
				"std" => 0,
				"min" => 0,
				"max" => 1,
				"suffix" => "",
				"increment" => 0.01,
				"type" => "number");			
	$options[] = array( "name" => __("Search Border Radius","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchborderradius",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	
	// SEARCH WIDTH SIZE-------------------------------------	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "4.3 SEARCH WIDTH SIZE",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
		
	$options[] = array( "name" => __("Search Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchwidthtype",
				"class" => "medium first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					2 => "Auto",
					));
	$options[] = array( "name" => __("Search Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchwidthsize",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => " | Auto",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Set Search Max-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchmaxwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Search Max-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchmaxwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Search Max-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchmaxwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Set Search Min-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchminwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Search Min-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchminwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Search Min-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchminwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	
	//------------------------------------------------------------------------							
	//4.3 SEARCH BACKGROUND SHADOWS		
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "4.4 SEARCH BACKGROUND SHADOWS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");			
	$options[] = array( "name" => __("Shadow Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchshadowcolor",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Right Distance","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchshadowrightdistance",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Bottom Distance","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_searchshadowbottomdistance",
					"class" => "short first",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Spread","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_searchshadowspread",
					"class" => "short",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Size","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_searchshadowsize",
					"class" => "short last",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");
    //SEARCH ICON OPTIONS
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "4.5 SEARCH ICON ",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");			
	$options[] = array( "name" => __("Search Icon Background Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchiconbackgroundcolor",
				"class" => "short first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Search Icon Border Radius","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchiconborderradius",
				"class" => "short",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	
	$options[] = array( "name" => __("Search Icon Image","woobizz-header"),
				"desc" => __("Note: Image will always override color", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchiconimage",
				"class" => "short last",
				"std" => null,
				"type" => "upload");
	$options[] = array( "name" => __("Search Icon X-Position","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchiconxposition",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Search Icon Y-Position","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_searchiconyposition",
					"class" => "medium last",
					"std" => 0,
					"min" => 0,
					"max" => 100,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");				
					
	//4.3 SEARCH ICON BACKGROUND SHADOWS			
	$options[] = array( "name" => "4.6 SEARCH ICON BACKGROUND SHADOWS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");			
	$options[] = array( "name" => __("Shadow Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchiconshadowcolor",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Right Distance","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_searchiconshadowrightdistance",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Bottom Distance","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_searchiconshadowbottomdistance",
					"class" => "short first",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Spread","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_searchiconshadowspread",
					"class" => "short",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Size","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_searchiconshadowsize",
					"class" => "short last",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");			
				
	//-----------------------------------------------------------------------------			
	
	//HEADER WIDGETS OPTIONS
	
	//START HEADER SECTION -------------------------------------------
	$options[] = array( "name" => __('5.-Extra Widgets','woobizz-header'),
						"type" => "section");	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __('5.- Extra Widgets','woobizz-header'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-header"));
	// 5.1 PHONE OPTIONS
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __('5.1- Phone Options','woobizz-header'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-header"));
	$options[] = array("type" => "divider");
	// 5.1.1 PHONE WIDTH SIZE--------------------------------------
	$options[] = array( "name" => "5.1.1 PHONE WIDTH SIZE",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
		
	$options[] = array( "name" => __("Phone Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phonewidthtype",
				"class" => "medium first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					2 => "Auto",
					));
	$options[] = array( "name" => __("Phone Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phonewidthsize",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => " | Auto",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Set Phone Max-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phonemaxwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Phone Max-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phonemaxwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Phone Max-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phonemaxwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Set Phone Min-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneminwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Phone Min-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneminwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Phone Min-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneminwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	
	// 5.1.2 PHONE OPTIONS MARGINS & PADDINGS--------------------------------------
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "5.1.2 PHONE OPTIONS MARGINS & PADDINGS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __("Margin Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneoptionsmargintop",
				"class" => "medium first",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Margin Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneoptionsmarginbottom",
				"class" => "medium last",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Margin Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneoptionsmarginright",
				"class" => "medium first",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Margin Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneoptionsmarginleft",
				"class" => "medium last",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	
	$options[] = array( "name" => __("Padding Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneoptionspaddingtop",
				"class" => "medium first",
				"std" => 42,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Padding Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneoptionspaddingbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
				
	$options[] = array( "name" => __("Padding Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneoptionspaddingright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	
	$options[] = array( "name" => __("Padding Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phoneoptionspaddingleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");		
	
	//5.1.3 PHONE NUMBER & DESCRIPTION----------------------------------
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "5.1.3 PHONE NUMBER & DESCRIPTION",
				"type" => "html",
				"class" => "medium first",
				"std" => "");
				
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "Phone Number",
						"desc" => "",
						"id" => WOOBIZZHEADER."_woobizz_header_phonenumber",
						"class" => "medium first",
						"placeholder" => "Placeholder",
						"std" => null,
						"type" => "text");
	$options[] = array( "name" => __("Phone Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phonenumbercolor",
				"class" => "medium last",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Phone Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phonenumbersize",
				"class" => "medium first",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Hide Phone Number?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phonenumberdisplay",
				"class" => "medium last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));						
	$options[] = array( "name" => "Phone Description",
						"desc" => "",
						"id" => WOOBIZZHEADER."_woobizz_header_phonedescription",
						"class" => "medium first",
						"placeholder" => "Placeholder",
						"std" => null,
						"type" => "text");
	$options[] = array( "name" => __("Phone Description Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phonedescriptioncolor",
				"class" => "medium last",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Phone Description Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phonedescriptionsize",
				"class" => "medium first",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	$options[] = array( "name" => __("Hide Phone Description?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_phonedescriptiondisplay",
				"class" => "medium last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));
	//END PHONE OPTIONS-----------------------------------------------------------
    
	//------------------------------------------------------------
	// 5.2 LANGUAGES OPTIONS
	//------------------------------------------------------------
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __('5.2- Languages Options','woobizz-header'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-header"));
	$options[] = array("type" => "divider");
	// 5.1.1 LANGUAGE WIDTH SIZE--------------------------------------
	$options[] = array( "name" => "5.2.1 LANGUAGE WIDTH SIZE",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
		
	$options[] = array( "name" => __("Language Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langwidthtype",
				"class" => "medium first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					2 => "Auto",
					));
	$options[] = array( "name" => __("Language Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langwidthsize",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => " | Auto",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Set Language Max-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langmaxwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Language Max-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langmaxwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Language Max-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langmaxwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Set Language Min-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langminwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Language Min-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langminwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Language Min-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langminwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	
	// 5.1.2 LANGUAGE OPTIONS MARGINS & PADDINGS--------------------------------------
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "5.2.2 LANGUAGE OPTIONS MARGINS & PADDINGS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __("Margin Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langoptionsmargintop",
				"class" => "medium first",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Margin Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langoptionsmarginbottom",
				"class" => "medium last",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Margin Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langoptionsmarginright",
				"class" => "medium first",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Margin Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langoptionsmarginleft",
				"class" => "medium last",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	
	$options[] = array( "name" => __("Padding Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langoptionspaddingtop",
				"class" => "medium first",
				"std" => 42,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Padding Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langoptionspaddingbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
				
	$options[] = array( "name" => __("Padding Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langoptionspaddingright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	
	$options[] = array( "name" => __("Padding Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langoptionspaddingleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");		
	
	//5.1.3 LANGUAGE NUMBER & DESCRIPTION----------------------------------
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "5.2.3 LANGUAGE NUMBER & DESCRIPTION",
				"type" => "html",
				"class" => "medium first",
				"std" => "");
				
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "Language Number",
						"desc" => "",
						"id" => WOOBIZZHEADER."_woobizz_header_langnumber",
						"class" => "medium first",
						"placeholder" => "Placeholder",
						"std" => null,
						"type" => "text");
	$options[] = array( "name" => __("Language Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langnumbercolor",
				"class" => "medium last",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Language Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langnumbersize",
				"class" => "medium first",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Hide Language Number?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langnumberdisplay",
				"class" => "medium last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));						
	$options[] = array( "name" => "Language Description",
						"desc" => "",
						"id" => WOOBIZZHEADER."_woobizz_header_langdescription",
						"class" => "medium first",
						"placeholder" => "Placeholder",
						"std" => null,
						"type" => "text");
	$options[] = array( "name" => __("Language Description Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langdescriptioncolor",
				"class" => "medium last",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Language Description Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langdescriptionsize",
				"class" => "medium first",
				"std" => 20,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	$options[] = array( "name" => __("Hide Language Description?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_langdescriptiondisplay",
				"class" => "medium last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));
			
	
				
				
	//END LANGUAGE OPTIONS-----------------------------------------------------------
	
	// 6.- Primary Menu Options	
	// 6.1 PRIMARY MENU COLOR & BACKGROUND
	$options[] = array( "name" => __('6.-Primary Menu','woobizz-header'),
						"type" => "section");	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __('6.- Header Primary Menu','woobizz-header'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-header"));
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "6.1 PRIMARY MENU BACKGROUND & WIDTH",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
	
	$options[] = array( "name" => __("Primary Menu Background Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenubackgroundcolor",
				"class" => "short first",
				"std" => '#2c2d33',
				"type" => "color");	
				
	$options[] = array( "name" => __("Width Type ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenuwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					2 => "Auto",
					));
	$options[] = array( "name" => __("Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenuwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => " | Auto",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Set Max-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenumaxwidthdisplay",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Max-Width Type ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenumaxwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Min-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenumaxwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Set Min-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenuminwidthdisplay",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Min-Width Type ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenuminwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Min-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenuminwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	
	$options[] = array( "name" => "6.2 PRIMARY MENU TEXT ",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");	
	$options[] = array( "name" => __("Current Menu Text Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenucurrenttextcolor",
				"class" => "short first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Current Menu Background Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenucurrentbackgroundcolor",
				"class" => "short",
				"std" => '#2c2d33',
				"type" => "color");
	$options[] = array( "name" => __("Current Menu Border Radius","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenucurrentborderradius",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Current Border Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenucurrentbordercolor",
				"class" => "short first",
				"std" => '#2c2d33',
				"type" => "color");
	
	$options[] = array( "name" => __("Current Border Style","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenucurrentborderstyle",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Dotted",
					1 => "Dashed",
					2 => "Solid",
					3 => "None",
					
					));						
	$options[] = array( "name" => __("Current Border Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenucurrentbordersize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
				
	$options[] = array( "name" => __("All Menus Text Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenualltextcolor",
				"class" => "short first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("All Menus Background Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenuallbackgroundcolor",
				"class" => "short",
				"std" => '#2c2d33',
				"type" => "color");
	$options[] = array( "name" => __("All Menus Border Radius","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenuallborderradius",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("All Border Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenuallbordercolor",
				"class" => "short first",
				"std" => '#2c2d33',
				"type" => "color");
	$options[] = array( "name" => __("All Border Style","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenuallborderstyle",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Dotted",
					1 => "Dashed",
					2 => "Solid",
					3 => "None",
					
					));					
	$options[] = array( "name" => __("All Border Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenuallbordersize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");					
	$options[] = array( "name" => __("Menu Text Padding Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenutextpaddingtop",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Menu Text Padding Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenutextpaddingbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Menu Text Padding Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenutextpaddingright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Menu Text Padding Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenutextpaddingleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");		
					
	//2.2 PRIMARY MENU MARGINS & PADDINGS	-------------------------------------	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "6.3 PRIMARY MENU MARGINS & PADDINGS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");	
	$options[] = array( "name" => __("Margin Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenumargintop",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Margin Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenumarginbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Margin Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenumarginright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Margin Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenumarginleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	
	$options[] = array( "name" => __("Padding Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenupaddingtop",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Padding Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenupaddingbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Padding Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenupaddingright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Padding Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_pmenupaddingleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	//------------------------------------------------------------------------------------			
					
	/**
	$options[] = array( "name" => "Special Select Field",
				"desc" => "",
				"id" => WOOBIZZHEADER."_select_search",
				"class" => "medium first",
				"std" => 1,
				"type" => "select_search",
				"options" => array(
				0 => "First Option",
				1 => "Second Option",
				2 => "Third Option"
				));
	*/
	//CART OPTIONS
    $options[] = array( "name" => __('7.-Cart Options','woobizz-header'),
						"type" => "section");	
	// CART WIDTH SIZE-------------------------------------	
	
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __('7.- Header Cart Options','woobizz-header'),
						"type" => "title",
						"class" => "medium first",
						"desc" => __("", "woobizz-header"));
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "7.1 CART WIDTH SIZE",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __("Cart Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartwidthtype",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					2 => "Auto",
					));
	$options[] = array( "name" => __("Cart Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartwidthsize",
				"class" => "short",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => " | Auto",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Display Content","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartcontentdisplay",
				"class" => "short last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "block",
					1 => "inline",
					
					));			
	$options[] = array( "name" => __("Set Cart Max-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartmaxwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Cart Max-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartmaxwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Cart Max-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartmaxwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Set Cart Min-Width ?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartminwidthset",
				"class" => "short first",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));	
				
	$options[] = array( "name" => __("Cart Min-Width Type","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartminwidthtype",
				"class" => "short",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Pixel",
					1 => "Percent",
					
					));				
	$options[] = array( "name" => __("Cart Min-Width Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartminwidthsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 500,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	
	
	//Margins
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "7.2 CART MARGINS & PADDINGS",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");			
	$options[] = array( "name" => __("Margin Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartmargintop",
				"class" => "medium first",
				"std" => 42,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Margin Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartmarginbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
				
	$options[] = array( "name" => __("Margin Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartmarginright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	
	$options[] = array( "name" => __("Margin Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartmarginleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
				
	//Paddings
	$options[] = array( "name" => __("Padding Top","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartpaddingtop",
				"class" => "medium first",
				"std" => 42,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
				
	$options[] = array( "name" => __("Padding Bottom","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartpaddingbottom",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
				
	$options[] = array( "name" => __("Padding Right","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartpaddingright",
				"class" => "medium first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");			
	
	$options[] = array( "name" => __("Padding Left","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartpaddingleft",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
				
	//7.2 CART COLOR & BACKGROUND-----------------------------------
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "7.3 CART COLOR & BACKGROUND",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");
	$options[] = array( "name" => __("Cart Background Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartbgcolor",
				"class" => "short first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Cart Background Alpha","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartbgtransparency",
				"class" => "short ",
				"std" => 0,
				"min" => 0,
				"max" => 1,
				"suffix" => "",
				"increment" => 0.01,
				"type" => "number");					
	
		
	$options[] = array( "name" => __("Cart Border Radius","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartborderradius",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 100,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	

	$options[] = array( "name" => __("Cart Border Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartbordercolor",
				"class" => "short first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Cart Border Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartbordersize",
				"class" => "short",
				"std" => 0,
				"min" => 0,
				"max" => 50,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
	$options[] = array( "name" => __("Cart Border Style","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartborderstyle",
				"class" => "short lastt",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "dotted",
					1 => "dashed",
					2 => "solid",
					3 => "none",
					));	
	$options[] = array( "name" => __("Cart Price Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartpricecolor",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Hide Cart Price?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_hidecartprice",
				"class" => "medium last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));				
	$options[] = array( "name" => __("Cart Item(s) Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartitemscolor",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");						
	$options[] = array( "name" => __("Hide Cart Item?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_hidecartitem",
				"class" => "medium last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));	
	$options[] = array( "name" => __("Font Icon Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartfonticoncolor",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");						
	$options[] = array( "name" => __("Hide Font Icon?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartfonticondisplay",
				"class" => "medium last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					));					
					
	//CART Shadow---------------------------------------------------------------------
	$options[] = array("type" => "divider");
	$options[] = array( "name" => "7.4 CART BACKGROUND SHADOWS ",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");			
	$options[] = array( "name" => __("Shadow Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartshadowcolor",
				"class" => "medium first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Right Distance","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_cartshadowrightdistance",
				"class" => "medium last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
	$options[] = array( "name" => __("Bottom Distance","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_cartshadowbottomdistance",
					"class" => "short first",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Spread","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_cartshadowspread",
					"class" => "short",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Size","woobizz-header"),
					"desc" => __("", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_cartshadowsize",
					"class" => "short last",
					"std" => 0,
					"min" => 0,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");
	
	//END CART SHADOW------------------------------------------------------------------------	

	//START CART ICON IMAGE
	$options[] = array("type" => "divider");
	
	$options[] = array( "name" => "7.5 CART ICON IMAGE",
				"type" => "html",
				"std" => "");
	$options[] = array("type" => "divider");			
	//Bakground Image
	$options[] = array( "name" => __("Background Image","woobizz-header"),
				"desc" => __("Note: Image will always override color", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_carticon",
				"class" => "medium first",
				"std" => null,
				"type" => "upload");
	//END CART ICON IMAGE
	//CART Margins
	$options[] = array( "name" => __("Icon Top","woobizz-header"),
					"desc" => __("Min -200px, Default 0, Max 200px", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_carticonmargintop",
					"class" => "short",
					"std" => 0,
					"min" => -200,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");	
	$options[] = array( "name" => __("Icon Right","woobizz-header"),
					"desc" => __("Min -200px, Default 0, Max 200px", "woobizz-header"),
					"id" => WOOBIZZHEADER."_woobizz_header_carticonmarginright",
					"class" => "short last",
					"std" => 0,
					"min" => -200,
					"max" => 200,
					"suffix" => "px",
					"increment" => 1,
					"type" => "number");
	//EN CART MARGINS
	
	//START WIDGET CART---------------------------------------------------------
	
	$options[] = array("type" => "divider");
	
	$options[] = array( "name" => "7.6 WIDGET CART COLORS",
				"type" => "html",
				"class" => "medium first",
				"std" => "");
	$options[] = array( "name" => __("Hide Widget Cart?","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_widgetcartdisplay",
				"class" => "medium last",
				"std" => 0,
				"type" => "radio",
				"options" => array(
					0 => "Yes",
					1 => "Non",
					
					));					
	$options[] = array("type" => "divider");			
	$options[] = array( "name" => __("Background Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_widgetcartbackgroundcolor",
				"class" => "tiny first",
				"std" => '#2c2d33',
				"type" => "color");
	$options[] = array( "name" => __("Remove Text Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_widgetcartremovetextcolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");				
	$options[] = array( "name" => __("Item Title Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_widgetcartitemtitlecolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Item Price Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_widgetcartitempricecolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("View Cart Button Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_widgetcartviewbuttoncolor",
				"class" => "tiny first",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("View Cart Text Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_widgetcartviewtextcolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Checkout Button Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_widgetcartcheckoutbuttoncolor",
				"class" => "tiny",
				"std" => '#2c2d33',
				"type" => "color");	
	$options[] = array( "name" => __("Checkout Text Color","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizz_header_widgetcartcheckouttextcolor",
				"class" => "tiny last",
				"std" => '#2c2d33',
				"type" => "color");		
					
	//END WIDGET CART-----------------------------------------------------------
	
	//------------------------------------------------------------------------								
	//BACKUP
	$options[] = array( "name" => __('Header Back-up & Reset','woobizz-header'),
						"type" => "section");
	// Backup Field					
	$options[] = array( "name" => __("Header Back-up & Reset","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_textarea",
				"class" => "first",
				"type" => "backup");
	// Reset					
	$options[] = array( "name" => __("Reset All Options","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"class" => "first",
				"type" => "reset");			
	
	$options[] = array( "name" => __('Header Import & Export','woobizz-header'),
						"type" => "section");			
			
	$options[] = array( "name" => __("Export Options","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"class" => "first",
				"type" => "export");			
	
	// Import Field					
	$options[] = array( "name" => __("Import Options","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"class" => "first",
				"placeholder" => "Paste your export code here",
				"type" => "import");																									
																																			
?>