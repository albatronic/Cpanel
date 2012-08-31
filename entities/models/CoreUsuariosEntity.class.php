<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 30.08.2012 18:13:36
 */

/**
 * @orm:Entity(core_usuarios)
 */
class CoreUsuariosEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_usuarios")
	 */
	protected $IDUsuario;
	/**
	 * @orm:Column(type="integer")
	 * @var entities\CorePerfiles
	 */
	protected $IDPerfil;
	/**
	 * @orm:Column(type="integer")
	 * @var entities\CoreRoles
	 */
	protected $IDRol;
	/**
	 * @orm:Column(type="integer")
	 * @var entities\CoreTiposusuarios
	 */
	protected $IDTipoUsuario;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Login;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Password;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Email;
	/**
	 * @orm:Column(type="string")
	 */
	protected $TelefonoMovil;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Nombre;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Apellidos;
	/**
	 * @orm:Column(type="tinyint")
	 */
	protected $CambioPassword = '0';
	/**
	 * @orm:Column(type="string")
	 */
	protected $Ips;
	/**
	 * @orm:Column(type="integer")
	 */
	protected $NLogin;
	/**
	 * @orm:Column(type="datetime")
	 */
	protected $UltimoLogin;
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'core_usuarios';
	/**
	 * Nombre de la PrimaryKey
	 * @var string
	 */
	protected $_primaryKeyName = 'IDUsuario';
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
			'CorePerfiles',
			'CoreRoles',
			'CoreTiposusuarios',
			'ValoresSN',
			'ValoresPrivacidad',
			'ValoresDchaIzq',
			'ValoresChangeFreq',
		);
	/**
	 * GETTERS Y SETTERS
	 */
	public function setIDUsuario($IDUsuario){
		$this->IDUsuario = $IDUsuario;
	}
	public function getIDUsuario(){
		return $this->IDUsuario;
	}

	public function setIDPerfil($IDPerfil){
		$this->IDPerfil = $IDPerfil;
	}
	public function getIDPerfil(){
		if (!($this->IDPerfil instanceof CorePerfiles))
			$this->IDPerfil = new CorePerfiles($this->IDPerfil);
		return $this->IDPerfil;
	}

	public function setIDRol($IDRol){
		$this->IDRol = $IDRol;
	}
	public function getIDRol(){
		if (!($this->IDRol instanceof CoreRoles))
			$this->IDRol = new CoreRoles($this->IDRol);
		return $this->IDRol;
	}

	public function setIDTipoUsuario($IDTipoUsuario){
		$this->IDTipoUsuario = $IDTipoUsuario;
	}
	public function getIDTipoUsuario(){
		if (!($this->IDTipoUsuario instanceof CoreTiposusuarios))
			$this->IDTipoUsuario = new CoreTiposusuarios($this->IDTipoUsuario);
		return $this->IDTipoUsuario;
	}

	public function setLogin($Login){
		$this->Login = trim($Login);
	}
	public function getLogin(){
		return $this->Login;
	}

	public function setPassword($Password){
		$this->Password = trim($Password);
	}
	public function getPassword(){
		return $this->Password;
	}

	public function setEmail($Email){
		$this->Email = trim($Email);
	}
	public function getEmail(){
		return $this->Email;
	}

	public function setTelefonoMovil($TelefonoMovil){
		$this->TelefonoMovil = trim($TelefonoMovil);
	}
	public function getTelefonoMovil(){
		return $this->TelefonoMovil;
	}

	public function setNombre($Nombre){
		$this->Nombre = trim($Nombre);
	}
	public function getNombre(){
		return $this->Nombre;
	}

	public function setApellidos($Apellidos){
		$this->Apellidos = trim($Apellidos);
	}
	public function getApellidos(){
		return $this->Apellidos;
	}

	public function setCambioPassword($CambioPassword){
		$this->CambioPassword = $CambioPassword;
	}
	public function getCambioPassword(){
		if (!($this->CambioPassword instanceof ValoresSN))
			$this->CambioPassword = new ValoresSN($this->CambioPassword);
		return $this->CambioPassword;
	}

	public function setIps($Ips){
		$this->Ips = trim($Ips);
	}
	public function getIps(){
		return $this->Ips;
	}

	public function setNLogin($NLogin){
		$this->NLogin = $NLogin;
	}
	public function getNLogin(){
		return $this->NLogin;
	}

	public function setUltimoLogin($UltimoLogin){
		$this->UltimoLogin = $UltimoLogin;
	}
	public function getUltimoLogin(){
		return $this->UltimoLogin;
	}

} // END class core_usuarios

?>