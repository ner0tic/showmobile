<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
  <head> 
    <title>ShowMobile -  Hitchin' A Ride!</title> 
 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /> 
    <meta name="title" content="ShowMobile | hitchin' a ride!" /> 
    <meta name="robots" content="index, follow, all" /> 
    <meta name="author" content="[vs]" /> 
    <meta name="keywords" content="party"/> 
 
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme/default/reset.css" /> 
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme/default/base.css.php" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme/default/layout.css.php" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme/default/common.css.php" /> 
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme/default/header.css.php" /> 
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme/default/footer.css.php" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme/default/menu.css.php" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme/default/blocks.css.php" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme/default/buttons.css.php" />
    <link rel="stylesheet" type="text/css" media="all" href="/css/theme/default/forms.css.php" />

    <link rel=""stylesheet" type="text/css" media="all" href="/css/theme/default/modules/shows.css.php" />
    
  </head> 
  <body>
      <div id="content" class="home">
          <div class="header">
            <div class="header_content">
              <div class="clear_fix">
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
              </div>
            </div>
            <div id="city_top"></div>
          </div>
          <div class="main_content png_fix">
            <div class="inner_main_content">
              <div class="local_shows_box" style="border: 3px solid green">
                <h2 class="title_01">     Local Shows  </h2>
                <?php
                  /*
                  $showmobile_shows = Doctrine::getTable('ShowmobileShow')
                  ->createQuery('a')
                  ->execute();
                  */
                ?>
                <div class="info_table local_shows_box clear_fix">
                  <table class="zones" id="zones">
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
        <?php
        /*
                      <?php foreach ($showmobile_shows as $i => $show): ?>
                      <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                        <td>
                          <a href="<?php echo url_for('show/show?id='.$show->getId()) ?>"><?php echo $show->getId() ?></a>
                        </td>
                        <td class="name""><?php echo $show->getName() ?></td>
                        <td class="cost"><?php echo $show->getCost() ?></td>
                        <td class="venue">
                          <a href="<?php echo url_for('venue/show?id='.$show->getVenueId()) ?>">{VENUENAME}</a>
                        </td>
                        <!-- <td><?php echo $show->getCreatedAt() ?></td>
                        <td><?php echo $show->getUpdatedAt() ?></td> //-->
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
        */
        ?>
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
            <div class="band_preview clear_fix float_right">
              <div class="inner_row_01">
                <a href="#"><img alt="ShowMobile" src="/images/sm_logo_large.png" /></a>
                <h3 class="preview_title"><a href="#">ShowMobile</a></h3>
                <p class="preview_content"><a href="#">Beginners or experts, gain skill with the symfony framework&#039;s authors</a></p>
                <strong class="mp3_blurb">     Starts at 450.00 &euro;  </strong>
                <div class="band_link">
                  <a class="button_02" href="#">
                    <span class="corner_tr png_fix"></span>
                    <span class="corner_tl png_fix"></span>
                    <span class="corner_bl png_fix"></span>
                    <span class="corner_br png_fix"></span>
                    More info
                  </a><br/>
                </div>
              </div>
              <div class="inner_row_02">
                <a href="#"><img alt="PHP" src="/images/sm_logo_large.png" /></a>
                <h3 class="preview_title"><a href="#">PHP</a>  </h3>
                <p class="preview_content"><a href="#">Be trained by PHP experts and be ready to develop your first web applications</a>  </p>
                <strong class="mpe_blurb">Starts at 70.00 &euro;  </strong>
                <div class="band_link">
                  <a class="button_02" href="#">
                    <span class="corner_tr png_fix"></span>
                    <span class="corner_tl png_fix"></span>
                    <span class="corner_bl png_fix"></span>
                    <span class="corner_br png_fix"></span>
                    More info
                  </a><br/>
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>
      <div class="footer png_fix">
        &copy; 2010 showmobile
      </div>
  </body> 
</html> 