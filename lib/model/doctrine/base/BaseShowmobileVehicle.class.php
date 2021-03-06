<?php

/**
 * BaseShowmobileVehicle
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $year
 * @property string $make
 * @property string $model
 * @property integer $color_id
 * @property integer $mpg
 * @property integer $seats
 * @property integer $user_id
 * @property ShowmobileVehicleColor $Color
 * @property sfGuardUser $User
 * @property Doctrine_Collection $ShowmobileDriver
 * 
 * @method integer                getYear()             Returns the current record's "year" value
 * @method string                 getMake()             Returns the current record's "make" value
 * @method string                 getModel()            Returns the current record's "model" value
 * @method integer                getColorId()          Returns the current record's "color_id" value
 * @method integer                getMpg()              Returns the current record's "mpg" value
 * @method integer                getSeats()            Returns the current record's "seats" value
 * @method integer                getUserId()           Returns the current record's "user_id" value
 * @method ShowmobileVehicleColor getColor()            Returns the current record's "Color" value
 * @method sfGuardUser            getUser()             Returns the current record's "User" value
 * @method Doctrine_Collection    getShowmobileDriver() Returns the current record's "ShowmobileDriver" collection
 * @method ShowmobileVehicle      setYear()             Sets the current record's "year" value
 * @method ShowmobileVehicle      setMake()             Sets the current record's "make" value
 * @method ShowmobileVehicle      setModel()            Sets the current record's "model" value
 * @method ShowmobileVehicle      setColorId()          Sets the current record's "color_id" value
 * @method ShowmobileVehicle      setMpg()              Sets the current record's "mpg" value
 * @method ShowmobileVehicle      setSeats()            Sets the current record's "seats" value
 * @method ShowmobileVehicle      setUserId()           Sets the current record's "user_id" value
 * @method ShowmobileVehicle      setColor()            Sets the current record's "Color" value
 * @method ShowmobileVehicle      setUser()             Sets the current record's "User" value
 * @method ShowmobileVehicle      setShowmobileDriver() Sets the current record's "ShowmobileDriver" collection
 * 
 * @package    showmobile
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseShowmobileVehicle extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('showmobile_vehicle');
        $this->hasColumn('year', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('make', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('model', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));
        $this->hasColumn('color_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('mpg', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('seats', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ShowmobileVehicleColor as Color', array(
             'local' => 'color_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasMany('ShowmobileDriver', array(
             'local' => 'id',
             'foreign' => 'vehicle_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}