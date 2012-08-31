<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 30.08.2012 18:13:37
 */

/**
 * @orm:Entity(enl_secciones)
 */
class EnlSeccionesEntity extends EntityComunes {
	/**
	 * @orm:GeneratedValue
	 * @orm:Id
	 * @orm:Column(type="integer")
	 * @assert:NotBlank(groups="enl_secciones")
	 */
	protected $IDSeccion;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Seccion;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Subtitulo;
	/**
	 * @orm:Column(type="tinyint")
	 * @var entities\TipoSeccionEnlacesInteres
	 */
	protected $TipoSeccion = '0';
	/**
	 * @orm:Column(type="integer")
	 * @var entities\EnlSecciones
	 */
	protected $PerteneceA;
	/**
	 * @orm:Column(type="integer")
	 */
	protected $IDEntidad;
	/**
	 * @orm:Column(type="string")
	 */
	protected $Entidad;
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = 'cpanel';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'enl_secciones';
	/**
	 * Nombre de la PrimaryKey
	 * @var string
	 */
	protected $_primaryKeyName = 'IDSeccion';
	/**
	 * Relacion de entidades que dependen de esta
	 * @var string
	 */
	protected $_parentEntities = array(
			array('SourceColumn' => 'IDSeccion', 'ParentEntity' => 'EnlEnlaces', 'ParentColumn' => 'IDSeccion'),
			array('SourceColumn' => 'IDSeccion', 'ParentEntity' => 'EnlSecciones', 'ParentColumn' => 'PerteneceA'),
		);
	/**
	 * Relacion de entidades de las que esta depende
	 * @var string
	 */
	protected $_childEntities = array(
			'TipoSeccionEnlacesInteres',
			'EnlSecciones',
			'ValoresSN',
			'ValoresPrivacidad',
			'ValoresDchaIzq',
			'ValoresChangeFreq',
		);
	/**
	 * GETTERS Y SETTERS
	 */
	public function setIDSeccion($IDSeccion){
		$this->IDSeccion = $IDSeccion;
	}
	public function getIDSeccion(){
		return $this->IDSeccion;
	}

	public function setSeccion($Seccion){
		$this->Seccion = trim($Seccion);
	}
	public function getSeccion(){
		return $this->Seccion;
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
		if (!($this->TipoSeccion instanceof TipoSeccionEnlacesInteres))
			$this->TipoSeccion = new TipoSeccionEnlacesInteres($this->TipoSeccion);
		return $this->TipoSeccion;
	}

	public function setPerteneceA($PerteneceA){
		$this->PerteneceA = $PerteneceA;
	}
	public function getPerteneceA(){
		if (!($this->PerteneceA instanceof EnlSecciones))
			$this->PerteneceA = new EnlSecciones($this->PerteneceA);
		return $this->PerteneceA;
	}

	public function setIDEntidad($IDEntidad){
		$this->IDEntidad = $IDEntidad;
	}
	public function getIDEntidad(){
		return $this->IDEntidad;
	}

	public function setEntidad($Entidad){
		$this->Entidad = trim($Entidad);
	}
	public function getEntidad(){
		return $this->Entidad;
	}

} // END class enl_secciones

?>