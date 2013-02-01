<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.01.2013 19:57:09
 */

/**
 * @orm:Entity(ErpPropiedadesFamiliasMarcas)
 */
class ErpPropiedadesFamiliasMarcasEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="ErpPropiedadesFamiliasMarcas")
     */
    protected $Id;

    /**
     * @var entities\ErpFamilias
     * @assert NotBlank(groups="ErpPropiedadesFamiliasMarcas")
     */
    protected $IdFamilia;

    /**
     * @var entities\ErpMarcas
     * @assert NotBlank(groups="ErpPropiedadesFamiliasMarcas")
     */
    protected $IdMarca;

    /**
     * @var entities\ErpPropiedades
     * @assert NotBlank(groups="ErpPropiedadesFamiliasMarcas")
     */
    protected $IdPropiedad;

    /**
     * @var string
     * @assert NotBlank(groups="ErpPropiedadesFamiliasMarcas")
     */
    protected $Valor;

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'ErpPropiedadesFamiliasMarcas';

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
        'ErpFamilias',
        'ErpMarcas',
        'ErpPropiedades',
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

    public function setIdFamilia($IdFamilia) {
        $this->IdFamilia = $IdFamilia;
    }

    public function getIdFamilia() {
        if (!($this->IdFamilia instanceof ErpFamilias))
            $this->IdFamilia = new ErpFamilias($this->IdFamilia);
        return $this->IdFamilia;
    }

    public function setIdMarca($IdMarca) {
        $this->IdMarca = $IdMarca;
    }

    public function getIdMarca() {
        if (!($this->IdMarca instanceof ErpMarcas))
            $this->IdMarca = new ErpMarcas($this->IdMarca);
        return $this->IdMarca;
    }

    public function setIdPropiedad($IdPropiedad) {
        $this->IdPropiedad = $IdPropiedad;
    }

    public function getIdPropiedad() {
        if (!($this->IdPropiedad instanceof ErpPropiedades))
            $this->IdPropiedad = new ErpPropiedades($this->IdPropiedad);
        return $this->IdPropiedad;
    }

    public function setValor($Valor) {
        $this->Valor = trim($Valor);
    }

    public function getValor() {
        return $this->Valor;
    }

}

// END class ErpPropiedadesFamiliasMarcas
?>