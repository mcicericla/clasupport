<?php

/**
 * PerfilCategoriaTicket form base class.
 *
 * @method PerfilCategoriaTicket getObject() Returns the current form's model object
 *
 * @package    clasupport
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePerfilCategoriaTicketForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'perfil_id'           => new sfWidgetFormInputHidden(),
      'categoria_ticket_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'perfil_id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('perfil_id')), 'empty_value' => $this->getObject()->get('perfil_id'), 'required' => false)),
      'categoria_ticket_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('categoria_ticket_id')), 'empty_value' => $this->getObject()->get('categoria_ticket_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('perfil_categoria_ticket[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PerfilCategoriaTicket';
  }

}
