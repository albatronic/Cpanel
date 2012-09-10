<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 05.09.2012 08:11:29
 */

/**
 * @orm:Entity(CorePerfiles)
 */
class CorePerfilesEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="CorePerfiles")
	 */
	protected $Id;
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="CorePerfiles")
	 */
	protected $Perfil;
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'CorePerfiles';
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
			array('SourceColumn' => 'Id', 'ParentEntity' => 'CorePermisos', 'ParentColumn' => 'IdPerfil'),
			array('SourceColumn' => 'Id', 'ParentEntity' => 'CoreUsuarios', 'ParentColumn' => 'IdPerfil'),
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

	public function setPerfil($Perfil){
		$this->Perfil = trim($Perfil);
	}
	public function getPerfil(){
		return $this->Perfil;
	}

} // END class CorePerfiles

?>