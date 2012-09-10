<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 05.09.2012 08:11:29
 */

/**
 * @orm:Entity(CoreRoles)
 */
class CoreRolesEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="CoreRoles")
	 */
	protected $Id;
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="CoreRoles")
	 */
	protected $Rol;
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'CoreRoles';
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
			array('SourceColumn' => 'Id', 'ParentEntity' => 'CoreUsuarios', 'ParentColumn' => 'IdRol'),
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
	public function setId($Id){
		$this->Id = $Id;
	}
	public function getId(){
		return $this->Id;
	}

	public function setRol($Rol){
		$this->Rol = trim($Rol);
	}
	public function getRol(){
		return $this->Rol;
	}

} // END class CoreRoles

?>