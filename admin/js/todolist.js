//----------------------------------------------------------------------
//IN PROGRESS...
//----------------------------------------------------------------------
wp.customize( 'woobizzheader_large_brandgrayscale', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'grayscale('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'grayscale('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'grayscale('+newval+'%)' );
	});
});	
wp.customize( 'woobizzheader_large_brandsepia', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'sepia('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'sepia('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'sepia('+newval+'%)' );
	});
});	
wp.customize( 'woobizzheader_large_brandblur', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'blur('+newval+'px)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'blur('+newval+'px)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'blur('+newval+'px)' );
	});
});	
wp.customize( 'woobizzheader_large_brandbrightness', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'brightness('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'brightness('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'brightness('+newval+'%)' );
	});
});	
wp.customize( 'woobizzheader_large_brandhuerotate', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'hue-rotate('+newval+'deg)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'hue-rotate('+newval+'deg)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'hue-rotate('+newval+'deg)' );
	});
});	
wp.customize( 'woobizzheader_large_brandsaturate', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'saturate('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'saturate('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'saturate('+newval+'%)' );
	});
});	
wp.customize( 'woobizzheader_large_brandopacity', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'opacity('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'opacity('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'opacity('+newval+'%)' );
	});
});	
wp.customize( 'woobizzheader_large_brandcontrast', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'contrast('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'contrast('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'contrast('+newval+'%)' );
	});
});	
wp.customize( 'woobizzheader_large_brandinvert', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem1 img' ).css( 'filter', 'invert('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-webkit-filter', 'invert('+newval+'%)' );
		jQuery( '.woobizzheader-large-branditem1 img' ).css( '-moz-filter', 'invert('+newval+'%)' );
	});
});
wp.customize( 'woobizzheader_large_bgimage', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-wrapper' ).css( 'background-image', 'url(' +newval+ ')' );
	});
});