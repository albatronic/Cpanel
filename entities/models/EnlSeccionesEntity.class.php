<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 05.09.2012 08:11:29
 */

/**
 * @orm:Entity(EnlSecciones)
 */
class EnlSeccionesEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="EnlSecciones")
	 */
	protected $Id;
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="EnlSecciones")
	 */
	protected $Titulo;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Subtitulo;
	/**
	 * @orm:Column(type="tinyint")
	 * @assert:NotBlank(groups="EnlSecciones")
	 * @var entities\TiposSeccionEnlacesInteres
	 */
	protected $TipoSeccion = '0';
	/**
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="EnlSecciones")
	 */
	protected $PerteneceA;
	/**
	 * @orm:Column(type="string")
	 * @assert:NotBlank(groups="EnlSecciones")
	 */
	protected $Entidad;
	/**
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="EnlSecciones")
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
	protected $_tableName = 'EnlSecciones';
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
			array('SourceColumn' => 'Id', 'ParentEntity' => 'EnlEnlaces', 'ParentColumn' => 'IdSeccion'),
			array('SourceColumn' => ' Id', 'ParentEntity' => 'EnlSecciones', 'ParentColumn' => 'PerteneceA'),
		);
	/**
	 * Relacion de entidades de las que esta depende
	 * @var string
	 */
	protected $_childEntities = array(
			'TiposSeccionEnlacesInteres',
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

	public function setTipoSeccion($TipoSeccion){
		$this->TipoSeccion = $TipoSeccion;
	}
	public function getTipoSeccion(){
		if (!($this->TipoSeccion instanceof TiposSeccionEnlacesInteres))
			$this->TipoSeccion = new TiposSeccionEnlacesInteres($this->TipoSeccion);
		return $this->TipoSeccion;
	}

	public function setPerteneceA($PerteneceA){
		$this->PerteneceA = $PerteneceA;
	}
	public function getPerteneceA(){
		return $this->PerteneceA;
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

} // END class EnlSecciones

?>