<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 13.05.2013 15:38:57
 */

/**
 * @orm:Entity(CpanEsqueletoWeb)
 */
class CpanEsqueletoWebEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="CpanEsqueletoWeb")
     */
    protected $Id;

    /**
     * @var string
     * @assert NotBlank(groups="CpanEsqueletoWeb")
     */
    protected $Controller;

    /**
     * @var integer
     * @assert NotBlank(groups="CpanEsqueletoWeb")
     */
    protected $Zona = '0';

    /**
     * @var entities\ArticulosEstados
     * @assert NotBlank(groups="CpanEsqueletoWeb")
     */
    protected $IDEstado = '0';

    /**
     * @var entities\Fabricantes
     * @assert NotBlank(groups="CpanEsqueletoWeb")
     */
    protected $IDFabricante = '0';

    /**
     * @var entities\Familias
     * @assert NotBlank(groups="CpanEsqueletoWeb")
     */
    protected $IDCategoria = '0';

    /**
     * @var entities\Familias
     * @assert NotBlank(groups="CpanEsqueletoWeb")
     */
    protected $IDFamilia = '0';

    /**
     * @var entities\Familias
     * @assert NotBlank(groups="CpanEsqueletoWeb")
     */
    protected $IDSubfamilia = '0';

    /**
     * @var string
     */
    protected $Filtro;

    /**
     * @var integer
     * @assert NotBlank(groups="CpanEsqueletoWeb")
     */
    protected $NItems = '0';

    /**
     * @var integer
     * @assert NotBlank(groups="CpanEsqueletoWeb")
     */
    protected $ItemsPagina = '0';

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'CpanEsqueletoWeb';

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
        'ArticulosEstados',
        'Fabricantes',
        'Familias',
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

    public function setController($Controller) {
        $this->Controller = trim($Controller);
    }

    public function getController() {
        return $this->Controller;
    }

    public function setZona($Zona) {
        $this->Zona = $Zona;
    }

    public function getZona() {
        return $this->Zona;
    }

    public function setIDEstado($IDEstado) {
        $this->IDEstado = $IDEstado;
    }

    public function getIDEstado() {
        if (!($this->IDEstado instanceof ErpArticulosEstados))
            $this->IDEstado = new ErpArticulosEstados($this->IDEstado);
        return $this->IDEstado;
    }

    public function setIDFabricante($IDFabricante) {
        $this->IDFabricante = $IDFabricante;
    }

    public function getIDFabricante() {
        if (!($this->IDFabricante instanceof ErpMarcas))
            $this->IDFabricante = new ErpMarcas($this->IDFabricante);
        return $this->IDFabricante;
    }

    public function setIDCategoria($IDCategoria) {
        $this->IDCategoria = $IDCategoria;
    }

    public function getIDCategoria() {
        if (!($this->IDCategoria instanceof ErpFamilias))
            $this->IDCategoria = new ErpFamilias($this->IDCategoria);
        return $this->IDCategoria;
    }

    public function setIDFamilia($IDFamilia) {
        $this->IDFamilia = $IDFamilia;
    }

    public function getIDFamilia() {
        if (!($this->IDFamilia instanceof ErpFamilias))
            $this->IDFamilia = new ErpFamilias($this->IDFamilia);
        return $this->IDFamilia;
    }

    public function setIDSubfamilia($IDSubfamilia) {
        $this->IDSubfamilia = $IDSubfamilia;
    }

    public function getIDSubfamilia() {
        if (!($this->IDSubfamilia instanceof ErpFamilias))
            $this->IDSubfamilia = new ErpFamilias($this->IDSubfamilia);
        return $this->IDSubfamilia;
    }

    public function setFiltro($Filtro) {
        $this->Filtro = trim($Filtro);
    }

    public function getFiltro() {
        return $this->Filtro;
    }

    public function setNItems($NItems) {
        $this->NItems = $NItems;
    }

    public function getNItems() {
        return $this->NItems;
    }

    public function setItemsPagina($ItemsPagina) {
        $this->ItemsPagina = $ItemsPagina;
    }

    public function getItemsPagina() {
        return $this->ItemsPagina;
    }

}

// END class CpanEsqueletoWeb
?>