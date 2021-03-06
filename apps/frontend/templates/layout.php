<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>ShowMobile -  Hitchin' A Ride!</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <div class="content">
          <h1>
	    <a href="<?php echo url_for('event/index') ?>">
              <img src="/images/logo.jpg" alt="ShowMobile - Hitchin' A Ride!'" />
            </a>
	  </h1>
 
          <div id="sub_header">
            <div class="post">
              <h2></h2>
              <div>
                <a href="<?php echo url_for('event/new') ?>">Add Event</a>
              </div>
            </div>
 
            <div class="search-wrapper">
              <h2>Find a ride</h2>
              <form action="" method="get">
                <input type="text" name="query"
                  id="search_query" />
                <input type="submit" value="search" />
                <div class="help">
                  Enter some keywords (city, country, band, ...)
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <?php if ($sf_user->hasFlash('notice')): ?>
          <div class="flash_notice">
            <?php echo $sf_user->getFlash('notice') ?>
          </div>
        <?php endif ?>
 
        <?php if ($sf_user->hasFlash('error')): ?>
          <div class="flash_error">
            <?php echo $sf_user->getFlash('error') ?>
          </div>
        <?php endif ?>
 
        <div class="content">
          <?php echo $sf_content ?>
        </div>
      </div>
 
      <div id="footer">
        <div class="content">
          <span class="symfony">
            <img src="/images/showmobile-mini.png" />
            powered by <a href="http://www.symfony-project.org/">
            <img src="/images/symfony.gif" alt="symfony framework" />
            </a>
            <?php //include_component('language', 'language') ?>
          </span>
          <ul>
            <li><a href="">About Showmobile</a></li>
            <li class="feed"><a href="">Full feed</a></li>
            <li><a href="">Showmobile API</a></li>
            <li class="last"><a href="">Bands</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>

