<?php

/**
 * BaseShowmobileCountry
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $iso_code2
 * @property string $iso_code3
 * @property integer $address_format_id
 * @property string $flag
 * @property Doctrine_Collection $ShowmobileZone
 * @property Doctrine_Collection $ShowmobileAddressFormat
 * 
 * @method string              getName()                    Returns the current record's "name" value
 * @method string              getIsoCode2()                Returns the current record's "iso_code2" value
 * @method string              getIsoCode3()                Returns the current record's "iso_code3" value
 * @method integer             getAddressFormatId()         Returns the current record's "address_format_id" value
 * @method string              getFlag()                    Returns the current record's "flag" value
 * @method Doctrine_Collection getShowmobileZone()          Returns the current record's "ShowmobileZone" collection
 * @method Doctrine_Collection getShowmobileAddressFormat() Returns the current record's "ShowmobileAddressFormat" collection
 * @method ShowmobileCountry   setName()                    Sets the current record's "name" value
 * @method ShowmobileCountry   setIsoCode2()                Sets the current record's "iso_code2" value
 * @method ShowmobileCountry   setIsoCode3()                Sets the current record's "iso_code3" value
 * @method ShowmobileCountry   setAddressFormatId()         Sets the current record's "address_format_id" value
 * @method ShowmobileCountry   setFlag()                    Sets the current record's "flag" value
 * @method ShowmobileCountry   setShowmobileZone()          Sets the current record's "ShowmobileZone" collection
 * @method ShowmobileCountry   setShowmobileAddressFormat() Sets the current record's "ShowmobileAddressFormat" collection
 * 
 * @package    showmobile
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseShowmobileCountry extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('showmobile_country');
        $this->hasColumn('name', 'string', 64, array(
             'unique' => true,
             'type' => 'string',
             'notnull' => true,
             'length' => 64,
             ));
        $this->hasColumn('iso_code2', 'string', 2, array(
             'unique' => true,
             'type' => 'string',
             'length' => 2,
             ));
        $this->hasColumn('iso_code3', 'string', 3, array(
             'unique' => true,
             'type' => 'string',
             'length' => 3,
             ));
        $this->hasColumn('address_format_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('flag', 'string', null, array(
             'type' => 'string',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('ShowmobileZone', array(
             'local' => 'id',
             'foreign' => 'country_id'));

        $this->hasMany('ShowmobileAddressFormat', array(
             'local' => 'address_format_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}