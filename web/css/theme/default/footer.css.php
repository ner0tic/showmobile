<?php
	header("Content-Type: text/css");
  include_once ('css.scheme.php');
?>
/**
  * style pour le footer
**/
.footer
{
  background: <?php echo $color[12]; ?> url(/images/common/footer/background.png) no-repeat 50% top;
  min-height: 60px;
  _height: 60px;
  margin-top: 50px;
}
.footer_wrapper
{
  width: 920px;
  height: 60px;
  margin: 0 auto;
  font:13px/60px Arial, Helvetica, sans-serif;
}

.footer_wrapper .sensio_books_logo,
.footer_wrapper .crab_logo,
.footer_wrapper .baseline
{
  float: left;
  min-height: 60px;
  _height:60px;
  line-height: 60px;
}

.footer_wrapper .sensio_books_logo
{
  width: 185px;
}

.footer_wrapper .crab_logo
{
  width: 80px;
}
.footer_wrapper .baseline
{
  width: 400px;
  color: #FFFFFF;
}

.footer .baseline a,
.footer .baseline a:hover
{
  color: #FFFFFF;
  font-weight: normal;
}

.footer_wrapper .link_01,
.footer_wrapper .link_01:hover
{
  color: #7CD7CF;
}

.footer_wrapper a.link_01
{
  font:bold 13px/60px Arial, Helvetica, sans-serif;
  padding-right:16px;
  background: url(/images/common/picto/puce_books_banner.gif) no-repeat right 4px;
}
