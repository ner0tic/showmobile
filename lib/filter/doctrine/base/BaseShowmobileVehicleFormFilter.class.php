<?php

/**
 * ShowmobileVehicle filter form base class.
 *
 * @package    showmobile
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseShowmobileVehicleFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'year'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'make'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'model'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'color_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Color'), 'add_empty' => true)),
      'mpg'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'seats'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'year'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'make'       => new sfValidatorPass(array('required' => false)),
      'model'      => new sfValidatorPass(array('required' => false)),
      'color_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Color'), 'column' => 'id')),
      'mpg'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'seats'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'user_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('showmobile_vehicle_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ShowmobileVehicle';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'year'       => 'Number',
      'make'       => 'Text',
      'model'      => 'Text',
      'color_id'   => 'ForeignKey',
      'mpg'        => 'Number',
      'seats'      => 'Number',
      'user_id'    => 'ForeignKey',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
