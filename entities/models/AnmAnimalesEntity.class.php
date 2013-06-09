<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 18.03.2013 10:33:06
 */

/**
 * @orm:Entity(AnmAnimales)
 */
class AnmAnimalesEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="AnmAnimales")
     */
    protected $Id;

    /**
     * @var entities\AnmCategorias
     * @assert NotBlank(groups="AnmAnimales")
     */
    protected $IdCategoria = '0';

    /**
     * @var string
     * @assert NotBlank(groups="AnmAnimales")
     */
    protected $Raza;

    /**
     * @var string
     */
    protected $NombreComun;

    /**
     * @var string
     */
    protected $NombreCientifico;

    /**
     * @var string
     */
    protected $Longevidad;

    /**
     * @var string
     */
    protected $Peso1;

    /**
     * @var string
     */
    protected $Peso2;

    /**
     * @var string
     */
    protected $TemperaturaCorporal;

    /**
     * @var string
     */
    protected $FreqRespiratoria;

    /**
     * @var string
     */
    protected $FreqCardiaca;

    /**
     * @var string
     */
    protected $Gestacion;

    /**
     * @var string
     */
    protected $EdadDestete;

    /**
     * @var string
     */
    protected $MadurezSexual;

    /**
     * @var string
     */
    protected $TamanoPuesta;

    /**
     * @var string
     */
    protected $PeriodoIncubacion;

    /**
     * @var string
     */
    protected $EdadSalidaNido;

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'AnmAnimales';

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
        'AnmCategorias',
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

    public function setIdCategoria($IdCategoria) {
        $this->IdCategoria = $IdCategoria;
    }

    public function getIdCategoria() {
        if (!($this->IdCategoria instanceof AnmCategorias))
            $this->IdCategoria = new AnmCategorias($this->IdCategoria);
        return $this->IdCategoria;
    }

    public function setRaza($Raza) {
        $this->Raza = trim($Raza);
    }

    public function getRaza() {
        return $this->Raza;
    }

    public function setNombreComun($NombreComun) {
        $this->NombreComun = trim($NombreComun);
    }

    public function getNombreComun() {
        return $this->NombreComun;
    }

    public function setNombreCientifico($NombreCientifico) {
        $this->NombreCientifico = trim($NombreCientifico);
    }

    public function getNombreCientifico() {
        return $this->NombreCientifico;
    }

    public function setLongevidad($Longevidad) {
        $this->Longevidad = trim($Longevidad);
    }

    public function getLongevidad() {
        return $this->Longevidad;
    }

    public function setPeso1($Peso1) {
        $this->Peso1 = trim($Peso1);
    }

    public function getPeso1() {
        return $this->Peso1;
    }

    public function setPeso2($Peso2) {
        $this->Peso2 = trim($Peso2);
    }

    public function getPeso2() {
        return $this->Peso2;
    }

    public function setTemperaturaCorporal($TemperaturaCorporal) {
        $this->TemperaturaCorporal = trim($TemperaturaCorporal);
    }

    public function getTemperaturaCorporal() {
        return $this->TemperaturaCorporal;
    }

    public function setFreqRespiratoria($FreqRespiratoria) {
        $this->FreqRespiratoria = trim($FreqRespiratoria);
    }

    public function getFreqRespiratoria() {
        return $this->FreqRespiratoria;
    }

    public function setFreqCardiaca($FreqCardiaca) {
        $this->FreqCardiaca = trim($FreqCardiaca);
    }

    public function getFreqCardiaca() {
        return $this->FreqCardiaca;
    }

    public function setGestacion($Gestacion) {
        $this->Gestacion = trim($Gestacion);
    }

    public function getGestacion() {
        return $this->Gestacion;
    }

    public function setEdadDestete($EdadDestete) {
        $this->EdadDestete = trim($EdadDestete);
    }

    public function getEdadDestete() {
        return $this->EdadDestete;
    }

    public function setMadurezSexual($MadurezSexual) {
        $this->MadurezSexual = trim($MadurezSexual);
    }

    public function getMadurezSexual() {
        return $this->MadurezSexual;
    }

    public function setTamanoPuesta($TamanoPuesta) {
        $this->TamanoPuesta = trim($TamanoPuesta);
    }

    public function getTamanoPuesta() {
        return $this->TamanoPuesta;
    }

    public function setPeriodoIncubacion($PeriodoIncubacion) {
        $this->PeriodoIncubacion = trim($PeriodoIncubacion);
    }

    public function getPeriodoIncubacion() {
        return $this->PeriodoIncubacion;
    }

    public function setEdadSalidaNido($EdadSalidaNido) {
        $this->EdadSalidaNido = trim($EdadSalidaNido);
    }

    public function getEdadSalidaNido() {
        return $this->EdadSalidaNido;
    }

}

// END class AnmAnimales
?>