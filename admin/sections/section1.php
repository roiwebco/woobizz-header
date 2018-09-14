<?php
//-------------------------------------------------------------
//WOOBIZZ BEFORE FOOTER FUNCTIONS
//-------------------------------------------------------------
//TRASFORM HEX TO RGB
function woobizzheader_hextorgb($hex) {
$hex = str_replace("#", "", $hex);
if(strlen($hex) == 3) {
  $r = hexdec(substr($hex,0,1).substr($hex,0,1));
  $g = hexdec(substr($hex,1,1).substr($hex,1,1));
  $b = hexdec(substr($hex,2,1).substr($hex,2,1));
} else {
  $r = hexdec(substr($hex,0,2));
  $g = hexdec(substr($hex,2,2));
  $b = hexdec(substr($hex,4,2));
}
$rgb = array($r, $g, $b);
return implode(",", $rgb); // returns the rgb values separated by commas
//return $rgb; // returns an array with the rgb values
}
//ALL CSS OPTIONS--------------------------------------------------------------------------
function woobizzheader_sidebar_css(){
//--------------------------------------------------------------------------------------
// START 1.0 HEADER WIDTH
//--------------------------------------------------------------------------------------
$woobizzheader_width= get_option(WOOBIZZHEADER.'_woobizzheader_width');
$woobizzheader_maxwidth= get_option(WOOBIZZHEADER.'_woobizzheader_maxwidth');
$woobizzheader_minwidth= get_option(WOOBIZZHEADER.'_woobizzheader_minwidth');

//--------------------------------------------------------------------------------------
// START 1.1 FOOTER BACKGROUND
//--------------------------------------------------------------------------------------
//Background
$woobizzheader_backgroundimage= get_option(WOOBIZZHEADER.'_woobizzheader_backgroundimage');
$woobizzheader_backgroundcolor= get_option(WOOBIZZHEADER.'_woobizzheader_backgroundcolor');
$woobizzheader_backgroundsize= get_option(WOOBIZZHEADER.'_woobizzheader_backgroundsize');

if ($woobizzheader_backgroundsize==0){
		$woobizzheader_backgroundsize="contain";
	} elseif($woobizzheader_backgroundsize==1) {
		$woobizzheader_backgroundsize="cover";
	} elseif($woobizzheader_backgroundsize==2) {
		$woobizzheader_backgroundsize="inherit";
	} elseif($woobizzheader_backgroundsize==3) {
		$woobizzheader_backgroundsize="initial";
	} else {
		$woobizzheader_backgroundsize="initial";
} 
$woobizzheader_backgroundrepeat= get_option(WOOBIZZHEADER.'_woobizzheader_backgroundrepeat');
if ($woobizzheader_backgroundrepeat==0){
		$woobizzheader_backgroundrepeat="no-repeat";
	} elseif($woobizzheader_backgroundrepeat==1) {
		$woobizzheader_backgroundrepeat="repeat";
	} elseif($woobizzheader_backgroundrepeat==2) {
		$woobizzheader_backgroundrepeat="repeat-x";
	} elseif($woobizzheader_backgroundrepeat==3) {
		$woobizzheader_backgroundrepeat="repeat-y";
	} elseif($woobizzheader_backgroundrepeat==4) {
		$woobizzheader_backgroundrepeat="round";
	} elseif($woobizzheader_backgroundrepeat==5) {
		$woobizzheader_backgroundrepeat="space";
	} elseif($woobizzheader_backgroundrepeat==6) {
		$woobizzheader_backgroundrepeat="inherit";	
	} elseif($woobizzheader_backgroundrepeat==5) {
		$woobizzheader_backgroundrepeat="initial";		
	} else {
		$woobizzheader_backgroundrepeat="initial";
} 
$woobizzheader_backgroundposition= get_option(WOOBIZZHEADER.'_woobizzheader_backgroundposition');
if ($woobizzheader_backgroundposition==0){
		$woobizzheader_backgroundposition="left top";
	} elseif($woobizzheader_backgroundposition==1) {
		$woobizzheader_backgroundposition="left center";
	} elseif($woobizzheader_backgroundposition==2) {
		$woobizzheader_backgroundposition="left bottom";
	} elseif($woobizzheader_backgroundposition==3) {
		$woobizzheader_backgroundposition="right top";
	} elseif($woobizzheader_backgroundposition==4) {
		$woobizzheader_backgroundposition="right center";
	} elseif($woobizzheader_backgroundposition==5) {
		$woobizzheader_backgroundposition="right bottom";
	} elseif($woobizzheader_backgroundposition==6) {
		$woobizzheader_backgroundposition="center top";	
	} elseif($woobizzheader_backgroundposition==7) {
		$woobizzheader_backgroundposition="center center";	
	} elseif($woobizzheader_backgroundposition==8) {
		$woobizzheader_backgroundposition="center bottom";	
	} elseif($woobizzheader_backgroundposition==9) {
		$woobizzheader_backgroundposition="initial";	
	} elseif($woobizzheader_backgroundposition==10) {
		$woobizzheader_backgroundposition="initial";		
	} else {
		$woobizzheader_backgroundposition="initial";
} 
//Gradients
$woobizzheader_backgroundgradient1= get_option(WOOBIZZHEADER.'_woobizzheader_backgroundgradient1');
$woobizzheader_backgroundgradient1opacity= get_option(WOOBIZZHEADER.'_woobizzheader_backgroundgradient1opacity');
$trasnform_woobizzheader_backgroundgradient1=woobizzheader_hextorgb($woobizzheader_backgroundgradient1);
$woobizzheader_backgroundfullgradient1=$trasnform_woobizzheader_backgroundgradient1.",".$woobizzheader_backgroundgradient1opacity;
$woobizzheader_backgroundgradient2= get_option(WOOBIZZHEADER.'_woobizzheader_backgroundgradient2');
$woobizzheader_backgroundgradient2opacity= get_option(WOOBIZZHEADER.'_woobizzheader_backgroundgradient2opacity');
$trasnform_woobizzheader_backgroundgradient2=woobizzheader_hextorgb($woobizzheader_backgroundgradient2);
$woobizzheader_backgroundfullgradient2=$trasnform_woobizzheader_backgroundgradient2.",".$woobizzheader_backgroundgradient2opacity;
//--------------------------------------------------------------------------------------
// END 1.1 FOOTER BACKGROUND
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 1.2 FOOTER MARGINS
//--------------------------------------------------------------------------------------
//Margin Top
$woobizzheader_margintopsize= get_option(WOOBIZZHEADER.'_woobizzheader_margintopsize');
$woobizzheader_marginunittop= get_option(WOOBIZZHEADER.'_woobizzheader_marginunittop');
if ($woobizzheader_marginunittop==0){
	$woobizzheader_marginunittop="px";
} elseif($woobizzheader_marginunittop==1) {
	$woobizzheader_marginunittop="%";
} elseif($woobizzheader_marginunittop==2) {
	$woobizzheader_marginunittop="em";
} elseif($woobizzheader_marginunittop==3) {
	$woobizzheader_marginunittop="pt";
} else {
	$woobizzheader_marginunittop="initial";
} 
//Margin Right
$woobizzheader_marginrightsize= get_option(WOOBIZZHEADER.'_woobizzheader_marginrightsize');
$woobizzheader_marginunitright= get_option(WOOBIZZHEADER.'_woobizzheader_marginunitright');
if ($woobizzheader_marginunitright==0){
	$woobizzheader_marginunitright="px";
} elseif($woobizzheader_marginunitright==1) {
	$woobizzheader_marginunitright="%";
} elseif($woobizzheader_marginunitright==2) {
	$woobizzheader_marginunitright="em";
} elseif($woobizzheader_marginunitright==3) {
	$woobizzheader_marginunitright="pt";
} else {
	$woobizzheader_marginunitright="initial";
}	
//Margin Bottom
$woobizzheader_marginbottomsize= get_option(WOOBIZZHEADER.'_woobizzheader_marginbottomsize');
$woobizzheader_marginunitbottom= get_option(WOOBIZZHEADER.'_woobizzheader_marginunitbottom');
if ($woobizzheader_marginunitbottom==0){
	$woobizzheader_marginunitbottom="px";
} elseif($woobizzheader_marginunitbottom==1) {
	$woobizzheader_marginunitbottom="%";
} elseif($woobizzheader_marginunitbottom==2) {
	$woobizzheader_marginunitbottom="em";
} elseif($woobizzheader_marginunitbottom==3) {
	$woobizzheader_marginunitbottom="pt";
} else {
	$woobizzheader_marginunitbottom="initial";
}	
//Margin Left
$woobizzheader_marginleftsize= get_option(WOOBIZZHEADER.'_woobizzheader_marginleftsize');
$woobizzheader_marginunitleft= get_option(WOOBIZZHEADER.'_woobizzheader_marginunitleft');
if ($woobizzheader_marginunitleft==0){
	$woobizzheader_marginunitleft="px";
} elseif($woobizzheader_marginunitleft==1) {
	$woobizzheader_marginunitleft="%";
} elseif($woobizzheader_marginunitleft==2) {
	$woobizzheader_marginunitleft="em";
} elseif($woobizzheader_marginunitleft==3) {
	$woobizzheader_marginunitleft="pt";
} else {
	$woobizzheader_marginunitleft="initial";
}
//Full Margin
$woobizzheader_marginfull =  $woobizzheader_margintopsize.$woobizzheader_marginunittop." "
							  .$woobizzheader_marginrightsize.$woobizzheader_marginunitright." "
							  .$woobizzheader_marginbottomsize.$woobizzheader_marginunitbottom." "
							  .$woobizzheader_marginleftsize.$woobizzheader_marginunitleft;		
//--------------------------------------------------------------------------------------
// END 1.2 FOOTER MARGINS
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 1.3 FOOTER PADDINGS
//--------------------------------------------------------------------------------------
//Padding Top
$woobizzheader_paddingtopsize= get_option(WOOBIZZHEADER.'_woobizzheader_paddingtopsize');
$woobizzheader_paddingunittop= get_option(WOOBIZZHEADER.'_woobizzheader_paddingunittop');
if ($woobizzheader_paddingunittop==0){
	$woobizzheader_paddingunittop="px";
} elseif($woobizzheader_paddingunittop==1) {
	$woobizzheader_paddingunittop="%";
} elseif($woobizzheader_paddingunittop==2) {
	$woobizzheader_paddingunittop="em";
} elseif($woobizzheader_paddingunittop==3) {
	$woobizzheader_paddingunittop="pt";
} else {
	$woobizzheader_paddingunittop="initial";
} 
//Padding Right
$woobizzheader_paddingrightsize= get_option(WOOBIZZHEADER.'_woobizzheader_paddingrightsize');
$woobizzheader_paddingunitright= get_option(WOOBIZZHEADER.'_woobizzheader_paddingunitright');
if ($woobizzheader_paddingunitright==0){
	$woobizzheader_paddingunitright="px";
} elseif($woobizzheader_paddingunitright==1) {
	$woobizzheader_paddingunitright="%";
} elseif($woobizzheader_paddingunitright==2) {
	$woobizzheader_paddingunitright="em";
} elseif($woobizzheader_paddingunitright==3) {
	$woobizzheader_paddingunitright="pt";
} else {
	$woobizzheader_paddingunitright="initial";
}	
//Padding Bottom
$woobizzheader_paddingbottomsize= get_option(WOOBIZZHEADER.'_woobizzheader_paddingbottomsize');
$woobizzheader_paddingunitbottom= get_option(WOOBIZZHEADER.'_woobizzheader_paddingunitbottom');
if ($woobizzheader_paddingunitbottom==0){
	$woobizzheader_paddingunitbottom="px";
} elseif($woobizzheader_paddingunitbottom==1) {
	$woobizzheader_paddingunitbottom="%";
} elseif($woobizzheader_paddingunitbottom==2) {
	$woobizzheader_paddingunitbottom="em";
} elseif($woobizzheader_paddingunitbottom==3) {
	$woobizzheader_paddingunitbottom="pt";
} else {
	$woobizzheader_paddingunitbottom="initial";
}	
//Padding Left
$woobizzheader_paddingleftsize= get_option(WOOBIZZHEADER.'_woobizzheader_paddingleftsize');
$woobizzheader_paddingunitleft= get_option(WOOBIZZHEADER.'_woobizzheader_paddingunitleft');
if ($woobizzheader_paddingunitleft==0){
	$woobizzheader_paddingunitleft="px";
} elseif($woobizzheader_paddingunitleft==1) {
	$woobizzheader_paddingunitleft="%";
} elseif($woobizzheader_paddingunitleft==2) {
	$woobizzheader_paddingunitleft="em";
} elseif($woobizzheader_paddingunitleft==3) {
	$woobizzheader_paddingunitleft="pt";
} else {
	$woobizzheader_paddingunitleft="initial";
}
//Full Paddings
$woobizzheader_paddingfull =  $woobizzheader_paddingtopsize.$woobizzheader_paddingunittop." "
							  .$woobizzheader_paddingrightsize.$woobizzheader_paddingunitright." "
							  .$woobizzheader_paddingbottomsize.$woobizzheader_paddingunitbottom." "
							  .$woobizzheader_paddingleftsize.$woobizzheader_paddingunitleft;	
//--------------------------------------------------------------------------------------
// END 1.3 FOOTER PADDINGS
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// START 1.4 FOOTER BORDERS
//--------------------------------------------------------------------------------------
//Border Top
$woobizzheader_bordertopsize= get_option(WOOBIZZHEADER.'_woobizzheader_bordertopsize');
$woobizzheader_bordertopcolor= get_option(WOOBIZZHEADER.'_woobizzheader_bordertopcolor');
$woobizzheader_bordertopstyle= get_option(WOOBIZZHEADER.'_woobizzheader_bordertopstyle');
if ($woobizzheader_bordertopstyle==0){
		$woobizzheader_bordertopstyle="dotted";
	} elseif($woobizzheader_bordertopstyle==1) {
		$woobizzheader_bordertopstyle="dashed";
	} elseif($woobizzheader_bordertopstyle==2) {
		$woobizzheader_bordertopstyle="solid";
	} elseif($woobizzheader_bordertopstyle==3) {
		$woobizzheader_bordertopstyle="none";
	} else {$woobizzheader_bordertopstyle="none";
} 
$woobizzheader_bordertopfull=$woobizzheader_bordertopsize."px "
									.$woobizzheader_bordertopstyle." "
									.$woobizzheader_bordertopcolor." ";
//Border Right
$woobizzheader_borderrightsize= get_option(WOOBIZZHEADER.'_woobizzheader_borderrightsize');
$woobizzheader_borderrightcolor= get_option(WOOBIZZHEADER.'_woobizzheader_borderrightcolor');
$woobizzheader_borderrightstyle= get_option(WOOBIZZHEADER.'_woobizzheader_borderrightstyle');
if ($woobizzheader_borderrightstyle==0){
		$woobizzheader_borderrightstyle="dotted";
	} elseif($woobizzheader_borderrightstyle==1) {
		$woobizzheader_borderrightstyle="dashed";
	} elseif($woobizzheader_borderrightstyle==2) {
		$woobizzheader_borderrightstyle="solid";
	} elseif($woobizzheader_borderrightstyle==3) {
		$woobizzheader_borderrightstyle="none";
	} else {$woobizzheader_borderrightstyle="none";
} 
$woobizzheader_borderrightfull=$woobizzheader_borderrightsize."px "
									.$woobizzheader_borderrightstyle." "
									.$woobizzheader_borderrightcolor." ";
//Border Bottom
$woobizzheader_borderbottomsize= get_option(WOOBIZZHEADER.'_woobizzheader_borderbottomsize');
$woobizzheader_borderbottomcolor= get_option(WOOBIZZHEADER.'_woobizzheader_borderbottomcolor');
$woobizzheader_borderbottomstyle= get_option(WOOBIZZHEADER.'_woobizzheader_borderbottomstyle');
if ($woobizzheader_borderbottomstyle==0){
		$woobizzheader_borderbottomstyle="dotted";
	} elseif($woobizzheader_borderbottomstyle==1) {
		$woobizzheader_borderbottomstyle="dashed";
	} elseif($woobizzheader_borderbottomstyle==2) {
		$woobizzheader_borderbottomstyle="solid";
	} elseif($woobizzheader_borderbottomstyle==3) {
		$woobizzheader_borderbottomstyle="none";
	} else {$woobizzheader_borderbottomstyle="none";
} 
$woobizzheader_borderbottomfull=$woobizzheader_borderbottomsize."px "
									.$woobizzheader_borderbottomstyle." "
									.$woobizzheader_borderbottomcolor." ";	
//Border Left
$woobizzheader_borderleftsize= get_option(WOOBIZZHEADER.'_woobizzheader_borderleftsize');
$woobizzheader_borderleftcolor= get_option(WOOBIZZHEADER.'_woobizzheader_borderleftcolor');
$woobizzheader_borderleftstyle= get_option(WOOBIZZHEADER.'_woobizzheader_borderleftstyle');
if ($woobizzheader_borderleftstyle==0){
		$woobizzheader_borderleftstyle="dotted";
	} elseif($woobizzheader_borderleftstyle==1) {
		$woobizzheader_borderleftstyle="dashed";
	} elseif($woobizzheader_borderleftstyle==2) {
		$woobizzheader_borderleftstyle="solid";
	} elseif($woobizzheader_borderleftstyle==3) {
		$woobizzheader_borderleftstyle="none";
	} else {$woobizzheader_borderleftstyle="none";
} 
$woobizzheader_borderleftfull=$woobizzheader_borderleftsize."px "
									.$woobizzheader_borderleftstyle." "
									.$woobizzheader_borderleftcolor." ";	
//--------------------------------------------------------------------------------------
// END 1.4 FOOTER BORDERS
//--------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------
// END 1.5 FOOTER SHADOWS
//--------------------------------------------------------------------------------------
$woobizzheader_shadowcolor= get_option(WOOBIZZHEADER.'_woobizzheader_shadowcolor');
$woobizzheader_shadowrightdistance= get_option(WOOBIZZHEADER.'_woobizzheader_shadowrightdistance');
$woobizzheader_shadowbottomdistance= get_option(WOOBIZZHEADER.'_woobizzheader_shadowbottomdistance');
$woobizzheader_shadowspread= get_option(WOOBIZZHEADER.'_woobizzheader_shadowspread');
$woobizzheader_shadowsize= get_option(WOOBIZZHEADER.'_woobizzheader_shadowsize');
$woobizzheader_shadowfull=$woobizzheader_shadowrightdistance."px "
						  .$woobizzheader_shadowbottomdistance."px "
						  .$woobizzheader_shadowspread."px "
						  .$woobizzheader_shadowsize."px "
						  .$woobizzheader_shadowcolor;
//END CART WIDGET COLOR----------------------------------------------------------------------------------------------
//START SHOWING CSS OPTIONS------------------------------------------------------------------------------------------
echo"
<style>
	.site-header{
				background:linear-gradient(rgba(".$woobizzheader_backgroundfullgradient1."),
										rgba(".$woobizzheader_backgroundfullgradient2.")),
										url(".$woobizzheader_backgroundimage.");
				background-color:".$woobizzheader_backgroundcolor."!important;
				background-size:".$woobizzheader_backgroundsize."!important;
				background-repeat:".$woobizzheader_backgroundrepeat."!important;
				background-position:".$woobizzheader_backgroundposition."!important;
				margin:".$woobizzheader_marginfull."!important;
				padding:".$woobizzheader_paddingfull."!important;
				box-shadow:".$woobizzheader_shadowfull."!important;
				border-top:".$woobizzheader_bordertopfull."!important;
				border-right:".$woobizzheader_borderrightfull."!important;
				border-bottom:".$woobizzheader_borderbottomfull."!important;
				border-left:".$woobizzheader_borderleftfull."!important;
				list-style: none!important;
	}
	.site-header .col-full {
        width:".$woobizzheader_width."%!important;
		max-width:".$woobizzheader_maxwidth."px!important;
		min-width:".$woobizzheader_minwidth."px!important;;
		margin:0 auto!important;
	}
	
	
	
	
</style>";
}
add_action('wp_head', 'woobizzheader_sidebar_css', 100);