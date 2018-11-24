<?php
// Do not proceed if Kirki does not exist.
if(!class_exists('Kirki')){return;}
//--------------------------------------------------------------
//MAIN VARS
//--------------------------------------------------------------
//Config
$woobizzheader='woobizzheader';
//Panel
$woobizzheader_panel='woobizzheader_panel';
//Section
$woobizzheader_general_screen='woobizzheader_general_screen';
//Subsections
$woobizzheader_general_size='woobizzheader_general_size';
$woobizzheader_general_background='woobizzheader_general_background';
$woobizzheader_general_brand='woobizzheader_general_brand';
$woobizzheader_general_menu1='woobizzheader_general_menu1';
$woobizzheader_general_menu2='woobizzheader_general_menu2';
$woobizzheader_general_menu3='woobizzheader_general_menu3';
$woobizzheader_general_cart='woobizzheader_general_cart';
$woobizzheader_general_search='woobizzheader_general_search';
$woobizzheader_general_box1='woobizzheader_general_box1';
$woobizzheader_general_box2='woobizzheader_general_box2';
$woobizzheader_general_widget1='woobizzheader_general_widget1';
$woobizzheader_general_widget2='woobizzheader_general_widget2';
//--------------------------------------------------------------
//CONFIGURATION ID
//--------------------------------------------------------------
Kirki::add_config($woobizzheader, array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );
//--------------------------------------------------------------
//PANEL
//--------------------------------------------------------------
Kirki::add_panel( $woobizzheader_panel, array(
    'title' => 'Woobizz Header',
));
//--------------------------------------------------------------
//SECTION
//--------------------------------------------------------------
Kirki::add_section( $woobizzheader_general_screen, array(
    'title' => 'General Settings',
	'panel' => $woobizzheader_panel,
));
//--------------------------------------------------------------
//SUB-SECTIONS 
//--------------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'woobizzheader-general-settings2222',
	'label'       => __( '', 'textdomain' ),
	'section'     => $woobizzheader_general_screen,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'woobizzheader-general-settings' => array(
                'selector' => '.woobizzheader-general-settings',
                'render_callback' => '__return_false',
            ),
        ),
) );

Kirki::add_section( $woobizzheader_general_background, array(
    'title' => 'GS Responsive sizes',
    'section' => $woobizzheader_general_screen,    
));
Kirki::add_section( $woobizzheader_general_brand, array(
    'title' => 'GS Visual helpers',
    'section' => $woobizzheader_general_screen,    
));
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'general_submenus_hidden',
	'label'       => __( '', 'textdomain' ),
	'section'     => $woobizzheader_general_screen,
	'default'     => '',
	'priority'    => 10,
) );

//--------------------------------------------------------
// RESPONSIVE SIZES FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_general_lsminwidth',
	'label'       => esc_attr__( 'Large Screen Min-Size', 'textdomain' ),
	'section'     => $woobizzheader_general_background,
	'default'     => 1024,
	//'transport'   => 'postMessage',
    'suffix'  	  => 'px',
	'choices'     => array(
		'min'  => '0',
		'max'  => '5000',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_general_msmaxwidth',
	'label'       => esc_attr__( 'Medium Screen Max-Size', 'textdomain' ),
	'section'     => $woobizzheader_general_background,
	'default'     => 1023,
    'choices'     => array(
		'min'  => '0',
		'max'  => '5000',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_general_msminwidth',
	'label'       => esc_attr__( 'Medium Screen Min-Size', 'textdomain' ),
	'section'     => $woobizzheader_general_background,
	'default'     => 769,
    'choices'     => array(
		'min'  => '0',
		'max'  => '5000',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_general_ssmaxwidth',
	'label'       => esc_attr__( 'Small Screen Max-Size', 'textdomain' ),
	'section'     =>$woobizzheader_general_background,
	'default'     => 768,
    'choices'     => array(
		'min'  => '0',
		'max'  => '5000',
		'step' => '1',
	),
) );
//--------------------------------------------------------
// VISUAL HELPER FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_general_helperinfos',
	'label'       => esc_attr__( 'Display edit buttons?', 'textdomain' ),
	'section'     => $woobizzheader_general_brand,
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_general_helpergrid',
	'label'       => esc_attr__( 'Display visual grid?', 'textdomain' ),
	'section'     => $woobizzheader_general_brand,
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_general_itemsbordercolor',
	'label'       => __( 'Custom visual grid color', 'textdomain' ),
	'section'     => $woobizzheader_general_brand,
	'default'     => 'rgba(255,255,255,0.8)',
	'choices'     => array(
		'alpha' => true,
	),
) );