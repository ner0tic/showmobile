<?php

/**
 * ShowmobileAddressBook
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    showmobile
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class ShowmobileAddressBook extends BaseShowmobileAddressBook
{
    public function getAddressLong() {
        echo $this->getStreet()."<br />"
                .(is_null($this->getSuburb()) ? '' : $this->getSuburb()."<br />")
                .$this->getCity()."<br />"
                .$this->getZone()->getName()."<br />"
                .$this->getZone()->getCountry()->getName();
    }
    
    
}