<?php

/**
 * Usuario filter form base class.
 *
 * @package    clasupport
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apellido'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mail'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'estado_usuario_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EstadoUsuario'), 'add_empty' => true)),
      'perfil_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Perfil'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'            => new sfValidatorPass(array('required' => false)),
      'apellido'          => new sfValidatorPass(array('required' => false)),
      'mail'              => new sfValidatorPass(array('required' => false)),
      'estado_usuario_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('EstadoUsuario'), 'column' => 'id')),
      'perfil_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Perfil'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'nombre'            => 'Text',
      'apellido'          => 'Text',
      'mail'              => 'Text',
      'estado_usuario_id' => 'ForeignKey',
      'perfil_id'         => 'ForeignKey',
    );
  }
}
