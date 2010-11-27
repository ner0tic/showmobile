<?php
	header("Content-Type: text/css");
  include_once ('css.scheme.php');
?>
html,
body
{
  width:100%;
  height:100%;
  margin:0;
  padding:0;
  background:#D9DADB;
}
body
{
  font: 13px Arial, Helvetica, sans-serif;
  text-align:left;
  color:#939393;
}
body
{
  /* Pour faire des hovers autre que sur des a */
  /* behavior: url(/htc/csshover.htc);*/
  /* Ca fonctionne avec ie6 et ce n'est pas accessible */
}
a
{
  color:#6c6159;
}
a img
{
  border:none;
}
a:hover
{
  text-decoration:underline;
}

/**
  * Fixe le problème de padding
  * et de border sur les boutons
  * dans firefox
  */
button::-moz-focus-inner
{
  padding: 0;
  border: none;
}
/**
  * Fixe le problème de padding
  * proportionel au contenu des boutons
  * dans Internet explorer
  */
button
{
  overflow: visible;
  width: auto;
}
table,
th,
td,
tr
{
  border-collapse:collapse;
  border:1px solid black;
}

fieldset
{
  border:none;
}
.clear
{
  clear:both;
  height:0px;
  font-size:0;
  line-height:0;
}
strong
{
  font-weight:bold;
}
em
{
  font-style:italic;
}
/* ------- DEBUT - Clear ------- */

.clear_fix:after
{
  content:"\0020";
  display:block;
  height:0;
  clear:both;
  visibility:hidden;
}
.clear_fix
{
  display:inline-block;
}
/* \*/ * html .clear_fix
{
  height:1%;
}
.clear_fix
{
  display:block;
}

/* ------- FIN - Clear ------- */
