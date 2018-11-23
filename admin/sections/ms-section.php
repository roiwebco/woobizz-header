<?php
function woobizzheader_medium_css(){
//-----------------------------------------------------------------------------------------
//SIZE
//-----------------------------------------------------------------------------------------	
$woobizzheader_general_msminwidth= get_theme_mod('woobizzheader_general_msminwidth');
$woobizzheader_general_msmaxwidth= get_theme_mod('woobizzheader_general_msmaxwidth');
$woobizzheader_medium_bgwidth= get_theme_mod('woobizzheader_medium_bgwidth');
$woobizzheader_medium_bgheight= get_theme_mod('woobizzheader_medium_bgheight');
$woobizzheader_medium_bgpadding= get_theme_mod('woobizzheader_medium_bgpadding');
$woobizzheader_medium_bgmargin= get_theme_mod('woobizzheader_medium_bgmargin');
$woobizzheader_medium_bgmaxwidth= get_theme_mod('woobizzheader_medium_bgmaxwidth');
$woobizzheader_medium_margintopsize= get_theme_mod('woobizzheader_medium_margintopsize');
$woobizzheader_medium_marginrightsize= get_theme_mod('woobizzheader_medium_marginrightsize');
$woobizzheader_medium_marginbottomsize= get_theme_mod('woobizzheader_medium_marginbottomsize');
$woobizzheader_medium_marginleftsize= get_theme_mod('woobizzheader_medium_marginleftsize');
$woobizzheader_medium_marginfull= $woobizzheader_medium_margintopsize." ".
$woobizzheader_medium_marginrightsize." ".
$woobizzheader_medium_marginbottomsize." ".
$woobizzheader_medium_marginleftsize;
$woobizzheader_medium_bgpaddings= get_theme_mod('woobizzheader_medium_bgpaddings');
$woobizzheader_medium_paddingtopsize= get_theme_mod('woobizzheader_medium_paddingtopsize');
$woobizzheader_medium_paddingrightsize= get_theme_mod('woobizzheader_medium_paddingrightsize');
$woobizzheader_medium_paddingbottomsize= get_theme_mod('woobizzheader_medium_paddingbottomsize');
$woobizzheader_medium_paddingleftsize= get_theme_mod('woobizzheader_medium_paddingleftsize');
$woobizzheader_medium_paddingfull= $woobizzheader_medium_paddingtopsize." ".
$woobizzheader_medium_paddingrightsize." ".
$woobizzheader_medium_paddingbottomsize." ".
$woobizzheader_medium_paddingleftsize;
//-----------------------------------------------------------------------------------------
//BACKGROUND
//-----------------------------------------------------------------------------------------
$woobizzheader_medium_bgcolor= get_theme_mod('woobizzheader_medium_bgcolor');
$woobizzheader_medium_bgimage= get_theme_mod('woobizzheader_medium_bgimage');
$woobizzheader_medium_bgfullgradient1= get_theme_mod('woobizzheader_medium_bgfullgradient1');
$woobizzheader_medium_bgfullgradient2= get_theme_mod('woobizzheader_medium_bgfullgradient2');
$woobizzheader_medium_bgattachment= get_theme_mod('woobizzheader_medium_bgattachment');
if ($woobizzheader_medium_bgattachment=="option-1"){$woobizzheader_medium_bgattachment="scroll";}
 elseif($woobizzheader_medium_bgattachment=="option-2"){$woobizzheader_medium_bgattachment="fixed";}
 else{$woobizzheader_medium_bgattachment="scroll";}
$woobizzheader_medium_bgimagesize= get_theme_mod('woobizzheader_medium_bgimagesize');
if ($woobizzheader_medium_bgimagesize=="option-1"){$woobizzheader_medium_bgimagesize="cover";}
 elseif($woobizzheader_medium_bgimagesize=="option-2"){$woobizzheader_medium_bgimagesize="auto";}
 else{$woobizzheader_medium_bgimagesize="auto";}
$woobizzheader_medium_bgposition= get_theme_mod('woobizzheader_medium_bgposition');
if ($woobizzheader_medium_bgposition=="option-1"){$woobizzheader_medium_bgposition="top left";}
 elseif($woobizzheader_medium_bgposition=="option-2"){$woobizzheader_medium_bgposition="top center";}
 elseif($woobizzheader_medium_bgposition=="option-3"){$woobizzheader_medium_bgposition="top right";}
 elseif($woobizzheader_medium_bgposition=="option-4"){$woobizzheader_medium_bgposition="center left";}
 elseif($woobizzheader_medium_bgposition=="option-5"){$woobizzheader_medium_bgposition="center center";}
 elseif($woobizzheader_medium_bgposition=="option-6"){$woobizzheader_medium_bgposition="center right";}
 elseif($woobizzheader_medium_bgposition=="option-7"){$woobizzheader_medium_bgposition="bottom left";}
 elseif($woobizzheader_medium_bgposition=="option-8"){$woobizzheader_medium_bgposition="bottom center";}
 elseif($woobizzheader_medium_bgposition=="option-9"){$woobizzheader_medium_bgposition="bottom right";}

$woobizzheader_medium_bggrayscale= get_theme_mod("woobizzheader_medium_bggrayscale");
$woobizzheader_medium_bgsepia= get_theme_mod("woobizzheader_medium_bgsepia");
$woobizzheader_medium_bgblur= get_theme_mod("woobizzheader_medium_bgblur");
$woobizzheader_medium_bgbrightness= get_theme_mod("woobizzheader_medium_bgbrightness");
$woobizzheader_medium_bghuerotate= get_theme_mod("woobizzheader_medium_bghuerotate");
$woobizzheader_medium_bgsaturate= get_theme_mod("woobizzheader_medium_bgsaturate");
$woobizzheader_medium_bgopacity= get_theme_mod("woobizzheader_medium_bgopacity");
$woobizzheader_medium_bgcontrast= get_theme_mod("woobizzheader_medium_bgcontrast");
$woobizzheader_medium_bginvert= get_theme_mod("woobizzheader_medium_bginvert");  
//--------------------------------------------------------------------------------------
//BRAND
//--------------------------------------------------------------------------------------
$woobizzheader_medium_brandposition= get_theme_mod("woobizzheader_medium_brandposition");
$woobizzheader_medium_brandwidth= get_theme_mod("woobizzheader_medium_brandwidth");
$woobizzheader_medium_brandcontentheight= get_theme_mod("woobizzheader_medium_brandcontentheight");

$woobizzheader_medium_brandhelp=$woobizzheader_medium_brandposition." | ".
$woobizzheader_medium_brandwidth."%"." | MS | BRAND";


$woobizzheader_medium_brandalign= get_theme_mod("woobizzheader_medium_brandalign");
if($woobizzheader_medium_brandalign=="option-1"){$woobizzheader_medium_brandalignitems="center";$woobizzheader_medium_brandjustifycontent="flex-start";}
 elseif($woobizzheader_medium_brandalign=="option-2"){$woobizzheader_medium_brandalignitems="center";$woobizzheader_medium_brandjustifycontent="center";}
 elseif($woobizzheader_medium_brandalign=="option-3"){$woobizzheader_medium_brandalignitems="center";$woobizzheader_medium_brandjustifycontent="flex-end";}
$woobizzheader_medium_branddisplay= get_theme_mod("woobizzheader_medium_branddisplay");
if($woobizzheader_medium_branddisplay==0){$woobizzheader_medium_branddisplay="none";}
elseif($woobizzheader_medium_branddisplay==1){$woobizzheader_medium_branddisplay="flex";}
$woobizzheader_medium_brandtitle= get_theme_mod("woobizzheader_medium_brandtitle");
$woobizzheader_medium_brandtitlesize= get_theme_mod("woobizzheader_medium_brandtitlesize");
$woobizzheader_medium_brandtitlecolor= get_theme_mod("woobizzheader_medium_brandtitlecolor");
$woobizzheader_medium_branddescription= get_theme_mod("woobizzheader_medium_branddescription");
$woobizzheader_medium_branddescriptionsize= get_theme_mod("woobizzheader_medium_branddescriptionsize");
$woobizzheader_medium_branddescriptioncolor= get_theme_mod("woobizzheader_medium_branddescriptioncolor");
$woobizzheader_medium_brandimagealign= get_theme_mod("woobizzheader_medium_brandimagealign");
if ($woobizzheader_medium_brandimagealign=="option-1"){$woobizzheader_medium_brandimagealign="row";}
 elseif($woobizzheader_medium_brandimagealign=="option-2"){$woobizzheader_medium_brandimagealign="column";}
 elseif($woobizzheader_medium_brandimagealign=="option-3"){$woobizzheader_medium_brandimagealign="row-reverse";}
 elseif($woobizzheader_medium_brandimagealign=="option-4"){$woobizzheader_medium_brandimagealign="column-reverse";}
$woobizzheader_medium_brandtxtalign= get_theme_mod("woobizzheader_medium_brandtxtalign");
if ($woobizzheader_medium_brandtxtalign=="option-1"){$woobizzheader_medium_brandtxtalign="left";}
 elseif($woobizzheader_medium_brandtxtalign=="option-2"){$woobizzheader_medium_brandtxtalign="center";}
 elseif($woobizzheader_medium_brandtxtalign=="option-3"){$woobizzheader_medium_brandtxtalign="right";}
 
$woobizzheader_medium_brandtxtmargintop= get_theme_mod("woobizzheader_medium_brandtxtmargintop");
$woobizzheader_medium_brandtxtmarginbottom= get_theme_mod("woobizzheader_medium_brandtxtmarginbottom");
$woobizzheader_medium_brandtxtmarginright= get_theme_mod("woobizzheader_medium_brandtxtmarginright");
$woobizzheader_medium_brandtxtmarginleft= get_theme_mod("woobizzheader_medium_brandtxtmarginleft");

$woobizzheader_medium_brandgrayscale= get_theme_mod("woobizzheader_medium_brandgrayscale");
$woobizzheader_medium_brandsepia= get_theme_mod("woobizzheader_medium_brandsepia");
$woobizzheader_medium_brandblur= get_theme_mod("woobizzheader_medium_brandblur");
$woobizzheader_medium_brandbrightness= get_theme_mod("woobizzheader_medium_brandbrightness");
$woobizzheader_medium_brandhuerotate= get_theme_mod("woobizzheader_medium_brandhuerotate");
$woobizzheader_medium_brandsaturate= get_theme_mod("woobizzheader_medium_brandsaturate");
$woobizzheader_medium_brandopacity= get_theme_mod("woobizzheader_medium_brandopacity");
$woobizzheader_medium_brandcontrast= get_theme_mod("woobizzheader_medium_brandcontrast");
$woobizzheader_medium_brandinvert= get_theme_mod("woobizzheader_medium_brandinvert"); 
//--------------------------------------------------------------------------------------
// MENU 1
//--------------------------------------------------------------------------------------
$woobizzheader_medium_menu1position= get_theme_mod("woobizzheader_medium_menu1position");
$woobizzheader_medium_menu1width= get_theme_mod("woobizzheader_medium_menu1width");
$woobizzheader_medium_menu1align= get_theme_mod("woobizzheader_medium_menu1align");
$woobizzheader_medium_menu1display= get_theme_mod("woobizzheader_medium_menu1display");
$woobizzheader_medium_menu1help=$woobizzheader_medium_menu1position." | ".
$woobizzheader_medium_menu1width."%"." | MS | MENU1";
if ($woobizzheader_medium_menu1align=="option-1"){$woobizzheader_medium_menu1alignitems="center";$woobizzheader_medium_menu1justifycontent="flex-start";}
 elseif($woobizzheader_medium_menu1align=="option-2"){$woobizzheader_medium_menu1alignitems="center";$woobizzheader_medium_menu1justifycontent="center";}
 elseif($woobizzheader_medium_menu1align=="option-3"){$woobizzheader_medium_menu1alignitems="center";$woobizzheader_medium_menu1justifycontent="flex-end";}
if($woobizzheader_medium_menu1display==0){$woobizzheader_medium_menu1display="none";}
elseif($woobizzheader_medium_menu1display==1){$woobizzheader_medium_menu1display="flex";}
//--------------------------------------------------------------------------------------
// MENU 2
//--------------------------------------------------------------------------------------
$woobizzheader_medium_menu2position= get_theme_mod("woobizzheader_medium_menu2position");
$woobizzheader_medium_menu2width= get_theme_mod("woobizzheader_medium_menu2width");
$woobizzheader_medium_menu2align= get_theme_mod("woobizzheader_medium_menu2align");
$woobizzheader_medium_menu2display= get_theme_mod("woobizzheader_medium_menu2display");
$woobizzheader_medium_menu2help=$woobizzheader_medium_menu2position." | ".
$woobizzheader_medium_menu2width."%"." | MS | MENU2";
if ($woobizzheader_medium_menu2align=="option-1"){$woobizzheader_medium_menu2alignitems="center";$woobizzheader_medium_menu2justifycontent="flex-start";}
 elseif($woobizzheader_medium_menu2align=="option-2"){$woobizzheader_medium_menu2alignitems="center";$woobizzheader_medium_menu2justifycontent="center";}
 elseif($woobizzheader_medium_menu2align=="option-3"){$woobizzheader_medium_menu2alignitems="center";$woobizzheader_medium_menu2justifycontent="flex-end";}
if($woobizzheader_medium_menu2display==0){$woobizzheader_medium_menu2display="none";}
elseif($woobizzheader_medium_menu2display==1){$woobizzheader_medium_menu2display="flex";}
//--------------------------------------------------------------------------------------
// MENU 3
//--------------------------------------------------------------------------------------
$woobizzheader_medium_menu3position= get_theme_mod("woobizzheader_medium_menu3position");
$woobizzheader_medium_menu3width= get_theme_mod("woobizzheader_medium_menu3width");
$woobizzheader_medium_menu3align= get_theme_mod("woobizzheader_medium_menu3align");
$woobizzheader_medium_menu3display= get_theme_mod("woobizzheader_medium_menu3display");
$woobizzheader_medium_menu3help=$woobizzheader_medium_menu3position." | ".
$woobizzheader_medium_menu3width."%"." | MS | MENU3";
if ($woobizzheader_medium_menu3align=="option-1"){$woobizzheader_medium_menu3alignitems="center";$woobizzheader_medium_menu3justifycontent="flex-start";}
 elseif($woobizzheader_medium_menu3align=="option-2"){$woobizzheader_medium_menu3alignitems="center";$woobizzheader_medium_menu3justifycontent="center";}
 elseif($woobizzheader_medium_menu3align=="option-3"){$woobizzheader_medium_menu3alignitems="center";$woobizzheader_medium_menu3justifycontent="flex-end";}
if($woobizzheader_medium_menu3display==0){$woobizzheader_medium_menu3display="none";}
elseif($woobizzheader_medium_menu3display==1){$woobizzheader_medium_menu3display="flex";}
//--------------------------------------------------------------------------------------
// CART
//--------------------------------------------------------------------------------------
$woobizzheader_medium_cartposition= get_theme_mod("woobizzheader_medium_cartposition");
$woobizzheader_medium_cartwidth= get_theme_mod("woobizzheader_medium_cartwidth");
$woobizzheader_medium_carthelp=$woobizzheader_medium_cartposition." | ".
$woobizzheader_medium_cartwidth."%"." | MS | CART";
$woobizzheader_medium_cartalign= get_theme_mod("woobizzheader_medium_cartalign");
if($woobizzheader_medium_cartalign=="option-1"){$woobizzheader_medium_cartalignitems="center";$woobizzheader_medium_cartjustifycontent="flex-start";}
 elseif($woobizzheader_medium_cartalign=="option-2"){$woobizzheader_medium_cartalignitems="center";$woobizzheader_medium_cartjustifycontent="center";}
 elseif($woobizzheader_medium_cartalign=="option-3"){$woobizzheader_medium_cartalignitems="center";$woobizzheader_medium_cartjustifycontent="flex-end";}
$woobizzheader_medium_cartdisplay= get_theme_mod("woobizzheader_medium_cartdisplay");
if($woobizzheader_medium_cartdisplay==0){$woobizzheader_medium_cartdisplay="none";}
elseif($woobizzheader_medium_cartdisplay==1){$woobizzheader_medium_cartdisplay="flex";}
$woobizzheader_medium_carttitle= get_theme_mod("woobizzheader_medium_carttitle");
$woobizzheader_medium_carttitlesize= get_theme_mod("woobizzheader_medium_carttitlesize");
$woobizzheader_medium_carttitlecolor= get_theme_mod("woobizzheader_medium_carttitlecolor");
$woobizzheader_medium_cartdescription= get_theme_mod("woobizzheader_medium_cartdescription");
$woobizzheader_medium_cartdescriptionsize= get_theme_mod("woobizzheader_medium_cartdescriptionsize");
$woobizzheader_medium_cartdescriptioncolor= get_theme_mod("woobizzheader_medium_cartdescriptioncolor");
$woobizzheader_medium_cartimagealign= get_theme_mod("woobizzheader_medium_cartimagealign");
if ($woobizzheader_medium_cartimagealign=="option-1"){$woobizzheader_medium_cartimagealign="row";}
 elseif($woobizzheader_medium_cartimagealign=="option-2"){$woobizzheader_medium_cartimagealign="column";}
 elseif($woobizzheader_medium_cartimagealign=="option-3"){$woobizzheader_medium_cartimagealign="row-reverse";}
 elseif($woobizzheader_medium_cartimagealign=="option-4"){$woobizzheader_medium_cartimagealign="column-reverse";}
$woobizzheader_medium_carttxtalign= get_theme_mod("woobizzheader_medium_carttxtalign");
if ($woobizzheader_medium_carttxtalign=="option-1"){$woobizzheader_medium_carttxtalign="left";}
 elseif($woobizzheader_medium_carttxtalign=="option-2"){$woobizzheader_medium_carttxtalign="center";}
 elseif($woobizzheader_medium_carttxtalign=="option-3"){$woobizzheader_medium_carttxtalign="right";}
$woobizzheader_medium_cartitems= get_theme_mod("woobizzheader_medium_cartitems");	
$woobizzheader_medium_cartimagedisplay= get_theme_mod("woobizzheader_medium_cartimagedisplay");
if($woobizzheader_medium_cartimagedisplay==0){$woobizzheader_medium_cartimagedisplay="flex";}
elseif($woobizzheader_medium_cartimagedisplay==1){$woobizzheader_medium_cartimagedisplay="none";}
$woobizzheader_medium_cartpricedisplay= get_theme_mod("woobizzheader_medium_cartpricedisplay");
if($woobizzheader_medium_cartpricedisplay==0){$woobizzheader_medium_cartpricedisplay="flex";}
elseif($woobizzheader_medium_cartpricedisplay==1){$woobizzheader_medium_cartpricedisplay="none";}
$woobizzheader_medium_carttxtdisplay= get_theme_mod("woobizzheader_medium_carttxtdisplay");
if($woobizzheader_medium_carttxtdisplay==0){$woobizzheader_medium_carttxtdisplay="flex";}
elseif($woobizzheader_medium_carttxtdisplay==1){$woobizzheader_medium_carttxtdisplay="none";}

$woobizzheader_medium_cartgrayscale= get_theme_mod("woobizzheader_medium_cartgrayscale");
$woobizzheader_medium_cartsepia= get_theme_mod("woobizzheader_medium_cartsepia");
$woobizzheader_medium_cartblur= get_theme_mod("woobizzheader_medium_cartblur");
$woobizzheader_medium_cartbrightness= get_theme_mod("woobizzheader_medium_cartbrightness");
$woobizzheader_medium_carthuerotate= get_theme_mod("woobizzheader_medium_carthuerotate");
$woobizzheader_medium_cartsaturate= get_theme_mod("woobizzheader_medium_cartsaturate");
$woobizzheader_medium_cartopacity= get_theme_mod("woobizzheader_medium_cartopacity");
$woobizzheader_medium_cartcontrast= get_theme_mod("woobizzheader_medium_cartcontrast");
$woobizzheader_medium_cartinvert= get_theme_mod("woobizzheader_medium_cartinvert");  
//--------------------------------------------------------------------------------------
// SEARCH
//--------------------------------------------------------------------------------------
$woobizzheader_medium_searchposition= get_theme_mod("woobizzheader_medium_searchposition");
$woobizzheader_medium_searchwidth= get_theme_mod("woobizzheader_medium_searchwidth");
$woobizzheader_medium_searchalign= get_theme_mod("woobizzheader_medium_searchalign");
$woobizzheader_medium_searchdisplay= get_theme_mod("woobizzheader_medium_searchdisplay");
$woobizzheader_medium_searchhelp=$woobizzheader_medium_searchposition." | ".
$woobizzheader_medium_searchwidth."%"." | MS | SEARCH";
if ($woobizzheader_medium_searchalign=="option-1"){$woobizzheader_medium_searchalignitems="center";$woobizzheader_medium_searchjustifycontent="flex-start";}
 elseif($woobizzheader_medium_searchalign=="option-2"){$woobizzheader_medium_searchalignitems="center";$woobizzheader_medium_searchjustifycontent="center";}
 elseif($woobizzheader_medium_searchalign=="option-3"){$woobizzheader_medium_searchalignitems="center";$woobizzheader_medium_searchjustifycontent="flex-end";}
if($woobizzheader_medium_searchdisplay==0){$woobizzheader_medium_searchdisplay="none";}
elseif($woobizzheader_medium_searchdisplay==1){$woobizzheader_medium_searchdisplay="flex";}
//--------------------------------------------------------------------------------------
//BOX1
//--------------------------------------------------------------------------------------
$woobizzheader_medium_box1position= get_theme_mod("woobizzheader_medium_box1position");
$woobizzheader_medium_box1width= get_theme_mod("woobizzheader_medium_box1width");
$woobizzheader_medium_box1help=$woobizzheader_medium_box1position." | ".
$woobizzheader_medium_box1width."%"." | MS | BOX1";
$woobizzheader_medium_box1align= get_theme_mod("woobizzheader_medium_box1align");
if($woobizzheader_medium_box1align=="option-1"){$woobizzheader_medium_box1alignitems="center";$woobizzheader_medium_box1justifycontent="flex-start";}
 elseif($woobizzheader_medium_box1align=="option-2"){$woobizzheader_medium_box1alignitems="center";$woobizzheader_medium_box1justifycontent="center";}
 elseif($woobizzheader_medium_box1align=="option-3"){$woobizzheader_medium_box1alignitems="center";$woobizzheader_medium_box1justifycontent="flex-end";}
$woobizzheader_medium_box1display= get_theme_mod("woobizzheader_medium_box1display");
if($woobizzheader_medium_box1display==0){$woobizzheader_medium_box1display="none";}
elseif($woobizzheader_medium_box1display==1){$woobizzheader_medium_box1display="flex";}
$woobizzheader_medium_box1title= get_theme_mod("woobizzheader_medium_box1title");
$woobizzheader_medium_box1titlesize= get_theme_mod("woobizzheader_medium_box1titlesize");
$woobizzheader_medium_box1titlecolor= get_theme_mod("woobizzheader_medium_box1titlecolor");
$woobizzheader_medium_box1description= get_theme_mod("woobizzheader_medium_box1description");
$woobizzheader_medium_box1descriptionsize= get_theme_mod("woobizzheader_medium_box1descriptionsize");
$woobizzheader_medium_box1descriptioncolor= get_theme_mod("woobizzheader_medium_box1descriptioncolor");
$woobizzheader_medium_box1imagealign= get_theme_mod("woobizzheader_medium_box1imagealign");
if ($woobizzheader_medium_box1imagealign=="option-1"){$woobizzheader_medium_box1imagealign="row";}
 elseif($woobizzheader_medium_box1imagealign=="option-2"){$woobizzheader_medium_box1imagealign="column";}
 elseif($woobizzheader_medium_box1imagealign=="option-3"){$woobizzheader_medium_box1imagealign="row-reverse";}
 elseif($woobizzheader_medium_box1imagealign=="option-4"){$woobizzheader_medium_box1imagealign="column-reverse";}
$woobizzheader_medium_box1txtalign= get_theme_mod("woobizzheader_medium_box1txtalign");
if ($woobizzheader_medium_box1txtalign=="option-1"){$woobizzheader_medium_box1txtalign="left";}
 elseif($woobizzheader_medium_box1txtalign=="option-2"){$woobizzheader_medium_box1txtalign="center";}
 elseif($woobizzheader_medium_box1txtalign=="option-3"){$woobizzheader_medium_box1txtalign="right";}
$woobizzheader_medium_box1grayscale= get_theme_mod("woobizzheader_medium_box1grayscale");
$woobizzheader_medium_box1sepia= get_theme_mod("woobizzheader_medium_box1sepia");
$woobizzheader_medium_box1blur= get_theme_mod("woobizzheader_medium_box1blur");
$woobizzheader_medium_box1brightness= get_theme_mod("woobizzheader_medium_box1brightness");
$woobizzheader_medium_box1huerotate= get_theme_mod("woobizzheader_medium_box1huerotate");
$woobizzheader_medium_box1saturate= get_theme_mod("woobizzheader_medium_box1saturate");
$woobizzheader_medium_box1opacity= get_theme_mod("woobizzheader_medium_box1opacity");
$woobizzheader_medium_box1contrast= get_theme_mod("woobizzheader_medium_box1contrast");
$woobizzheader_medium_box1invert= get_theme_mod("woobizzheader_medium_box1invert");  
 //--------------------------------------------------------------------------------------
//BOX2
//--------------------------------------------------------------------------------------
$woobizzheader_medium_box2position= get_theme_mod("woobizzheader_medium_box2position");
$woobizzheader_medium_box2width= get_theme_mod("woobizzheader_medium_box2width");
$woobizzheader_medium_box2help=$woobizzheader_medium_box2position." | ".
$woobizzheader_medium_box2width."%"." | MS | BOX2";
$woobizzheader_medium_box2align= get_theme_mod("woobizzheader_medium_box2align");
if($woobizzheader_medium_box2align=="option-1"){$woobizzheader_medium_box2alignitems="center";$woobizzheader_medium_box2justifycontent="flex-start";}
 elseif($woobizzheader_medium_box2align=="option-2"){$woobizzheader_medium_box2alignitems="center";$woobizzheader_medium_box2justifycontent="center";}
 elseif($woobizzheader_medium_box2align=="option-3"){$woobizzheader_medium_box2alignitems="center";$woobizzheader_medium_box2justifycontent="flex-end";}
$woobizzheader_medium_box2display= get_theme_mod("woobizzheader_medium_box2display");
if($woobizzheader_medium_box2display==0){$woobizzheader_medium_box2display="none";}
elseif($woobizzheader_medium_box2display==1){$woobizzheader_medium_box2display="flex";}
$woobizzheader_medium_box2title= get_theme_mod("woobizzheader_medium_box2title");
$woobizzheader_medium_box2titlesize= get_theme_mod("woobizzheader_medium_box2titlesize");
$woobizzheader_medium_box2titlecolor= get_theme_mod("woobizzheader_medium_box2titlecolor");
$woobizzheader_medium_box2description= get_theme_mod("woobizzheader_medium_box2description");
$woobizzheader_medium_box2descriptionsize= get_theme_mod("woobizzheader_medium_box2descriptionsize");
$woobizzheader_medium_box2descriptioncolor= get_theme_mod("woobizzheader_medium_box2descriptioncolor");
$woobizzheader_medium_box2imagealign= get_theme_mod("woobizzheader_medium_box2imagealign");
if ($woobizzheader_medium_box2imagealign=="option-1"){$woobizzheader_medium_box2imagealign="row";}
 elseif($woobizzheader_medium_box2imagealign=="option-2"){$woobizzheader_medium_box2imagealign="column";}
 elseif($woobizzheader_medium_box2imagealign=="option-3"){$woobizzheader_medium_box2imagealign="row-reverse";}
 elseif($woobizzheader_medium_box2imagealign=="option-4"){$woobizzheader_medium_box2imagealign="column-reverse";}
$woobizzheader_medium_box2txtalign= get_theme_mod("woobizzheader_medium_box2txtalign");
if ($woobizzheader_medium_box2txtalign=="option-1"){$woobizzheader_medium_box2txtalign="left";}
 elseif($woobizzheader_medium_box2txtalign=="option-2"){$woobizzheader_medium_box2txtalign="center";}
 elseif($woobizzheader_medium_box2txtalign=="option-3"){$woobizzheader_medium_box2txtalign="right";}
 else{$woobizzheader_medium_box2txtalign="left";}
$woobizzheader_medium_box2grayscale= get_theme_mod("woobizzheader_medium_box2grayscale");
$woobizzheader_medium_box2sepia= get_theme_mod("woobizzheader_medium_box2sepia");
$woobizzheader_medium_box2blur= get_theme_mod("woobizzheader_medium_box2blur");
$woobizzheader_medium_box2brightness= get_theme_mod("woobizzheader_medium_box2brightness");
$woobizzheader_medium_box2huerotate= get_theme_mod("woobizzheader_medium_box2huerotate");
$woobizzheader_medium_box2saturate= get_theme_mod("woobizzheader_medium_box2saturate");
$woobizzheader_medium_box2opacity= get_theme_mod("woobizzheader_medium_box2opacity");
$woobizzheader_medium_box2contrast= get_theme_mod("woobizzheader_medium_box2contrast");
$woobizzheader_medium_box2invert= get_theme_mod("woobizzheader_medium_box2invert");  
//--------------------------------------------------------------------------------------
// WIDGET1
//--------------------------------------------------------------------------------------
$woobizzheader_medium_widget1position= get_theme_mod("woobizzheader_medium_widget1position");
$woobizzheader_medium_widget1width= get_theme_mod("woobizzheader_medium_widget1width");
$woobizzheader_medium_widget1align= get_theme_mod("woobizzheader_medium_widget1align");
$woobizzheader_medium_widget1display= get_theme_mod("woobizzheader_medium_widget1display");
$woobizzheader_medium_widget1help=$woobizzheader_medium_widget1position." | ".
$woobizzheader_medium_widget1width."%"." | MS | WIDGET1";
if ($woobizzheader_medium_widget1align=="option-1"){$woobizzheader_medium_widget1alignitems="center";$woobizzheader_medium_widget1justifycontent="flex-start";}
 elseif($woobizzheader_medium_widget1align=="option-2"){$woobizzheader_medium_widget1alignitems="center";$woobizzheader_medium_widget1justifycontent="center";}
 elseif($woobizzheader_medium_widget1align=="option-3"){$woobizzheader_medium_widget1alignitems="center";$woobizzheader_medium_widget1justifycontent="flex-end";}
if($woobizzheader_medium_widget1display==0){$woobizzheader_medium_widget1display="none";}
elseif($woobizzheader_medium_widget1display==1){$woobizzheader_medium_widget1display="flex";}
//--------------------------------------------------------------------------------------
// WIDGET2
//--------------------------------------------------------------------------------------
$woobizzheader_medium_widget2position= get_theme_mod("woobizzheader_medium_widget2position");
$woobizzheader_medium_widget2width= get_theme_mod("woobizzheader_medium_widget2width");
$woobizzheader_medium_widget2align= get_theme_mod("woobizzheader_medium_widget2align");
$woobizzheader_medium_widget2display= get_theme_mod("woobizzheader_medium_widget2display");
$woobizzheader_medium_widget2help=$woobizzheader_medium_widget2position." | ".
$woobizzheader_medium_widget2width."%"." | MS | WIDGET1";
if ($woobizzheader_medium_widget2align=="option-1"){$woobizzheader_medium_widget2alignitems="center";$woobizzheader_medium_widget2justifycontent="flex-start";}
 elseif($woobizzheader_medium_widget2align=="option-2"){$woobizzheader_medium_widget2alignitems="center";$woobizzheader_medium_widget2justifycontent="center";}
 elseif($woobizzheader_medium_widget2align=="option-3"){$woobizzheader_medium_widget2alignitems="center";$woobizzheader_medium_widget2justifycontent="flex-end";}
if($woobizzheader_medium_widget2display==0){$woobizzheader_medium_widget2display="none";}
elseif($woobizzheader_medium_widget2display==1){$woobizzheader_medium_widget2display="flex";}
//--------------------------------------------------------------------------------------
//CSS
//--------------------------------------------------------------------------------------
echo"
 <style>
@media screen and (min-width:".$woobizzheader_general_msminwidth."px) and (max-width:".$woobizzheader_general_msmaxwidth."px){

	.woobizzheader-small-wrapper{display:none!important;}
	.woobizzheader-large-wrapper{display:none!important;}

	.woobizzheader-small-bghelp.woobizzheader-general-txthelp{display: none!important;}
	.woobizzheader-large-bghelp.woobizzheader-general-txthelp{display: none!important;}
	

	.woobizzheader-medium-bghelp:after {
		content: '0 | 100% | MS | BG ';		
	}
	.woobizzheader-medium-box{
		min-height: ".$woobizzheader_medium_bgheight."px;		
	}	
	.woobizzheader-medium-wrapper{
		width:".$woobizzheader_medium_bgwidth."%;
		padding:".$woobizzheader_medium_bgpadding."px;
		
		display:flex;
		flex-wrap:wrap;
		margin:0 auto!important;

	}
	.site-header{
		margin:".$woobizzheader_medium_bgmargin."px;
		padding:".$woobizzheader_medium_paddingfull."!important;
		box-shadow:".$woobizzheader_medium_shadowfull."!important;
		border-top:".$woobizzheader_medium_bordertopfull."!important;
		border-right:".$woobizzheader_medium_borderrightfull."!important;
		border-bottom:".$woobizzheader_medium_borderbottomfull."!important;
		border-left:".$woobizzheader_medium_borderleftfull."!important;
	}
	.site-header:before {
		content:'';
		position: absolute;
		left: 0;
		right: 0;
		z-index: -1;
		display: block;
		background-image: linear-gradient(".$woobizzheader_medium_bgfullgradient1.",
										  ".$woobizzheader_medium_bgfullgradient2."),
									   url('$woobizzheader_medium_bgimage');
		background-color:".$woobizzheader_medium_bgcolor."!important;
		background-size:".$woobizzheader_medium_bgimagesize."!important;
		background-position:".$woobizzheader_medium_bgposition."!important;
		background-attachment:".$woobizzheader_medium_bgattachment."!important;	
		width:100%;
		height:100%;
		filter: grayscale(".$woobizzheader_medium_bggrayscale."%) sepia(".$woobizzheader_medium_bgsepia."%) blur(".$woobizzheader_medium_bgblur."px) brightness(".$woobizzheader_medium_bgbrightness."%) hue-rotate(".$woobizzheader_medium_bghuerotate."deg) saturate(".$woobizzheader_medium_bgsaturate."%) opacity(".$woobizzheader_medium_bgopacity."%) contrast(".$woobizzheader_medium_bgcontrast."%) invert(".$woobizzheader_medium_bginvert."%);
		-webkit-filter: grayscale(".$woobizzheader_medium_bggrayscale."%) sepia(".$woobizzheader_medium_bgsepia."%) blur(".$woobizzheader_medium_bgblur."px) brightness(".$woobizzheader_medium_bgbrightness."%) hue-rotate(".$woobizzheader_medium_bghuerotate."deg) saturate(".$woobizzheader_medium_bgsaturate."%) opacity(".$woobizzheader_medium_bgopacity."%) contrast(".$woobizzheader_medium_bgcontrast."%) invert(".$woobizzheader_medium_bginvert."%);
		-moz-filter: grayscale(".$woobizzheader_medium_bggrayscale."%) sepia(".$woobizzheader_medium_bgsepia."%) blur(".$woobizzheader_medium_bgblur."px) brightness(".$woobizzheader_medium_bgbrightness."%) hue-rotate(".$woobizzheader_medium_bghuerotate."deg) saturate(".$woobizzheader_medium_bgsaturate."%) opacity(".$woobizzheader_medium_bgopacity."%) contrast(".$woobizzheader_medium_bgcontrast."%) invert(".$woobizzheader_medium_bginvert."%);
	
	}
	.site-header .col-full {
		width:100%;
		margin:0 auto!important;
		max-width: 100%;
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ BRAND CSS */
	/*---------------------------------------------------------------*/
	
	.woobizzheader-medium-brandbox {
		display:".$woobizzheader_medium_branddisplay."!important;
		order:".$woobizzheader_medium_brandposition.";
		width:".$woobizzheader_medium_brandwidth."%;
		align-items:".$woobizzheader_medium_brandalignitems."!important;
		justify-content:".$woobizzheader_medium_brandjustifycontent."!important;
		text-align: ".$woobizzheader_medium_brandtxtalign."!important;
		flex-direction:".$woobizzheader_medium_brandimagealign."!important;

	}	
	.woobizzheader-medium-brandhelp:after {
		content:'$woobizzheader_medium_brandhelp';	
		
	}
	h3#woobizzheader-medium-brandtitle {
		color: ".$woobizzheader_medium_brandtitlecolor.";
		font-size:".$woobizzheader_medium_brandtitlesize."px;
		font-weight: 400;
		font-family: inherit;		
	}
	p#woobizzheader-medium-branddescription {
		color: ".$woobizzheader_medium_branddescriptioncolor.";
		font-size:".$woobizzheader_medium_branddescriptionsize."px;
	}
	.woobizzheader-medium-branditems p {
		margin: 0;
		text-align: ".$woobizzheader_medium_brandtxtalign."!important;
	}
	.woobizzheader-medium-branditems {
		display: flex;
		align-items: center;
		height: auto;
		flex-direction:".$woobizzheader_medium_brandimagealign."!important;
	}
	.woobizzheader-medium-branditem1 img {
		filter: grayscale(".$woobizzheader_medium_brandgrayscale."%) sepia(".$woobizzheader_medium_brandsepia."%) blur(".$woobizzheader_medium_brandblur."px) brightness(".$woobizzheader_medium_brandbrightness."%) hue-rotate(".$woobizzheader_medium_brandhuerotate."deg) saturate(".$woobizzheader_medium_brandsaturate."%) opacity(".$woobizzheader_medium_brandopacity."%) contrast(".$woobizzheader_medium_brandcontrast."%) invert(".$woobizzheader_medium_brandinvert."%);
		-webkit-filter: grayscale(".$woobizzheader_medium_brandgrayscale."%) sepia(".$woobizzheader_medium_brandsepia."%) blur(".$woobizzheader_medium_brandblur."px) brightness(".$woobizzheader_medium_brandbrightness."%) hue-rotate(".$woobizzheader_medium_brandhuerotate."deg) saturate(".$woobizzheader_medium_brandsaturate."%) opacity(".$woobizzheader_medium_brandopacity."%) contrast(".$woobizzheader_medium_brandcontrast."%) invert(".$woobizzheader_medium_brandinvert."%);
		-moz-filter: grayscale(".$woobizzheader_medium_brandgrayscale."%) sepia(".$woobizzheader_medium_brandsepia."%) blur(".$woobizzheader_medium_brandblur."px) brightness(".$woobizzheader_medium_brandbrightness."%) hue-rotate(".$woobizzheader_medium_brandhuerotate."deg) saturate(".$woobizzheader_medium_brandsaturate."%) opacity(".$woobizzheader_medium_brandopacity."%) contrast(".$woobizzheader_medium_brandcontrast."%) invert(".$woobizzheader_medium_brandinvert."%);
	}	
	.woobizzheader-medium-branditem2 {
		text-align: ".$woobizzheader_medium_brandtxtalign."!important;
		margin-top: ".$woobizzheader_medium_brandtxtmargintop."px;
		margin-bottom: ".$woobizzheader_medium_brandtxtmarginbottom."px;
		margin-right: ".$woobizzheader_medium_brandtxtmarginright."px;
		margin-left: ".$woobizzheader_medium_brandtxtmarginleft."px;
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ MENU 1 CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-medium-menu1{
		display:".$woobizzheader_medium_menu1display."!important;
		order:".$woobizzheader_medium_menu1position."!important;
		width:".$woobizzheader_medium_menu1width."%!important;
		align-items:".$woobizzheader_medium_menu1alignitems."!important;
		justify-content:".$woobizzheader_medium_menu1justifycontent."!important;

	}
	.woobizzheader-medium-menu1help:after {
		content:'$woobizzheader_medium_menu1help';	
		
	}	
	/*---------------------------------------------------------------*/
	/* WOOBIZZ MENU 2 CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-medium-menu2{
		display:".$woobizzheader_medium_menu2display."!important;
		order:".$woobizzheader_medium_menu2position."!important;
		width:".$woobizzheader_medium_menu2width."%!important;
		align-items:".$woobizzheader_medium_menu2alignitems."!important;
		justify-content:".$woobizzheader_medium_menu2justifycontent."!important;
	}
	.woobizzheader-medium-menu2help:after {
		content:'$woobizzheader_medium_menu2help';			
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ MENU 3 CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-medium-menu3{
		display:".$woobizzheader_medium_menu3display."!important;
		order:".$woobizzheader_medium_menu3position."!important;
		width:".$woobizzheader_medium_menu3width."%!important;
		align-items:".$woobizzheader_medium_menu3alignitems."!important;
		justify-content:".$woobizzheader_medium_menu3justifycontent."!important;
	}
	.woobizzheader-medium-menu3help:after {
		content:'$woobizzheader_medium_menu3help';		
	}	
	/*---------------------------------------------------------------*/
	/* WOOBIZZ CART CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-medium-cartitems{
		display: ".$woobizzheader_medium_cartdisplay."!important;
	}
	.woobizzheader-medium-cartitem1{
		display: ".$woobizzheader_medium_cartimagedisplay."!important;
	}
	.woobizzheader-medium-cartitem1 img{
		filter: grayscale(".$woobizzheader_medium_cartgrayscale."%) sepia(".$woobizzheader_medium_cartsepia."%) blur(".$woobizzheader_medium_cartblur."px) brightness(".$woobizzheader_medium_cartbrightness."%) hue-rotate(".$woobizzheader_medium_carthuerotate."deg) saturate(".$woobizzheader_medium_cartsaturate."%) opacity(".$woobizzheader_medium_cartopacity."%) contrast(".$woobizzheader_medium_cartcontrast."%) invert(".$woobizzheader_medium_cartinvert."%);
		-webkit-filter: grayscale(".$woobizzheader_medium_cartgrayscale."%) sepia(".$woobizzheader_medium_cartsepia."%) blur(".$woobizzheader_medium_cartblur."px) brightness(".$woobizzheader_medium_cartbrightness."%) hue-rotate(".$woobizzheader_medium_carthuerotate."deg) saturate(".$woobizzheader_medium_cartsaturate."%) opacity(".$woobizzheader_medium_cartopacity."%) contrast(".$woobizzheader_medium_cartcontrast."%) invert(".$woobizzheader_medium_cartinvert."%);
		-moz-filter: grayscale(".$woobizzheader_medium_cartgrayscale."%) sepia(".$woobizzheader_medium_cartsepia."%) blur(".$woobizzheader_medium_cartblur."px) brightness(".$woobizzheader_medium_cartbrightness."%) hue-rotate(".$woobizzheader_medium_carthuerotate."deg) saturate(".$woobizzheader_medium_cartsaturate."%) opacity(".$woobizzheader_medium_cartopacity."%) contrast(".$woobizzheader_medium_cartcontrast."%) invert(".$woobizzheader_medium_cartinvert."%);
	}
	.woobizzheader-medium-cart {
		display:".$woobizzheader_medium_cartdisplay."!important;
		order:".$woobizzheader_medium_cartposition."!important;
		width:".$woobizzheader_medium_cartwidth."%!important;
		align-items:".$woobizzheader_medium_cartalignitems."!important;
		justify-content:".$woobizzheader_medium_cartjustifycontent."!important;		
	}
	.woobizzheader-medium-carthelp:after {
		content:'$woobizzheader_medium_carthelp';		
	}
	
	h3#woobizzheader-medium-carttitle {
		color: ".$woobizzheader_medium_carttitlecolor."!important;
		font-size:".$woobizzheader_medium_carttitlesize."px!important;
		text-align: ".$woobizzheader_medium_carttxtalign."!important;
		font-weight: 400;
		font-family: inherit;		
	}
	a.woobizzheader-medium-cartlink {
		color: ".$woobizzheader_medium_cartdescriptioncolor."!important;
		font-size:".$woobizzheader_medium_cartdescriptionsize."px!important;
		text-align: ".$woobizzheader_medium_carttxtalign."!important;
		display: ".$woobizzheader_medium_carttxtdisplay."!important;

	}
	.woobizzheader-medium-cartitems p {
		margin: 0;
		text-align: ".$woobizzheader_medium_carttxtalign."!important;
	}
	.woobizzheader-medium-cartitems {
		display: flex;
		align-items: center;
		height: auto;
		flex-direction:".$woobizzheader_medium_cartimagealign."!important;
	}

	.woobizzheader-medium-cartitem2 {
		text-align: ".$woobizzheader_medium_carttxtalign."!important;
		margin: 10px 10px;
	}
	.site-header-cart .cart-contents .amount {
		color: ".$woobizzheader_medium_carttitlecolor."!important;
		font-size:".$woobizzheader_medium_carttitlesize."px!important;
		text-align: ".$woobizzheader_medium_carttxtalign."!important;
		display: ".$woobizzheader_medium_cartpricedisplay."!important;
		margin-right:0;
	}
	.woobizzheader-medium-cartcount {
		display: ".$woobizzheader_medium_cartimagedisplay."!important;
		background: red;
		width: 30px;
		height: 30px;
		text-align: center;
		font-size: medium;
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
	.woobizzheader-medium-cartitem2{
		display: flex;
		flex-direction: column;
		text-align: center;
		margin: 10px 10px;
		
	}	
	.woobizzheader-medium-cartitem2 p {
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
	.woobizzheader-medium-cartitems p {
		margin: 0;
	}
	.woobizzheader-medium-cartitems {
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
	/* SEARCH CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-medium-search {
		display:".$woobizzheader_medium_searchdisplay."!important;
		order:".$woobizzheader_medium_searchposition."!important;
		width:".$woobizzheader_medium_searchwidth."%!important;
		align-items:".$woobizzheader_medium_searchalignitems."!important;
		justify-content:".$woobizzheader_medium_searchjustifycontent."!important;
		text-align: center;
	}
	.woobizzheader-medium-searchhelp:after {
		content:'$woobizzheader_medium_searchhelp';
	}
	.woobizzheader-medium-searchitems {
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
	/* WOOBIZZ BOX2 CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-medium-box1items{
		display: ".$woobizzheader_medium_box1display."!important;
	}
	.woobizzheader-medium-box1 {
		display:".$woobizzheader_medium_box1display."!important;
		order:".$woobizzheader_medium_box1position."!important;
		width:".$woobizzheader_medium_box1width."%!important;
		align-items:".$woobizzheader_medium_box1alignitems."!important;
		justify-content:".$woobizzheader_medium_box1justifycontent."!important;
		
	}
	.woobizzheader-medium-box1help:after {
		content:'$woobizzheader_medium_box1help';		
	}
	h3#woobizzheader-medium-box1title {
		color: ".$woobizzheader_medium_box1titlecolor."!important;
		font-size:".$woobizzheader_medium_box1titlesize."px!important;
		font-weight: 400;
		font-family: inherit;		
	}
	p#woobizzheader-medium-box1description- {
		color: ".$woobizzheader_medium_box1descriptioncolor."!important;
		font-size:".$woobizzheader_medium_box1descriptionsize."px!important;
	}
	.woobizzheader-medium-box1items p {
		margin: 0;
		text-align: ".$woobizzheader_medium_box1txtalign."!important;
	}
	.woobizzheader-medium-box1items {
		display: flex;
		align-items: center;
		height: auto;
		flex-direction:".$woobizzheader_medium_box1imagealign."!important;
	}
	.woobizzheader-medium-box1item1 img{
		filter: grayscale(".$woobizzheader_medium_box1grayscale."%) sepia(".$woobizzheader_medium_box1sepia."%) blur(".$woobizzheader_medium_box1blur."px) brightness(".$woobizzheader_medium_box1brightness."%) hue-rotate(".$woobizzheader_medium_box1huerotate."deg) saturate(".$woobizzheader_medium_box1saturate."%) opacity(".$woobizzheader_medium_box1opacity."%) contrast(".$woobizzheader_medium_box1contrast."%) invert(".$woobizzheader_medium_box1invert."%);
		-webkit-filter: grayscale(".$woobizzheader_medium_box1grayscale."%) sepia(".$woobizzheader_medium_box1sepia."%) blur(".$woobizzheader_medium_box1blur."px) brightness(".$woobizzheader_medium_box1brightness."%) hue-rotate(".$woobizzheader_medium_box1huerotate."deg) saturate(".$woobizzheader_medium_box1saturate."%) opacity(".$woobizzheader_medium_box1opacity."%) contrast(".$woobizzheader_medium_box1contrast."%) invert(".$woobizzheader_medium_box1invert."%);
		-moz-filter: grayscale(".$woobizzheader_medium_box1grayscale."%) sepia(".$woobizzheader_medium_box1sepia."%) blur(".$woobizzheader_medium_box1blur."px) brightness(".$woobizzheader_medium_box1brightness."%) hue-rotate(".$woobizzheader_medium_box1huerotate."deg) saturate(".$woobizzheader_medium_box1saturate."%) opacity(".$woobizzheader_medium_box1opacity."%) contrast(".$woobizzheader_medium_box1contrast."%) invert(".$woobizzheader_medium_box1invert."%);
	}	
	.woobizzheader-medium-box1item1 {
		text-align: ".$woobizzheader_medium_box1txtalign."!important;
		margin: 10px 10px;
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ BOX2 CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-medium-box2items{
		display: ".$woobizzheader_medium_box2display."!important;
	}
	.woobizzheader-medium-box2 {
		display:".$woobizzheader_medium_box2display."!important;
		order:".$woobizzheader_medium_box2position."!important;
		width:".$woobizzheader_medium_box2width."%!important;
		align-items:".$woobizzheader_medium_box2alignitems."!important;
		justify-content:".$woobizzheader_medium_box2justifycontent."!important;
		
	}
	.woobizzheader-medium-box2help:after{
		content:'$woobizzheader_medium_box2help';		
	}
	h3#woobizzheader-medium-box2title {
		color: ".$woobizzheader_medium_box2titlecolor."!important;
		font-size:".$woobizzheader_medium_box2titlesize."px!important;
		font-weight: 400;
		font-family: inherit;		
	}
	p#woobizzheader-medium-box2description- {
		color: ".$woobizzheader_medium_box2descriptioncolor."!important;
		font-size:".$woobizzheader_medium_box2descriptionsize."px!important;
	}
	.woobizzheader-medium-box2items p {
		margin: 0;
		text-align: ".$woobizzheader_medium_box2txtalign."!important;
	}
	.woobizzheader-medium-box2items {
		display: flex;
		align-items: center;
		height: auto;
		flex-direction:".$woobizzheader_medium_box2imagealign."!important;
	}
	.woobizzheader-medium-box2item1 img{
		filter: grayscale(".$woobizzheader_medium_box2grayscale."%) sepia(".$woobizzheader_medium_box2sepia."%) blur(".$woobizzheader_medium_box2blur."px) brightness(".$woobizzheader_medium_box2brightness."%) hue-rotate(".$woobizzheader_medium_box2huerotate."deg) saturate(".$woobizzheader_medium_box2saturate."%) opacity(".$woobizzheader_medium_box2opacity."%) contrast(".$woobizzheader_medium_box2contrast."%) invert(".$woobizzheader_medium_box2invert."%);
		-webkit-filter: grayscale(".$woobizzheader_medium_box2grayscale."%) sepia(".$woobizzheader_medium_box2sepia."%) blur(".$woobizzheader_medium_box2blur."px) brightness(".$woobizzheader_medium_box2brightness."%) hue-rotate(".$woobizzheader_medium_box2huerotate."deg) saturate(".$woobizzheader_medium_box2saturate."%) opacity(".$woobizzheader_medium_box2opacity."%) contrast(".$woobizzheader_medium_box2contrast."%) invert(".$woobizzheader_medium_box2invert."%);
		-moz-filter: grayscale(".$woobizzheader_medium_box2grayscale."%) sepia(".$woobizzheader_medium_box2sepia."%) blur(".$woobizzheader_medium_box2blur."px) brightness(".$woobizzheader_medium_box2brightness."%) hue-rotate(".$woobizzheader_medium_box2huerotate."deg) saturate(".$woobizzheader_medium_box2saturate."%) opacity(".$woobizzheader_medium_box2opacity."%) contrast(".$woobizzheader_medium_box2contrast."%) invert(".$woobizzheader_medium_box2invert."%);
	}	
	.woobizzheader-medium-box2item2 {
		text-align: ".$woobizzheader_medium_box2txtalign."!important;
		margin: 10px 10px;
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ WIDGET 1 CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-medium-widget1{
		display:".$woobizzheader_medium_widget1display."!important;
		order:".$woobizzheader_medium_widget1position."!important;
		width:".$woobizzheader_medium_widget1width."%!important;
		align-items:".$woobizzheader_medium_widget1alignitems."!important;
		justify-content:".$woobizzheader_medium_widget1justifycontent."!important;

	}
	.woobizzheader-medium-widget1help:after {
		content:'$woobizzheader_medium_widget1help';
	}
	
	/*---------------------------------------------------------------*/
	/* WOOBIZZ WIDGET 2 CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-medium-widget2{
		display:".$woobizzheader_medium_widget2display."!important;
		order:".$woobizzheader_medium_widget2position."!important;
		width:".$woobizzheader_medium_widget2width."%!important;
		align-items:".$woobizzheader_medium_widget2alignitems."!important;
		justify-content:".$woobizzheader_medium_widget2justifycontent."!important;

	}
	.woobizzheader-medium-widget2help:after {
		content:'$woobizzheader_medium_widget2help';
	}
	
}	
 </style>
";
}
add_action("wp_head","woobizzheader_medium_css",100);
//--------------------------------------------------------------------------------------
//HTLM
//--------------------------------------------------------------------------------------
function woobizzheader_medium_htmlphpcontent() {
$woobizzheader_medium_brandlogo= get_theme_mod('woobizzheader_medium_brandlogo');
$woobizzheader_medium_brandtitle= get_theme_mod("woobizzheader_medium_brandtitle");
$woobizzheader_medium_brandtitlesize= get_theme_mod("woobizzheader_medium_brandtitlesize");
$woobizzheader_medium_brandtitlecolor= get_theme_mod("woobizzheader_medium_brandtitlecolor");
$woobizzheader_medium_branddescription= get_theme_mod("woobizzheader_medium_branddescription");
$woobizzheader_medium_branddescriptionsize= get_theme_mod("woobizzheader_medium_branddescriptionsize");
$woobizzheader_medium_branddescriptioncolor= get_theme_mod("woobizzheader_medium_branddescriptioncolor");

$woobizzheader_medium_cartlogo= get_theme_mod('woobizzheader_medium_cartlogo');
$woobizzheader_medium_carttitlesize= get_theme_mod("woobizzheader_medium_carttitlesize");
$woobizzheader_medium_carttitlecolor= get_theme_mod("woobizzheader_medium_carttitlecolor");
$woobizzheader_medium_cartdescription= get_theme_mod("woobizzheader_medium_cartdescription");
$woobizzheader_medium_cartdescriptionsize= get_theme_mod("woobizzheader_medium_cartdescriptionsize");
$woobizzheader_medium_cartdescriptioncolor= get_theme_mod("woobizzheader_medium_cartdescriptioncolor");

$woobizzheader_medium_box1logo= get_theme_mod('woobizzheader_medium_box1logo');
$woobizzheader_medium_box1title= get_theme_mod("woobizzheader_medium_box1title");
$woobizzheader_medium_box1titlesize= get_theme_mod("woobizzheader_medium_box1titlesize");
$woobizzheader_medium_box1titlecolor= get_theme_mod("woobizzheader_medium_box1titlecolor");
$woobizzheader_medium_box1description= get_theme_mod("woobizzheader_medium_box1description");
$woobizzheader_medium_box1descriptionsize= get_theme_mod("woobizzheader_medium_box1descriptionsize");
$woobizzheader_medium_box1descriptioncolor= get_theme_mod("woobizzheader_medium_box1descriptioncolor");

$woobizzheader_medium_box2logo= get_theme_mod('woobizzheader_medium_box2logo');
$woobizzheader_medium_box2title= get_theme_mod("woobizzheader_medium_box2title");
$woobizzheader_medium_box2titlesize= get_theme_mod("woobizzheader_medium_box2titlesize");
$woobizzheader_medium_box2titlecolor= get_theme_mod("woobizzheader_medium_box2titlecolor");
$woobizzheader_medium_box2description= get_theme_mod("woobizzheader_medium_box2description");
$woobizzheader_medium_box2descriptionsize= get_theme_mod("woobizzheader_medium_box2descriptionsize");
$woobizzheader_medium_box2descriptioncolor= get_theme_mod("woobizzheader_medium_box2descriptioncolor");
?>
<div class= "woobizzheader-medium-bghelp woobizzheader-general-txthelp"></div>
<div class="woobizzheader-medium-wrapper " >	
	
	<div class="woobizzheader-medium-box woobizzheader-medium-brandbox woobizzheader-general-box ">
	
	 	<div class= "woobizzheader-medium-brandhelp woobizzheader-general-txthelp"></div>
		<div class="woobizzheader-medium-branditems ">					
				<div class="woobizzheader-medium-branditem1">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="woobizzheader-medium-logo" rel="home">
					<img src="<?php  echo $woobizzheader_medium_brandlogo; ?>" />						
				</div>							
				<div class="woobizzheader-medium-branditem2">
					<h3 id="woobizzheader-medium-brandtitle"><?php  echo $woobizzheader_medium_brandtitle; ?></h3>
					<p id="woobizzheader-medium-branddescription"><?php  echo $woobizzheader_medium_branddescription; ?></p>	
				</a>						
				</div>											
		</div>	
	</div>
	<div class="woobizzheader-medium-box woobizzheader-medium-menu1 woobizzheader-general-box">

		<div class= "woobizzheader-medium-menu1help woobizzheader-general-txthelp"></div>
		<?php
			wp_nav_menu( array( 'theme_location' => 'woobizz-menu-1' ) );				
		?>	
	</div>
	<div class="woobizzheader-medium-box woobizzheader-medium-menu2 woobizzheader-general-box">
		<div class= "woobizzheader-medium-menu2help woobizzheader-general-txthelp"></div>
		<?php
			wp_nav_menu( array( 'theme_location' => 'woobizz-menu-2' ) );				
		?>	
	</div>
	<div class="woobizzheader-medium-box woobizzheader-medium-menu3 woobizzheader-general-box">
		<div class= "woobizzheader-medium-menu3help woobizzheader-general-txthelp"></div>
		<?php
			wp_nav_menu( array( 'theme_location' => 'woobizz-menu-3' ) );				
		?>	
	</div>
	<div class="woobizzheader-medium-box woobizzheader-medium-cart woobizzheader-general-box">
			<div class= "woobizzheader-medium-carthelp woobizzheader-general-txthelp"></div>		
			<div class="woobizzheader-medium-cartitems">	
				<a href="http://127.0.0.1/dev-plugins/carrito/">
				<div class="woobizzheader-medium-cartitem1">
					<img src="<?php  echo $woobizzheader_medium_cartlogo; ?>" />	
				</div>

				<div class="woobizzheader-medium-cartcount">
					<?php
					if ( class_exists( 'woocommerce' ) ) {
						echo WC()->cart->get_cart_contents_count();
					}
					?>
				</div>
				
				<div class="woobizzheader-medium-cartitem2">
					<?php
					if ( class_exists( 'woocommerce' ) ) {
						storefront_header_cart();
					}					  
					 ?>
						<a class="woobizzheader-medium-cartlink" href="http://127.0.0.1/dev-plugins/carrito/">
						<?php  echo $woobizzheader_medium_cartdescription; ?>
						</a>
				</div>
				</a>
			</div>	
	</div>
	<div class="woobizzheader-medium-box woobizzheader-medium-search woobizzheader-general-box">
			<div class= "woobizzheader-medium-searchhelp woobizzheader-general-txthelp"></div>
			<div class="woobizzheader-medium-searchitems">
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
	<div class="woobizzheader-medium-box woobizzheader-medium-box1 woobizzheader-general-box">
		<div class= "woobizzheader-medium-box1help woobizzheader-general-txthelp"></div>
		<div class="woobizzheader-medium-box1items ">					
				<div class="woobizzheader-medium-box1item1">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="woobizzheader-medium-box1logo" rel="home">
					<img src="<?php  echo $woobizzheader_medium_box1logo; ?>" />						
				</div>							
				<div class="woobizzheader-medium-box1item2">
					<h3 id="woobizzheader-medium-box1title"><?php  echo $woobizzheader_medium_box1title; ?></h3>
					<p id="woobizzheader-medium-box1description-"><?php  echo $woobizzheader_medium_box1description; ?></p>	
				</a>						
				</div>											
		</div>	
	</div>
	<div class="woobizzheader-medium-box woobizzheader-medium-box2 woobizzheader-general-box">
		<div class= "woobizzheader-medium-box2help woobizzheader-general-txthelp"></div>
		<div class="woobizzheader-medium-box2items ">					
				<div class="woobizzheader-medium-box2item1">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="woobizzheader-medium-box2logo" rel="home">
					<img src="<?php  echo $woobizzheader_medium_box2logo; ?>" />						
				</div>							
				<div class="woobizzheader-medium-box2item2">
					<h3 id="woobizzheader-medium-box2title"><?php  echo $woobizzheader_medium_box2title; ?></h3>
					<p id="woobizzheader-medium-box2description-"><?php  echo $woobizzheader_medium_box2description; ?></p>	
				</a>						
				</div>											
		</div>	
	</div>
	<div class="woobizzheader-medium-box woobizzheader-medium-widget1 woobizzheader-general-box">
		<div class= "woobizzheader-medium-widget1help woobizzheader-general-txthelp"></div>
		<?php
			dynamic_sidebar( 'Woobizz Header Custom Widget 1' );			
		?>	
	</div>
	<div class="woobizzheader-medium-box woobizzheader-medium-widget2 woobizzheader-general-box">
		<div class= "woobizzheader-medium-widget2help woobizzheader-general-txthelp"></div>
		<?php
			dynamic_sidebar( 'Woobizz Header Custom Widget 2' );			
		?>	
	</div>		
</div>
<?php
}
add_action('storefront_header', 'woobizzheader_medium_htmlphpcontent');