<?php
//--------------------------------------------------------------
//MAIN VARS
//--------------------------------------------------------------
$woobizzheader_medium_screen='woobizzheader_medium_screen';
$woobizzheader_medium_bg='woobizzheader_medium_bg';
$woobizzheader_medium_brand='woobizzheader_medium_brand';
$woobizzheader_medium_menu1='woobizzheader_medium_menu1';
$woobizzheader_medium_menu2='woobizzheader_medium_menu2';
$woobizzheader_medium_menu3='woobizzheader_medium_menu3';
$woobizzheader_medium_cart='woobizzheader_medium_cart';
$woobizzheader_medium_search='woobizzheader_medium_search';
$woobizzheader_medium_box1='woobizzheader_medium_box1';
$woobizzheader_medium_box2='woobizzheader_medium_box2';
$woobizzheader_medium_widget1='woobizzheader_medium_widget1';
$woobizzheader_medium_widget2='woobizzheader_medium_widget2';
//--------------------------------------------------------------
//MENU
//--------------------------------------------------------------
Kirki::add_section( $woobizzheader_medium_screen, array(
    'title' => 'Medium Screen',
	'panel' => $woobizzheader_panel,
));
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'medium_screen_hidden',
	'section'     => $woobizzheader_medium_screen,
	'default'     => '',
	'priority'    => 10,
) );
//--------------------------------------------------------------
//SUBMENUS 
//--------------------------------------------------------------
Kirki::add_section( $woobizzheader_medium_bg, array(
    'title' => 'MS Header Size',
    'section' => $woobizzheader_medium_screen,	
));
Kirki::add_section( $woobizzheader_medium_bg, array(
    'title' => 'MS Header Background',
    'section' => $woobizzheader_medium_screen,    
));
Kirki::add_section( $woobizzheader_medium_brand, array(
    'title' => 'MS Header Brand',
    'section' => $woobizzheader_medium_screen,    
));
Kirki::add_section( $woobizzheader_medium_menu1, array(
    'title' => 'MS Header Menu1',
    'section' => $woobizzheader_medium_screen,    
));
Kirki::add_section( $woobizzheader_medium_menu2, array(
    'title' => 'MS Header Menu2',
    'section' => $woobizzheader_medium_screen,    
));
Kirki::add_section( $woobizzheader_medium_menu3, array(
    'title' => 'MS Header Menu3',
    'section' => $woobizzheader_medium_screen,    
));
Kirki::add_section( $woobizzheader_medium_cart, array(
    'title' => 'MS Header Cart',
    'section' => $woobizzheader_medium_screen,    
));
Kirki::add_section( $woobizzheader_medium_search, array(
    'title' => 'MS Header Search',
    'section' => $woobizzheader_medium_screen,    
));
Kirki::add_section( $woobizzheader_medium_box1, array(
    'title' => 'MS Header Box1',
    'section' => $woobizzheader_medium_screen,    
));
Kirki::add_section( $woobizzheader_medium_box2, array(
    'title' => 'MS Header Box2',
    'section' => $woobizzheader_medium_screen,    
));
Kirki::add_section( $woobizzheader_medium_widget1, array(
    'title' => 'MS Header Widget1',
    'section' => $woobizzheader_medium_screen,    
));
Kirki::add_section( $woobizzheader_medium_widget2, array(
    'title' => 'MS Header Widget2',
    'section' => $woobizzheader_medium_screen,    
));
//--------------------------------------------------------
// BACKGROUND FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'medium_bg_edit',
	'section'     => $woobizzheader_medium_bg,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'medium_bg_edit' => array(
                'selector' => '.woobizzheader-medium-bghelp',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_bgwidth',
	'label'       => esc_attr__( 'Background width', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_bgheight',
	'label'       => esc_attr__( 'Background height', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '200',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_bgpadding',
	'label'       => esc_attr__( 'Background padding', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
	'default'     => 35,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_bgmargin',
	'label'       => esc_attr__( 'Background margin', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
	),
) );
//Background color (disable)
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_medium_bgcolor',
	'label'       => __( 'Background solid color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
	'default'     => '#f0f0f0',
	////'transport'   => 'postMessage',

) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'image',
	'settings'    => 'woobizzheader_medium_bgimage',
	'label'       => esc_attr__( 'Background image', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
	'default'     => '',
	////'transport'   => 'postMessage',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_medium_bgfullgradient1',
	'label'       => __( 'Image gradient1', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
	'default'     => 'rgba(255,255,255,0)',
	////'transport'   => 'postMessage',
	'choices'     => array(
	'alpha'       => true,
	
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_medium_bgfullgradient2',
	'label'       => __( 'Image gradient2', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
	'default'     => 'rgba(255,255,255,0)',
	////'transport'   => 'postMessage',
	'choices'     => array(
	'alpha'       => true,
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_bgimagesize',
	'label'       => __( 'Background image size', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
	'default'     => 'cover',
	'priority'    => 10,
	'choices'     => array(
		'option-1'   => esc_attr__( 'Cover', 'textdomain' ),
		'option-2' => esc_attr__( 'Auto', 'textdomain' ),
		
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_bgattachment',
	'label'       => __( 'Background image attachment', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
	'default'     => 'scroll',
	'priority'    => 10,
	'choices'     => array(
		'option-1'   => esc_attr__( 'Scroll', 'textdomain' ),
		'option-2' => esc_attr__( 'Fixed', 'textdomain' ),		
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'select',
	'settings'    => 'woobizzheader_medium_bgposition',
	'label'       => __( 'Background image position', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
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
	'settings'    => 'woobizzheader_medium_bggrayscale',
	'label'       => esc_attr__( 'Brand image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
	'default'     => 0,
	////'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_bgsepia',
	'label'       => esc_attr__( 'Brand image sepia', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
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
	'settings'    => 'woobizzheader_medium_bgblur',
	'label'       => esc_attr__( 'Brand image blur', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '0.5',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_bgbrightness',
	'label'       => esc_attr__( 'Brand image brightness', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
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
	'settings'    => 'woobizzheader_medium_bghuerotate',
	'label'       => esc_attr__( 'Brand image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
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
	'settings'    => 'woobizzheader_medium_bgsaturate',
	'label'       => esc_attr__( 'Brand image saturate', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
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
	'settings'    => 'woobizzheader_medium_bgopacity',
	'label'       => esc_attr__( 'Brand image opacity', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
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
	'settings'    => 'woobizzheader_medium_bgcontrast',
	'label'       => esc_attr__( 'Brand image contrast', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
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
	'settings'    => 'woobizzheader_medium_bginvert',
	'label'       => esc_attr__( 'Brand image invert', 'textdomain' ),
	'section'     => $woobizzheader_medium_bg,
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
	'settings'    => 'medium_brand_edit',
	'label'       => __( '', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'medium_brand_edit' => array(
                'selector' => '.woobizzheader-medium-brandhelp',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_medium_branddisplay',
	'label'       => esc_attr__( 'Display Brand?', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => '1',
	'priority'    => 10,
	
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandposition',
	'label'       => esc_attr__( 'Brand position (number)', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 10,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandwidth',
	'label'       => esc_attr__( 'Brand width (%)', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 100,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_brandalign',
	'label'       => __( 'Brand align', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
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
	'type'     => 'text',
	'settings' => 'woobizzheader_medium_brandtitle',
	'label'    => __( 'Brand Title', 'textdomain' ),
	'section'  => $woobizzheader_medium_brand,
	'default'  => esc_attr__( 'Website Title', 'textdomain' ),
	//'transport'   => 'postMessage',
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandtitlesize',
	'label'       => esc_attr__( 'Brand Title Size', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 25,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_medium_brandtitlecolor',
	'label'       => __( 'Brand title color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => '#0088CC',
	//'transport'   => 'postMessage',
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_medium_branddescription',
	'label'    => __( 'Brand description', 'textdomain' ),
	'section'  => $woobizzheader_medium_brand,
	'default'  => esc_attr__( 'Website description', 'textdomain' ),
	//'transport'   => 'postMessage',
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_branddescriptionsize',
	'label'       => esc_attr__( 'Brand description size', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 1,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_medium_branddescriptioncolor',
	'label'       => __( 'Brand description color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => '#0088CC',
	//'transport'   => 'postMessage',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_brandtxtalign',
	'label'       => __( 'Brand text align', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
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
	'settings'    => 'woobizzheader_medium_brandtxtmargintop',
	'label'       => esc_attr__( 'Brand texts margin top', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 0,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '-300',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandtxtmarginbottom',
	'label'       => esc_attr__( 'Brand texts margin bottom', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 1,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '-300',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandtxtmarginright',
	'label'       => esc_attr__( 'Brand textsmargin right', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 1,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '-300',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandtxtmarginleft',
	'label'       => esc_attr__( 'Brand texts right left', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 1,
	//'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '-300',
		'max'  => '300',
		'step' => '1',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'image',
	'settings'    => 'woobizzheader_medium_brandlogo',
	'label'       => esc_attr__( 'Brand image', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => '',
	
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_brandimagealign',
	'label'       => __( 'Brand image align', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
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
	'settings'    => 'woobizzheader_medium_brandgrayscale',
	'label'       => esc_attr__( 'Brand image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 0,
	////'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandsepia',
	'label'       => esc_attr__( 'Brand image sepia', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 0,
	////'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandblur',
	'label'       => esc_attr__( 'Brand image blur', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 0,
	////'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '0.5',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandbrightness',
	'label'       => esc_attr__( 'Brand image brightness', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 100,
	////'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandhuerotate',
	'label'       => esc_attr__( 'Brand image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 0,
	////'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '360',
		'step' => '1',
		'suffix'   => 'deg',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandsaturate',
	'label'       => esc_attr__( 'Brand image saturate', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 100,
	////'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandopacity',
	'label'       => esc_attr__( 'Brand image opacity', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 100,
	////'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandcontrast',
	'label'       => esc_attr__( 'Brand image contrast', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 100,
	////'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '1000',
		'step' => '1',
		'suffix'   => '%',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_brandinvert',
	'label'       => esc_attr__( 'Brand image invert', 'textdomain' ),
	'section'     => $woobizzheader_medium_brand,
	'default'     => 0,
	////'transport'   => 'postMessage',
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
	'settings'    => 'medium_menu1_edit',
	'label'       => __( 'Menu1', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu1,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'medium_menu1_edit' => array(
                'selector' => '.woobizzheader-medium-menu1help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_section( 'testmenu', array(
    'title' => 'MS Header Widget2',
    'section' => $woobizzheader_medium_menu1,  
));
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_medium_menu1display',
	'label'       => esc_attr__( 'Display Menu1?', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu1,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_menu1position',
	'label'       => esc_attr__( 'Menu1 position (number)', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu1,
	'default'     => 20,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_menu1width',
	'label'       => esc_attr__( 'Menu1 width (%)', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu1,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_menu1align',
	'label'       => __( 'Menu1 align', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu1,
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
	'settings'    => 'medium_menu2_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu2,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'medium_menu2_edit' => array(
                'selector' => '.woobizzheader-medium-menu2help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_medium_menu2display',
	'label'       => esc_attr__( 'Display Menu2?', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu2,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_menu2position',
	'label'       => esc_attr__( 'Menu2 position (number)', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu2,
	'default'     => 30,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_menu2width',
	'label'       => esc_attr__( 'Menu2 width (%)', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu2,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_menu2align',
	'label'       => __( 'Menu2 align', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu2,
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
	'settings'    => 'medium_menu3_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu3,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'medium_menu3_edit' => array(
                'selector' => '.woobizzheader-medium-menu3help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_medium_menu3display',
	'label'       => esc_attr__( 'Display Menu3?', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu3,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_menu3position',
	'label'       => esc_attr__( 'Menu3 position (number)', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu3,
	'default'     => 40,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_menu3width',
	'label'       => esc_attr__( 'Menu3 width (%)', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu3,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_menu3align',
	'label'       => __( 'Menu3 align', 'textdomain' ),
	'section'     => $woobizzheader_medium_menu3,
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
	'settings'    => 'medium_cart_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'medium_cart_edit' => array(
                'selector' => '.woobizzheader-medium-carthelp',
                'render_callback' => '__return_false',
            ),
        ),
) );
//Hidden field
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'medium_cart_hidden',
	'label'       => __( '', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => '',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_medium_cartdisplay',
	'label'       => esc_attr__( 'Display Cart?', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_cartposition',
	'label'       => esc_attr__( 'Cart position (number)', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => 100,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_cartwidth',
	'label'       => esc_attr__( 'Cart width (%)', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_cartalign',
	'label'       => __( 'Cart align', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
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
	'settings'    => 'woobizzheader_medium_carttitlesize',
	'label'       => esc_attr__( 'Cart Title Size', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => 25,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_medium_carttitlecolor',
	'label'       => __( 'Cart Title color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => '#727272',
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_medium_cartdescription',
	'label'    => __( 'Cart description', 'textdomain' ),
	'section'  => $woobizzheader_medium_cart,
	'default'  => esc_attr__( 'This is a defualt value', 'textdomain' ),
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_cartdescriptionsize',
	'label'       => esc_attr__( 'Cart description size', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => 1,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_medium_cartdescriptioncolor',
	'label'       => __( 'Cart description color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => '#0088CC',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_carttxtalign',
	'label'       => __( 'Cart text align', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
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
	'settings'    => 'woobizzheader_medium_cartlogo',
	'label'       => esc_attr__( 'Cart image', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => '',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_cartimagealign',
	'label'       => __( 'Cart image align', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
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
	'settings'    => 'woobizzheader_medium_cartimagedisplay',
	'label'       => esc_attr__( 'Hide cart image?', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_medium_cartpricedisplay',
	'label'       => esc_attr__( 'Hide cart price?', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_medium_carttxtdisplay',
	'label'       => esc_attr__( 'Hide cart text?', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_cartgrayscale',
	'label'       => esc_attr__( 'Cart image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
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
	'settings'    => 'woobizzheader_medium_cartsepia',
	'label'       => esc_attr__( 'Cart image sepia', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
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
	'settings'    => 'woobizzheader_medium_cartblur',
	'label'       => esc_attr__( 'Cart image blur', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '0.5',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_cartbrightness',
	'label'       => esc_attr__( 'Cart image brightness', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
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
	'settings'    => 'woobizzheader_medium_carthuerotate',
	'label'       => esc_attr__( 'Cart image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
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
	'settings'    => 'woobizzheader_medium_cartsaturate',
	'label'       => esc_attr__( 'Cart image saturate', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
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
	'settings'    => 'woobizzheader_medium_cartopacity',
	'label'       => esc_attr__( 'Cart image opacity', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
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
	'settings'    => 'woobizzheader_medium_cartcontrast',
	'label'       => esc_attr__( 'Cart image contrast', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
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
	'settings'    => 'woobizzheader_medium_cartinvert',
	'label'       => esc_attr__( 'Cart image invert', 'textdomain' ),
	'section'     => $woobizzheader_medium_cart,
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
	'settings'    => 'medium_search_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_medium_search,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'medium_search_edit' => array(
                'selector' => '.woobizzheader-medium-searchhelp',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_medium_searchdisplay',
	'label'       => esc_attr__( 'Display Search?', 'textdomain' ),
	'section'     => $woobizzheader_medium_search,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_searchposition',
	'label'       => esc_attr__( 'Search position (number)', 'textdomain' ),
	'section'     => $woobizzheader_medium_search,
	'default'     => 60,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_searchwidth',
	'label'       => esc_attr__( 'Search width (%)', 'textdomain' ),
	'section'     => $woobizzheader_medium_search,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_searchalign',
	'label'       => __( 'Search align', 'textdomain' ),
	'section'     => $woobizzheader_medium_search,
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
	'settings'    => 'medium_box1_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'medium_box1_edit' => array(
                'selector' => '.woobizzheader-medium-box1help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_medium_box1display',
	'label'       => esc_attr__( 'Display Box1?', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_box1position',
	'label'       => esc_attr__( 'Box1 position (number)', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
	'default'     => 70,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_box1width',
	'label'       => esc_attr__( 'Box1 width (%)', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_box1align',
	'label'       => __( 'Box1 align', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
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
	'type'     => 'text',
	'settings' => 'woobizzheader_medium_box1title',
	'label'    => __( 'Box1 Title', 'textdomain' ),
	'section'  => $woobizzheader_medium_box1,
	'default'  => esc_attr__( 'This is a defualt value', 'textdomain' ),
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_box1titlesize',
	'label'       => esc_attr__( 'Box1 Title Size', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
	'default'     => 25,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_medium_box1titlecolor',
	'label'       => __( 'Box1 Title color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
	'default'     => '#727272',
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_medium_box1description',
	'label'    => __( 'Box1 description', 'textdomain' ),
	'section'  => $woobizzheader_medium_box1,
	'default'  => esc_attr__( 'This is a defualt value', 'textdomain' ),
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_box1descriptionsize',
	'label'       => esc_attr__( 'Box1 description size', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
	'default'     => 1,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_medium_box1descriptioncolor',
	'label'       => __( 'Box1 description color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
	'default'     => '#0088CC',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_box1txtalign',
	'label'       => __( 'Box1 text align', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
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
	'settings'    => 'woobizzheader_medium_box1logo',
	'label'       => esc_attr__( 'Box1 image', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
	'default'     => '',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_box1imagealign',
	'label'       => __( 'Box1 image align', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
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
	'settings'    => 'woobizzheader_medium_box1grayscale',
	'label'       => esc_attr__( 'Box1 image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
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
	'settings'    => 'woobizzheader_medium_box1sepia',
	'label'       => esc_attr__( 'Box1 image sepia', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
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
	'settings'    => 'woobizzheader_medium_box1blur',
	'label'       => esc_attr__( 'Box1 image blur', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '0.5',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_box1brightness',
	'label'       => esc_attr__( 'Box1 image brightness', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
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
	'settings'    => 'woobizzheader_medium_box1huerotate',
	'label'       => esc_attr__( 'Box1 image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
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
	'settings'    => 'woobizzheader_medium_box1saturate',
	'label'       => esc_attr__( 'Box1 image saturate', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
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
	'settings'    => 'woobizzheader_medium_box1opacity',
	'label'       => esc_attr__( 'Box1 image opacity', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
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
	'settings'    => 'woobizzheader_medium_box1contrast',
	'label'       => esc_attr__( 'Box1 image contrast', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
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
	'settings'    => 'woobizzheader_medium_box1invert',
	'label'       => esc_attr__( 'Box1 image invert', 'textdomain' ),
	'section'     => $woobizzheader_medium_box1,
	'default'     => 0,
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
	'settings'    => 'medium_box2_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'medium_box2_edit' => array(
                'selector' => '.woobizzheader-medium-box2help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_medium_box2display',
	'label'       => esc_attr__( 'Display Box2?', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_box2position',
	'label'       => esc_attr__( 'Box2 position (number)', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
	'default'     => 80,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_box2width',
	'label'       => esc_attr__( 'Box2 width (%)', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_box2align',
	'label'       => __( 'Box2 align', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
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
	'type'     => 'text',
	'settings' => 'woobizzheader_medium_box2title',
	'label'    => __( 'Box2 Title', 'textdomain' ),
	'section'  => $woobizzheader_medium_box2,
	'default'  => esc_attr__( 'This is a defualt value', 'textdomain' ),
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_box2titlesize',
	'label'       => esc_attr__( 'Box2 Title Size', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
	'default'     => 25,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_medium_box2titlecolor',
	'label'       => __( 'Box2 Title color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
	'default'     => '#727272',
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_medium_box2description',
	'label'    => __( 'Box2 description', 'textdomain' ),
	'section'  => $woobizzheader_medium_box2,
	'default'  => esc_attr__( 'This is a defualt value', 'textdomain' ),
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_box2descriptionsize',
	'label'       => esc_attr__( 'Box2 description size', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
	'default'     => 1,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_medium_box2descriptioncolor',
	'label'       => __( 'Box2 description color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
	'default'     => '#0088CC',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_box2txtalign',
	'label'       => __( 'Box2 text align', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
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
	'settings'    => 'woobizzheader_medium_box2logo',
	'label'       => esc_attr__( 'Box2 image', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
	'default'     => '',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_box2imagealign',
	'label'       => __( 'Box2 image align', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
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
	'settings'    => 'woobizzheader_medium_box2grayscale',
	'label'       => esc_attr__( 'Box2 image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
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
	'settings'    => 'woobizzheader_medium_box2sepia',
	'label'       => esc_attr__( 'Box2 image sepia', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
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
	'settings'    => 'woobizzheader_medium_box2blur',
	'label'       => esc_attr__( 'Box2 image blur', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
	'default'     => 0,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '0.5',
		'suffix'   => 'px',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_box2brightness',
	'label'       => esc_attr__( 'Box2 image brightness', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
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
	'settings'    => 'woobizzheader_medium_box2huerotate',
	'label'       => esc_attr__( 'Box2 image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
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
	'settings'    => 'woobizzheader_medium_box2saturate',
	'label'       => esc_attr__( 'Box2 image saturate', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
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
	'settings'    => 'woobizzheader_medium_box2opacity',
	'label'       => esc_attr__( 'Box2 image opacity', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
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
	'settings'    => 'woobizzheader_medium_box2contrast',
	'label'       => esc_attr__( 'Box2 image contrast', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
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
	'settings'    => 'woobizzheader_medium_box2invert',
	'label'       => esc_attr__( 'Box2 image invert', 'textdomain' ),
	'section'     => $woobizzheader_medium_box2,
	'default'     => 0,
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
	'settings'    => 'medium_widget1_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_medium_widget1,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'medium_widget1_edit' => array(
                'selector' => '.woobizzheader-medium-widget1help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_medium_widget1display',
	'label'       => esc_attr__( 'Display Widget1?', 'textdomain' ),
	'section'     => $woobizzheader_medium_widget1,
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_widget1position',
	'label'       => esc_attr__( 'Widget1 position (number)', 'textdomain' ),
	'section'     => $woobizzheader_medium_widget1,
	'default'     => 90,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_widget1width',
	'label'       => esc_attr__( 'Widget1 width (%)', 'textdomain' ),
	'section'     => $woobizzheader_medium_widget1,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_widget1align',
	'label'       => __( 'Widget1 align', 'textdomain' ),
	'section'     => $woobizzheader_medium_widget1,
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
	'settings'    => 'medium_widget2_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_medium_widget2,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'medium_widget2_edit' => array(
                'selector' => '.woobizzheader-medium-widget2help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_medium_widget2display',
	'label'       => esc_attr__( 'Display Widget2?', 'textdomain' ),
	'section'     => $woobizzheader_medium_widget2,
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_widget2position',
	'label'       => esc_attr__( 'Widget2 position (number)', 'textdomain' ),
	'section'     => $woobizzheader_medium_widget2,
	'default'     => 100,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_medium_widget2width',
	'label'       => esc_attr__( 'Widget2 width (%)', 'textdomain' ),
	'section'     => $woobizzheader_medium_widget2,
	'default'     => 100,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_medium_widget2align',
	'label'       => __( 'Widget2 align', 'textdomain' ),
	'section'     => $woobizzheader_medium_widget2,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );