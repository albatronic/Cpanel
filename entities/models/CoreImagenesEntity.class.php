<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 05.09.2012 08:11:29
 */

/**
 * @orm:Entity(CoreImagenes)
 */
class CoreImagenesEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="CoreImagenes")
	 */
	protected $Id;
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="CoreImagenes")
	 */
	protected $Entidad;
	/**
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="CoreImagenes")
	 */
	protected $IdEntidad;
	/**
	 * @orm:Column(type="tinyint")
	 * @assert:NotBlank(groups="CoreImagenes")
	 * @var entities\ValoresSN
	 */
	protected $EsGaleria = '0';
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="CoreImagenes")
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
	 * @var entities\TiposMime
	 */
	protected $IdTipoMime;
	/**
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="CoreImagenes")
	 */
	protected $Peso = '0';
	/**
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="CoreImagenes")
	 */
	protected $Alto = '0';
	/**
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="CoreImagenes")
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
	protected $_tableName = 'CoreImagenes';
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

	public function setIdTipoMime($IdTipoMime){
		$this->IdTipoMime = trim($IdTipoMime);
	}
	public function getIdTipoMime(){
		if (!($this->IdTipoMime instanceof TiposMime))
			$this->IdTipoMime = new TiposMime($this->IdTipoMime);
		return $this->IdTipoMime;
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

} // END class CoreImagenes

?>