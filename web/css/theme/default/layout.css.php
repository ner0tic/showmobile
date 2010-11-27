<?php
	header("Content-Type: text/css");
  include_once ('css.scheme.php');
?>
#content
{
  position: relative;
  max-width:1200px;
  min-width:960px;
  width:100%;
  _width: expression(document.documentElement.clientWidth >= 1200 ? "1200px": document.documentElement.clientWidth <= 960 ? "960px" :"100%");
  margin:0 auto;
}

.local_shows_box
{
  
}

.column,
.column_01,
.column_02,
.column_03,
.column_04,
.column_05,
.inner_row_01,
.inner_row_02,
.inner_row_03,
.inner_row_04
{
  float:left;
}

.column_02 .inner_box_column
{
  min-height: 450px;
  _height: 450px;
}

.band_preview .inner_row_01,
.band_preview .inner_row_03
{
  width: 260px;
}
.band_preview .inner_row_02
{
  width: 280px;
}
.band_preview .inner_row_01,
.band_preview .inner_row_02,
.band_preview .inner_row_03
{
  float: none;
  vertical-align: top;
  padding: 10px 20px;
}

.box_columns
{
  width:960px;
  margin: 0 auto;
  background-color: #fff;
  padding-top: 25px;
}

.box_columns .column_01
{
  width: 205px;
  padding: 0 25px;
}

.box_columns .column_02
{
  width: 450px;
}

.layout_02 .box_columns .column_02
{
  width: 670px;
  padding-left: 25px;
}

.box_columns .column_03
{
  width: 205px;
  padding: 0 25px;
}

/**
  * colonnage pour le paiement
  */
.payment_box_columns
{
  margin-top: 30px;
}

.payment_box_columns .inner_row_01
{
  width: 220px;
  padding: 0 5px 0 0;
}

.payment_box_columns .inner_row_02
{
  width: 220px;
  padding: 0 0 0 5px;
}

/**
  * colonnage pour la présentation d'une formation
  */
.current_training_layout
{
  margin-bottom: 27px;
}
.current_training_layout .inner_row_01
{
  width: 360px;
  padding: 0;
}
.current_training_layout .inner_row_02
{
  width: 90px;
  padding: 0;
}

/**
  * list product
**/
.product_list .inner_row_01
{
  width: 60px;
  padding: 0;
  margin-right: 10px;
}

.product_list .inner_row_02
{
  width: 380px;
}

/**
  * product
**/
.product .inner_row_01
{
  width: 68px;
  padding: 0;
  margin-right: 10px;
}

.product .inner_row_02
{
  width: 372px;
}

/* event list */
.event_list_02 .infos,
.event_list_02 .actions
{
  float: left;
}
.event_list_02 .inner_row_01
{
  width: 119px;
  padding: 3px 0 1px 3px;
}

.event_list_02 .infos
{
  padding: 3px 0 1px 5px;
  width: 254px;
  _width: 248px;
}

.event_list_02 .inner_row_02,
.event_list_02 .actions
{
  width: 76px;
  padding: 4px 0 0 4px;
}

/* BEGIN layout for the trainer block */
.trainer_block
{
  padding: 0 0 20px;
}
.trainer_block .illustration_column,
.trainer_block .description_column
{
  float: left;
}
.trainer_block .illustration_column
{
  display: inline;
  padding: 8px 6px;
  width: 95px;
  background-color: #b6e44b;
  margin-right: 18px;
}
.trainer_block .description_column
{
  width: 325px;
}
/* END layout for the trainer block */
