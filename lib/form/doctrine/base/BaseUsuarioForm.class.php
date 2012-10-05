<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    clasupport
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'nombre'            => new sfWidgetFormInputText(),
      'apellido'          => new sfWidgetFormInputText(),
      'mail'              => new sfWidgetFormInputText(),
      'estado_usuario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EstadoUsuario'), 'add_empty' => false)),
      'perfil_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Perfil'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'            => new sfValidatorString(array('max_length' => 255)),
      'apellido'          => new sfValidatorString(array('max_length' => 255)),
      'mail'              => new sfValidatorString(array('max_length' => 255)),
      'estado_usuario_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EstadoUsuario'))),
      'perfil_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Perfil'))),
    ));

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

}
