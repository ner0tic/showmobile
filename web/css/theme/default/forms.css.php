<?php
	header("Content-Type: text/css");
  include_once ('css.scheme.php');
?>
legend
{
  *margin-left:-8px;
  color:#939393;
}

label,
.text_medium,
.text_little,
.text_big,
.checkbox_row input,
.radio_row,
.label,
.radio_group,
.radio_group label,
.radio_group input,
.you
{
  float:left;
}

.txt_medium,
.text_little,
.text_big
{
  padding:2px;
  color:#86b123;
  font-size:13px;
}


label
{
  font:normal 13px Arial, Helvetica, sans-serif;
  color:#939393;
  text-align:right;
  padding-right:7px;
  padding-top:5px;
  display:block;
}
.txt_medium
{
  width:209px;
  border:1px solid #bababa;
}

.text_little
{
  width:102px;
  border:1px solid #bababa;
}
.text_big
{
  width:440px;
}


textarea.txt_medium
{
  height:83px;
}


textarea.text_big
{
  float:none;
  height:92px;
}

.checkbox_row
{
 padding-left:122px;
}

.checkbox_row input
{
  position:relative;
  top:2px;
  *top:-2px;
}

.vat_explanation
{
  padding-left:122px;
  font-size:11px;
  color:#939393;
}

.action
{
  text-align: right;
}

.forgot_link
{
  font-weight:bold;
  font-size:11px;
  display:block;
  text-align: right;
}

/**
  * styles for Safari
**/
html[xmlns*=""] body:last-child .action
{
  margin-top: 12px;
}

/**
  * styles for Firefox 2.0
**/
.action, x:-moz-any-link
{
  margin-top: 12px;
}
/**
  * restore styles for Firefox 3.0 and newer
**/
.action, x:-moz-any-link, x:default
{
  margin-top: 0;
}

/**
  * beginning form_01
**/

.form_01
{
  padding:5px 0 10px;
}

.layout_02 .form_01
{
  width: 450px;
}

.form_01 .title_02
{
  margin-bottom:0;
  padding-bottom:35px;
}

.form_01 .is_error .title_02
{
  padding-bottom:10px;
}

.form_01 .title_03
{
  margin-bottom:0;
}

.form_01 .form_row
{
  padding:10px 0;
}

.form_01 label,
.form_02 label,
.form_03 .identification label,
.form_04 label
{
  width:115px;
}

.form_02 label
{
  padding-top:2px;
}

.form_01 .checkbox_row label
{
  width:auto;
  text-align:left;
  vertical-align:3px;
  padding-left:7px;
  *padding-left:5px;
  padding-top:0;
}

.form_01 .forgot_link
{
  padding-right:113px;
  margin-bottom:10px;
}

.form_01 .action
{
  padding-right:113px;
  margin-bottom:16px;
}

/*~~~~~~~~~~Form_02 ~~~~~~~~*/

.form_02 fieldset
{
  padding-bottom:25px;
}

.layout_02 .form_02 fieldset
{
  float: left;
  width: 335px;
}

.form_02 fieldset.first
{
  margin-top:25px;
}

.form_02 .is_error
{
  padding-bottom:15px;
}

.form_02 .last
{
  padding-bottom:5px;
}

.form_02 legend
{
  font-weight:bold;
  padding-left:122px;
  _padding-left: 125px;
}

.form_02 .form_row
{
  padding:5px 0 15px;
}

.form_02 .action
{
  padding-right:113px;
  margin-bottom:30px;
}

/* form_03 */

.form_03 .title_02
{
  margin-bottom:35px;
  margin-top:-20px;
}

.form_03 .label,
.you
{
  width:245px;
  padding-right:10px;
  margin-top:-4px;
  *margin-top:0;
}

.form_03 div.identification
{
  padding:10px 0;
}

.form_03 .label
{
  text-align:right;
}

.form_03 .title_03
{
  margin-bottom:20px;
}

.form_03 .form_row
{
  padding:16px 0;
}

.form_03 .identification label
{
  text-align:right;
  padding-top:4px;
}

.form_03 legend
{
  visibility:hidden;
  font-size:0;
}

.form_03 label
{
  padding-top:0;
  margin-top:-2px;
  *margin-top:2px;
  text-align:left;
}

.form_03 .radio_row,
.radio_group input
{
  margin:0 2px 0 8px;
  *margin:0 0 0 3px;;
}

.radio_group label
{
  padding-left:8px;
  width:146px;
}

.fields_container
{
  padding-bottom:20px;
}

.radio_group
{
  padding-top:3px;
}

.radio_group .radio_line
{
  padding-bottom:16px;
}

.radio_group .last_radio
{
  padding-bottom:0;
}

.form_03 .action
{
  padding:none;
  text-align:center;
  margin-bottom:30px;
}

.form_03 .remarks
{
  margin-bottom:8px;
}

.form_03 .help_us
{
  margin-top:-16px;
}

.form_03 textarea.text_big
{
  margin-top:3px;
  *margin-top:-13px;
}

.form_03 .appreciation
{
  margin-bottom:16px;
}
/*~~~~~ form produit ~~~~~~~~*/

.form_product
{
  margin-top: 20px;
}

.form_product .form_row
{
  padding: 0;
}

.form_product label
{
  padding: 5px 0 3px;
  float: none;
  text-align: left;
}

.form_product select
{
  width: 100%;
  font-size: 11px;
}

/*  form_04*/
.form_04
{
  padding:0 0 20px;
}

.form_04 .form_row
{
  padding: 5px 0;
}

.form_04 label
{
  text-align: left;
}

.form_04 .checkbox_row
{
 padding-left:0;
}

.form_04 .checkbox_row label
{
  vertical-align:3px;
  padding-top:0;
}

.form_04 .action
{
  padding:0;
  text-align:center;
  margin: 0;
}

/* DEBUT - STYLE FORM COUPON BIG LAYOUT */
#attendees_list .form_row
{
  padding: 5px 0;
}
#attendees_list .checkbox_row
{
  padding-left: 0;
}
#attendees_list label
{
  padding-top: 0;
}
#attendees_list input
{
  float: right;
}

/* FIN - STYLE FORM COUPON BIG LAYOUT */

/* style pour les erreurs */

.error_msg,
.error_list,
.error_content,
.error label,
.error_list label,
.error div
{
  font:normal 13px Arial, Helvetica, sans-serif;
  color:#d649ad;
}

div.error_content
{
  color: #802b66;
}

.error_msg
{
  margin-bottom: 10px;
}

.form_01 .error
{
  padding-bottom:0;
}

.form_02 .error
{
  padding-bottom:5px;
}

.error_list label
{
  float:none;
  width:auto;
  text-align:left;
}

ul.error_list
{
  margin-left:20px;
}
.error_list li
{
  list-style-type:disc;
}

.error .txt_medium,
.error .txt_little,
.error .txt_big,
.error .text_big
{
  border:1px solid #d649ad;
}

.form_03 .error_content
{
  padding-left:265px;
}

.error_content,
.form_03 .identification .error_content
{
  padding-top:3px;
  padding-left:122px;
}

#attendees_list .error_content
{
  clear: right;
  float: right;
}


/* début des styles pour le questionnaire post formation */
.question_form .text_field .error_content
{
  padding-left: 0;
}
.question_form .text_field label
{
  /*margin-top:-16px;*/
  float: none;
  display: block;
}
.question_form .text_field textarea
{
  margin-top:0px;
}
.question_form .error_list a,
.question_form .error_list a:hover
{
  display: inline;
  text-decoration: none;
  font-weight: normal;
  color: #D649AD;
  font-size: 13px;
  padding: 0;
}

.question_form fieldset,
.question_row
{
  margin-bottom: 10px;
}
.question_form legend.title_03
{
  margin-bottom: 4px;
  font-size: 15px;
  visibility: visible;
}
.question_row .question
{
  float: left;
  width: 230px;
}
.question_row .question label
{
  display: inline;
  color: #939393;
  text-align: left;
  width: auto;
}
.question_row .answer
{
  float: left;
  width: 220px;
}
.error .question,
.error .question label
{
  color: #D649AD;
}
.question_row .answer textarea
{
  float: right;
}
.question_row .notation_list
{

  float: right;
}
.question_row .notation_list li
{
  float:left;
}
.question_row .notation_list li label
{

  padding: 0;
  display: inline;
  text-align: left;
  float: none;
  width: auto;
  padding-right: 4px;
}
.question_row .notation_list li input
{
  vertical-align: -3px;
}
.question_row .error_content
{
  padding-left: 0;
  text-align: right;
}
.action button
{
  *margin-right: 4px;
}
/* fin des styles pour le questionnaire post formation */
