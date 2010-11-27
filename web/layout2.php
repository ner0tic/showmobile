<?php //include_once('/css/theme/default/css.scheme.php');
    $color[1] = $ltOrange = '#FF9933';
    $color[2] = $dkOrange = '#D9822B';
    $color[3] = $brown = '#B36B24';
    $color[4] = $offBlack = '#2B2B2B';
    $color[5] = $offWhite = '#E6FFFF';
    $color[6] = $black = '#000000';
    $color[7] = $white = '#FFFFFF';
    $color[8] = $fadedGold = '#EFECE0';
		$color[9] = $ltGray = '#CFCFCF';
		$color[10] = $blue = '#66CCCC';
		$color[11] = $mustard = '#AD983B';
		$color[12] = $gold = '#D4BA48';
		$color[13] = $fadedOrange = '#FFCBAF';
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
  <head> 
    <title>ShowMobile -  Hitchin' A Ride!</title> 
 
    <!-- stylesheets here //-->
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme/default/reset.css" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme/default/modules/shows.css.php" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme/default/buttons.css" />
    <style>
html, body {
  width:100%;
  height:100%;
  margin:0;
  padding:0;
  background:<?php echo $color[9]?>;
}
body {
  font: 13px Arial, Helvetica, sans-serif;
  text-align:left;
  color:#939393;
}

/*  content wrapper */
#content {
  position: relative;
  max-width:1200px;
  min-width:960px;
  width:100%;
  _width: expression(document.documentElement.clientWidth >= 1200 ? "1200px": document.documentElement.clientWidth <= 960 ? "960px" :"100%");
  margin:0 auto;
  background:<?php echo $white; ?> ;
  z-index:2;
}

/*  header  */
.header {
 /* height: 133px;*/
}

.home .header {
  height: 133px;
  background: <?php echo $color[2];?> url(/images/theme/default/bg_header_home.png) repeat-x bottom;
}

.header .logo {
  padding-top: 21px;
  float: left;
  z-index:100;
  position: relative
}

.header #header_city {
  position: relative;
  top: 46px;
  min-width: 960px;
  min-height: 89px;
  margin: auto auto;
  background: url(/images/theme/default/bg_header.png) repeat-x center bottom ;
  z-index: 1;
}

.header .menu {
  width: auto;
  /*padding-top: 20px;*/
  float: right;
}

.header_content {
  width:960px;
  margin:0 auto;
  position:relative;
  top:0;
  left:0;
}

.header li {
  float:left;
  display:inline;/* corrige le double margin ie6 */
}

.header li.first {
  margin-left:0;
}

/***  main menu ***/

.main_menu {
  float: right;
  padding-top: 6px;
  margin-right: -9px;
  white-space:nowrap;
}

.main_menu li {
  height:35px;
  margin:0 0 0 6px;
}

/*  content */
.main_content {
  background: /*#D9DADB */url(/images/theme/default/content_bg.png) no-repeat center -40px;
  top: -50px;
}

.inner_main_content {
  background: white;
  max-width: 960px;
  margin-left: auto;
  margin-right: auto;
  min-height: 400px;
  padding-left: 4px;
  padding-right: 4px;
  padding-top: 4px;
}

.inner_row_01 img, .inner_row_02 img, inner_row_03 img, inner_row_04 img {
  float: left;
  max-width: 90px;
  max-height: 90px;
}
.inner_row_01, .inner_row_02, .inner_row_03, inner_row_04 {
  float: left;
  width: expression(document.documentElement.clientWidth <= 960 ? "210px": "auto");
  
}
.band_preview {
  float: right;
  top: -20px;
}

.preview_box {
  width: expression(document.documentElement.clientWidth <= 960 ? "300px": "auto");
  float: right;
}

.local_shows_box {
  min-width: 450px;
  padding-right: 2px;
}

.last_row {
  border-botom: none;
  padding-top: 10px;
  width: expression(document.documentElement.clientWidth <= 960 ? "210px": "auto");
}

.row {
  padding-top: 10px;
  padding-bottom: 10px;
  border-bottom: 1px dotted <?php echo $color[13]; ?>;
  width: expression(document.documentElement.clientWidth <= 960 ? "210px": "auto");
}

.band_link_box {
  max-width: 160px;
}

.preview_box_content {
  width: expression(document.documentElement.clientWidth <= 960 ? "210px": "auto");
}

/*  footer  */
.footer {
  background: <?php echo $color[2]; ?>;
  min-height: 160px;
  margin-top: 56px;
}

/*  misc  */
.clear_fix:after {
  content:"\0020";
  display:block;
  height:0;
  clear:both;
  visibility:hidden;
}
.clear_fix {
  display:inline-block;
}
/* \*/ * html .clear_fix {
  height:1%;
}
.clear_fix {
  display:block;
}

.float_left {
  float: left;
}

.float_right {
  float: right;
}

/***  corners ***/
.corner_tl, .corner_tr, .corner_br, .corner_bl {
  display:block;
  width:4px;
  height:4px;
  position:absolute;
  overflow:hidden;
}

.corner_tl {
  top:0px;
  left:0px;
  background:transparent url(/images/theme/default/corners/4x4/top_left.png) no-repeat left top;
}

.corner_tr {
  top:0px;
  right:0px;
  background:transparent url(/images/theme/default/corners/4x4/top_right.png) no-repeat left top;
}

.corner_br {
  bottom:0px;
  right:0px;
  background:transparent url(/images/theme/default/corners/4x4/bottom_right.png) no-repeat left top;
}

.corner_bl {
  bottom:0px;
  left:0px;
  background:transparent url(/images/theme/default/corners/4x4/bottom_left.png) no-repeat left top;
}

.corner_tr, .corner_br {
  _right:  expression((this.offsetParent.clientWidth  % 2) ? '-1px' : 0);
}

.corner_br, .corner_bl {
  _bottom: expression((this.offsetParent.clientHeight % 2) ? '-1px' : 0);
}

.label_title_01
{
  color: #1F888E;
  font: normal 25px/22px Georgia, Times, serif;
  padding-bottom: 18px;
}

.label_title_01 a
{
  color: #1F888E;
  text-decoration:none;
  line-height:24px;
}

.label_title_02
{
  color: #989592;
  font: bold 15px Arial, Helvetica, sans-serif;
  margin-bottom:5px;
}
.label_title_03
{
  color: #1F888E;
  font: bold 15px Arial, Helvetica, sans-serif;
  margin-bottom: 5px;
}

.label_title_03 a
{
  color: #1F888E;
}

.label_title_04
{
  color: #1F888E;
  font: normal 15px Arial, Helvetica, sans-serif;
}
/***  debug ***/
.debug {
  border: 2px dashed blue;
}
.debug_r {
  border: 2px dashed red;
}
    </style>
  </head>
  <body>
    <div id="content" class="home">
<!-- START :: header //-->
      <div class="header">
        <div class="header_content">
          <div class="logo">
            <a href="/en"><img alt="ShowMobile - Hitchin' a ride!" class="png_fix" src="/images/logo_large.png" /></a>
          </div>
          <div class="menu">
              <div class="clear_fix">
                <div class="clear_fix">
                  <ul class="main_menu clear_fix">
                    <li class="first">
                      <a class="button button_menu png_fix" href="/show">
                        <span><span><span>       Shows    </span></span></span>
                      </a>
                    </li>
                    <li class="">
                      <a class="button button_menu png_fix" href="/venue">
                        <span><span><span>       Venue    </span></span></span>
                      </a>
                    </li>
                    <li class="">
                      <a class="button button_menu png_fix" href="/faq">
                        <span><span><span>       FAQ    </span></span></span>
                      </a>
                    </li>
                    <li class="">
                      <a class="button button_menu png_fix" href="/contact">
                        <span><span><span>       Contact    </span></span></span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          <!-- lang_menu //-->
        </div>
        <div id="header_city"></div>
      </div>
<!-- END :: header //-->
<!-- START :: main content //-->
      <div class="main_content">
        <div class="inner_main_content">
<!-- main content :: local shows //-->
          <div class="local_shows_box">
            <h2 class="label_title_01">     Local Shows  </h2>
            <div class="local_shows_box clear_fix float_left ">
              <table class="shows" id="shows">
                <!-- <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Country</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                  </tr>
                </thead>//-->
                <tbody>
                  <tr class="odd">
                    <td>
                      <a href="/frontend_dev.php/zone/show/id/1">1</a>
                    </td>
                    <td class="name"">Alabama</td>
                    <td class="iso_code"">AL</td>
                    <td class="country">
                      <a href="/frontend_dev.php/country/show/id/223">{COUNTRYNAME}</a>
                    </td>
                    <!-- <td>2010-06-26 16:45:46</td>
                    <td>2010-06-26 16:45:46</td> //-->
                  </tr>
                  <tr class="even">
                    <td>
                      <a href="/frontend_dev.php/zone/show/id/2">2</a>
                    </td>
                    <td class="name"">Alaska</td>
                    <td class="iso_code"">AK</td>
                    <td class="country">
                      <a href="/frontend_dev.php/country/show/id/223">{COUNTRYNAME}</a>
                    </td>
                    <!-- <td>2010-06-26 16:45:46</td>
                    <td>2010-06-26 16:45:46</td> //-->
                  </tr>
                  <tr class="odd">
                    <td>
                      <a href="/frontend_dev.php/zone/show/id/3">3</a>
                    </td>
                    <td class="name"">American Samoa</td>
                    <td class="iso_code"">AS</td>
                    <td class="country">
                      <a href="/frontend_dev.php/country/show/id/223">{COUNTRYNAME}</a>
                    </td>
                    <!-- <td>2010-06-26 16:45:46</td>
                    <td>2010-06-26 16:45:46</td> //-->
                  </tr>
                  <tr class="even">
                    <td>
                      <a href="/frontend_dev.php/zone/show/id/4">4</a>
                    </td>
                    <td class="name"">Arizona</td>
                    <td class="iso_code"">AZ</td>
                    <td class="country">
                      <a href="/frontend_dev.php/country/show/id/223">{COUNTRYNAME}</a>
                    </td>
                    <!-- <td>2010-06-26 16:45:46</td>
                    <td>2010-06-26 16:45:46</td> //-->
                  </tr>
                  <tr class="odd">
                    <td>
                      <a href="/frontend_dev.php/zone/show/id/5">5</a>
                    </td>
                    <td class="name"">Arkansas</td>
                    <td class="iso_code"">AR</td>
                    <td class="country">
                      <a href="/frontend_dev.php/country/show/id/223">{COUNTRYNAME}</a>
                    </td>
                    <!-- <td>2010-06-26 16:45:46</td>
                    <td>2010-06-26 16:45:46</td> //-->
                  </tr>
                  <tr class="even">
                    <td>
                      <a href="/frontend_dev.php/zone/show/id/6">6</a>
                    </td>
                    <td class="name"">Armed Forces Africa</td>
                    <td class="iso_code"">AF</td>
                    <td class="country">
                      <a href="/frontend_dev.php/country/show/id/223">{COUNTRYNAME}</a>
                    </td>
                    <!-- <td>2010-06-26 16:45:46</td>
                    <td>2010-06-26 16:45:46</td> //-->
                  </tr>
                  <tr class="odd">
                    <td>
                      <a href="/frontend_dev.php/zone/show/id/7">7</a>
                    </td>
                    <td class="name"">Armed Forces Americas</td>
                    <td class="iso_code"">AA</td>
                    <td class="country">
                      <a href="/frontend_dev.php/country/show/id/223">{COUNTRYNAME}</a>
                    </td>
                    <!-- <td>2010-06-26 16:45:46</td>
                    <td>2010-06-26 16:45:46</td> //-->
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
<!-- main content :: END local shows //-->
<!-- main content :: preview box //-->
          <div class="preview_box clear_fix">
<!-- preview box :: row 1 //-->
            <div class="inner_row_01 row">
              <a href="#"><img alt="Band" src="/images/sm_logo_large.png" class="preview_box_image" /></a>
              <h3 class="preview_box_title">Ignorance</h3>
              <p class="preview_box_content">blah blah blah blah blah blah blah blah blah blah blah blah blah...</p>
<!--              <strong class="mp3_link">[mp3]</strong>
              <div class="band_link_box">
                <a href="#" class="button_02">
                  <span class="corner_tl"></span>
                  <span class="corner_tr"></span>
                  <span class="corner_bl"></span>
                  <span class="corner_br"></span>
                  More Info
                </a><br />
              </div>
//-->            </div><br />
<!-- preview box :: row 2 //-->
            <div class="inner_row_02 row">
              <a href="#"><img alt="Band" src="/images/sm_logo_large.png" class="preview_box_image" /></a>
              <h3 class="preview_box_title">Ignorance</h3>
              <p class="preview_box_content">blah blah blah blah blah blah blah blah blah blah blah blah blah...</p>
              <strong class="mp3_link">[mp3]</strong>
<!--              <div class="band_link_box">
                <a href="#" class="button_02">
                  <span class="corner_tl"></span>
                  <span class="corner_tr"></span>
                  <span class="corner_bl"></span>
                  <span class="corner_br"></span>
                  More Info
                </a><br />
              </div>
//-->            </div><br />
<!-- preview box :: row 3 //-->
            <div class="inner_row_03 last_row">
              <a href="#"><img alt="Band" src="/images/sm_logo_large.png" class="preview_box_image" /></a>
              <h3 class="preview_box_title">Ignorance</h3>
              <p class="preview_box_content">blah blah blah blah blah blah blah blah blah blah blah blah blah...</p>
              <strong class="mp3_link">[mp3]</strong>
<!--              <div class="band_link_box">
                <a href="#" class="button_02">
                  <span class="corner_tl"></span>
                  <span class="corner_tr"></span>
                  <span class="corner_bl"></span>
                  <span class="corner_br"></span>
                  More Info
                </a><br />
              </div>
//-->            </div><br />
          </div>
<!-- main content :: END preview box //-->
        </div>
      </div>
<!-- END :: main content //-->
<!-- START :: footer //-->
      <div class="footer">
        &copy; 2010 showmobile
      </div>
<!-- END :: footer //-->
    </div>
  </body>