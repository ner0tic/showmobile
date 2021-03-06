<?php
	header("Content-Type: text/css");
  include_once ('css.scheme.php');
?>
/* --- DEBUT - Masques Coins arrondis --- */
.corner_tl,
.corner_tr,
.corner_br,
.corner_bl
{
  display:block;
  width:4px;
  height:4px;
  position:absolute;
  overflow:hidden;
}

.corner_tl
{
  top:0px;
  left:0px;
  background:transparent url(/images/theme/default/corners/4x4/top_left.png) no-repeat left top;
}

.corner_tr
{
  top:0px;
  right:0px;
  background:transparent url(/images/theme/default/corners/4x4/top_right.png) no-repeat left top;
}

.corner_br
{
  bottom:0px;
  right:0px;
  background:transparent url(/images/theme/default/corners/4x4/bottom_right.png) no-repeat left top;
}

.corner_bl
{
  bottom:0px;
  left:0px;
  background:transparent url(/images/theme/default/corners/4x4/bottom_left.png) no-repeat left top;
}

.corner_tr,
.corner_br
{
  _right:  expression((this.offsetParent.clientWidth  % 2) ? '-1px' : 0);
}

.corner_br,
.corner_bl
{
  _bottom: expression((this.offsetParent.clientHeight % 2) ? '-1px' : 0);
}
/* --- FIN - Masques Coins arrondis --- */

/**
  * style pour le bloc des DIF sur la page d'accueil
**/
.box_01
{
  padding: 13px;
  position: relative;
  background: #ACD847 url(/images/common/background/bg_dif_box.gif) repeat-x left top;
}
.box_01 .link_01,
.box_01 .link_01:hover
{
  font-weight: bold;
  color: #1D8597;
  background-image: url(/images/common/picto/mark_1D8597.png);
}
.box_01_title
{
  font-size: 16px;
  line-height: 15px;
  font-weight: bold;
  color: #EBF7F6;
}
.box_01_description
{
  color: #1D8597;
  padding: 4px 0 8px 0;
}
