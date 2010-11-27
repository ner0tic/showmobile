<?php

/**
 * ShowmobileVehicle form base class.
 *
 * @method ShowmobileVehicle getObject() Returns the current form's model object
 *
 * @package    showmobile
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseShowmobileVehicleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'year'       => new sfWidgetFormInputText(),
      'make'       => new sfWidgetFormTextarea(),
      'model'      => new sfWidgetFormTextarea(),
      'color_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Color'), 'add_empty' => false)),
      'mpg'        => new sfWidgetFormInputText(),
      'seats'      => new sfWidgetFormInputText(),
      'user_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'year'       => new sfValidatorInteger(),
      'make'       => new sfValidatorString(),
      'model'      => new sfValidatorString(),
      'color_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Color'))),
      'mpg'        => new sfValidatorInteger(),
      'seats'      => new sfValidatorInteger(),
      'user_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('showmobile_vehicle[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ShowmobileVehicle';
  }

}
