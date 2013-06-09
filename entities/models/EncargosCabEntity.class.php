<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 04.03.2013 20:15:59
 */

/**
 * @orm:Entity(EncargosCab)
 */
class EncargosCabEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="EncargosCab")
     */
    protected $Id;

    /**
     * @var string
     * @assert NotBlank(groups="EncargosCab")
     */
    protected $RazonSocial;

    /**
     * @var string
     */
    protected $Nif;

    /**
     * @var string
     */
    protected $Direccion;

    /**
     * @var string
     */
    protected $Poblacion;

    /**
     * @var string
     */
    protected $CodigoPostal;

    /**
     * @var string
     * @assert NotBlank(groups="EncargosCab")
     */
    protected $EMail;

    /**
     * @var string
     * @assert NotBlank(groups="EncargosCab")
     */
    protected $Telefono;

    /**
     * @var string
     * @assert NotBlank(groups="EncargosCab")
     */
    protected $IpAddress;

    /**
     * @var string
     * @assert NotBlank(groups="EncargosCab")
     */
    protected $Session;

    /**
     * @var integer
     * @assert NotBlank(groups="EncargosCab")
     */
    protected $TiempoUnix = '0';

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'EncargosCab';

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
        array('SourceColumn' => 'Id', 'ParentEntity' => 'EncargosLineas', 'ParentColumn' => 'IdEncargo'),
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

    public function setRazonSocial($RazonSocial) {
        $this->RazonSocial = trim($RazonSocial);
    }

    public function getRazonSocial() {
        return $this->RazonSocial;
    }

    public function setNif($Nif) {
        $this->Nif = trim($Nif);
    }

    public function getNif() {
        return $this->Nif;
    }

    public function setDireccion($Direccion) {
        $this->Direccion = trim($Direccion);
    }

    public function getDireccion() {
        return $this->Direccion;
    }

    public function setPoblacion($Poblacion) {
        $this->Poblacion = trim($Poblacion);
    }

    public function getPoblacion() {
        return $this->Poblacion;
    }

    public function setCodigoPostal($CodigoPostal) {
        $this->CodigoPostal = trim($CodigoPostal);
    }

    public function getCodigoPostal() {
        return $this->CodigoPostal;
    }

    public function setEMail($EMail) {
        $this->EMail = trim($EMail);
    }

    public function getEMail() {
        return $this->EMail;
    }

    public function setTelefono($Telefono) {
        $this->Telefono = trim($Telefono);
    }

    public function getTelefono() {
        return $this->Telefono;
    }

    public function setIpAddress($IpAddress) {
        $this->IpAddress = trim($IpAddress);
    }

    public function getIpAddress() {
        return $this->IpAddress;
    }

    public function setSession($Session) {
        $this->Session = trim($Session);
    }

    public function getSession() {
        return $this->Session;
    }

    public function setTiempoUnix($TiempoUnix) {
        $this->TiempoUnix = $TiempoUnix;
    }

    public function getTiempoUnix() {
        return $this->TiempoUnix;
    }

}

// END class EncargosCab
?>