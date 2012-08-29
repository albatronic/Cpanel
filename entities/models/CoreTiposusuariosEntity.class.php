<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 24.08.2012 17:27:15
 */

/**
 * @orm:Entity(core_tiposusuarios)
 */
class CoreTiposusuariosEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_tiposusuarios")
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
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'core_tiposusuarios';
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

} // END class core_tiposusuarios

?>