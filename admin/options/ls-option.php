<?php
//--------------------------------------------------------------
//MAIN VARS
//--------------------------------------------------------------
$woobizzheader_large_screen='woobizzheader_large_screen';
$woobizzheader_large_bg='woobizzheader_large_bg';
$woobizzheader_large_brand='woobizzheader_large_brand';
$woobizzheader_large_menu1='woobizzheader_large_menu1';
$woobizzheader_large_menu2='woobizzheader_large_menu2';
$woobizzheader_large_menu3='woobizzheader_large_menu3';
$woobizzheader_large_cart='woobizzheader_large_cart';
$woobizzheader_large_search='woobizzheader_large_search';
$woobizzheader_large_box1='woobizzheader_large_box1';
$woobizzheader_large_box2='woobizzheader_large_box2';
$woobizzheader_large_widget1='woobizzheader_large_widget1';
$woobizzheader_large_widget2='woobizzheader_large_widget2';
//--------------------------------------------------------------
//MENU
//--------------------------------------------------------------
Kirki::add_section( $woobizzheader_large_screen, array(
    'title' => 'Large Screen',
	'panel' => $woobizzheader_panel,
));
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'large_screen_hidden',
	'section'     => $woobizzheader_large_screen,
	'default'     => '',
	'priority'    => 10,
) );
//--------------------------------------------------------------
//SUBMENUS 
//--------------------------------------------------------------
Kirki::add_section( $woobizzheader_large_bg, array(
    'title' => 'LS Header Size',
    'section' => $woobizzheader_large_screen,	
));
Kirki::add_section( $woobizzheader_large_bg, array(
    'title' => 'LS Header Background',
    'section' => $woobizzheader_large_screen,    
));
Kirki::add_section( $woobizzheader_large_brand, array(
    'title' => 'LS Header Brand',
    'section' => $woobizzheader_large_screen,    
));
Kirki::add_section( $woobizzheader_large_menu1, array(
    'title' => 'LS Header Menu1',
    'section' => $woobizzheader_large_screen,    
));
Kirki::add_section( $woobizzheader_large_menu2, array(
    'title' => 'LS Header Menu2',
    'section' => $woobizzheader_large_screen,    
));
Kirki::add_section( $woobizzheader_large_menu3, array(
    'title' => 'LS Header Menu3',
    'section' => $woobizzheader_large_screen,    
));
Kirki::add_section( $woobizzheader_large_cart, array(
    'title' => 'LS Header Cart',
    'section' => $woobizzheader_large_screen,    
));
Kirki::add_section( $woobizzheader_large_search, array(
    'title' => 'LS Header Search',
    'section' => $woobizzheader_large_screen,    
));
Kirki::add_section( $woobizzheader_large_box1, array(
    'title' => 'LS Header Box1',
    'section' => $woobizzheader_large_screen,    
));
Kirki::add_section( $woobizzheader_large_box2, array(
    'title' => 'LS Header Box2',
    'section' => $woobizzheader_large_screen,    
));
Kirki::add_section( $woobizzheader_large_widget1, array(
    'title' => 'LS Header Widget1',
    'section' => $woobizzheader_large_screen,    
));
Kirki::add_section( $woobizzheader_large_widget2, array(
    'title' => 'LS Header Widget2',
    'section' => $woobizzheader_large_screen,    
));
//--------------------------------------------------------
// BACKGROUND FIELDS
//--------------------------------------------------------
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'large_bg_edit',
	'section'     => $woobizzheader_large_bg,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'large_bg_edit' => array(
                'selector' => '.woobizzheader-large-bghelp',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_bgwidth',
	'label'       => esc_attr__( 'Background width', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
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
	'settings'    => 'woobizzheader_large_bgheight',
	'label'       => esc_attr__( 'Background height', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
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
	'settings'    => 'woobizzheader_large_bgpadding',
	'label'       => esc_attr__( 'Background padding', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
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
	'settings'    => 'woobizzheader_large_bgmargin',
	'label'       => esc_attr__( 'Background margin', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
	'default'     => 0,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '0',
		'max'  => '300',
		'step' => '1',
	),
) );
//Background color
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_large_bgcolor',
	'label'       => __( 'Background solid color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
	'default'     => '#ffffff',
	'alpha'       => true,
	//'transport'   => 'postMessage',

) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'image',
	'settings'    => 'woobizzheader_large_bgimage',
	'label'       => esc_attr__( 'Background image', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
	'default'     => '',
	//'transport'   => 'postMessage',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_large_bgfullgradient1',
	'label'       => __( 'gradient1', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
	'default'     => 'rgba(255,255,255,0)',
	//'transport'   => 'postMessage',
	'choices'     => array(
	'alpha'       => true,
	
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_large_bgfullgradient2',
	'label'       => __( 'gradient2', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
	'default'     => 'rgba(255,255,255,0)',
	//'transport'   => 'postMessage',
	'choices'     => array(
	'alpha'       => true,
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_bgimagesize',
	'label'       => __( 'Background image size', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
	'default'     => 'cover',
	'priority'    => 10,
	'choices'     => array(
		'option-1'   => esc_attr__( 'Cover', 'textdomain' ),
		'option-2' => esc_attr__( 'Auto', 'textdomain' ),
		
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_bgattachment',
	'label'       => __( 'Background image attachment', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
	'default'     => 'scroll',
	'priority'    => 10,
	'choices'     => array(
		'option-1'   => esc_attr__( 'Scroll', 'textdomain' ),
		'option-2' => esc_attr__( 'Fixed', 'textdomain' ),		
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'select',
	'settings'    => 'woobizzheader_large_bgposition',
	'label'       => __( 'Background image position', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
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
	'settings'    => 'woobizzheader_large_bggrayscale',
	'label'       => esc_attr__( 'Brand image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
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
	'settings'    => 'woobizzheader_large_bgsepia',
	'label'       => esc_attr__( 'Brand image sepia', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
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
	'settings'    => 'woobizzheader_large_bgblur',
	'label'       => esc_attr__( 'Brand image blur', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
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
	'settings'    => 'woobizzheader_large_bgbrightness',
	'label'       => esc_attr__( 'Brand image brightness', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
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
	'settings'    => 'woobizzheader_large_bghuerotate',
	'label'       => esc_attr__( 'Brand image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
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
	'settings'    => 'woobizzheader_large_bgsaturate',
	'label'       => esc_attr__( 'Brand image saturate', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
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
	'settings'    => 'woobizzheader_large_bgopacity',
	'label'       => esc_attr__( 'Brand image opacity', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
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
	'settings'    => 'woobizzheader_large_bgcontrast',
	'label'       => esc_attr__( 'Brand image contrast', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
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
	'settings'    => 'woobizzheader_large_bginvert',
	'label'       => esc_attr__( 'Brand image invert', 'textdomain' ),
	'section'     => $woobizzheader_large_bg,
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
	'settings'    => 'large_brand_edit',
	'label'       => __( '', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'large_brand_edit' => array(
                'selector' => '.woobizzheader-large-brandhelp',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_large_branddisplay',
	'label'       => esc_attr__( 'Display Brand?', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
	'default'     => '1',
	'priority'    => 10,
	
) );
//Brand position
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_brandposition',
	'label'       => esc_attr__( 'Brand position', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandwidth',
	'label'       => esc_attr__( 'Brand width', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandalign',
	'label'       => __( 'Brand align', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandtitledisplay',
	'label'       => esc_attr__( 'Display Brand Title?', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
	'default'     => '1',
	'priority'    => 10,
	
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_large_brandtitle',
	'label'    => __( 'Brand Title', 'textdomain' ),
	'section'  => $woobizzheader_large_brand,
	'default'  => esc_attr__( 'Website Title', 'textdomain' ),
	'transport'   => 'postMessage',
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_brandtitlesize',
	'label'       => esc_attr__( 'Brand Title Size', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandtitlecolor',
	'label'       => __( 'Brand title color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_large_branddescriptiondisplay',
	'label'       => esc_attr__( 'Display Brand description?', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
	'default'     => '1',
	'priority'    => 10,
	
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_large_branddescription',
	'label'    => __( 'Brand description', 'textdomain' ),
	'section'  => $woobizzheader_large_brand,
	'default'  => esc_attr__( 'Website description', 'textdomain' ),
	'transport'   => 'postMessage',
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_branddescriptionsize',
	'label'       => esc_attr__( 'Brand description size', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_branddescriptioncolor',
	'label'       => __( 'Brand description color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_brandtxtalign',
	'label'       => __( 'Brand text align', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandtxtlineheight',
	'label'       => esc_attr__( 'Brand texts line height', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandtxtmargintop',
	'label'       => esc_attr__( 'Brand texts margin top', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandtxtmarginbottom',
	'label'       => esc_attr__( 'Brand texts margin bottom', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandtxtmarginright',
	'label'       => esc_attr__( 'Brand texts margin right', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandtxtmarginleft',
	'label'       => esc_attr__( 'Brand texts margin left', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandlogo',
	'label'       => esc_attr__( 'Brand image', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
	'default'     => '',
	
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_brandimagealign',
	'label'       => __( 'Brand image align', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandgrayscale',
	'label'       => esc_attr__( 'Brand image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandsepia',
	'label'       => esc_attr__( 'Brand image sepia', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandblur',
	'label'       => esc_attr__( 'Brand image blur', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandbrightness',
	'label'       => esc_attr__( 'Brand image brightness', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandhuerotate',
	'label'       => esc_attr__( 'Brand image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandsaturate',
	'label'       => esc_attr__( 'Brand image saturate', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandopacity',
	'label'       => esc_attr__( 'Brand image opacity', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandcontrast',
	'label'       => esc_attr__( 'Brand image contrast', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'woobizzheader_large_brandinvert',
	'label'       => esc_attr__( 'Brand image invert', 'textdomain' ),
	'section'     => $woobizzheader_large_brand,
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
	'settings'    => 'large_menu1_edit',
	'label'       => __( 'Menu1', 'textdomain' ),
	'section'     => $woobizzheader_large_menu1,
	'default'     => '',
	'priority'    => 10,
	'partial_refresh' => array(
            	'large_menu1_edit' => array(
                'selector' => '.woobizzheader-large-menu1help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_section( 'testmenu', array(
    'title' => 'LS Header Widget2',
    'section' => $woobizzheader_large_menu1,  
));
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_large_menu1display',
	'label'       => esc_attr__( 'Display Menu1?', 'textdomain' ),
	'section'     => $woobizzheader_large_menu1,
	'default'     => '1',
	'priority'    => 10,
) );
//Menu1 position
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_menu1position',
	'label'       => esc_attr__( 'Menu1 position', 'textdomain' ),
	'section'     => $woobizzheader_large_menu1,
	'default'     => 10,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
		'suffix'   => '',
	),
) );
//menu1 width
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_menu1width',
	'label'       => esc_attr__( 'Brand width', 'textdomain' ),
	'section'     => $woobizzheader_large_menu1,
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
	'settings'    => 'woobizzheader_large_menu1align',
	'label'       => __( 'Menu1 align', 'textdomain' ),
	'section'     => $woobizzheader_large_menu1,
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
	'settings'    => 'large_menu2_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_large_menu2,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'large_menu2_edit' => array(
                'selector' => '.woobizzheader-large-menu2help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_large_menu2display',
	'label'       => esc_attr__( 'Display Menu2?', 'textdomain' ),
	'section'     => $woobizzheader_large_menu2,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_menu2position',
	'label'       => esc_attr__( 'Menu2 position (number)', 'textdomain' ),
	'section'     => $woobizzheader_large_menu2,
	'default'     => 30,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_menu2width',
	'label'       => esc_attr__( 'Menu2 width (%)', 'textdomain' ),
	'section'     => $woobizzheader_large_menu2,
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
	'settings'    => 'woobizzheader_large_menu2align',
	'label'       => __( 'Menu2 align', 'textdomain' ),
	'section'     => $woobizzheader_large_menu2,
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
	'settings'    => 'large_menu3_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_large_menu3,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'large_menu3_edit' => array(
                'selector' => '.woobizzheader-large-menu3help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_large_menu3display',
	'label'       => esc_attr__( 'Display Menu3?', 'textdomain' ),
	'section'     => $woobizzheader_large_menu3,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_menu3position',
	'label'       => esc_attr__( 'Menu3 position', 'textdomain' ),
	'section'     => $woobizzheader_large_menu3,
	'default'     => 40,
	'transport'   => 'postMessage',
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_menu3width',
	'label'       => esc_attr__( 'Menu3 width', 'textdomain' ),
	'section'     => $woobizzheader_large_menu3,
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
	'settings'    => 'woobizzheader_large_menu3align',
	'label'       => __( 'Menu3 align', 'textdomain' ),
	'section'     => $woobizzheader_large_menu3,
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
	'settings'    => 'large_cart_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'large_cart_edit' => array(
                'selector' => '.woobizzheader-large-carthelp',
                'render_callback' => '__return_false',
            ),
        ),
) );
//Hidden field
Kirki::add_field( $woobizzheader, array(
	'type'        => 'custom',
	'settings'    => 'large_cart_hidden',
	'label'       => __( '', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
	'default'     => '',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_large_cartdisplay',
	'label'       => esc_attr__( 'Display Cart?', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_cartposition',
	'label'       => esc_attr__( 'Cart position (number)', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
	'default'     => 50,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_cartwidth',
	'label'       => esc_attr__( 'Cart width (%)', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
	'default'     => 50,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_cartalign',
	'label'       => __( 'Cart align', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
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
	'settings'    => 'woobizzheader_large_carttitlesize',
	'label'       => esc_attr__( 'Cart Title Size', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
	'default'     => 25,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_large_carttitlecolor',
	'label'       => __( 'Cart Title color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
	'default'     => '#ffffff',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_large_cartdescription',
	'label'    => __( 'Cart description', 'textdomain' ),
	'section'  => $woobizzheader_large_cart,
	'default'  => esc_attr__( 'This is a defualt value', 'textdomain' ),
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_cartdescriptionsize',
	'label'       => esc_attr__( 'Cart description size', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
	'default'     => 1,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_large_cartdescriptioncolor',
	'label'       => __( 'Cart description color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
	'default'     => '#ffffff',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_carttxtalign',
	'label'       => __( 'Cart text align', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
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
	'settings'    => 'woobizzheader_large_cartlogo',
	'label'       => esc_attr__( 'Cart image', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
	'default'     => '',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_cartimagealign',
	'label'       => __( 'Cart image align', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
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
	'settings'    => 'woobizzheader_large_cartimagedisplay',
	'label'       => esc_attr__( 'Hide cart image?', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_large_cartpricedisplay',
	'label'       => esc_attr__( 'Hide cart price?', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_large_carttxtdisplay',
	'label'       => esc_attr__( 'Hide cart text?', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
	'default'     => '0',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_cartgrayscale',
	'label'       => esc_attr__( 'Cart image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
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
	'settings'    => 'woobizzheader_large_cartsepia',
	'label'       => esc_attr__( 'Cart image sepia', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
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
	'settings'    => 'woobizzheader_large_cartblur',
	'label'       => esc_attr__( 'Cart image blur', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
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
	'settings'    => 'woobizzheader_large_cartbrightness',
	'label'       => esc_attr__( 'Cart image brightness', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
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
	'settings'    => 'woobizzheader_large_carthuerotate',
	'label'       => esc_attr__( 'Cart image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
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
	'settings'    => 'woobizzheader_large_cartsaturate',
	'label'       => esc_attr__( 'Cart image saturate', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
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
	'settings'    => 'woobizzheader_large_cartopacity',
	'label'       => esc_attr__( 'Cart image opacity', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
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
	'settings'    => 'woobizzheader_large_cartcontrast',
	'label'       => esc_attr__( 'Cart image contrast', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
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
	'settings'    => 'woobizzheader_large_cartinvert',
	'label'       => esc_attr__( 'Cart image invert', 'textdomain' ),
	'section'     => $woobizzheader_large_cart,
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
	'settings'    => 'large_search_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_large_search,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'large_search_edit' => array(
                'selector' => '.woobizzheader-large-searchhelp',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_large_searchdisplay',
	'label'       => esc_attr__( 'Display Search?', 'textdomain' ),
	'section'     => $woobizzheader_large_search,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_searchposition',
	'label'       => esc_attr__( 'Search position (number)', 'textdomain' ),
	'section'     => $woobizzheader_large_search,
	'default'     => 60,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_searchwidth',
	'label'       => esc_attr__( 'Search width (%)', 'textdomain' ),
	'section'     => $woobizzheader_large_search,
	'default'     => 50,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_searchalign',
	'label'       => __( 'Search align', 'textdomain' ),
	'section'     => $woobizzheader_large_search,
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
	'settings'    => 'large_box1_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'large_box1_edit' => array(
                'selector' => '.woobizzheader-large-box1help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_large_box1display',
	'label'       => esc_attr__( 'Display Box1?', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_box1position',
	'label'       => esc_attr__( 'Box1 position (number)', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
	'default'     => 70,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_box1width',
	'label'       => esc_attr__( 'Box1 width (%)', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
	'default'     => 50,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_box1align',
	'label'       => __( 'Box1 align', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
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
	'settings' => 'woobizzheader_large_box1title',
	'label'    => __( 'Box1 Title', 'textdomain' ),
	'section'  => $woobizzheader_large_box1,
	'default'  => esc_attr__( 'This is a defualt value', 'textdomain' ),
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_box1titlesize',
	'label'       => esc_attr__( 'Box1 Title Size', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
	'default'     => 25,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_large_box1titlecolor',
	'label'       => __( 'Box1 Title color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
	'default'     => '#ffffff',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_large_box1description',
	'label'    => __( 'Box1 description', 'textdomain' ),
	'section'  => $woobizzheader_large_box1,
	'default'  => esc_attr__( 'This is a defualt value', 'textdomain' ),
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_box1descriptionsize',
	'label'       => esc_attr__( 'Box1 description size', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
	'default'     => 1,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_large_box1descriptioncolor',
	'label'       => __( 'Box1 description color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
	'default'     => '#ffffff',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_box1txtalign',
	'label'       => __( 'Box1 text align', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
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
	'settings'    => 'woobizzheader_large_box1logo',
	'label'       => esc_attr__( 'Box1 image', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
	'default'     => '',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_box1imagealign',
	'label'       => __( 'Box1 image align', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
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
	'settings'    => 'woobizzheader_large_box1grayscale',
	'label'       => esc_attr__( 'Box1 image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
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
	'settings'    => 'woobizzheader_large_box1sepia',
	'label'       => esc_attr__( 'Box1 image sepia', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
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
	'settings'    => 'woobizzheader_large_box1blur',
	'label'       => esc_attr__( 'Box1 image blur', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
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
	'settings'    => 'woobizzheader_large_box1brightness',
	'label'       => esc_attr__( 'Box1 image brightness', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
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
	'settings'    => 'woobizzheader_large_box1huerotate',
	'label'       => esc_attr__( 'Box1 image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
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
	'settings'    => 'woobizzheader_large_box1saturate',
	'label'       => esc_attr__( 'Box1 image saturate', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
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
	'settings'    => 'woobizzheader_large_box1opacity',
	'label'       => esc_attr__( 'Box1 image opacity', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
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
	'settings'    => 'woobizzheader_large_box1contrast',
	'label'       => esc_attr__( 'Box1 image contrast', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
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
	'settings'    => 'woobizzheader_large_box1invert',
	'label'       => esc_attr__( 'Box1 image invert', 'textdomain' ),
	'section'     => $woobizzheader_large_box1,
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
	'settings'    => 'large_box2_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'large_box2_edit' => array(
                'selector' => '.woobizzheader-large-box2help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_large_box2display',
	'label'       => esc_attr__( 'Display Box2?', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_box2position',
	'label'       => esc_attr__( 'Box2 position (number)', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
	'default'     => 80,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_box2width',
	'label'       => esc_attr__( 'Box2 width (%)', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
	'default'     => 50,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_box2align',
	'label'       => __( 'Box2 align', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
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
	'settings' => 'woobizzheader_large_box2title',
	'label'    => __( 'Box2 Title', 'textdomain' ),
	'section'  => $woobizzheader_large_box2,
	'default'  => esc_attr__( 'This is a defualt value', 'textdomain' ),
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_box2titlesize',
	'label'       => esc_attr__( 'Box2 Title Size', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
	'default'     => 25,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_large_box2titlecolor',
	'label'       => __( 'Box2 Title color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
	'default'     => '#727272',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'     => 'text',
	'settings' => 'woobizzheader_large_box2description',
	'label'    => __( 'Box2 description', 'textdomain' ),
	'section'  => $woobizzheader_large_box2,
	'default'  => esc_attr__( 'This is a defualt value', 'textdomain' ),
	'priority' => 10,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_box2descriptionsize',
	'label'       => esc_attr__( 'Box2 description size', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
	'default'     => 1,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'color',
	'settings'    => 'woobizzheader_large_box2descriptioncolor',
	'label'       => __( 'Box2 description color', 'textdomain' ),
	'description' => esc_attr__( '', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
	'default'     => '#ffffff',
	'alpha'       => true,
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_box2txtalign',
	'label'       => __( 'Box2 text align', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
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
	'settings'    => 'woobizzheader_large_box2logo',
	'label'       => esc_attr__( 'Box2 image', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
	'default'     => '',
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_box2imagealign',
	'label'       => __( 'Box2 image align', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
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
	'settings'    => 'woobizzheader_large_box2grayscale',
	'label'       => esc_attr__( 'Box2 image grayscale', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
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
	'settings'    => 'woobizzheader_large_box2sepia',
	'label'       => esc_attr__( 'Box2 image sepia', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
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
	'settings'    => 'woobizzheader_large_box2blur',
	'label'       => esc_attr__( 'Box2 image blur', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
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
	'settings'    => 'woobizzheader_large_box2brightness',
	'label'       => esc_attr__( 'Box2 image brightness', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
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
	'settings'    => 'woobizzheader_large_box2huerotate',
	'label'       => esc_attr__( 'Box2 image hue-rotate', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
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
	'settings'    => 'woobizzheader_large_box2saturate',
	'label'       => esc_attr__( 'Box2 image saturate', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
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
	'settings'    => 'woobizzheader_large_box2opacity',
	'label'       => esc_attr__( 'Box2 image opacity', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
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
	'settings'    => 'woobizzheader_large_box2contrast',
	'label'       => esc_attr__( 'Box2 image contrast', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
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
	'settings'    => 'woobizzheader_large_box2invert',
	'label'       => esc_attr__( 'Box2 image invert', 'textdomain' ),
	'section'     => $woobizzheader_large_box2,
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
	'settings'    => 'large_widget1_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_large_widget1,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'large_widget1_edit' => array(
                'selector' => '.woobizzheader-large-widget1help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_large_widget1display',
	'label'       => esc_attr__( 'Display Widget1?', 'textdomain' ),
	'section'     => $woobizzheader_large_widget1,
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_widget1position',
	'label'       => esc_attr__( 'Widget1 position (number)', 'textdomain' ),
	'section'     => $woobizzheader_large_widget1,
	'default'     => 90,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_widget1width',
	'label'       => esc_attr__( 'Widget1 width (%)', 'textdomain' ),
	'section'     => $woobizzheader_large_widget1,
	'default'     => 50,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_widget1align',
	'label'       => __( 'Widget1 align', 'textdomain' ),
	'section'     => $woobizzheader_large_widget1,
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
	'settings'    => 'large_widget2_edit',
	'label'       => __( 'Background', 'textdomain' ),
	'section'     => $woobizzheader_large_widget2,
	'default'     => '',
	'priority'    => 10,
	//'transport'   => 'postMessage',
	'partial_refresh' => array(
            	'large_widget2_edit' => array(
                'selector' => '.woobizzheader-large-widget2help',
                'render_callback' => '__return_false',
            ),
        ),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'toggle',
	'settings'    => 'woobizzheader_large_widget2display',
	'label'       => esc_attr__( 'Display Widget2?', 'textdomain' ),
	'section'     => $woobizzheader_large_widget2,
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_widget2position',
	'label'       => esc_attr__( 'Widget2 position (number)', 'textdomain' ),
	'section'     => $woobizzheader_large_widget2,
	'default'     => 100,
	'choices'     => array(
		'min'  => '1',
		'max'  => '110',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'slider',
	'settings'    => 'woobizzheader_large_widget2width',
	'label'       => esc_attr__( 'Widget2 width (%)', 'textdomain' ),
	'section'     => $woobizzheader_large_widget2,
	'default'     => 50,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
) );
Kirki::add_field( $woobizzheader, array(
	'type'        => 'radio-buttonset',
	'settings'    => 'woobizzheader_large_widget2align',
	'label'       => __( 'Widget2 align', 'textdomain' ),
	'section'     => $woobizzheader_large_widget2,
	'default'     => 'option-1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'option-1' => esc_attr__( 'left', 'textdomain' ),
		'option-2' => esc_attr__( 'center', 'textdomain' ),
		'option-3' => esc_attr__( 'right', 'textdomain' ),			
	),
) );