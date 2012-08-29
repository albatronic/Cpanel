<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 27.08.2012 21:03:13
 */

/**
 * @orm:Entity(core_tiposfuncionalidad)
 */
class CoreTiposfuncionalidadEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_tiposfuncionalidad")
	 */
	protected $IDTipoFuncionalidad;
	/**
	 * @orm:Column(type="string")
	 */
	protected $CodigoFuncionalidad;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Titulo;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Descripcion;
	/**
	 * @orm:Column(type="tinyint")
	 */
	protected $EsEstandar = '1';
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'core_tiposfuncionalidad';
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
			'ValoresDchaIzq',
			'ValoresChangeFreq',
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

	public function setCodigoFuncionalidad($CodigoFuncionalidad){
		$this->CodigoFuncionalidad = trim($CodigoFuncionalidad);
	}
	public function getCodigoFuncionalidad(){
		return $this->CodigoFuncionalidad;
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

} // END class core_tiposfuncionalidad

?>
