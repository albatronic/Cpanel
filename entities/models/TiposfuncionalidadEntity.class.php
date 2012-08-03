<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 03.08.2012 21:15:37
 */

/**
 * @orm:Entity(tiposfuncionalidad)
 */
class TiposfuncionalidadEntity extends Entity {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="tiposfuncionalidad")
	 */
	protected $IDTipoFuncionalidad;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Codigo;
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
	protected $_tableName = 'tiposfuncionalidad';
	/**
	 * Nombre de la PrimaryKey
	 * @var string
	 */
	protected $_primaryKeyName = 'IDTipoFuncionalidad';
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
		);
	/**
	 * GETTERS Y SETTERS
	 */
	public function setIDTipoFuncionalidad($IDTipoFuncionalidad){
		$this->IDTipoFuncionalidad = $IDTipoFuncionalidad;
	}
	public function getIDTipoFuncionalidad(){
		return $this->IDTipoFuncionalidad;
	}

	public function setCodigo($Codigo){
		$this->Codigo = trim($Codigo);
	}
	public function getCodigo(){
		return $this->Codigo;
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

} // END class tiposfuncionalidad

?>