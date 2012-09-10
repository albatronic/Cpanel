<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 08.09.2012 13:51:05
 */

/**
 * @orm:Entity(EnlSecciones)
 */
class EnlSeccionesEntity extends EntityComunes {
	/**
	 * @orm GeneratedValue
	 * @orm Id
	 * @var integer
	 * @assert NotBlank(groups="EnlSecciones")
	 */
	protected $Id;
	/**
	 * @var string
	 * @assert NotBlank(groups="EnlSecciones")
	 */
	protected $Titulo;
	/**
	 * @var string
	 */
	protected $Subtitulo;
	/**
	 * @var entities\TiposSeccionEnlacesInteres
	 * @assert NotBlank(groups="EnlSecciones")
	 */
	protected $TipoSeccion = '0';
	/**
	 * @var string
	 * @assert NotBlank(groups="EnlSecciones")
	 */
	protected $Entidad;
	/**
	 * @var integer
	 * @assert NotBlank(groups="EnlSecciones")
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
		);
	/**
	 * Relacion de entidades de las que esta depende
	 * @var string
	 */
	protected $_childEntities = array(
			'TiposSeccionEnlacesInteres',
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