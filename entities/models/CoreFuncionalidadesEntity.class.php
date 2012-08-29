<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 27.08.2012 21:03:13
 */

/**
 * @orm:Entity(core_funcionalidades)
 */
class CoreFuncionalidadesEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_funcionalidades")
	 */
	protected $IDFuncionalidad;
	/**
	 * @orm:Column(type="integer")
	 * @var entities\CoreModulos
	 */
	protected $IDModulo;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Funcionalidades;
	/**
	 * @orm:Column(type="integer")
	 */
	protected $NumeroVisitas;
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'core_funcionalidades';
	/**
	 * Nombre de la PrimaryKey
	 * @var string
	 */
	protected $_primaryKeyName = 'IDFuncionalidad';
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
			'CoreModulos',
			'ValoresSN',
			'ValoresPrivacidad',
		);
	/**
	 * GETTERS Y SETTERS
	 */
	public function setIDFuncionalidad($IDFuncionalidad){
		$this->IDFuncionalidad = $IDFuncionalidad;
	}
	public function getIDFuncionalidad(){
		return $this->IDFuncionalidad;
	}

	public function setIDModulo($IDModulo){
		$this->IDModulo = $IDModulo;
	}
	public function getIDModulo(){
		if (!($this->IDModulo instanceof CoreModulos))
			$this->IDModulo = new CoreModulos($this->IDModulo);
		return $this->IDModulo;
	}

	public function setFuncionalidades($Funcionalidades){
		$this->Funcionalidades = trim($Funcionalidades);
	}
	public function getFuncionalidades(){
		return $this->Funcionalidades;
	}

	public function setNumeroVisitas($NumeroVisitas){
		$this->NumeroVisitas = $NumeroVisitas;
	}
	public function getNumeroVisitas(){
		return $this->NumeroVisitas;
	}

} // END class core_funcionalidades

?>
