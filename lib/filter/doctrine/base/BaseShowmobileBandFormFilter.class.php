<?php

/**
 * ShowmobileBand filter form base class.
 *
 * @package    showmobile
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseShowmobileBandFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'bio'         => new sfWidgetFormFilterInput(),
      'img'         => new sfWidgetFormFilterInput(),
      'logo'        => new sfWidgetFormFilterInput(),
      'url'         => new sfWidgetFormFilterInput(),
      'email'       => new sfWidgetFormFilterInput(),
      'zone_id'     => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'events_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'ShowmobileEvent')),
    ));

    $this->setValidators(array(
      'name'        => new sfValidatorPass(array('required' => false)),
      'bio'         => new sfValidatorPass(array('required' => false)),
      'img'         => new sfValidatorPass(array('required' => false)),
      'logo'        => new sfValidatorPass(array('required' => false)),
      'url'         => new sfValidatorPass(array('required' => false)),
      'email'       => new sfValidatorPass(array('required' => false)),
      'zone_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'events_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'ShowmobileEvent', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('showmobile_band_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addEventsListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->andWhereIn('ShowmobileEventBand.showmobile_event_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'ShowmobileBand';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'name'        => 'Text',
      'bio'         => 'Text',
      'img'         => 'Text',
      'logo'        => 'Text',
      'url'         => 'Text',
      'email'       => 'Text',
      'zone_id'     => 'Number',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
      'events_list' => 'ManyKey',
    );
  }
}
