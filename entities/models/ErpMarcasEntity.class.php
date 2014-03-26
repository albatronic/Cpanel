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
     * @orm IDFabricante
     * @var integer
     * @assert NotBlank(groups="ErpMarcas")
     */
    protected $IDFabricante;

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
     * @orm:Column(type="integer")
     * @assert:NotBlank(groups="ErpFamilias")
     */
    protected $MostrarPortada = '0';

    /**
     * @orm:Column(type="integer")
     * @assert:NotBlank(groups="ErpFamilias")
     */
    protected $OrdenPortada = '0';

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'ErpFabricantes*';

    /**
     * Nombre de la PrimaryKey
     * @var string
     */
    protected $_primaryKeyName = 'IDFabricante';

    /**
     * Relacion de entidades que dependen de esta
     * @var string
     */
    protected $_parentEntities = array(
        array('SourceColumn' => 'IDFabricante', 'ParentEntity' => 'ErpPropiedadesFamiliasMarcas', 'ParentColumn' => 'IDFabricanteMarca'),
        array('SourceColumn' => 'IDFabricante', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDMarca'),
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
    public function setIDFabricante($IDFabricante) {
        $this->IDFabricante = $IDFabricante;
    }

    public function getIDFabricante() {
        return $this->IDFabricante;
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

    public function setMostrarPortada($MostrarPortada) {
        $this->MostrarPortada = $MostrarPortada;
    }

    public function getMostrarPortada() {
        if (!($this->MostrarPortada instanceof ValoresSN))
            $this->MostrarPortada = new ValoresSN($this->MostrarPortada);
        return $this->MostrarPortada;
    }

    public function setOrdenPortada($OrdenPortada) {
        $this->OrdenPortada = $OrdenPortada;
    }

    public function getOrdenPortada() {
        return $this->OrdenPortada;
    }

}

// END class ErpMarcas
?>