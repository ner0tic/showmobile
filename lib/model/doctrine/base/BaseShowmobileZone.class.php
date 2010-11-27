<?php

/**
 * BaseShowmobileZone
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $country_id
 * @property string $code
 * @property string $name
 * @property ShowmobileCountry $Country
 * @property Doctrine_Collection $ShowmobileAddressBook
 * 
 * @method integer             getCountryId()             Returns the current record's "country_id" value
 * @method string              getCode()                  Returns the current record's "code" value
 * @method string              getName()                  Returns the current record's "name" value
 * @method ShowmobileCountry   getCountry()               Returns the current record's "Country" value
 * @method Doctrine_Collection getShowmobileAddressBook() Returns the current record's "ShowmobileAddressBook" collection
 * @method ShowmobileZone      setCountryId()             Sets the current record's "country_id" value
 * @method ShowmobileZone      setCode()                  Sets the current record's "code" value
 * @method ShowmobileZone      setName()                  Sets the current record's "name" value
 * @method ShowmobileZone      setCountry()               Sets the current record's "Country" value
 * @method ShowmobileZone      setShowmobileAddressBook() Sets the current record's "ShowmobileAddressBook" collection
 * 
 * @package    showmobile
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseShowmobileZone extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('showmobile_zone');
        $this->hasColumn('country_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('code', 'string', 32, array(
             'type' => 'string',
             'length' => 32,
             ));
        $this->hasColumn('name', 'string', 64, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 64,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ShowmobileCountry as Country', array(
             'local' => 'country_id',
             'foreign' => 'id'));

        $this->hasMany('ShowmobileAddressBook', array(
             'local' => 'id',
             'foreign' => 'zone_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}