<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 04.03.2013 20:16:18
 */

/**
 * @orm:Entity(EncargosLineas)
 */
class EncargosLineasEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="EncargosLineas")
     */
    protected $Id;

    /**
     * @var entities\EncargosCab
     * @assert NotBlank(groups="EncargosLineas")
     */
    protected $IdEncargo = '0';

    /**
     * @var string
     * @assert NotBlank(groups="EncargosLineas")
     */
    protected $IdArticulo;

    /**
     * @var string
     * @assert NotBlank(groups="EncargosLineas")
     */
    protected $Descripcion;

    /**
     * @var integer
     * @assert NotBlank(groups="EncargosLineas")
     */
    protected $Unidades = '0.00';

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'EncargosLineas';

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
        'EncargosCab',
        'ValoresSN',
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
    public function setId($Id) {
        $this->Id = $Id;
    }

    public function getId() {
        return $this->Id;
    }

    public function setIdEncargo($IdEncargo) {
        $this->IdEncargo = $IdEncargo;
    }

    public function getIdEncargo() {
        if (!($this->IdEncargo instanceof EncargosCab))
            $this->IdEncargo = new EncargosCab($this->IdEncargo);
        return $this->IdEncargo;
    }

    public function setIdArticulo($IdArticulo) {
        $this->IdArticulo = trim($IdArticulo);
    }

    public function getIdArticulo() {
        return $this->IdArticulo;
    }

    public function setDescripcion($Descripcion) {
        $this->Descripcion = trim($Descripcion);
    }

    public function getDescripcion() {
        return $this->Descripcion;
    }

    public function setUnidades($Unidades) {
        $this->Unidades = $Unidades;
    }

    public function getUnidades() {
        return $this->Unidades;
    }

}

// END class EncargosLineas
?>