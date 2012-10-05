<?php

/**
 * Nota form base class.
 *
 * @method Nota getObject() Returns the current form's model object
 *
 * @package    clasupport
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNotaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'fecha_alta' => new sfWidgetFormDateTime(),
      'texto'      => new sfWidgetFormTextarea(),
      'ticket_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ticket'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fecha_alta' => new sfValidatorDateTime(),
      'texto'      => new sfValidatorString(),
      'ticket_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ticket'))),
    ));

    $this->widgetSchema->setNameFormat('nota[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Nota';
  }

}
