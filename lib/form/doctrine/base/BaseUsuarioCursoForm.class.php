<?php

/**
 * UsuarioCurso form base class.
 *
 * @method UsuarioCurso getObject() Returns the current form's model object
 *
 * @package    clasupport
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioCursoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'curso_id'   => new sfWidgetFormInputHidden(),
      'usuario_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'curso_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('curso_id')), 'empty_value' => $this->getObject()->get('curso_id'), 'required' => false)),
      'usuario_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('usuario_id')), 'empty_value' => $this->getObject()->get('usuario_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario_curso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UsuarioCurso';
  }

}
