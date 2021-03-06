<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 08.09.2012 13:51:05
 */

/**
 * @orm:Entity(CpanUsuarios)
 */
class CpanUsuariosEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="CpanUsuarios")
     */
    protected $Id;

    /**
     * @var integer
     * @assert NotBlank(groups="CpanUsuarios")
     */
    protected $IdUsuario;

    /**
     * @var entities\CpanPerfiles
     * @assert NotBlank(groups="CpanUsuarios")
     */
    protected $IdPerfil;

    /**
     * @var entities\CpanRoles
     * @assert NotBlank(groups="CpanUsuarios")
     */
    protected $IdRol;

    /**
     * @var entities\CpanUsuariosTipos
     * @assert NotBlank(groups="CpanUsuarios")
     */
    protected $IdTipoUsuario;

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'CpanUsuarios';

    /**
     * Nombre de la PrimaryKey
     * @var string
     */
    protected $_primaryKeyName = 'Id';

    /**
     * Relacion de entidades que dependen de esta
     * @var string
     */
    protected $_parentEntities = array(
        array('SourceColumn' => 'Id', 'ParentEntity' => 'CpanUsuarios', 'ParentColumn' => 'IdTipoUsuario'),
    );

    /**
     * Relacion de entidades de las que esta depende
     * @var string
     */
    protected $_childEntities = array(
        'PcaeUsuarios',
        'CpanPerfiles',
        'CpanRoles',
        'CpanUsuariosTipos',
        'ValoresSN',
        'ValoresPrivacy',
        'ValoresDchaIzq',
        'ValoresChangeFreq',
    );

    /**
     * GETTERS Y SETTERS
     */
    public function setId($Id) {
        $this->Id = $Id;
    }

    public function getId() {
        return $this->Id;
    }

    public function setIdUsuario($IdUsuario) {
        $this->IdUsuario = $IdUsuario;
    }

    public function getIdUsuario() {
        if (!($this->IdUsuario instanceof PcaeUsuarios))
            $this->IdUsuario = new PcaeUsuarios($this->IdUsuario);
        return $this->IdUsuario;
    }

    public function setIdPerfil($IdPerfil) {
        $this->IdPerfil = $IdPerfil;
    }

    public function getIdPerfil() {
        if (!($this->IdPerfil instanceof CpanPerfiles))
            $this->IdPerfil = new CpanPerfiles($this->IdPerfil);
        return $this->IdPerfil;
    }

    public function setIdRol($IdRol) {
        $this->IdRol = $IdRol;
    }

    public function getIdRol() {
        if (!($this->IdRol instanceof CpanRoles))
            $this->IdRol = new CpanRoles($this->IdRol);
        return $this->IdRol;
    }

    public function setIdTipoUsuario($IdTipoUsuario) {
        $this->IdTipoUsuario = $IdTipoUsuario;
    }

    public function getIdTipoUsuario() {
        if (!($this->IdTipoUsuario instanceof CpanUsuariosTipos))
            $this->IdTipoUsuario = new CpanUsuariosTipos($this->IdTipoUsuario);
        return $this->IdTipoUsuario;
    }

}

// END class CpanUsuarios
?>