<?php
    include_once 'scheme.css.php';
    header("Content-Type: text/css");
    
    //$scheme = isset($_GET['c']) ? $_GET['c'] : $dkOrangeStripe;
?>
/*******************************************************************************
    container
*******************************************************************************/
a {
  color: #524F46;
  outline: none;
}
body {
  font: 14px "Lucida Grande", Lucida, Verdana, sans-serif;
  background-color: <?= $ltGray ?>;
}
#container {
  margin-left: auto;
  margin-right: auto;
  background: <?= $offWhite ?>; /*url(../images/bg-page.png) bottom repeat-x;*/
}
/*******************************************************************************
    header
*******************************************************************************/
#header {
  background: url(../images/bg-header.jpg) repeat-x top;
}
#header h1 {
  height: 110px;
  width: 783px;
  margin: 0 auto;
}
#header h1 a {
  display: block;
  width: 450px;
  height: 110px;
  background: url(../images/logo.gif) no-repeat;
}
#header h1 img {
  display: none;
}
#header .post {
  float: right;
  margin-top: -66px;
  margin-right: 40px;
}
#sub_header .search-wrapper input {
  background: url(../images/search-btn.png) no-repeat;
  text-indent: -9999px;
  border: 0;
  width: 52px;
  height: 43px;
  margin-left: -10px;
  margin-top: -15px;
}
#sub_header .search-wrapper input:hover {
  background-position: left -40px;
}
#sub_header .search-wrapper input:active {
  background-position: left -80px;
}
#sub_header .search-wrapper input#search_query {
  margin-top: 10px;
  font-size: 160%;
  padding: 8px 10px;
  line-height: 1.5em;
  margin-bottom: 3px;
  margin-left: 0px;
  width: 579px;
  height: 27px;
  border: 0;
  background: url(../images/search-box.jpg);
  text-indent: 0;
  color: #666;
}
#sub_header .post h2 {
  display: none;
}
#sub_header .post div a {
  display: block;
  background: url(../images/button-post.jpg);
  text-indent: -9999px;
  width: 150px;
  height: 48px;
}
#sub_header .post div a:hover {
  background-position: left -50px;
}
#sub_header .post div a:active {
  background-position: left -100px;
}
#sub_header {
  background:  <?= $medRed ?>;/*url(../images/search-box-bg.gif) bottom;*/
  border-bottom: 1px solid <?= $black ?>;
  width: 783px;
  height: 128px;
  margin: 0 auto;
}
#sub_header .search-wrapper {
  padding: 15px 35px;
}
#sub_header h2 {
  text-indent: -9999px;
}
#sub_header .search-wrapper h2 {
  background: url(../images/header-search.gif) no-repeat;
  height: 23px;
  width: 250px;
  margin-bottom: 7px;
  margin-top: 5px;
}
/*******************************************************************************
    content
*******************************************************************************/
#content .content {
  width: 783px;
  margin: 0 auto;
  background: <?= $white ?>;
  height: expression((document.documentElement.clientHeight - 110) - 153."px");
  position: relative;
}
#content h1 {
/*  margin-top: 10px;*/
  margin-bottom: 1px;
  padding: 0px 15px;
  font-size: 124%;
  font-weight: bold;
  text-transform: uppercase;
  background-color: <?= $medTeal ?>;
  border-bottom-left-radius: 15px 15px;
/*  border-bottom-right-radius: 15px 15px;*/
  border-top-left-radius: 15px 15px;
/*  border-top-right-radius: 15px 15px;*/
  border: 1px solid <?= $medTeal ?>;
  line-height: 32px;
  color: <?= $white ?>;
  margin: 0 auto 5px;
}
#content h1 a {
  color: #fff;
  text-decoration: none;
  font-style: normal;
  text-transform: uppercase;
  line-height: 32px;
}
.cols-two-wrapper {
    position: relative;
    vertical-align: top;
    width: 100%;
}
.cols-two-a,
.cols-two-b {
    position: relative;
    min-height: 200px;
    display: inline;
    vertical-align: top;
    float-left;
}
.dashed-right-two {
    border-right: 2px dashed <?= $ltGray ?>;
}


/*******************************************************************************
    debug
*******************************************************************************/
.debug_r {
    border: 3px solid red;
}
.debug_y {
    border: 3px solid yellow;
}
.debug_b {
    border: 3px solid blue;
}
/*******************************************************************************
    footer
*******************************************************************************/
#footer {
  /*margin-top: 60px;*/
  font-size: 90%;
  margin-bottom: 0px;
  height: 153px;
  background: <?= $medRed ?>; /*url(../images/bg-footer.jpg) repeat-x bottom;*/
  padding-top: 10px;
  position: fixed;
  bottom: 0px;
  width: 100%;
}
#footer .content {
  width: 783px;
  margin: 0 auto;
}
#footer a {
  color: <?= $tealGray ?>;
}
#footer ul {
  display: inline;
}
#footer li {
  list-style: none;
  margin-right: 15px;
  display: inline;
}
#footer li a {
  text-decoration: none;
}
#footer li a:hover {
  color: <?= $black ?>;
  text-decoration: underline;
}
#footer .symfony,
#footer .centresource {
  font-family: arial,sans-serif;
  font-size: 80%;
  float: right;
  color: #666;
}
#footer .centresource {
  clear: both;
  margin-top: 5px;
  padding-bottom: 10px;
  position: absolute;
  bottom: -30px;
  right: 5%;
  color: <?= $ltTealGray ?>;
  font-size: 90%;
}
#footer .centresource a {
  color: <?= $ltTealGray ?>;
  text-decoration: none;
}
#footer .centresource a:hover {
  color: <?= $white ?>;
}
#footer .symfony img {
  vertical-align: middle;
}
#footer form {
  margin: 10px 0;
  color: <?= $tealGray ?>;
}
.feed {
  padding-left: 20px;
  background: transparent url(../images/feed.png) no-repeat 0 0;
}
.help {
  color: <?= $medGray ?>;
  font-size: 80%;
  font-style: italic;
}
.search-wrapper .help {
  color: <?= $white ?>;
}
/*******************************************************************************
    misc
*******************************************************************************/
.error_list {
  color: red;
}
strong {
  font-weight: bold;
}
em {
  font-style: italic;
}
.float-right {
    float: right;
}
.clearfix:after {
  content:"\0020";
  display:block;
  height:0;
  clear:both;
  visibility:hidden;
}
.clearfix {
  display:inline-block;
}
/* \*/ * html .clear_fix {
  height:1%;
}
.clearfix {
  display:block;
}
body {
    overflow-x: hidden;
}
ol, ul {
    list-style: none;
}
.bold {
    font-weight: bold;
}
.sup {
    vertical-align: super;
    font-size: 1em;
}
.italic {
    font-style: italic;
}
.inline {
    display: inline;
}
/*******************************************************************************
    flash msgs
*******************************************************************************/
.flash_notice {
  margin: 3px 0;
  padding: 7px;
  background-color: <?= $ltTeal ?>;
}
.flash_error {
  margin: 3px 0;
  padding: 7px;
  background-color: #f33;
  color: #fff;
}
.alert-center {
    display: none;
{
