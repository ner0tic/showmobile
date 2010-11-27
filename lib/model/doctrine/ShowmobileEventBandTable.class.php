<?php


class ShowmobileEventBandTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ShowmobileEventBand');
    }

    public function getWithBands($event_id,Doctrine_Query $q = null) {
        if(is_null($q)) {
            $q = Doctrine_Query::create()
            ->from('ShowmobileEventBand eb');
        }
        $alias = $q->getRootAlias();
        $q->andWhere($alias . '.showmobile_event_id = ?',$event_id);
//echo $q;
        return $q->execute();
    }
}