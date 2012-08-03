<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 03.08.2012 21:15:37
 */

/**
 * @orm:Entity(funcionalidades)
 */
class FuncionalidadesEntity extends Entity {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="funcionalidades")
	 */
	protected $IDFuncionalidad;
	/**
	 * @orm:Column(type="integer")
	 * @var entities\Opciones
	 */
	protected $IDOpcion;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Funcionalidades;
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'datos#';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'funcionalidades';
	/**
	 * Nombre de la PrimaryKey
	 * @var string
	 */
	protected $_primaryKeyName = 'IDFuncionalidad';
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
			'Opciones',
			'ValoresSN',
			'ValoresPrivacidad',
		);
	/**
	 * GETTERS Y SETTERS
	 */
	public function setIDFuncionalidad($IDFuncionalidad){
		$this->IDFuncionalidad = $IDFuncionalidad;
	}
	public function getIDFuncionalidad(){
		return $this->IDFuncionalidad;
	}

	public function setIDOpcion($IDOpcion){
		$this->IDOpcion = $IDOpcion;
	}
	public function getIDOpcion(){
		if (!($this->IDOpcion instanceof Opciones))
			$this->IDOpcion = new Opciones($this->IDOpcion);
		return $this->IDOpcion;
	}

	public function setFuncionalidades($Funcionalidades){
		$this->Funcionalidades = trim($Funcionalidades);
	}
	public function getFuncionalidades(){
		return $this->Funcionalidades;
	}

} // END class funcionalidades

?>