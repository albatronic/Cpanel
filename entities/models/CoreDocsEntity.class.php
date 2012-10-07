<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 02.10.2012 23:15:30
 */

/**
 * @orm:Entity(CoreDocs)
 */
class CoreDocsEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="CoreDocs")
     */
    protected $Id;

    /**
     * @var string
     * @assert NotBlank(groups="CoreDocs")
     */
    protected $Entity;

    /**
     * @var integer
     * @assert NotBlank(groups="CoreDocs")
     */
    protected $IdEntity;

    /**
     * @var entities\TiposDocs
     * @assert NotBlank(groups="CoreDocs")
     */
    protected $Type;

    /**
     * @var entities\ValoresSN
     * @assert NotBlank(groups="CoreDocs")
     */
    protected $IsThumbnail = '0';

    /**
     * @var string
     * @assert NotBlank(groups="CoreDocs")
     */
    protected $PathName = '';

    /**
     * @var string
     * @assert NotBlank(groups="CoreDocs")
     */
    protected $Name = '';

    /**
     * @var string
     */
    protected $Extension = '';

    /**
     * @var string
     */
    protected $Title;

    /**
     * @var entities\ValoresSN
     * @assert NotBlank(groups="CoreDocs")
     */
    protected $ShowCaption = '0';

    /**
     * @var string
     */
    protected $MimeType;

    /**
     * @var integer
     * @assert NotBlank(groups="CoreDocs")
     */
    protected $Size = '0';

    /**
     * @var integer
     * @assert NotBlank(groups="CoreDocs")
     */
    protected $Height = '0';

    /**
     * @var integer
     * @assert NotBlank(groups="CoreDocs")
     */
    protected $Width = '0';

    /**
     * @var integer
     * @assert NotBlank(groups="CoreDocs")
     */
    protected $SortOrder = '0';

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = 'cpanel';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'CoreDocs';

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
        'TiposDocs',
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

    public function setEntity($Entity) {
        $this->Entity = trim($Entity);
    }

    public function getEntity() {
        return $this->Entity;
    }

    public function setIdEntity($IdEntity) {
        $this->IdEntity = $IdEntity;
    }

    public function getIdEntity() {
        return $this->IdEntity;
    }

    public function setType($Type) {
        $this->Type = trim($Type);
    }

    public function getType() {
        if (!($this->Type instanceof TiposDocs))
            $this->Type = new TiposDocs($this->Type);
        return $this->Type;
    }

    public function setIsThumbnail($IsThumbnail) {
        $this->IsThumbnail = $IsThumbnail;
    }

    public function getIsThumbnail() {
        if (!($this->IsThumbnail instanceof ValoresSN))
            $this->IsThumbnail = new ValoresSN($this->IsThumbnail);
        return $this->IsThumbnail;
    }

    public function setPathName($PathName) {
        $this->PathName = trim($PathName);
    }

    public function getPathName() {
        return $this->PathName;
    }

    public function setName($Name) {
        $this->Name = trim($Name);
    }

    public function getName() {
        return $this->Name;
    }

    public function setExtension($Extension) {
        $this->Extension = trim($Extension);
    }

    public function getExtension() {
        return $this->Extension;
    }

    public function setTitle($Title) {
        $this->Title = trim($Title);
    }

    public function getTitle() {
        return $this->Title;
    }

    public function setShowCaption($ShowCaption) {
        $this->ShowCaption = $ShowCaption;
    }

    public function getShowCaption() {
        if (!($this->ShowCaption instanceof ValoresSN))
            $this->ShowCaption = new ValoresSN($this->ShowCaption);
        return $this->ShowCaption;
    }

    public function setMimeType($MimeType) {
        $this->MimeType = trim($MimeType);
    }

    public function getMimeType() {
        return $this->MimeType;
    }

    public function setSize($Size) {
        $this->Size = $Size;
    }

    public function getSize() {
        return $this->Size;
    }

    public function setHeight($Height) {
        $this->Height = $Height;
    }

    public function getHeight() {
        return $this->Height;
    }

    public function setWidth($Width) {
        $this->Width = $Width;
    }

    public function getWidth() {
        return $this->Width;
    }

    public function setSortOrder($SortOrder) {
        $this->SortOrder = $SortOrder;
    }

    public function getSortOrder() {
        return $this->SortOrder;
    }

}

// END class CoreDocs
?>