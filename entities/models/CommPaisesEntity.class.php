<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 17.10.2012 14:24:31
 */

/**
 * @orm:Entity(CommPaises)
 */
class CommPaisesEntity extends EntityComunes {
	/**
	 * @orm GeneratedValue
	 * @orm Id
	 * @var integer
	 * @assert NotBlank(groups="CommPaises")
	 */
	protected $Id;
	/**
	 * @var string
	 * @assert NotBlank(groups="CommPaises")
	 */
	protected $Codigo;
	/**
	 * @var string
	 * @assert NotBlank(groups="CommPaises")
	 */
	protected $Pais = '';
	/**
	 * @var entities\CommMonedas
	 */
	protected $IdMoneda = '0';
	/**
	 * @var entities\CommZonasHorarias
	 */
	protected $IdZonaHoraria = '0';
	/**
	 * @var integer
	 * @assert NotBlank(groups="CommPaises")
	 */
	protected $Latitud = '0';
	/**
	 * @var integer
	 * @assert NotBlank(groups="CommPaises")
	 */
	protected $Longitud = '0';
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = '';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'CommPaises';
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
			array('SourceColumn' => 'Id', 'ParentEntity' => 'CommImpuestos', 'ParentColumn' => 'IdPais'),
			array('SourceColumn' => 'Id', 'ParentEntity' => 'CommMunicipios', 'ParentColumn' => 'IdPais'),
			array('SourceColumn' => 'Id', 'ParentEntity' => 'CommProvincias', 'ParentColumn' => 'IdPais'),
			array('SourceColumn' => 'Id', 'ParentEntity' => 'CommBancosOficinas', 'ParentColumn' => 'IdPais'),
			array('SourceColumn' => 'Id', 'ParentEntity' => 'PcaeEmpresas', 'ParentColumn' => 'IdPais'),
			array('SourceColumn' => 'Id', 'ParentEntity' => 'PcaeUsuarios', 'ParentColumn' => 'IdPais'),
		);
	/**
	 * Relacion de entidades de las que esta depende
	 * @var string
	 */
	protected $_childEntities = array(
			'CommMonedas',
			'CommZonasHorarias',
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

	public function setPais($Pais){
		$this->Pais = trim($Pais);
	}
	public function getPais(){
		return $this->Pais;
	}

	public function setIdMoneda($IdMoneda){
		$this->IdMoneda = $IdMoneda;
	}
	public function getIdMoneda(){
		if (!($this->IdMoneda instanceof CommMonedas))
			$this->IdMoneda = new CommMonedas($this->IdMoneda);
		return $this->IdMoneda;
	}

	public function setIdZonaHoraria($IdZonaHoraria){
		$this->IdZonaHoraria = $IdZonaHoraria;
	}
	public function getIdZonaHoraria(){
		if (!($this->IdZonaHoraria instanceof CommZonasHorarias))
			$this->IdZonaHoraria = new CommZonasHorarias($this->IdZonaHoraria);
		return $this->IdZonaHoraria;
	}

	public function setLatitud($Latitud){
		$this->Latitud = $Latitud;
	}
	public function getLatitud(){
		return $this->Latitud;
	}

	public function setLongitud($Longitud){
		$this->Longitud = $Longitud;
	}
	public function getLongitud(){
		return $this->Longitud;
	}

} // END class CommPaises

?>