
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
//Background margin'transport'   => 'postMessage',
wp.customize( 'woobizzheader_large_bgmargin', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-wrapper').css( 'margin', newval+'px');
		jQuery( '#masthead').css( 'margin', newval+'px');
	});
});
//-------------------------------------------------------------	
//BRAND
//-------------------------------------------------------------	
//brand position
wp.customize( 'woobizzheader_large_brandposition', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-brand').css( 'display', 'flex');
		jQuery( '.woobizzheader-large-brand').css( 'order', +newval);
	});
});
//brand width
wp.customize( 'woobizzheader_large_brandwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-brand').css( 'width', newval+'%');
	});
});
//brand title
wp.customize( 'woobizzheader_large_brandtitle', function( value ) {	
	value.bind( function( newval ) {	
	jQuery( 'p#woobizzheader-large-brandtitle' ).text( newval );
	} );
} );
//brand title size
wp.customize( 'woobizzheader_large_brandtitlesize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-large-brandtitle').css( 'font-size', newval+'px');
	} );
} );
//brand title color
wp.customize( 'woobizzheader_large_brandtitlecolor', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-large-brandtitle').css( 'color', newval);
	} );
} );
//brand description
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

//brand texts line height
wp.customize( 'woobizzheader_large_brandtxtlineheight', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem2').css( 'line-height', newval+'px');
	});
});	

//brand texts margin top
wp.customize( 'woobizzheader_large_brandtxtmargintop', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem2').css( 'margin-top', newval+'px');
	});
});

//brand texts margin bottom
wp.customize( 'woobizzheader_large_brandtxtmarginbottom', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem2').css( 'margin-bottom', newval+'px');
	});
});

//brand texts margin right
wp.customize( 'woobizzheader_large_brandtxtmarginright', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-branditem2').css( 'margin-right', newval+'px');
	});
});	

//brand texts margin left
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
//menu1 width
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
//menu2 width
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
//menu3 width
wp.customize( 'woobizzheader_large_menu3width', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-menu3').css( 'width', newval+'%');
	});
});

//-------------------------------------------------------------	
//CART
//-------------------------------------------------------------	
//cart position
wp.customize( 'woobizzheader_large_cartposition', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-cart').css( 'display', 'flex');
		jQuery( '.woobizzheader-large-cart').css( 'order', +newval);
	});
});
//cart width
wp.customize( 'woobizzheader_large_cartwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-cart').css( 'width', newval+'%');
	});
});

//cart title size
wp.customize( 'woobizzheader_large_carttitlesize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'span.woocommerce-Price-amount').css( 'font-size', newval+'px');
	
	} );
} );
//cart description
wp.customize( 'woobizzheader_large_cartdescription', function( value ) {
	value.bind( function( newval ) {
	jQuery( 'a.woobizzheader-large-cartlink' ).text( newval );
	} );
} );

//cart description size
wp.customize( 'woobizzheader_large_cartdescriptionsize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'a.woobizzheader-large-cartlink').css( 'font-size', newval+'px');
	
	} );
} );
//-------------------------------------------------------------	
//SEARCH
//-------------------------------------------------------------	
//search position
wp.customize( 'woobizzheader_large_searchposition', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-search').css( 'display', 'flex');
		jQuery( '.woobizzheader-large-search').css( 'order', +newval);
	});
});
//search content width
wp.customize( 'woobizzheader_large_searchcontentwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-search').css( 'width', newval+'%');
	});
});

//search item width 
wp.customize( 'woobizzheader_large_searchitemwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( 'input#woocommerce-product-search-field-0').css( 'width', newval+'vw');
	});
});

//search item max-width 
wp.customize( 'woobizzheader_large_searchitemmaxwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( 'input#woocommerce-product-search-field-0').css( 'max-width', newval+'px');
	});
});


//-------------------------------------------------------------	
//BOX1
//-------------------------------------------------------------	
//box1 position
wp.customize( 'woobizzheader_large_box1position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box1').css( 'display', 'flex');
		jQuery( '.woobizzheader-large-box1').css( 'order', +newval);
	});
});
//box1 width
wp.customize( 'woobizzheader_large_box1width', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box1').css( 'width', newval+'%');
	});
});
//box1 title
wp.customize( 'woobizzheader_large_box1title', function( value ) {	
	value.bind( function( newval ) {	
	jQuery( '#woobizzheader-large-box1title' ).text( newval );
	} );
} );
//box1 title size
wp.customize( 'woobizzheader_large_box1titlesize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-large-box1title').css( 'font-size', newval+'px');
	} );
} );
//box1 title color
wp.customize( 'woobizzheader_large_box1titlecolor', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-large-box1title').css( 'color', newval);
	} );
} );
//box1 description
wp.customize( 'woobizzheader_large_box1description', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( '#woobizzheader-large-box1description' ).text( newval );
	} );
} );

//box1 description size
wp.customize( 'woobizzheader_large_box1descriptionsize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-large-box1description').css( 'font-size', newval+'px');
	} );
} );

//box1 description color
wp.customize( 'woobizzheader_large_box1descriptioncolor', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-large-box1description').css( 'color', newval);
	} );
} );

//box1 texts line height
wp.customize( 'woobizzheader_large_box1txtlineheight', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box1item2').css( 'line-height', newval+'px');
	});
});	

//box1 texts margin top
wp.customize( 'woobizzheader_large_box1txtmargintop', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box1item2').css( 'margin-top', newval+'px');
	});
});

//box1 texts margin bottom
wp.customize( 'woobizzheader_large_box1txtmarginbottom', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box1item2').css( 'margin-bottom', newval+'px');
	});
});

//box1 texts margin right
wp.customize( 'woobizzheader_large_box1txtmarginright', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box1item2').css( 'margin-right', newval+'px');
	});
});	

//box1 texts margin left
wp.customize( 'woobizzheader_large_box1txtmarginleft', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box1item2').css( 'margin-left', newval+'px');
	});
});	

//box1 image
wp.customize( 'woobizzheader_large_box1logo', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box1item1' ).css( 'background-image', 'url(' +newval+ ')' );
	});
});	

//-------------------------------------------------------------	
//BOX2
//-------------------------------------------------------------	
//box2 position
wp.customize( 'woobizzheader_large_box2position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box2').css( 'display', 'flex');
		jQuery( '.woobizzheader-large-box2').css( 'order', +newval);
	});
});
//box2 width
wp.customize( 'woobizzheader_large_box2width', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box2').css( 'width', newval+'%');
	});
});
//box2 title
wp.customize( 'woobizzheader_large_box2title', function( value ) {	
	value.bind( function( newval ) {	
	jQuery( '#woobizzheader-large-box2title' ).text( newval );
	} );
} );
//box2 title size
wp.customize( 'woobizzheader_large_box2titlesize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-large-box2title').css( 'font-size', newval+'px');
	} );
} );
//box2 title color
wp.customize( 'woobizzheader_large_box2titlecolor', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-large-box2title').css( 'color', newval);
	} );
} );
//box2 description
wp.customize( 'woobizzheader_large_box2description', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( '#woobizzheader-large-box2description' ).text( newval );
	} );
} );

//box2 description size
wp.customize( 'woobizzheader_large_box2descriptionsize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-large-box2description').css( 'font-size', newval+'px');
	} );
} );

//box2 description color
wp.customize( 'woobizzheader_large_box2descriptioncolor', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-large-box2description').css( 'color', newval);
	} );
} );

//box2 texts line height
wp.customize( 'woobizzheader_large_box2txtlineheight', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box2item2').css( 'line-height', newval+'px');
	});
});	

//box2 texts margin top
wp.customize( 'woobizzheader_large_box2txtmargintop', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box2item2').css( 'margin-top', newval+'px');
	});
});

//box2 texts margin bottom
wp.customize( 'woobizzheader_large_box2txtmarginbottom', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box2item2').css( 'margin-bottom', newval+'px');
	});
});

//box2 texts margin right
wp.customize( 'woobizzheader_large_box2txtmarginright', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box2item2').css( 'margin-right', newval+'px');
	});
});	

//box2 texts margin left
wp.customize( 'woobizzheader_large_box2txtmarginleft', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box2item2').css( 'margin-left', newval+'px');
	});
});	

//box2 image
wp.customize( 'woobizzheader_large_box2logo', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-box2item1' ).css( 'background-image', 'url(' +newval+ ')' );
	});
});	
//-------------------------------------------------------------	
//WIDGET1
//-------------------------------------------------------------	
//widget1 position
wp.customize( 'woobizzheader_large_widget1position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-widget1').css( 'display', 'flex');
		jQuery( '.woobizzheader-large-widget1').css( 'order', +newval);
	});
});
//widget1 width
wp.customize( 'woobizzheader_large_widget1width', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-widget1').css( 'width', newval+'%');
	});
});

//-------------------------------------------------------------	
//WIDGET2
//-------------------------------------------------------------	
//widget2 position
wp.customize( 'woobizzheader_large_widget2position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-widget2').css( 'display', 'flex');
		jQuery( '.woobizzheader-large-widget2').css( 'order', +newval);
	});
});
//widget2 width
wp.customize( 'woobizzheader_large_widget2width', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-large-widget2').css( 'width', newval+'%');
	});
});