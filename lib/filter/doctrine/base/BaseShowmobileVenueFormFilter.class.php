<?php

/**
 * ShowmobileVenue filter form base class.
 *
 * @package    showmobile
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseShowmobileVenueFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'address_book_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Address'), 'add_empty' => true)),
      'phone'           => new sfWidgetFormFilterInput(),
      'fax'             => new sfWidgetFormFilterInput(),
      'url'             => new sfWidgetFormFilterInput(),
      'email'           => new sfWidgetFormFilterInput(),
      'img'             => new sfWidgetFormFilterInput(),
      'logo'            => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'            => new sfValidatorPass(array('required' => false)),
      'address_book_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Address'), 'column' => 'id')),
      'phone'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fax'             => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'url'             => new sfValidatorPass(array('required' => false)),
      'email'           => new sfValidatorPass(array('required' => false)),
      'img'             => new sfValidatorPass(array('required' => false)),
      'logo'            => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('showmobile_venue_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ShowmobileVenue';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'name'            => 'Text',
      'address_book_id' => 'ForeignKey',
      'phone'           => 'Number',
      'fax'             => 'Number',
      'url'             => 'Text',
      'email'           => 'Text',
      'img'             => 'Text',
      'logo'            => 'Text',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
