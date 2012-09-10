<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 05.09.2012 08:11:29
 */

/**
 * @orm:Entity(CoreUrlAmigables)
 */
class CoreUrlAmigablesEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="CoreUrlAmigables")
	 */
	protected $Id;
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="CoreUrlAmigables")
	 */
	protected $Controller;
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="CoreUrlAmigables")
	 */
	protected $Action;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Template;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Parametros;
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="CoreUrlAmigables")
	 */
	protected $Entidad;
	/**
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="CoreUrlAmigables")
	 */
	protected $IdEntidad;
	/**
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="CoreUrlAmigables")
	 */
	protected $NumeroVisitas = '0';
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'CoreUrlAmigables';
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

	public function setController($Controller){
		$this->Controller = trim($Controller);
	}
	public function getController(){
		return $this->Controller;
	}

	public function setAction($Action){
		$this->Action = trim($Action);
	}
	public function getAction(){
		return $this->Action;
	}

	public function setTemplate($Template){
		$this->Template = trim($Template);
	}
	public function getTemplate(){
		return $this->Template;
	}

	public function setParametros($Parametros){
		$this->Parametros = trim($Parametros);
	}
	public function getParametros(){
		return $this->Parametros;
	}

	public function setEntidad($Entidad){
		$this->Entidad = trim($Entidad);
	}
	public function getEntidad(){
		return $this->Entidad;
	}

	public function setIdEntidad($IdEntidad){
		$this->IdEntidad = $IdEntidad;
	}
	public function getIdEntidad(){
		return $this->IdEntidad;
	}

	public function setNumeroVisitas($NumeroVisitas){
		$this->NumeroVisitas = $NumeroVisitas;
	}
	public function getNumeroVisitas(){
		return $this->NumeroVisitas;
	}

} // END class CoreUrlAmigables

?>