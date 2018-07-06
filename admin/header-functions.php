<?php
 // WOOBIZZ HEADER PLUGIN (functions.php) 
  //RESIZE MENU FIXED
function woobizz_menu_fixed_onresize(){
	?>
		<script type="text/javascript">
		jQuery(document).ready(function() {
			adjustEntry();
			jQuery(window).resize(function(){
				adjustEntry();
			});
			function adjustEntry(){
				jQuery('#content').css('marginTop', (jQuery('#masthead').outerHeight())+'px');
			}
		});
		</script> 
	<?php
}
//add_action('wp_head', 'woobizz_menu_fixed_onresize', 100);
 //TRASFORM HEX TO RGB
  function woobizz_header_hextorgb($hex) {
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
  function woobizz_header_allcssoptions(){
	//BRANDING LOGO FLOAT
	$woobizz_header_brandinglogofloat= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogofloat');
	if ($woobizz_header_brandinglogofloat==0){
			$woobizz_header_brandinglogofloat="none";
		} elseif($woobizz_header_brandinglogofloat==1) {
			$woobizz_header_brandinglogofloat="left";
		} elseif($woobizz_header_brandinglogofloat==2) {
			$woobizz_header_brandinglogofloat="right";
		} elseif($woobizz_header_brandinglogofloat==3) {
			$woobizz_header_brandinglogofloat="initial";
		} elseif($woobizz_header_brandinglogofloat==4) {
			$woobizz_header_brandinglogofloat="inherit";
		} else {
			$woobizz_header_brandinglogofloat="none";
	}
	//BRANDING TEXT FLOAT
	$woobizz_header_brandingtextfloat= get_option(WOOBIZZHEADER.'_woobizz_header_brandingtextfloat');
	if ($woobizz_header_brandingtextfloat==0){
			$woobizz_header_brandingtextfloat="none";
		} elseif($woobizz_header_brandingtextfloat==1) {
			$woobizz_header_brandingtextfloat="left";
		} elseif($woobizz_header_brandingtextfloat==2) {
			$woobizz_header_brandingtextfloat="right";
		} elseif($woobizz_header_brandingtextfloat==3) {
			$woobizz_header_brandingtextfloat="initial";
		} elseif($woobizz_header_brandingtextfloat==4) {
			$woobizz_header_brandingtextfloat="inherit";
		} else {
			$woobizz_header_brandingtextfloat="none";
	}
	//SMENU FLOAT
	$woobizz_header_smenufloat= get_option(WOOBIZZHEADER.'_woobizz_header_smenufloat');
	if ($woobizz_header_smenufloat==0){
			$woobizz_header_smenufloat="none";
		} elseif($woobizz_header_smenufloat==1) {
			$woobizz_header_smenufloat="left";
		} elseif($woobizz_header_smenufloat==2) {
			$woobizz_header_smenufloat="right";
		} elseif($woobizz_header_smenufloat==3) {
			$woobizz_header_smenufloat="initial";
		} elseif($woobizz_header_smenufloat==4) {
			$woobizz_header_smenufloat="inherit";
		} else {
			$woobizz_header_smenufloat="none";
	}
	//SEARCH FLOAT
	$woobizz_header_searchfloat= get_option(WOOBIZZHEADER.'_woobizz_header_searchfloat');
	if ($woobizz_header_searchfloat==0){
			$woobizz_header_searchfloat="none";
		} elseif($woobizz_header_searchfloat==1) {
			$woobizz_header_searchfloat="left";
		} elseif($woobizz_header_searchfloat==2) {
			$woobizz_header_searchfloat="right";
		} elseif($woobizz_header_searchfloat==3) {
			$woobizz_header_searchfloat="initial";
		} elseif($woobizz_header_searchfloat==4) {
			$woobizz_header_searchfloat="inherit";
		} else {
			$woobizz_header_searchfloat="none";
	}
	//PRIMARY MENU FLOAT
	$woobizz_header_pmenufloat= get_option(WOOBIZZHEADER.'_woobizz_header_pmenufloat');
	if ($woobizz_header_pmenufloat==0){
			$woobizz_header_pmenufloat="none";
		} elseif($woobizz_header_pmenufloat==1) {
			$woobizz_header_pmenufloat="left";
		} elseif($woobizz_header_pmenufloat==2) {
			$woobizz_header_pmenufloat="right";
		} elseif($woobizz_header_pmenufloat==3) {
			$woobizz_header_pmenufloat="initial";
		} elseif($woobizz_header_pmenufloat==4) {
			$woobizz_header_pmenufloat="inherit";
		} else {
			$woobizz_header_pmenufloat="none";
	}
	//PHONE FLOAT
	$woobizz_header_phonefloat= get_option(WOOBIZZHEADER.'_woobizz_header_phonefloat');
	if ($woobizz_header_phonefloat==0){
			$woobizz_header_phonefloat="none";
		} elseif($woobizz_header_phonefloat==1) {
			$woobizz_header_phonefloat="left";
		} elseif($woobizz_header_phonefloat==2) {
			$woobizz_header_phonefloat="right";
		} elseif($woobizz_header_phonefloat==3) {
			$woobizz_header_phonefloat="initial";
		} elseif($woobizz_header_phonefloat==4) {
			$woobizz_header_phonefloat="inherit";
		} else {
			$woobizz_header_phonefloat="none";
	}
	//LANG FLOAT
	$woobizz_header_langfloat= get_option(WOOBIZZHEADER.'_woobizz_header_langfloat');
	if ($woobizz_header_langfloat==0){
			$woobizz_header_langfloat="none";
		} elseif($woobizz_header_langfloat==1) {
			$woobizz_header_langfloat="left";
		} elseif($woobizz_header_langfloat==2) {
			$woobizz_header_langfloat="right";
		} elseif($woobizz_header_langfloat==3) {
			$woobizz_header_langfloat="initial";
		} elseif($woobizz_header_langfloat==4) {
			$woobizz_header_langfloat="inherit";
		} else {
			$woobizz_header_langfloat="none";
	}
	//echo $woobizz_header_langfloat;
	//CART FLOAT
	$woobizz_header_cartfloat= get_option(WOOBIZZHEADER.'_woobizz_header_cartfloat');
	if ($woobizz_header_cartfloat==0){
			$woobizz_header_cartfloat="none";
		} elseif($woobizz_header_cartfloat==1) {
			$woobizz_header_cartfloat="left";
		} elseif($woobizz_header_cartfloat==2) {
			$woobizz_header_cartfloat="right";
		} elseif($woobizz_header_cartfloat==3) {
			$woobizz_header_cartfloat="initial";
		} elseif($woobizz_header_cartfloat==4) {
			$woobizz_header_cartfloat="inherit";
		} else {
			$woobizz_header_cartfloat="none";
	}
	//CLEAR OPTIONS--------------------------------------------------------------------------
	//BRANDING LOGO CLEAR
	$woobizz_header_brandinglogoclear= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogoclear');
	if ($woobizz_header_brandinglogoclear==0){
			$woobizz_header_brandinglogoclear="none";
		} elseif($woobizz_header_brandinglogoclear==1) {
			$woobizz_header_brandinglogoclear="left";
		} elseif($woobizz_header_brandinglogoclear==2) {
			$woobizz_header_brandinglogoclear="right";
		} elseif($woobizz_header_brandinglogoclear==3) {
			$woobizz_header_brandinglogoclear="both";
		} elseif($woobizz_header_brandinglogoclear==4) {
			$woobizz_header_brandinglogoclear="initial";
		} elseif($woobizz_header_brandinglogoclear==5) {
			$woobizz_header_brandinglogoclear="inherit";
		} else {
			$woobizz_header_brandinglogoclear="none";
	}
	//echo $woobizz_header_brandinglogoclear;
	//BRANDING TEXT CLEAR
	$woobizz_header_brandingclear= get_option(WOOBIZZHEADER.'_woobizz_header_brandingclear');
	if ($woobizz_header_brandingclear==0){
			$woobizz_header_brandingclear="none";
		} elseif($woobizz_header_brandingclear==1) {
			$woobizz_header_brandingclear="left";
		} elseif($woobizz_header_brandingclear==2) {
			$woobizz_header_brandingclear="right";
		} elseif($woobizz_header_brandingclear==3) {
			$woobizz_header_brandingclear="both";
		} elseif($woobizz_header_brandingclear==4) {
			$woobizz_header_brandingclear="initial";
		} elseif($woobizz_header_brandingclear==5) {
			$woobizz_header_brandingclear="inherit";
		} else {
			$woobizz_header_brandingclear="none";
	}
	//echo $woobizz_header_brandingclear;
	//SMENU CLEAR
	$woobizz_header_smenuclear= get_option(WOOBIZZHEADER.'_woobizz_header_smenuclear');
	if ($woobizz_header_smenuclear==0){
			$woobizz_header_smenuclear="none";
		} elseif($woobizz_header_smenuclear==1) {
			$woobizz_header_smenuclear="left";
		} elseif($woobizz_header_smenuclear==2) {
			$woobizz_header_smenuclear="right";
		} elseif($woobizz_header_smenuclear==3) {
			$woobizz_header_smenuclear="both";
		} elseif($woobizz_header_smenuclear==4) {
			$woobizz_header_smenuclear="initial";
		} elseif($woobizz_header_smenuclear==5) {
			$woobizz_header_smenuclear="inherit";
		} else {
			$woobizz_header_smenuclear="none";
	}
	//echo $woobizz_header_smenuclear;
	//SEARCH CLEAR
	$woobizz_header_searchclear= get_option(WOOBIZZHEADER.'_woobizz_header_searchclear');
	if ($woobizz_header_searchclear==0){
			$woobizz_header_searchclear="none";
		} elseif($woobizz_header_searchclear==1) {
			$woobizz_header_searchclear="left";
		} elseif($woobizz_header_searchclear==2) {
			$woobizz_header_searchclear="right";
		} elseif($woobizz_header_searchclear==3) {
			$woobizz_header_searchclear="both";
		} elseif($woobizz_header_searchclear==4) {
			$woobizz_header_searchclear="initial";
		} elseif($woobizz_header_searchclear==5) {
			$woobizz_header_searchclear="inherit";
		} else {
			$woobizz_header_searchclear="none";
	}
	//echo $woobizz_header_searchclear;
	//PRIMARY MENU CLEAR
	$woobizz_header_pmenuclear= get_option(WOOBIZZHEADER.'_woobizz_header_pmenuclear');
	if ($woobizz_header_pmenuclear==0){
			$woobizz_header_pmenuclear="none";
		} elseif($woobizz_header_pmenuclear==1) {
			$woobizz_header_pmenuclear="left";
		} elseif($woobizz_header_pmenuclear==2) {
			$woobizz_header_pmenuclear="right";
		} elseif($woobizz_header_pmenuclear==3) {
			$woobizz_header_pmenuclear="both";
		} elseif($woobizz_header_pmenuclear==4) {
			$woobizz_header_pmenuclear="initial";
		} elseif($woobizz_header_pmenuclear==5) {
			$woobizz_header_pmenuclear="inherit";
		} else {
			$woobizz_header_pmenuclear="none";
	}
	//echo $woobizz_header_pmenuclear;
	//PHONE CLEAR
	$woobizz_header_phoneclear= get_option(WOOBIZZHEADER.'_woobizz_header_phoneclear');
	if ($woobizz_header_phoneclear==0){
			$woobizz_header_phoneclear="none";
		} elseif($woobizz_header_phoneclear==1) {
			$woobizz_header_phoneclear="left";
		} elseif($woobizz_header_phoneclear==2) {
			$woobizz_header_phoneclear="right";
		} elseif($woobizz_header_phoneclear==3) {
			$woobizz_header_phoneclear="both";
		} elseif($woobizz_header_phoneclear==4) {
			$woobizz_header_phoneclear="initial";
		} elseif($woobizz_header_phoneclear==5) {
			$woobizz_header_phoneclear="inherit";
		} else {
			$woobizz_header_phoneclear="none";
	}
	//echo $woobizz_header_phoneclear;
	//LANG CLEAR
	$woobizz_header_langclear= get_option(WOOBIZZHEADER.'_woobizz_header_langclear');
	if ($woobizz_header_langclear==0){
			$woobizz_header_langclear="none";
		} elseif($woobizz_header_langclear==1) {
			$woobizz_header_langclear="left";
		} elseif($woobizz_header_langclear==2) {
			$woobizz_header_langclear="right";
		} elseif($woobizz_header_langclear==3) {
			$woobizz_header_langclear="both";
		} elseif($woobizz_header_langclear==4) {
			$woobizz_header_langclear="initial";
		} elseif($woobizz_header_langclear==5) {
			$woobizz_header_langclear="inherit";
		} else {
			$woobizz_header_langclear="none";
	}
	//echo $woobizz_header_langclear;
	//CART CLEAR
	$woobizz_header_cartclear= get_option(WOOBIZZHEADER.'_woobizz_header_cartclear');
	if ($woobizz_header_cartclear==0){
			$woobizz_header_cartclear="none";
		} elseif($woobizz_header_cartclear==1) {
			$woobizz_header_cartclear="left";
		} elseif($woobizz_header_cartclear==2) {
			$woobizz_header_cartclear="right";
		} elseif($woobizz_header_cartclear==3) {
			$woobizz_header_cartclear="both";
		} elseif($woobizz_header_cartclear==4) {
			$woobizz_header_cartclear="initial";
		} elseif($woobizz_header_cartclear==5) {
			$woobizz_header_cartclear="inherit";
		} else {
			$woobizz_header_cartclear="none";
	}
	//echo $woobizz_header_cartclear;
	//END CLEAR OPTION-----------------------------------------------------------------------
	// 1.1 HEADER BACKGROUND IMAGE & COLORS---------------------------------------------------
	$woobizz_header_backgroundimage= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundimage');
	$woobizz_header_backgroundcolor= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundcolor');
	$woobizz_header_backgroundsize= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundsize');
	if ($woobizz_header_backgroundsize==0){
			$woobizz_header_backgroundsize="contain";
		} elseif($woobizz_header_backgroundsize==1) {
			$woobizz_header_backgroundsize="cover";
		} elseif($woobizz_header_backgroundsize==2) {
			$woobizz_header_backgroundsize="inherit";
		} elseif($woobizz_header_backgroundsize==3) {
			$woobizz_header_backgroundsize="initial";
		} else {
			$woobizz_header_backgroundsize="initial";
	} 
 	$woobizz_header_backgroundrepeat= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundrepeat');
	if ($woobizz_header_backgroundrepeat==0){
			$woobizz_header_backgroundrepeat="no-repeat";
		} elseif($woobizz_header_backgroundrepeat==1) {
			$woobizz_header_backgroundrepeat="repeat";
		} elseif($woobizz_header_backgroundrepeat==2) {
			$woobizz_header_backgroundrepeat="repeat-x";
		} elseif($woobizz_header_backgroundrepeat==3) {
			$woobizz_header_backgroundrepeat="repeat-y";
		} elseif($woobizz_header_backgroundrepeat==4) {
			$woobizz_header_backgroundrepeat="round";
		} elseif($woobizz_header_backgroundrepeat==5) {
			$woobizz_header_backgroundrepeat="space";
		} elseif($woobizz_header_backgroundrepeat==6) {
			$woobizz_header_backgroundrepeat="inherit";	
		} elseif($woobizz_header_backgroundrepeat==5) {
			$woobizz_header_backgroundrepeat="initial";		
		} else {
			$woobizz_header_backgroundrepeat="initial";
	} 
	$woobizz_header_backgroundposition= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundposition');
	if ($woobizz_header_backgroundposition==0){
			$woobizz_header_backgroundposition="left top";
		} elseif($woobizz_header_backgroundposition==1) {
			$woobizz_header_backgroundposition="left center";
		} elseif($woobizz_header_backgroundposition==2) {
			$woobizz_header_backgroundposition="left bottom";
		} elseif($woobizz_header_backgroundposition==3) {
			$woobizz_header_backgroundposition="right top";
		} elseif($woobizz_header_backgroundposition==4) {
			$woobizz_header_backgroundposition="right center";
		} elseif($woobizz_header_backgroundposition==5) {
			$woobizz_header_backgroundposition="right bottom";
		} elseif($woobizz_header_backgroundposition==6) {
			$woobizz_header_backgroundposition="center top";	
		} elseif($woobizz_header_backgroundposition==7) {
			$woobizz_header_backgroundposition="center center";	
		} elseif($woobizz_header_backgroundposition==8) {
			$woobizz_header_backgroundposition="center bottom";	
		} elseif($woobizz_header_backgroundposition==9) {
			$woobizz_header_backgroundposition="initial";	
		} elseif($woobizz_header_backgroundposition==10) {
			$woobizz_header_backgroundposition="initial";		
		} else {
			$woobizz_header_backgroundposition="initial";
	} 
	$woobizz_header_backgrounddisplay= get_option(WOOBIZZHEADER.'_woobizz_header_backgrounddisplay');
	if ($woobizz_header_backgrounddisplay==0){
			$woobizz_header_backgrounddisplay="block";
		} elseif($woobizz_header_backgrounddisplay==1) {
			$woobizz_header_backgrounddisplay="flex";
		} elseif($woobizz_header_backgrounddisplay==2) {
			$woobizz_header_backgrounddisplay="none";
		} else {
			$woobizz_header_backgrounddisplay="block";
	} 
	// 1.2 HEADER BACKGROUND GRADIENTS-------------------------------------------------------------------	
	$woobizz_header_backgroundgradient1= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundgradient1');
	$woobizz_header_backgroundgradient1opacity= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundgradient1opacity');
	$trasnform_woobizz_header_backgroundgradient1=woobizz_header_hextorgb($woobizz_header_backgroundgradient1);
	$woobizz_header_backgroundfullgradient1=$trasnform_woobizz_header_backgroundgradient1.",".$woobizz_header_backgroundgradient1opacity;
	$woobizz_header_backgroundgradient2= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundgradient2');
	$woobizz_header_backgroundgradient2opacity= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundgradient2opacity');
	$trasnform_woobizz_header_backgroundgradient2=woobizz_header_hextorgb($woobizz_header_backgroundgradient2);
	$woobizz_header_backgroundfullgradient2=$trasnform_woobizz_header_backgroundgradient2.",".$woobizz_header_backgroundgradient2opacity;
	// 1.3 HEADER BACKGROUND MARGINS & PADDINGS------------------------------------------------------------
	$woobizz_header_backgroundmargintop= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundmargintop');
	$woobizz_header_backgroundmarginright= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundmarginright');
	$woobizz_header_backgroundmarginleft= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundmarginleft');
	$woobizz_header_backgroundmarginbottom= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundmarginbottom');
	$woobizz_header_backgroundpaddingtop= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundpaddingtop');
	$woobizz_header_backgroundpaddingright= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundpaddingright');
	$woobizz_header_backgroundpaddingleft= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundpaddingleft');
	$woobizz_header_backgroundpaddingbottom= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundpaddingbottom');
	// 1.4 HEADER BACKGROUND SHADOWS & BORDERS
	$woobizz_header_backgroundshadowcolor= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundshadowcolor');
	$woobizz_header_backgroundshadowrightdistance= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundshadowrightdistance');
	$woobizz_header_backgroundshadowbottomdistance= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundshadowbottomdistance');
	$woobizz_header_backgroundshadowspread= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundshadowspread');
	$woobizz_header_backgroundshadowsize= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundshadowsize');
	$woobizz_header_backgroundborderbottomcolor= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundborderbottomcolor');
	$woobizz_header_backgroundborderbottomsize= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundborderbottomsize');
	$woobizz_header_backgroundborderbottomstyle= get_option(WOOBIZZHEADER.'_woobizz_header_backgroundborderbottomstyle');
	if ($woobizz_header_backgroundborderbottomstyle==0){
			$woobizz_header_backgroundborderbottomstyle="dotted";
		} elseif($woobizz_header_backgroundborderbottomstyle==1) {
			$woobizz_header_backgroundborderbottomstyle="dashed";
		} elseif($woobizz_header_backgroundborderbottomstyle==2) {
			$woobizz_header_backgroundborderbottomstyle="solid";
		} elseif($woobizz_header_backgroundborderbottomstyle==2) {
			$woobizz_header_backgroundborderbottomstyle="none";
		} else {$woobizz_header_backgroundborderbottomstyle="none";
	} 
	// 2.- Header Branding Options///////////////////////////////////////////////////////////////////////////////////
	// 2.1 BRANDING LOGO-----------------------------------------------------------------------------------------------
	//LOGO STYLES
	$woobizz_header_brandinglogobordersize= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogobordersize');
	$woobizz_header_brandinglogobordercolor= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogobordercolor');
	$woobizz_header_brandinglogoborderradius= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogoborderradius');
	$woobizz_header_brandinglogoborderstyle= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogoborderstyle');
	if ($woobizz_header_brandinglogoborderstyle==0){
			$woobizz_header_brandinglogoborderstyle="dotted";
		} elseif($woobizz_header_brandinglogoborderstyle==1) {
			$woobizz_header_brandinglogoborderstyle="dashed";
		} elseif($woobizz_header_brandinglogoborderstyle==2) {
			$woobizz_header_brandinglogoborderstyle="solid";
		} elseif($woobizz_header_brandinglogoborderstyle==2) {
			$woobizz_header_brandinglogoborderstyle="none";
		} else {$woobizz_header_brandinglogoborderstyle="none";
	} 
	$woobizz_header_brandinglogoborderfull=$woobizz_header_brandinglogobordersize."px "
										.$woobizz_header_brandinglogoborderstyle." "
										.$woobizz_header_brandinglogobordercolor." ";
	$woobizz_header_brandinglogoshadowcolor= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogoshadowcolor');
	$woobizz_header_brandinglogoshadowrightdistance= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogoshadowrightdistance');
	$woobizz_header_brandinglogoshadowbottomdistance= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogoshadowbottomdistance');
	$woobizz_header_brandinglogoshadowspread= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogoshadowspread');
	$woobizz_header_brandinglogoshadowsize= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogoshadowsize');
	$woobizz_header_brandinglogoshadowapply= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogoshadowapply');
	if ($woobizz_header_brandinglogoshadowapply==0){
			$woobizz_header_brandinglogoshadowfull=$woobizz_header_brandinglogoshadowrightdistance."px "
												.$woobizz_header_brandinglogoshadowbottomdistance."px "
												.$woobizz_header_brandinglogoshadowspread."px "
												.$woobizz_header_brandinglogoshadowsize."px "
												.$woobizz_header_brandinglogoshadowcolor;
		} elseif($woobizz_header_brandinglogoshadowapply==1) {
			$woobizz_header_brandinglogoshadowfull="none";
		} else {
			$woobizz_header_brandinglogoshadowfull="none";
	} 
	//MARGINS LOGO
	$woobizz_header_brandinglogomargintop = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogomargintop');
	$woobizz_header_brandinglogomarginbottom = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogomarginbottom');
	$woobizz_header_brandinglogomarginright = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogomarginright');
	$woobizz_header_brandinglogomarginleft = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogomarginleft');
	$woobizz_header_brandinglogopaddingtop = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogopaddingtop');
	$woobizz_header_brandinglogopaddingbottom = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogopaddingbottom');
	$woobizz_header_brandinglogopaddingright = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogopaddingright');
	$woobizz_header_brandinglogopaddingleft = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogopaddingleft');
	$woobizz_header_brandinglogodisplay= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogodisplay');
	if ($woobizz_header_brandinglogodisplay==0){
			$woobizz_header_brandinglogodisplay="none";
		} elseif($woobizz_header_brandinglogodisplay==1) {
			$woobizz_header_brandinglogodisplay="block";
		} else {
			$woobizz_header_brandinglogodisplay="block";
	}
	//2.2 BRANDING LOGO WIDTH SIZE----------------------------------------------------------------------
	$woobizz_header_brandinglogowidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogowidthtype');
	$woobizz_header_brandinglogowidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogowidthsize');
	if ($woobizz_header_brandinglogowidthtype==0){
			$woobizz_header_brandinglogowidthtype="px";
		} elseif($woobizz_header_brandinglogowidthtype==1) {
			$woobizz_header_brandinglogowidthtype="%";
		} elseif($woobizz_header_brandinglogowidthtype==2) {
			$woobizz_header_brandinglogowidthtype="auto";
			$woobizz_header_brandinglogowidthsize="";
		} else {
			$woobizz_header_brandinglogowidthtype="auto";
			$woobizz_header_brandinglogowidthsize="";
	}
	$woobizz_header_brandinglogowidthfull=$woobizz_header_brandinglogowidthsize.$woobizz_header_brandinglogowidthtype;
	$woobizz_header_brandinglogomaxwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogomaxwidthset');
	$woobizz_header_brandinglogomaxwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogomaxwidthtype');
	$woobizz_header_brandinglogomaxwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogomaxwidthsize');
	if ($woobizz_header_brandinglogomaxwidthtype==0){
			$woobizz_header_brandinglogomaxwidthtype="px";
		} elseif($woobizz_header_brandinglogomaxwidthtype==1) {
			$woobizz_header_brandinglogomaxwidthtype="%";
		} else {
			$woobizz_header_brandinglogomaxwidthtype="%";
	}
	if ($woobizz_header_brandinglogomaxwidthset==0){
				$woobizz_header_brandinglogomaxwidthfull=$woobizz_header_brandinglogomaxwidthsize.$woobizz_header_brandinglogomaxwidthtype;
			} elseif($woobizz_header_brandinglogomaxwidthset==1) {
				$woobizz_header_brandinglogomaxwidthfull="none";
			} else {
		}
	$woobizz_header_brandinglogominwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogominwidthset');
	$woobizz_header_brandinglogominwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogominwidthtype');
	$woobizz_header_brandinglogominwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogominwidthsize');
	if ($woobizz_header_brandinglogominwidthtype==0){
			$woobizz_header_brandinglogominwidthtype="px";
		} elseif($woobizz_header_brandinglogominwidthtype==1) {
			$woobizz_header_brandinglogominwidthtype="%";
		} else {
			$woobizz_header_brandinglogominwidthtype="%";
	}
	if ($woobizz_header_brandinglogominwidthset==0){
				$woobizz_header_brandinglogominwidthfull=$woobizz_header_brandinglogominwidthsize.$woobizz_header_brandinglogominwidthtype;
			} elseif($woobizz_header_brandinglogominwidthset==1) {
				$woobizz_header_brandinglogominwidthfull=0;
			} else {
				$woobizz_header_brandinglogominwidthfull=0;
	}		
	// 2.2 BRANDING TITLES MARGINS & PADDINGS------------------------------------------------------------
	$woobizz_header_brandingmargintop = get_option(WOOBIZZHEADER.'_woobizz_header_brandingmargintop');
	$woobizz_header_brandingmarginbottom = get_option(WOOBIZZHEADER.'_woobizz_header_brandingmarginbottom');
	$woobizz_header_brandingmarginright = get_option(WOOBIZZHEADER.'_woobizz_header_brandingmarginright');
	$woobizz_header_brandingmarginleft = get_option(WOOBIZZHEADER.'_woobizz_header_brandingmarginleft');
	$woobizz_header_brandingpaddingtop = get_option(WOOBIZZHEADER.'_woobizz_header_brandingpaddingtop');
	$woobizz_header_brandingpaddingbottom = get_option(WOOBIZZHEADER.'_woobizz_header_brandingpaddingbottom');
	$woobizz_header_brandingpaddingright = get_option(WOOBIZZHEADER.'_woobizz_header_brandingpaddingright');
	$woobizz_header_brandingpaddingleft = get_option(WOOBIZZHEADER.'_woobizz_header_brandingpaddingleft');
	//2.3 BRANDING TITLES WIDTH-------------------------------------------------------------------------
	$woobizz_header_brandingtitleswidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_brandingtitleswidthtype');
	$woobizz_header_brandingtitleswidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_brandingtitleswidthsize');
	if ($woobizz_header_brandingtitleswidthtype==0){
			$woobizz_header_brandingtitleswidthtype="px";
		} elseif($woobizz_header_brandingtitleswidthtype==1) {
			$woobizz_header_brandingtitleswidthtype="%";
		} elseif($woobizz_header_brandingtitleswidthtype==2) {
			$woobizz_header_brandingtitleswidthtype="auto";
			$woobizz_header_brandingtitleswidthsize="";
		} else {
			$woobizz_header_brandingtitleswidthtype="auto";
			$woobizz_header_brandingtitleswidthsize="";
	}
	$woobizz_header_brandingtitleswidthfull=$woobizz_header_brandingtitleswidthsize.$woobizz_header_brandingtitleswidthtype;
	$woobizz_header_brandingtitlesmaxwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_brandingtitlesmaxwidthset');
	$woobizz_header_brandingtitlesmaxwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_brandingtitlesmaxwidthtype');
	$woobizz_header_brandingtitlesmaxwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_brandingtitlesmaxwidthsize');
	if ($woobizz_header_brandingtitlesmaxwidthtype==0){
			$woobizz_header_brandingtitlesmaxwidthtype="px";
		} elseif($woobizz_header_brandingtitlesmaxwidthtype==1) {
			$woobizz_header_brandingtitlesmaxwidthtype="%";
		} else {
			$woobizz_header_brandingtitlesmaxwidthtype="%";
	}
	if ($woobizz_header_brandingtitlesmaxwidthset==0){
				$woobizz_header_brandingtitlesmaxwidthfull=$woobizz_header_brandingtitlesmaxwidthsize.$woobizz_header_brandingtitlesmaxwidthtype;
			} elseif($woobizz_header_brandingtitlesmaxwidthset==1) {
				$woobizz_header_brandingtitlesmaxwidthfull="none";
			} else {
		}
	$woobizz_header_brandingtitlesminwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_brandingtitlesminwidthset');
	$woobizz_header_brandingtitlesminwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_brandingtitlesminwidthtype');
	$woobizz_header_brandingtitlesminwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_brandingtitlesminwidthsize');
	if ($woobizz_header_brandingtitlesminwidthtype==0){
			$woobizz_header_brandingtitlesminwidthtype="px";
		} elseif($woobizz_header_brandingtitlesminwidthtype==1) {
			$woobizz_header_brandingtitlesminwidthtype="%";
		} else {
			$woobizz_header_brandingtitlesminwidthtype="%";
	}
	if ($woobizz_header_brandingtitlesminwidthset==0){
				$woobizz_header_brandingtitlesminwidthfull=$woobizz_header_brandingtitlesminwidthsize.$woobizz_header_brandingtitlesminwidthtype;
			} elseif($woobizz_header_brandingtitlesminwidthset==1) {
				$woobizz_header_brandingtitlesminwidthfull=0;
			} else {
				$woobizz_header_brandingtitlesminwidthfull=0;
	}	
	//------------------------------------------------------------------------------------------------------------------
	// 2.3 BRANDING TITLE & DESCRIPTION
	$woobizz_header_brandingtitlecolor = get_option(WOOBIZZHEADER.'_woobizz_header_brandingtitlecolor');
	$woobizz_header_brandingtitlesize = get_option(WOOBIZZHEADER.'_woobizz_header_brandingtitlesize');
	$woobizz_header_brandingtitledisplay = get_option(WOOBIZZHEADER.'_woobizz_header_brandingtitledisplay');
	$woobizz_header_brandingdisplay= get_option(WOOBIZZHEADER.'_woobizz_header_brandingdisplay');
	$woobizz_header_brandingdescriptioncolor = get_option(WOOBIZZHEADER.'_woobizz_header_brandingdescriptioncolor');
	$woobizz_header_brandingdescriptionsize = get_option(WOOBIZZHEADER.'_woobizz_header_brandingdescriptionsize');
	$woobizz_header_brandingdescriptiondisplay = get_option(WOOBIZZHEADER.'_woobizz_header_brandingdescriptiondisplay');
	if ($woobizz_header_brandingdisplay==0){
			$woobizz_header_brandingdisplay="none";
		} elseif($woobizz_header_brandingdisplay==1) {
			$woobizz_header_brandingdisplay="block";
		} else {
			$woobizz_header_brandingdisplay="block";
	}
	if ($woobizz_header_brandingtitledisplay==0){
			$woobizz_header_brandingtitledisplay="none";
		} elseif($woobizz_header_brandingtitledisplay==1) {
			$woobizz_header_brandingtitledisplay="block";
		} else {
			$woobizz_header_brandingtitledisplay="block";
	}
	if ($woobizz_header_brandingdescriptiondisplay==0){
			$woobizz_header_brandingdescriptiondisplay="none";
		} elseif($woobizz_header_brandingdescriptiondisplay==1) {
			$woobizz_header_brandingdescriptiondisplay="block";
		} else {
			$woobizz_header_brandingdescriptiondisplay="block";
	}
	// 3.- Header Secondary Menu
	// 3.1 SECONDARY MENU COLOR & BACKGROUND
	$woobizz_header_smenutextcolor = get_option(WOOBIZZHEADER.'_woobizz_header_smenutextcolor');
	$woobizz_header_smenutextbackgroundcolor = get_option(WOOBIZZHEADER.'_woobizz_header_smenutextbackgroundcolor');
	$woobizz_header_smenuborderradius = get_option(WOOBIZZHEADER.'_woobizz_header_smenuborderradius');
	$woobizz_header_smenudisplay = get_option(WOOBIZZHEADER.'_woobizz_header_smenudisplay');
	if ($woobizz_header_smenudisplay==0){
			$woobizz_header_smenudisplay="none";
		} elseif($woobizz_header_smenudisplay==1) {
			$woobizz_header_smenudisplay="block";
		} else {
			$woobizz_header_smenudisplay="block";
	}
	//2.3 SECONDARY MENU WIDTH-------------------------------------------------------------------------
	$woobizz_header_smenuwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_smenuwidthtype');
	$woobizz_header_smenuwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_smenuwidthsize');
	if ($woobizz_header_smenuwidthtype==0){
			$woobizz_header_smenuwidthtype="px";
		} elseif($woobizz_header_smenuwidthtype==1) {
			$woobizz_header_smenuwidthtype="%";
		} elseif($woobizz_header_smenuwidthtype==2) {
			$woobizz_header_smenuwidthtype="auto";
			$woobizz_header_smenuwidthsize="";
		} else {
			$woobizz_header_smenuwidthtype="auto";
			$woobizz_header_smenuwidthsize="";
	}
	$woobizz_header_smenuwidthfull=$woobizz_header_smenuwidthsize.$woobizz_header_smenuwidthtype;
	$woobizz_header_smenumaxwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_smenumaxwidthset');
	$woobizz_header_smenumaxwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_smenumaxwidthtype');
	$woobizz_header_smenumaxwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_smenumaxwidthsize');
	if ($woobizz_header_smenumaxwidthtype==0){
			$woobizz_header_smenumaxwidthtype="px";
		} elseif($woobizz_header_smenumaxwidthtype==1) {
			$woobizz_header_smenumaxwidthtype="%";
		} else {
			$woobizz_header_smenumaxwidthtype="%";
	}
	if ($woobizz_header_smenumaxwidthset==0){
				$woobizz_header_smenumaxwidthfull=$woobizz_header_smenumaxwidthsize.$woobizz_header_smenumaxwidthtype;
			} elseif($woobizz_header_smenumaxwidthset==1) {
				$woobizz_header_smenumaxwidthfull="none";
			} else {
		}
	$woobizz_header_smenuminwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_smenuminwidthset');
	$woobizz_header_smenuminwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_smenuminwidthtype');
	$woobizz_header_smenuminwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_smenuminwidthsize');
	if ($woobizz_header_smenuminwidthtype==0){
			$woobizz_header_smenuminwidthtype="px";
		} elseif($woobizz_header_smenuminwidthtype==1) {
			$woobizz_header_smenuminwidthtype="%";
		} else {
			$woobizz_header_smenuminwidthtype="%";
	}
	if ($woobizz_header_smenuminwidthset==0){
				$woobizz_header_smenuminwidthfull=$woobizz_header_smenuminwidthsize.$woobizz_header_smenuminwidthtype;
			} elseif($woobizz_header_smenuminwidthset==1) {
				$woobizz_header_smenuminwidthfull=0;
			} else {
				$woobizz_header_smenuminwidthfull=0;
	}	
	//---------------------------------------------------------------------------------------------------------------------------------------------
	// 3.2 SECONDARY MENU MARGINS & PADDINGS----------------------------------------------------
	$woobizz_header_smenumargintop = get_option(WOOBIZZHEADER.'_woobizz_header_smenumargintop');
	$woobizz_header_smenumarginbottom = get_option(WOOBIZZHEADER.'_woobizz_header_smenumarginbottom');
	$woobizz_header_smenumarginright = get_option(WOOBIZZHEADER.'_woobizz_header_smenumarginright');
	$woobizz_header_smenumarginleft = get_option(WOOBIZZHEADER.'_woobizz_header_smenumarginleft');
	$woobizz_header_smenupaddingtop = get_option(WOOBIZZHEADER.'_woobizz_header_smenupaddingtop');
	$woobizz_header_smenupaddingbottom = get_option(WOOBIZZHEADER.'_woobizz_header_smenupaddingbottom');
	$woobizz_header_smenupaddingright = get_option(WOOBIZZHEADER.'_woobizz_header_smenupaddingright');
	$woobizz_header_smenupaddingleft = get_option(WOOBIZZHEADER.'_woobizz_header_smenupaddingleft');
	// 4.-Header Search Options///////////////////////////////////////////////////////////////////////
	//2.3 SEARCH WIDTH-------------------------------------------------------------------------
	$woobizz_header_searchwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_searchwidthtype');
	$woobizz_header_searchwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_searchwidthsize');
	if ($woobizz_header_searchwidthtype==0){
			$woobizz_header_searchwidthtype="px";
		} elseif($woobizz_header_searchwidthtype==1) {
			$woobizz_header_searchwidthtype="%";
		} elseif($woobizz_header_searchwidthtype==2) {
			$woobizz_header_searchwidthtype="auto";
			$woobizz_header_searchwidthsize="";
		} else {
			$woobizz_header_searchwidthtype="auto";
			$woobizz_header_searchwidthsize="";
	}
	$woobizz_header_searchwidthfull=$woobizz_header_searchwidthsize.$woobizz_header_searchwidthtype;
	$woobizz_header_searchmaxwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_searchmaxwidthset');
	$woobizz_header_searchmaxwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_searchmaxwidthtype');
	$woobizz_header_searchmaxwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_searchmaxwidthsize');
	if ($woobizz_header_searchmaxwidthtype==0){
			$woobizz_header_searchmaxwidthtype="px";
		} elseif($woobizz_header_searchmaxwidthtype==1) {
			$woobizz_header_searchmaxwidthtype="%";
		} else {
			$woobizz_header_searchmaxwidthtype="%";
	}
	if ($woobizz_header_searchmaxwidthset==0){
				$woobizz_header_searchmaxwidthfull=$woobizz_header_searchmaxwidthsize.$woobizz_header_searchmaxwidthtype;
			} elseif($woobizz_header_searchmaxwidthset==1) {
				$woobizz_header_searchmaxwidthfull="none";
			} else {
		}
	$woobizz_header_searchminwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_searchminwidthset');
	$woobizz_header_searchminwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_searchminwidthtype');
	$woobizz_header_searchminwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_searchminwidthsize');
	if ($woobizz_header_searchminwidthtype==0){
			$woobizz_header_searchminwidthtype="px";
		} elseif($woobizz_header_searchminwidthtype==1) {
			$woobizz_header_searchminwidthtype="%";
		} else {
			$woobizz_header_searchminwidthtype="%";
	}
	if ($woobizz_header_searchminwidthset==0){
				$woobizz_header_searchminwidthfull=$woobizz_header_searchminwidthsize.$woobizz_header_searchminwidthtype;
			} elseif($woobizz_header_searchminwidthset==1) {
				$woobizz_header_searchminwidthfull=0;
			} else {
				$woobizz_header_searchminwidthfull=0;
	}	
	//---------------------------------------------------------------------------------------------------------------------------------------------
	// 4.1 SEARCH MARGINS & PADDINGS-----------------------------------------------------------------------
	$woobizz_header_searchmargintop = get_option(WOOBIZZHEADER.'_woobizz_header_searchmargintop');
	$woobizz_header_searchmarginbottom = get_option(WOOBIZZHEADER.'_woobizz_header_searchmarginbottom');
	$woobizz_header_searchmarginright = get_option(WOOBIZZHEADER.'_woobizz_header_searchmarginright');
	$woobizz_header_searchmarginleft = get_option(WOOBIZZHEADER.'_woobizz_header_searchmarginleft');
	$woobizz_header_searchpaddingtop = get_option(WOOBIZZHEADER.'_woobizz_header_searchpaddingtop');
	$woobizz_header_searchpaddingbottom = get_option(WOOBIZZHEADER.'_woobizz_header_searchpaddingbottom');
	$woobizz_header_searchpaddingright = get_option(WOOBIZZHEADER.'_woobizz_header_searchpaddingright');
	$woobizz_header_searchpaddingleft = get_option(WOOBIZZHEADER.'_woobizz_header_searchpaddingleft');
	// 4.2 SEARCH COLOR & BACKGROUND---------------------------------------------------------------------
	$woobizz_header_searchtextcolor = get_option(WOOBIZZHEADER.'_woobizz_header_searchtextcolor');
	$woobizz_header_searchbackgroundcolor = get_option(WOOBIZZHEADER.'_woobizz_header_searchbackgroundcolor');
	$woobizz_header_searchbackgroundtransparency= get_option(WOOBIZZHEADER.'_woobizz_header_searchbackgroundtransparency');
	$trasnform_woobizz_header_searchbackgroundtransparencyrgb= woobizz_header_hextorgb($woobizz_header_searchbackgroundcolor);
	$woobizz_header_searchbackgroundtransparencyfull=$trasnform_woobizz_header_searchbackgroundtransparencyrgb.",".$woobizz_header_searchbackgroundtransparency;
	$woobizz_header_searchborderradius = get_option(WOOBIZZHEADER.'_woobizz_header_searchborderradius');
	$woobizz_header_searchdisplay = get_option(WOOBIZZHEADER.'_woobizz_header_searchdisplay');
	if ($woobizz_header_searchdisplay==0){
			$woobizz_header_searchdisplay="none";
		} elseif($woobizz_header_searchdisplay==1) {
			$woobizz_header_searchdisplay="block";
		} else {
			$woobizz_header_searchdisplay="block";
	}
	// 4.3 SEARCH BACKGROUND SHADOWS
	$woobizz_header_searchshadowcolor= get_option(WOOBIZZHEADER.'_woobizz_header_searchshadowcolor');
	$woobizz_header_searchshadowrightdistance= get_option(WOOBIZZHEADER.'_woobizz_header_searchshadowrightdistance');
	$woobizz_header_searchshadowbottomdistance= get_option(WOOBIZZHEADER.'_woobizz_header_searchshadowbottomdistance');
	$woobizz_header_searchshadowspread= get_option(WOOBIZZHEADER.'_woobizz_header_searchshadowspread');
	$woobizz_header_searchshadowsize= get_option(WOOBIZZHEADER.'_woobizz_header_searchshadowsize');
	// 4.4 SEARCH ICON 
	$woobizz_header_searchiconbackgroundcolor= get_option(WOOBIZZHEADER.'_woobizz_header_searchiconbackgroundcolor');
	$woobizz_header_searchiconborderradius= get_option(WOOBIZZHEADER.'_woobizz_header_searchiconborderradius');
	$woobizz_header_searchiconimage= get_option(WOOBIZZHEADER.'_woobizz_header_searchiconimage');
	$woobizz_header_searchiconxposition= get_option(WOOBIZZHEADER.'_woobizz_header_searchiconxposition');
	$woobizz_header_searchiconyposition= get_option(WOOBIZZHEADER.'_woobizz_header_searchiconyposition');
	// 4.5 SEARCH ICON BACKGROUND SHADOWS
	$woobizz_header_searchiconshadowcolor= get_option(WOOBIZZHEADER.'_woobizz_header_searchiconshadowcolor');
	$woobizz_header_searchiconshadowrightdistance= get_option(WOOBIZZHEADER.'_woobizz_header_searchiconshadowrightdistance');
	$woobizz_header_searchiconshadowbottomdistance= get_option(WOOBIZZHEADER.'_woobizz_header_searchiconshadowbottomdistance');
	$woobizz_header_searchiconshadowspread= get_option(WOOBIZZHEADER.'_woobizz_header_searchiconshadowspread');
	$woobizz_header_searchiconshadowsize= get_option(WOOBIZZHEADER.'_woobizz_header_searchiconshadowsize');
	//-------------------------------------------------------------------------------------------------------------------------
	//5.- HEADER WIDGET OPTIONS/////////////////////////////////////////////////////////////////////////////////////////////////
	//-------------------------------------------------------------------------------------------------------------------------
	//5.1 PHONE OPTIONS-------------------------------------------------------------------------
	//5.1.1 PHONE WIDTH SIZE
	$woobizz_header_phonewidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_phonewidthtype');
	$woobizz_header_phonewidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_phonewidthsize');
	if ($woobizz_header_phonewidthtype==0){
			$woobizz_header_phonewidthtype="px";
		} elseif($woobizz_header_phonewidthtype==1) {
			$woobizz_header_phonewidthtype="%";
		} elseif($woobizz_header_phonewidthtype==2) {
			$woobizz_header_phonewidthtype="auto";
			$woobizz_header_phonewidthsize="";
		} else {
			$woobizz_header_phonewidthtype="auto";
			$woobizz_header_phonewidthsize="";
	}
	$woobizz_header_phonewidthfull=$woobizz_header_phonewidthsize.$woobizz_header_phonewidthtype;
	$woobizz_header_phonemaxwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_phonemaxwidthset');
	$woobizz_header_phonemaxwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_phonemaxwidthtype');
	$woobizz_header_phonemaxwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_phonemaxwidthsize');
	if ($woobizz_header_phonemaxwidthtype==0){
			$woobizz_header_phonemaxwidthtype="px";
		} elseif($woobizz_header_phonemaxwidthtype==1) {
			$woobizz_header_phonemaxwidthtype="%";
		} else {
			$woobizz_header_phonemaxwidthtype="%";
	}
	if ($woobizz_header_phonemaxwidthset==0){
				$woobizz_header_phonemaxwidthfull=$woobizz_header_phonemaxwidthsize.$woobizz_header_phonemaxwidthtype;
			} elseif($woobizz_header_phonemaxwidthset==1) {
				$woobizz_header_phonemaxwidthfull="none";
			} else {
		}
	$woobizz_header_phoneminwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_phoneminwidthset');
	$woobizz_header_phoneminwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_phoneminwidthtype');
	$woobizz_header_phoneminwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_phoneminwidthsize');
	if ($woobizz_header_phoneminwidthtype==0){
			$woobizz_header_phoneminwidthtype="px";
		} elseif($woobizz_header_phoneminwidthtype==1) {
			$woobizz_header_phoneminwidthtype="%";
		} else {
			$woobizz_header_phoneminwidthtype="%";
	}
	if ($woobizz_header_phoneminwidthset==0){
				$woobizz_header_phoneminwidthfull=$woobizz_header_phoneminwidthsize.$woobizz_header_phoneminwidthtype;
			} elseif($woobizz_header_phoneminwidthset==1) {
				$woobizz_header_phoneminwidthfull=0;
			} else {
				$woobizz_header_phoneminwidthfull=0;
	}	
	//---------------------------------------------------------------------------------------------------------------------------------------------
	//5.1.2 PHONE OPTIONS MARGINS & PADDINGS-------------------------------------------------------------------------------
	$woobizz_header_phoneoptionsmargintop = get_option(WOOBIZZHEADER.'_woobizz_header_phoneoptionsmargintop');
	$woobizz_header_phoneoptionsmarginbottom = get_option(WOOBIZZHEADER.'_woobizz_header_phoneoptionsmarginbottom');
	$woobizz_header_phoneoptionsmarginright = get_option(WOOBIZZHEADER.'_woobizz_header_phoneoptionsmarginright');
	$woobizz_header_phoneoptionsmarginleft = get_option(WOOBIZZHEADER.'_woobizz_header_phoneoptionsmarginleft');
	$woobizz_header_phoneoptionspaddingtop = get_option(WOOBIZZHEADER.'_woobizz_header_phoneoptionspaddingtop');
	$woobizz_header_phoneoptionspaddingbottom = get_option(WOOBIZZHEADER.'_woobizz_header_phoneoptionspaddingbottom');
	$woobizz_header_phoneoptionspaddingright = get_option(WOOBIZZHEADER.'_woobizz_header_phoneoptionspaddingright');
	$woobizz_header_phoneoptionspaddingleft = get_option(WOOBIZZHEADER.'_woobizz_header_phoneoptionspaddingleft');
	//5.1.3 PHONE NUMBER & DESCRIPTION---------------------------------------------------------------------------------------
	$woobizz_header_phonenumbercolor = get_option(WOOBIZZHEADER.'_woobizz_header_phonenumbercolor');
	$woobizz_header_phonenumbersize = get_option(WOOBIZZHEADER.'_woobizz_header_phonenumbersize');
	$woobizz_header_phonedescriptioncolor = get_option(WOOBIZZHEADER.'_woobizz_header_phonedescriptioncolor');
	$woobizz_header_phonedescriptionsize = get_option(WOOBIZZHEADER.'_woobizz_header_phonedescriptionsize');
	$woobizz_header_phoneoptionsdisplay = get_option(WOOBIZZHEADER.'_woobizz_header_phoneoptionsdisplay');
	if ($woobizz_header_phoneoptionsdisplay==0){
			$woobizz_header_phoneoptionsdisplay="none";
		} elseif($woobizz_header_phoneoptionsdisplay==1) {
			$woobizz_header_phoneoptionsdisplay="block";
		} else {
			$woobizz_header_phoneoptionsdisplay="block";
	}
	$woobizz_header_phonenumberdisplay = get_option(WOOBIZZHEADER.'_woobizz_header_phonenumberdisplay');
	if ($woobizz_header_phonenumberdisplay==0){
			$woobizz_header_phonenumberdisplay="none";
		} elseif($woobizz_header_phonenumberdisplay==1) {
			$woobizz_header_phonenumberdisplay="block";
		} else {
			$woobizz_header_phonenumberdisplay="block";
	}
	$woobizz_header_phonedescriptiondisplay = get_option(WOOBIZZHEADER.'_woobizz_header_phonedescriptiondisplay');
	if ($woobizz_header_phonedescriptiondisplay==0){
			$woobizz_header_phonedescriptiondisplay="none";
		} elseif($woobizz_header_phonedescriptiondisplay==1) {
			$woobizz_header_phonedescriptiondisplay="block";
		} else {
			$woobizz_header_phonedescriptiondisplay="block";
	}
	//END PHONE OPTIONS--------------------------------------------------------------------------------------------
	//5.2 LANGUAGE OPTIONS-------------------------------------------------------------------------
	//5.2.1 LANGUAGE WIDTH SIZE
	$woobizz_header_langwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_langwidthtype');
	$woobizz_header_langwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_langwidthsize');
	if ($woobizz_header_langwidthtype==0){
			$woobizz_header_langwidthtype="px";
		} elseif($woobizz_header_langwidthtype==1) {
			$woobizz_header_langwidthtype="%";
		} elseif($woobizz_header_langwidthtype==2) {
			$woobizz_header_langwidthtype="auto";
			$woobizz_header_langwidthsize="";
		} else {
			$woobizz_header_langwidthtype="auto";
			$woobizz_header_langwidthsize="";
	}
	$woobizz_header_langwidthfull=$woobizz_header_langwidthsize.$woobizz_header_langwidthtype;
	$woobizz_header_langmaxwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_langmaxwidthset');
	$woobizz_header_langmaxwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_langmaxwidthtype');
	$woobizz_header_langmaxwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_langmaxwidthsize');
	if ($woobizz_header_langmaxwidthtype==0){
			$woobizz_header_langmaxwidthtype="px";
		} elseif($woobizz_header_langmaxwidthtype==1) {
			$woobizz_header_langmaxwidthtype="%";
		} else {
			$woobizz_header_langmaxwidthtype="%";
	}
	if ($woobizz_header_langmaxwidthset==0){
				$woobizz_header_langmaxwidthfull=$woobizz_header_langmaxwidthsize.$woobizz_header_langmaxwidthtype;
			} elseif($woobizz_header_langmaxwidthset==1) {
				$woobizz_header_langmaxwidthfull="none";
			} else {
		}
	$woobizz_header_langminwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_langminwidthset');
	$woobizz_header_langminwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_langminwidthtype');
	$woobizz_header_langminwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_langminwidthsize');
	if ($woobizz_header_langminwidthtype==0){
			$woobizz_header_langminwidthtype="px";
		} elseif($woobizz_header_langminwidthtype==1) {
			$woobizz_header_langminwidthtype="%";
		} else {
			$woobizz_header_langminwidthtype="%";
	}
	if ($woobizz_header_langminwidthset==0){
				$woobizz_header_langminwidthfull=$woobizz_header_langminwidthsize.$woobizz_header_langminwidthtype;
			} elseif($woobizz_header_langminwidthset==1) {
				$woobizz_header_langminwidthfull=0;
			} else {
				$woobizz_header_langminwidthfull=0;
	}	
	//---------------------------------------------------------------------------------------------------------------------------------------------
	//5.2.2 LANGUAGE OPTIONS MARGINS & PADDINGS-------------------------------------------------------------------------------
	$woobizz_header_langoptionsmargintop = get_option(WOOBIZZHEADER.'_woobizz_header_langoptionsmargintop');
	$woobizz_header_langoptionsmarginbottom = get_option(WOOBIZZHEADER.'_woobizz_header_langoptionsmarginbottom');
	$woobizz_header_langoptionsmarginright = get_option(WOOBIZZHEADER.'_woobizz_header_langoptionsmarginright');
	$woobizz_header_langoptionsmarginleft = get_option(WOOBIZZHEADER.'_woobizz_header_langoptionsmarginleft');
	$woobizz_header_langoptionspaddingtop = get_option(WOOBIZZHEADER.'_woobizz_header_langoptionspaddingtop');
	$woobizz_header_langoptionspaddingbottom = get_option(WOOBIZZHEADER.'_woobizz_header_langoptionspaddingbottom');
	$woobizz_header_langoptionspaddingright = get_option(WOOBIZZHEADER.'_woobizz_header_langoptionspaddingright');
	$woobizz_header_langoptionspaddingleft = get_option(WOOBIZZHEADER.'_woobizz_header_langoptionspaddingleft');
	//5.2.3 LANGUAGE NUMBER & DESCRIPTION---------------------------------------------------------------------------------------
	$woobizz_header_langnumbercolor = get_option(WOOBIZZHEADER.'_woobizz_header_langnumbercolor');
	$woobizz_header_langnumbersize = get_option(WOOBIZZHEADER.'_woobizz_header_langnumbersize');
	$woobizz_header_langdescriptioncolor = get_option(WOOBIZZHEADER.'_woobizz_header_langdescriptioncolor');
	$woobizz_header_langdescriptionsize = get_option(WOOBIZZHEADER.'_woobizz_header_langdescriptionsize');
	$woobizz_header_langoptionsdisplay = get_option(WOOBIZZHEADER.'_woobizz_header_langoptionsdisplay');
	if ($woobizz_header_langoptionsdisplay==0){
			$woobizz_header_langoptionsdisplay="none";
		} elseif($woobizz_header_langoptionsdisplay==1) {
			$woobizz_header_langoptionsdisplay="block";
		} else {
			$woobizz_header_langoptionsdisplay="block";
	}
	$woobizz_header_langnumberdisplay = get_option(WOOBIZZHEADER.'_woobizz_header_langnumberdisplay');
	if ($woobizz_header_langnumberdisplay==0){
			$woobizz_header_langnumberdisplay="none";
		} elseif($woobizz_header_langnumberdisplay==1) {
			$woobizz_header_langnumberdisplay="block";
		} else {
			$woobizz_header_langnumberdisplay="block";
	}
	$woobizz_header_langdescriptiondisplay = get_option(WOOBIZZHEADER.'_woobizz_header_langdescriptiondisplay');
	if ($woobizz_header_langdescriptiondisplay==0){
			$woobizz_header_langdescriptiondisplay="none";
		} elseif($woobizz_header_langdescriptiondisplay==1) {
			$woobizz_header_langdescriptiondisplay="block";
		} else {
			$woobizz_header_langdescriptiondisplay="block";
	}
	//END LANGUAGE OPTIONS--------------------------------------------------------------------------------------------
	// 6.- Header Primary Menu
	//2.3 PRIMARY MENU WIDTH-------------------------------------------------------------------------
	$woobizz_header_pmenuwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_pmenuwidthtype');
	$woobizz_header_pmenuwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_pmenuwidthsize');
	if ($woobizz_header_pmenuwidthtype==0){
			$woobizz_header_pmenuwidthtype="px";
		} elseif($woobizz_header_pmenuwidthtype==1) {
			$woobizz_header_pmenuwidthtype="%";
		} elseif($woobizz_header_pmenuwidthtype==2) {
			$woobizz_header_pmenuwidthtype="auto";
			$woobizz_header_pmenuwidthsize="";
		} else {
			$woobizz_header_pmenuwidthtype="auto";
			$woobizz_header_pmenuwidthsize="";
	}
	$woobizz_header_pmenuwidthfull=$woobizz_header_pmenuwidthsize.$woobizz_header_pmenuwidthtype;
	$woobizz_header_pmenudisplay = get_option(WOOBIZZHEADER.'_woobizz_header_pmenudisplay');
	if ($woobizz_header_pmenudisplay==0){
			$woobizz_header_pmenudisplay="none";
		} elseif($woobizz_header_pmenudisplay==1) {
			$woobizz_header_pmenudisplay="block";
		} else {
			$woobizz_header_pmenudisplay="block";
	}
	//echo $woobizz_header_pmenudisplay;
	$woobizz_header_pmenumaxwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_pmenumaxwidthset');
	$woobizz_header_pmenumaxwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_pmenumaxwidthtype');
	$woobizz_header_pmenumaxwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_pmenumaxwidthsize');
	if ($woobizz_header_pmenumaxwidthtype==0){
			$woobizz_header_pmenumaxwidthtype="px";
		} elseif($woobizz_header_pmenumaxwidthtype==1) {
			$woobizz_header_pmenumaxwidthtype="%";
		} else {
			$woobizz_header_pmenumaxwidthtype="%";
	}
	if ($woobizz_header_pmenumaxwidthset==0){
				$woobizz_header_pmenumaxwidthfull=$woobizz_header_pmenumaxwidthsize.$woobizz_header_pmenumaxwidthtype;
			} elseif($woobizz_header_pmenumaxwidthset==1) {
				$woobizz_header_pmenumaxwidthfull="none";
			} else {
		}
	$woobizz_header_pmenuminwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_pmenuminwidthset');
	$woobizz_header_pmenuminwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_pmenuminwidthtype');
	$woobizz_header_pmenuminwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_pmenuminwidthsize');
	if ($woobizz_header_pmenuminwidthtype==0){
			$woobizz_header_pmenuminwidthtype="px";
		} elseif($woobizz_header_pmenuminwidthtype==1) {
			$woobizz_header_pmenuminwidthtype="%";
		} else {
			$woobizz_header_pmenuminwidthtype="%";
	}
	if ($woobizz_header_pmenuminwidthset==0){
				$woobizz_header_pmenuminwidthfull=$woobizz_header_pmenuminwidthsize.$woobizz_header_pmenuminwidthtype;
			} elseif($woobizz_header_pmenuminwidthset==1) {
				$woobizz_header_pmenuminwidthfull=0;
			} else {
				$woobizz_header_pmenuminwidthfull=0;
	}	
	//---------------------------------------------------------------------------------------------------------------------------------------------
	// 6.1 PRIMARY MENU COLOR & BACKGROUND
	$woobizz_header_pmenubackgroundcolor = get_option(WOOBIZZHEADER.'_woobizz_header_pmenubackgroundcolor');
	$woobizz_header_pmenuwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_pmenuwidthtype');
	$woobizz_header_pmenuwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_pmenuwidthsize');
	if ($woobizz_header_pmenuwidthtype==0){
			$woobizz_header_pmenuwidthtype="px";
		} elseif($woobizz_header_pmenuwidthtype==1) {
			$woobizz_header_pmenuwidthtype="%";
		} elseif($woobizz_header_pmenuwidthtype==2) {
			$woobizz_header_pmenuwidthtype="auto";
			$woobizz_header_pmenuwidthsize="";
		} else {
			$woobizz_header_pmenuwidthtype="auto";
			$woobizz_header_pmenuwidthsize="";
	}
	$woobizz_header_pmenumaxwidthdisplay = get_option(WOOBIZZHEADER.'_woobizz_header_pmenumaxwidthdisplay');
	$woobizz_header_pmenumaxwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_pmenumaxwidthtype');
	$woobizz_header_pmenumaxwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_pmenumaxwidthsize');
	if ($woobizz_header_pmenumaxwidthtype==0){
			$woobizz_header_pmenumaxwidthtype="px";
		} elseif($woobizz_header_pmenumaxwidthtype==1) {
			$woobizz_header_pmenumaxwidthtype="%";
		} else {
			$woobizz_header_pmenumaxwidthtype="%";
	}
	if ($woobizz_header_pmenumaxwidthdisplay==0){
				$woobizz_header_pmenumaxwidthfull=$woobizz_header_pmenumaxwidthsize.$woobizz_header_pmenumaxwidthtype;
			} elseif($woobizz_header_pmenumaxwidthdisplay==1) {
				$woobizz_header_pmenumaxwidthfull="none";
			} else {
		}
	$woobizz_header_pmenuminwidthdisplay = get_option(WOOBIZZHEADER.'_woobizz_header_pmenuminwidthdisplay');
	$woobizz_header_pmenuminwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_pmenuminwidthtype');
	$woobizz_header_pmenuminwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_pmenuminwidthsize');
	if ($woobizz_header_pmenuminwidthtype==0){
			$woobizz_header_pmenuminwidthtype="px";
		} elseif($woobizz_header_pmenuminwidthtype==1) {
			$woobizz_header_pmenuminwidthtype="%";
		} else {
			$woobizz_header_pmenuminwidthtype="%";
	}
	if ($woobizz_header_pmenuminwidthdisplay==0){
				$woobizz_header_pmenuminwidthfull=$woobizz_header_pmenuminwidthsize.$woobizz_header_pmenuminwidthtype;
			} elseif($woobizz_header_pmenuminwidthdisplay==1) {
				$woobizz_header_pmenuminwidthfull=0;
			} else {
				$woobizz_header_pmenuminwidthfull=0;
	}		
	//6.2 PRIMARY MENU TEXT
	$woobizz_header_pmenucurrenttextcolor= get_option(WOOBIZZHEADER.'_woobizz_header_pmenucurrenttextcolor');
	$woobizz_header_pmenucurrentbackgroundcolor= get_option(WOOBIZZHEADER.'_woobizz_header_pmenucurrentbackgroundcolor');
	$woobizz_header_pmenucurrentborderradius= get_option(WOOBIZZHEADER.'_woobizz_header_pmenucurrentborderradius');
	$woobizz_header_pmenucurrentbordercolor= get_option(WOOBIZZHEADER.'_woobizz_header_pmenucurrentbordercolor');
	$woobizz_header_pmenucurrentborderstyle= get_option(WOOBIZZHEADER.'_woobizz_header_pmenucurrentborderstyle');
	$woobizz_header_pmenucurrentbordersize= get_option(WOOBIZZHEADER.'_woobizz_header_pmenucurrentbordersize');
	if ($woobizz_header_pmenucurrentborderstyle==0){
				$woobizz_header_pmenucurrentborderfull=$woobizz_header_pmenucurrentbordersize."px"." dotted ".$woobizz_header_pmenucurrentbordercolor;
			} elseif($woobizz_header_pmenucurrentborderstyle==1) {
				$woobizz_header_pmenucurrentborderfull=$woobizz_header_pmenucurrentbordersize."px"." dashed ".$woobizz_header_pmenucurrentbordercolor;
			} elseif($woobizz_header_pmenucurrentborderstyle==2) {
				$woobizz_header_pmenucurrentborderfull=$woobizz_header_pmenucurrentbordersize."px"." solid ".$woobizz_header_pmenucurrentbordercolor;
			} elseif($woobizz_header_pmenucurrentborderstyle==3) {
				$woobizz_header_pmenucurrentborderfull="none";
			} else {
				$woobizz_header_pmenucurrentborderfull="none";
	}	
	$woobizz_header_pmenualltextcolor= get_option(WOOBIZZHEADER.'_woobizz_header_pmenualltextcolor');
	$woobizz_header_pmenuallbackgroundcolor= get_option(WOOBIZZHEADER.'_woobizz_header_pmenuallbackgroundcolor');
	$woobizz_header_pmenuallborderradius= get_option(WOOBIZZHEADER.'_woobizz_header_pmenuallborderradius');
	$woobizz_header_pmenuallbordercolor= get_option(WOOBIZZHEADER.'_woobizz_header_pmenuallbordercolor');
	$woobizz_header_pmenuallborderstyle= get_option(WOOBIZZHEADER.'_woobizz_header_pmenuallborderstyle');
	$woobizz_header_pmenuallbordersize= get_option(WOOBIZZHEADER.'_woobizz_header_pmenuallbordersize');
	if ($woobizz_header_pmenuallborderstyle==0){
				$woobizz_header_pmenuallborderfull=$woobizz_header_pmenuallbordersize."px"." dotted ".$woobizz_header_pmenuallbordercolor;
			} elseif($woobizz_header_pmenuallborderstyle==1) {
				$woobizz_header_pmenuallborderfull=$woobizz_header_pmenuallbordersize."px"." dashed ".$woobizz_header_pmenuallbordercolor;
			} elseif($woobizz_header_pmenuallborderstyle==2) {
				$woobizz_header_pmenuallborderfull=$woobizz_header_pmenuallbordersize."px"." solid ".$woobizz_header_pmenuallbordercolor;
			} elseif($woobizz_header_pmenuallborderstyle==3) {
				$woobizz_header_pmenuallborderfull="none";
			} else {
				$woobizz_header_pmenuallborderfull="none";
	}	
	$woobizz_header_pmenutextpaddingtop = get_option(WOOBIZZHEADER.'_woobizz_header_pmenutextpaddingtop');
	$woobizz_header_pmenutextpaddingbottom = get_option(WOOBIZZHEADER.'_woobizz_header_pmenutextpaddingbottom');
	$woobizz_header_pmenutextpaddingright = get_option(WOOBIZZHEADER.'_woobizz_header_pmenutextpaddingright');
	$woobizz_header_pmenutextpaddingleft = get_option(WOOBIZZHEADER.'_woobizz_header_pmenutextpaddingleft');
	// 6.3 PRIMARY MENU MARGINS & PADDINGS----------------------------------------------------
	$woobizz_header_pmenumargintop = get_option(WOOBIZZHEADER.'_woobizz_header_pmenumargintop');
	$woobizz_header_pmenumarginbottom = get_option(WOOBIZZHEADER.'_woobizz_header_pmenumarginbottom');
	$woobizz_header_pmenumarginright = get_option(WOOBIZZHEADER.'_woobizz_header_pmenumarginright');
	$woobizz_header_pmenumarginleft = get_option(WOOBIZZHEADER.'_woobizz_header_pmenumarginleft');
	$woobizz_header_pmenupaddingtop = get_option(WOOBIZZHEADER.'_woobizz_header_pmenupaddingtop');
	$woobizz_header_pmenupaddingbottom = get_option(WOOBIZZHEADER.'_woobizz_header_pmenupaddingbottom');
	$woobizz_header_pmenupaddingright = get_option(WOOBIZZHEADER.'_woobizz_header_pmenupaddingright');
	$woobizz_header_pmenupaddingleft = get_option(WOOBIZZHEADER.'_woobizz_header_pmenupaddingleft');
	//CART OPTIONS
	//2.3 CART WIDTH-------------------------------------------------------------------------
	$woobizz_header_cartdisplay = get_option(WOOBIZZHEADER.'_woobizz_header_cartdisplay');
	if ($woobizz_header_cartdisplay==0){
			$woobizz_header_cartdisplay="none";
		} elseif($woobizz_header_cartdisplay==1) {
			$woobizz_header_cartdisplay="block";
		} else {
			$woobizz_header_cartdisplay="block";
	}
	//echo $woobizz_header_cartdisplay;
	$woobizz_header_cartwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_cartwidthtype');
	$woobizz_header_cartwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_cartwidthsize');
	if ($woobizz_header_cartwidthtype==0){
			$woobizz_header_cartwidthtype="px";
		} elseif($woobizz_header_cartwidthtype==1) {
			$woobizz_header_cartwidthtype="%";
		} elseif($woobizz_header_cartwidthtype==2) {
			$woobizz_header_cartwidthtype="auto";
			$woobizz_header_cartwidthsize="";
		} else {
			$woobizz_header_cartwidthtype="auto";
			$woobizz_header_cartwidthsize="";
	}
	$woobizz_header_cartwidthfull=$woobizz_header_cartwidthsize.$woobizz_header_cartwidthtype;
	$woobizz_header_cartcontentdisplay= get_option(WOOBIZZHEADER.'_woobizz_header_cartcontentdisplay');
	if ($woobizz_header_cartcontentdisplay==0){
				$woobizz_header_cartcontentdisplay="block";
			} elseif($woobizz_header_cartcontentdisplay==1) {
				$woobizz_header_cartcontentdisplay="flex";
			} else {
				$woobizz_header_cartcontentdisplay="flex";
	}
	$woobizz_header_cartmaxwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_cartmaxwidthset');
	$woobizz_header_cartmaxwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_cartmaxwidthtype');
	$woobizz_header_cartmaxwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_cartmaxwidthsize');
	if ($woobizz_header_cartmaxwidthtype==0){
			$woobizz_header_cartmaxwidthtype="px";
		} elseif($woobizz_header_cartmaxwidthtype==1) {
			$woobizz_header_cartmaxwidthtype="%";
		} else {
			$woobizz_header_cartmaxwidthtype="%";
	}
	if ($woobizz_header_cartmaxwidthset==0){
				$woobizz_header_cartmaxwidthfull=$woobizz_header_cartmaxwidthsize.$woobizz_header_cartmaxwidthtype;
			} elseif($woobizz_header_cartmaxwidthset==1) {
				$woobizz_header_cartmaxwidthfull="none";
			} else {
		}
	$woobizz_header_cartminwidthset = get_option(WOOBIZZHEADER.'_woobizz_header_cartminwidthset');
	$woobizz_header_cartminwidthtype = get_option(WOOBIZZHEADER.'_woobizz_header_cartminwidthtype');
	$woobizz_header_cartminwidthsize = get_option(WOOBIZZHEADER.'_woobizz_header_cartminwidthsize');
	if ($woobizz_header_cartminwidthtype==0){
			$woobizz_header_cartminwidthtype="px";
		} elseif($woobizz_header_cartminwidthtype==1) {
			$woobizz_header_cartminwidthtype="%";
		} else {
			$woobizz_header_cartminwidthtype="%";
	}
	if ($woobizz_header_cartminwidthset==0){
				$woobizz_header_cartminwidthfull=$woobizz_header_cartminwidthsize.$woobizz_header_cartminwidthtype;
			} elseif($woobizz_header_cartminwidthset==1) {
				$woobizz_header_cartminwidthfull=0;
			} else {
				$woobizz_header_cartminwidthfull=0;
	}
	// 1.3 HEADER CART MARGINS & PADDINGS------------------------------------------------------------
	$woobizz_header_cartmargintop= get_option(WOOBIZZHEADER.'_woobizz_header_cartmargintop');
	$woobizz_header_cartmarginright= get_option(WOOBIZZHEADER.'_woobizz_header_cartmarginright');
	$woobizz_header_cartmarginleft= get_option(WOOBIZZHEADER.'_woobizz_header_cartmarginleft');
	$woobizz_header_cartmarginbottom= get_option(WOOBIZZHEADER.'_woobizz_header_cartmarginbottom');
	$woobizz_header_cartpaddingtop= get_option(WOOBIZZHEADER.'_woobizz_header_cartpaddingtop');
	$woobizz_header_cartpaddingright= get_option(WOOBIZZHEADER.'_woobizz_header_cartpaddingright');
	$woobizz_header_cartpaddingleft= get_option(WOOBIZZHEADER.'_woobizz_header_cartpaddingleft');
	$woobizz_header_cartpaddingbottom= get_option(WOOBIZZHEADER.'_woobizz_header_cartpaddingbottom');
	//---------------------------------------------------------------------------------------------------------------------------------------------
	// CART BG COLOR
	// 7.2 COLOR & BACKGROUND---------------------------------------------------------------------
	$woobizz_header_cartbgcolor = get_option(WOOBIZZHEADER.'_woobizz_header_cartbgcolor');
	$woobizz_header_cartbgtransparency= get_option(WOOBIZZHEADER.'_woobizz_header_cartbgtransparency');
	$trasnform_woobizz_header_cartbgtransparencyrgb= woobizz_header_hextorgb($woobizz_header_cartbgcolor);
	$woobizz_header_cartbgtransparencyfull=$trasnform_woobizz_header_cartbgtransparencyrgb.",".$woobizz_header_cartbgtransparency;
	$woobizz_header_cartborderradius = get_option(WOOBIZZHEADER.'_woobizz_header_cartborderradius');
	$woobizz_header_cartbordercolor = get_option(WOOBIZZHEADER.'_woobizz_header_cartbordercolor');
	$woobizz_header_cartbordersize = get_option(WOOBIZZHEADER.'_woobizz_header_cartbordersize');
	$woobizz_header_cartborderstyle = get_option(WOOBIZZHEADER.'_woobizz_header_cartborderstyle');
	if ($woobizz_header_cartborderstyle==0){
			$woobizz_header_cartborderstyle="dotted";
		} elseif($woobizz_header_cartborderstyle==1) {
			$woobizz_header_cartborderstyle="dashed";
		} elseif($woobizz_header_cartborderstyle==2) {
			$woobizz_header_cartborderstyle="solid";
		} elseif($woobizz_header_cartborderstyle==2) {
			$woobizz_header_cartborderstyle="none";
		} else {$woobizz_header_cartborderstyle="none";
	} 
	// END CART BG COLOR
	//SHADOW
	// 1.4 HEADER BACKGROUND SHADOWS & BORDERS
	$woobizz_header_cartshadowcolor= get_option(WOOBIZZHEADER.'_woobizz_header_cartshadowcolor');
	$woobizz_header_cartshadowrightdistance= get_option(WOOBIZZHEADER.'_woobizz_header_cartshadowrightdistance');
	$woobizz_header_cartshadowbottomdistance= get_option(WOOBIZZHEADER.'_woobizz_header_cartshadowbottomdistance');
	$woobizz_header_cartshadowspread= get_option(WOOBIZZHEADER.'_woobizz_header_cartshadowspread');
	$woobizz_header_cartshadowsize= get_option(WOOBIZZHEADER.'_woobizz_header_cartshadowsize');
	// CART ICON
	$woobizz_header_carticon= get_option(WOOBIZZHEADER.'_woobizz_header_carticon');
	if (empty($woobizz_header_carticon)) {
		$woobizz_header_carticon ='\f07a';
		}else{
		$woobizz_header_carticon="url(".$woobizz_header_carticon.")";
	}
	// CART MARGINS
	$woobizz_header_carticonmargintop= get_option(WOOBIZZHEADER.'_woobizz_header_carticonmargintop');
	$woobizz_header_carticonmarginright= get_option(WOOBIZZHEADER.'_woobizz_header_carticonmarginright');
	// CART PRICE & ITEM COLOR
	$woobizz_header_cartpricecolor= get_option(WOOBIZZHEADER.'_woobizz_header_cartpricecolor');
	$woobizz_header_hidecartprice= get_option(WOOBIZZHEADER.'_woobizz_header_hidecartprice');
	if ($woobizz_header_hidecartprice==0){
			$woobizz_header_hidecartprice="none";
		} elseif($woobizz_header_hidecartprice==1) {
			$woobizz_header_hidecartprice="block";
		} else {$woobizz_header_hidecartprice="block";
	} 
	$woobizz_header_cartitemscolor= get_option(WOOBIZZHEADER.'_woobizz_header_cartitemscolor');
	$woobizz_header_hidecartitem= get_option(WOOBIZZHEADER.'_woobizz_header_hidecartitem');
	if ($woobizz_header_hidecartitem==0){
			$woobizz_header_hidecartitem="none";
		} elseif($woobizz_header_hidecartitem==1) {
			$woobizz_header_hidecartitem="block";
		} else {$woobizz_header_hidecartitem="block";
	} 
	// 7.6 CART WIDGET COLORS--------------------------------------------------------------------------------------------
	$woobizz_header_widgetcartbackgroundcolor= get_option(WOOBIZZHEADER.'_woobizz_header_widgetcartbackgroundcolor');
	$woobizz_header_widgetcartremovetextcolor= get_option(WOOBIZZHEADER.'_woobizz_header_widgetcartremovetextcolor');
	$woobizz_header_widgetcartitemtitlecolor= get_option(WOOBIZZHEADER.'_woobizz_header_widgetcartitemtitlecolor');
	$woobizz_header_widgetcartitempricecolor= get_option(WOOBIZZHEADER.'_woobizz_header_widgetcartitempricecolor');
	$woobizz_header_widgetcartviewbuttoncolor= get_option(WOOBIZZHEADER.'_woobizz_header_widgetcartviewbuttoncolor');
	$woobizz_header_widgetcartviewtextcolor= get_option(WOOBIZZHEADER.'_woobizz_header_widgetcartviewtextcolor');
	$woobizz_header_widgetcartcheckoutbuttoncolor= get_option(WOOBIZZHEADER.'_woobizz_header_widgetcartcheckoutbuttoncolor');
	$woobizz_header_widgetcartcheckouttextcolor= get_option(WOOBIZZHEADER.'_woobizz_header_widgetcartcheckouttextcolor');
	$woobizz_header_widgetcartdisplay= get_option(WOOBIZZHEADER.'_woobizz_header_widgetcartdisplay');
	if ($woobizz_header_widgetcartdisplay==0){
				$woobizz_header_widgetcartdisplay="none";
			} elseif($woobizz_header_widgetcartdisplay==1) {
				$woobizz_header_widgetcartdisplay="block";
			} else {
				$woobizz_header_widgetcartdisplay="block";
	}
	$woobizz_header_cartfonticoncolor= get_option(WOOBIZZHEADER.'_woobizz_header_cartfonticoncolor');
	$woobizz_header_cartfonticondisplay= get_option(WOOBIZZHEADER.'_woobizz_header_cartfonticondisplay');
	if ($woobizz_header_cartfonticondisplay==0){
				$woobizz_header_cartfonticondisplay="none";
			} elseif($woobizz_header_cartfonticondisplay==1) {
				$woobizz_header_cartfonticondisplay="block";
			} else {
				$woobizz_header_cartfonticondisplay="block";
	}
	//END CART WIDGET COLOR----------------------------------------------------------------------------------------------
	//START SHOWING CSS OPTIONS----------------------------------------------------------------------------------------------------------------------
	/**Check if Woocommerce is active */
	if ( class_exists( 'WooCommerce' ) ) {
	  $woobizz_header_woocommerce_css=".woocommerce-active";
	  }else {
	  $woobizz_header_woocommerce_css=".woocommerce-no-active";
	  }
	echo "
	<style>
		header#masthead{
				background:linear-gradient(rgba(".$woobizz_header_backgroundfullgradient1."),
										   rgba(".$woobizz_header_backgroundfullgradient2.")),
										   url(".$woobizz_header_backgroundimage.");
				background-color:".$woobizz_header_backgroundcolor."!important;
				background-size:".$woobizz_header_backgroundsize."!important;
				background-repeat:".$woobizz_header_backgroundrepeat."!important;
				background-position:".$woobizz_header_backgroundposition."!important;
				width:100%;
				margin-top:".$woobizz_header_backgroundmargintop."px!important;
				margin-right:".$woobizz_header_backgroundmarginright."px!important;
				margin-left:".$woobizz_header_backgroundmarginleft."px!important;
				margin-bottom:".$woobizz_header_backgroundmarginbottom."px!important;
				padding-top:".$woobizz_header_backgroundpaddingtop."px!important;
				padding-right:".$woobizz_header_backgroundpaddingright."px!important;
				padding-left:".$woobizz_header_backgroundpaddingleft."px!important;
				padding-bottom:".$woobizz_header_backgroundpaddingbottom."px!important;
				box-shadow: ".$woobizz_header_backgroundshadowcolor. "
							".$woobizz_header_backgroundshadowrightdistance."px 
							".$woobizz_header_backgroundshadowbottomdistance."px 
							".$woobizz_header_backgroundshadowspread."px 
							".$woobizz_header_backgroundshadowsize."px!important; ;
				border-bottom:".$woobizz_header_backgroundborderbottomcolor."
							  ".$woobizz_header_backgroundborderbottomstyle."
							  ".$woobizz_header_backgroundborderbottomsize."px!important;
		}
		".$woobizz_header_woocommerce_css." .site-header .col-full {
			display:".$woobizz_header_backgrounddisplay."!important;
		}
		a.woobizz-header-brandinglogo{
			width:".$woobizz_header_brandinglogowidthfull."!important;
			max-width:".$woobizz_header_brandinglogomaxwidthfull."!important;
			min-width:".$woobizz_header_brandinglogominwidthfull."!important;
			float:".$woobizz_header_brandinglogofloat."!important;
			margin-top: ".$woobizz_header_brandinglogomargintop."px!important;
			margin-bottom:".$woobizz_header_brandinglogomarginbottom."px!important;
			margin-right:".$woobizz_header_brandinglogomarginright."px!important;
			margin-left:".$woobizz_header_brandinglogomarginleft."px!important;
			padding-top:".$woobizz_header_brandinglogopaddingtop."px!important;
			padding-bottom:".$woobizz_header_brandinglogopaddingbottom."px!important;
			padding-right:".$woobizz_header_brandinglogopaddingright."px!important;
			padding-left:".$woobizz_header_brandinglogopaddingleft."px!important;
			display:".$woobizz_header_brandinglogodisplay."!important;
			clear:".$woobizz_header_brandinglogoclear."!important;
			border:".$woobizz_header_brandinglogoborderfull."!important;
			border-radius:".$woobizz_header_brandinglogoborderradius."px!important;
			box-shadow:".$woobizz_header_brandinglogoshadowfull."!important;
		}
		.woobizz-header-brandinglogo img{
			border-radius:".$woobizz_header_brandinglogoborderradius."px!important;
		}
		.site-header .site-branding{
			width:".$woobizz_header_brandingtitleswidthfull."!important;
			max-width:".$woobizz_header_brandingtitlesmaxwidthfull."!important;
			min-width:".$woobizz_header_brandingtitlesminwidthfull."!important;
			float:".$woobizz_header_brandingtextfloat."!important;
			margin-top: ".$woobizz_header_brandingmargintop."px!important;
			margin-bottom: ".$woobizz_header_brandingmarginbottom."px!important;
			margin-right: ".$woobizz_header_brandingmarginright."px!important;
			margin-left: ".$woobizz_header_brandingmarginleft."px!important;
			padding-top: ".$woobizz_header_brandingpaddingtop."px!important;
			padding-bottom: ".$woobizz_header_brandingpaddingbottom."px!important;
			padding-right: ".$woobizz_header_brandingpaddingright."px!important;
			padding-left: ".$woobizz_header_brandingpaddingleft."px!important;
			display:".$woobizz_header_brandingdisplay."!important;
			clear:".$woobizz_header_brandingclear."!important;
		}
		.beta.site-title a{
			color: ".$woobizz_header_brandingtitlecolor."!important;
			font-size:".$woobizz_header_brandingtitlesize."px!important;
			display:".$woobizz_header_brandingtitledisplay."!important;
		}
		.beta.site-title a:hover {
			color: ".$woobizz_header_brandingtitlecolor."!important;
			font-size:".$woobizz_header_brandingtitlesize."px!important;
			display:".$woobizz_header_brandingtitledisplay."!important;
		}
		.site-branding .site-description {
			color: ".$woobizz_header_brandingdescriptioncolor."!important;
			font-size:".$woobizz_header_brandingdescriptionsize."px!important;
			display:".$woobizz_header_brandingdescriptiondisplay."!important;
		}
		".$woobizz_header_woocommerce_css." .site-header .secondary-navigation {
			width:".$woobizz_header_smenuwidthfull."!important;
			max-width:".$woobizz_header_smenumaxwidthfull."!important;
			min-width:".$woobizz_header_smenuminwidthfull."!important;
			margin-top: ".$woobizz_header_smenumargintop."px!important;
			margin-bottom: ".$woobizz_header_smenumarginbottom."px!important;
			margin-right: ".$woobizz_header_smenumarginright."px!important;
			margin-left: ".$woobizz_header_smenumarginleft."px!important;
			padding-top: ".$woobizz_header_smenupaddingtop."px!important;
			padding-bottom: ".$woobizz_header_smenupaddingbottom."px!important;
			padding-right: ".$woobizz_header_smenupaddingright."px!important;
			padding-left: ".$woobizz_header_smenupaddingleft."px!important;
			float:".$woobizz_header_smenufloat."!important;
			display:".$woobizz_header_smenudisplay."!important;
			clear:".$woobizz_header_smenuclear."!important;
		}
		".$woobizz_header_woocommerce_css." .site-header .secondary-navigation a {
			color: ".$woobizz_header_smenutextcolor."!important;
			background:".$woobizz_header_smenutextbackgroundcolor."!important;
			border-radius:".$woobizz_header_smenuborderradius."px!important;
		}
		".$woobizz_header_woocommerce_css." .site-header .secondary-navigation a:hover {
			margin-top: ".$woobizz_header_searchtextcolor."!important;
			color: ".$woobizz_header_smenutextcolor."!important;
		}
		".$woobizz_header_woocommerce_css." .site-header .site-search {
			width:".$woobizz_header_searchwidthfull."!important;
			max-width:".$woobizz_header_searchmaxwidthfull."!important;
			min-width:".$woobizz_header_searchminwidthfull."!important;
			margin-top: ".$woobizz_header_searchmargintop."px!important;
			margin-bottom: ".$woobizz_header_searchmarginbottom."px!important;
			margin-right: ".$woobizz_header_searchmarginright."px!important;
			margin-left: ".$woobizz_header_searchmarginleft."px!important;
			padding-top: ".$woobizz_header_searchpaddingtop."px!important;
			padding-bottom: ".$woobizz_header_searchpaddingbottom."px!important;
			padding-right: ".$woobizz_header_searchpaddingright."px!important;
			padding-left: ".$woobizz_header_searchpaddingleft."px!important;
			float:".$woobizz_header_searchfloat."!important;
			display:".$woobizz_header_searchdisplay."!important;
			clear:".$woobizz_header_searchclear."!important;
		}
		.site-search .widget_product_search input[type=search] {
			color: ".$woobizz_header_searchtextcolor."!important;
			background-color:rgba(".$woobizz_header_searchbackgroundtransparencyfull.")!important;
			border-radius:".$woobizz_header_searchborderradius."px!important;
			box-shadow: ".$woobizz_header_searchshadowcolor. "
							".$woobizz_header_searchshadowrightdistance."px 
							".$woobizz_header_searchshadowbottomdistance."px 
							".$woobizz_header_searchshadowspread."px 
							".$woobizz_header_searchshadowsize."px!important ;
		}
		.site-header .site-search input[type=submit] {
			clip: auto;
			right: 0;
			top: 0;
			display: block;
			height: 100%;
			background-color:".$woobizz_header_searchiconbackgroundcolor."!important;
			left: auto;
			border-top-right-radius: ".$woobizz_header_searchborderradius."px!important;
			border-bottom-right-radius:".$woobizz_header_searchborderradius."px!important;
			box-shadow: ".$woobizz_header_searchiconshadowcolor." 
						".$woobizz_header_searchiconshadowrightdistance."px 
						".$woobizz_header_searchiconshadowbottomdistance."px 
						".$woobizz_header_searchiconshadowspread."px 
						".$woobizz_header_searchiconshadowsize."px!important;
		}
		.widget_search form:before, .widget_product_search form:before {
		   color: ".$woobizz_header_searchtextcolor."!important;
		}
		.site-search .widget_product_search ::-webkit-input-placeholder {
		   color: ".$woobizz_header_searchtextcolor."!important;
		}
		.site-search .widget_product_search :-moz-placeholder { /* Firefox 18- */
		   color: ".$woobizz_header_searchtextcolor."!important;
		}
		.site-search .widget_product_search ::-moz-placeholder {  /* Firefox 19+ */
		   color: ".$woobizz_header_searchtextcolor."!important;
		}
		.site-search .widget_product_search :-ms-input-placeholder {  
		   color: ".$woobizz_header_searchtextcolor."!important;
		}
		
		".$woobizz_header_woocommerce_css." .site-header .main-navigation {
			width: ".$woobizz_header_pmenuwidthsize.$woobizz_header_pmenuwidthtype."!important;
			max-width:".$woobizz_header_pmenumaxwidthfull."!important;
			min-width:".$woobizz_header_pmenuminwidthfull."!important;
			float:".$woobizz_header_pmenufloat."!important;
			display:".$woobizz_header_pmenudisplay."!important;
			clear:".$woobizz_header_pmenuclear."!important;
		}
		.primary-navigation {
			margin-top: ".$woobizz_header_pmenumargintop."px!important;
			margin-bottom:".$woobizz_header_pmenumarginbottom."px!important;
			margin-right:".$woobizz_header_pmenumarginright."px!important;
			margin-left:".$woobizz_header_pmenumarginleft."px!important;
			padding-top:".$woobizz_header_pmenupaddingtop."px!important;
			padding-bottom:".$woobizz_header_pmenupaddingbottom."px!important;
			padding-right: ".$woobizz_header_pmenupaddingright."px!important;
			padding-left: ".$woobizz_header_pmenupaddingleft."px!important;
			background:".$woobizz_header_pmenubackgroundcolor."!important;
		}
		.mega-sub-menu h3.widget-title {
			text-align: left!important;
			margin-left: 10px!important;
		}		
		.main-navigation ul.menu > li > a, .main-navigation ul.nav-menu > li > a {
			color:".$woobizz_header_pmenualltextcolor."!important;
			background-color:".$woobizz_header_pmenuallbackgroundcolor."!important;
			border-radius:".$woobizz_header_pmenuallborderradius."px!important;
			border:".$woobizz_header_pmenuallborderfull."!important;
			padding-top:".$woobizz_header_pmenutextpaddingtop."px!important;
			padding-bottom:".$woobizz_header_pmenutextpaddingbottom."px!important;
			padding-right: ".$woobizz_header_pmenutextpaddingright."px!important;
			padding-left: ".$woobizz_header_pmenutextpaddingleft."px!important;
		}
		.main-navigation ul.menu li.current-menu-item a{
			color:".$woobizz_header_pmenucurrenttextcolor."!important;
			background-color:".$woobizz_header_pmenucurrentbackgroundcolor."!important;
			border-radius:".$woobizz_header_pmenucurrentborderradius."px!important;
			border:".$woobizz_header_pmenucurrentborderfull."!important;
		}
		.site-header ul.menu li.current-menu-item > a {
			color:".$woobizz_header_pmenucurrenttextcolor."!important;
		}			
		.main-navigation ul.menu > li:first-child, .main-navigation ul.nav-menu > li:first-child {
			margin-left: 0;
		}
		.main-navigation ul.sub-menu a {
			color:".$woobizz_header_pmenualltextcolor."!important!important;
		}
		.main-navigation ul.menu ul {
			background:".$woobizz_header_pmenubackgroundcolor."!important;
		}
		div#header-phone-options {
			width:".$woobizz_header_phonewidthfull."!important;
			max-width:".$woobizz_header_phonemaxwidthfull."!important;
			min-width:".$woobizz_header_phoneminwidthfull."!important;
			margin-top: ".$woobizz_header_phoneoptionsmargintop."px!important;
			margin-bottom:".$woobizz_header_phoneoptionsmarginbottom."px!important;
			margin-right:".$woobizz_header_phoneoptionsmarginright."px!important;
			margin-left:".$woobizz_header_phoneoptionsmarginleft."px!important;
			padding-top:".$woobizz_header_phoneoptionspaddingtop."px!important;
			padding-bottom:".$woobizz_header_phoneoptionspaddingbottom."px!important;
			padding-right: ".$woobizz_header_phoneoptionspaddingright."px!important;
			padding-left: ".$woobizz_header_phoneoptionspaddingleft."px!important;
			float:".$woobizz_header_phonefloat."!important;
			display:".$woobizz_header_phoneoptionsdisplay."!important;
			clear:".$woobizz_header_phoneclear."!important;
		}
		h2#phonenumber {
			margin-top: 10px!important;
			margin-bottom: 3px;
			text-align: center;
			font-size: ".$woobizz_header_phonenumbersize."px!important;
			color:".$woobizz_header_phonenumbercolor."!important;
			display:".$woobizz_header_phonenumberdisplay."!important;
		}
		h4#phonedetails {
			text-align: center;
			color:".$woobizz_header_phonedescriptioncolor."!important;
			font-size:".$woobizz_header_phonedescriptionsize."px!important;
			display:".$woobizz_header_phonedescriptiondisplay."!important;
		}
		div#header-lang-options {
			width:".$woobizz_header_langwidthfull."!important;
			max-width:".$woobizz_header_langmaxwidthfull."!important;
			min-width:".$woobizz_header_langminwidthfull."!important;
			margin-top: ".$woobizz_header_langoptionsmargintop."px!important;
			margin-bottom:".$woobizz_header_langoptionsmarginbottom."px!important;
			margin-right:".$woobizz_header_langoptionsmarginright."px!important;
			margin-left:".$woobizz_header_langoptionsmarginleft."px!important;
			padding-top:".$woobizz_header_langoptionspaddingtop."px!important;
			padding-bottom:".$woobizz_header_langoptionspaddingbottom."px!important;
			padding-right: ".$woobizz_header_langoptionspaddingright."px!important;
			padding-left: ".$woobizz_header_langoptionspaddingleft."px!important;
			line-height: 16px;
			float:".$woobizz_header_langfloat."!important;
			display:".$woobizz_header_langoptionsdisplay."!important;
			clear:".$woobizz_header_langclear."!important;
		}
		h2#langnumber {
			margin-top: 10px;
			margin-bottom: 10px;
			text-align: center;
			font-size: ".$woobizz_header_langnumbersize."px!important;
			color:".$woobizz_header_langnumbercolor."!important;
			display:".$woobizz_header_langnumberdisplay."!important;
		}
		h4#langdetails {
			text-align: center;
			color:".$woobizz_header_langdescriptioncolor."!important;
			font-size:".$woobizz_header_langdescriptionsize."px!important;
			display:".$woobizz_header_langdescriptiondisplay."!important;
		}
		".$woobizz_header_woocommerce_css." .site-header .main-navigation {
			margin-top: ".$woobizz_header_pmenumargintop."px!important;
			margin-bottom:".$woobizz_header_pmenumarginbottom."px!important;
			margin-right:".$woobizz_header_pmenumarginright."px!important;
			margin-left:".$woobizz_header_pmenumarginleft."px!important;
			padding-top:".$woobizz_header_pmenupaddingtop."px!important;
			padding-bottom:".$woobizz_header_pmenupaddingbottom."px!important;
			padding-right: ".$woobizz_header_pmenupaddingright."px!important;
			padding-left: ".$woobizz_header_pmenupaddingleft."px!important;
			display:".$woobizz_header_pmenudisplay."!important;
		}
		.main-navigation ul li a, .site-title a, ul.menu li a, .site-branding h1 a {
			color: #464646;
			//text-transform: uppercase;
			font-family: 'Roboto Condensed', sans-serif;
			font-weight:400;
		}
		.main-navigation ul.menu ul {
			//background-color: ".$woobizz_header_backgroundcolor."!important;
		}
		ul.menu li.current-menu-item > a, .site-header {
			//text-decoration: underline;
		}
		h1, h2, h3, h4, h5, h6 {
			color: #484c51;
			font-family: 'Roboto Condensed', sans-serif!important;
			font-weight:400;
		}
		.site-header-cart .cart-contents {
			padding:0;
			margin:0;
			background-color:rgba(".$woobizz_header_cartbgtransparencyfull."!important);
			display:".$woobizz_header_cartcontentdisplay."!important;
		}
		.site-header-cart:hover > li > a {
			color:".$woobizz_header_cartpricecolor."!important;
		}
		.site-header-cart .cart-contents .count {
			color:".$woobizz_header_cartitemscolor."!important;
			opacity:1;
			font-size: inherit;
			display: ".$woobizz_header_hidecartitem."!important;
		}
		.site-header-cart .cart-contents .amount {
			display: ".$woobizz_header_hidecartprice."!important;
			color:".$woobizz_header_cartpricecolor."!important;
			font-weight:600;
		}	
		.content-area, .widget-area {
			margin-bottom: 0!important;
		}
		.site-header-cart .cart-contents:after {
			color:".$woobizz_header_cartfonticoncolor."!important;
		}
	@media (min-width: 768px){
		.widget_product_search form {
				margin: 0!important;
				padding:0!important;
		}
		".$woobizz_header_woocommerce_css." .site-header .site-header-cart {
			width:".$woobizz_header_cartwidthfull."!important;
			max-width:".$woobizz_header_cartmaxwidthfull."!important;
			min-width:".$woobizz_header_cartminwidthfull."!important;
			display: ".$woobizz_header_cartdisplay."!important;
			float:".$woobizz_header_cartfloat."!important;	
			clear:".$woobizz_header_cartclear."!important;		
			margin-top: ".$woobizz_header_cartmargintop."px!important;
			margin-bottom:".$woobizz_header_cartmarginbottom."px!important;
			margin-right:".$woobizz_header_cartmarginright."px!important;
			margin-left:".$woobizz_header_cartmarginleft."px!important;
			padding-top:".$woobizz_header_cartpaddingtop."px!important;
			padding-bottom:".$woobizz_header_cartpaddingbottom."px!important;
			padding-right: ".$woobizz_header_cartpaddingright."px!important;
			padding-left: ".$woobizz_header_cartpaddingleft."px!important;
			background-color:rgba(".$woobizz_header_cartbgtransparencyfull."!important);
			border-radius:".$woobizz_header_cartborderradius."px!important;
			border:".$woobizz_header_cartbordercolor."
				  ".$woobizz_header_cartborderstyle."
				  ".$woobizz_header_cartbordersize."px!important;
			box-shadow: ".$woobizz_header_cartshadowcolor. "
							".$woobizz_header_cartshadowrightdistance."px 
							".$woobizz_header_cartshadowbottomdistance."px 
							".$woobizz_header_cartshadowspread."px 
							".$woobizz_header_cartshadowsize."px!important;	  
		}
		.site-header-cart .cart-contents:after {
			content:".$woobizz_header_carticon."!important;
			margin-top:".$woobizz_header_carticonmargintop."px!important;
			top:".$woobizz_header_carticonmargintop."px!important;
			margin-right:".$woobizz_header_carticonmarginright."px!important;
			right:".$woobizz_header_carticonmarginright."px!important;
			display: ".$woobizz_header_cartfonticondisplay."!important;
			color:".$woobizz_header_cartfonticoncolor."!important;
			position:relative!important;
			float:right!important;
		}
		.site-header-cart .widget_shopping_cart {
			display: ".$woobizz_header_widgetcartdisplay."!important;
			background-color:".$woobizz_header_widgetcartbackgroundcolor."!important;
		}
		.site-header-cart .widget_shopping_cart .product_list_widget li a.remove:before {
			text-align: left;
			color:".$woobizz_header_widgetcartremovetextcolor."!important;
		}
		.site-header-cart .widget_shopping_cart a{
			color: ".$woobizz_header_widgetcartitemtitlecolor."!important;
		}
		.site-header-cart .widget_shopping_cart a:hover{
			color: ".$woobizz_header_widgetcartitemtitlecolor."!important;
		}
		.site-header-cart .widget_shopping_cart, .site-header .product_list_widget li .quantity {
			color: ".$woobizz_header_widgetcartitempricecolor."!important;
		}
		.site-header-cart .widget_shopping_cart a.button.wc-forward {
			background-color:".$woobizz_header_widgetcartviewbuttoncolor."!important;
			color:".$woobizz_header_widgetcartviewtextcolor."!important;
		}
		.site-header-cart .widget_shopping_cart a.button.checkout{
			background-color:".$woobizz_header_widgetcartcheckoutbuttoncolor."!important;
			color:".$woobizz_header_widgetcartcheckouttextcolor."!important;
		}
	}		
	@media screen and (max-width: 1140px){
		".$woobizz_header_woocommerce_css." .site-header .secondary-navigation {
			display: none;
		}	
	}
	@media screen and (max-width: 767px){
		h1.entry-title {
			text-align: center;
			font-size: 33px;
		}
		.main-navigation ul li a {
			color: #2C2D33!important;
			background: white!important;
			padding: 3%!important;
			border-bottom: 1px solid #D6D6D6!important;
		}
		".$woobizz_header_woocommerce_css." .site-header .main-navigation {
			background: none!important;
		}
		ul.site-header-cart.menu {
			display: none;
		}
		".$woobizz_header_woocommerce_css." .site-header .site-search {
			display:none;
		}
		div#header-phone-options {
			display:none;
		}
		div#header-lang-options {
			display:none;
		}
		".$woobizz_header_woocommerce_css." .site-header .main-navigation {
			width: 100%;
		}
		.menu-toggle {
			margin-bottom:15px;
		}
		button.menu-toggle {
			width: 100%!important;
			border: 1px solid #d9d9d9!important;
			height: 50px!important;
			background: #efefef!important;
			
		}
		.storefront-handheld-footer-bar{
			box-shadow:1px 1px 16px grey;
			
		}
		.storefront-handheld-footer-bar ul li>a {
			background:white;
			color:#696969!important;
			border-right: 1px solid #d5d5d5;
		}
		.storefront-handheld-footer-bar ul li.search .site-search {
			bottom: -50px;
		}	
				
		".$woobizz_header_woocommerce_css." .site-header .main-navigation {
			background: #464646;
		}
		.storefront-handheld-footer-bar ul li.cart .count{
			background:#49a25a;
			border:none;
		}
		.screen-reader-text{
		display:none!important;
	}
		
	</style>";
  }
  add_action('wp_head', 'woobizz_header_allcssoptions', 100);
  	//End CSS-----------------------------------------------------------------------------------------
	// ALIGN MENU ELEMENTS ON HEADER
	function woobizz_header_movemenuelements() {
		//Delete	
		remove_action( 'storefront_header', 'woobizz_storefront_header_logo',		10);
		remove_action( 'storefront_header', 'storefront_site_branding',			    20);
		remove_action( 'storefront_header', 'storefront_secondary_navigation',		30);
		remove_action( 'storefront_header', 'storefront_primary_navigation',		50);
		remove_action( 'storefront_header', 'woobizz_storefront_header_phone',		70);
		remove_action( 'storefront_header', 'woobizz_storefront_header_lang',		80);
		//GET VARS
		$woobizz_header_brandinglogoposition= get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogoposition');
		$woobizz_header_brandingtextposition= get_option(WOOBIZZHEADER.'_woobizz_header_brandingtextposition');
		$woobizz_header_smenuposition= get_option(WOOBIZZHEADER.'_woobizz_header_smenuposition');	
		$woobizz_header_pmenuposition= get_option(WOOBIZZHEADER.'_woobizz_header_pmenuposition');		 
		$woobizz_header_phoneposition= get_option(WOOBIZZHEADER.'_woobizz_header_phoneposition');
		$woobizz_header_langposition= get_option(WOOBIZZHEADER.'_woobizz_header_langposition');
		//echo $woobizz_header_langposition;
		//Replace
		add_action( 'storefront_header', 'woobizz_storefront_header_logo',$woobizz_header_brandinglogoposition);
		add_action( 'storefront_header', 'storefront_site_branding',$woobizz_header_brandingtextposition);
		add_action( 'storefront_header', 'storefront_secondary_navigation',$woobizz_header_smenuposition);
		add_action( 'storefront_header', 'storefront_primary_navigation',$woobizz_header_pmenuposition);		
		add_action( 'storefront_header', 'woobizz_storefront_header_phone',$woobizz_header_phoneposition);
		add_action( 'storefront_header', 'woobizz_storefront_header_lang',$woobizz_header_langposition);
		//Only for Woocommerce
		if ( class_exists( 'WooCommerce' ) ) {
			$woobizz_header_searchposition= get_option(WOOBIZZHEADER.'_woobizz_header_searchposition');	
			$woobizz_header_cartposition= get_option(WOOBIZZHEADER.'_woobizz_header_cartposition');
			remove_action( 'storefront_header', 'storefront_product_search',		    40);
			remove_action( 'storefront_header', 'storefront_header_cart',               60);
			add_action( 'storefront_header', 'storefront_product_search',$woobizz_header_searchposition);
			add_action( 'storefront_header', 'storefront_header_cart',$woobizz_header_cartposition);	
		}
	}
	add_action( 'init', 'woobizz_header_movemenuelements' );
  //Phone Options Function---------------------------------------------------------------------------------------
	function woobizz_storefront_header_phone() {
		 $woobizz_header_phonenumber = get_option(WOOBIZZHEADER.'_woobizz_header_phonenumber');
		 $woobizz_header_phonedescription = get_option(WOOBIZZHEADER.'_woobizz_header_phonedescription');
		?>
		<div id="header-phone-options">
			<h2 id="phonenumber"><?php  echo $woobizz_header_phonenumber;?></h2>
			<h4 id="phonedetails"><?php  echo $woobizz_header_phonedescription;?></h4>
		</div>
		<?php
	}
	//Languages Options Function---------------------------------------------------------------------------------------
	function woobizz_storefront_header_lang() {
		 $woobizz_header_langnumber = get_option(WOOBIZZHEADER.'_woobizz_header_langnumber');
		 $woobizz_header_langdescription = get_option(WOOBIZZHEADER.'_woobizz_header_langdescription');
		?>
		<div id="header-lang-options">
			<h2 id="langnumber"><?php  echo $woobizz_header_langnumber;?></h2>
			<h4 id="langdetails"><?php  echo $woobizz_header_langdescription;?></h4>
		</div>
		<?php
	}
	//FUCTION BRANDING LOGO ------------------------------------------------------------------------------------- 
	function woobizz_storefront_header_logo() {
	$woobizz_header_brandinglogo = get_option(WOOBIZZHEADER.'_woobizz_header_brandinglogo');
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="woobizz-header-brandinglogo" rel="home">
			<img src="<?php  echo $woobizz_header_brandinglogo; ?>" />
		</a>
	<?php
	}
	//add_action( 'init', 'woobizz_storefront_header_logo' );
	//END FUNCTION BRANDING LOGO------------------------------------------------------------------------------------------------
	//2.2 FAVICON
	//Add Favicon
	function add_custom_favicon() {
		$woobizz_header_brandingfavicon = get_option(WOOBIZZHEADER.'_woobizz_header_brandingfavicon');
		?>
		<link rel="shortcut icon" href="<?php echo $woobizz_header_brandingfavicon; ?>"/>
		<?php
    }
	add_action('wp_head', 'add_custom_favicon');