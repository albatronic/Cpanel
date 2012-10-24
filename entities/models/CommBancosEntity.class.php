<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 17.10.2012 14:24:31
 */

/**
 * @orm:Entity(CommBancos)
 */
class CommBancosEntity extends EntityComunes {
	/**
	 * @orm GeneratedValue
	 * @orm Id
	 * @var integer
	 * @assert NotBlank(groups="CommBancos")
	 */
	protected $Id;
	/**
	 * @var string
	 * @assert NotBlank(groups="CommBancos")
	 */
	protected $Codigo;
	/**
	 * @var string
	 * @assert NotBlank(groups="CommBancos")
	 */
	protected $Nombre;
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'pcae';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'CommBancos';
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
			array('SourceColumn' => 'Id', 'ParentEntity' => 'CommBancosOficinas', 'ParentColumn' => 'IdBanco'),
			array('SourceColumn' => 'Id', 'ParentEntity' => 'PcaeEmpresas', 'ParentColumn' => 'IdBanco'),
		);
	/**
	 * Relacion de entidades de las que esta depende
	 * @var string
	 */
	protected $_childEntities = array(
			'ValoresSN',
			'ValoresPrivacy',
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

	public function setCodigo($Codigo){
		$this->Codigo = trim($Codigo);
	}
	public function getCodigo(){
		return $this->Codigo;
	}

	public function setNombre($Nombre){
		$this->Nombre = trim($Nombre);
	}
	public function getNombre(){
		return $this->Nombre;
	}

} // END class CommBancos

?>