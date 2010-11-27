<?php
	header("Content-Type: text/css");
  include_once ('../css.scheme.php');
?>
.category .feed
{
  margin: 4px 15px;
  float: right;
  line-height: 25px;
  background-band: left center;
}

.category .feed a
{
  color: #fff;
  text-decoration: none;
  text-transform: uppercase;
}
.shows, #shows
{
 width: expression(document.documentElement.clientWidth <= 960 ? "450px": "49%");
 margin: 0 auto;
}

.shows tr.even
{
  background-color: <?php echo $color[8];?>;
}

.shows tr.odd
{
}

.shows tr:hover
{
  background-color: #fff;
}

.shows td
{
  padding: 12px 15px;
  border-bottom: 1px dotted #999;
}

.shows td.band,
.shows td.starttime
{
  border-right: 1px dotted #999;
}

.shows .starttime
{
  color: #524F46;
  font-weight: bold;
  width: 30%;
}

.shows .venue
{
  color: #d2813f;
  width: 30%;
}

.shows .band
{
  padding: 0;
  color: #524F46;
  width: 40%;
}

.shows .band a
{
  padding: 12px 15px;
  display: block;
  text-decoration: none;
}

.shows .band a:hover
{
  text-decoration: underline;
}

.more_shows
{
  text-align: right;
  text-transform: uppercase;
  font-size: 85%;
  margin: 5px 15px 15px;
  clear: both;
}

.more_shows a
{
  color: #176f94;
  text-decoration: none;
  font-weight: bold;
  font-size: 130%;
}

.more_shows a:hover
{
  color: #176f94;
  text-decoration: underline;
}

.pagination_desc
{
  margin-left: 15px;
  margin-top: 10px;
  font-style: italic;
  color: #828f95;
}

.pagination_desc strong
{
  color: #176f94;
}

.pagination
{
  margin-top: 10px;
  float: right;
  margin-right: 10px;
  color: #176f94;
  font-size: 110%;
  font-weight: bold;
}

.pagination a
{
  margin: 0 1px;
  text-decoration: none;
  color: #828f95;
  font-size: 75%;
  vertical-align: 1px;
  font-weight: normal;
}

.pagination a:hover
{
  text-decoration: underline;
}

.pagination img
{
  vertical-align: -2px;
}
