<?php
//--------------------------------------------------------------
//MAIN VARS
//--------------------------------------------------------------
$woobizzheader_small_screen='woobizzheader_small_screen';
$woobizzheader_small_bg='woobizzheader_small_bg';
$woobizzheader_small_brand='woobizzheader_small_brand';
$woobizzheader_small_menu1='woobizzheader_small_menu1';
$woobizzheader_small_menu2='woobizzheader_small_menu2';
$woobizzheader_small_menu3='woobizzheader_small_menu3';
$woobizzheader_small_cart='woobizzheader_small_cart';
$woobizzheader_small_search='woobizzheader_small_search';
$woobizzheader_small_box1='woobizzheader_small_box1';
$woobizzheader_small_box2='woobizzheader_small_box2';
$woobizzheader_small_widget1='woobizzheader_small_widget1';
$woobizzheader_small_widget2='woobizzheader_small_widget2';
$woobizzheader_small_sidenav1='woobizzheader_small_sidenav1';
$woobizzheader_small_sidenav2='woobizzheader_small_sidenav2';
//--------------------------------------------------------------
//MENU
//--------------------------------------------------------------
Kirki::add_section( $woobizzheader_small_screen, array(
    'title' => 'Small Screen',
	'panel' => $woobizzheader_panel,
));
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_screen_hidden',
	'section'     => $woobizzheader_small_screen,
	'default'     => '',
	'priority'    => 10,
) );
//--------------------------------------------------------------
//SUBMENUS 
//--------------------------------------------------------------
Kirki::add_section( $woobizzheader_small_bg, array(
    'title' => 'SS Header Size',
    'section' => $woobizzheader_small_screen,	
));
Kirki::add_section( $woobizzheader_small_bg, array(
    'title' => 'SS Header BG',
    'section' => $woobizzheader_small_screen,    
));
Kirki::add_section( $woobizzheader_small_brand, array(
    'title' => 'SS Header Brand',
    'section' => $woobizzheader_small_screen,    
));
Kirki::add_section( $woobizzheader_small_menu1, array(
    'title' => 'SS Header Menu1',
    'section' => $woobizzheader_small_screen,    
));
Kirki::add_section( $woobizzheader_small_menu2, array(
    'title' => 'SS Header Menu2',
    'section' => $woobizzheader_small_screen,    
));
Kirki::add_section( $woobizzheader_small_menu3, array(
    'title' => 'SS Header Menu3',
    'section' => $woobizzheader_small_screen,    
));
Kirki::add_section( $woobizzheader_small_cart, array(
    'title' => 'SS Header Cart',
    'section' => $woobizzheader_small_screen,    
));
Kirki::add_section( $woobizzheader_small_search, array(
    'title' => 'SS Header Search',
    'section' => $woobizzheader_small_screen,    
));
Kirki::add_section( $woobizzheader_small_box1, array(
    'title' => 'SS Header Box1',
    'section' => $woobizzheader_small_screen,    
));
Kirki::add_section( $woobizzheader_small_box2, array(
    'title' => 'SS Header Box2',
    'section' => $woobizzheader_small_screen,    
));
Kirki::add_section( $woobizzheader_small_widget1, array(
    'title' => 'SS Header Widget1',
    'section' => $woobizzheader_small_screen,    
));
Kirki::add_section( $woobizzheader_small_widget2, array(
    'title' => 'SS Header Widget2',
    'section' => $woobizzheader_small_screen,    
));

Kirki::add_section( $woobizzheader_small_sidenav1, array(
    'title' => 'SS Header SideNav1',
    'section' => $woobizzheader_small_screen,    
));
Kirki::add_section( $woobizzheader_small_sidenav2, array(
    'title' => 'SS Header SideNav2',
    'section' => $woobizzheader_small_screen,    
));
//--------------------------------------------------------
// BACKGROUND FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_bg_edit',
	'section'     => $woobizzheader_small_bg,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'small_bg_edit' => array(
                'selector' => '.woobizzheader-small-bghelp',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_bgwidth',
	'label'       => esc_attr__( 'BG width', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 100,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_bgheight',
	'label'       => esc_attr__( 'BG height', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '200',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_bgpadding',
	'label'       => esc_attr__( 'BG padding', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 35,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_bgmargin',
	'label'       => esc_attr__( 'BG margin', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
	),
) );
//BG color
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_small_bgcolor',
	'label'       => __( 'BG solid color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => '#ffffff',
	'alpha'       => true,
	//'transport'   => 'postMessage',

) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'image',
	'settings'    => 'woobizzheader_small_bgimage',
	'label'       => esc_attr__( 'BG image', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => '',
	//'transport'   => 'postMessage',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_small_bgfullgradient1',
	'label'       => __( 'gradient1', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 'rgba(255,255,255,0)',
	//'transport'   => 'postMessage',
	'choices'     => array(
	'alpha'       => true,
	
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_small_bgfullgradient2',
	'label'       => __( 'gradient2', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 'rgba(255,255,255,0)',
	//'transport'   => 'postMessage',
	'choices'     => array(
	'alpha'       => true,
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_bgimagesize',
	'label'       => __( 'BG image size', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 'cover',
	'priority'    => 10,
	'choices'     => array(
		'option-1'   => esc_attr__( 'Cover', 'textdomain' ),
		'option-2' => esc_attr__( 'Auto', 'textdomain' ),
		
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_bgattachment',
	'label'       => __( 'BG image attachment', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 'scroll',
	'priority'    => 10,
	'choices'     => array(
		'option-1'   => esc_attr__( 'Scroll', 'textdomain' ),
		'option-2' => esc_attr__( 'Fixed', 'textdomain' ),		
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'select',
	'settings'    => 'woobizzheader_small_bgposition',
	'label'       => __( 'BG image position', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'top left', 'textdomain' ),
		'option-2' => esc_attr__( 'top center', 'textdomain' ),
		'option-3' => esc_attr__( 'top right', 'textdomain' ),
		'option-4' => esc_attr__( 'center left', 'textdomain' ),
        'option-5' => esc_attr__( 'center center', 'textdomain' ),
		'option-6' => esc_attr__( 'center right', 'textdomain' ),
		'option-7' => esc_attr__( 'bottom left', 'textdomain' ),
		'option-8' => esc_attr__( 'bottom center', 'textdomain' ),
        'option-9' => esc_attr__( 'bottom right', 'textdomain' ),				
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_bggrayscale',
	'label'       => esc_attr__( 'BG image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_bgsepia',
	'label'       => esc_attr__( 'BG image sepia', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_bgblur',
	'label'       => esc_attr__( 'BG image blur', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '50',
		'step' => '0.5',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_bgbrightness',
	'label'       => esc_attr__( 'BG image brightness', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_bghuerotate',
	'label'       => esc_attr__( 'BG image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '360',
		'step' => '1',
		'suffix'   => 'deg',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_bgsaturate',
	'label'       => esc_attr__( 'BG image saturate', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_bgopacity',
	'label'       => esc_attr__( 'BG image opacity', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_bgcontrast',
	'label'       => esc_attr__( 'BG image contrast', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_bginvert',
	'label'       => esc_attr__( 'BG image invert', 'textdomain' ),
	'section'     => $woobizzheader_small_bg,
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
//--------------------------------------------------------
// BRAND FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_brand_edit',
	'label'       => __( '', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'small_brand_edit' => array(
                'selector' => '.woobizzheader-small-brandhelp',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_branddisplay',
	'label'       => esc_attr__( 'Display Brand?', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => '1',
	'priority'    => 10,
	
) );
//Brand position
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandposition',
	'label'       => esc_attr__( 'Brand position', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 10,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
		'suffix'   => '',
	),
) );
//Brand width
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandwidth',
	'label'       => esc_attr__( 'Brand width', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_brandalign',
	'label'       => __( 'Brand align', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_brandtitledisplay',
	'label'       => esc_attr__( 'Display Brand Title?', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => '1',
	'priority'    => 10,
	
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_small_brandtitle',
	'label'    => __( 'Brand Title', 'textdomain' ),
	'section'  => $woobizzheader_small_brand,
	'default'  => esc_attr__( 'Website Title', 'textdomain' ),
	'transport'   => 'postMessage',
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandtitlesize',
	'label'       => esc_attr__( 'Brand Title Size', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 25,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '10',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_small_brandtitlecolor',
	'label'       => __( 'Brand title color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_branddescriptiondisplay',
	'label'       => esc_attr__( 'Display Brand description?', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => '1',
	'priority'    => 10,
	
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_small_branddescription',
	'label'    => __( 'Brand description', 'textdomain' ),
	'section'  => $woobizzheader_small_brand,
	'default'  => esc_attr__( 'Website description', 'textdomain' ),
	'transport'   => 'postMessage',
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_branddescriptionsize',
	'label'       => esc_attr__( 'Brand description size', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 17,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '10',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_small_branddescriptioncolor',
	'label'       => __( 'Brand description color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_brandtxtalign',
	'label'       => __( 'Brand text align', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 'option-1',
	'priority'    => 10,
	'choices'     => array(
		'option-1'   => esc_attr__( 'left', 'textdomain' ),
		'option-2'   => esc_attr__( 'center', 'textdomain' ),
		'option-3'   => esc_attr__( 'right', 'textdomain' ),
		
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandtxtlineheight',
	'label'       => esc_attr__( 'Brand texts line height', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 30,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandtxtmargintop',
	'label'       => esc_attr__( 'Brand texts margin top', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '-300',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandtxtmarginbottom',
	'label'       => esc_attr__( 'Brand texts margin bottom', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandtxtmarginright',
	'label'       => esc_attr__( 'Brand texts margin right', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandtxtmarginleft',
	'label'       => esc_attr__( 'Brand texts margin left', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'image',
	'settings'    => 'woobizzheader_small_brandlogo',
	'label'       => esc_attr__( 'Brand image', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => '',
	
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandborderradius',
	'label'       => esc_attr__( 'Brand image border radius', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_brandimagealign',
	'label'       => __( 'Brand image align', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'top', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),
		'option-4' => esc_attr__( 'bottom', 'textdomain' ),
		
        			
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandgrayscale',
	'label'       => esc_attr__( 'Brand image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandsepia',
	'label'       => esc_attr__( 'Brand image sepia', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandblur',
	'label'       => esc_attr__( 'Brand image blur', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '50',
		'step' => '0.5',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandbrightness',
	'label'       => esc_attr__( 'Brand image brightness', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandhuerotate',
	'label'       => esc_attr__( 'Brand image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '360',
		'step' => '1',
		'suffix'   => 'deg',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandsaturate',
	'label'       => esc_attr__( 'Brand image saturate', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandopacity',
	'label'       => esc_attr__( 'Brand image opacity', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandcontrast',
	'label'       => esc_attr__( 'Brand image contrast', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_brandinvert',
	'label'       => esc_attr__( 'Brand image invert', 'textdomain' ),
	'section'     => $woobizzheader_small_brand,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
//--------------------------------------------------------
// MENU1 FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_menu1_edit',
	'label'       => __( 'Menu1', 'textdomain' ),
	'section'     => $woobizzheader_small_menu1,
	'default'     => '',
	'priority'    => 10,
	'partial_refresh' => array(
            	'small_menu1_edit' => array(
                'selector' => '.woobizzheader-small-menu1help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_menu1display',
	'label'       => esc_attr__( 'Display Menu1?', 'textdomain' ),
	'section'     => $woobizzheader_small_menu1,
	'default'     => '1',
	'priority'    => 10,
) );
//Menu1 position
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_menu1position',
	'label'       => esc_attr__( 'Menu1 position', 'textdomain' ),
	'section'     => $woobizzheader_small_menu1,
	'default'     => 20,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
		'suffix'   => '',
	),
) );
//menu1 content width
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_menu1contentwidth',
	'label'       => esc_attr__( 'Menu1 content width', 'textdomain' ),
	'section'     => $woobizzheader_small_menu1,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
//menu1 item width
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_menu1itemwidth',
	'label'       => esc_attr__( 'Menu1 item width', 'textdomain' ),
	'section'     => $woobizzheader_small_menu1,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => 'vw',
	),
) );
//menu1 item max-width
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_menu1itemmaxwidth',
	'label'       => esc_attr__( 'Menu1 item max-width', 'textdomain' ),
	'section'     => $woobizzheader_small_menu1,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '3000',
		'step' => '1',
		'suffix'   => 'px',
	),
) );



Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_menu1align',
	'label'       => __( 'Menu1 align', 'textdomain' ),
	'section'     => $woobizzheader_small_menu1,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );
//--------------------------------------------------------
// MENU2 FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_menu2_edit',
	'label'       => __( 'BG', 'textdomain' ),
	'section'     => $woobizzheader_small_menu2,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'small_menu2_edit' => array(
                'selector' => '.woobizzheader-small-menu2help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_menu2display',
	'label'       => esc_attr__( 'Display Menu2?', 'textdomain' ),
	'section'     => $woobizzheader_small_menu2,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_menu2position',
	'label'       => esc_attr__( 'Menu2 position (number)', 'textdomain' ),
	'section'     => $woobizzheader_small_menu2,
	'default'     => 30,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
//menu2 content width
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_menu2contentwidth',
	'label'       => esc_attr__( 'menu2 content width', 'textdomain' ),
	'section'     => $woobizzheader_small_menu2,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
//menu2 item width
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_menu2itemwidth',
	'label'       => esc_attr__( 'menu2 item width', 'textdomain' ),
	'section'     => $woobizzheader_small_menu2,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => 'vw',
	),
) );
//menu2 item max-width
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_menu2itemmaxwidth',
	'label'       => esc_attr__( 'menu2 item max-width', 'textdomain' ),
	'section'     => $woobizzheader_small_menu2,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '3000',
		'step' => '1',
		'suffix'   => 'px',
	),
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_menu2align',
	'label'       => __( 'Menu2 align', 'textdomain' ),
	'section'     => $woobizzheader_small_menu2,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );
//--------------------------------------------------------
// MENU3 FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_menu3_edit',
	'label'       => __( 'BG', 'textdomain' ),
	'section'     => $woobizzheader_small_menu3,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'small_menu3_edit' => array(
                'selector' => '.woobizzheader-small-menu3help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_menu3display',
	'label'       => esc_attr__( 'Display Menu3?', 'textdomain' ),
	'section'     => $woobizzheader_small_menu3,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_menu3position',
	'label'       => esc_attr__( 'Menu3 position', 'textdomain' ),
	'section'     => $woobizzheader_small_menu3,
	'default'     => 40,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
//menu3 content width
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_menu3contentwidth',
	'label'       => esc_attr__( 'menu3 content width', 'textdomain' ),
	'section'     => $woobizzheader_small_menu3,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
//menu3 item width
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_menu3itemwidth',
	'label'       => esc_attr__( 'menu3 item width', 'textdomain' ),
	'section'     => $woobizzheader_small_menu3,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => 'vw',
	),
) );
//menu3 item max-width
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_menu3itemmaxwidth',
	'label'       => esc_attr__( 'menu3 item max-width', 'textdomain' ),
	'section'     => $woobizzheader_small_menu3,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '3000',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_menu3align',
	'label'       => __( 'Menu3 align', 'textdomain' ),
	'section'     => $woobizzheader_small_menu3,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );
//--------------------------------------------------------
// CART FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_cart_edit',
	'label'       => __( 'BG', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'small_cart_edit' => array(
                'selector' => '.woobizzheader-small-carthelp',
                'render_callback' => '__return_false',
            ),
        ),
) );
//Hidden field
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_cart_hidden',
	'label'       => __( '', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => '',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_cartdisplay',
	'label'       => esc_attr__( 'Display Cart?', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_cartposition',
	'label'       => esc_attr__( 'Cart position', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_cartwidth',
	'label'       => esc_attr__( 'Cart width', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_cartalign',
	'label'       => __( 'Cart align', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_carttitlesize',
	'label'       => esc_attr__( 'Cart Title Size', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 25,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_small_carttitlecolor',
	'label'       => __( 'Cart Title color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => '#ffffff',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_small_cartdescription',
	'label'    => __( 'Cart description', 'textdomain' ),
	'section'  => $woobizzheader_small_cart,
	'default'  => esc_attr__( 'This is a defualt value', 'textdomain' ),
	'transport'   => 'postMessage',
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_cartdescriptionsize',
	'label'       => esc_attr__( 'Cart description size', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 17,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_small_cartdescriptioncolor',
	'label'       => __( 'Cart description color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => '#ffffff',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_carttxtalign',
	'label'       => __( 'Cart text align', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 'option-1',
	'priority'    => 10,
	'choices'     => array(
		'option-1'   => esc_attr__( 'left', 'textdomain' ),
		'option-2'   => esc_attr__( 'center', 'textdomain' ),
		'option-3'   => esc_attr__( 'right', 'textdomain' ),		
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'image',
	'settings'    => 'woobizzheader_small_cartlogo',
	'label'       => esc_attr__( 'Cart image', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => '',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_cartimagealign',
	'label'       => __( 'Cart image align', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'top', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),
		'option-4' => esc_attr__( 'bottom', 'textdomain' ),        			
	),
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_cartimagedisplay',
	'label'       => esc_attr__( 'Hide cart image?', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_cartpricedisplay',
	'label'       => esc_attr__( 'Hide cart price?', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_carttxtdisplay',
	'label'       => esc_attr__( 'Hide cart text?', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_cartgrayscale',
	'label'       => esc_attr__( 'Cart image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_cartsepia',
	'label'       => esc_attr__( 'Cart image sepia', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_cartblur',
	'label'       => esc_attr__( 'Cart image blur', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '50',
		'step' => '0.5',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_cartbrightness',
	'label'       => esc_attr__( 'Cart image brightness', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_carthuerotate',
	'label'       => esc_attr__( 'Cart image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '360',
		'step' => '1',
		'suffix'   => 'deg',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_cartsaturate',
	'label'       => esc_attr__( 'Cart image saturate', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_cartopacity',
	'label'       => esc_attr__( 'Cart image opacity', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_cartcontrast',
	'label'       => esc_attr__( 'Cart image contrast', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_cartinvert',
	'label'       => esc_attr__( 'Cart image invert', 'textdomain' ),
	'section'     => $woobizzheader_small_cart,
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
//--------------------------------------------------------
// SEARCH FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_search_edit',
	'label'       => __( 'BG', 'textdomain' ),
	'section'     => $woobizzheader_small_search,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'small_search_edit' => array(
                'selector' => '.woobizzheader-small-searchhelp',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_searchdisplay',
	'label'       => esc_attr__( 'Display Search?', 'textdomain' ),
	'section'     => $woobizzheader_small_search,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_searchposition',
	'label'       => esc_attr__( 'Search position', 'textdomain' ),
	'section'     => $woobizzheader_small_search,
	'default'     => 60,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_searchcontentwidth',
	'label'       => esc_attr__( 'Search content width', 'textdomain' ),
	'section'     => $woobizzheader_small_search,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_searchitemwidth',
	'label'       => esc_attr__( 'Search item width', 'textdomain' ),
	'section'     => $woobizzheader_small_search,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => 'vw',
	),
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_searchitemmaxwidth',
	'label'       => esc_attr__( 'Search item max-width', 'textdomain' ),
	'section'     => $woobizzheader_small_search,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '3000',
		'step' => '1',
		'suffix'   => 'px',
	),
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_searchalign',
	'label'       => __( 'Search align', 'textdomain' ),
	'section'     => $woobizzheader_small_search,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );
//--------------------------------------------------------
// BOX1 FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_box1_edit',
	'label'       => __( '', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'small_box1_edit' => array(
                'selector' => '.woobizzheader-small-box1help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_box1display',
	'label'       => esc_attr__( 'Display Box1?', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => '1',
	'priority'    => 10,
	
) );
//Box1 position
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1position',
	'label'       => esc_attr__( 'Box1 position', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 70,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
		'suffix'   => '',
	),
) );
//Box1 width
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1width',
	'label'       => esc_attr__( 'Box1 width', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_box1align',
	'label'       => __( 'Box1 align', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_box1titledisplay',
	'label'       => esc_attr__( 'Display Box1 Title?', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => '1',
	'priority'    => 10,
	
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_small_box1title',
	'label'    => __( 'Box1 Title', 'textdomain' ),
	'section'  => $woobizzheader_small_box1,
	'default'  => esc_attr__( 'Website Title', 'textdomain' ),
	'transport'   => 'postMessage',
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1titlesize',
	'label'       => esc_attr__( 'Box1 Title Size', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 25,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '10',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_small_box1titlecolor',
	'label'       => __( 'Box1 title color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_box1descriptiondisplay',
	'label'       => esc_attr__( 'Display Box1 description?', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => '1',
	'priority'    => 10,
	
) );

Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_small_box1description',
	'label'    => __( 'Box1 description', 'textdomain' ),
	'section'  => $woobizzheader_small_box1,
	'default'  => esc_attr__( 'Website description', 'textdomain' ),
	'transport'   => 'postMessage',
	'priority' => 10,
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1descriptionsize',
	'label'       => esc_attr__( 'Box1 description size', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 17,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '10',
		'max'  => '100',
		'step' => '1',
	),
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_small_box1descriptioncolor',
	'label'       => __( 'Box1 description color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'alpha'       => true,
) );

Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_small_box1link',
	'label'    => __( 'Box1 link', 'textdomain' ),
	'section'  => $woobizzheader_small_box1,
	'default'  => esc_attr__( 'Website description', 'textdomain' ),
	'transport'   => 'postMessage',
	'priority' => 10,
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_box1txtalign',
	'label'       => __( 'Box1 text align', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 'option-1',
	'priority'    => 10,
	'choices'     => array(
		'option-1'   => esc_attr__( 'left', 'textdomain' ),
		'option-2'   => esc_attr__( 'center', 'textdomain' ),
		'option-3'   => esc_attr__( 'right', 'textdomain' ),
		
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1txtlineheight',
	'label'       => esc_attr__( 'Box1 texts line height', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 30,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1txtmargintop',
	'label'       => esc_attr__( 'Box1 texts margin top', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '-300',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1txtmarginbottom',
	'label'       => esc_attr__( 'Box1 texts margin bottom', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1txtmarginright',
	'label'       => esc_attr__( 'Box1 texts margin right', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1txtmarginleft',
	'label'       => esc_attr__( 'Box1 texts margin left', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'image',
	'settings'    => 'woobizzheader_small_box1logo',
	'label'       => esc_attr__( 'Box1 image', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => '',
	
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_box1imagealign',
	'label'       => __( 'Box1 image align', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'top', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),
		'option-4' => esc_attr__( 'bottom', 'textdomain' ),
		
        			
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1grayscale',
	'label'       => esc_attr__( 'Box1 image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1sepia',
	'label'       => esc_attr__( 'Box1 image sepia', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1blur',
	'label'       => esc_attr__( 'Box1 image blur', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '50',
		'step' => '0.5',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1brightness',
	'label'       => esc_attr__( 'Box1 image brightness', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1huerotate',
	'label'       => esc_attr__( 'Box1 image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '360',
		'step' => '1',
		'suffix'   => 'deg',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1saturate',
	'label'       => esc_attr__( 'Box1 image saturate', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1opacity',
	'label'       => esc_attr__( 'Box1 image opacity', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1contrast',
	'label'       => esc_attr__( 'Box1 image contrast', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box1invert',
	'label'       => esc_attr__( 'Box1 image invert', 'textdomain' ),
	'section'     => $woobizzheader_small_box1,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );


//--------------------------------------------------------
// BOX2 FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_box2_edit',
	'label'       => __( '', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'small_box2_edit' => array(
                'selector' => '.woobizzheader-small-box2help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_box2display',
	'label'       => esc_attr__( 'Display Box2?', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => '1',
	'priority'    => 10,
	
) );
//Box2 position
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2position',
	'label'       => esc_attr__( 'Box2 position', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 70,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
		'suffix'   => '',
	),
) );
//Box2 width
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2width',
	'label'       => esc_attr__( 'Box2 width', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_box2align',
	'label'       => __( 'Box2 align', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_box2titledisplay',
	'label'       => esc_attr__( 'Display Box2 Title?', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => '1',
	'priority'    => 10,
	
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_small_box2title',
	'label'    => __( 'Box2 Title', 'textdomain' ),
	'section'  => $woobizzheader_small_box2,
	'default'  => esc_attr__( 'Website Title', 'textdomain' ),
	'transport'   => 'postMessage',
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2titlesize',
	'label'       => esc_attr__( 'Box2 Title Size', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 25,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '10',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_small_box2titlecolor',
	'label'       => __( 'Box2 title color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_box2descriptiondisplay',
	'label'       => esc_attr__( 'Display Box2 description?', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => '1',
	'priority'    => 10,
	
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_small_box2description',
	'label'    => __( 'Box2 description', 'textdomain' ),
	'section'  => $woobizzheader_small_box2,
	'default'  => esc_attr__( 'Website description', 'textdomain' ),
	'transport'   => 'postMessage',
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2descriptionsize',
	'label'       => esc_attr__( 'Box2 description size', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 17,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '10',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_small_box2descriptioncolor',
	'label'       => __( 'Box2 description color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'alpha'       => true,
) );

Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_small_box2link',
	'label'    => __( 'Box2 link', 'textdomain' ),
	'section'  => $woobizzheader_small_box2,
	'default'  => esc_attr__( 'Add your link here', 'textdomain' ),
	'transport'   => 'postMessage',
	'priority' => 10,
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_box2txtalign',
	'label'       => __( 'Box2 text align', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 'option-1',
	'priority'    => 10,
	'choices'     => array(
		'option-1'   => esc_attr__( 'left', 'textdomain' ),
		'option-2'   => esc_attr__( 'center', 'textdomain' ),
		'option-3'   => esc_attr__( 'right', 'textdomain' ),
		
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2txtlineheight',
	'label'       => esc_attr__( 'Box2 texts line height', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 30,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2txtmargintop',
	'label'       => esc_attr__( 'Box2 texts margin top', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '-300',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2txtmarginbottom',
	'label'       => esc_attr__( 'Box2 texts margin bottom', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2txtmarginright',
	'label'       => esc_attr__( 'Box2 texts margin right', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2txtmarginleft',
	'label'       => esc_attr__( 'Box2 texts margin left', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'image',
	'settings'    => 'woobizzheader_small_box2logo',
	'label'       => esc_attr__( 'Box2 image', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => '',
	
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_box2imagealign',
	'label'       => __( 'Box2 image align', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'top', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),
		'option-4' => esc_attr__( 'bottom', 'textdomain' ),
		
        			
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2grayscale',
	'label'       => esc_attr__( 'Box2 image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2sepia',
	'label'       => esc_attr__( 'Box2 image sepia', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2blur',
	'label'       => esc_attr__( 'Box2 image blur', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '50',
		'step' => '0.5',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2brightness',
	'label'       => esc_attr__( 'Box2 image brightness', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2huerotate',
	'label'       => esc_attr__( 'Box2 image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '360',
		'step' => '1',
		'suffix'   => 'deg',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2saturate',
	'label'       => esc_attr__( 'Box2 image saturate', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2opacity',
	'label'       => esc_attr__( 'Box2 image opacity', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2contrast',
	'label'       => esc_attr__( 'Box2 image contrast', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_box2invert',
	'label'       => esc_attr__( 'Box2 image invert', 'textdomain' ),
	'section'     => $woobizzheader_small_box2,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
//--------------------------------------------------------
// WIDGET1 FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_widget1_edit',
	'label'       => __( 'BG', 'textdomain' ),
	'section'     => $woobizzheader_small_widget1,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'small_widget1_edit' => array(
                'selector' => '.woobizzheader-small-widget1help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_widget1display',
	'label'       => esc_attr__( 'Display Widget1?', 'textdomain' ),
	'section'     => $woobizzheader_small_widget1,
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_widget1position',
	'label'       => esc_attr__( 'Widget1 position', 'textdomain' ),
	'section'     => $woobizzheader_small_widget1,
	'default'     => 90,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_widget1width',
	'label'       => esc_attr__( 'Widget1 width', 'textdomain' ),
	'section'     => $woobizzheader_small_widget1,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_widget1align',
	'label'       => __( 'Widget1 align', 'textdomain' ),
	'section'     => $woobizzheader_small_widget1,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );
//--------------------------------------------------------
// WIDGET2 FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_widget2_edit',
	'label'       => __( 'BG', 'textdomain' ),
	'section'     => $woobizzheader_small_widget2,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'small_widget2_edit' => array(
                'selector' => '.woobizzheader-small-widget2help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_widget2display',
	'label'       => esc_attr__( 'Display Widget2?', 'textdomain' ),
	'section'     => $woobizzheader_small_widget2,
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_widget2position',
	'label'       => esc_attr__( 'Widget2 position', 'textdomain' ),
	'section'     => $woobizzheader_small_widget2,
	'default'     => 100,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_widget2width',
	'label'       => esc_attr__( 'Widget2 width', 'textdomain' ),
	'section'     => $woobizzheader_small_widget2,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_widget2align',
	'label'       => __( 'Widget2 align', 'textdomain' ),
	'section'     => $woobizzheader_small_widget2,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );
//--------------------------------------------------------
// SIDENAV1 FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_sidenav1_edit',
	'label'       => __( '', 'textdomain' ),
	'section'     => $woobizzheader_small_sidenav1,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'small_sidenav1_edit' => array(
                'selector' => '.woobizzheader-small-sidenav1help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_sidenav1display',
	'label'       => esc_attr__( 'Display SideNav1?', 'textdomain' ),
	'section'     => $woobizzheader_small_sidenav1,
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_sidenav1position',
	'label'       => esc_attr__( 'SideNav1 position', 'textdomain' ),
	'section'     => $woobizzheader_small_sidenav1,
	'default'     => 90,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_sidenav1width',
	'label'       => esc_attr__( 'SideNav1 width', 'textdomain' ),
	'section'     => $woobizzheader_small_sidenav1,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_sidenav1align',
	'label'       => __( 'SideNav1 align', 'textdomain' ),
	'section'     => $woobizzheader_small_sidenav1,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'image',
	'settings'    => 'woobizzheader_small_sidenav1logo',
	'label'       => esc_attr__( 'SideNav1 image', 'textdomain' ),
	'section'     => $woobizzheader_small_sidenav1,
	'default'     => '',
	
) );
//--------------------------------------------------------
// SIDENAV2 FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'small_sidenav2_edit',
	'label'       => __( '', 'textdomain' ),
	'section'     => $woobizzheader_small_sidenav2,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'small_sidenav2_edit' => array(
                'selector' => '.woobizzheader-small-sidenav2help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_small_sidenav2display',
	'label'       => esc_attr__( 'Display SideNav2?', 'textdomain' ),
	'section'     => $woobizzheader_small_sidenav2,
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_sidenav2position',
	'label'       => esc_attr__( 'SideNav2 position', 'textdomain' ),
	'section'     => $woobizzheader_small_sidenav2,
	'default'     => 90,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_small_sidenav2width',
	'label'       => esc_attr__( 'SideNav2 width', 'textdomain' ),
	'section'     => $woobizzheader_small_sidenav2,
	'default'     => 50,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_small_sidenav2align',
	'label'       => __( 'SideNav2 align', 'textdomain' ),
	'section'     => $woobizzheader_small_sidenav2,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'image',
	'settings'    => 'woobizzheader_small_sidenav2logo',
	'label'       => esc_attr__( 'SideNav2 image', 'textdomain' ),
	'section'     => $woobizzheader_small_sidenav2,
	'default'     => '',
	
) );