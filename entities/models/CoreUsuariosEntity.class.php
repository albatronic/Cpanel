<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 08.09.2012 13:51:05
 */

/**
 * @orm:Entity(CoreUsuarios)
 */
class CoreUsuariosEntity extends EntityComunes {
	/**
	 * @orm GeneratedValue
	 * @orm Id
	 * @var integer
	 * @assert NotBlank(groups="CoreUsuarios")
	 */
	protected $Id;
	/**
	 * @var entities\CorePerfiles
	 * @assert NotBlank(groups="CoreUsuarios")
	 */
	protected $IdPerfil;
	/**
	 * @var entities\CoreRoles
	 * @assert NotBlank(groups="CoreUsuarios")
	 */
	protected $IdRol;
	/**
	 * @var entities\CoreUsuariosTipos
	 * @assert NotBlank(groups="CoreUsuarios")
	 */
	protected $IdTipoUsuario;
	/**
	 * @var string
	 * @assert NotBlank(groups="CoreUsuarios")
	 */
	protected $Login;
	/**
	 * @var string
	 * @assert NotBlank(groups="CoreUsuarios")
	 */
	protected $Password;
	/**
	 * @var string
	 * @assert NotBlank(groups="CoreUsuarios")
	 */
	protected $Apellidos;
	/**
	 * @var string
	 * @assert NotBlank(groups="CoreUsuarios")
	 */
	protected $Nombre;
	/**
	 * @var string
	 */
	protected $Email;
	/**
	 * @var string
	 */
	protected $TelefonoMovil;
	/**
	 * @var tinyint
	 * @assert NotBlank(groups="CoreUsuarios")
	 */
	protected $CambioPassword = '0';
	/**
	 * @var string
	 */
	protected $Ips;
	/**
	 * @var integer
	 */
	protected $NLogin = '0';
	/**
	 * @var datetime
	 */
	protected $UltimoLogin = '0000-00-00 00:00:00';
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'CoreUsuarios';
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
			array('SourceColumn' => 'Id', 'ParentEntity' => 'CoreUsuarios', 'ParentColumn' => 'IdTipoUsuario'),
		);
	/**
	 * Relacion de entidades de las que esta depende
	 * @var string
	 */
	protected $_childEntities = array(
			'CorePerfiles',
			'CoreRoles',
			'CoreUsuariosTipos',
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

	public function setIdPerfil($IdPerfil){
		$this->IdPerfil = $IdPerfil;
	}
	public function getIdPerfil(){
		if (!($this->IdPerfil instanceof CorePerfiles))
			$this->IdPerfil = new CorePerfiles($this->IdPerfil);
		return $this->IdPerfil;
	}

	public function setIdRol($IdRol){
		$this->IdRol = $IdRol;
	}
	public function getIdRol(){
		if (!($this->IdRol instanceof CoreRoles))
			$this->IdRol = new CoreRoles($this->IdRol);
		return $this->IdRol;
	}

	public function setIdTipoUsuario($IdTipoUsuario){
		$this->IdTipoUsuario = $IdTipoUsuario;
	}
	public function getIdTipoUsuario(){
		if (!($this->IdTipoUsuario instanceof CoreUsuariosTipos))
			$this->IdTipoUsuario = new CoreUsuariosTipos($this->IdTipoUsuario);
		return $this->IdTipoUsuario;
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

	public function setApellidos($Apellidos){
		$this->Apellidos = trim($Apellidos);
	}
	public function getApellidos(){
		return $this->Apellidos;
	}

	public function setNombre($Nombre){
		$this->Nombre = trim($Nombre);
	}
	public function getNombre(){
		return $this->Nombre;
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

} // END class CoreUsuarios

?>