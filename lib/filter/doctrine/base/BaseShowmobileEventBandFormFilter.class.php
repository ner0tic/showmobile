<?php

/**
 * ShowmobileEventBand filter form base class.
 *
 * @package    showmobile
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseShowmobileEventBandFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'showmobile_event_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Event'), 'add_empty' => true)),
      'showmobile_band_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Band'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'showmobile_event_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Event'), 'column' => 'id')),
      'showmobile_band_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Band'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('showmobile_event_band_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ShowmobileEventBand';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'showmobile_event_id' => 'ForeignKey',
      'showmobile_band_id'  => 'ForeignKey',
    );
  }
}
