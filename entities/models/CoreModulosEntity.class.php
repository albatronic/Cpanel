<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 05.09.2012 08:11:29
 */

/**
 * @orm:Entity(CoreModulos)
 */
class CoreModulosEntity extends EntityComunes {

    /**
     * @orm:GeneratedValue
     * @orm:Id
     * @orm:Column(type="integer")
     * @assert:NotBlank(groups="CoreModulos")
     */
    protected $Id;

    /**
     * @orm:Column(type="string")
     * @assert:NotBlank(groups="CoreModulos")
     * @var entities\CoreAplicaciones
     */
    protected $CodigoApp;

    /**
     * @orm:Column(type="string")
     * @assert:NotBlank(groups="CoreModulos")
     */
    protected $NombreModulo;

    /**
     * @orm:Column(type="integer")
     * @assert:NotBlank(groups="CoreModulos")
     */
    protected $Nivel = '0';

    /**
     * @orm:Column(type="string")
     */
    protected $PerteneceA;

    /**
     * @orm:Column(type="string")
     * @assert:NotBlank(groups="CoreModulos")
     */
    protected $Titulo;

    /**
     * @orm:Column(type="string")
     */
    protected $Descripcion;

    /**
     * @orm:Column(type="string")
     * @assert:NotBlank(groups="CoreModulos")
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
    protected $_tableName = 'CoreModulos';

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
        array('SourceColumn' => 'NombreModulo', 'ParentEntity' => 'CorePermisos', 'ParentColumn' => 'NombreModulo'),
    );

    /**
     * Relacion de entidades de las que esta depende
     * @var string
     */
    protected $_childEntities = array(
        'CoreAplicaciones',
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

    public function setCodigoApp($CodigoApp) {
        $this->CodigoApp = trim($CodigoApp);
    }

    public function getCodigoApp() {
        return $this->CodigoApp;
    }

    public function setNombreModulo($NombreModulo) {
        $this->NombreModulo = trim($NombreModulo);
    }

    public function getNombreModulo() {
        return $this->NombreModulo;
    }

    public function setNivel($Nivel) {
        $this->Nivel = $Nivel;
    }

    public function getNivel() {
        return $this->Nivel;
    }

    public function setPerteneceA($PerteneceA) {
        $this->PerteneceA = trim($PerteneceA);
    }

    public function getPerteneceA() {
        return $this->PerteneceA;
    }

    public function setTitulo($Titulo) {
        $this->Titulo = trim($Titulo);
    }

    public function getTitulo() {
        return $this->Titulo;
    }

    public function setDescripcion($Descripcion) {
        $this->Descripcion = trim($Descripcion);
    }

    public function getDescripcion() {
        return $this->Descripcion;
    }

    public function setFuncionalidades($Funcionalidades) {
        $this->Funcionalidades = trim($Funcionalidades);
    }

    public function getFuncionalidades() {
        return $this->Funcionalidades;
    }

}

// END class CoreModulos
?>