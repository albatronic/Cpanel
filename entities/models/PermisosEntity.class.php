<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 03.08.2012 21:15:37
 */

/**
 * @orm:Entity(permisos)
 */
class PermisosEntity extends Entity {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="permisos")
	 */
	protected $IDPermiso;
	/**
	 * @orm:Column(type="integer")
	 */
	protected $IDPerfil;
	/**
	 * @orm:Column(type="integer")
	 */
	protected $IDOpcion;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Permisos;
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'datos#';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'permisos';
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
		return $this->IDPerfil;
	}

	public function setIDOpcion($IDOpcion){
		$this->IDOpcion = $IDOpcion;
	}
	public function getIDOpcion(){
		return $this->IDOpcion;
	}

	public function setPermisos($Permisos){
		$this->Permisos = trim($Permisos);
	}
	public function getPermisos(){
		return $this->Permisos;
	}

} // END class permisos

?>