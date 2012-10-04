<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 30.09.2012 16:42:34
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
	protected $Parameters;
	/**
	 * @var string
	 * @assert NotBlank(groups="CoreUrlAmigables")
	 */
	protected $Entity;
	/**
	 * @var integer
	 * @assert NotBlank(groups="CoreUrlAmigables")
	 */
	protected $IdEntity;
	/**
	 * @var integer
	 * @assert NotBlank(groups="CoreUrlAmigables")
	 */
	protected $SortOrder = '0';
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

	public function setParameters($Parameters){
		$this->Parameters = trim($Parameters);
	}
	public function getParameters(){
		return $this->Parameters;
	}

	public function setEntity($Entity){
		$this->Entity = trim($Entity);
	}
	public function getEntity(){
		return $this->Entity;
	}

	public function setIdEntity($IdEntity){
		$this->IdEntity = $IdEntity;
	}
	public function getIdEntity(){
		return $this->IdEntity;
	}

	public function setSortOrder($SortOrder){
		$this->SortOrder = $SortOrder;
	}
	public function getSortOrder(){
		return $this->SortOrder;
	}

} // END class CoreUrlAmigables

?>