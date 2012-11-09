<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 17.10.2012 14:24:31
 */

/**
 * @orm:Entity(CommImpuestos)
 */
class CommImpuestosEntity extends EntityComunes {
	/**
	 * @orm GeneratedValue
	 * @orm Id
	 * @var integer
	 * @assert NotBlank(groups="CommImpuestos")
	 */
	protected $Id;
	/**
	 * @var entities\CommPaises
	 * @assert NotBlank(groups="CommImpuestos")
	 */
	protected $IdPais = '0';
	/**
	 * @var string
	 * @assert NotBlank(groups="CommImpuestos")
	 */
	protected $Nombre = '';
	/**
	 * @var integer
	 * @assert NotBlank(groups="CommImpuestos")
	 */
	protected $Valor = '0';
	/**
	 * @var integer
	 * @assert NotBlank(groups="CommImpuestos")
	 */
	protected $Recargo = '0';
	/**
	 * @var integer
	 * @assert NotBlank(groups="CommImpuestos")
	 */
	protected $Retencion = '0';
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'pcae';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'CommImpuestos';
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
			'CommPaises',
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

	public function setIdPais($IdPais){
		$this->IdPais = $IdPais;
	}
	public function getIdPais(){
		if (!($this->IdPais instanceof CommPaises))
			$this->IdPais = new CommPaises($this->IdPais);
		return $this->IdPais;
	}

	public function setNombre($Nombre){
		$this->Nombre = trim($Nombre);
	}
	public function getNombre(){
		return $this->Nombre;
	}

	public function setValor($Valor){
		$this->Valor = $Valor;
	}
	public function getValor(){
		return $this->Valor;
	}

	public function setRecargo($Recargo){
		$this->Recargo = $Recargo;
	}
	public function getRecargo(){
		return $this->Recargo;
	}

	public function setRetencion($Retencion){
		$this->Retencion = $Retencion;
	}
	public function getRetencion(){
		return $this->Retencion;
	}

} // END class CommImpuestos

?>