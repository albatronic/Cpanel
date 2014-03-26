<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 25.10.2013 22:32:33
 */

/**
 * @orm:Entity(Widgets)
 */
class WidgetsEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="Widgets")
     */
    protected $Id;

    /**
     * @var string
     * @assert NotBlank(groups="Widgets")
     */
    protected $Name;

    /**
     * @var string
     * @assert NotBlank(groups="Widgets")
     */
    protected $Title;

    /**
     * @var string
     */
    protected $BeforeWidget = '<aside id="%1$s" class="widget %2$s">';

    /**
     * @var string
     */
    protected $AfterWidget = '</aside>';

    /**
     * @var string
     */
    protected $Controllers;

    /**
     * @var string
     */
    protected $Widgets;

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'Widgets';

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

    public function setName($Name) {
        $this->Name = trim($Name);
    }

    public function getName() {
        return $this->Name;
    }

    public function setTitle($Title) {
        $this->Title = trim($Title);
    }

    public function getTitle() {
        return $this->Title;
    }

    public function setBeforeWidget($BeforeWidget) {
        $this->BeforeWidget = trim($BeforeWidget);
    }

    public function getBeforeWidget() {
        return $this->BeforeWidget;
    }

    public function setAfterWidget($AfterWidget) {
        $this->AfterWidget = trim($AfterWidget);
    }

    public function getAfterWidget() {
        return $this->AfterWidget;
    }

    public function setControllers($Controllers) {
        $this->Controllers = trim($Controllers);
    }

    public function getControllers() {
        return $this->Controllers;
    }

    public function setWidgets($Widgets) {
        $this->Widgets = trim($Widgets);
    }

    public function getWidgets() {
        return $this->Widgets;
    }

}

// END class Widgets
?>