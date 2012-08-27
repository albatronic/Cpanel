<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 27.08.2012 21:03:13
 */

/**
 * @orm:Entity(core_modulos)
 */
class CoreModulosEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_modulos")
	 */
	protected $IDModulo;
	/**
	 * @orm:Column(type="string")
	 * @var entities\CoreAplicaciones
	 */
	protected $CodigoApp;
	/**
	 * @orm:Column(type="string")
	 */
	protected $NombreModulo;
	/**
	 * @orm:Column(type="integer")
	 */
	protected $Nivel;
	/**
	 * @orm:Column(type="string")
	 */
	protected $PerteneceA;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Titulo;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Descripcion;
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
	protected $_tableName = 'core_modulos';
	/**
	 * Nombre de la PrimaryKey
	 * @var string
	 */
	protected $_primaryKeyName = 'IDModulo';
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
			'CoreAplicaciones',
			'ValoresSN',
			'ValoresPrivacidad',
			'ValoresDchaIzq',
			'ValoresChangeFreq',
		);
	/**
	 * GETTERS Y SETTERS
	 */
	public function setIDModulo($IDModulo){
		$this->IDModulo = $IDModulo;
	}
	public function getIDModulo(){
		return $this->IDModulo;
	}

	public function setCodigoApp($CodigoApp){
		$this->CodigoApp = trim($CodigoApp);
	}
	public function getCodigoApp(){
		if (!($this->CodigoApp instanceof CoreAplicaciones))
			$this->CodigoApp = new CoreAplicaciones($this->CodigoApp);
		return $this->CodigoApp;
	}

	public function setNombreModulo($NombreModulo){
		$this->NombreModulo = trim($NombreModulo);
	}
	public function getNombreModulo(){
		return $this->NombreModulo;
	}

	public function setNivel($Nivel){
		$this->Nivel = $Nivel;
	}
	public function getNivel(){
		return $this->Nivel;
	}

	public function setPerteneceA($PerteneceA){
		$this->PerteneceA = trim($PerteneceA);
	}
	public function getPerteneceA(){
		return $this->PerteneceA;
	}

	public function setTitulo($Titulo){
		$this->Titulo = trim($Titulo);
	}
	public function getTitulo(){
		return $this->Titulo;
	}

	public function setDescripcion($Descripcion){
		$this->Descripcion = trim($Descripcion);
	}
	public function getDescripcion(){
		return $this->Descripcion;
	}

	public function setFuncionalidades($Funcionalidades){
		$this->Funcionalidades = trim($Funcionalidades);
	}
	public function getFuncionalidades(){
		return $this->Funcionalidades;
	}

} // END class core_modulos

?>