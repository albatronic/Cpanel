<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.01.2013 19:57:09
 */

/**
 * @orm:Entity(ErpMarcas)
 */
class ErpMarcasEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="ErpMarcas")
     */
    protected $Id;

    /**
     * @var string
     * @assert NotBlank(groups="ErpMarcas")
     */
    protected $Titulo;

    /**
     * @var string
     */
    protected $Descripcion1;

    /**
     * @var string
     */
    protected $Descripcion2;

    /**
     * @var string
     * @assert NotBlank(groups="ErpMarcas")
     */
    protected $Telefono;

    /**
     * @var string
     * @assert NotBlank(groups="ErpMarcas")
     */
    protected $Web;

    /**
     * @var string
     * @assert NotBlank(groups="ErpMarcas")
     */
    protected $Email;

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'ErpMarcas';

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
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpPropiedadesFamiliasMarcas', 'ParentColumn' => 'IdMarca'),
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDMarca'),
    );

    /**
     * Relacion de entidades de las que esta depende
     * @var string
     */
    protected $_childEntities = array(
        'ValoresSN',
        'ValoresPrivacy',
        'ValoresDchaIzq',
        'ValoresChangeFreq',
        'RequestMethods',
        'RequestOrigins',
        'CpanAplicaciones',
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

    public function setTitulo($Titulo) {
        $this->Titulo = trim($Titulo);
    }

    public function getTitulo() {
        return $this->Titulo;
    }

    public function setDescripcion1($Descripcion1) {
        $this->Descripcion1 = trim($Descripcion1);
    }

    public function getDescripcion1() {
        return $this->Descripcion1;
    }

    public function setDescripcion2($Descripcion2) {
        $this->Descripcion2 = trim($Descripcion2);
    }

    public function getDescripcion2() {
        return $this->Descripcion2;
    }

    public function setTelefono($Telefono) {
        $this->Telefono = trim($Telefono);
    }

    public function getTelefono() {
        return $this->Telefono;
    }

    public function setWeb($Web) {
        $this->Web = trim($Web);
    }

    public function getWeb() {
        return $this->Web;
    }

    public function setEmail($Email) {
        $this->Email = trim($Email);
    }

    public function getEmail() {
        return $this->Email;
    }

}

// END class ErpMarcas
?>