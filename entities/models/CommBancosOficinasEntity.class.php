<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 04.11.2012 20:25:21
 */

/**
 * @orm:Entity(CommBancosOficinas)
 */
class CommBancosOficinasEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="CommBancosOficinas")
     */
    protected $Id;

    /**
     * @var entities\CommBancos
     * @assert NotBlank(groups="CommBancosOficinas")
     */
    protected $IdBanco;

    /**
     * @var string
     * @assert NotBlank(groups="CommBancosOficinas")
     */
    protected $Codigo;

    /**
     * @var string
     */
    protected $Digito;

    /**
     * @var entities\CommPaises
     * @assert NotBlank(groups="CommBancosOficinas")
     */
    protected $IdPais = '0';

    /**
     * @var entities\CommProvincias
     * @assert NotBlank(groups="CommBancosOficinas")
     */
    protected $IdProvincia = '0';

    /**
     * @var entities\CommMunicipios
     */
    protected $IdMunicipio = '0';

    /**
     * @var string
     */
    protected $Direccion;

    /**
     * @var string
     */
    protected $CodigoPostal = '0';

    /**
     * @var string
     */
    protected $Telefono;

    /**
     * @var string
     */
    protected $Fax;

    /**
     * @var string
     */
    protected $Web;

    /**
     * @var string
     */
    protected $EMail;

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = 'pcae';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'CommBancosOficinas';

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
        'CommBancos',
        'CommPaises',
        'CommProvincias',
        'CommMunicipios',
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

    public function setIdBanco($IdBanco) {
        $this->IdBanco = $IdBanco;
    }

    public function getIdBanco() {
        if (!($this->IdBanco instanceof CommBancos))
            $this->IdBanco = new CommBancos($this->IdBanco);
        return $this->IdBanco;
    }

    public function setCodigo($Codigo) {
        $this->Codigo = trim($Codigo);
    }

    public function getCodigo() {
        return $this->Codigo;
    }

    public function setDigito($Digito) {
        $this->Digito = trim($Digito);
    }

    public function getDigito() {
        return $this->Digito;
    }

    public function setIdPais($IdPais) {
        $this->IdPais = $IdPais;
    }

    public function getIdPais() {
        if (!($this->IdPais instanceof CommPaises))
            $this->IdPais = new CommPaises($this->IdPais);
        return $this->IdPais;
    }

    public function setIdProvincia($IdProvincia) {
        $this->IdProvincia = $IdProvincia;
    }

    public function getIdProvincia() {
        if (!($this->IdProvincia instanceof CommProvincias))
            $this->IdProvincia = new CommProvincias($this->IdProvincia);
        return $this->IdProvincia;
    }

    public function setIdMunicipio($IdMunicipio) {
        $this->IdMunicipio = $IdMunicipio;
    }

    public function getIdMunicipio() {
        if (!($this->IdMunicipio instanceof CommMunicipios))
            $this->IdMunicipio = new CommMunicipios($this->IdMunicipio);
        return $this->IdMunicipio;
    }

    public function setDireccion($Direccion) {
        $this->Direccion = trim($Direccion);
    }

    public function getDireccion() {
        return $this->Direccion;
    }

    public function setCodigoPostal($CodigoPostal) {
        $this->CodigoPostal = trim($CodigoPostal);
    }

    public function getCodigoPostal() {
        return $this->CodigoPostal;
    }

    public function setTelefono($Telefono) {
        $this->Telefono = trim($Telefono);
    }

    public function getTelefono() {
        return $this->Telefono;
    }

    public function setFax($Fax) {
        $this->Fax = trim($Fax);
    }

    public function getFax() {
        return $this->Fax;
    }

    public function setWeb($Web) {
        $this->Web = trim($Web);
    }

    public function getWeb() {
        return $this->Web;
    }

    public function setEMail($EMail) {
        $this->EMail = trim($EMail);
    }

    public function getEMail() {
        return $this->EMail;
    }

}

// END class CommBancosOficinas
?>