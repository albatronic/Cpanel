<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.01.2013 19:57:09
 */

/**
 * @orm:Entity(ErpArticulosEstados)
 */
class ErpArticulosEstadosEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="ErpArticulosEstados")
     */
    protected $IDEstado;

    /**
     * @var string
     * @assert NotBlank(groups="ErpArticulosEstados")
     */
    protected $Estado;

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'ErpArticulosEstados*';

    /**
     * Nombre de la PrimaryKey
     * @var string
     */
    protected $_primaryKeyName = 'IDEstado';

    /**
     * Relacion de entidades que dependen de esta
     * @var string
     */
    protected $_parentEntities = array(
        array('SourceColumn' => 'IDEstado', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDEstado1'),
        array('SourceColumn' => 'IDEstado', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDEstado2'),
        array('SourceColumn' => 'IDEstado', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDEstado3'),
        array('SourceColumn' => 'IDEstado', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDEstado4'),
        array('SourceColumn' => 'IDEstado', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDEstado5'),        
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
        'RequestMethods',
        'RequestOrigins',
        'CpanAplicaciones',
    );

    /**
     * GETTERS Y SETTERS
     */
    public function setIDEstado($IDEstado) {
        $this->IDEstado = $IDEstado;
    }

    public function getIDEstado() {
        return $this->IDEstado;
    }

    public function setEstado($Estado) {
        $this->Estado = trim($Estado);
    }

    public function getEstado() {
        return $this->Estado;
    }

}

// END class ErpArticulosEstados
?>