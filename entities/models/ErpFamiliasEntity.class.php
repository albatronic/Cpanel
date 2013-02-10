<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.01.2013 19:57:09
 */

/**
 * @orm:Entity(ErpFamilias)
 */
class ErpFamiliasEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="ErpFamilias")
     */
    protected $Id;

    /**
     * @var string
     * @assert NotBlank(groups="ErpFamilias")
     */
    protected $Titulo;

    /**
     * @var string
     */
    protected $Subtitulo;

    /**
     * @var string
     */
    protected $Descripcion1;

    /**
     * @var string
     */
    protected $Descripcion2;

    /**
     * @var tinyint
     * @assert NotBlank(groups="ErpFamilias")
     */
    protected $Inventario = '1';

    /**
     * @var tinyint
     * @assert NotBlank(groups="ErpFamilias")
     */
    protected $Trazabilidad = '1';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpFamilias")
     */
    protected $MargenMinimo = '0.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpFamilias")
     */
    protected $MargenWeb = '0.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpFamilias")
     */
    protected $Caducidad = '0';

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'ErpFamilias';

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
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpPropiedadesFamiliasMarcas', 'ParentColumn' => 'IdFamilia'),
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDCategoria'),
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDFamilia'),
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDSubfamilia'),
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

    public function setSubtitulo($Subtitulo) {
        $this->Subtitulo = trim($Subtitulo);
    }

    public function getSubtitulo() {
        return $this->Subtitulo;
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

    public function setInventario($Inventario) {
        $this->Inventario = $Inventario;
    }

    public function getInventario() {
        if (!($this->Inventario instanceof ValoresSN))
            $this->Inventario = new ValoresSN($this->Inventario);
        return $this->Inventario;
    }

    public function setTrazabilidad($Trazabilidad) {
        $this->Trazabilidad = $Trazabilidad;
    }

    public function getTrazabilidad() {
        if (!($this->Trazabilidad instanceof ValoresSN))
            $this->Trazabilidad = new ValoresSN($this->Trazabilidad);
        return $this->Trazabilidad;
    }

    public function setMargenMinimo($MargenMinimo) {
        $this->MargenMinimo = $MargenMinimo;
    }

    public function getMargenMinimo() {
        return $this->MargenMinimo;
    }

    public function setMargenWeb($MargenWeb) {
        $this->MargenWeb = $MargenWeb;
    }

    public function getMargenWeb() {
        return $this->MargenWeb;
    }

    public function setCaducidad($Caducidad) {
        $this->Caducidad = $Caducidad;
    }

    public function getCaducidad() {
        return $this->Caducidad;
    }

}

// END class ErpFamilias
?>