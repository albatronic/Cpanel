<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 24.08.2012 17:27:15
 */

/**
 * @orm:Entity(core_permisos)
 */
class CorePermisosEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_permisos")
	 */
	protected $IDPermiso;
	/**
	 * @orm:Column(type="integer")
	 * @var entities\CorePerfiles
	 */
	protected $IDPerfil;
	/**
	 * @orm:Column(type="string")
	 * @var entities\CoreModulos
	 */
	protected $NombreModulo;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Funcionalidades;
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'core_permisos';
	/**
	 * Nombre de la PrimaryKey
	 * @var string
	 */
	protected $_primaryKeyName = 'IDPermiso';
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
			'CoreModulos',
			'ValoresSN',
			'ValoresPrivacidad',
		);
	/**
	 * GETTERS Y SETTERS
	 */
	public function setIDPermiso($IDPermiso){
		$this->IDPermiso = $IDPermiso;
	}
	public function getIDPermiso(){
		return $this->IDPermiso;
	}

	public function setIDPerfil($IDPerfil){
		$this->IDPerfil = $IDPerfil;
	}
	public function getIDPerfil(){
		if (!($this->IDPerfil instanceof CorePerfiles))
			$this->IDPerfil = new CorePerfiles($this->IDPerfil);
		return $this->IDPerfil;
	}

	public function setNombreModulo($NombreModulo){
		$this->NombreModulo = trim($NombreModulo);
	}
	public function getNombreModulo(){
		if (!($this->NombreModulo instanceof CoreModulos))
			$this->NombreModulo = new CoreModulos($this->NombreModulo);
		return $this->NombreModulo;
	}

	public function setFuncionalidades($Funcionalidades){
		$this->Funcionalidades = trim($Funcionalidades);
	}
	public function getFuncionalidades(){
		return $this->Funcionalidades;
	}

} // END class core_permisos

?>