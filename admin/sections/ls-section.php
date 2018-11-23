<?php
function woobizzheader_large_css(){
//-----------------------------------------------------------------------------------------
//SIZE
//-----------------------------------------------------------------------------------------	
$woobizzheader_general_lsminwidth= get_theme_mod('woobizzheader_general_lsminwidth');
$woobizzheader_large_bgwidth= get_theme_mod('woobizzheader_large_bgwidth');
$woobizzheader_large_bgheight= get_theme_mod('woobizzheader_large_bgheight');
$woobizzheader_large_bgpadding= get_theme_mod('woobizzheader_large_bgpadding');
$woobizzheader_large_bgmargin= get_theme_mod('woobizzheader_large_bgmargin');
$woobizzheader_large_bgmaxwidth= get_theme_mod('woobizzheader_large_bgmaxwidth');
$woobizzheader_large_margintopsize= get_theme_mod('woobizzheader_large_margintopsize');
$woobizzheader_large_marginrightsize= get_theme_mod('woobizzheader_large_marginrightsize');
$woobizzheader_large_marginbottomsize= get_theme_mod('woobizzheader_large_marginbottomsize');
$woobizzheader_large_marginleftsize= get_theme_mod('woobizzheader_large_marginleftsize');
$woobizzheader_large_marginfull= $woobizzheader_large_margintopsize." ".
$woobizzheader_large_marginrightsize." ".
$woobizzheader_large_marginbottomsize." ".
$woobizzheader_large_marginleftsize;
$woobizzheader_large_bgpaddings= get_theme_mod('woobizzheader_large_bgpaddings');
$woobizzheader_large_paddingtopsize= get_theme_mod('woobizzheader_large_paddingtopsize');
$woobizzheader_large_paddingrightsize= get_theme_mod('woobizzheader_large_paddingrightsize');
$woobizzheader_large_paddingbottomsize= get_theme_mod('woobizzheader_large_paddingbottomsize');
$woobizzheader_large_paddingleftsize= get_theme_mod('woobizzheader_large_paddingleftsize');
$woobizzheader_large_paddingfull= $woobizzheader_large_paddingtopsize." ".
$woobizzheader_large_paddingrightsize." ".
$woobizzheader_large_paddingbottomsize." ".
$woobizzheader_large_paddingleftsize;
//-----------------------------------------------------------------------------------------
//BACKGROUND
//-----------------------------------------------------------------------------------------
$woobizzheader_large_bgcolor= get_theme_mod('woobizzheader_large_bgcolor');
$woobizzheader_large_bgimage= get_theme_mod('woobizzheader_large_bgimage');
$woobizzheader_large_bgfullgradient1= get_theme_mod('woobizzheader_large_bgfullgradient1');
$woobizzheader_large_bgfullgradient2= get_theme_mod('woobizzheader_large_bgfullgradient2');
$woobizzheader_large_bgattachment= get_theme_mod('woobizzheader_large_bgattachment');
if ($woobizzheader_large_bgattachment=="option-1"){$woobizzheader_large_bgattachment="scroll";}
 elseif($woobizzheader_large_bgattachment=="option-2"){$woobizzheader_large_bgattachment="fixed";}
 else{$woobizzheader_large_bgattachment="scroll";}
$woobizzheader_large_bgimagesize= get_theme_mod('woobizzheader_large_bgimagesize');
if ($woobizzheader_large_bgimagesize=="option-1"){$woobizzheader_large_bgimagesize="cover";}
 elseif($woobizzheader_large_bgimagesize=="option-2"){$woobizzheader_large_bgimagesize="auto";}
 else{$woobizzheader_large_bgimagesize="auto";}
$woobizzheader_large_bgposition= get_theme_mod('woobizzheader_large_bgposition');
if ($woobizzheader_large_bgposition=="option-1"){$woobizzheader_large_bgposition="top left";}
 elseif($woobizzheader_large_bgposition=="option-2"){$woobizzheader_large_bgposition="top center";}
 elseif($woobizzheader_large_bgposition=="option-3"){$woobizzheader_large_bgposition="top right";}
 elseif($woobizzheader_large_bgposition=="option-4"){$woobizzheader_large_bgposition="center left";}
 elseif($woobizzheader_large_bgposition=="option-5"){$woobizzheader_large_bgposition="center center";}
 elseif($woobizzheader_large_bgposition=="option-6"){$woobizzheader_large_bgposition="center right";}
 elseif($woobizzheader_large_bgposition=="option-7"){$woobizzheader_large_bgposition="bottom left";}
 elseif($woobizzheader_large_bgposition=="option-8"){$woobizzheader_large_bgposition="bottom center";}
 elseif($woobizzheader_large_bgposition=="option-9"){$woobizzheader_large_bgposition="bottom right";}

$woobizzheader_large_bggrayscale= get_theme_mod("woobizzheader_large_bggrayscale");
$woobizzheader_large_bgsepia= get_theme_mod("woobizzheader_large_bgsepia");
$woobizzheader_large_bgblur= get_theme_mod("woobizzheader_large_bgblur");
$woobizzheader_large_bgbrightness= get_theme_mod("woobizzheader_large_bgbrightness");
$woobizzheader_large_bghuerotate= get_theme_mod("woobizzheader_large_bghuerotate");
$woobizzheader_large_bgsaturate= get_theme_mod("woobizzheader_large_bgsaturate");
$woobizzheader_large_bgopacity= get_theme_mod("woobizzheader_large_bgopacity");
$woobizzheader_large_bgcontrast= get_theme_mod("woobizzheader_large_bgcontrast");
$woobizzheader_large_bginvert= get_theme_mod("woobizzheader_large_bginvert");  
//--------------------------------------------------------------------------------------
//BRAND
//--------------------------------------------------------------------------------------
$woobizzheader_large_brandposition= get_theme_mod("woobizzheader_large_brandposition");
$woobizzheader_large_brandwidth= get_theme_mod("woobizzheader_large_brandwidth");
$woobizzheader_large_brandcontentheight= get_theme_mod("woobizzheader_large_brandcontentheight");

$woobizzheader_large_brandhelp=$woobizzheader_large_brandposition." | ".
$woobizzheader_large_brandwidth."%"." | LS | BRAND";


$woobizzheader_large_brandalign= get_theme_mod("woobizzheader_large_brandalign");
if($woobizzheader_large_brandalign=="option-1"){$woobizzheader_large_brandalignitems="center";$woobizzheader_large_brandjustifycontent="flex-start";}
 elseif($woobizzheader_large_brandalign=="option-2"){$woobizzheader_large_brandalignitems="center";$woobizzheader_large_brandjustifycontent="center";}
 elseif($woobizzheader_large_brandalign=="option-3"){$woobizzheader_large_brandalignitems="center";$woobizzheader_large_brandjustifycontent="flex-end";}

$woobizzheader_large_branddisplay= get_theme_mod("woobizzheader_large_branddisplay");
if($woobizzheader_large_branddisplay==0){$woobizzheader_large_branddisplay="none";}
elseif($woobizzheader_large_branddisplay==1){$woobizzheader_large_branddisplay="flex";}
$woobizzheader_large_brandtitle= get_theme_mod("woobizzheader_large_brandtitle");
$woobizzheader_large_brandtitlesize= get_theme_mod("woobizzheader_large_brandtitlesize");
$woobizzheader_large_brandtitlecolor= get_theme_mod("woobizzheader_large_brandtitlecolor");
$woobizzheader_large_branddescription= get_theme_mod("woobizzheader_large_branddescription");
$woobizzheader_large_branddescriptionsize= get_theme_mod("woobizzheader_large_branddescriptionsize");
$woobizzheader_large_branddescriptioncolor= get_theme_mod("woobizzheader_large_branddescriptioncolor");
$woobizzheader_large_brandimagealign= get_theme_mod("woobizzheader_large_brandimagealign");
if ($woobizzheader_large_brandimagealign=="option-1"){$woobizzheader_large_brandimagealign="row";}
 elseif($woobizzheader_large_brandimagealign=="option-2"){$woobizzheader_large_brandimagealign="column";}
 elseif($woobizzheader_large_brandimagealign=="option-3"){$woobizzheader_large_brandimagealign="row-reverse";}
 elseif($woobizzheader_large_brandimagealign=="option-4"){$woobizzheader_large_brandimagealign="column-reverse";}
$woobizzheader_large_brandtxtalign= get_theme_mod("woobizzheader_large_brandtxtalign");
if ($woobizzheader_large_brandtxtalign=="option-1"){$woobizzheader_large_brandtxtalign="left";}
 elseif($woobizzheader_large_brandtxtalign=="option-2"){$woobizzheader_large_brandtxtalign="center";}
 elseif($woobizzheader_large_brandtxtalign=="option-3"){$woobizzheader_large_brandtxtalign="right";}
 
$woobizzheader_large_brandtxtmargintop= get_theme_mod("woobizzheader_large_brandtxtmargintop");
$woobizzheader_large_brandtxtmarginbottom= get_theme_mod("woobizzheader_large_brandtxtmarginbottom");
$woobizzheader_large_brandtxtmarginright= get_theme_mod("woobizzheader_large_brandtxtmarginright");
$woobizzheader_large_brandtxtmarginleft= get_theme_mod("woobizzheader_large_brandtxtmarginleft");

$woobizzheader_large_brandgrayscale= get_theme_mod("woobizzheader_large_brandgrayscale");
$woobizzheader_large_brandsepia= get_theme_mod("woobizzheader_large_brandsepia");
$woobizzheader_large_brandblur= get_theme_mod("woobizzheader_large_brandblur");
$woobizzheader_large_brandbrightness= get_theme_mod("woobizzheader_large_brandbrightness");
$woobizzheader_large_brandhuerotate= get_theme_mod("woobizzheader_large_brandhuerotate");
$woobizzheader_large_brandsaturate= get_theme_mod("woobizzheader_large_brandsaturate");
$woobizzheader_large_brandopacity= get_theme_mod("woobizzheader_large_brandopacity");
$woobizzheader_large_brandcontrast= get_theme_mod("woobizzheader_large_brandcontrast");
$woobizzheader_large_brandinvert= get_theme_mod("woobizzheader_large_brandinvert"); 
//--------------------------------------------------------------------------------------
// MENU 1
//--------------------------------------------------------------------------------------
$woobizzheader_large_menu1position= get_theme_mod("woobizzheader_large_menu1position");
$woobizzheader_large_menu1width= get_theme_mod("woobizzheader_large_menu1width");
$woobizzheader_large_menu1align= get_theme_mod("woobizzheader_large_menu1align");
$woobizzheader_large_menu1display= get_theme_mod("woobizzheader_large_menu1display");
$woobizzheader_large_menu1help=$woobizzheader_large_menu1position." | ".
$woobizzheader_large_menu1width."%"." | LS | MENU1";
if ($woobizzheader_large_menu1align=="option-1"){$woobizzheader_large_menu1alignitems="center";$woobizzheader_large_menu1justifycontent="flex-start";}
 elseif($woobizzheader_large_menu1align=="option-2"){$woobizzheader_large_menu1alignitems="center";$woobizzheader_large_menu1justifycontent="center";}
 elseif($woobizzheader_large_menu1align=="option-3"){$woobizzheader_large_menu1alignitems="center";$woobizzheader_large_menu1justifycontent="flex-end";}
if($woobizzheader_large_menu1display==0){$woobizzheader_large_menu1display="none";}
elseif($woobizzheader_large_menu1display==1){$woobizzheader_large_menu1display="flex";}
//--------------------------------------------------------------------------------------
// MENU 2
//--------------------------------------------------------------------------------------
$woobizzheader_large_menu2position= get_theme_mod("woobizzheader_large_menu2position");
$woobizzheader_large_menu2width= get_theme_mod("woobizzheader_large_menu2width");
$woobizzheader_large_menu2align= get_theme_mod("woobizzheader_large_menu2align");
$woobizzheader_large_menu2display= get_theme_mod("woobizzheader_large_menu2display");
$woobizzheader_large_menu2help=$woobizzheader_large_menu2position." | ".
$woobizzheader_large_menu2width."%"." | LS | MENU2";
if ($woobizzheader_large_menu2align=="option-1"){$woobizzheader_large_menu2alignitems="center";$woobizzheader_large_menu2justifycontent="flex-start";}
 elseif($woobizzheader_large_menu2align=="option-2"){$woobizzheader_large_menu2alignitems="center";$woobizzheader_large_menu2justifycontent="center";}
 elseif($woobizzheader_large_menu2align=="option-3"){$woobizzheader_large_menu2alignitems="center";$woobizzheader_large_menu2justifycontent="flex-end";}
if($woobizzheader_large_menu2display==0){$woobizzheader_large_menu2display="none";}
elseif($woobizzheader_large_menu2display==1){$woobizzheader_large_menu2display="flex";}
//--------------------------------------------------------------------------------------
// MENU 3
//--------------------------------------------------------------------------------------
$woobizzheader_large_menu3position= get_theme_mod("woobizzheader_large_menu3position");
$woobizzheader_large_menu3width= get_theme_mod("woobizzheader_large_menu3width");
$woobizzheader_large_menu3align= get_theme_mod("woobizzheader_large_menu3align");
$woobizzheader_large_menu3display= get_theme_mod("woobizzheader_large_menu3display");
$woobizzheader_large_menu3help=$woobizzheader_large_menu3position." | ".
$woobizzheader_large_menu3width."%"." | LS | MENU3";
if ($woobizzheader_large_menu3align=="option-1"){$woobizzheader_large_menu3alignitems="center";$woobizzheader_large_menu3justifycontent="flex-start";}
 elseif($woobizzheader_large_menu3align=="option-2"){$woobizzheader_large_menu3alignitems="center";$woobizzheader_large_menu3justifycontent="center";}
 elseif($woobizzheader_large_menu3align=="option-3"){$woobizzheader_large_menu3alignitems="center";$woobizzheader_large_menu3justifycontent="flex-end";}
if($woobizzheader_large_menu3display==0){$woobizzheader_large_menu3display="none";}
elseif($woobizzheader_large_menu3display==1){$woobizzheader_large_menu3display="flex";}
//--------------------------------------------------------------------------------------
// CART
//--------------------------------------------------------------------------------------
$woobizzheader_large_cartposition= get_theme_mod("woobizzheader_large_cartposition");
$woobizzheader_large_cartwidth= get_theme_mod("woobizzheader_large_cartwidth");
$woobizzheader_large_carthelp=$woobizzheader_large_cartposition." | ".
$woobizzheader_large_cartwidth."%"." | LS | CART";
$woobizzheader_large_cartalign= get_theme_mod("woobizzheader_large_cartalign");
if($woobizzheader_large_cartalign=="option-1"){$woobizzheader_large_cartalignitems="center";$woobizzheader_large_cartjustifycontent="flex-start";}
 elseif($woobizzheader_large_cartalign=="option-2"){$woobizzheader_large_cartalignitems="center";$woobizzheader_large_cartjustifycontent="center";}
 elseif($woobizzheader_large_cartalign=="option-3"){$woobizzheader_large_cartalignitems="center";$woobizzheader_large_cartjustifycontent="flex-end";}
$woobizzheader_large_cartdisplay= get_theme_mod("woobizzheader_large_cartdisplay");
if($woobizzheader_large_cartdisplay==0){$woobizzheader_large_cartdisplay="none";}
elseif($woobizzheader_large_cartdisplay==1){$woobizzheader_large_cartdisplay="flex";}
$woobizzheader_large_carttitle= get_theme_mod("woobizzheader_large_carttitle");
$woobizzheader_large_carttitlesize= get_theme_mod("woobizzheader_large_carttitlesize");
$woobizzheader_large_carttitlecolor= get_theme_mod("woobizzheader_large_carttitlecolor");
$woobizzheader_large_cartdescription= get_theme_mod("woobizzheader_large_cartdescription");
$woobizzheader_large_cartdescriptionsize= get_theme_mod("woobizzheader_large_cartdescriptionsize");
$woobizzheader_large_cartdescriptioncolor= get_theme_mod("woobizzheader_large_cartdescriptioncolor");
$woobizzheader_large_cartimagealign= get_theme_mod("woobizzheader_large_cartimagealign");
if ($woobizzheader_large_cartimagealign=="option-1"){$woobizzheader_large_cartimagealign="row";}
 elseif($woobizzheader_large_cartimagealign=="option-2"){$woobizzheader_large_cartimagealign="column";}
 elseif($woobizzheader_large_cartimagealign=="option-3"){$woobizzheader_large_cartimagealign="row-reverse";}
 elseif($woobizzheader_large_cartimagealign=="option-4"){$woobizzheader_large_cartimagealign="column-reverse";}
$woobizzheader_large_carttxtalign= get_theme_mod("woobizzheader_large_carttxtalign");
if ($woobizzheader_large_carttxtalign=="option-1"){$woobizzheader_large_carttxtalign="left";}
 elseif($woobizzheader_large_carttxtalign=="option-2"){$woobizzheader_large_carttxtalign="center";}
 elseif($woobizzheader_large_carttxtalign=="option-3"){$woobizzheader_large_carttxtalign="right";}
$woobizzheader_large_cartitems= get_theme_mod("woobizzheader_large_cartitems");	
$woobizzheader_large_cartimagedisplay= get_theme_mod("woobizzheader_large_cartimagedisplay");
if($woobizzheader_large_cartimagedisplay==0){$woobizzheader_large_cartimagedisplay="flex";}
elseif($woobizzheader_large_cartimagedisplay==1){$woobizzheader_large_cartimagedisplay="none";}
$woobizzheader_large_cartpricedisplay= get_theme_mod("woobizzheader_large_cartpricedisplay");
if($woobizzheader_large_cartpricedisplay==0){$woobizzheader_large_cartpricedisplay="flex";}
elseif($woobizzheader_large_cartpricedisplay==1){$woobizzheader_large_cartpricedisplay="none";}
$woobizzheader_large_carttxtdisplay= get_theme_mod("woobizzheader_large_carttxtdisplay");
if($woobizzheader_large_carttxtdisplay==0){$woobizzheader_large_carttxtdisplay="flex";}
elseif($woobizzheader_large_carttxtdisplay==1){$woobizzheader_large_carttxtdisplay="none";}

$woobizzheader_large_cartgrayscale= get_theme_mod("woobizzheader_large_cartgrayscale");
$woobizzheader_large_cartsepia= get_theme_mod("woobizzheader_large_cartsepia");
$woobizzheader_large_cartblur= get_theme_mod("woobizzheader_large_cartblur");
$woobizzheader_large_cartbrightness= get_theme_mod("woobizzheader_large_cartbrightness");
$woobizzheader_large_carthuerotate= get_theme_mod("woobizzheader_large_carthuerotate");
$woobizzheader_large_cartsaturate= get_theme_mod("woobizzheader_large_cartsaturate");
$woobizzheader_large_cartopacity= get_theme_mod("woobizzheader_large_cartopacity");
$woobizzheader_large_cartcontrast= get_theme_mod("woobizzheader_large_cartcontrast");
$woobizzheader_large_cartinvert= get_theme_mod("woobizzheader_large_cartinvert");  
//--------------------------------------------------------------------------------------
// SEARCH
//--------------------------------------------------------------------------------------
$woobizzheader_large_searchposition= get_theme_mod("woobizzheader_large_searchposition");
$woobizzheader_large_searchwidth= get_theme_mod("woobizzheader_large_searchwidth");
$woobizzheader_large_searchalign= get_theme_mod("woobizzheader_large_searchalign");
$woobizzheader_large_searchdisplay= get_theme_mod("woobizzheader_large_searchdisplay");
$woobizzheader_large_searchhelp=$woobizzheader_large_searchposition." | ".
$woobizzheader_large_searchwidth."%"." | LS | SEARCH";
if ($woobizzheader_large_searchalign=="option-1"){$woobizzheader_large_searchalignitems="center";$woobizzheader_large_searchjustifycontent="flex-start";}
 elseif($woobizzheader_large_searchalign=="option-2"){$woobizzheader_large_searchalignitems="center";$woobizzheader_large_searchjustifycontent="center";}
 elseif($woobizzheader_large_searchalign=="option-3"){$woobizzheader_large_searchalignitems="center";$woobizzheader_large_searchjustifycontent="flex-end";}
if($woobizzheader_large_searchdisplay==0){$woobizzheader_large_searchdisplay="none";}
elseif($woobizzheader_large_searchdisplay==1){$woobizzheader_large_searchdisplay="flex";}
//--------------------------------------------------------------------------------------
//BOX1
//--------------------------------------------------------------------------------------
$woobizzheader_large_box1position= get_theme_mod("woobizzheader_large_box1position");
$woobizzheader_large_box1width= get_theme_mod("woobizzheader_large_box1width");
$woobizzheader_large_box1help=$woobizzheader_large_box1position." | ".
$woobizzheader_large_box1width."%"." | LS | BOX1";
$woobizzheader_large_box1align= get_theme_mod("woobizzheader_large_box1align");
if($woobizzheader_large_box1align=="option-1"){$woobizzheader_large_box1alignitems="center";$woobizzheader_large_box1justifycontent="flex-start";}
 elseif($woobizzheader_large_box1align=="option-2"){$woobizzheader_large_box1alignitems="center";$woobizzheader_large_box1justifycontent="center";}
 elseif($woobizzheader_large_box1align=="option-3"){$woobizzheader_large_box1alignitems="center";$woobizzheader_large_box1justifycontent="flex-end";}
$woobizzheader_large_box1display= get_theme_mod("woobizzheader_large_box1display");
if($woobizzheader_large_box1display==0){$woobizzheader_large_box1display="none";}
elseif($woobizzheader_large_box1display==1){$woobizzheader_large_box1display="flex";}
$woobizzheader_large_box1title= get_theme_mod("woobizzheader_large_box1title");
$woobizzheader_large_box1titlesize= get_theme_mod("woobizzheader_large_box1titlesize");
$woobizzheader_large_box1titlecolor= get_theme_mod("woobizzheader_large_box1titlecolor");
$woobizzheader_large_box1description= get_theme_mod("woobizzheader_large_box1description");
$woobizzheader_large_box1descriptionsize= get_theme_mod("woobizzheader_large_box1descriptionsize");
$woobizzheader_large_box1descriptioncolor= get_theme_mod("woobizzheader_large_box1descriptioncolor");
$woobizzheader_large_box1imagealign= get_theme_mod("woobizzheader_large_box1imagealign");
if ($woobizzheader_large_box1imagealign=="option-1"){$woobizzheader_large_box1imagealign="row";}
 elseif($woobizzheader_large_box1imagealign=="option-2"){$woobizzheader_large_box1imagealign="column";}
 elseif($woobizzheader_large_box1imagealign=="option-3"){$woobizzheader_large_box1imagealign="row-reverse";}
 elseif($woobizzheader_large_box1imagealign=="option-4"){$woobizzheader_large_box1imagealign="column-reverse";}
$woobizzheader_large_box1txtalign= get_theme_mod("woobizzheader_large_box1txtalign");
if ($woobizzheader_large_box1txtalign=="option-1"){$woobizzheader_large_box1txtalign="left";}
 elseif($woobizzheader_large_box1txtalign=="option-2"){$woobizzheader_large_box1txtalign="center";}
 elseif($woobizzheader_large_box1txtalign=="option-3"){$woobizzheader_large_box1txtalign="right";}
$woobizzheader_large_box1grayscale= get_theme_mod("woobizzheader_large_box1grayscale");
$woobizzheader_large_box1sepia= get_theme_mod("woobizzheader_large_box1sepia");
$woobizzheader_large_box1blur= get_theme_mod("woobizzheader_large_box1blur");
$woobizzheader_large_box1brightness= get_theme_mod("woobizzheader_large_box1brightness");
$woobizzheader_large_box1huerotate= get_theme_mod("woobizzheader_large_box1huerotate");
$woobizzheader_large_box1saturate= get_theme_mod("woobizzheader_large_box1saturate");
$woobizzheader_large_box1opacity= get_theme_mod("woobizzheader_large_box1opacity");
$woobizzheader_large_box1contrast= get_theme_mod("woobizzheader_large_box1contrast");
$woobizzheader_large_box1invert= get_theme_mod("woobizzheader_large_box1invert");  
 //--------------------------------------------------------------------------------------
//BOX2
//--------------------------------------------------------------------------------------
$woobizzheader_large_box2position= get_theme_mod("woobizzheader_large_box2position");
$woobizzheader_large_box2width= get_theme_mod("woobizzheader_large_box2width");
$woobizzheader_large_box2help=$woobizzheader_large_box2position." | ".
$woobizzheader_large_box2width."%"." | LS | BOX2";
$woobizzheader_large_box2align= get_theme_mod("woobizzheader_large_box2align");
if($woobizzheader_large_box2align=="option-1"){$woobizzheader_large_box2alignitems="center";$woobizzheader_large_box2justifycontent="flex-start";}
 elseif($woobizzheader_large_box2align=="option-2"){$woobizzheader_large_box2alignitems="center";$woobizzheader_large_box2justifycontent="center";}
 elseif($woobizzheader_large_box2align=="option-3"){$woobizzheader_large_box2alignitems="center";$woobizzheader_large_box2justifycontent="flex-end";}
$woobizzheader_large_box2display= get_theme_mod("woobizzheader_large_box2display");
if($woobizzheader_large_box2display==0){$woobizzheader_large_box2display="none";}
elseif($woobizzheader_large_box2display==1){$woobizzheader_large_box2display="flex";}
$woobizzheader_large_box2title= get_theme_mod("woobizzheader_large_box2title");
$woobizzheader_large_box2titlesize= get_theme_mod("woobizzheader_large_box2titlesize");
$woobizzheader_large_box2titlecolor= get_theme_mod("woobizzheader_large_box2titlecolor");
$woobizzheader_large_box2description= get_theme_mod("woobizzheader_large_box2description");
$woobizzheader_large_box2descriptionsize= get_theme_mod("woobizzheader_large_box2descriptionsize");
$woobizzheader_large_box2descriptioncolor= get_theme_mod("woobizzheader_large_box2descriptioncolor");
$woobizzheader_large_box2imagealign= get_theme_mod("woobizzheader_large_box2imagealign");
if ($woobizzheader_large_box2imagealign=="option-1"){$woobizzheader_large_box2imagealign="row";}
 elseif($woobizzheader_large_box2imagealign=="option-2"){$woobizzheader_large_box2imagealign="column";}
 elseif($woobizzheader_large_box2imagealign=="option-3"){$woobizzheader_large_box2imagealign="row-reverse";}
 elseif($woobizzheader_large_box2imagealign=="option-4"){$woobizzheader_large_box2imagealign="column-reverse";}
$woobizzheader_large_box2txtalign= get_theme_mod("woobizzheader_large_box2txtalign");
if ($woobizzheader_large_box2txtalign=="option-1"){$woobizzheader_large_box2txtalign="left";}
 elseif($woobizzheader_large_box2txtalign=="option-2"){$woobizzheader_large_box2txtalign="center";}
 elseif($woobizzheader_large_box2txtalign=="option-3"){$woobizzheader_large_box2txtalign="right";}
 else{$woobizzheader_large_box2txtalign="left";}
$woobizzheader_large_box2grayscale= get_theme_mod("woobizzheader_large_box2grayscale");
$woobizzheader_large_box2sepia= get_theme_mod("woobizzheader_large_box2sepia");
$woobizzheader_large_box2blur= get_theme_mod("woobizzheader_large_box2blur");
$woobizzheader_large_box2brightness= get_theme_mod("woobizzheader_large_box2brightness");
$woobizzheader_large_box2huerotate= get_theme_mod("woobizzheader_large_box2huerotate");
$woobizzheader_large_box2saturate= get_theme_mod("woobizzheader_large_box2saturate");
$woobizzheader_large_box2opacity= get_theme_mod("woobizzheader_large_box2opacity");
$woobizzheader_large_box2contrast= get_theme_mod("woobizzheader_large_box2contrast");
$woobizzheader_large_box2invert= get_theme_mod("woobizzheader_large_box2invert");  
//--------------------------------------------------------------------------------------
// WIDGET1
//--------------------------------------------------------------------------------------
$woobizzheader_large_widget1position= get_theme_mod("woobizzheader_large_widget1position");
$woobizzheader_large_widget1width= get_theme_mod("woobizzheader_large_widget1width");
$woobizzheader_large_widget1align= get_theme_mod("woobizzheader_large_widget1align");
$woobizzheader_large_widget1display= get_theme_mod("woobizzheader_large_widget1display");
$woobizzheader_large_widget1help=$woobizzheader_large_widget1position." | ".
$woobizzheader_large_widget1width."%"." | LS | WIDGET1";
if ($woobizzheader_large_widget1align=="option-1"){$woobizzheader_large_widget1alignitems="center";$woobizzheader_large_widget1justifycontent="flex-start";}
 elseif($woobizzheader_large_widget1align=="option-2"){$woobizzheader_large_widget1alignitems="center";$woobizzheader_large_widget1justifycontent="center";}
 elseif($woobizzheader_large_widget1align=="option-3"){$woobizzheader_large_widget1alignitems="center";$woobizzheader_large_widget1justifycontent="flex-end";}
if($woobizzheader_large_widget1display==0){$woobizzheader_large_widget1display="none";}
elseif($woobizzheader_large_widget1display==1){$woobizzheader_large_widget1display="flex";}
//--------------------------------------------------------------------------------------
// WIDGET2
//--------------------------------------------------------------------------------------
$woobizzheader_large_widget2position= get_theme_mod("woobizzheader_large_widget2position");
$woobizzheader_large_widget2width= get_theme_mod("woobizzheader_large_widget2width");
$woobizzheader_large_widget2align= get_theme_mod("woobizzheader_large_widget2align");
$woobizzheader_large_widget2display= get_theme_mod("woobizzheader_large_widget2display");
$woobizzheader_large_widget2help=$woobizzheader_large_widget2position." | ".
$woobizzheader_large_widget2width."%"." | LS | WIDGET2";
if ($woobizzheader_large_widget2align=="option-1"){$woobizzheader_large_widget2alignitems="center";$woobizzheader_large_widget2justifycontent="flex-start";}
 elseif($woobizzheader_large_widget2align=="option-2"){$woobizzheader_large_widget2alignitems="center";$woobizzheader_large_widget2justifycontent="center";}
 elseif($woobizzheader_large_widget2align=="option-3"){$woobizzheader_large_widget2alignitems="center";$woobizzheader_large_widget2justifycontent="flex-end";}
if($woobizzheader_large_widget2display==0){$woobizzheader_large_widget2display="none";}
elseif($woobizzheader_large_widget2display==1){$woobizzheader_large_widget2display="flex";}
//--------------------------------------------------------------------------------------
//CLS
//--------------------------------------------------------------------------------------
echo"
 <style>
@media screen and (min-width:".$woobizzheader_general_lsminwidth."px){
	
	.woobizzheader-medium-wrapper{display:none!important;}
	.woobizzheader-small-wrapper{display:none!important;}

	.woobizzheader-medium-bghelp.woobizzheader-general-txthelp{display: none!important;}
	.woobizzheader-small-bghelp.woobizzheader-general-txthelp{display: none!important;}

	.woobizzheader-large-bghelp:after {
		content: '0 | 100% | LS | BG ';		
	}
	.woobizzheader-large-box{
		min-height: ".$woobizzheader_large_bgheight."px;		
	}	
	.woobizzheader-large-wrapper{
		width:".$woobizzheader_large_bgwidth."%;
		padding:".$woobizzheader_large_bgpadding."px;
		
		display:flex;
		flex-wrap:wrap;
		margin:0 auto!important;

	}
	.site-header{
		margin:".$woobizzheader_large_bgmargin."px;
		padding:".$woobizzheader_large_paddingfull."!important;
		box-shadow:".$woobizzheader_large_shadowfull."!important;
		border-top:".$woobizzheader_large_bordertopfull."!important;
		border-right:".$woobizzheader_large_borderrightfull."!important;
		border-bottom:".$woobizzheader_large_borderbottomfull."!important;
		border-left:".$woobizzheader_large_borderleftfull."!important;
	}
	.site-header:before {
		content:'';
		position: absolute;
		left: 0;
		right: 0;
		z-index: -1;
		display: block;
		background-image: linear-gradient(".$woobizzheader_large_bgfullgradient1.",
										  ".$woobizzheader_large_bgfullgradient2."),
									   url('$woobizzheader_large_bgimage');
		background-color:".$woobizzheader_large_bgcolor."!important;
		background-size:".$woobizzheader_large_bgimagesize."!important;
		background-position:".$woobizzheader_large_bgposition."!important;
		background-attachment:".$woobizzheader_large_bgattachment."!important;	
		width:100%;
		height:100%;
		filter: grayscale(".$woobizzheader_large_bggrayscale."%) sepia(".$woobizzheader_large_bgsepia."%) blur(".$woobizzheader_large_bgblur."px) brightness(".$woobizzheader_large_bgbrightness."%) hue-rotate(".$woobizzheader_large_bghuerotate."deg) saturate(".$woobizzheader_large_bgsaturate."%) opacity(".$woobizzheader_large_bgopacity."%) contrast(".$woobizzheader_large_bgcontrast."%) invert(".$woobizzheader_large_bginvert."%);
		-webkit-filter: grayscale(".$woobizzheader_large_bggrayscale."%) sepia(".$woobizzheader_large_bgsepia."%) blur(".$woobizzheader_large_bgblur."px) brightness(".$woobizzheader_large_bgbrightness."%) hue-rotate(".$woobizzheader_large_bghuerotate."deg) saturate(".$woobizzheader_large_bgsaturate."%) opacity(".$woobizzheader_large_bgopacity."%) contrast(".$woobizzheader_large_bgcontrast."%) invert(".$woobizzheader_large_bginvert."%);
		-moz-filter: grayscale(".$woobizzheader_large_bggrayscale."%) sepia(".$woobizzheader_large_bgsepia."%) blur(".$woobizzheader_large_bgblur."px) brightness(".$woobizzheader_large_bgbrightness."%) hue-rotate(".$woobizzheader_large_bghuerotate."deg) saturate(".$woobizzheader_large_bgsaturate."%) opacity(".$woobizzheader_large_bgopacity."%) contrast(".$woobizzheader_large_bgcontrast."%) invert(".$woobizzheader_large_bginvert."%);
	
	}
	.site-header .col-full {
		width:100%;
		margin:0 auto!important;
		max-width: 100%;
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ BRAND CLS */
	/*---------------------------------------------------------------*/
	
	.woobizzheader-large-brandbox {
		display:".$woobizzheader_large_branddisplay."!important;
		order:".$woobizzheader_large_brandposition.";
		width:".$woobizzheader_large_brandwidth."%;
		align-items:".$woobizzheader_large_brandalignitems."!important;
		justify-content:".$woobizzheader_large_brandjustifycontent."!important;
		text-align: ".$woobizzheader_large_brandtxtalign."!important;
		

	}	
	.woobizzheader-large-brandhelp:after {
		content:'$woobizzheader_large_brandhelp';	
		
	}
	h3#woobizzheader-large-brandtitle {
		color: ".$woobizzheader_large_brandtitlecolor.";
		font-size:".$woobizzheader_large_brandtitlesize."px;
		font-weight: 400;
		font-family: inherit;		
	}
	p#woobizzheader-large-branddescription {
		color: ".$woobizzheader_large_branddescriptioncolor.";
		font-size:".$woobizzheader_large_branddescriptionsize."px;
	}
	.woobizzheader-large-branditems p {
		margin: 0;
		text-align: ".$woobizzheader_large_brandtxtalign."!important;
	}
	.woobizzheader-large-branditems {
		display: flex;
		align-items: center;
		height: auto;
		flex-direction:".$woobizzheader_large_brandimagealign."!important;
	}
	.woobizzheader-large-branditem1 img {
		filter: grayscale(".$woobizzheader_large_brandgrayscale."%) sepia(".$woobizzheader_large_brandsepia."%) blur(".$woobizzheader_large_brandblur."px) brightness(".$woobizzheader_large_brandbrightness."%) hue-rotate(".$woobizzheader_large_brandhuerotate."deg) saturate(".$woobizzheader_large_brandsaturate."%) opacity(".$woobizzheader_large_brandopacity."%) contrast(".$woobizzheader_large_brandcontrast."%) invert(".$woobizzheader_large_brandinvert."%);
		-webkit-filter: grayscale(".$woobizzheader_large_brandgrayscale."%) sepia(".$woobizzheader_large_brandsepia."%) blur(".$woobizzheader_large_brandblur."px) brightness(".$woobizzheader_large_brandbrightness."%) hue-rotate(".$woobizzheader_large_brandhuerotate."deg) saturate(".$woobizzheader_large_brandsaturate."%) opacity(".$woobizzheader_large_brandopacity."%) contrast(".$woobizzheader_large_brandcontrast."%) invert(".$woobizzheader_large_brandinvert."%);
		-moz-filter: grayscale(".$woobizzheader_large_brandgrayscale."%) sepia(".$woobizzheader_large_brandsepia."%) blur(".$woobizzheader_large_brandblur."px) brightness(".$woobizzheader_large_brandbrightness."%) hue-rotate(".$woobizzheader_large_brandhuerotate."deg) saturate(".$woobizzheader_large_brandsaturate."%) opacity(".$woobizzheader_large_brandopacity."%) contrast(".$woobizzheader_large_brandcontrast."%) invert(".$woobizzheader_large_brandinvert."%);
	}	
	.woobizzheader-large-branditem2 {
		text-align: ".$woobizzheader_large_brandtxtalign."!important;
		margin-top: ".$woobizzheader_large_brandtxtmargintop."px;
		margin-bottom: ".$woobizzheader_large_brandtxtmarginbottom."px;
		margin-right: ".$woobizzheader_large_brandtxtmarginright."px;
		margin-left: ".$woobizzheader_large_brandtxtmarginleft."px;
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ MENU 1 CLS */
	/*---------------------------------------------------------------*/
	.woobizzheader-large-menu1{
		display:".$woobizzheader_large_menu1display."!important;
		order:".$woobizzheader_large_menu1position."!important;
		width:".$woobizzheader_large_menu1width."%!important;
		align-items:".$woobizzheader_large_menu1alignitems."!important;
		justify-content:".$woobizzheader_large_menu1justifycontent."!important;

	}
	.woobizzheader-large-menu1help:after {
		content:'$woobizzheader_large_menu1help';	
		
	}	
	/*---------------------------------------------------------------*/
	/* WOOBIZZ MENU 2 CLS */
	/*---------------------------------------------------------------*/
	.woobizzheader-large-menu2{
		display:".$woobizzheader_large_menu2display."!important;
		order:".$woobizzheader_large_menu2position."!important;
		width:".$woobizzheader_large_menu2width."%!important;
		align-items:".$woobizzheader_large_menu2alignitems."!important;
		justify-content:".$woobizzheader_large_menu2justifycontent."!important;
	}
	.woobizzheader-large-menu2help:after {
		content:'$woobizzheader_large_menu2help';			
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ MENU 3 CLS */
	/*---------------------------------------------------------------*/
	.woobizzheader-large-menu3{
		display:".$woobizzheader_large_menu3display."!important;
		order:".$woobizzheader_large_menu3position."!important;
		width:".$woobizzheader_large_menu3width."%!important;
		align-items:".$woobizzheader_large_menu3alignitems."!important;
		justify-content:".$woobizzheader_large_menu3justifycontent."!important;
	}
	.woobizzheader-large-menu3help:after {
		content:'$woobizzheader_large_menu3help';		
	}
	#mega-menu-wrap-woobizz-menu-3 {
    width: 100%;
	}	
	/*---------------------------------------------------------------*/
	/* WOOBIZZ CART CLS */
	/*---------------------------------------------------------------*/
	.woobizzheader-large-cartitems{
		display: ".$woobizzheader_large_cartdisplay."!important;
	}
	.woobizzheader-large-cartitem1{
		display: ".$woobizzheader_large_cartimagedisplay."!important;
	}
	.woobizzheader-large-cartitem1 img{
		filter: grayscale(".$woobizzheader_large_cartgrayscale."%) sepia(".$woobizzheader_large_cartsepia."%) blur(".$woobizzheader_large_cartblur."px) brightness(".$woobizzheader_large_cartbrightness."%) hue-rotate(".$woobizzheader_large_carthuerotate."deg) saturate(".$woobizzheader_large_cartsaturate."%) opacity(".$woobizzheader_large_cartopacity."%) contrast(".$woobizzheader_large_cartcontrast."%) invert(".$woobizzheader_large_cartinvert."%);
		-webkit-filter: grayscale(".$woobizzheader_large_cartgrayscale."%) sepia(".$woobizzheader_large_cartsepia."%) blur(".$woobizzheader_large_cartblur."px) brightness(".$woobizzheader_large_cartbrightness."%) hue-rotate(".$woobizzheader_large_carthuerotate."deg) saturate(".$woobizzheader_large_cartsaturate."%) opacity(".$woobizzheader_large_cartopacity."%) contrast(".$woobizzheader_large_cartcontrast."%) invert(".$woobizzheader_large_cartinvert."%);
		-moz-filter: grayscale(".$woobizzheader_large_cartgrayscale."%) sepia(".$woobizzheader_large_cartsepia."%) blur(".$woobizzheader_large_cartblur."px) brightness(".$woobizzheader_large_cartbrightness."%) hue-rotate(".$woobizzheader_large_carthuerotate."deg) saturate(".$woobizzheader_large_cartsaturate."%) opacity(".$woobizzheader_large_cartopacity."%) contrast(".$woobizzheader_large_cartcontrast."%) invert(".$woobizzheader_large_cartinvert."%);
	}
	.woobizzheader-large-cart {
		display:".$woobizzheader_large_cartdisplay."!important;
		order:".$woobizzheader_large_cartposition."!important;
		width:".$woobizzheader_large_cartwidth."%!important;
		align-items:".$woobizzheader_large_cartalignitems."!important;
		justify-content:".$woobizzheader_large_cartjustifycontent."!important;		
	}
	.woobizzheader-large-carthelp:after {
		content:'$woobizzheader_large_carthelp';		
	}
	
	h3#woobizzheader-large-carttitle {
		color: ".$woobizzheader_large_carttitlecolor."!important;
		font-size:".$woobizzheader_large_carttitlesize."px!important;
		text-align: ".$woobizzheader_large_carttxtalign."!important;
		font-weight: 400;
		font-family: inherit;		
	}
	a.woobizzheader-large-cartlink {
		color: ".$woobizzheader_large_cartdescriptioncolor."!important;
		font-size:".$woobizzheader_large_cartdescriptionsize."px!important;
		text-align: ".$woobizzheader_large_carttxtalign."!important;
		display: ".$woobizzheader_large_carttxtdisplay."!important;

	}
	.woobizzheader-large-cartitems p {
		margin: 0;
		text-align: ".$woobizzheader_large_carttxtalign."!important;
	}
	.woobizzheader-large-cartitems {
		display: flex;
		align-items: center;
		height: auto;
		flex-direction:".$woobizzheader_large_cartimagealign."!important;
	}

	.woobizzheader-large-cartitem2 {
		text-align: ".$woobizzheader_large_carttxtalign."!important;
		margin: 10px 10px;
	}
	.site-header-cart .cart-contents .amount {
		color: ".$woobizzheader_large_carttitlecolor."!important;
		font-size:".$woobizzheader_large_carttitlesize."px!important;
		text-align: ".$woobizzheader_large_carttxtalign."!important;
		display: ".$woobizzheader_large_cartpricedisplay."!important;
		margin-right:0;
	}
	.woobizzheader-large-cartcount {
		display: ".$woobizzheader_large_cartimagedisplay."!important;
		background: red;
		width: 30px;
		height: 30px;
		text-align: center;
		font-size: large;
		display: flex;
		justify-content: center;
		align-self: center;
		border-radius: 50%;
		color: white;
		margin-left: 40px;
		margin-top: -66px;
		position: absolute;
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
	/*---------------------------------------------------------------*/
	/* SEARCH CLS */
	/*---------------------------------------------------------------*/
	.woobizzheader-large-search {
		display:".$woobizzheader_large_searchdisplay."!important;
		order:".$woobizzheader_large_searchposition."!important;
		width:".$woobizzheader_large_searchwidth."%!important;
		align-items:".$woobizzheader_large_searchalignitems."!important;
		justify-content:".$woobizzheader_large_searchjustifycontent."!important;
		text-align: center;
	}
	.site-search {
    	display:".$woobizzheader_large_searchdisplay."!important;
	}
	.woobizzheader-large-searchhelp:after {
		content:'$woobizzheader_large_searchhelp';
	}
	.woobizzheader-large-searchitems {
		display: flex;
		align-items: center;
	}	
	.widget_product_search form input[type=search]{
		width: auto;
		border:1px solid #c7c7c7;
	}
	.woocommerce-active .site-header .site-search {
		width: auto;
		float: none;
		margin: 0;
		clear: none;
	}
	
	/*---------------------------------------------------------------*/
	/* WOOBIZZ BOX2 CLS */
	/*---------------------------------------------------------------*/
	.woobizzheader-large-box1items{
		display: ".$woobizzheader_large_box1display."!important;
	}
	.woobizzheader-large-box1 {
		display:".$woobizzheader_large_box1display."!important;
		order:".$woobizzheader_large_box1position."!important;
		width:".$woobizzheader_large_box1width."%!important;
		align-items:".$woobizzheader_large_box1alignitems."!important;
		justify-content:".$woobizzheader_large_box1justifycontent."!important;
		
	}
	.woobizzheader-large-box1help:after {
		content:'$woobizzheader_large_box1help';		
	}
	h3#woobizzheader-large-box1title {
		color: ".$woobizzheader_large_box1titlecolor."!important;
		font-size:".$woobizzheader_large_box1titlesize."px!important;
		font-weight: 400;
		font-family: inherit;		
	}
	p#woobizzheader-large-box1description- {
		color: ".$woobizzheader_large_box1descriptioncolor."!important;
		font-size:".$woobizzheader_large_box1descriptionsize."px!important;
	}
	.woobizzheader-large-box1items p {
		margin: 0;
		text-align: ".$woobizzheader_large_box1txtalign."!important;
	}
	.woobizzheader-large-box1items {
		display: flex;
		align-items: center;
		height: auto;
		flex-direction:".$woobizzheader_large_box1imagealign."!important;
	}
	.woobizzheader-large-box1item1 img{
		filter: grayscale(".$woobizzheader_large_box1grayscale."%) sepia(".$woobizzheader_large_box1sepia."%) blur(".$woobizzheader_large_box1blur."px) brightness(".$woobizzheader_large_box1brightness."%) hue-rotate(".$woobizzheader_large_box1huerotate."deg) saturate(".$woobizzheader_large_box1saturate."%) opacity(".$woobizzheader_large_box1opacity."%) contrast(".$woobizzheader_large_box1contrast."%) invert(".$woobizzheader_large_box1invert."%);
		-webkit-filter: grayscale(".$woobizzheader_large_box1grayscale."%) sepia(".$woobizzheader_large_box1sepia."%) blur(".$woobizzheader_large_box1blur."px) brightness(".$woobizzheader_large_box1brightness."%) hue-rotate(".$woobizzheader_large_box1huerotate."deg) saturate(".$woobizzheader_large_box1saturate."%) opacity(".$woobizzheader_large_box1opacity."%) contrast(".$woobizzheader_large_box1contrast."%) invert(".$woobizzheader_large_box1invert."%);
		-moz-filter: grayscale(".$woobizzheader_large_box1grayscale."%) sepia(".$woobizzheader_large_box1sepia."%) blur(".$woobizzheader_large_box1blur."px) brightness(".$woobizzheader_large_box1brightness."%) hue-rotate(".$woobizzheader_large_box1huerotate."deg) saturate(".$woobizzheader_large_box1saturate."%) opacity(".$woobizzheader_large_box1opacity."%) contrast(".$woobizzheader_large_box1contrast."%) invert(".$woobizzheader_large_box1invert."%);
	}	
	.woobizzheader-large-box1item1 {
		text-align: ".$woobizzheader_large_box1txtalign."!important;
		margin: 10px 10px;
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ BOX2 CLS */
	/*---------------------------------------------------------------*/
	.woobizzheader-large-box2items{
		display: ".$woobizzheader_large_box2display."!important;
	}
	.woobizzheader-large-box2 {
		display:".$woobizzheader_large_box2display."!important;
		order:".$woobizzheader_large_box2position."!important;
		width:".$woobizzheader_large_box2width."%!important;
		align-items:".$woobizzheader_large_box2alignitems."!important;
		justify-content:".$woobizzheader_large_box2justifycontent."!important;
		
	}
	.woobizzheader-large-box2help:after{
		content:'$woobizzheader_large_box2help';		
	}
	h3#woobizzheader-large-box2title {
		color: ".$woobizzheader_large_box2titlecolor."!important;
		font-size:".$woobizzheader_large_box2titlesize."px!important;
		font-weight: 400;
		font-family: inherit;		
	}
	p#woobizzheader-large-box2description- {
		color: ".$woobizzheader_large_box2descriptioncolor."!important;
		font-size:".$woobizzheader_large_box2descriptionsize."px!important;
	}
	.woobizzheader-large-box2items p {
		margin: 0;
		text-align: ".$woobizzheader_large_box2txtalign."!important;
	}
	.woobizzheader-large-box2items {
		display: flex;
		align-items: center;
		height: auto;
		flex-direction:".$woobizzheader_large_box2imagealign."!important;
	}
	.woobizzheader-large-box2item1 img{
		filter: grayscale(".$woobizzheader_large_box2grayscale."%) sepia(".$woobizzheader_large_box2sepia."%) blur(".$woobizzheader_large_box2blur."px) brightness(".$woobizzheader_large_box2brightness."%) hue-rotate(".$woobizzheader_large_box2huerotate."deg) saturate(".$woobizzheader_large_box2saturate."%) opacity(".$woobizzheader_large_box2opacity."%) contrast(".$woobizzheader_large_box2contrast."%) invert(".$woobizzheader_large_box2invert."%);
		-webkit-filter: grayscale(".$woobizzheader_large_box2grayscale."%) sepia(".$woobizzheader_large_box2sepia."%) blur(".$woobizzheader_large_box2blur."px) brightness(".$woobizzheader_large_box2brightness."%) hue-rotate(".$woobizzheader_large_box2huerotate."deg) saturate(".$woobizzheader_large_box2saturate."%) opacity(".$woobizzheader_large_box2opacity."%) contrast(".$woobizzheader_large_box2contrast."%) invert(".$woobizzheader_large_box2invert."%);
		-moz-filter: grayscale(".$woobizzheader_large_box2grayscale."%) sepia(".$woobizzheader_large_box2sepia."%) blur(".$woobizzheader_large_box2blur."px) brightness(".$woobizzheader_large_box2brightness."%) hue-rotate(".$woobizzheader_large_box2huerotate."deg) saturate(".$woobizzheader_large_box2saturate."%) opacity(".$woobizzheader_large_box2opacity."%) contrast(".$woobizzheader_large_box2contrast."%) invert(".$woobizzheader_large_box2invert."%);
	}	
	.woobizzheader-large-box2item2 {
		text-align: ".$woobizzheader_large_box2txtalign."!important;
		margin: 10px 10px;
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ WIDGET 1 CLS */
	/*---------------------------------------------------------------*/
	.woobizzheader-large-widget1{
		display:".$woobizzheader_large_widget1display."!important;
		order:".$woobizzheader_large_widget1position."!important;
		width:".$woobizzheader_large_widget1width."%!important;
		align-items:".$woobizzheader_large_widget1alignitems."!important;
		justify-content:".$woobizzheader_large_widget1justifycontent."!important;

	}
	.woobizzheader-large-widget1help:after {
		content:'$woobizzheader_large_widget1help';
	}
	
	/*---------------------------------------------------------------*/
	/* WOOBIZZ WIDGET 2 CLS */
	/*---------------------------------------------------------------*/
	.woobizzheader-large-widget2{
		display:".$woobizzheader_large_widget2display."!important;
		order:".$woobizzheader_large_widget2position."!important;
		width:".$woobizzheader_large_widget2width."%!important;
		align-items:".$woobizzheader_large_widget2alignitems."!important;
		justify-content:".$woobizzheader_large_widget2justifycontent."!important;

	}
	.woobizzheader-large-widget2help:after {
		content:'$woobizzheader_large_widget2help';
	}
	
}	
 </style>
";
}
add_action("wp_head","woobizzheader_large_css",100);
//--------------------------------------------------------------------------------------
//HTLM
//--------------------------------------------------------------------------------------
function woobizzheader_large_htmlphpcontent() {
$woobizzheader_large_brandlogo= get_theme_mod('woobizzheader_large_brandlogo');
$woobizzheader_large_brandtitle= get_theme_mod("woobizzheader_large_brandtitle");
$woobizzheader_large_brandtitlesize= get_theme_mod("woobizzheader_large_brandtitlesize");
$woobizzheader_large_brandtitlecolor= get_theme_mod("woobizzheader_large_brandtitlecolor");
$woobizzheader_large_branddescription= get_theme_mod("woobizzheader_large_branddescription");
$woobizzheader_large_branddescriptionsize= get_theme_mod("woobizzheader_large_branddescriptionsize");
$woobizzheader_large_branddescriptioncolor= get_theme_mod("woobizzheader_large_branddescriptioncolor");

$woobizzheader_large_cartlogo= get_theme_mod('woobizzheader_large_cartlogo');
$woobizzheader_large_carttitlesize= get_theme_mod("woobizzheader_large_carttitlesize");
$woobizzheader_large_carttitlecolor= get_theme_mod("woobizzheader_large_carttitlecolor");
$woobizzheader_large_cartdescription= get_theme_mod("woobizzheader_large_cartdescription");
$woobizzheader_large_cartdescriptionsize= get_theme_mod("woobizzheader_large_cartdescriptionsize");
$woobizzheader_large_cartdescriptioncolor= get_theme_mod("woobizzheader_large_cartdescriptioncolor");

$woobizzheader_large_box1logo= get_theme_mod('woobizzheader_large_box1logo');
$woobizzheader_large_box1title= get_theme_mod("woobizzheader_large_box1title");
$woobizzheader_large_box1titlesize= get_theme_mod("woobizzheader_large_box1titlesize");
$woobizzheader_large_box1titlecolor= get_theme_mod("woobizzheader_large_box1titlecolor");
$woobizzheader_large_box1description= get_theme_mod("woobizzheader_large_box1description");
$woobizzheader_large_box1descriptionsize= get_theme_mod("woobizzheader_large_box1descriptionsize");
$woobizzheader_large_box1descriptioncolor= get_theme_mod("woobizzheader_large_box1descriptioncolor");

$woobizzheader_large_box2logo= get_theme_mod('woobizzheader_large_box2logo');
$woobizzheader_large_box2title= get_theme_mod("woobizzheader_large_box2title");
$woobizzheader_large_box2titlesize= get_theme_mod("woobizzheader_large_box2titlesize");
$woobizzheader_large_box2titlecolor= get_theme_mod("woobizzheader_large_box2titlecolor");
$woobizzheader_large_box2description= get_theme_mod("woobizzheader_large_box2description");
$woobizzheader_large_box2descriptionsize= get_theme_mod("woobizzheader_large_box2descriptionsize");
$woobizzheader_large_box2descriptioncolor= get_theme_mod("woobizzheader_large_box2descriptioncolor");
?>
<div class= "woobizzheader-large-bghelp woobizzheader-general-txthelp"></div>
<div class="woobizzheader-large-wrapper " >	
	
	<div class="woobizzheader-large-box woobizzheader-large-brandbox woobizzheader-general-box ">
	
	 	<div class= "woobizzheader-large-brandhelp woobizzheader-general-txthelp"></div>
		<div class="woobizzheader-large-branditems ">					
				<div class="woobizzheader-large-branditem1">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="woobizzheader-large-logo" rel="home">
					<img src="<?php  echo $woobizzheader_large_brandlogo; ?>" />						
				</div>							
				<div class="woobizzheader-large-branditem2">
					<h3 id="woobizzheader-large-brandtitle"><?php  echo $woobizzheader_large_brandtitle; ?></h3>
					<p id="woobizzheader-large-branddescription"><?php  echo $woobizzheader_large_branddescription; ?></p>	
				</a>						
				</div>											
		</div>	
	</div>
	<div class="woobizzheader-large-box woobizzheader-large-menu1 woobizzheader-general-box">

		<div class= "woobizzheader-large-menu1help woobizzheader-general-txthelp"></div>
		<?php
			wp_nav_menu( array( 'theme_location' => 'woobizz-menu-1' ) );				
		?>	
	</div>
	<div class="woobizzheader-large-box woobizzheader-large-menu2 woobizzheader-general-box">
		<div class= "woobizzheader-large-menu2help woobizzheader-general-txthelp"></div>
		<?php
			wp_nav_menu( array( 'theme_location' => 'woobizz-menu-2' ) );				
		?>	
	</div>
	<div class="woobizzheader-large-box woobizzheader-large-menu3 woobizzheader-general-box">
		<div class= "woobizzheader-large-menu3help woobizzheader-general-txthelp"></div>
		<?php
			wp_nav_menu( array( 'theme_location' => 'woobizz-menu-3' ) );				
		?>	
	</div>
	<div class="woobizzheader-large-box woobizzheader-large-cart woobizzheader-general-box">
			<div class= "woobizzheader-large-carthelp woobizzheader-general-txthelp"></div>		
			<div class="woobizzheader-large-cartitems">	
				<a href="http://127.0.0.1/dev-plugins/carrito/">
				<div class="woobizzheader-large-cartitem1">
					<img src="<?php  echo $woobizzheader_large_cartlogo; ?>" />	
				</div>

				<div class="woobizzheader-large-cartcount">
					<?php
					if ( class_exists( 'woocommerce' ) ) {
						echo WC()->cart->get_cart_contents_count();
					}
					?>
				</div>
				
				<div class="woobizzheader-large-cartitem2">
					<?php
					if ( class_exists( 'woocommerce' ) ) {
						storefront_header_cart();
					}					  
					 ?>
						<a class="woobizzheader-large-cartlink" href="http://127.0.0.1/dev-plugins/carrito/">
						<?php  echo $woobizzheader_large_cartdescription; ?>
						</a>
				</div>
				</a>
			</div>	
	</div>
	<div class="woobizzheader-large-box woobizzheader-large-search woobizzheader-general-box">
			<div class= "woobizzheader-large-searchhelp woobizzheader-general-txthelp"></div>
			<div class="woobizzheader-large-searchitems">
				<?php
					//Check if woocommerce is activated
					if ( class_exists( 'woocommerce' ) ) {
						storefront_product_search();
					}else {
						get_search_form();							
					}
				?>
			</div>
	</div>
	<div class="woobizzheader-large-box woobizzheader-large-box1 woobizzheader-general-box">
		<div class= "woobizzheader-large-box1help woobizzheader-general-txthelp"></div>
		<div class="woobizzheader-large-box1items ">					
				<div class="woobizzheader-large-box1item1">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="woobizzheader-large-box1logo" rel="home">
					<img src="<?php  echo $woobizzheader_large_box1logo; ?>" />						
				</div>							
				<div class="woobizzheader-large-box1item2">
					<h3 id="woobizzheader-large-box1title"><?php  echo $woobizzheader_large_box1title; ?></h3>
					<p id="woobizzheader-large-box1description-"><?php  echo $woobizzheader_large_box1description; ?></p>	
				</a>						
				</div>											
		</div>	
	</div>
	<div class="woobizzheader-large-box woobizzheader-large-box2 woobizzheader-general-box">
		<div class= "woobizzheader-large-box2help woobizzheader-general-txthelp"></div>
		<div class="woobizzheader-large-box2items ">					
				<div class="woobizzheader-large-box2item1">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="woobizzheader-large-box2logo" rel="home">
					<img src="<?php  echo $woobizzheader_large_box2logo; ?>" />						
				</div>							
				<div class="woobizzheader-large-box2item2">
					<h3 id="woobizzheader-large-box2title"><?php  echo $woobizzheader_large_box2title; ?></h3>
					<p id="woobizzheader-large-box2description-"><?php  echo $woobizzheader_large_box2description; ?></p>	
				</a>						
				</div>											
		</div>	
	</div>
	<div class="woobizzheader-large-box woobizzheader-large-widget1 woobizzheader-general-box">
		<div class= "woobizzheader-large-widget1help woobizzheader-general-txthelp"></div>
		<?php
			dynamic_sidebar( 'Woobizz Header Custom Widget 1' );			
		?>	
	</div>
	<div class="woobizzheader-large-box woobizzheader-large-widget2 woobizzheader-general-box">
		<div class= "woobizzheader-large-widget2help woobizzheader-general-txthelp"></div>
		<?php
			dynamic_sidebar( 'Woobizz Header Custom Widget 2' );			
		?>	
	</div>		
</div>
<?php
}
add_action('storefront_header', 'woobizzheader_large_htmlphpcontent');