<?php

/**
 * @copyright GRUPO TREVENQUE
 * @date 03.03.2015 23:33:14
 */

/**
 * @orm:Entity(CpanMapeoUrls)
 */
class CpanMapeoUrlsEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="CpanMapeoUrls")
     */
    protected $Id;

    /**
     * @var string
     * @assert NotBlank(groups="CpanMapeoUrls")
     */
    protected $UrlOrigen;

    /**
     * @var string
     * @assert NotBlank(groups="CpanMapeoUrls")
     */
    protected $UrlDestino;

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'CpanMapeoUrls';

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

    public function setUrlOrigen($UrlOrigen) {
        $this->UrlOrigen = trim($UrlOrigen);
    }

    public function getUrlOrigen() {
        return $this->UrlOrigen;
    }

    public function setUrlDestino($UrlDestino) {
        $this->UrlDestino = trim($UrlDestino);
    }

    public function getUrlDestino() {
        return $this->UrlDestino;
    }

}

// END class CpanMapeoUrls

