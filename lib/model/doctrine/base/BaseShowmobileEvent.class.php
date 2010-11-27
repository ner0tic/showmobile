<?php

/**
 * BaseShowmobileEvent
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property timestamp $start_time
 * @property float $cost
 * @property integer $venue_id
 * @property string $flyer
 * @property integer $user_id
 * @property string $contact
 * @property ShowmobileVenue $Venue
 * @property Doctrine_Collection $Bands
 * @property Doctrine_Collection $EventBands
 * @property Doctrine_Collection $ShowmobileDriver
 * 
 * @method timestamp           getStartTime()        Returns the current record's "start_time" value
 * @method float               getCost()             Returns the current record's "cost" value
 * @method integer             getVenueId()          Returns the current record's "venue_id" value
 * @method string              getFlyer()            Returns the current record's "flyer" value
 * @method integer             getUserId()           Returns the current record's "user_id" value
 * @method string              getContact()          Returns the current record's "contact" value
 * @method ShowmobileVenue     getVenue()            Returns the current record's "Venue" value
 * @method Doctrine_Collection getBands()            Returns the current record's "Bands" collection
 * @method Doctrine_Collection getEventBands()       Returns the current record's "EventBands" collection
 * @method Doctrine_Collection getShowmobileDriver() Returns the current record's "ShowmobileDriver" collection
 * @method ShowmobileEvent     setStartTime()        Sets the current record's "start_time" value
 * @method ShowmobileEvent     setCost()             Sets the current record's "cost" value
 * @method ShowmobileEvent     setVenueId()          Sets the current record's "venue_id" value
 * @method ShowmobileEvent     setFlyer()            Sets the current record's "flyer" value
 * @method ShowmobileEvent     setUserId()           Sets the current record's "user_id" value
 * @method ShowmobileEvent     setContact()          Sets the current record's "contact" value
 * @method ShowmobileEvent     setVenue()            Sets the current record's "Venue" value
 * @method ShowmobileEvent     setBands()            Sets the current record's "Bands" collection
 * @method ShowmobileEvent     setEventBands()       Sets the current record's "EventBands" collection
 * @method ShowmobileEvent     setShowmobileDriver() Sets the current record's "ShowmobileDriver" collection
 * 
 * @package    showmobile
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseShowmobileEvent extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('showmobile_event');
        $this->hasColumn('start_time', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('cost', 'float', null, array(
             'type' => 'float',
             'notnull' => true,
             ));
        $this->hasColumn('venue_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('flyer', 'string', null, array(
             'type' => 'string',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('contact', 'string', null, array(
             'type' => 'string',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ShowmobileVenue as Venue', array(
             'local' => 'venue_id',
             'foreign' => 'id'));

        $this->hasMany('ShowmobileBand as Bands', array(
             'refClass' => 'ShowmobileEventBand',
             'local' => 'showmobile_event_id',
             'foreign' => 'showmobile_band_id'));

        $this->hasMany('ShowmobileEventBand as EventBands', array(
             'local' => 'id',
             'foreign' => 'showmobile_event_id'));

        $this->hasMany('ShowmobileDriver', array(
             'local' => 'id',
             'foreign' => 'event_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}