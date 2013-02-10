<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 08.02.2013 13:00:03
 */

/**
 * @orm:Entity(ErpOrdenesArticulos)
 */
class ErpOrdenesArticulosEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="ErpOrdenesArticulos")
     */
    protected $Id;

    /**
     * @var integer
     * @assert NotBlank(groups="ErpOrdenesArticulos")
     */
    protected $IdRegla = '0';

    /**
     * @var entities\ErpArticulos
     * @assert NotBlank(groups="ErpOrdenesArticulos")
     */
    protected $IdArticulo = '0';

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'ErpOrdenesArticulos';

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
        'ErpArticulos',
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

    public function setIdRegla($IdRegla) {
        $this->IdRegla = $IdRegla;
    }

    public function getIdRegla() {
        return $this->IdRegla;
    }

    public function setIdArticulo($IdArticulo) {
        $this->IdArticulo = $IdArticulo;
    }

    public function getIdArticulo() {
        if (!($this->IdArticulo instanceof ErpArticulos))
            $this->IdArticulo = new ErpArticulos($this->IdArticulo);
        return $this->IdArticulo;
    }

}

// END class ErpOrdenesArticulos
?>