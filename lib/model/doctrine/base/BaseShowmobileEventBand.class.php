<?php

/**
 * BaseShowmobileEventBand
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $showmobile_event_id
 * @property integer $showmobile_band_id
 * @property ShowmobileEvent $Event
 * @property ShowmobileBand $Band
 * 
 * @method integer             getShowmobileEventId()   Returns the current record's "showmobile_event_id" value
 * @method integer             getShowmobileBandId()    Returns the current record's "showmobile_band_id" value
 * @method ShowmobileEvent     getEvent()               Returns the current record's "Event" value
 * @method ShowmobileBand      getBand()                Returns the current record's "Band" value
 * @method ShowmobileEventBand setShowmobileEventId()   Sets the current record's "showmobile_event_id" value
 * @method ShowmobileEventBand setShowmobileBandId()    Sets the current record's "showmobile_band_id" value
 * @method ShowmobileEventBand setEvent()               Sets the current record's "Event" value
 * @method ShowmobileEventBand setBand()                Sets the current record's "Band" value
 * 
 * @package    showmobile
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseShowmobileEventBand extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('showmobile_event_band');
        $this->hasColumn('showmobile_event_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('showmobile_band_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ShowmobileEvent as Event', array(
             'local' => 'showmobile_event_id',
             'foreign' => 'id'));

        $this->hasOne('ShowmobileBand as Band', array(
             'local' => 'showmobile_band_id',
             'foreign' => 'id'));
    }
}