<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 03.08.2012 21:15:37
 */

/**
 * @orm:Entity(tiposusuarios)
 */
class TiposusuariosEntity extends Entity {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="tiposusuarios")
	 */
	protected $IDTipoUsuario;
	/**
	 * @orm:Column(type="string")
	 */
	protected $TipoUsuario;
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'datos#';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'tiposusuarios';
	/**
	 * Nombre de la PrimaryKey
	 * @var string
	 */
	protected $_primaryKeyName = 'IDTipoUsuario';
	/**
	 * Relacion de entidades que dependen de esta
	 * @var string
	 */
	protected $_parentEntities = array(
			array('SourceColumn' => 'IDTipoUsuario', 'ParentEntity' => 'Usuarios', 'ParentColumn' => 'IDTipoUsuario'),
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
	public function setIDTipoUsuario($IDTipoUsuario){
		$this->IDTipoUsuario = $IDTipoUsuario;
	}
	public function getIDTipoUsuario(){
		return $this->IDTipoUsuario;
	}

	public function setTipoUsuario($TipoUsuario){
		$this->TipoUsuario = trim($TipoUsuario);
	}
	public function getTipoUsuario(){
		return $this->TipoUsuario;
	}

} // END class tiposusuarios

?>