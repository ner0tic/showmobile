<?php
	header("Content-Type: text/css");
  include_once ('css.scheme.php');
?>
table,
th,
td,
tr
{
  border:none;
}
a
{
  color: #86b123;
  text-decoration: none;
  font-weight: bold;
}
a:hover
{
  color: #86b123;
  text-decoration: underline;
}
p
{
  color: #939393;
}
p a
{
  font-weight: normal;
}
hr
{
  visibility: hidden;
  margin: 0;
  _display: none;
}

/**
  * styles pour les titres
**/
.title_01
{
  color: #1F888E;
  font: normal 25px/22px Georgia, Times, serif;
  padding-bottom: 18px;
}

.title_01 a
{
  color: #1F888E;
  text-decoration:none;
  line-height:24px;
}

.title_02
{
  color: #989592;
  font: bold 15px Arial, Helvetica, sans-serif;
  margin-bottom:5px;
}
.title_03
{
  color: #1F888E;
  font: bold 15px Arial, Helvetica, sans-serif;
  margin-bottom: 5px;
}

.title_03 a
{
  color: #1F888E;
}

.title_04
{
  color: #1F888E;
  font: normal 15px Arial, Helvetica, sans-serif;
}

.faq_configurate_item .title_04
{
  margin:0 0 10px 0;
}

.column_03 .title_04
{
  margin:0;
  font-weight: bold;
  font-size: 13px;
}

.title_05
{
  color: #1F888E;
  font: bold 16px Arial, Helvetica, sans-serif;
  margin: 30px 0 5px;
}

.title_06
{
  color: #1F888E;
  font: normal 16px Arial, Helvetica, sans-serif;
  font-family:Georgia, "Times New Roman", Times, serif;
  font-size:22px;
  background:transparent url(/images/common/background/fil_hor_8_1.gif) repeat-x left bottom;
  padding:0 0 10px 0;
  margin-bottom: 5px;
}

.title_product_list,
.title_product_list a,
.title_product_list a:hover
{
  color: #1F888E;
  font: normal 19px Arial, Helvetica, sans-serif;
  text-decoration: none;
}
.title_product_list a span
{
  color: #939393;
  font-size: 16px;
}
.title_product,
.title_faq
{
  color: #1F888E;
  font: bold 23px/30px Arial, Helvetica, sans-serif;
}

.sub_title
{
  font-size:18px;
  line-height:20px;
}

/**
  * Style pour les hr
**/
.hr_01
{
  background: transparent url(/images/common/background/fil_hor_8_1.gif) repeat-x left bottom;
  height: 1px;
  margin: 0 0 16px;
}

.hr_02,
.hr_04
{
  background: transparent url(/images/common/background/fil_hor_8_2.gif) repeat-x left bottom;
  height: 2px;
}

.hr_02
{
  margin: 0 0 16px;
}

.hr_03
{
  background: transparent url(/images/common/background/fil_hor_4_1.gif) repeat-x left bottom;
  margin-bottom: 5px
}

div.hr_03
{
  height: 1px;
  margin-bottom:10px;
}

.hr_05
{
  background: transparent url(/images/common/background/fil_hor_4_1.gif) repeat-x left bottom;
  margin: 15px 0 12px;
  height: 1px;
}

.main_content
{
  background: /*#D9DADB */url(/images/theme/default/content_bg.png) no-repeat center top;
}

.inner_main_content
{
  background: white;
  max-width: 960px;
  margin-left: auto;
  margin-right: auto;
}

.box_columns
{
  background-color: #fff;
}

.link_01
{
  text-decoration: none;
  padding-right: 16px;
  background:transparent url(/images/common/picto/puce_link.gif) no-repeat right 4px;
}
.link_02
{
  text-decoration: none;
  padding-right: 17px;
  font-size: 12px;
  background:transparent url(/images/common/picto/puce_download.gif) no-repeat right 4px;
}
.intro
{
  font-size: 21px;
  color: #1F888E;
  padding-bottom: 16px;
}
/**
  * Style pour la barre de progression du tunnel de commande
  */
.current_step li
{
  font-weight: bold;
  font-size: 14px;
  color: #E2E2E2;
  height: 36px;
  float: left;
  padding: 8px 10px 8px 25px;
  background: transparent url(/images/common/picto/inactive_step.png) no-repeat 1px 50%;
  word-spacing: -2px;
}
.current_step li.selected
{
  color: #9ac733;
  background: transparent url(/images/common/picto/active_step.png) no-repeat 1px 50%;
}

.current_step .step_1,
.current_step .step_2,
.current_step .step_3,
.current_step .step_4,
.current_step .step_5
{
  line-height: 36px;
}
.current_step .step_5
{
  padding-right: 0;
}

/**
  * Styles généraux pour les numéros de téléphone et les offres spéciale.
**/
.phone_number,
.special_offer
{
  color: #238D82;
}
.phone_number
{
  font: bold 13px/15px Georgia, Times, serif;
  padding-bottom: 4px;
  display: block;
}
.special_offer
{
  font: bold 14px/15px Arial, Helvetica, sans-serif;
  padding-bottom: 3px;
  display: block;
}

/**
  * Mise en forme du contenu du bloc d'action des utilisateurs
**/
.deconnect
{
  display:block;
  margin:0 0 10px 0;
  clear:both;
}
/**
  * Mise en forme du contenu du fichier includes/common/trainer_abstract.php
**/
.trainer_legal_abstract
{
  padding: 0 0 12px;
}
.trainer_legal_abstract dt,
.trainer_legal_abstract dd
{
  display: block
}
.trainer_legal_abstract dt
{
  font-size: 15px;
  color: #BFBFBF;
}
.trainer_legal_abstract dd
{
  color: #939393;
  margin-bottom: 13px;
}

/**
  * Mise en forme du contenu du fichier includes/common/intra_training.php
**/
.intra_training
{
  background: #b2d823 url(/images/common/background/skyscraper.jpg) no-repeat left bottom;
  width: 177px;
  position: relative;
  padding: 7px 14px 15px;
  margin: 16px 0;
}
.intra_training_title,
.intra_training .link_01
{
  color: #FFFFFF;
  font-size: 18px;
  line-height: 18px;
  font-weight: bold;
  margin-bottom: 5px;
}
.intra_training_abstract
{
  line-height: 14px;
  color: #1D8694;
  margin-bottom: 18px;
  word-spacing: 0;
  font-weight: bold;
}
.intra_training .link_01
{
  padding-right: 24px;
  background-image: url(/images/common/picto/intra_trainer_arrow.png);
  background-position: right 3px;
  background-repeat:none;
}
.intra_training .link_01:hover
{
  color: #FFFFFF;
}


/**
  * Mise en forme du contenu du fichier includes/common/intra_training.php
**/
.learn_more
{
  width: 185px;
  position: relative;
  margin: 16px 0;
}


/**
  * Mise en forme du contenu du fichier includes/common/become_partner.php
**/
.become_partner
{
  margin: 16px 0;
}

/**
  * Mise en forme du contenu du fichier includes/common/all_formation.php
**/
.all_information_title
{
  margin-bottom: 2px;
}
.all_information .phone_number
{
  color: #1f888e;
  font-size: 16px;
  margin-bottom: 5px;
}
.all_information_abstract
{
  margin-bottom:10px;
  font-size: 12px;
  word-spacing: 0;
}
.mailing_link
{
  text-decoration: none;
}

/**
  * Mise en forme du contenu du bloc nous contacter de la page contact
**/

.sensio_address
{
  margin-bottom:4px;
}

/**
  * Mise en forme de la colonne de gauche page contact
**/
.spacer
{
  height:20px;
}

/**
  * Mise en forme du contenu du fichier includes/common/training_order.php
**/
.training_order
{
  background-color: #ebf7f6;
  padding: 14px;
  margin-bottom: 14px;
}
.training_order .chapo_box_columns
{
  margin-bottom: 25px;
  font-size: 16px;
}
.training_order .chapo_box_columns .inner_column_01,
.training_order .chapo_box_columns .inner_column_02
{
  padding: 0;
  width: 211px;
}
.layout_02 .training_order .chapo_box_columns .inner_column_01,
.layout_02 .training_order .chapo_box_columns .inner_column_02
{
  width: 300px;
}
.training_order .chapo_box_columns .inner_column_01
{
  text-align: left;
}
.training_order .chapo_box_columns .inner_column_02
{
  text-align: right;
}
.training_order .chapo_box_columns .inner_column_02 p
{
  font-weight: bold;
}
.training_order .participant_list,
.training_order table
{
  width: 100%;
}
.training_order table thead
{
  display: none;
}
.training_order .participant_list thead
{
  display: table-header-group;
}
.training_order table tfoot
{
  margin-top: 20px;
}
.training_order .participant_list tfoot
{
  margin-top: 0;
}
.training_order .order_title
{
  color: #939393;
  font: bold 13px Arial, Helvetica, sans-serif;
  padding-bottom: 6px;
  background: transparent url(/images/common/background/fil_hor_8_1.gif) repeat-x left bottom;
}

.training_order table td,
.training_order table th
{
  font: normal 15px Arial, Helvetica, sans-serif;
  vertical-align: middle;
  height: 30px;
  background: transparent url(/images/common/background/fil_hor_8_1.gif) repeat-x left bottom;
  color: #939393;
  text-align: left;
  text-indent: 5px;
}

.training_order table tfoot .last
{
  background: none;
  padding-top: 12px;
}

.training_order table .best_price
{
  color: red;
  font-weight: bold;
  font-size: 16px;
}

.training_order table .highlight_row
{
  background: #ffffee;
}

.training_order table td.cell_number
{
  text-align: right;
}

/*.training_order .participant_list tbody td a
{
  color: #939393;
  font-weight: normal;
}
.training_order .participant_list tbody td.price
{
  text-align: right;
  font-weight: bold;
}
.training_order .vat_price,
.training_order .total_price
{
  text-align: right;
}
.training_order .vat_price
{
  padding-top: 7px;
  color: #939393;
  padding-bottom: 11px;
}*/
.training_order .total_price
{
  font-size: 16px;
  font-weight: bold;
  color: #1f888e;
}

.training_order #payment_means td
{
  padding: 5px 0;
}

.training_order #payment_means .card_chooser
{
  margin-top: 2px;
}

.training_order #payment_means .card_chooser li
{
  margin-bottom: 0;
}

/**
  * Mise en forme du contenu de la colonne centrale du
  * récapitulatif de formation
**/
.order_abstract .button_01
{
  float: left;
}

.order_abstract p
{
  margin: 12px 0 25px;
}

.payment_description
{
  width: 200px;
}
.payment_chooser
{
  margin: 0 0 25px;
}
.payment_chooser li
{
  line-height: 23px;
}
.card_chooser
{
  margin-top: 10px;
}
.card_chooser li
{
  display: inline;
  padding-right: 3px;
  margin-bottom: 30px;
}
.card_chooser li a img
{
  border: 1px solid #a6d141;
}

/**
  * Mise en forme du contenu de la troisième colonne du
  * récapitulatif de formation
**/
.current_training
{
  background: transparent url(/images/common/background/fil_hori_4_1.gif) repeat-x left top;
  margin-top: 12px;
}
.training_name
{
  margin: 12px 0;
  color: #1f888e;
  font-size: 15px;
}
.training_date,
.training_location,
.training_name .training_language
{
  color: #939393;
  font-size: 14px;
}
.training_date,
.training_location
{
  font-weight: bold;
  line-height: 15px;
}

.training_location
{
  margin-bottom: 12px;
}
.training_details
{
  font-size: 14px;
  color: #bfbfbf;
  margin-bottom:10px;
}

.training_details strong
{
  font-size: 13px;
  color: #939393;
}


/**
  * Mise en forme du contenu du fichier includes/common/download_block.php
**/
.links_list,
.document_download
{
  margin:0 0 5px 0;
}

ol.links_list
{
  margin-left: 30px;
}

ol.links_list li
{
  list-style: decimal;
  color: #86b123;
  font-weight: bold;
}

.links_list li,
.document_download li
{
  padding: 0 0 6px 0;
}
/**
  * Mise en forme du contenu de la page de confirmation de réservation
 **/
.success_message
{
  font: normal 17px/21px Georgia, Times, serif;
  margin-bottom: 12px;
}

.order_abstract .success_message
{
  margin-bottom: 12px;
}

.order_summary
{
  margin-bottom: 15px;
}

/**
 *  style pour la page de paiement par virement
 **/
.order_reference
{
  color: #1f888e;
}
.rib
{
  margin: 10px 0 10px;
}

/**
 *  style pour la page de paiement par chèque
 **/
.address
{
  font-size: 15px;
  margin: 10px 0;
  padding-left: 30px;
}

/**
 *  style pour la page catalogue et page produit (factorisation)
 **/
.product_list,
.product,
.faq
{
  padding-bottom: 10px;
}

.product
{
  padding: 5px 0 20px
}

.product_box .title_01,
.product_box p
{
  font-size: 22px;
	line-height: 16px;
}
.product_box p
{
  padding-bottom:10px;
	font-size:15px;
}
.product_list_box .hr_01
{
  margin: 0 0 10px;
}

.product_list p,
.product p,
.faq p,
.product_list p a,
.product p a,
.faq p a,
.product_list p a:hover,
.product p a:hover,
.faq p a:hover
{
  color: #939393;
  text-decoration: none;
}

/**
 *  style pour la page de présentation d'une formation
 **/
.current_training_layout
{
  padding-top: 20px;
}
.current_training_layout .training_name
{
  font-size: 21px;
  margin: 0;
}
.current_training_layout .training_language,
.current_training_layout .training_pricing
{
  font-size: 14px;
}

.current_training_layout .training_baseline
{
  font-weight: bold;
  font-size: 17px;
  line-height: 20px;
  color: #8c8b8b;
  padding-right: 10px;
  margin: 0;
  word-spacing: 0;
}
.current_training_layout .training_event
{
  font-weight: bold;
  font-size: 16px;
  color: #C1C1C1;
  margin: 0 0 11px;
}
.current_training_layout .training_pricing
{
  color: #bfbfbf;
  margin: 0;
}
.current_training_layout .training_pricing strong
{
  color: #939393;
}

.formation_intro
{
  color:#1F888E;
  font-size:18px;
  margin-bottom: 34px;
}
.choice_description
{
  font-size: 15px;
  margin-bottom: 12px;
  padding-right: 50px;
}

/* event list */
.event_list,
.event_list_02
{
  margin: 10px 0;
}

.event_list li
{
  font-weight: bold;
  font-size: 12px;
  word-spacing: 0;
  line-height: 13px;
  color: #86b123;
  padding: 4px 8px;
}

.event_list_02 li
{
  font-weight: bold;
  font-size: 12px;
  word-spacing: 0;
  line-height: 13px;
  color: #86b123;
}

.event_list .link_01,
.event_list .link_01:hover
{
  display: block;
  background: transparent url(/images/common/picto/event_arrow.png) no-repeat right 50%;
  text-decoration: none;
}
.event_list li span,
.event_list_02 li span
{
  display: block;
  font-weight: normal;
  color: #939393;
}
.event_list .row_01,
.event_list_02 .row_01
{
  background-color: #EBF7F6;
}
.event_list .row_02,
.event_list_02 .row_02
{
  background-color: #FFFFFF;
}

.event_list_02 .button_02,
.event_list_02 .button_03
{
  margin-top: 2px;
  padding: 7px 12px;
}



/* --- DEBUT - Mes commandes de formation --- */
.table_my_orders
{
  width:100%;
  color:#939393;
}

.table_my_orders th,
.table_my_orders td
{
  padding:5px 10px 5px 10px;
  background: transparent url(/images/common/background/fil_hor_4_1.gif) repeat-x left bottom;
}

.table_my_orders .alternate_1 td,
.table_my_orders .alternate_2 td
{
  cursor:pointer;
}

.table_my_orders .alternate_1 td
{
  background-color:#ebf7f6;
}

.table_my_orders .alternate_2 td
{
  background-color:#e6f2f1;
}

.table_my_orders th
{
  color:#939393;
  font-weight:bold;
  padding:10px 0 12px 0;
}

.table_my_orders td
{
  padding:5px 10px 5px 10px;
}

.table_my_orders th.training_cell,
.table_my_orders td.training_cell
{
  text-align:left;
  width:320px;
}

.table_my_orders th.date_cell,
.table_my_orders td.date_cell
{
  text-align:right;
  font-size:12px;
  word-spacing: 0;
  color:#939393;
  width:130px;
  font-weight:normal;
}

.table_my_orders td.training_cell span
{
  color:#1f888e;
}

.table_my_orders td.training_cell span a
{
  color:#1f888e;
}

/* --- FIN - Mes commandes de formation --- */


/* --- DEBUT - Listes de contenu --- */
.content_list
{
  font-size:15px;
}

.content_list li
{
  padding:0 0 0 16px;
  margin:0 0 10px 0;
  background: transparent url(/images/common/bullet_content_list.gif) no-repeat left 5px;
}

.content_list li li
{
  margin:0 0 2px 0;
}

/* --- FIN - Listes de contenu --- */

.product_item
{
  margin:0 0 14px 0;
}

.special_info
{
  margin:0 0 10px 0;
}

/**
  * Block Program
**/
.program
{
  position: relative;
}

.program .link_02
{
  position: absolute;
  top: 4px;
  *top: 8px;
  right: 2px;
}

/* faq page */
.faq_configurate_item
{
  margin:10px 0 0 0;
}

.faq_configurate_item p
{
  margin:0 0 10px 0;
}

/* faq page */
.faq_content,
.sur_mesure_content,
.strong_points_content
{
  margin:10px 0 0 0;
}

.sur_mesure_content
{
  margin:20px 0 30px;
}

.sur_mesure_content p,
.strong_points_content p
{
  margin:0 0 10px 0;
}

/* error page */

.error_page p,
.error_page li
{
  padding-bottom: 10px;

}

.error_page p
{
  font-size: 14px;
}

.error_page ul
{
  margin-top: 30px;
}

.error_page .first
{
  margin-top: -16px;
}

/* BEGIN styles for the trainer block */
.formation_trainer_society
{
  padding: 6px 0 0;
  font: normal 16px Arial, Helvetica, sans-serif;
  color: #1F888E;
}
.formation_trainer_society img
{
  vertical-align: -3px;
  margin-left: 18px;
}
.trainer_block .illustration_column p
{
  margin: 5px 0 0;
  text-align: center;
  font: bold 13px Arial, Helvetica, sans-serif;
  color: #1F888E;
}
.trainer_block .description_column .trainer_information
{
  font: bold 14px/18px Arial, Helvetica, sans-serif;
  color: #1F888E;
  margin-bottom: 3px;
}
.trainer_block .description_column p
{
  margin: 0;
}
.trainer_block .description_column .trainer_information .society
{
  text-transform: uppercase;
}

.short_description {
  font-weight: bold;
  margin-bottom: 15px;
  font-size: 16px;
}
/* END layout for the trainer block */

.list_actions li
{
  display: inline;
  margin-right: 15px;
}

.session_list_detailed
{
  width: 100%;
  margin-bottom: 20px;
}

.session_list_detailed td, .session_list_detailed th
{
  padding: 5px;
}

.session_list_detailed th
{
  font-weight: bold;
}

.session_list_detailed .row_01
{
  background-color: #EBF7F6;
}

.session_list_detailed .row_02
{
  background-color: #FFFFFF;
}

.session_list_detailed .button_02
{
  margin-top: 0;
}
.inner_row_01 img, .inner_row_02 img, inner_row_03 img, inner_row_04 img
{
  float: left;
}
.inner_row_01, .inner_row_02, .inner_row_03, inner_row_04
{
  float:right;
  width: 100%;
}
.band_preview
{
  width: 40%;
  float: right;
