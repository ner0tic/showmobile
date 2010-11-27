<?php

/**
 * ShowmobileVenue form base class.
 *
 * @method ShowmobileVenue getObject() Returns the current form's model object
 *
 * @package    showmobile
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseShowmobileVenueForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'name'            => new sfWidgetFormInputText(),
      'address_book_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Address'), 'add_empty' => false)),
      'phone'           => new sfWidgetFormInputText(),
      'fax'             => new sfWidgetFormInputText(),
      'url'             => new sfWidgetFormInputText(),
      'email'           => new sfWidgetFormTextarea(),
      'img'             => new sfWidgetFormTextarea(),
      'logo'            => new sfWidgetFormTextarea(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 100)),
      'address_book_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Address'))),
      'phone'           => new sfValidatorInteger(array('required' => false)),
      'fax'             => new sfValidatorInteger(array('required' => false)),
      'url'             => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'email'           => new sfValidatorString(array('required' => false)),
      'img'             => new sfValidatorString(array('required' => false)),
      'logo'            => new sfValidatorString(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('showmobile_venue[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ShowmobileVenue';
  }

}
