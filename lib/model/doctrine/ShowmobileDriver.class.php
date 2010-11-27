<?php

/**
 * ShowmobileDriver
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    showmobile
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class ShowmobileDriver extends BaseShowmobileDriver
{
    public function getPassengerCount() {
        $q = Doctrine_Query::create();
        $q->from('ShowmobilePassenger p');
        $q->where('p.driver_id = ?',$this->getId());

        return $q->count();
    }
}
