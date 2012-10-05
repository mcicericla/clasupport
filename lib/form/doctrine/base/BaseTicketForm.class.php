<?php

/**
 * Ticket form base class.
 *
 * @method Ticket getObject() Returns the current form's model object
 *
 * @package    clasupport
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTicketForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'descripcion'         => new sfWidgetFormTextarea(),
      'fecha_alta'          => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
      'fecha_cierre'        => new sfWidgetFormDateTime(),
      'usuario_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => false)),
      'estado_ticket_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EstadoTicket'), 'add_empty' => false)),
      'categoria_ticket_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CategoriaTicket'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'descripcion'         => new sfValidatorString(),
      'fecha_alta'          => new sfValidatorDateTime(),
      'fecha_actualizacion' => new sfValidatorDateTime(array('required' => false)),
      'fecha_cierre'        => new sfValidatorDateTime(array('required' => false)),
      'usuario_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'))),
      'estado_ticket_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EstadoTicket'))),
      'categoria_ticket_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CategoriaTicket'))),
    ));

    $this->widgetSchema->setNameFormat('ticket[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ticket';
  }

}
