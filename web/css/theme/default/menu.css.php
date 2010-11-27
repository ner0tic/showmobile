<?php
	header("Content-Type: text/css");
  include_once ('css.scheme.php');
?>
.header li
{
  float:left;
  display:inline;/* corrige le double margin ie6 */
}

.header li.first
{
  margin-left:0;
}

/* main menu */

.main_menu
{
  float: right;
  padding-top: 6px;
  margin-right: -9px;
  white-space:nowrap;
}

.main_menu li
{
  height:35px;
  margin:0 0 0 6px;
}

/* --- DEBUT - Bouton menu --- */

.button_menu span,
.button_menu span span,
.button_menu span span span
{
  min-height:35px;
  _height:35px;
}

.button_menu span
{
  background-image:none;
}

.button_menu span span
{
  background-image:none;
}

a.button_menu span span span
{
  font-weight: normal;
  font-size:15px;
  line-height:35px;
  color:#fff;
  text-decoration:none;
  background-image:none;
  padding: 0 5px;
}

.button_menu:hover span,
.selected .button_menu span
{
  background-image: url(/images/common/header/bg_menu_hover_l.png);
}

.button_menu:hover span
{
  _background-image:none;
}

.button_menu:hover span span,
.selected .button_menu span span
{
  background-image: url(/images/common/header/bg_menu_hover_r.png);
}

.button_menu:hover span span
{
  _background-image:none;
}

.button_menu:hover span span span,
.selected .button_menu span span span
{
  background-image: url(/images/common/header/bg_menu_hover_c.png);
  color:#d2f0f2;
}

.button_menu:hover span span span
{
  _background-image:none;
}

a.button_menu
{
  _background: transparent url(/images/common/header/bg_menu_hover_ie.png) repeat-x left bottom;
}

.button_menu:hover
{
  _background-position: left top;
}

.selected .button_menu
{
  _background:none;
}

/* menu lang */

.menu_lang
{
  float: right;
}

.menu_lang li
{
  margin:0 0 0 10px;
}

.menu_lang,
.menu_lang a
{
  font-size: 10px;
  color: #fff;

}

.menu_lang a,
.menu_lang a:hover
{
  text-decoration: none;
  color: #fff;
}
.menu_lang a:hover
{
  color:#A0D756;
}

.menu_lang .selected,
.menu_lang .selected a,
.menu_lang .selected a:hover
{
  color: #a0d756;
  color: #a0d756;
}

/* menu catalogue */
.menu_catalog
{
  margin: 0 0 10px 0;
}

.menu_catalog .hr_03
{
  margin-bottom: 5px;
}

.menu_catalog li
{
  padding: 2px 0 8px;
}
