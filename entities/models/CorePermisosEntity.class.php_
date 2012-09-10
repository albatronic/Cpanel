<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 05.09.2012 08:11:29
 */

/**
 * @orm:Entity(CorePermisos)
 */
class CorePermisosEntity extends EntityComunes {

    /**
     * @orm:GeneratedValue
     * @orm:Id
     * @orm:Column(type="integer")
     * @assert:NotBlank(groups="CorePermisos")
     */
    protected $Id;

    /**
     * @orm:Column(type="integer")
     * @assert:NotBlank(groups="CorePermisos")
     * @var entities\CorePerfiles
     */
    protected $IdPerfil;

    /**
     * @orm:Column(type="string")
     * @assert:NotBlank(groups="CorePermisos")
     * @var entities\CoreModulos
     */
    protected $NombreModulo;

    /**
     * @orm:Column(type="string")
     * @assert:NotBlank(groups="CorePermisos")
     */
    protected $Funcionalidades;

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = 'cpanel';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'CorePermisos';

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
    );

    /**
     * Relacion de entidades de las que esta depende
     * @var string
     */
    protected $_childEntities = array(
        'CorePerfiles',
        'CoreModulos',
        'ValoresSN',
        'ValoresPrivacidad',
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

    public function setIdPerfil($IdPerfil) {
        $this->IdPerfil = $IdPerfil;
    }

    public function getIdPerfil() {
        if (!($this->IdPerfil instanceof CorePerfiles))
            $this->IdPerfil = new CorePerfiles($this->IdPerfil);
        return $this->IdPerfil;
    }

    public function setNombreModulo($NombreModulo) {
        $this->NombreModulo = trim($NombreModulo);
    }

    public function getNombreModulo() {
        return $this->NombreModulo;
    }

    public function setFuncionalidades($Funcionalidades) {
        $this->Funcionalidades = trim($Funcionalidades);
    }

    public function getFuncionalidades() {
        return $this->Funcionalidades;
    }

}

// END class CorePermisos
?>