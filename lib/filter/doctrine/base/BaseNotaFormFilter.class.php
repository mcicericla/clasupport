<?php

/**
 * Nota filter form base class.
 *
 * @package    clasupport
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNotaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha_alta' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'texto'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ticket_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ticket'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'fecha_alta' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'texto'      => new sfValidatorPass(array('required' => false)),
      'ticket_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ticket'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('nota_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Nota';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'fecha_alta' => 'Date',
      'texto'      => 'Text',
      'ticket_id'  => 'ForeignKey',
    );
  }
}
