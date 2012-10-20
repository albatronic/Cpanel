<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 20.10.2012 20:42:36
 */

/**
 * @orm:Entity(PcaeVariables)
 */
class PcaeVariablesEntity extends EntityComunes {
	/**
	 * @orm GeneratedValue
	 * @orm Id
	 * @var integer
	 * @assert NotBlank(groups="PcaeVariables")
	 */
	protected $Id;
	/**
	 * @var entities\PcaeProyectosApps
	 * @assert NotBlank(groups="PcaeVariables")
	 */
	protected $IdProyectosApps;
	/**
	 * @var string
	 * @assert NotBlank(groups="PcaeVariables")
	 */
	protected $Variable;
	/**
	 * @var string
	 */
	protected $Yml;
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'pcae';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'PcaeVariables';
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
			'PcaeProyectosApps',
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

	public function setIdProyectosApps($IdProyectosApps){
		$this->IdProyectosApps = $IdProyectosApps;
	}
	public function getIdProyectosApps(){
		if (!($this->IdProyectosApps instanceof PcaeProyectosApps))
			$this->IdProyectosApps = new PcaeProyectosApps($this->IdProyectosApps);
		return $this->IdProyectosApps;
	}

	public function setVariable($Variable){
		$this->Variable = trim($Variable);
	}
	public function getVariable(){
		return $this->Variable;
	}

	public function setYml($Yml){
		$this->Yml = trim($Yml);
	}
	public function getYml(){
		return $this->Yml;
	}

} // END class PcaeVariables

?>