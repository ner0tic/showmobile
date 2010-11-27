<?php

/**
 * ShowmobileBand form base class.
 *
 * @method ShowmobileBand getObject() Returns the current form's model object
 *
 * @package    showmobile
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseShowmobileBandForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'name'        => new sfWidgetFormTextarea(),
      'bio'         => new sfWidgetFormTextarea(),
      'img'         => new sfWidgetFormTextarea(),
      'logo'        => new sfWidgetFormTextarea(),
      'url'         => new sfWidgetFormTextarea(),
      'email'       => new sfWidgetFormTextarea(),
      'zone_id'     => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'events_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'ShowmobileEvent')),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'        => new sfValidatorString(),
      'bio'         => new sfValidatorString(array('required' => false)),
      'img'         => new sfValidatorString(array('required' => false)),
      'logo'        => new sfValidatorString(array('required' => false)),
      'url'         => new sfValidatorString(array('required' => false)),
      'email'       => new sfValidatorString(array('required' => false)),
      'zone_id'     => new sfValidatorInteger(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
      'events_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'ShowmobileEvent', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('showmobile_band[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ShowmobileBand';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['events_list']))
    {
      $this->setDefault('events_list', $this->object->Events->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveEventsList($con);

    parent::doSave($con);
  }

  public function saveEventsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['events_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Events->getPrimaryKeys();
    $values = $this->getValue('events_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Events', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Events', array_values($link));
    }
  }

}
