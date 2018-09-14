<?php
//--------------------------------------------------------------------------------------
// START ARRAY OPTIONS
//--------------------------------------------------------------------------------------
$options = array();
//--------------------------------------------------------------------------------------
// START 1 HEADER OPTIONS
//--------------------------------------------------------------------------------------
$options[] = array("type" => "divider");	
$options[] = array( "name" => __('1.- Header Options','woobizz-header'),
					"type" => "section");	
$options[] = array("type" => "divider");
$options[] = array( "name" => __('1.0 Header Width','woobizz-header'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-header"));
//Header Width			
$options[] = array( "name" => __("Header Width ","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_width",
			"class" => "short first",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "%",
			"increment" => 1,
			"type" => "number");

//Header MaxWidth			
$options[] = array( "name" => __("Header MaxWidth ","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_maxwidth",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 5000,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
//Header MinWidth			
$options[] = array( "name" => __("Header MinWidth ","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_minwidth",
			"class" => "short last",
			"std" => 0,
			"min" => 0,
			"max" => 5000,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");			

//Header Background				
$options[] = array( "name" => __('1.1 Header Background','woobizz-header'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-header"));
$options[] = array("type" => "divider");			
//Bakground Image
$options[] = array( "name" => __("Background Image","woobizz-header"),
			"desc" => __("Note: Image will always override color", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_backgroundimage",
			"class" => "medium first",
			"std" => null,
			"type" => "upload");
//Background Color
$options[] = array( "name" => __("Background Color","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_backgroundcolor",
			"class" => "medium last",
			"std" => '',
			"type" => "color");	
//Gradient 1
$options[] = array( "name" => __("Background Color Gradient 1","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_backgroundgradient1",
			"class" => "medium first",
			"std" => '',
			"type" => "color");
//Gradient1 Opacity
$options[] = array( "name" => __("Gradient 1 Opacity","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_backgroundgradient1opacity",
			"class" => "medium last",
			"std" => 0,
			"min" => 0,
			"max" => 1,
			"suffix" => "",
			"increment" => 0.01,
			"type" => "number");
//Gradient 2
$options[] = array( "name" => __("Background Color Gradient 2","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_backgroundgradient2",
			"class" => "medium first",
			"std" => '',
			"type" => "color");	
//Gradient 2 Opacity			
$options[] = array( "name" => __("Gradient 2 Opacity","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_backgroundgradient2opacity",
			"class" => "medium last",
			"std" => 0,
			"min" => 0,
			"max" => 1,
			"suffix" => "",
			"increment" => 0.01,
			"type" => "number");
//Background Size
$options[] = array( "name" => __("Background Size","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_backgroundsize",
			"class" => "short first",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Contain",
				1 => "Cover",
				2 => "Inherit",
				3 => "Initial",
				));
//Backgroud Repeat
$options[] = array( "name" => __("Background Repeat","woobizz-header"),
			"desc" => __("X = Horizontal Y= Vertical", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_backgroundrepeat",
			"class" => "short",
			"std" => 0,
			"type" => "select",
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
			"id" => WOOBIZZHEADER."_woobizzheader_backgroundposition",
			"class" => "short last",
			"std" => 0,
			"type" => "select",
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
//--------------------------------------------------------------------------------------
// END 1.1 HEADER BACKGROUND
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 1.2 HEADER MARGINS
//--------------------------------------------------------------------------------------
$options[] = array("type" => "divider");
$options[] = array( "name" => __('1.2 Header Margins','woobizz-header'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-header"));
$options[] = array("type" => "divider");
//Margin Top
$options[] = array( "name" => __("Margin Top ","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_margintopsize",
			"class" => "tiny first",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Units Top			
$options[] = array( "name" => __("Units Top","woobizz-header"), 
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_marginunittop",
			"class" => "tiny",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",
			));	
//Margin Right			
$options[] = array( "name" => __("Margin Right ","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_marginrightsize",
			"class" => "tiny",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Units Right			
$options[] = array( "name" => __("Units Right","woobizz-header"), 
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_marginunitright",
			"class" => "tiny last",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));	
//Margin Bottom				
$options[] = array( "name" => __("Margin Bottom ","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_marginbottomsize",
			"class" => "tiny first",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Units Bottom			
$options[] = array( "name" => __("Units Bottom","woobizz-header"), 
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_marginunitbottom",
			"class" => "tiny",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));	
//Margin Left				
$options[] = array( "name" => __("Margin Left ","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_marginleftsize",
			"class" => "tiny",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Units Left			
$options[] = array( "name" => __("Units Left","woobizz-header"), 
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_marginunitleft",
			"class" => "tiny last",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));
//--------------------------------------------------------------------				
// END 1.2 HEADER MARGINS
//--------------------------------------------------------------------	
//--------------------------------------------------------------------				
// START 1.3 HEADER PADDINGS
//--------------------------------------------------------------------	
$options[] = array("type" => "divider");
$options[] = array( "name" => __('1.3 Header Paddings','woobizz-header'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-header"));
$options[] = array("type" => "divider");	
//Padding Top
$options[] = array( "name" => __("Padding Top ","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_paddingtopsize",
			"class" => "tiny first",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Padding Units Top			
$options[] = array( "name" => __("Units Top","woobizz-header"), 
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_paddingunittop",
			"class" => "tiny",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",
			));	
//Padding Right			
$options[] = array( "name" => __("Padding Right ","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_paddingrightsize",
			"class" => "tiny",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Padding Units Right			
$options[] = array( "name" => __("Units Right","woobizz-header"), 
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_paddingunitright",
			"class" => "tiny last",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));	
//Padding Bottom				
$options[] = array( "name" => __("Padding Bottom ","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_paddingbottomsize",
			"class" => "tiny first",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Padding Untis Bottom			
$options[] = array( "name" => __("Units Bottom","woobizz-header"), 
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_paddingunitbottom",
			"class" => "tiny",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));	
//Padding Left				
$options[] = array( "name" => __("Padding Left ","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_paddingleftsize",
			"class" => "tiny",
			"std" => 0,
			"min" => 0,
			"max" => 100,
			"suffix" => "",
			"increment" => 1,
			"type" => "number");
//Padding Units Left			
$options[] = array( "name" => __("Units Left","woobizz-header"), 
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_paddingunitleft",
			"class" => "tiny last",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "Pixels (px)",
				1 => "Percent (%)",
				2 => "Ems” (em)",
				3 => "Points (pt)",));		
//--------------------------------------------------------------------				
// END 1.3 HEADER PADDINGS
//--------------------------------------------------------------------					
//--------------------------------------------------------------------				
// START 1.4 HEADER BORDERS
//--------------------------------------------------------------------
//Border Top
$options[] = array("type" => "divider");
$options[] = array( "name" => __('1.4 Header Borders','woobizz-header'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-header"));
$options[] = array("type" => "divider");	
$options[] = array( "name" => __("Border Top Color","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_bordertopcolor",
			"class" => "short first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Border Top Size","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_bordertopsize",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 50,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
$options[] = array( "name" => __("Border Top Style","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_bordertopstyle",
			"class" => "short lastt",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "dotted",
				1 => "dashed",
				2 => "solid",
				3 => "none",
				));	
//Border Right				
$options[] = array( "name" => __("Border Right Color","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_borderrightcolor",
			"class" => "short first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Border Right Size","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_borderrightsize",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 50,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
$options[] = array( "name" => __("Border Right Style","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_backgroundborderrightstyle",
			"class" => "short lastt",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "dotted",
				1 => "dashed",
				2 => "solid",
				3 => "none",
				));		
//Border Bottom				
$options[] = array( "name" => __("Border Bottom Color","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_borderbottomcolor",
			"class" => "short first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Border Bottom Size","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_borderbottomsize",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 50,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
$options[] = array( "name" => __("Border Bottom Style","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_borderbottomstyle",
			"class" => "short lastt",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "dotted",
				1 => "dashed",
				2 => "solid",
				3 => "none",
				));		
//Border Left				
$options[] = array( "name" => __("Border Left Color","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_borderleftcolor",
			"class" => "short first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Border Left Size","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_borderleftsize",
			"class" => "short",
			"std" => 0,
			"min" => 0,
			"max" => 50,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");	
$options[] = array( "name" => __("Border Left Style","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_borderleftstyle",
			"class" => "short lastt",
			"std" => 0,
			"type" => "select",
			"options" => array(
				0 => "dotted",
				1 => "dashed",
				2 => "solid",
				3 => "none",
				));	
//--------------------------------------------------------------------				
// END 1.4 HEADER BORDERS
//--------------------------------------------------------------------				
//--------------------------------------------------------------------				
// START 1.5 HEADER SHADOWS
//--------------------------------------------------------------------
$options[] = array("type" => "divider");
$options[] = array( "name" => __('1.5 Header Shadows','woobizz-header'),
					"type" => "title",
					"class" => "full",
					"desc" => __("", "woobizz-header"));
$options[] = array("type" => "divider");			
$options[] = array( "name" => __("Shadow Color","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_shadowcolor",
			"class" => "medium first",
			"std" => '',
			"type" => "color");	
$options[] = array( "name" => __("Right Distance","woobizz-header"),
			"desc" => __("", "woobizz-header"),
			"id" => WOOBIZZHEADER."_woobizzheader_shadowrightdistance",
			"class" => "medium last",
			"std" => 0,
			"min" => 0,
			"max" => 200,
			"suffix" => "px",
			"increment" => 1,
			"type" => "number");
$options[] = array( "name" => __("Bottom Distance","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizzheader_shadowbottomdistance",
				"class" => "short first",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
$options[] = array( "name" => __("Spread","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizzheader_shadowspread",
				"class" => "short",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");	
$options[] = array( "name" => __("Size","woobizz-header"),
				"desc" => __("", "woobizz-header"),
				"id" => WOOBIZZHEADER."_woobizzheader_shadowsize",
				"class" => "short last",
				"std" => 0,
				"min" => 0,
				"max" => 200,
				"suffix" => "px",
				"increment" => 1,
				"type" => "number");
//--------------------------------------------------------------------				
// END 1.5 HEADER SHADOWS
//--------------------------------------------------------------------