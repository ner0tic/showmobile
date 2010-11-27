<?php

/**
 * ShowmobileCountry form base class.
 *
 * @method ShowmobileCountry getObject() Returns the current form's model object
 *
 * @package    showmobile
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseShowmobileCountryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'name'              => new sfWidgetFormInputText(),
      'iso_code2'         => new sfWidgetFormInputText(),
      'iso_code3'         => new sfWidgetFormInputText(),
      'address_format_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ShowmobileAddressFormat'), 'add_empty' => false)),
      'flag'              => new sfWidgetFormTextarea(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'              => new sfValidatorString(array('max_length' => 64)),
      'iso_code2'         => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'iso_code3'         => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'address_format_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ShowmobileAddressFormat'))),
      'flag'              => new sfValidatorString(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'ShowmobileCountry', 'column' => array('name'))),
        new sfValidatorDoctrineUnique(array('model' => 'ShowmobileCountry', 'column' => array('iso_code2'))),
        new sfValidatorDoctrineUnique(array('model' => 'ShowmobileCountry', 'column' => array('iso_code3'))),
      ))
    );

    $this->widgetSchema->setNameFormat('showmobile_country[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ShowmobileCountry';
  }

}
