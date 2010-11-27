<?php
    include_once 'scheme.css.php';
    header("Content-Type: text/css");

    //$scheme = isset($_GET['c']) ? $_GET['c'] : $dkOrangeStripe;
?>
/*******************************************************************************
    wrapper
*******************************************************************************/
.data-table-wrapper {
    padding: 10px;
    margin: 5px auto;
    min-width: 300px;
    position: relative;
    min-height: 250px;
    vertical-align: top;
}
table.data-table, table.form-table {
    min-width: 380px;
    padding: 5px;
    /*position: relative;
    float: left;*/
    display: block;
    vertical-align: top;
}
/*******************************************************************************
    table rows
*******************************************************************************/
.data-table tr, .form-table tr {
    min-height: 30px;
}
tr.even-row {
    background-color: <?=$offWhite?>;
}
tr.odd-row {
    background-color: <?=$white?>;/*#efefef;*/
}
tr.even-row:hover, tr.odd-row:hover {
    background-color: <?=$ltTealGray?>;
}
.data-table:first-child,
.form-table:first-child {
    border-bottom: 1px solid <?=$medTeal?>;
}
.data-table th,
.form-table > thead th {
    text-align: left;
    width: 100%;
}
.data-table th.sort {
    float: right;
    position: relative;
}
.data-table th.sort > input {
    padding-bottom: 2px;
}
.data-table td, .form-table td,
.form-table > tbody th {
    padding: 12px 15px;
    border-bottom: 1px dotted #999;
    min-width: 25px;
}
.form-table td {
    float: right;
    position: relative;
}
.form-table a {
    text-decoration: none;
    color: <?=$color[2]?>;
}
/*******************************************************************************
    controls
*******************************************************************************/
.table-controls {
    float: right;
    position: relative;
}
.table-controls a {
    text-decoration: none;
}
.table-controls img {
    vertical-align: bottom;
    padding: 0px;
}
.table-controls < td {
    max-width: 60px;
}
.control-txt {
    /*display: inline;*/
    display: none;
    font-size: small;
    color: <?=$black?>;
    vertical-align: middle;
}