<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Usuario', 'doctrine');

/**
 * BaseUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $mail
 * @property integer $estado_usuario_id
 * @property integer $perfil_id
 * @property EstadoUsuario $EstadoUsuario
 * @property Perfil $Perfil
 * @property Doctrine_Collection $Ticket
 * @property Doctrine_Collection $UsuarioCurso
 * 
 * @method integer             getId()                Returns the current record's "id" value
 * @method string              getNombre()            Returns the current record's "nombre" value
 * @method string              getApellido()          Returns the current record's "apellido" value
 * @method string              getMail()              Returns the current record's "mail" value
 * @method integer             getEstadoUsuarioId()   Returns the current record's "estado_usuario_id" value
 * @method integer             getPerfilId()          Returns the current record's "perfil_id" value
 * @method EstadoUsuario       getEstadoUsuario()     Returns the current record's "EstadoUsuario" value
 * @method Perfil              getPerfil()            Returns the current record's "Perfil" value
 * @method Doctrine_Collection getTicket()            Returns the current record's "Ticket" collection
 * @method Doctrine_Collection getUsuarioCurso()      Returns the current record's "UsuarioCurso" collection
 * @method Usuario             setId()                Sets the current record's "id" value
 * @method Usuario             setNombre()            Sets the current record's "nombre" value
 * @method Usuario             setApellido()          Sets the current record's "apellido" value
 * @method Usuario             setMail()              Sets the current record's "mail" value
 * @method Usuario             setEstadoUsuarioId()   Sets the current record's "estado_usuario_id" value
 * @method Usuario             setPerfilId()          Sets the current record's "perfil_id" value
 * @method Usuario             setEstadoUsuario()     Sets the current record's "EstadoUsuario" value
 * @method Usuario             setPerfil()            Sets the current record's "Perfil" value
 * @method Usuario             setTicket()            Sets the current record's "Ticket" collection
 * @method Usuario             setUsuarioCurso()      Sets the current record's "UsuarioCurso" collection
 * 
 * @package    clasupport
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('usuario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('apellido', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('mail', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('estado_usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('perfil_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('EstadoUsuario', array(
             'local' => 'estado_usuario_id',
             'foreign' => 'id'));

        $this->hasOne('Perfil', array(
             'local' => 'perfil_id',
             'foreign' => 'id'));

        $this->hasMany('Ticket', array(
             'local' => 'id',
             'foreign' => 'usuario_id'));

        $this->hasMany('UsuarioCurso', array(
             'local' => 'id',
             'foreign' => 'curso_id'));
    }
}