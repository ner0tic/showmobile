<?php
    include_once 'scheme.css.php';
    header("Content-Type: text/css");
    
    //$scheme = isset($_GET['c']) ? $_GET['c'] : $dkOrangeStripe;
?>
.data-table h2 {
  line-height: 32px;
  color: <?= $black ?>;
}
.data-table h3 {
    font-style: italic;
    font-color: <?= $ltGray ?>;
}
.data-table:first-child {
    border-bottom: 0;
}
.data-table tbody, .data-table tbody td {
    width: 390px;
}
.events
{
  margin: 0 auto;
}

.events tr.even
{
  background-color: #f3fafc;
}

.events tr.odd
{
}

.events tr:hover
{
  background-color: #fff;
}

.events td
{
  padding: 12px 15px;
  border-bottom: 1px dotted #999;
}

.events td.iso_code,
.events td.name
{
  border-right: 1px dotted #999;
}

.events .name
{
  color: #524F46;
  font-weight: bold;
  width: 30%;
}

.events .country
{
  color: #d2813f;
  width: 40%;
}

.events .iso_code
{
  padding: 0;
  color: #524F46;
  width: 30%;
  text-align: center;
}

.events .iso_code a
{
  padding: 12px 15px;
  display: block;
  text-decoration: none;
}

.events .iso_code a:hover
{
  text-decoration: underline;
}

.more_events
{
  text-align: right;
  text-transform: uppercase;
  font-size: 85%;
  margin: 5px 15px 15px;
  clear: both;
}

.more_events a
{
  color: #176f94;
  text-decoration: none;
  font-weight: bold;
  font-size: 130%;
}

.more_events a:hover
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
