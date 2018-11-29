<?php
function woobizzheader_general_css(){
//-----------------------------------------------------------------------------------------
//HELPER
//-----------------------------------------------------------------------------------------
$woobizzheader_general_helperinfos= get_theme_mod('woobizzheader_general_helperinfos');
if      (is_customize_preview() && $woobizzheader_general_helperinfos==0){
		$woobizzheader_general_helperinfos="none";
}elseif (is_customize_preview() && $woobizzheader_general_helperinfos==1){
		$woobizzheader_general_helperinfos="flex";
}else {
		$woobizzheader_general_helperinfos="none";
}
$woobizzheader_general_helpergrid= get_theme_mod('woobizzheader_general_helpergrid');
$woobizzheader_general_itemsbordercolor= get_theme_mod('woobizzheader_general_itemsbordercolor');
if  	(is_customize_preview() && $woobizzheader_general_helpergrid==0){
		$woobizzheader_general_fullgriddisplay="none";
}elseif (is_customize_preview() && $woobizzheader_general_helpergrid==1){
		$woobizzheader_general_fullgriddisplay = $woobizzheader_general_helpergrid."px solid ".$woobizzheader_general_itemsbordercolor;
}else {
		$woobizzheader_general_fullgriddisplay="none";
}
//--------------------------------------------------------------------------------------
//START GS CSS
//--------------------------------------------------------------------------------------
echo"
<style>
.woobizzheader-general-box{
	display:flex;
	height:auto;
	box-sizing:border-box;
	margin:0;
	border: ".$woobizzheader_general_fullgriddisplay."!important;
}
.woobizzheader-general-txthelp{
	display:".$woobizzheader_general_helperinfos."!important;
	align-self:center;
	align-items:center!important;
	padding: 5px 5px!important;
	background:yellow!important;
	position:absolute;
	z-index:1;
	color:initial;
	font-size:small;
}
.site-header .textwidget p {
    padding: 0!important;
    margin: 0!important;
}
span.woocommerce-Price-amount.amount {
    font-size: initial;
}
header#masthead {
    margin-bottom: 0px;
}
.woobizzheader-general-txthelp:after{
	margin-left:33px;
}
.storefront-breadcrumb {
    padding: 5px 50px;
    margin: 0;
    border-bottom: 1px solid #d8d8d8;
}
.woobizzheader-general-box form {
	margin-bottom: 0!important;
}
.site{overflow-x: visible;}
.col-full{padding:0;}
.woobizzheader-items-box{display:flex;}
.site-header-cart .cart-contents::after{display:none!important;}
.site-search .widget_product_search form input[type=search], .site-search .widget_product_search form input[type=text] {
	min-height: 50px;
	border: none;
	background: white;
}
.customize-partial-edit-shortcut-large_brand_edit,
.customize-partial-edit-shortcut-large_bg_edit,
.customize-partial-edit-shortcut-large_menu1_edit,
.customize-partial-edit-shortcut-large_menu2_edit,
.customize-partial-edit-shortcut-large_menu3_edit,
.customize-partial-edit-shortcut-large_cart_edit,
.customize-partial-edit-shortcut-large_search_edit,
.customize-partial-edit-shortcut-large_box1_edit,
.customize-partial-edit-shortcut-large_box2_edit,
.customize-partial-edit-shortcut-large_widget1_edit,
.customize-partial-edit-shortcut-large_widget2_edit,
.customize-partial-edit-shortcut-medium_brand_edit,
.customize-partial-edit-shortcut-medium_bg_edit,
.customize-partial-edit-shortcut-medium_menu1_edit,
.customize-partial-edit-shortcut-medium_menu2_edit,
.customize-partial-edit-shortcut-medium_menu3_edit,
.customize-partial-edit-shortcut-medium_cart_edit,
.customize-partial-edit-shortcut-medium_search_edit,
.customize-partial-edit-shortcut-medium_box1_edit,
.customize-partial-edit-shortcut-medium_box2_edit,
.customize-partial-edit-shortcut-medium_widget1_edit,
.customize-partial-edit-shortcut-medium_widget2_edit,
.customize-partial-edit-shortcut-small_brand_edit,
.customize-partial-edit-shortcut-small_bg_edit,
.customize-partial-edit-shortcut-small_menu1_edit,
.customize-partial-edit-shortcut-small_menu2_edit,
.customize-partial-edit-shortcut-small_menu3_edit,
.customize-partial-edit-shortcut-small_cart_edit,
.customize-partial-edit-shortcut-small_search_edit,
.customize-partial-edit-shortcut-small_box1_edit,
.customize-partial-edit-shortcut-small_box2_edit,
.customize-partial-edit-shortcut-small_widget1_edit,
.customize-partial-edit-shortcut-small_widget2_edit
{
	top: 0!important;
	left: 35px!important;
}

	.site-header-cart .cart-contents .count {
		display: none;
	}
	.woobizzheader-large-cartitem2{
		display: flex;
		flex-direction: column;
		text-align: center;
		margin: 10px 10px;
		
	}	
	.woobizzheader-large-cartitem2 p {
		margin:0;
	}
	.site-header-cart .cart-contents::before {
		display: none!important;
	}
	.site-header-cart .cart-contents {
		padding: 0;
	}
	a.cart-contents {
		display: grid!important;
		text-align: left;
	}
	.woocommerce-active .site-header .site-header-cart {
		width: auto;
	}
	.widget.woocommerce.widget_shopping_cart {
		display: none;
	}
	a.cart-contents {
		display: grid!important;
		text-align: left;
	}
	.woocommerce-active .site-header .site-header-cart {
		width: auto;
	}
	.woobizzheader-item-cart p, h3 {
		margin:0!important;
	}
	.woobizzheader-large-cartitems p {
		margin: 0;
	}
	.woobizzheader-large-cartitems {
		display: flex;
		align-items: center;
		height: auto;
	}	
	.noselect {
	-webkit-touch-callout: none; /* iOS Safari */
		-webkit-user-select: none; /* Safari */
		-khtml-user-select: none; /* Konqueror HTML */
		-moz-user-select: none; /* Firefox */
			-ms-user-select: none; /* Internet Explorer/Edge */
				user-select: none; /* Non-prefixed version, currently
									supported by Chrome and Opera */
	}
</style>";
}
add_action("wp_head","woobizzheader_general_css",100);