<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 05.09.2012 08:11:29
 */

/**
 * @orm:Entity(EnlEnlaces)
 */
class EnlEnlacesEntity extends EntityComunes {

    /**
     * @orm:GeneratedValue
     * @orm:Id
     * @orm:Column(type="integer")
     * @assert:NotBlank(groups="EnlEnlaces")
     */
    protected $Id;

    /**
     * @orm:Column(type="integer")
     * @assert:NotBlank(groups="EnlEnlaces")
     * @var entities\EnlSecciones
     */
    protected $IdSeccion;

    /**
     * @orm:Column(type="string")
     * @assert:NotBlank(groups="EnlEnlaces")
     */
    protected $Titulo;

    /**
     * @orm:Column(type="string")
     */
    protected $Subtitulo;

    /**
     * @orm:Column(type="string")
     */
    protected $Url;

    /**
     * @orm:Column(type="tinyint")
     * @assert:NotBlank(groups="EnlEnlaces")
     * @var entities\ValoresSN
     */
    protected $TargetBlank = '0';

    /**
     * @orm:Column(type="tinyint")
     * @assert:NotBlank(groups="EnlEnlaces")
     * @var entities\ValoresSN
     */
    protected $EsHttps = '0';

    /**
     * @orm:Column(type="tinyint")
     * @assert:NotBlank(groups="EnlEnlaces")
     * @var entities\ValoresSN
     */
    protected $EsUrlInterna = '0';

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = 'cpanel';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'EnlEnlaces';

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
        'EnlSecciones',
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

    public function setIdSeccion($IdSeccion) {
        $this->IdSeccion = $IdSeccion;
    }

    public function getIdSeccion() {
        if (!($this->IdSeccion instanceof EnlSecciones))
            $this->IdSeccion = new EnlSecciones($this->IdSeccion);
        return $this->IdSeccion;
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

    public function setUrl($Url) {
        $this->Url = trim($Url);
    }

    public function getUrl() {
        return $this->Url;
    }

    public function setTargetBlank($TargetBlank) {
        $this->TargetBlank = $TargetBlank;
    }

    public function getTargetBlank() {
        if (!($this->TargetBlank instanceof ValoresSN))
            $this->TargetBlank = new ValoresSN($this->TargetBlank);
        return $this->TargetBlank;
    }

    public function setEsHttps($EsHttps) {
        $this->EsHttps = $EsHttps;
    }

    public function getEsHttps() {
        if (!($this->EsHttps instanceof ValoresSN))
            $this->EsHttps = new ValoresSN($this->EsHttps);
        return $this->EsHttps;
    }

    public function setEsUrlInterna($EsUrlInterna) {
        $this->EsUrlInterna = $EsUrlInterna;
    }

    public function getEsUrlInterna() {
        if (!($this->EsUrlInterna instanceof ValoresSN))
            $this->EsUrlInterna = new ValoresSN($this->EsUrlInterna);
        return $this->EsUrlInterna;
    }

}

// END class EnlEnlaces
?>