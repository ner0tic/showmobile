<?php
	header("Content-Type: text/css");
  include_once ('css.scheme.php');
?>
#content
{
  background:<?php echo "#D9822B" ?> ;
}

#content.home
{
 /* background-image:url(/images/common/header/home_bg.jpg);*/
}
.header
{
 /* height: 133px;*/
}

.home .header
{
  height: 133px;
}

.header .logo
{
  padding-top: 21px;
  float: left;
  z-index:100;
  position: relative
}

.header #city_top
{
  position: relative;
  top: -86px;
  min-width: 960px;
  min-height: 89px;
  margin: auto auto;
  background: url(/images/theme/default/bg_header.png) repeat-x center bottom ;
  z-index: 1;
}

.header .menu
{
  width: auto;
  /*padding-top: 20px;*/
  float: right;
}

.header_content
{
  width:960px;
  margin:0 auto;
  position:relative;
  top:0;
  left:0;
}
