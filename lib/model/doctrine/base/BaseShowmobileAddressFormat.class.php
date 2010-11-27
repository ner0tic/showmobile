<?php

/**
 * BaseShowmobileAddressFormat
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $address_format
 * @property string $address_summary
 * @property ShowmobileCountry $Country
 * 
 * @method string                  getAddressFormat()   Returns the current record's "address_format" value
 * @method string                  getAddressSummary()  Returns the current record's "address_summary" value
 * @method ShowmobileCountry       getCountry()         Returns the current record's "Country" value
 * @method ShowmobileAddressFormat setAddressFormat()   Sets the current record's "address_format" value
 * @method ShowmobileAddressFormat setAddressSummary()  Sets the current record's "address_summary" value
 * @method ShowmobileAddressFormat setCountry()         Sets the current record's "Country" value
 * 
 * @package    showmobile
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseShowmobileAddressFormat extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('showmobile_address_format');
        $this->hasColumn('address_format', 'string', 128, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 128,
             ));
        $this->hasColumn('address_summary', 'string', 48, array(
             'type' => 'string',
             'length' => 48,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ShowmobileCountry as Country', array(
             'local' => 'id',
             'foreign' => 'address_format_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}