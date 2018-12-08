
//-------------------------------------------------------------	
//BACKGROUND
//-------------------------------------------------------------
//Background width
wp.customize( 'woobizzheader_small_bgwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-wrapper').css( 'width', newval+'%');
		
	});
});	
//Background height
wp.customize( 'woobizzheader_small_bgheight', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box').css( 'min-height', newval+'px');
	});
});	
//Background padding
wp.customize( 'woobizzheader_small_bgpadding', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-wrapper').css( 'padding', newval+'px');
	});
});	
//Background margin'transport'   => 'postMessage',
wp.customize( 'woobizzheader_small_bgmargin', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-wrapper').css( 'margin', newval+'px');
		jQuery( '#masthead').css( 'margin', newval+'px');
	});
});
//-------------------------------------------------------------	
//BRAND
//-------------------------------------------------------------	
//brand position
wp.customize( 'woobizzheader_small_brandposition', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-brand').css( 'display', 'flex');
		jQuery( '.woobizzheader-small-brand').css( 'order', +newval);
	});
});
//brand width
wp.customize( 'woobizzheader_small_brandwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-brand').css( 'width', newval+'%');
	});
});
//brand title
wp.customize( 'woobizzheader_small_brandtitle', function( value ) {	
	value.bind( function( newval ) {	
	jQuery( '#woobizzheader-small-brandtitle' ).text( newval );
	} );
} );
//brand title size
wp.customize( 'woobizzheader_small_brandtitlesize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-small-brandtitle').css( 'font-size', newval+'px');
	} );
} );
//brand title color
wp.customize( 'woobizzheader_small_brandtitlecolor', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-small-brandtitle').css( 'color', newval);
	} );
} );
//brand description
wp.customize( 'woobizzheader_small_branddescription', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( '#woobizzheader-small-branddescription' ).text( newval );
	} );
} );

//brand description size
wp.customize( 'woobizzheader_small_branddescriptionsize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-small-branddescription').css( 'font-size', newval+'px');
	} );
} );

//brand description color
wp.customize( 'woobizzheader_small_branddescriptioncolor', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-small-branddescription').css( 'color', newval);
	} );
} );

//brand texts line height
wp.customize( 'woobizzheader_small_brandtxtlineheight', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-branditem2').css( 'line-height', newval+'px');
	});
});	

//brand texts margin top
wp.customize( 'woobizzheader_small_brandtxtmargintop', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-branditem2').css( 'margin-top', newval+'px');
	});
});

//brand texts margin bottom
wp.customize( 'woobizzheader_small_brandtxtmarginbottom', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-branditem2').css( 'margin-bottom', newval+'px');
	});
});

//brand texts margin right
wp.customize( 'woobizzheader_small_brandtxtmarginright', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-branditem2').css( 'margin-right', newval+'px');
	});
});	

//brand texts margin left
wp.customize( 'woobizzheader_small_brandtxtmarginleft', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-branditem2').css( 'margin-left', newval+'px');
	});
});	

//brand image
wp.customize( 'woobizzheader_small_brandlogo', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-branditem1' ).css( 'background-image', 'url(' +newval+ ')' );
	});
});	
//-------------------------------------------------------------	
//MENU1
//-------------------------------------------------------------	
//menu1 position
wp.customize( 'woobizzheader_small_menu1position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-menu1').css( 'display', 'flex');
		jQuery( '.woobizzheader-small-menu1').css( 'order', +newval);
	});
});
//menu1 content width
wp.customize( 'woobizzheader_small_menu1contentwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-menu1').css( 'width', newval+'%');
	});
});

//menu1 item width 
wp.customize( 'woobizzheader_small_menu1itemwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( 'div#mega-menu-wrap-woobizz-menu-1').css( 'width', newval+'vw');
		

		
	});
});

//menu1 item max-width 
wp.customize( 'woobizzheader_small_menu1itemmaxwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( 'div#mega-menu-wrap-woobizz-menu-2').css( 'max-width', newval+'px');
	});
});

//-------------------------------------------------------------	
//MENU2
//-------------------------------------------------------------	
//menu2 position
wp.customize( 'woobizzheader_small_menu2position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-menu2').css( 'display', 'flex');
		jQuery( '.woobizzheader-small-menu2').css( 'order', +newval);
	});
});
//menu2 content width
wp.customize( 'woobizzheader_small_menu2contentwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-menu2').css( 'width', newval+'%');
	});
});

//menu2 item width 
wp.customize( 'woobizzheader_small_menu2itemwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( 'div#mega-menu-wrap-woobizz-menu-2').css( 'width', newval+'vw');
	});
});
//menu2 item max-width 
wp.customize( 'woobizzheader_small_menu2itemmaxwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( 'div#mega-menu-wrap-woobizz-menu-2').css( 'max-width', newval+'px');
	});
});
//-------------------------------------------------------------	
//MENU3
//-------------------------------------------------------------	
//menu3 position
wp.customize( 'woobizzheader_small_menu3position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-menu3').css( 'display', 'flex');
		jQuery( '.woobizzheader-small-menu3').css( 'order', +newval);
	});
});
//menu3 content width
wp.customize( 'woobizzheader_small_menu3contentwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-menu3').css( 'width', newval+'%');
	});
});

//menu3 item width 
wp.customize( 'woobizzheader_small_menu3itemwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( 'div#mega-menu-wrap-woobizz-menu-3').css( 'width', newval+'vw');
	});
});

//menu3 item max-width 
wp.customize( 'woobizzheader_small_menu3itemmaxwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( 'div#mega-menu-wrap-woobizz-menu-3').css( 'max-width', newval+'px');
	});
});

//-------------------------------------------------------------	
//CART
//-------------------------------------------------------------	
//cart position
wp.customize( 'woobizzheader_small_cartposition', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-cart').css( 'display', 'flex');
		jQuery( '.woobizzheader-small-cart').css( 'order', +newval);
	});
});
//cart width
wp.customize( 'woobizzheader_small_cartwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-cart').css( 'width', newval+'%');
	});
});

//cart title size
wp.customize( 'woobizzheader_small_carttitlesize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'span.woocommerce-Price-amount').css( 'font-size', newval+'px');
	
	} );
} );
//cart description
wp.customize( 'woobizzheader_small_cartdescription', function( value ) {
	value.bind( function( newval ) {
	jQuery( 'a.woobizzheader-small-cartlink' ).text( newval );
	} );
} );

//cart description size
wp.customize( 'woobizzheader_small_cartdescriptionsize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'a.woobizzheader-small-cartlink').css( 'font-size', newval+'px');
	
	} );
} );
//-------------------------------------------------------------	
//SEARCH
//-------------------------------------------------------------	
//search position
wp.customize( 'woobizzheader_small_searchposition', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-search').css( 'display', 'flex');
		jQuery( '.woobizzheader-small-search').css( 'order', +newval);
	});
});
//search content width
wp.customize( 'woobizzheader_small_searchcontentwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-search').css( 'width', newval+'%');
	});
});

//search item width 
wp.customize( 'woobizzheader_small_searchitemwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( 'input#woocommerce-product-search-field-2').css( 'width', newval+'vw');
	});
});

//search item max-width 
wp.customize( 'woobizzheader_small_searchitemmaxwidth', function( value ) {
	value.bind( function( newval ) {
		jQuery( 'input#woocommerce-product-search-field-2').css( 'max-width', newval+'px');
	});
});


//-------------------------------------------------------------	
//BOX1
//-------------------------------------------------------------	
//box1 position
wp.customize( 'woobizzheader_small_box1position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box1').css( 'display', 'flex');
		jQuery( '.woobizzheader-small-box1').css( 'order', +newval);
	});
});
//box1 width
wp.customize( 'woobizzheader_small_box1width', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box1').css( 'width', newval+'%');
	});
});
//box1 title
wp.customize( 'woobizzheader_small_box1title', function( value ) {	
	value.bind( function( newval ) {	
	jQuery( '#woobizzheader-small-box1title' ).text( newval );
	} );
} );
//box1 title size
wp.customize( 'woobizzheader_small_box1titlesize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-small-box1title').css( 'font-size', newval+'px');
	} );
} );
//box1 title color
wp.customize( 'woobizzheader_small_box1titlecolor', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-small-box1title').css( 'color', newval);
	} );
} );
//box1 description
wp.customize( 'woobizzheader_small_box1description', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( '#woobizzheader-small-box1description' ).text( newval );
	} );
} );

//box1 description size
wp.customize( 'woobizzheader_small_box1descriptionsize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-small-box1description').css( 'font-size', newval+'px');
	} );
} );

//box1 description color
wp.customize( 'woobizzheader_small_box1descriptioncolor', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-small-box1description').css( 'color', newval);
	} );
} );

//box1 texts line height
wp.customize( 'woobizzheader_small_box1txtlineheight', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box1item2').css( 'line-height', newval+'px');
	});
});	

//box1 texts margin top
wp.customize( 'woobizzheader_small_box1txtmargintop', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box1item2').css( 'margin-top', newval+'px');
	});
});

//box1 texts margin bottom
wp.customize( 'woobizzheader_small_box1txtmarginbottom', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box1item2').css( 'margin-bottom', newval+'px');
	});
});

//box1 texts margin right
wp.customize( 'woobizzheader_small_box1txtmarginright', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box1item2').css( 'margin-right', newval+'px');
	});
});	

//box1 texts margin left
wp.customize( 'woobizzheader_small_box1txtmarginleft', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box1item2').css( 'margin-left', newval+'px');
	});
});	

//box1 image
wp.customize( 'woobizzheader_small_box1logo', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box1item1' ).css( 'background-image', 'url(' +newval+ ')' );
	});
});	

//-------------------------------------------------------------	
//BOX2
//-------------------------------------------------------------	
//box2 position
wp.customize( 'woobizzheader_small_box2position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box2').css( 'display', 'flex');
		jQuery( '.woobizzheader-small-box2').css( 'order', +newval);
	});
});
//box2 width
wp.customize( 'woobizzheader_small_box2width', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box2').css( 'width', newval+'%');
	});
});
//box2 title
wp.customize( 'woobizzheader_small_box2title', function( value ) {	
	value.bind( function( newval ) {	
	jQuery( '#woobizzheader-small-box2title' ).text( newval );
	} );
} );
//box2 title size
wp.customize( 'woobizzheader_small_box2titlesize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-small-box2title').css( 'font-size', newval+'px');
	} );
} );
//box2 title color
wp.customize( 'woobizzheader_small_box2titlecolor', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-small-box2title').css( 'color', newval);
	} );
} );
//box2 description
wp.customize( 'woobizzheader_small_box2description', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( '#woobizzheader-small-box2description' ).text( newval );
	} );
} );

//box2 description size
wp.customize( 'woobizzheader_small_box2descriptionsize', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-small-box2description').css( 'font-size', newval+'px');
	} );
} );

//box2 description color
wp.customize( 'woobizzheader_small_box2descriptioncolor', function( value ) {
	
	value.bind( function( newval ) {
	
	jQuery( 'p#woobizzheader-small-box2description').css( 'color', newval);
	} );
} );

//box2 texts line height
wp.customize( 'woobizzheader_small_box2txtlineheight', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box2item2').css( 'line-height', newval+'px');
	});
});	

//box2 texts margin top
wp.customize( 'woobizzheader_small_box2txtmargintop', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box2item2').css( 'margin-top', newval+'px');
	});
});

//box2 texts margin bottom
wp.customize( 'woobizzheader_small_box2txtmarginbottom', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box2item2').css( 'margin-bottom', newval+'px');
	});
});

//box2 texts margin right
wp.customize( 'woobizzheader_small_box2txtmarginright', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box2item2').css( 'margin-right', newval+'px');
	});
});	

//box2 texts margin left
wp.customize( 'woobizzheader_small_box2txtmarginleft', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box2item2').css( 'margin-left', newval+'px');
	});
});	

//box2 image
wp.customize( 'woobizzheader_small_box2logo', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-box2item1' ).css( 'background-image', 'url(' +newval+ ')' );
	});
});	
//-------------------------------------------------------------	
//WIDGET1
//-------------------------------------------------------------	
//widget1 position
wp.customize( 'woobizzheader_small_widget1position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-widget1').css( 'display', 'flex');
		jQuery( '.woobizzheader-small-widget1').css( 'order', +newval);
	});
});
//widget1 width
wp.customize( 'woobizzheader_small_widget1width', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-widget1').css( 'width', newval+'%');
	});
});

//-------------------------------------------------------------	
//WIDGET2
//-------------------------------------------------------------	
//widget2 position
wp.customize( 'woobizzheader_small_widget2position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-widget2').css( 'display', 'flex');
		jQuery( '.woobizzheader-small-widget2').css( 'order', +newval);
	});
});
//widget2 width
wp.customize( 'woobizzheader_small_widget2width', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-widget2').css( 'width', newval+'%');
	});
});

//-------------------------------------------------------------	
//WIDGET1
//-------------------------------------------------------------	
//sidenav1 position
wp.customize( 'woobizzheader_small_sidenav1position', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-sidenav1').css( 'display', 'flex');
		jQuery( '.woobizzheader-small-sidenav1').css( 'order', +newval);
	});
});
//sidenav1 width
wp.customize( 'woobizzheader_small_sidenav1width', function( value ) {
	value.bind( function( newval ) {
		jQuery( '.woobizzheader-small-sidenav1').css( 'width', newval+'%');
	});
});