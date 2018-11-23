<?php
function woobizzheader_small_css(){
//-----------------------------------------------------------------------------------------
//SIZE
//-----------------------------------------------------------------------------------------	
$woobizzheader_general_ssmaxwidth= get_theme_mod('woobizzheader_general_ssmaxwidth');
$woobizzheader_small_bgwidth= get_theme_mod('woobizzheader_small_bgwidth');
$woobizzheader_small_bgheight= get_theme_mod('woobizzheader_small_bgheight');
$woobizzheader_small_bgpadding= get_theme_mod('woobizzheader_small_bgpadding');
$woobizzheader_small_bgmargin= get_theme_mod('woobizzheader_small_bgmargin');
$woobizzheader_small_bgmaxwidth= get_theme_mod('woobizzheader_small_bgmaxwidth');
$woobizzheader_small_margintopsize= get_theme_mod('woobizzheader_small_margintopsize');
$woobizzheader_small_marginrightsize= get_theme_mod('woobizzheader_small_marginrightsize');
$woobizzheader_small_marginbottomsize= get_theme_mod('woobizzheader_small_marginbottomsize');
$woobizzheader_small_marginleftsize= get_theme_mod('woobizzheader_small_marginleftsize');
$woobizzheader_small_marginfull= $woobizzheader_small_margintopsize." ".
$woobizzheader_small_marginrightsize." ".
$woobizzheader_small_marginbottomsize." ".
$woobizzheader_small_marginleftsize;
$woobizzheader_small_bgpaddings= get_theme_mod('woobizzheader_small_bgpaddings');
$woobizzheader_small_paddingtopsize= get_theme_mod('woobizzheader_small_paddingtopsize');
$woobizzheader_small_paddingrightsize= get_theme_mod('woobizzheader_small_paddingrightsize');
$woobizzheader_small_paddingbottomsize= get_theme_mod('woobizzheader_small_paddingbottomsize');
$woobizzheader_small_paddingleftsize= get_theme_mod('woobizzheader_small_paddingleftsize');
$woobizzheader_small_paddingfull= $woobizzheader_small_paddingtopsize." ".
$woobizzheader_small_paddingrightsize." ".
$woobizzheader_small_paddingbottomsize." ".
$woobizzheader_small_paddingleftsize;
//-----------------------------------------------------------------------------------------
//BACKGROUND
//-----------------------------------------------------------------------------------------
$woobizzheader_small_bgcolor= get_theme_mod('woobizzheader_small_bgcolor');
$woobizzheader_small_bgimage= get_theme_mod('woobizzheader_small_bgimage');
$woobizzheader_small_bgfullgradient1= get_theme_mod('woobizzheader_small_bgfullgradient1');
$woobizzheader_small_bgfullgradient2= get_theme_mod('woobizzheader_small_bgfullgradient2');
$woobizzheader_small_bgattachment= get_theme_mod('woobizzheader_small_bgattachment');
if ($woobizzheader_small_bgattachment=="option-1"){$woobizzheader_small_bgattachment="scroll";}
 elseif($woobizzheader_small_bgattachment=="option-2"){$woobizzheader_small_bgattachment="fixed";}
 else{$woobizzheader_small_bgattachment="scroll";}
$woobizzheader_small_bgimagesize= get_theme_mod('woobizzheader_small_bgimagesize');
if ($woobizzheader_small_bgimagesize=="option-1"){$woobizzheader_small_bgimagesize="cover";}
 elseif($woobizzheader_small_bgimagesize=="option-2"){$woobizzheader_small_bgimagesize="auto";}
 else{$woobizzheader_small_bgimagesize="auto";}
$woobizzheader_small_bgposition= get_theme_mod('woobizzheader_small_bgposition');
if ($woobizzheader_small_bgposition=="option-1"){$woobizzheader_small_bgposition="top left";}
 elseif($woobizzheader_small_bgposition=="option-2"){$woobizzheader_small_bgposition="top center";}
 elseif($woobizzheader_small_bgposition=="option-3"){$woobizzheader_small_bgposition="top right";}
 elseif($woobizzheader_small_bgposition=="option-4"){$woobizzheader_small_bgposition="center left";}
 elseif($woobizzheader_small_bgposition=="option-5"){$woobizzheader_small_bgposition="center center";}
 elseif($woobizzheader_small_bgposition=="option-6"){$woobizzheader_small_bgposition="center right";}
 elseif($woobizzheader_small_bgposition=="option-7"){$woobizzheader_small_bgposition="bottom left";}
 elseif($woobizzheader_small_bgposition=="option-8"){$woobizzheader_small_bgposition="bottom center";}
 elseif($woobizzheader_small_bgposition=="option-9"){$woobizzheader_small_bgposition="bottom right";}

$woobizzheader_small_bggrayscale= get_theme_mod("woobizzheader_small_bggrayscale");
$woobizzheader_small_bgsepia= get_theme_mod("woobizzheader_small_bgsepia");
$woobizzheader_small_bgblur= get_theme_mod("woobizzheader_small_bgblur");
$woobizzheader_small_bgbrightness= get_theme_mod("woobizzheader_small_bgbrightness");
$woobizzheader_small_bghuerotate= get_theme_mod("woobizzheader_small_bghuerotate");
$woobizzheader_small_bgsaturate= get_theme_mod("woobizzheader_small_bgsaturate");
$woobizzheader_small_bgopacity= get_theme_mod("woobizzheader_small_bgopacity");
$woobizzheader_small_bgcontrast= get_theme_mod("woobizzheader_small_bgcontrast");
$woobizzheader_small_bginvert= get_theme_mod("woobizzheader_small_bginvert");  
//--------------------------------------------------------------------------------------
//BRAND
//--------------------------------------------------------------------------------------
$woobizzheader_small_brandposition= get_theme_mod("woobizzheader_small_brandposition");
$woobizzheader_small_brandwidth= get_theme_mod("woobizzheader_small_brandwidth");
$woobizzheader_small_brandcontentheight= get_theme_mod("woobizzheader_small_brandcontentheight");

$woobizzheader_small_brandhelp=$woobizzheader_small_brandposition." | ".
$woobizzheader_small_brandwidth."%"." | SS | BRAND";


$woobizzheader_small_brandalign= get_theme_mod("woobizzheader_small_brandalign");
if($woobizzheader_small_brandalign=="option-1"){$woobizzheader_small_brandalignitems="center";$woobizzheader_small_brandjustifycontent="flex-start";}
 elseif($woobizzheader_small_brandalign=="option-2"){$woobizzheader_small_brandalignitems="center";$woobizzheader_small_brandjustifycontent="center";}
 elseif($woobizzheader_small_brandalign=="option-3"){$woobizzheader_small_brandalignitems="center";$woobizzheader_small_brandjustifycontent="flex-end";}
$woobizzheader_small_branddisplay= get_theme_mod("woobizzheader_small_branddisplay");
if($woobizzheader_small_branddisplay==0){$woobizzheader_small_branddisplay="none";}
elseif($woobizzheader_small_branddisplay==1){$woobizzheader_small_branddisplay="flex";}
$woobizzheader_small_brandtitle= get_theme_mod("woobizzheader_small_brandtitle");
$woobizzheader_small_brandtitlesize= get_theme_mod("woobizzheader_small_brandtitlesize");
$woobizzheader_small_brandtitlecolor= get_theme_mod("woobizzheader_small_brandtitlecolor");
$woobizzheader_small_branddescription= get_theme_mod("woobizzheader_small_branddescription");
$woobizzheader_small_branddescriptionsize= get_theme_mod("woobizzheader_small_branddescriptionsize");
$woobizzheader_small_branddescriptioncolor= get_theme_mod("woobizzheader_small_branddescriptioncolor");
$woobizzheader_small_brandimagealign= get_theme_mod("woobizzheader_small_brandimagealign");
if ($woobizzheader_small_brandimagealign=="option-1"){$woobizzheader_small_brandimagealign="row";}
 elseif($woobizzheader_small_brandimagealign=="option-2"){$woobizzheader_small_brandimagealign="column";}
 elseif($woobizzheader_small_brandimagealign=="option-3"){$woobizzheader_small_brandimagealign="row-reverse";}
 elseif($woobizzheader_small_brandimagealign=="option-4"){$woobizzheader_small_brandimagealign="column-reverse";}
$woobizzheader_small_brandtxtalign= get_theme_mod("woobizzheader_small_brandtxtalign");
if ($woobizzheader_small_brandtxtalign=="option-1"){$woobizzheader_small_brandtxtalign="left";}
 elseif($woobizzheader_small_brandtxtalign=="option-2"){$woobizzheader_small_brandtxtalign="center";}
 elseif($woobizzheader_small_brandtxtalign=="option-3"){$woobizzheader_small_brandtxtalign="right";}
 
$woobizzheader_small_brandtxtmargintop= get_theme_mod("woobizzheader_small_brandtxtmargintop");
$woobizzheader_small_brandtxtmarginbottom= get_theme_mod("woobizzheader_small_brandtxtmarginbottom");
$woobizzheader_small_brandtxtmarginright= get_theme_mod("woobizzheader_small_brandtxtmarginright");
$woobizzheader_small_brandtxtmarginleft= get_theme_mod("woobizzheader_small_brandtxtmarginleft");

$woobizzheader_small_brandgrayscale= get_theme_mod("woobizzheader_small_brandgrayscale");
$woobizzheader_small_brandsepia= get_theme_mod("woobizzheader_small_brandsepia");
$woobizzheader_small_brandblur= get_theme_mod("woobizzheader_small_brandblur");
$woobizzheader_small_brandbrightness= get_theme_mod("woobizzheader_small_brandbrightness");
$woobizzheader_small_brandhuerotate= get_theme_mod("woobizzheader_small_brandhuerotate");
$woobizzheader_small_brandsaturate= get_theme_mod("woobizzheader_small_brandsaturate");
$woobizzheader_small_brandopacity= get_theme_mod("woobizzheader_small_brandopacity");
$woobizzheader_small_brandcontrast= get_theme_mod("woobizzheader_small_brandcontrast");
$woobizzheader_small_brandinvert= get_theme_mod("woobizzheader_small_brandinvert"); 
//--------------------------------------------------------------------------------------
// MENU 1
//--------------------------------------------------------------------------------------
$woobizzheader_small_menu1position= get_theme_mod("woobizzheader_small_menu1position");
$woobizzheader_small_menu1width= get_theme_mod("woobizzheader_small_menu1width");
$woobizzheader_small_menu1align= get_theme_mod("woobizzheader_small_menu1align");
$woobizzheader_small_menu1display= get_theme_mod("woobizzheader_small_menu1display");
$woobizzheader_small_menu1help=$woobizzheader_small_menu1position." | ".
$woobizzheader_small_menu1width."%"." | SS | MENU1";
if ($woobizzheader_small_menu1align=="option-1"){$woobizzheader_small_menu1alignitems="center";$woobizzheader_small_menu1justifycontent="flex-start";}
 elseif($woobizzheader_small_menu1align=="option-2"){$woobizzheader_small_menu1alignitems="center";$woobizzheader_small_menu1justifycontent="center";}
 elseif($woobizzheader_small_menu1align=="option-3"){$woobizzheader_small_menu1alignitems="center";$woobizzheader_small_menu1justifycontent="flex-end";}
if($woobizzheader_small_menu1display==0){$woobizzheader_small_menu1display="none";}
elseif($woobizzheader_small_menu1display==1){$woobizzheader_small_menu1display="flex";}
//--------------------------------------------------------------------------------------
// MENU 2
//--------------------------------------------------------------------------------------
$woobizzheader_small_menu2position= get_theme_mod("woobizzheader_small_menu2position");
$woobizzheader_small_menu2width= get_theme_mod("woobizzheader_small_menu2width");
$woobizzheader_small_menu2align= get_theme_mod("woobizzheader_small_menu2align");
$woobizzheader_small_menu2display= get_theme_mod("woobizzheader_small_menu2display");
$woobizzheader_small_menu2help=$woobizzheader_small_menu2position." | ".
$woobizzheader_small_menu2width."%"." | SS | MENU2";
if ($woobizzheader_small_menu2align=="option-1"){$woobizzheader_small_menu2alignitems="center";$woobizzheader_small_menu2justifycontent="flex-start";}
 elseif($woobizzheader_small_menu2align=="option-2"){$woobizzheader_small_menu2alignitems="center";$woobizzheader_small_menu2justifycontent="center";}
 elseif($woobizzheader_small_menu2align=="option-3"){$woobizzheader_small_menu2alignitems="center";$woobizzheader_small_menu2justifycontent="flex-end";}
if($woobizzheader_small_menu2display==0){$woobizzheader_small_menu2display="none";}
elseif($woobizzheader_small_menu2display==1){$woobizzheader_small_menu2display="flex";}
//--------------------------------------------------------------------------------------
// MENU 3
//--------------------------------------------------------------------------------------
$woobizzheader_small_menu3position= get_theme_mod("woobizzheader_small_menu3position");
$woobizzheader_small_menu3width= get_theme_mod("woobizzheader_small_menu3width");
$woobizzheader_small_menu3align= get_theme_mod("woobizzheader_small_menu3align");
$woobizzheader_small_menu3display= get_theme_mod("woobizzheader_small_menu3display");
$woobizzheader_small_menu3help=$woobizzheader_small_menu3position." | ".
$woobizzheader_small_menu3width."%"." | SS | MENU3";
if ($woobizzheader_small_menu3align=="option-1"){$woobizzheader_small_menu3alignitems="center";$woobizzheader_small_menu3justifycontent="flex-start";}
 elseif($woobizzheader_small_menu3align=="option-2"){$woobizzheader_small_menu3alignitems="center";$woobizzheader_small_menu3justifycontent="center";}
 elseif($woobizzheader_small_menu3align=="option-3"){$woobizzheader_small_menu3alignitems="center";$woobizzheader_small_menu3justifycontent="flex-end";}
if($woobizzheader_small_menu3display==0){$woobizzheader_small_menu3display="none";}
elseif($woobizzheader_small_menu3display==1){$woobizzheader_small_menu3display="flex";}
//--------------------------------------------------------------------------------------
// CART
//--------------------------------------------------------------------------------------
$woobizzheader_small_cartposition= get_theme_mod("woobizzheader_small_cartposition");
$woobizzheader_small_cartwidth= get_theme_mod("woobizzheader_small_cartwidth");
$woobizzheader_small_carthelp=$woobizzheader_small_cartposition." | ".
$woobizzheader_small_cartwidth."%"." | SS | CART";
$woobizzheader_small_cartalign= get_theme_mod("woobizzheader_small_cartalign");
if($woobizzheader_small_cartalign=="option-1"){$woobizzheader_small_cartalignitems="center";$woobizzheader_small_cartjustifycontent="flex-start";}
 elseif($woobizzheader_small_cartalign=="option-2"){$woobizzheader_small_cartalignitems="center";$woobizzheader_small_cartjustifycontent="center";}
 elseif($woobizzheader_small_cartalign=="option-3"){$woobizzheader_small_cartalignitems="center";$woobizzheader_small_cartjustifycontent="flex-end";}
$woobizzheader_small_cartdisplay= get_theme_mod("woobizzheader_small_cartdisplay");
if($woobizzheader_small_cartdisplay==0){$woobizzheader_small_cartdisplay="none";}
elseif($woobizzheader_small_cartdisplay==1){$woobizzheader_small_cartdisplay="flex";}
$woobizzheader_small_carttitle= get_theme_mod("woobizzheader_small_carttitle");
$woobizzheader_small_carttitlesize= get_theme_mod("woobizzheader_small_carttitlesize");
$woobizzheader_small_carttitlecolor= get_theme_mod("woobizzheader_small_carttitlecolor");
$woobizzheader_small_cartdescription= get_theme_mod("woobizzheader_small_cartdescription");
$woobizzheader_small_cartdescriptionsize= get_theme_mod("woobizzheader_small_cartdescriptionsize");
$woobizzheader_small_cartdescriptioncolor= get_theme_mod("woobizzheader_small_cartdescriptioncolor");
$woobizzheader_small_cartimagealign= get_theme_mod("woobizzheader_small_cartimagealign");
if ($woobizzheader_small_cartimagealign=="option-1"){$woobizzheader_small_cartimagealign="row";}
 elseif($woobizzheader_small_cartimagealign=="option-2"){$woobizzheader_small_cartimagealign="column";}
 elseif($woobizzheader_small_cartimagealign=="option-3"){$woobizzheader_small_cartimagealign="row-reverse";}
 elseif($woobizzheader_small_cartimagealign=="option-4"){$woobizzheader_small_cartimagealign="column-reverse";}
$woobizzheader_small_carttxtalign= get_theme_mod("woobizzheader_small_carttxtalign");
if ($woobizzheader_small_carttxtalign=="option-1"){$woobizzheader_small_carttxtalign="left";}
 elseif($woobizzheader_small_carttxtalign=="option-2"){$woobizzheader_small_carttxtalign="center";}
 elseif($woobizzheader_small_carttxtalign=="option-3"){$woobizzheader_small_carttxtalign="right";}
$woobizzheader_small_cartitems= get_theme_mod("woobizzheader_small_cartitems");	
$woobizzheader_small_cartimagedisplay= get_theme_mod("woobizzheader_small_cartimagedisplay");
if($woobizzheader_small_cartimagedisplay==0){$woobizzheader_small_cartimagedisplay="flex";}
elseif($woobizzheader_small_cartimagedisplay==1){$woobizzheader_small_cartimagedisplay="none";}
$woobizzheader_small_cartpricedisplay= get_theme_mod("woobizzheader_small_cartpricedisplay");
if($woobizzheader_small_cartpricedisplay==0){$woobizzheader_small_cartpricedisplay="flex";}
elseif($woobizzheader_small_cartpricedisplay==1){$woobizzheader_small_cartpricedisplay="none";}
$woobizzheader_small_carttxtdisplay= get_theme_mod("woobizzheader_small_carttxtdisplay");
if($woobizzheader_small_carttxtdisplay==0){$woobizzheader_small_carttxtdisplay="flex";}
elseif($woobizzheader_small_carttxtdisplay==1){$woobizzheader_small_carttxtdisplay="none";}

$woobizzheader_small_cartgrayscale= get_theme_mod("woobizzheader_small_cartgrayscale");
$woobizzheader_small_cartsepia= get_theme_mod("woobizzheader_small_cartsepia");
$woobizzheader_small_cartblur= get_theme_mod("woobizzheader_small_cartblur");
$woobizzheader_small_cartbrightness= get_theme_mod("woobizzheader_small_cartbrightness");
$woobizzheader_small_carthuerotate= get_theme_mod("woobizzheader_small_carthuerotate");
$woobizzheader_small_cartsaturate= get_theme_mod("woobizzheader_small_cartsaturate");
$woobizzheader_small_cartopacity= get_theme_mod("woobizzheader_small_cartopacity");
$woobizzheader_small_cartcontrast= get_theme_mod("woobizzheader_small_cartcontrast");
$woobizzheader_small_cartinvert= get_theme_mod("woobizzheader_small_cartinvert");  
//--------------------------------------------------------------------------------------
// SEARCH
//--------------------------------------------------------------------------------------
$woobizzheader_small_searchposition= get_theme_mod("woobizzheader_small_searchposition");
$woobizzheader_small_searchwidth= get_theme_mod("woobizzheader_small_searchwidth");
$woobizzheader_small_searchalign= get_theme_mod("woobizzheader_small_searchalign");
$woobizzheader_small_searchdisplay= get_theme_mod("woobizzheader_small_searchdisplay");
$woobizzheader_small_searchhelp=$woobizzheader_small_searchposition." | ".
$woobizzheader_small_searchwidth."%"." | SS | SEARCH";
if ($woobizzheader_small_searchalign=="option-1"){$woobizzheader_small_searchalignitems="center";$woobizzheader_small_searchjustifycontent="flex-start";}
 elseif($woobizzheader_small_searchalign=="option-2"){$woobizzheader_small_searchalignitems="center";$woobizzheader_small_searchjustifycontent="center";}
 elseif($woobizzheader_small_searchalign=="option-3"){$woobizzheader_small_searchalignitems="center";$woobizzheader_small_searchjustifycontent="flex-end";}
if($woobizzheader_small_searchdisplay==0){$woobizzheader_small_searchdisplay="none";}
elseif($woobizzheader_small_searchdisplay==1){$woobizzheader_small_searchdisplay="flex";}
//--------------------------------------------------------------------------------------
//BOX1
//--------------------------------------------------------------------------------------
$woobizzheader_small_box1position= get_theme_mod("woobizzheader_small_box1position");
$woobizzheader_small_box1width= get_theme_mod("woobizzheader_small_box1width");
$woobizzheader_small_box1help=$woobizzheader_small_box1position." | ".
$woobizzheader_small_box1width."%"." | SS | BOX1";
$woobizzheader_small_box1align= get_theme_mod("woobizzheader_small_box1align");
if($woobizzheader_small_box1align=="option-1"){$woobizzheader_small_box1alignitems="center";$woobizzheader_small_box1justifycontent="flex-start";}
 elseif($woobizzheader_small_box1align=="option-2"){$woobizzheader_small_box1alignitems="center";$woobizzheader_small_box1justifycontent="center";}
 elseif($woobizzheader_small_box1align=="option-3"){$woobizzheader_small_box1alignitems="center";$woobizzheader_small_box1justifycontent="flex-end";}
$woobizzheader_small_box1display= get_theme_mod("woobizzheader_small_box1display");
if($woobizzheader_small_box1display==0){$woobizzheader_small_box1display="none";}
elseif($woobizzheader_small_box1display==1){$woobizzheader_small_box1display="flex";}
$woobizzheader_small_box1title= get_theme_mod("woobizzheader_small_box1title");
$woobizzheader_small_box1titlesize= get_theme_mod("woobizzheader_small_box1titlesize");
$woobizzheader_small_box1titlecolor= get_theme_mod("woobizzheader_small_box1titlecolor");
$woobizzheader_small_box1description= get_theme_mod("woobizzheader_small_box1description");
$woobizzheader_small_box1descriptionsize= get_theme_mod("woobizzheader_small_box1descriptionsize");
$woobizzheader_small_box1descriptioncolor= get_theme_mod("woobizzheader_small_box1descriptioncolor");
$woobizzheader_small_box1imagealign= get_theme_mod("woobizzheader_small_box1imagealign");
if ($woobizzheader_small_box1imagealign=="option-1"){$woobizzheader_small_box1imagealign="row";}
 elseif($woobizzheader_small_box1imagealign=="option-2"){$woobizzheader_small_box1imagealign="column";}
 elseif($woobizzheader_small_box1imagealign=="option-3"){$woobizzheader_small_box1imagealign="row-reverse";}
 elseif($woobizzheader_small_box1imagealign=="option-4"){$woobizzheader_small_box1imagealign="column-reverse";}
$woobizzheader_small_box1txtalign= get_theme_mod("woobizzheader_small_box1txtalign");
if ($woobizzheader_small_box1txtalign=="option-1"){$woobizzheader_small_box1txtalign="left";}
 elseif($woobizzheader_small_box1txtalign=="option-2"){$woobizzheader_small_box1txtalign="center";}
 elseif($woobizzheader_small_box1txtalign=="option-3"){$woobizzheader_small_box1txtalign="right";}
$woobizzheader_small_box1grayscale= get_theme_mod("woobizzheader_small_box1grayscale");
$woobizzheader_small_box1sepia= get_theme_mod("woobizzheader_small_box1sepia");
$woobizzheader_small_box1blur= get_theme_mod("woobizzheader_small_box1blur");
$woobizzheader_small_box1brightness= get_theme_mod("woobizzheader_small_box1brightness");
$woobizzheader_small_box1huerotate= get_theme_mod("woobizzheader_small_box1huerotate");
$woobizzheader_small_box1saturate= get_theme_mod("woobizzheader_small_box1saturate");
$woobizzheader_small_box1opacity= get_theme_mod("woobizzheader_small_box1opacity");
$woobizzheader_small_box1contrast= get_theme_mod("woobizzheader_small_box1contrast");
$woobizzheader_small_box1invert= get_theme_mod("woobizzheader_small_box1invert");  
 //--------------------------------------------------------------------------------------
//BOX2
//--------------------------------------------------------------------------------------
$woobizzheader_small_box2position= get_theme_mod("woobizzheader_small_box2position");
$woobizzheader_small_box2width= get_theme_mod("woobizzheader_small_box2width");
$woobizzheader_small_box2help=$woobizzheader_small_box2position." | ".
$woobizzheader_small_box2width."%"." | SS | BOX2";
$woobizzheader_small_box2align= get_theme_mod("woobizzheader_small_box2align");
if($woobizzheader_small_box2align=="option-1"){$woobizzheader_small_box2alignitems="center";$woobizzheader_small_box2justifycontent="flex-start";}
 elseif($woobizzheader_small_box2align=="option-2"){$woobizzheader_small_box2alignitems="center";$woobizzheader_small_box2justifycontent="center";}
 elseif($woobizzheader_small_box2align=="option-3"){$woobizzheader_small_box2alignitems="center";$woobizzheader_small_box2justifycontent="flex-end";}
$woobizzheader_small_box2display= get_theme_mod("woobizzheader_small_box2display");
if($woobizzheader_small_box2display==0){$woobizzheader_small_box2display="none";}
elseif($woobizzheader_small_box2display==1){$woobizzheader_small_box2display="flex";}
$woobizzheader_small_box2title= get_theme_mod("woobizzheader_small_box2title");
$woobizzheader_small_box2titlesize= get_theme_mod("woobizzheader_small_box2titlesize");
$woobizzheader_small_box2titlecolor= get_theme_mod("woobizzheader_small_box2titlecolor");
$woobizzheader_small_box2description= get_theme_mod("woobizzheader_small_box2description");
$woobizzheader_small_box2descriptionsize= get_theme_mod("woobizzheader_small_box2descriptionsize");
$woobizzheader_small_box2descriptioncolor= get_theme_mod("woobizzheader_small_box2descriptioncolor");
$woobizzheader_small_box2imagealign= get_theme_mod("woobizzheader_small_box2imagealign");
if ($woobizzheader_small_box2imagealign=="option-1"){$woobizzheader_small_box2imagealign="row";}
 elseif($woobizzheader_small_box2imagealign=="option-2"){$woobizzheader_small_box2imagealign="column";}
 elseif($woobizzheader_small_box2imagealign=="option-3"){$woobizzheader_small_box2imagealign="row-reverse";}
 elseif($woobizzheader_small_box2imagealign=="option-4"){$woobizzheader_small_box2imagealign="column-reverse";}
$woobizzheader_small_box2txtalign= get_theme_mod("woobizzheader_small_box2txtalign");
if ($woobizzheader_small_box2txtalign=="option-1"){$woobizzheader_small_box2txtalign="left";}
 elseif($woobizzheader_small_box2txtalign=="option-2"){$woobizzheader_small_box2txtalign="center";}
 elseif($woobizzheader_small_box2txtalign=="option-3"){$woobizzheader_small_box2txtalign="right";}
 else{$woobizzheader_small_box2txtalign="left";}
$woobizzheader_small_box2grayscale= get_theme_mod("woobizzheader_small_box2grayscale");
$woobizzheader_small_box2sepia= get_theme_mod("woobizzheader_small_box2sepia");
$woobizzheader_small_box2blur= get_theme_mod("woobizzheader_small_box2blur");
$woobizzheader_small_box2brightness= get_theme_mod("woobizzheader_small_box2brightness");
$woobizzheader_small_box2huerotate= get_theme_mod("woobizzheader_small_box2huerotate");
$woobizzheader_small_box2saturate= get_theme_mod("woobizzheader_small_box2saturate");
$woobizzheader_small_box2opacity= get_theme_mod("woobizzheader_small_box2opacity");
$woobizzheader_small_box2contrast= get_theme_mod("woobizzheader_small_box2contrast");
$woobizzheader_small_box2invert= get_theme_mod("woobizzheader_small_box2invert");  
//--------------------------------------------------------------------------------------
// WIDGET1
//--------------------------------------------------------------------------------------
$woobizzheader_small_widget1position= get_theme_mod("woobizzheader_small_widget1position");
$woobizzheader_small_widget1width= get_theme_mod("woobizzheader_small_widget1width");
$woobizzheader_small_widget1align= get_theme_mod("woobizzheader_small_widget1align");
$woobizzheader_small_widget1display= get_theme_mod("woobizzheader_small_widget1display");
$woobizzheader_small_widget1help=$woobizzheader_small_widget1position." | ".
$woobizzheader_small_widget1width."%"." | SS | WIDGET1";
if ($woobizzheader_small_widget1align=="option-1"){$woobizzheader_small_widget1alignitems="center";$woobizzheader_small_widget1justifycontent="flex-start";}
 elseif($woobizzheader_small_widget1align=="option-2"){$woobizzheader_small_widget1alignitems="center";$woobizzheader_small_widget1justifycontent="center";}
 elseif($woobizzheader_small_widget1align=="option-3"){$woobizzheader_small_widget1alignitems="center";$woobizzheader_small_widget1justifycontent="flex-end";}
if($woobizzheader_small_widget1display==0){$woobizzheader_small_widget1display="none";}
elseif($woobizzheader_small_widget1display==1){$woobizzheader_small_widget1display="flex";}
//--------------------------------------------------------------------------------------
// WIDGET2
//--------------------------------------------------------------------------------------
$woobizzheader_small_widget2position= get_theme_mod("woobizzheader_small_widget2position");
$woobizzheader_small_widget2width= get_theme_mod("woobizzheader_small_widget2width");
$woobizzheader_small_widget2align= get_theme_mod("woobizzheader_small_widget2align");
$woobizzheader_small_widget2display= get_theme_mod("woobizzheader_small_widget2display");
$woobizzheader_small_widget2help=$woobizzheader_small_widget2position." | ".
$woobizzheader_small_widget2width."%"." | SS | WIDGET2";
if ($woobizzheader_small_widget2align=="option-1"){$woobizzheader_small_widget2alignitems="center";$woobizzheader_small_widget2justifycontent="flex-start";}
 elseif($woobizzheader_small_widget2align=="option-2"){$woobizzheader_small_widget2alignitems="center";$woobizzheader_small_widget2justifycontent="center";}
 elseif($woobizzheader_small_widget2align=="option-3"){$woobizzheader_small_widget2alignitems="center";$woobizzheader_small_widget2justifycontent="flex-end";}
if($woobizzheader_small_widget2display==0){$woobizzheader_small_widget2display="none";}
elseif($woobizzheader_small_widget2display==1){$woobizzheader_small_widget2display="flex";}
//--------------------------------------------------------------------------------------
//CSS
//--------------------------------------------------------------------------------------
echo"
 <style>
@media screen and (max-width:".$woobizzheader_general_ssmaxwidth."px){
	
	.woobizzheader-medium-wrapper{display:none!important;}
	.woobizzheader-large-wrapper{display:none!important;}

	.woobizzheader-medium-bghelp.woobizzheader-general-txthelp{display: none!important;}
	.woobizzheader-large-bghelp.woobizzheader-general-txthelp{display: none!important;}

	.woobizzheader-small-bghelp:after {
		content: '0 | 100% | SS | BG ';		
	}
	.woobizzheader-small-box{
		min-height: ".$woobizzheader_small_bgheight."px;		
	}	
	.woobizzheader-small-wrapper{
		width:".$woobizzheader_small_bgwidth."%;
		padding:".$woobizzheader_small_bgpadding."px;
		
		display:flex;
		flex-wrap:wrap;
		margin:0 auto!important;

	}
	.site-header{
		margin:".$woobizzheader_small_bgmargin."px;
		padding:".$woobizzheader_small_paddingfull."!important;
		box-shadow:".$woobizzheader_small_shadowfull."!important;
		border-top:".$woobizzheader_small_bordertopfull."!important;
		border-right:".$woobizzheader_small_borderrightfull."!important;
		border-bottom:".$woobizzheader_small_borderbottomfull."!important;
		border-left:".$woobizzheader_small_borderleftfull."!important;
	}
	.site-header:before {
		content:'';
		position: absolute;
		left: 0;
		right: 0;
		z-index: -1;
		display: block;
		background-image: linear-gradient(".$woobizzheader_small_bgfullgradient1.",
										  ".$woobizzheader_small_bgfullgradient2."),
									   url('$woobizzheader_small_bgimage');
		background-color:".$woobizzheader_small_bgcolor."!important;
		background-size:".$woobizzheader_small_bgimagesize."!important;
		background-position:".$woobizzheader_small_bgposition."!important;
		background-attachment:".$woobizzheader_small_bgattachment."!important;	
		width:100%;
		height:100%;
		filter: grayscale(".$woobizzheader_small_bggrayscale."%) sepia(".$woobizzheader_small_bgsepia."%) blur(".$woobizzheader_small_bgblur."px) brightness(".$woobizzheader_small_bgbrightness."%) hue-rotate(".$woobizzheader_small_bghuerotate."deg) saturate(".$woobizzheader_small_bgsaturate."%) opacity(".$woobizzheader_small_bgopacity."%) contrast(".$woobizzheader_small_bgcontrast."%) invert(".$woobizzheader_small_bginvert."%);
		-webkit-filter: grayscale(".$woobizzheader_small_bggrayscale."%) sepia(".$woobizzheader_small_bgsepia."%) blur(".$woobizzheader_small_bgblur."px) brightness(".$woobizzheader_small_bgbrightness."%) hue-rotate(".$woobizzheader_small_bghuerotate."deg) saturate(".$woobizzheader_small_bgsaturate."%) opacity(".$woobizzheader_small_bgopacity."%) contrast(".$woobizzheader_small_bgcontrast."%) invert(".$woobizzheader_small_bginvert."%);
		-moz-filter: grayscale(".$woobizzheader_small_bggrayscale."%) sepia(".$woobizzheader_small_bgsepia."%) blur(".$woobizzheader_small_bgblur."px) brightness(".$woobizzheader_small_bgbrightness."%) hue-rotate(".$woobizzheader_small_bghuerotate."deg) saturate(".$woobizzheader_small_bgsaturate."%) opacity(".$woobizzheader_small_bgopacity."%) contrast(".$woobizzheader_small_bgcontrast."%) invert(".$woobizzheader_small_bginvert."%);
	
	}
	.site-header .col-full {
		width:100%;
		margin:0 auto!important;
		max-width: 100%;
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ BRAND CSS */
	/*---------------------------------------------------------------*/
	
	.woobizzheader-small-brandbox {
		display:".$woobizzheader_small_branddisplay."!important;
		order:".$woobizzheader_small_brandposition.";
		width:".$woobizzheader_small_brandwidth."%;
		align-items:".$woobizzheader_small_brandalignitems."!important;
		justify-content:".$woobizzheader_small_brandjustifycontent."!important;
		text-align: ".$woobizzheader_small_brandtxtalign."!important;
		flex-direction:".$woobizzheader_small_brandimagealign."!important;

	}	
	.woobizzheader-small-brandhelp:after {
		content:'$woobizzheader_small_brandhelp';	
		
	}
	h3#woobizzheader-small-brandtitle {
		color: ".$woobizzheader_small_brandtitlecolor.";
		font-size:".$woobizzheader_small_brandtitlesize."px;
		font-weight: 400;
		font-family: inherit;		
	}
	p#woobizzheader-small-branddescription {
		color: ".$woobizzheader_small_branddescriptioncolor.";
		font-size:".$woobizzheader_small_branddescriptionsize."px;
	}
	.woobizzheader-small-branditems p {
		margin: 0;
		text-align: ".$woobizzheader_small_brandtxtalign."!important;
	}
	.woobizzheader-small-branditems {
		display: flex;
		align-items: center;
		height: auto;
		flex-direction:".$woobizzheader_small_brandimagealign."!important;
	}
	.woobizzheader-small-branditem1 img {
		filter: grayscale(".$woobizzheader_small_brandgrayscale."%) sepia(".$woobizzheader_small_brandsepia."%) blur(".$woobizzheader_small_brandblur."px) brightness(".$woobizzheader_small_brandbrightness."%) hue-rotate(".$woobizzheader_small_brandhuerotate."deg) saturate(".$woobizzheader_small_brandsaturate."%) opacity(".$woobizzheader_small_brandopacity."%) contrast(".$woobizzheader_small_brandcontrast."%) invert(".$woobizzheader_small_brandinvert."%);
		-webkit-filter: grayscale(".$woobizzheader_small_brandgrayscale."%) sepia(".$woobizzheader_small_brandsepia."%) blur(".$woobizzheader_small_brandblur."px) brightness(".$woobizzheader_small_brandbrightness."%) hue-rotate(".$woobizzheader_small_brandhuerotate."deg) saturate(".$woobizzheader_small_brandsaturate."%) opacity(".$woobizzheader_small_brandopacity."%) contrast(".$woobizzheader_small_brandcontrast."%) invert(".$woobizzheader_small_brandinvert."%);
		-moz-filter: grayscale(".$woobizzheader_small_brandgrayscale."%) sepia(".$woobizzheader_small_brandsepia."%) blur(".$woobizzheader_small_brandblur."px) brightness(".$woobizzheader_small_brandbrightness."%) hue-rotate(".$woobizzheader_small_brandhuerotate."deg) saturate(".$woobizzheader_small_brandsaturate."%) opacity(".$woobizzheader_small_brandopacity."%) contrast(".$woobizzheader_small_brandcontrast."%) invert(".$woobizzheader_small_brandinvert."%);
	}	
	.woobizzheader-small-branditem2 {
		text-align: ".$woobizzheader_small_brandtxtalign."!important;
		margin-top: ".$woobizzheader_small_brandtxtmargintop."px;
		margin-bottom: ".$woobizzheader_small_brandtxtmarginbottom."px;
		margin-right: ".$woobizzheader_small_brandtxtmarginright."px;
		margin-left: ".$woobizzheader_small_brandtxtmarginleft."px;
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ MENU 1 CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-small-menu1{
		display:".$woobizzheader_small_menu1display."!important;
		order:".$woobizzheader_small_menu1position."!important;
		width:".$woobizzheader_small_menu1width."%!important;
		align-items:".$woobizzheader_small_menu1alignitems."!important;
		justify-content:".$woobizzheader_small_menu1justifycontent."!important;

	}
	.woobizzheader-small-menu1help:after {
		content:'$woobizzheader_small_menu1help';	
		
	}	
	/*---------------------------------------------------------------*/
	/* WOOBIZZ MENU 2 CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-small-menu2{
		display:".$woobizzheader_small_menu2display."!important;
		order:".$woobizzheader_small_menu2position."!important;
		width:".$woobizzheader_small_menu2width."%!important;
		align-items:".$woobizzheader_small_menu2alignitems."!important;
		justify-content:".$woobizzheader_small_menu2justifycontent."!important;
	}
	.woobizzheader-small-menu2help:after {
		content:'$woobizzheader_small_menu2help';			
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ MENU 3 CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-small-menu3{
		display:".$woobizzheader_small_menu3display."!important;
		order:".$woobizzheader_small_menu3position."!important;
		width:".$woobizzheader_small_menu3width."%!important;
		align-items:".$woobizzheader_small_menu3alignitems."!important;
		justify-content:".$woobizzheader_small_menu3justifycontent."!important;
	}
	.woobizzheader-small-menu3help:after {
		content:'$woobizzheader_small_menu3help';		
	}
	#mega-menu-wrap-woobizz-menu-3 {
    width: 100%;
	}	
	/*---------------------------------------------------------------*/
	/* WOOBIZZ CART CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-small-cartitems{
		display: ".$woobizzheader_small_cartdisplay."!important;
	}
	.woobizzheader-small-cartitem1{
		display: ".$woobizzheader_small_cartimagedisplay."!important;
	}
	.woobizzheader-small-cartitem1 img{
		filter: grayscale(".$woobizzheader_small_cartgrayscale."%) sepia(".$woobizzheader_small_cartsepia."%) blur(".$woobizzheader_small_cartblur."px) brightness(".$woobizzheader_small_cartbrightness."%) hue-rotate(".$woobizzheader_small_carthuerotate."deg) saturate(".$woobizzheader_small_cartsaturate."%) opacity(".$woobizzheader_small_cartopacity."%) contrast(".$woobizzheader_small_cartcontrast."%) invert(".$woobizzheader_small_cartinvert."%);
		-webkit-filter: grayscale(".$woobizzheader_small_cartgrayscale."%) sepia(".$woobizzheader_small_cartsepia."%) blur(".$woobizzheader_small_cartblur."px) brightness(".$woobizzheader_small_cartbrightness."%) hue-rotate(".$woobizzheader_small_carthuerotate."deg) saturate(".$woobizzheader_small_cartsaturate."%) opacity(".$woobizzheader_small_cartopacity."%) contrast(".$woobizzheader_small_cartcontrast."%) invert(".$woobizzheader_small_cartinvert."%);
		-moz-filter: grayscale(".$woobizzheader_small_cartgrayscale."%) sepia(".$woobizzheader_small_cartsepia."%) blur(".$woobizzheader_small_cartblur."px) brightness(".$woobizzheader_small_cartbrightness."%) hue-rotate(".$woobizzheader_small_carthuerotate."deg) saturate(".$woobizzheader_small_cartsaturate."%) opacity(".$woobizzheader_small_cartopacity."%) contrast(".$woobizzheader_small_cartcontrast."%) invert(".$woobizzheader_small_cartinvert."%);
	}
	.woobizzheader-small-cart {
		display:".$woobizzheader_small_cartdisplay."!important;
		order:".$woobizzheader_small_cartposition."!important;
		width:".$woobizzheader_small_cartwidth."%!important;
		align-items:".$woobizzheader_small_cartalignitems."!important;
		justify-content:".$woobizzheader_small_cartjustifycontent."!important;		
	}
	.woobizzheader-small-carthelp:after {
		content:'$woobizzheader_small_carthelp';		
	}
	
	h3#woobizzheader-small-carttitle {
		color: ".$woobizzheader_small_carttitlecolor."!important;
		font-size:".$woobizzheader_small_carttitlesize."px!important;
		text-align: ".$woobizzheader_small_carttxtalign."!important;
		font-weight: 400;
		font-family: inherit;		
	}
	a.woobizzheader-small-cartlink {
		color: ".$woobizzheader_small_cartdescriptioncolor."!important;
		font-size:".$woobizzheader_small_cartdescriptionsize."px!important;
		text-align: ".$woobizzheader_small_carttxtalign."!important;
		display: ".$woobizzheader_small_carttxtdisplay."!important;

	}
	.woobizzheader-small-cartitems p {
		margin: 0;
		text-align: ".$woobizzheader_small_carttxtalign."!important;
	}
	.woobizzheader-small-cartitems {
		display: flex;
		align-items: center;
		height: auto;
		flex-direction:".$woobizzheader_small_cartimagealign."!important;
	}

	.woobizzheader-small-cartitem2 {
		text-align: ".$woobizzheader_small_carttxtalign."!important;
		margin: 10px 10px;
	}
	.site-header-cart .cart-contents .amount {
		color: ".$woobizzheader_small_carttitlecolor."!important;
		font-size:".$woobizzheader_small_carttitlesize."px!important;
		text-align: ".$woobizzheader_small_carttxtalign."!important;
		display: ".$woobizzheader_small_cartpricedisplay."!important;
		margin-right:0;
	}
	.woobizzheader-small-cartcount {
		display: ".$woobizzheader_small_cartimagedisplay."!important;
		background: red;
		width: 30px;
		height: 30px;
		text-align: center;
		font-size: small;
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
	.woobizzheader-small-cartitem2{
		display: flex;
		flex-direction: column;
		text-align: center;
		margin: 10px 10px;
		
	}	
	.woobizzheader-small-cartitem2 p {
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
	.woobizzheader-small-cartitems p {
		margin: 0;
	}
	.woobizzheader-small-cartitems {
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
	.woobizzheader-small-search {
		display:".$woobizzheader_small_searchdisplay."!important;
		order:".$woobizzheader_small_searchposition."!important;
		width:".$woobizzheader_small_searchwidth."%!important;
		align-items:".$woobizzheader_small_searchalignitems."!important;
		justify-content:".$woobizzheader_small_searchjustifycontent."!important;
		text-align: center;
	}
	.site-search {
    	display:".$woobizzheader_small_searchdisplay."!important;
	}
	.woobizzheader-small-searchhelp:after {
		content:'$woobizzheader_small_searchhelp';
	}
	.woobizzheader-small-searchitems {
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
	.woobizzheader-small-box1items{
		display: ".$woobizzheader_small_box1display."!important;
	}
	.woobizzheader-small-box1 {
		display:".$woobizzheader_small_box1display."!important;
		order:".$woobizzheader_small_box1position."!important;
		width:".$woobizzheader_small_box1width."%!important;
		align-items:".$woobizzheader_small_box1alignitems."!important;
		justify-content:".$woobizzheader_small_box1justifycontent."!important;
		
	}
	.woobizzheader-small-box1help:after {
		content:'$woobizzheader_small_box1help';		
	}
	h3#woobizzheader-small-box1title {
		color: ".$woobizzheader_small_box1titlecolor."!important;
		font-size:".$woobizzheader_small_box1titlesize."px!important;
		font-weight: 400;
		font-family: inherit;		
	}
	p#woobizzheader-small-box1description- {
		color: ".$woobizzheader_small_box1descriptioncolor."!important;
		font-size:".$woobizzheader_small_box1descriptionsize."px!important;
	}
	.woobizzheader-small-box1items p {
		margin: 0;
		text-align: ".$woobizzheader_small_box1txtalign."!important;
	}
	.woobizzheader-small-box1items {
		display: flex;
		align-items: center;
		height: auto;
		flex-direction:".$woobizzheader_small_box1imagealign."!important;
	}
	.woobizzheader-small-box1item1 img{
		filter: grayscale(".$woobizzheader_small_box1grayscale."%) sepia(".$woobizzheader_small_box1sepia."%) blur(".$woobizzheader_small_box1blur."px) brightness(".$woobizzheader_small_box1brightness."%) hue-rotate(".$woobizzheader_small_box1huerotate."deg) saturate(".$woobizzheader_small_box1saturate."%) opacity(".$woobizzheader_small_box1opacity."%) contrast(".$woobizzheader_small_box1contrast."%) invert(".$woobizzheader_small_box1invert."%);
		-webkit-filter: grayscale(".$woobizzheader_small_box1grayscale."%) sepia(".$woobizzheader_small_box1sepia."%) blur(".$woobizzheader_small_box1blur."px) brightness(".$woobizzheader_small_box1brightness."%) hue-rotate(".$woobizzheader_small_box1huerotate."deg) saturate(".$woobizzheader_small_box1saturate."%) opacity(".$woobizzheader_small_box1opacity."%) contrast(".$woobizzheader_small_box1contrast."%) invert(".$woobizzheader_small_box1invert."%);
		-moz-filter: grayscale(".$woobizzheader_small_box1grayscale."%) sepia(".$woobizzheader_small_box1sepia."%) blur(".$woobizzheader_small_box1blur."px) brightness(".$woobizzheader_small_box1brightness."%) hue-rotate(".$woobizzheader_small_box1huerotate."deg) saturate(".$woobizzheader_small_box1saturate."%) opacity(".$woobizzheader_small_box1opacity."%) contrast(".$woobizzheader_small_box1contrast."%) invert(".$woobizzheader_small_box1invert."%);
	}	
	.woobizzheader-small-box1item1 {
		text-align: ".$woobizzheader_small_box1txtalign."!important;
		margin: 10px 10px;
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ BOX2 CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-small-box2items{
		display: ".$woobizzheader_small_box2display."!important;
	}
	.woobizzheader-small-box2 {
		display:".$woobizzheader_small_box2display."!important;
		order:".$woobizzheader_small_box2position."!important;
		width:".$woobizzheader_small_box2width."%!important;
		align-items:".$woobizzheader_small_box2alignitems."!important;
		justify-content:".$woobizzheader_small_box2justifycontent."!important;
		
	}
	.woobizzheader-small-box2help:after{
		content:'$woobizzheader_small_box2help';		
	}
	h3#woobizzheader-small-box2title {
		color: ".$woobizzheader_small_box2titlecolor."!important;
		font-size:".$woobizzheader_small_box2titlesize."px!important;
		font-weight: 400;
		font-family: inherit;		
	}
	p#woobizzheader-small-box2description- {
		color: ".$woobizzheader_small_box2descriptioncolor."!important;
		font-size:".$woobizzheader_small_box2descriptionsize."px!important;
	}
	.woobizzheader-small-box2items p {
		margin: 0;
		text-align: ".$woobizzheader_small_box2txtalign."!important;
	}
	.woobizzheader-small-box2items {
		display: flex;
		align-items: center;
		height: auto;
		flex-direction:".$woobizzheader_small_box2imagealign."!important;
	}
	.woobizzheader-small-box2item1 img{
		filter: grayscale(".$woobizzheader_small_box2grayscale."%) sepia(".$woobizzheader_small_box2sepia."%) blur(".$woobizzheader_small_box2blur."px) brightness(".$woobizzheader_small_box2brightness."%) hue-rotate(".$woobizzheader_small_box2huerotate."deg) saturate(".$woobizzheader_small_box2saturate."%) opacity(".$woobizzheader_small_box2opacity."%) contrast(".$woobizzheader_small_box2contrast."%) invert(".$woobizzheader_small_box2invert."%);
		-webkit-filter: grayscale(".$woobizzheader_small_box2grayscale."%) sepia(".$woobizzheader_small_box2sepia."%) blur(".$woobizzheader_small_box2blur."px) brightness(".$woobizzheader_small_box2brightness."%) hue-rotate(".$woobizzheader_small_box2huerotate."deg) saturate(".$woobizzheader_small_box2saturate."%) opacity(".$woobizzheader_small_box2opacity."%) contrast(".$woobizzheader_small_box2contrast."%) invert(".$woobizzheader_small_box2invert."%);
		-moz-filter: grayscale(".$woobizzheader_small_box2grayscale."%) sepia(".$woobizzheader_small_box2sepia."%) blur(".$woobizzheader_small_box2blur."px) brightness(".$woobizzheader_small_box2brightness."%) hue-rotate(".$woobizzheader_small_box2huerotate."deg) saturate(".$woobizzheader_small_box2saturate."%) opacity(".$woobizzheader_small_box2opacity."%) contrast(".$woobizzheader_small_box2contrast."%) invert(".$woobizzheader_small_box2invert."%);
	}	
	.woobizzheader-small-box2item2 {
		text-align: ".$woobizzheader_small_box2txtalign."!important;
		margin: 10px 10px;
	}
	/*---------------------------------------------------------------*/
	/* WOOBIZZ WIDGET 1 CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-small-widget1{
		display:".$woobizzheader_small_widget1display."!important;
		order:".$woobizzheader_small_widget1position."!important;
		width:".$woobizzheader_small_widget1width."%!important;
		align-items:".$woobizzheader_small_widget1alignitems."!important;
		justify-content:".$woobizzheader_small_widget1justifycontent."!important;

	}
	.woobizzheader-small-widget1help:after {
		content:'$woobizzheader_small_widget1help';
	}
	
	/*---------------------------------------------------------------*/
	/* WOOBIZZ WIDGET 2 CSS */
	/*---------------------------------------------------------------*/
	.woobizzheader-small-widget2{
		display:".$woobizzheader_small_widget2display."!important;
		order:".$woobizzheader_small_widget2position."!important;
		width:".$woobizzheader_small_widget2width."%!important;
		align-items:".$woobizzheader_small_widget2alignitems."!important;
		justify-content:".$woobizzheader_small_widget2justifycontent."!important;

	}
	.woobizzheader-small-widget2help:after {
		content:'$woobizzheader_small_widget2help';
	}
	
}	
 </style>
";
}
add_action("wp_head","woobizzheader_small_css",100);
//--------------------------------------------------------------------------------------
//HTLM
//--------------------------------------------------------------------------------------
function woobizzheader_small_htmlphpcontent() {
$woobizzheader_small_brandlogo= get_theme_mod('woobizzheader_small_brandlogo');
$woobizzheader_small_brandtitle= get_theme_mod("woobizzheader_small_brandtitle");
$woobizzheader_small_brandtitlesize= get_theme_mod("woobizzheader_small_brandtitlesize");
$woobizzheader_small_brandtitlecolor= get_theme_mod("woobizzheader_small_brandtitlecolor");
$woobizzheader_small_branddescription= get_theme_mod("woobizzheader_small_branddescription");
$woobizzheader_small_branddescriptionsize= get_theme_mod("woobizzheader_small_branddescriptionsize");
$woobizzheader_small_branddescriptioncolor= get_theme_mod("woobizzheader_small_branddescriptioncolor");

$woobizzheader_small_cartlogo= get_theme_mod('woobizzheader_small_cartlogo');
$woobizzheader_small_carttitlesize= get_theme_mod("woobizzheader_small_carttitlesize");
$woobizzheader_small_carttitlecolor= get_theme_mod("woobizzheader_small_carttitlecolor");
$woobizzheader_small_cartdescription= get_theme_mod("woobizzheader_small_cartdescription");
$woobizzheader_small_cartdescriptionsize= get_theme_mod("woobizzheader_small_cartdescriptionsize");
$woobizzheader_small_cartdescriptioncolor= get_theme_mod("woobizzheader_small_cartdescriptioncolor");

$woobizzheader_small_box1logo= get_theme_mod('woobizzheader_small_box1logo');
$woobizzheader_small_box1title= get_theme_mod("woobizzheader_small_box1title");
$woobizzheader_small_box1titlesize= get_theme_mod("woobizzheader_small_box1titlesize");
$woobizzheader_small_box1titlecolor= get_theme_mod("woobizzheader_small_box1titlecolor");
$woobizzheader_small_box1description= get_theme_mod("woobizzheader_small_box1description");
$woobizzheader_small_box1descriptionsize= get_theme_mod("woobizzheader_small_box1descriptionsize");
$woobizzheader_small_box1descriptioncolor= get_theme_mod("woobizzheader_small_box1descriptioncolor");

$woobizzheader_small_box2logo= get_theme_mod('woobizzheader_small_box2logo');
$woobizzheader_small_box2title= get_theme_mod("woobizzheader_small_box2title");
$woobizzheader_small_box2titlesize= get_theme_mod("woobizzheader_small_box2titlesize");
$woobizzheader_small_box2titlecolor= get_theme_mod("woobizzheader_small_box2titlecolor");
$woobizzheader_small_box2description= get_theme_mod("woobizzheader_small_box2description");
$woobizzheader_small_box2descriptionsize= get_theme_mod("woobizzheader_small_box2descriptionsize");
$woobizzheader_small_box2descriptioncolor= get_theme_mod("woobizzheader_small_box2descriptioncolor");
?>
<div class= "woobizzheader-small-bghelp woobizzheader-general-txthelp"></div>
<div class="woobizzheader-small-wrapper " >	
	
	<div class="woobizzheader-small-box woobizzheader-small-brandbox woobizzheader-general-box ">
	
	 	<div class= "woobizzheader-small-brandhelp woobizzheader-general-txthelp"></div>
		<div class="woobizzheader-small-branditems ">					
				<div class="woobizzheader-small-branditem1">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="woobizzheader-small-logo" rel="home">
					<img src="<?php  echo $woobizzheader_small_brandlogo; ?>" />						
				</div>							
				<div class="woobizzheader-small-branditem2">
					<h3 id="woobizzheader-small-brandtitle"><?php  echo $woobizzheader_small_brandtitle; ?></h3>
					<p id="woobizzheader-small-branddescription"><?php  echo $woobizzheader_small_branddescription; ?></p>	
				</a>						
				</div>											
		</div>	
	</div>
	<div class="woobizzheader-small-box woobizzheader-small-menu1 woobizzheader-general-box">

		<div class= "woobizzheader-small-menu1help woobizzheader-general-txthelp"></div>
		<?php
			wp_nav_menu( array( 'theme_location' => 'woobizz-menu-1' ) );				
		?>	
	</div>
	<div class="woobizzheader-small-box woobizzheader-small-menu2 woobizzheader-general-box">
		<div class= "woobizzheader-small-menu2help woobizzheader-general-txthelp"></div>
		<?php
			wp_nav_menu( array( 'theme_location' => 'woobizz-menu-2' ) );				
		?>	
	</div>
	<div class="woobizzheader-small-box woobizzheader-small-menu3 woobizzheader-general-box">
		<div class= "woobizzheader-small-menu3help woobizzheader-general-txthelp"></div>
		<?php
			wp_nav_menu( array( 'theme_location' => 'woobizz-menu-3' ) );				
		?>	
	</div>
	<div class="woobizzheader-small-box woobizzheader-small-cart woobizzheader-general-box">
			<div class= "woobizzheader-small-carthelp woobizzheader-general-txthelp"></div>		
			<div class="woobizzheader-small-cartitems">	
				<a href="http://127.0.0.1/dev-plugins/carrito/">
				<div class="woobizzheader-small-cartitem1">
					<img src="<?php  echo $woobizzheader_small_cartlogo; ?>" />	
				</div>

				<div class="woobizzheader-small-cartcount">
					<?php
					if ( class_exists( 'woocommerce' ) ) {
						echo WC()->cart->get_cart_contents_count();
					}
					?>
				</div>
				
				<div class="woobizzheader-small-cartitem2">
					<?php
					if ( class_exists( 'woocommerce' ) ) {
						storefront_header_cart();
					}					  
					 ?>
						<a class="woobizzheader-small-cartlink" href="http://127.0.0.1/dev-plugins/carrito/">
						<?php  echo $woobizzheader_small_cartdescription; ?>
						</a>
				</div>
				</a>
			</div>	
	</div>
	<div class="woobizzheader-small-box woobizzheader-small-search woobizzheader-general-box">
			<div class= "woobizzheader-small-searchhelp woobizzheader-general-txthelp"></div>
			<div class="woobizzheader-small-searchitems">
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
	<div class="woobizzheader-small-box woobizzheader-small-box1 woobizzheader-general-box">
		<div class= "woobizzheader-small-box1help woobizzheader-general-txthelp"></div>
		<div class="woobizzheader-small-box1items ">					
				<div class="woobizzheader-small-box1item1">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="woobizzheader-small-box1logo" rel="home">
					<img src="<?php  echo $woobizzheader_small_box1logo; ?>" />						
				</div>							
				<div class="woobizzheader-small-box1item2">
					<h3 id="woobizzheader-small-box1title"><?php  echo $woobizzheader_small_box1title; ?></h3>
					<p id="woobizzheader-small-box1description-"><?php  echo $woobizzheader_small_box1description; ?></p>	
				</a>						
				</div>											
		</div>	
	</div>
	<div class="woobizzheader-small-box woobizzheader-small-box2 woobizzheader-general-box">
		<div class= "woobizzheader-small-box2help woobizzheader-general-txthelp"></div>
		<div class="woobizzheader-small-box2items ">					
				<div class="woobizzheader-small-box2item1">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="woobizzheader-small-box2logo" rel="home">
					<img src="<?php  echo $woobizzheader_small_box2logo; ?>" />						
				</div>							
				<div class="woobizzheader-small-box2item2">
					<h3 id="woobizzheader-small-box2title"><?php  echo $woobizzheader_small_box2title; ?></h3>
					<p id="woobizzheader-small-box2description-"><?php  echo $woobizzheader_small_box2description; ?></p>	
				</a>						
				</div>											
		</div>	
	</div>
	<div class="woobizzheader-small-box woobizzheader-small-widget1 woobizzheader-general-box">
		<div class= "woobizzheader-small-widget1help woobizzheader-general-txthelp"></div>
		<?php
			dynamic_sidebar( 'Woobizz Header Custom Widget 1' );			
		?>	
	</div>
	<div class="woobizzheader-small-box woobizzheader-small-widget2 woobizzheader-general-box">
		<div class= "woobizzheader-small-widget2help woobizzheader-general-txthelp"></div>
		<?php
			dynamic_sidebar( 'Woobizz Header Custom Widget 2' );			
		?>	
	</div>		
</div>
<?php
}
add_action('storefront_header', 'woobizzheader_small_htmlphpcontent');