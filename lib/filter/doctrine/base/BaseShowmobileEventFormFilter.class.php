<?php

/**
 * ShowmobileEvent filter form base class.
 *
 * @package    showmobile
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseShowmobileEventFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'start_time' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cost'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'venue_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Venue'), 'add_empty' => true)),
      'flyer'      => new sfWidgetFormFilterInput(),
      'user_id'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contact'    => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'bands_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'ShowmobileBand')),
    ));

    $this->setValidators(array(
      'start_time' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cost'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'venue_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Venue'), 'column' => 'id')),
      'flyer'      => new sfValidatorPass(array('required' => false)),
      'user_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'contact'    => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'bands_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'ShowmobileBand', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('showmobile_event_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addBandsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.ShowmobileEventBand ShowmobileEventBand')
      ->andWhereIn('ShowmobileEventBand.showmobile_band_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'ShowmobileEvent';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'start_time' => 'Date',
      'cost'       => 'Number',
      'venue_id'   => 'ForeignKey',
      'flyer'      => 'Text',
      'user_id'    => 'Number',
      'contact'    => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
      'bands_list' => 'ManyKey',
    );
  }
}
