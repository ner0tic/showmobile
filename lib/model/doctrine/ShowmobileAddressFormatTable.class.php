<?php


class ShowmobileAddressFormatTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ShowmobileAddressFormat');
    }
}