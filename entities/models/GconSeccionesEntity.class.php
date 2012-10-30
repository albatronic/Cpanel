<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 29.10.2012 20:07:59
 */

/**
 * @orm:Entity(GconSecciones)
 */
class GconSeccionesEntity extends EntityComunes {
	/**
	 * @orm GeneratedValue
	 * @orm Id
	 * @var integer
	 * @assert NotBlank(groups="GconSecciones")
	 */
	protected $Id;
	/**
	 * @var string
	 * @assert NotBlank(groups="GconSecciones")
	 */
	protected $Titulo;
	/**
	 * @var string
	 */
	protected $Subtitulo;
	/**
	 * @var string
	 */
	protected $Introduccion;
	/**
	 * @var entities\ValoresSN
	 * @assert NotBlank(groups="GconSecciones")
	 */
	protected $MostrarTitulo = '1';
	/**
	 * @var entities\ValoresSN
	 * @assert NotBlank(groups="GconSecciones")
	 */
	protected $MostrarSubtitulo = '1';
	/**
	 * @var entities\ValoresSN
	 * @assert NotBlank(groups="GconSecciones")
	 */
	protected $MostrarIntroduccion = '1';
	/**
	 * @var string
	 * @assert NotBlank(groups="GconSecciones")
	 */
	protected $MostrarEnMenuN = '{1,0,0,0,0}';
	/**
	 * @var string
	 * @assert NotBlank(groups="GconSecciones")
	 */
	protected $EtiquetaWebN = '{}';
	/**
	 * @var string
	 * @assert NotBlank(groups="GconSecciones")
	 */
	protected $OrdenMenuN = '{}';
	/**
	 * @var entities\ModosMostrarContenidos
	 * @assert NotBlank(groups="GconSecciones")
	 */
	protected $ModoMostrarContenidos = '0';
	/**
	 * @var entities\CriteriosOrdenContenidosHijos
	 * @assert NotBlank(groups="GconSecciones")
	 */
	protected $CriterioOrdenContenidosHijos = 'SortOrder ASC';
	/**
	 * @var entities\ValoresSN
	 * @assert NotBlank(groups="GconSecciones")
	 */
	protected $MostrarSubsecciones = '1';
	/**
	 * Nombre de la conexion a la BD
	 * @var string
	 */
	protected $_conectionName = '';
	/**
	 * Nombre de la tabla física
	 * @var string
	 */
	protected $_tableName = 'GconSecciones';
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
			array('SourceColumn' => 'Id', 'ParentEntity' => 'GconContenidos', 'ParentColumn' => 'IdSeccion'),
		);
	/**
	 * Relacion de entidades de las que esta depende
	 * @var string
	 */
	protected $_childEntities = array(
			'ValoresSN',
			'ModosMostrarContenidos',
			'CriteriosOrdenContenidosHijos',
			'ValoresPrivacy',
			'ValoresDchaIzq',
			'ValoresChangeFreq',
			'RequestMethods',
			'RequestOrigins',
			'CpanAplicaciones',
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

	public function setIntroduccion($Introduccion){
		$this->Introduccion = trim($Introduccion);
	}
	public function getIntroduccion(){
		return $this->Introduccion;
	}

	public function setMostrarTitulo($MostrarTitulo){
		$this->MostrarTitulo = $MostrarTitulo;
	}
	public function getMostrarTitulo(){
		if (!($this->MostrarTitulo instanceof ValoresSN))
			$this->MostrarTitulo = new ValoresSN($this->MostrarTitulo);
		return $this->MostrarTitulo;
	}

	public function setMostrarSubtitulo($MostrarSubtitulo){
		$this->MostrarSubtitulo = $MostrarSubtitulo;
	}
	public function getMostrarSubtitulo(){
		if (!($this->MostrarSubtitulo instanceof ValoresSN))
			$this->MostrarSubtitulo = new ValoresSN($this->MostrarSubtitulo);
		return $this->MostrarSubtitulo;
	}

	public function setMostrarIntroduccion($MostrarIntroduccion){
		$this->MostrarIntroduccion = $MostrarIntroduccion;
	}
	public function getMostrarIntroduccion(){
		if (!($this->MostrarIntroduccion instanceof ValoresSN))
			$this->MostrarIntroduccion = new ValoresSN($this->MostrarIntroduccion);
		return $this->MostrarIntroduccion;
	}

	public function setMostrarEnMenuN($MostrarEnMenuN){
		$this->MostrarEnMenuN = trim($MostrarEnMenuN);
	}
	public function getMostrarEnMenuN(){
		return $this->MostrarEnMenuN;
	}

	public function setEtiquetaWebN($EtiquetaWebN){
		$this->EtiquetaWebN = trim($EtiquetaWebN);
	}
	public function getEtiquetaWebN(){
		return $this->EtiquetaWebN;
	}

	public function setOrdenMenuN($OrdenMenuN){
		$this->OrdenMenuN = trim($OrdenMenuN);
	}
	public function getOrdenMenuN(){
		return $this->OrdenMenuN;
	}

	public function setModoMostrarContenidos($ModoMostrarContenidos){
		$this->ModoMostrarContenidos = $ModoMostrarContenidos;
	}
	public function getModoMostrarContenidos(){
		if (!($this->ModoMostrarContenidos instanceof ModosMostrarContenidos))
			$this->ModoMostrarContenidos = new ModosMostrarContenidos($this->ModoMostrarContenidos);
		return $this->ModoMostrarContenidos;
	}

	public function setCriterioOrdenContenidosHijos($CriterioOrdenContenidosHijos){
		$this->CriterioOrdenContenidosHijos = trim($CriterioOrdenContenidosHijos);
	}
	public function getCriterioOrdenContenidosHijos(){
		if (!($this->CriterioOrdenContenidosHijos instanceof CriteriosOrdenContenidosHijos))
			$this->CriterioOrdenContenidosHijos = new CriteriosOrdenContenidosHijos($this->CriterioOrdenContenidosHijos);
		return $this->CriterioOrdenContenidosHijos;
	}

	public function setMostrarSubsecciones($MostrarSubsecciones){
		$this->MostrarSubsecciones = $MostrarSubsecciones;
	}
	public function getMostrarSubsecciones(){
		if (!($this->MostrarSubsecciones instanceof ValoresSN))
			$this->MostrarSubsecciones = new ValoresSN($this->MostrarSubsecciones);
		return $this->MostrarSubsecciones;
	}

} // END class GconSecciones

?>