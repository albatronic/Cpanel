<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 05.09.2012 08:11:29
 */

/**
 * @orm:Entity(CoreFuncionalidades)
 */
class CoreFuncionalidadesEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="CoreFuncionalidades")
	 */
	protected $Id;
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="CoreFuncionalidades")
	 */
	protected $Codigo;
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="CoreFuncionalidades")
	 */
	protected $Titulo;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Descripcion;
	/**
	 * @orm:Column(type="tinyint")
	 * @assert:NotBlank(groups="CoreFuncionalidades")
	 * @var entities\ValoresSN
	 */
	protected $EsEstandar = '0';
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'CoreFuncionalidades';
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

	public function setEsEstandar($EsEstandar){
		$this->EsEstandar = $EsEstandar;
	}
	public function getEsEstandar(){
		if (!($this->EsEstandar instanceof ValoresSN))
			$this->EsEstandar = new ValoresSN($this->EsEstandar);
		return $this->EsEstandar;
	}

} // END class CoreFuncionalidades

?>