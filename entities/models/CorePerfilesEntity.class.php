<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 24.08.2012 17:27:15
 */

/**
 * @orm:Entity(core_perfiles)
 */
class CorePerfilesEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_perfiles")
	 */
	protected $IDPerfil;
	/**
	 * @orm:Column(type="string")
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
	protected $_tableName = 'core_perfiles';
	/**
	 * Nombre de la PrimaryKey
	 * @var string
	 */
	protected $_primaryKeyName = 'IDPerfil';
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
	public function setIDPerfil($IDPerfil){
		$this->IDPerfil = $IDPerfil;
	}
	public function getIDPerfil(){
		return $this->IDPerfil;
	}

	public function setPerfil($Perfil){
		$this->Perfil = trim($Perfil);
	}
	public function getPerfil(){
		return $this->Perfil;
	}

} // END class core_perfiles

?>