<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 05.12.2012 00:51:11
 */

/**
 * @orm:Entity(AlbmAlbumes)
 */
class AlbmAlbumesEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="AlbmAlbumes")
     */
    protected $Id;

    /**
     * @var string
     * @assert NotBlank(groups="AlbmAlbumes")
     */
    protected $Titulo;

    /**
     * @var string
     */
    protected $Subtitulo;

    /**
     * @var string
     */
    protected $Resumen;

    /**
     * @var string
     */
    protected $Autor;

    /**
     * @var integer
     * @assert NotBlank(groups="AlbmAlbumes")
     */
    protected $FechaPublicacion = '0';

    /**
     * @var entities\ValoresSN
     * @assert NotBlank(groups="AlbmAlbumes")
     */
    protected $MostrarEnPortada = '0';

    /**
     * @var integer
     * @assert NotBlank(groups="AlbmAlbumes")
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
    protected $_tableName = 'AlbmAlbumes';

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

    public function setResumen($Resumen) {
        $this->Resumen = trim($Resumen);
    }

    public function getResumen() {
        return $this->Resumen;
    }

    public function setAutor($Autor) {
        $this->Autor = trim($Autor);
    }

    public function getAutor() {
        return $this->Autor;
    }

    public function setFechaPublicacion($TimeUnix) {

        if ($TimeUnix == 0)
            $TimeUnix = time();

        $this->FechaPublicacion = $TimeUnix;
    }

    public function getFechaPublicacion() {
        return date('d-m-Y H:i:s', $this->FechaPublicacion);
    }

    public function setMostrarEnPortada($MostrarEnPortada) {
        $this->MostrarEnPortada = $MostrarEnPortada;
    }

    public function getMostrarEnPortada() {
        if (!($this->MostrarEnPortada instanceof ValoresSN))
            $this->MostrarEnPortada = new ValoresSN($this->MostrarEnPortada);
        return $this->MostrarEnPortada;
    }

    public function setOrdenPortada($OrdenPortada) {
        $this->OrdenPortada = $OrdenPortada;
    }

    public function getOrdenPortada() {
        return $this->OrdenPortada;
    }

}

// END class AlbmAlbumes
?>