<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 30.08.2012 18:36:45
 */

/**
 * @orm:Entity(core_urlamigables)
 */
class CoreUrlamigablesEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_urlamigables")
	 */
	protected $IDUrlAmigable;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Controller;
	/**
	 * @orm:Column(type="string")
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
	 * @orm:Column(type="integer")
	 */
	protected $IDEntidad;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Entidad;
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
	protected $_tableName = 'core_urlamigables';
	/**
	 * Nombre de la PrimaryKey
	 * @var string
	 */
	protected $_primaryKeyName = 'IDUrlAmigable';
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
		);
	/**
	 * GETTERS Y SETTERS
	 */
	public function setIDUrlAmigable($IDUrlAmigable){
		$this->IDUrlAmigable = $IDUrlAmigable;
	}
	public function getIDUrlAmigable(){
		return $this->IDUrlAmigable;
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

	public function setIDEntidad($IDEntidad){
		$this->IDEntidad = $IDEntidad;
	}
	public function getIDEntidad(){
		return $this->IDEntidad;
	}

	public function setEntidad($Entidad){
		$this->Entidad = trim($Entidad);
	}
	public function getEntidad(){
		return $this->Entidad;
	}

	public function setNumeroVisitas($NumeroVisitas){
		$this->NumeroVisitas = $NumeroVisitas;
	}
	public function getNumeroVisitas(){
		return $this->NumeroVisitas;
	}

} // END class core_urlamigables

?>