<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.01.2013 23:24:50
 */

/**
 * @orm:Entity(ErpUnidadesMedida)
 */
class ErpUnidadesMedidaEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="ErpUnidadesMedida")
     */
    protected $Id;

    /**
     * @var string
     * @assert NotBlank(groups="ErpUnidadesMedida")
     */
    protected $UnidadMedida;

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'ErpUnidadesMedida*';

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
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'UMB'),
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'UMC'),
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'UMA'),
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'UMV'),
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
    public function setId($Id) {
        $this->Id = $Id;
    }

    public function getId() {
        return $this->Id;
    }

    public function setUnidadMedida($UnidadMedida) {
        $this->UnidadMedida = trim($UnidadMedida);
    }

    public function getUnidadMedida() {
        return $this->UnidadMedida;
    }

}

// END class ErpUnidadesMedida
?>