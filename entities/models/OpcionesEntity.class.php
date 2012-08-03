<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 03.08.2012 21:15:37
 */

/**
 * @orm:Entity(opciones)
 */
class OpcionesEntity extends Entity {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="opciones")
	 */
	protected $IDOpcion;
	/**
	 * @orm:Column(type="integer")
	 * @var entities\Aplicaciones
	 */
	protected $CodigoApp;
	/**
	 * @orm:Column(type="integer")
	 */
	protected $Nivel;
	/**
	 * @orm:Column(type="integer")
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
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'datos#';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'opciones';
	/**
	 * Nombre de la PrimaryKey
	 * @var string
	 */
	protected $_primaryKeyName = 'IDOpcion';
	/**
	 * Relacion de entidades que dependen de esta
	 * @var string
	 */
	protected $_parentEntities = array(
			array('SourceColumn' => 'IDOpcion', 'ParentEntity' => 'Funcionalidades', 'ParentColumn' => 'IDOpcion'),
		);
	/**
	 * Relacion de entidades de las que esta depende
	 * @var string
	 */
	protected $_childEntities = array(
			'Aplicaciones',
			'ValoresSN',
			'ValoresPrivacidad',
		);
	/**
	 * GETTERS Y SETTERS
	 */
	public function setIDOpcion($IDOpcion){
		$this->IDOpcion = $IDOpcion;
	}
	public function getIDOpcion(){
		return $this->IDOpcion;
	}

	public function setCodigoApp($CodigoApp){
		$this->CodigoApp = $CodigoApp;
	}
	public function getCodigoApp(){
		if (!($this->CodigoApp instanceof Aplicaciones))
			$this->CodigoApp = new Aplicaciones($this->CodigoApp);
		return $this->CodigoApp;
	}

	public function setNivel($Nivel){
		$this->Nivel = $Nivel;
	}
	public function getNivel(){
		return $this->Nivel;
	}

	public function setPerteneceA($PerteneceA){
		$this->PerteneceA = $PerteneceA;
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

} // END class opciones

?>