<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 17.10.2012 14:24:31
 */

/**
 * @orm:Entity(PcaeEmpresas)
 */
class PcaeEmpresasEntity extends EntityComunes {
	/**
	 * @orm GeneratedValue
	 * @orm Id
	 * @var integer
	 * @assert NotBlank(groups="PcaeEmpresas")
	 */
	protected $Id;
	/**
	 * @var entities\PcaeGruposEmpresas
	 * @assert NotBlank(groups="PcaeEmpresas")
	 */
	protected $IdGrupo = '0';
	/**
	 * @var string
	 * @assert NotBlank(groups="PcaeEmpresas")
	 */
	protected $RazonSocial;
	/**
	 * @var string
	 */
	protected $Cif;
	/**
	 * @var string
	 */
	protected $Direccion;
	/**
	 * @var entities\CommMunicipios
	 */
	protected $IdMunicipio = '0';
	/**
	 * @var string
	 */
	protected $CodigoPostal = '0';
	/**
	 * @var entities\CommProvincias
	 * @assert NotBlank(groups="PcaeEmpresas")
	 */
	protected $IdProvincia = '0';
	/**
	 * @var entities\CommPaises
	 * @assert NotBlank(groups="PcaeEmpresas")
	 */
	protected $IdPais = '0';
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
	 * @var entities\CommBancos
	 */
	protected $IdBanco = '0';
	/**
	 * @var entities\CommOficinas
	 */
	protected $IdOficina = '0';
	/**
	 * @var string
	 * @assert NotBlank(groups="PcaeEmpresas")
	 */
	protected $DigitoControl = '00';
	/**
	 * @var string
	 * @assert NotBlank(groups="PcaeEmpresas")
	 */
	protected $Cuenta = '0000000000';
	/**
	 * @var string
	 */
	protected $IBAN;
	/**
	 * @var string
	 */
	protected $SufijoRemesas = '00';
	/**
	 * @var integer
	 */
	protected $DigitosCuentaContable = '10';
	/**
	 * @var entities\CommCnae
	 */
	protected $IdCNAE = '0';
	/**
	 * @var string
	 */
	protected $RegistroMercantil;
	/**
	 * @var string
	 */
	protected $LicenciaActividad;
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'pcae';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'PcaeEmpresas';
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
			array('SourceColumn' => 'Id', 'ParentEntity' => 'PcaeEmpresasUsuarios', 'ParentColumn' => 'IdEmpresa'),
			array('SourceColumn' => 'Id', 'ParentEntity' => 'PcaeProyectos', 'ParentColumn' => 'IdEmpresa'),
			array('SourceColumn' => 'Id', 'ParentEntity' => 'PcaePermisos', 'ParentColumn' => 'IdEmpresa'),
		);
	/**
	 * Relacion de entidades de las que esta depende
	 * @var string
	 */
	protected $_childEntities = array(
			'PcaeGruposEmpresas',
			'CommMunicipios',
			'CommProvincias',
			'CommPaises',
			'CommBancos',
			'CommOficinas',
			'CommCnae',
			'ValoresSN',
			'ValoresPrivacy',
			'ValoresDchaIzq',
			'ValoresChangeFreq',
		);
	/**
	 * GETTERS Y SETTERS
	 */
	public function setId($Id){
		$this->Id = $Id;
	}
	public function getId(){
		return $this->Id;
	}

	public function setIdGrupo($IdGrupo){
		$this->IdGrupo = $IdGrupo;
	}
	public function getIdGrupo(){
		if (!($this->IdGrupo instanceof PcaeGruposEmpresas))
			$this->IdGrupo = new PcaeGruposEmpresas($this->IdGrupo);
		return $this->IdGrupo;
	}

	public function setRazonSocial($RazonSocial){
		$this->RazonSocial = trim($RazonSocial);
	}
	public function getRazonSocial(){
		return $this->RazonSocial;
	}

	public function setCif($Cif){
		$this->Cif = trim($Cif);
	}
	public function getCif(){
		return $this->Cif;
	}

	public function setDireccion($Direccion){
		$this->Direccion = trim($Direccion);
	}
	public function getDireccion(){
		return $this->Direccion;
	}

	public function setIdMunicipio($IdMunicipio){
		$this->IdMunicipio = $IdMunicipio;
	}
	public function getIdMunicipio(){
		if (!($this->IdMunicipio instanceof CommMunicipios))
			$this->IdMunicipio = new CommMunicipios($this->IdMunicipio);
		return $this->IdMunicipio;
	}

	public function setCodigoPostal($CodigoPostal){
		$this->CodigoPostal = trim($CodigoPostal);
	}
	public function getCodigoPostal(){
		return $this->CodigoPostal;
	}

	public function setIdProvincia($IdProvincia){
		$this->IdProvincia = $IdProvincia;
	}
	public function getIdProvincia(){
		if (!($this->IdProvincia instanceof CommProvincias))
			$this->IdProvincia = new CommProvincias($this->IdProvincia);
		return $this->IdProvincia;
	}

	public function setIdPais($IdPais){
		$this->IdPais = $IdPais;
	}
	public function getIdPais(){
		if (!($this->IdPais instanceof CommPaises))
			$this->IdPais = new CommPaises($this->IdPais);
		return $this->IdPais;
	}

	public function setTelefono($Telefono){
		$this->Telefono = trim($Telefono);
	}
	public function getTelefono(){
		return $this->Telefono;
	}

	public function setFax($Fax){
		$this->Fax = trim($Fax);
	}
	public function getFax(){
		return $this->Fax;
	}

	public function setWeb($Web){
		$this->Web = trim($Web);
	}
	public function getWeb(){
		return $this->Web;
	}

	public function setEMail($EMail){
		$this->EMail = trim($EMail);
	}
	public function getEMail(){
		return $this->EMail;
	}

	public function setIdBanco($IdBanco){
		$this->IdBanco = $IdBanco;
	}
	public function getIdBanco(){
		if (!($this->IdBanco instanceof CommBancos))
			$this->IdBanco = new CommBancos($this->IdBanco);
		return $this->IdBanco;
	}

	public function setIdOficina($IdOficina){
		$this->IdOficina = $IdOficina;
	}
	public function getIdOficina(){
		if (!($this->IdOficina instanceof CommOficinas))
			$this->IdOficina = new CommOficinas($this->IdOficina);
		return $this->IdOficina;
	}

	public function setDigitoControl($DigitoControl){
		$this->DigitoControl = trim($DigitoControl);
	}
	public function getDigitoControl(){
		return $this->DigitoControl;
	}

	public function setCuenta($Cuenta){
		$this->Cuenta = trim($Cuenta);
	}
	public function getCuenta(){
		return $this->Cuenta;
	}

	public function setIBAN($IBAN){
		$this->IBAN = trim($IBAN);
	}
	public function getIBAN(){
		return $this->IBAN;
	}

	public function setSufijoRemesas($SufijoRemesas){
		$this->SufijoRemesas = trim($SufijoRemesas);
	}
	public function getSufijoRemesas(){
		return $this->SufijoRemesas;
	}

	public function setDigitosCuentaContable($DigitosCuentaContable){
		$this->DigitosCuentaContable = $DigitosCuentaContable;
	}
	public function getDigitosCuentaContable(){
		return $this->DigitosCuentaContable;
	}

	public function setIdCNAE($IdCNAE){
		$this->IdCNAE = $IdCNAE;
	}
	public function getIdCNAE(){
		if (!($this->IdCNAE instanceof CommCnae))
			$this->IdCNAE = new CommCnae($this->IdCNAE);
		return $this->IdCNAE;
	}

	public function setRegistroMercantil($RegistroMercantil){
		$this->RegistroMercantil = trim($RegistroMercantil);
	}
	public function getRegistroMercantil(){
		return $this->RegistroMercantil;
	}

	public function setLicenciaActividad($LicenciaActividad){
		$this->LicenciaActividad = trim($LicenciaActividad);
	}
	public function getLicenciaActividad(){
		return $this->LicenciaActividad;
	}

} // END class PcaeEmpresas

?>