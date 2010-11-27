<?php


class ShowmobileDriverTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ShowmobileDriver');
    }
    
    /*public function getPassengerCount($driver,Doctrine_Query $q = null) {
        if(is_null($q)) {
            $q = Doctrine_Query::create()
            ->from('ShowmobilePassenger p');
        }
        $alias = $q->getRootAlias();
        if($driver!=0)  $q->andWhere('?.driver_id = ?',$alias,$driver);
        return $q->count();
    }*/
}