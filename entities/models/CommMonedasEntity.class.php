<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 17.10.2012 14:24:31
 */

/**
 * @orm:Entity(CommMonedas)
 */
class CommMonedasEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="CommMonedas")
     */
    protected $Id;

    /**
     * @var string
     * @assert NotBlank(groups="CommMonedas")
     */
    protected $Codigo;

    /**
     * @var string
     * @assert NotBlank(groups="CommMonedas")
     */
    protected $Moneda = '';

    /**
     * @var string
     */
    protected $Simbolo;

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'CommMonedas';

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
        array('SourceColumn' => 'Id', 'ParentEntity' => 'CommPaises', 'ParentColumn' => 'IdMoneda'),
    );

    /**
     * Relacion de entidades de las que esta depende
     * @var string
     */
    protected $_childEntities = array(
        'ValoresSN',
        'ValoresPrivacy',
        'ValoresDchaIzq',
        'ValoresChangeFreq',
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

    public function setCodigo($Codigo) {
        $this->Codigo = trim($Codigo);
    }

    public function getCodigo() {
        return $this->Codigo;
    }

    public function setMoneda($Moneda) {
        $this->Moneda = trim($Moneda);
    }

    public function getMoneda() {
        return $this->Moneda;
    }

    public function setSimbolo($Simbolo) {
        $this->Simbolo = trim($Simbolo);
    }

    public function getSimbolo() {
        return $this->Simbolo;
    }

}

// END class CommMonedas
?>