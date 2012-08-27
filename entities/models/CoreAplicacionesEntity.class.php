<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 27.08.2012 21:03:13
 */

/**
 * @orm:Entity(core_aplicaciones)
 */
class CoreAplicacionesEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_aplicaciones")
	 */
	protected $IDApp;
	/**
	 * @orm:Column(type="string")
	 */
	protected $CodigoApp;
	/**
	 * @orm:Column(type="string")
	 */
	protected $NombreApp;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Descripcion;
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'core_aplicaciones';
	/**
	 * Nombre de la PrimaryKey
	 * @var string
	 */
	protected $_primaryKeyName = 'IDApp';
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
			'ValoresPrivacidad',
			'ValoresDchaIzq',
			'ValoresChangeFreq',
		);
	/**
	 * GETTERS Y SETTERS
	 */
	public function setIDApp($IDApp){
		$this->IDApp = $IDApp;
	}
	public function getIDApp(){
		return $this->IDApp;
	}

	public function setCodigoApp($CodigoApp){
		$this->CodigoApp = trim($CodigoApp);
	}
	public function getCodigoApp(){
		return $this->CodigoApp;
	}

	public function setNombreApp($NombreApp){
		$this->NombreApp = trim($NombreApp);
	}
	public function getNombreApp(){
		return $this->NombreApp;
	}

	public function setDescripcion($Descripcion){
		$this->Descripcion = trim($Descripcion);
	}
	public function getDescripcion(){
		return $this->Descripcion;
	}

} // END class core_aplicaciones

?>