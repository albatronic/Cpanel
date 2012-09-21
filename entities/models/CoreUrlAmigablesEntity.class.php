<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 18.09.2012 17:45:10
 */

/**
 * @orm:Entity(CoreUrlAmigables)
 */
class CoreUrlAmigablesEntity extends EntityComunes {
	/**
	 * @orm GeneratedValue
	 * @orm Id
	 * @var integer
	 * @assert NotBlank(groups="CoreUrlAmigables")
	 */
	protected $Id;
	/**
	 * @var string
	 * @assert NotBlank(groups="CoreUrlAmigables")
	 */
	protected $UrlAmigable;
	/**
	 * @var string
	 * @assert NotBlank(groups="CoreUrlAmigables")
	 */
	protected $Controller;
	/**
	 * @var string
	 * @assert NotBlank(groups="CoreUrlAmigables")
	 */
	protected $Action;
	/**
	 * @var string
	 */
	protected $Template;
	/**
	 * @var string
	 */
	protected $Parametros;
	/**
	 * @var string
	 * @assert NotBlank(groups="CoreUrlAmigables")
	 */
	protected $Entidad;
	/**
	 * @var integer
	 * @assert NotBlank(groups="CoreUrlAmigables")
	 */
	protected $IdEntidad;
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

	public function setUrlAmigable($UrlAmigable){
		$this->UrlAmigable = trim($UrlAmigable);
	}
	public function getUrlAmigable(){
		return $this->UrlAmigable;
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

} // END class CoreUrlAmigables

?>