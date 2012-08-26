<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.08.2012 20:01:33
 */

/**
 * @orm:Entity(core_imagenes)
 */
class CoreImagenesEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_imagenes")
	 */
	protected $Id;
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="core_imagenes")
	 */
	protected $Entidad;
	/**
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_imagenes")
	 */
	protected $IdEntidad;
	/**
	 * @orm:Column(type="tinyint")
	 * @assert:NotBlank(groups="core_imagenes")
	 * @var entities\ValoresSN
	 */
	protected $EsGaleria = '0';
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="core_imagenes")
	 */
	protected $PathName;
	/**
	 * @orm:Column(type="string")
	 */
	protected $TextoPie;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Title;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Alt;
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="core_imagenes")
	 * @var entities\TiposMime
	 */
	protected $IDTipoMime;
	/**
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_imagenes")
	 */
	protected $Peso = '0';
	/**
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_imagenes")
	 */
	protected $Alto = '0';
	/**
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="core_imagenes")
	 */
	protected $Ancho = '0';
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'core_imagenes';
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
			'TiposMime',
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

	public function setEsGaleria($EsGaleria){
		$this->EsGaleria = $EsGaleria;
	}
	public function getEsGaleria(){
		if (!($this->EsGaleria instanceof ValoresSN))
			$this->EsGaleria = new ValoresSN($this->EsGaleria);
		return $this->EsGaleria;
	}

	public function setPathName($PathName){
		$this->PathName = trim($PathName);
	}
	public function getPathName(){
		return $this->PathName;
	}

	public function setTextoPie($TextoPie){
		$this->TextoPie = trim($TextoPie);
	}
	public function getTextoPie(){
		return $this->TextoPie;
	}

	public function setTitle($Title){
		$this->Title = trim($Title);
	}
	public function getTitle(){
		return $this->Title;
	}

	public function setAlt($Alt){
		$this->Alt = trim($Alt);
	}
	public function getAlt(){
		return $this->Alt;
	}

	public function setIDTipoMime($IDTipoMime){
		$this->IDTipoMime = trim($IDTipoMime);
	}
	public function getIDTipoMime(){
		if (!($this->IDTipoMime instanceof TiposMime))
			$this->IDTipoMime = new TiposMime($this->IDTipoMime);
		return $this->IDTipoMime;
	}

	public function setPeso($Peso){
		$this->Peso = $Peso;
	}
	public function getPeso(){
		return $this->Peso;
	}

	public function setAlto($Alto){
		$this->Alto = $Alto;
	}
	public function getAlto(){
		return $this->Alto;
	}

	public function setAncho($Ancho){
		$this->Ancho = $Ancho;
	}
	public function getAncho(){
		return $this->Ancho;
	}

} // END class core_imagenes

?>