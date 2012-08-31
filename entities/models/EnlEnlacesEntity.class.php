<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 30.08.2012 18:13:37
 */

/**
 * @orm:Entity(enl_enlaces)
 */
class EnlEnlacesEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="enl_enlaces")
	 */
	protected $IDEnlace;
	/**
	 * @orm:Column(type="integer")
	 * @var entities\EnlSecciones
	 */
	protected $IDSeccion;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Titulo;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Subtitulo;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Url;
	/**
	 * @orm:Column(type="tinyint")
	 * @var entities\ValoresSN
	 */
	protected $TargetBlank = '0';
	/**
	 * @orm:Column(type="tinyint")
	 * @var entities\ValoresSN
	 */
	protected $EsHttps = '0';
	/**
	 * @orm:Column(type="tinyint")
	 * @var entities\ValoresSN
	 */
	protected $EsUrlInterna = '0';
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'enl_enlaces';
	/**
	 * Nombre de la PrimaryKey
	 * @var string
	 */
	protected $_primaryKeyName = 'IDEnlace';
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
			'EnlSecciones',
			'ValoresSN',
			'ValoresPrivacidad',
			'ValoresDchaIzq',
			'ValoresChangeFreq',
		);
	/**
	 * GETTERS Y SETTERS
	 */
	public function setIDEnlace($IDEnlace){
		$this->IDEnlace = $IDEnlace;
	}
	public function getIDEnlace(){
		return $this->IDEnlace;
	}

	public function setIDSeccion($IDSeccion){
		$this->IDSeccion = $IDSeccion;
	}
	public function getIDSeccion(){
		if (!($this->IDSeccion instanceof EnlSecciones))
			$this->IDSeccion = new EnlSecciones($this->IDSeccion);
		return $this->IDSeccion;
	}

	public function setTitulo($Titulo){
		$this->Titulo = trim($Titulo);
	}
	public function getTitulo(){
		return $this->Titulo;
	}

	public function setSubtitulo($Subtitulo){
		$this->Subtitulo = trim($Subtitulo);
	}
	public function getSubtitulo(){
		return $this->Subtitulo;
	}

	public function setUrl($Url){
		$this->Url = trim($Url);
	}
	public function getUrl(){
		return $this->Url;
	}

	public function setTargetBlank($TargetBlank){
		$this->TargetBlank = $TargetBlank;
	}
	public function getTargetBlank(){
		if (!($this->TargetBlank instanceof ValoresSN))
			$this->TargetBlank = new ValoresSN($this->TargetBlank);
		return $this->TargetBlank;
	}

	public function setEsHttps($EsHttps){
		$this->EsHttps = $EsHttps;
	}
	public function getEsHttps(){
		if (!($this->EsHttps instanceof ValoresSN))
			$this->EsHttps = new ValoresSN($this->EsHttps);
		return $this->EsHttps;
	}

	public function setEsUrlInterna($EsUrlInterna){
		$this->EsUrlInterna = $EsUrlInterna;
	}
	public function getEsUrlInterna(){
		if (!($this->EsUrlInterna instanceof ValoresSN))
			$this->EsUrlInterna = new ValoresSN($this->EsUrlInterna);
		return $this->EsUrlInterna;
	}

} // END class enl_enlaces

?>