<?php

/**
 * ShowmobileEvent form base class.
 *
 * @method ShowmobileEvent getObject() Returns the current form's model object
 *
 * @package    showmobile
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseShowmobileEventForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'start_time' => new sfWidgetFormDateTime(),
      'cost'       => new sfWidgetFormInputText(),
      'venue_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Venue'), 'add_empty' => false)),
      'flyer'      => new sfWidgetFormTextarea(),
      'user_id'    => new sfWidgetFormInputText(),
      'contact'    => new sfWidgetFormTextarea(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'bands_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'ShowmobileBand')),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'start_time' => new sfValidatorDateTime(),
      'cost'       => new sfValidatorNumber(),
      'venue_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Venue'))),
      'flyer'      => new sfValidatorString(array('required' => false)),
      'user_id'    => new sfValidatorInteger(),
      'contact'    => new sfValidatorString(array('required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
      'bands_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'ShowmobileBand', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('showmobile_event[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ShowmobileEvent';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['bands_list']))
    {
      $this->setDefault('bands_list', $this->object->Bands->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveBandsList($con);

    parent::doSave($con);
  }

  public function saveBandsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['bands_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Bands->getPrimaryKeys();
    $values = $this->getValue('bands_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Bands', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Bands', array_values($link));
    }
  }

}
