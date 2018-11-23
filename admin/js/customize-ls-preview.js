//-------------------------------------------------------------	
//BACKGROUND
//-------------------------------------------------------------
//Background width
wp.customize( 'woobizzheader_large_bgwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-wrapper').css( 'width', newval+'%');
	});
});	
//Background height
wp.customize( 'woobizzheader_large_bgheight', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box').css( 'min-height', newval+'px');
	});
});	
//Background padding
wp.customize( 'woobizzheader_large_bgpadding', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-wrapper').css( 'padding', newval+'px');
	});
});	
//Background margin
wp.customize( 'woobizzheader_large_bgmargin', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-wrapper').css( 'margin', newval+'px');
		jQuery( '#masthead').css( 'margin', newval+'px');
	});
});
//-------------------------------------------------------------	
//BRAND
//-------------------------------------------------------------	
//Brand position
wp.customize( 'woobizzheader_large_brandposition', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-brandbox').css( 'display', 'flex');
		jQuery( '.woobizzheader-large-brandbox').css( 'order', +newval);
	});
});
//Brand width
wp.customize( 'woobizzheader_large_brandwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-brandbox').css( 'width', newval+'%');
	});
});
//Brand title
wp.customize( 'woobizzheader_large_brandtitle', function( value ) {	
	value.bind( function( newval ) {	
	jQuery( '#woobizzheader-large-brandtitle' ).text( newval );
	} );
} );
wp.customize( 'woobizzheader_large_brandtitlesize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'h3#woobizzheader-large-brandtitle').css( 'font-size', newval+'px');
	} );
} );
wp.customize( 'woobizzheader_large_brandtitlecolor', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'h3#woobizzheader-large-brandtitle').css( 'color', newval);
	} );
} );
wp.customize( 'woobizzheader_large_branddescription', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( '#woobizzheader-large-branddescription' ).text( newval );
	} );
} );

//brand description size
wp.customize( 'woobizzheader_large_branddescriptionsize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-large-branddescription').css( 'font-size', newval+'px');
	} );
} );

//brand description color
wp.customize( 'woobizzheader_large_branddescriptioncolor', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-large-branddescription').css( 'color', newval);
	} );
} );

//brand text line height
wp.customize( 'woobizzheader_large_brandtxtlineheight', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem2').css( 'line-height', newval+'px');
	});
});	

//brand text margin top
wp.customize( 'woobizzheader_large_brandtxtmargintop', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem2').css( 'margin-top', newval+'px');
	});
});

//brand text margin bottom
wp.customize( 'woobizzheader_large_brandtxtmarginbottom', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem2').css( 'margin-bottom', newval+'px');
	});
});

//brand text margin right
wp.customize( 'woobizzheader_large_brandtxtmarginright', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem2').css( 'margin-right', newval+'px');
	});
});	

//brand text margin left
wp.customize( 'woobizzheader_large_brandtxtmarginleft', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem2').css( 'margin-left', newval+'px');
	});
});	

//brand image
wp.customize( 'woobizzheader_large_brandlogo', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1' ).css( 'background-image', 'url(' +newval+ ')' );
	});
});	
//----------------------------------------------------------------------
//BRAND FILTERS
//----------------------------------------------------------------------
//Brand grayscale
wp.customize( 'woobizzheader_large_brandgrayscale', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'grayscale('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'grayscale('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'grayscale('+newval+'%)' );
	});
});	
//Brand sepia
wp.customize( 'woobizzheader_large_brandsepia', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'sepia('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'sepia('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'sepia('+newval+'%)' );
	});
});	
//Brand Blur
wp.customize( 'woobizzheader_large_brandblur', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'blur('+newval+'px)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'blur('+newval+'px)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'blur('+newval+'px)' );
	});
});	

//Brand Brightness
wp.customize( 'woobizzheader_large_brandbrightness', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'brightness('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'brightness('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'brightness('+newval+'%)' );
	});
});	

//Brand hue rotate
wp.customize( 'woobizzheader_large_brandhuerotate', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'hue-rotate('+newval+'deg)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'hue-rotate('+newval+'deg)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'hue-rotate('+newval+'deg)' );
	});
});	

//Brand saturate
wp.customize( 'woobizzheader_large_brandsaturate', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'saturate('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'saturate('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'saturate('+newval+'%)' );
	});
});	

//Brand opacity
wp.customize( 'woobizzheader_large_brandopacity', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'opacity('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'opacity('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'opacity('+newval+'%)' );
	});
});	

//Brand contrast
wp.customize( 'woobizzheader_large_brandcontrast', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'contrast('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'contrast('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'contrast('+newval+'%)' );
	});
});	

//Brand invert
wp.customize( 'woobizzheader_large_brandinvert', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'invert('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'invert('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'invert('+newval+'%)' );
	});
});


//TO WORK
wp.customize( 'woobizzheader_large_bgimage', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-wrapper' ).css( 'background-image', 'url(' +newval+ ')' );
	});
});	

//-------------------------------------------------------------	
//MENU1
//-------------------------------------------------------------	
//menu1 position
wp.customize( 'woobizzheader_large_menu1position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-menu1').css( 'display', 'flex');
		jQuery( '.woobizzheader-large-menu1').css( 'order', +newval);
	});
});
//Brand width
wp.customize( 'woobizzheader_large_menu1width', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-menu1').css( 'width', newval+'%');
	});
});

//-------------------------------------------------------------	
//MENU2
//-------------------------------------------------------------	
//menu2 position
wp.customize( 'woobizzheader_large_menu2position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-menu2').css( 'display', 'flex');
		jQuery( '.woobizzheader-large-menu2').css( 'order', +newval);
	});
});
//Brand width
wp.customize( 'woobizzheader_large_menu2width', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-menu2').css( 'width', newval+'%');
	});
});
//-------------------------------------------------------------	
//MENU3
//-------------------------------------------------------------	
//menu3 position
wp.customize( 'woobizzheader_large_menu3position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-menu3').css( 'display', 'flex');
		jQuery( '.woobizzheader-large-menu3').css( 'order', +newval);
	});
});
//Brand width
wp.customize( 'woobizzheader_large_menu3width', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-menu3').css( 'width', newval+'%');
	});
});
