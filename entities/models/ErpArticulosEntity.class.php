<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 07.02.2013 10:50:03
 */

/**
 * @orm:Entity(ErpArticulos)
 */
class ErpArticulosEntity extends EntityComunes {

    /**
     * @orm GeneratedValue
     * @orm Id
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Id;

    /**
     * @var string
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Codigo;

    /**
     * @var string
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Descripcion;

    /**
     * @var entities\ErpFamilias
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $IDCategoria = '0';

    /**
     * @var entities\ErpFamilias
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $IDFamilia = '0';

    /**
     * @var entities\ErpFamilias
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $IDSubfamilia = '0';

    /**
     * @var entities\ErpMarcas
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $IDMarca = '0';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Pvd = '0.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Pvp = '0.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Margen = '0.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Pmc = '0.00';

    /**
     * @var entities\CommImpuestos
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $IDIva = '0';

    /**
     * @var string
     */
    protected $Etiqueta;

    /**
     * @var string
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $CodigoEAN;

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Caducidad = '0';

    /**
     * @var string
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Garantia;

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Peso = '0.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Volumen = '0.00';

    /**
     * @var string
     */
    protected $Caracteristicas;

    /**
     * @var datetime
     */
    protected $FechaUltimoPrecio;

    /**
     * @var entities\ValoresSN
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Vigente = '1';

    /**
     * @var entities\ValoresSN
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Inventario = '1';

    /**
     * @var entities\ValoresSN
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Trazabilidad = '0';

    /**
     * @var entities\ValoresSN
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $BajoPedido = '0';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $PackingCompras = '1.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $PackingVentas = '1.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $Merma = '0.00';

    /**
     * @var entities\ValoresSN
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $BloqueoStock = '0';

    /**
     * @var entities\ErpArticulosEstados
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $IDEstado1 = '0';

    /**
     * @var entities\ErpArticulosEstados
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $IDEstado2 = '0';

    /**
     * @var entities\ErpArticulosEstados
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $IDEstado3 = '0';

    /**
     * @var entities\ErpArticulosEstados
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $IDEstado4 = '0';

    /**
     * @var entities\ErpArticulosEstados
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $IDEstado5 = '0';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $StockMinimo = '0.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $StockMaximo = '0.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $MinimoVentaAlto = '0.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $MinimoVentaAncho = '0.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $MinimoVenta = '0.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $MultiploAlto = '0.00';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $MultiploAncho = '0.00';

    /**
     * @var entities\ValoresSN
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $RecargoEnergetico = '0';

    /**
     * @var entities\ErpUnidadesMedida
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $UMB = '0';

    /**
     * @var entities\ErpUnidadesMedida
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $UMC = '0';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $CUMC = '1.00';

    /**
     * @var entities\ErpUnidadesMedida
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $UMA = '0';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $CUMA = '1.00';

    /**
     * @var entities\ErpUnidadesMedida
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $UMV = '0';

    /**
     * @var integer
     * @assert NotBlank(groups="ErpArticulos")
     */
    protected $CUMV = '1.00';

    /**
     * Nombre de la conexion a la BD
     * @var string
     */
    protected $_conectionName = '';

    /**
     * Nombre de la tabla física
     * @var string
     */
    protected $_tableName = 'ErpArticulos';

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
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpExistencias', 'ParentColumn' => 'IDArticulo'),
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDEstado1'),
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDEstado2'),
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDEstado3'),
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDEstado4'),
        array('SourceColumn' => 'Id', 'ParentEntity' => 'ErpArticulos', 'ParentColumn' => 'IDEstado5'),
    );

    /**
     * Relacion de entidades de las que esta depende
     * @var string
     */
    protected $_childEntities = array(
        'ErpFamilias',
        'ErpMarcas',
        'CommImpuestos',
        'ValoresSN',
        'ErpArticulosEstados',
        'ErpUnidadesMedida',
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

    public function setCodigo($Codigo) {
        $this->Codigo = trim($Codigo);
    }

    public function getCodigo() {
        return $this->Codigo;
    }

    public function setDescripcion($Descripcion) {
        $this->Descripcion = trim($Descripcion);
    }

    public function getDescripcion() {
        return $this->Descripcion;
    }

    public function setIDCategoria($IDCategoria) {
        $this->IDCategoria = $IDCategoria;
    }

    public function getIDCategoria() {
        if (!($this->IDCategoria instanceof ErpFamilias))
            $this->IDCategoria = new ErpFamilias($this->IDCategoria);
        return $this->IDCategoria;
    }

    public function setIDFamilia($IDFamilia) {
        $this->IDFamilia = $IDFamilia;
    }

    public function getIDFamilia() {
        if (!($this->IDFamilia instanceof ErpFamilias))
            $this->IDFamilia = new ErpFamilias($this->IDFamilia);
        return $this->IDFamilia;
    }

    public function setIDSubfamilia($IDSubfamilia) {
        $this->IDSubfamilia = $IDSubfamilia;
    }

    public function getIDSubfamilia() {
        if (!($this->IDSubfamilia instanceof ErpFamilias))
            $this->IDSubfamilia = new ErpFamilias($this->IDSubfamilia);
        return $this->IDSubfamilia;
    }

    public function setIDMarca($IDMarca) {
        $this->IDMarca = $IDMarca;
    }

    public function getIDMarca() {
        if (!($this->IDMarca instanceof ErpMarcas))
            $this->IDMarca = new ErpMarcas($this->IDMarca);
        return $this->IDMarca;
    }

    public function setPvd($Pvd) {
        $this->Pvd = $Pvd;
    }

    public function getPvd() {
        return $this->Pvd;
    }

    public function setPvp($Pvp) {
        $this->Pvp = $Pvp;
    }

    public function getPvp() {
        return $this->Pvp;
    }

    public function setMargen($Margen) {
        $this->Margen = $Margen;
    }

    public function getMargen() {
        return $this->Margen;
    }

    public function setPmc($Pmc) {
        $this->Pmc = $Pmc;
    }

    public function getPmc() {
        return $this->Pmc;
    }

    public function setIDIva($IDIva) {
        $this->IDIva = $IDIva;
    }

    public function getIDIva() {
        if (!($this->IDIva instanceof CommImpuestos))
            $this->IDIva = new CommImpuestos($this->IDIva);
        return $this->IDIva;
    }

    public function setEtiqueta($Etiqueta) {
        $this->Etiqueta = trim($Etiqueta);
    }

    public function getEtiqueta() {
        return $this->Etiqueta;
    }

    public function setCodigoEAN($CodigoEAN) {
        $this->CodigoEAN = trim($CodigoEAN);
    }

    public function getCodigoEAN() {
        return $this->CodigoEAN;
    }

    public function setCaducidad($Caducidad) {
        $this->Caducidad = $Caducidad;
    }

    public function getCaducidad() {
        return $this->Caducidad;
    }

    public function setGarantia($Garantia) {
        $this->Garantia = trim($Garantia);
    }

    public function getGarantia() {
        return $this->Garantia;
    }

    public function setPeso($Peso) {
        $this->Peso = $Peso;
    }

    public function getPeso() {
        return $this->Peso;
    }

    public function setVolumen($Volumen) {
        $this->Volumen = $Volumen;
    }

    public function getVolumen() {
        return $this->Volumen;
    }

    public function setCaracteristicas($Caracteristicas) {
        $this->Caracteristicas = trim($Caracteristicas);
    }

    public function getCaracteristicas() {
        return $this->Caracteristicas;
    }

    public function setFechaUltimoPrecio($FechaUltimoPrecio) {
        $this->FechaUltimoPrecio = $FechaUltimoPrecio;
    }

    public function getFechaUltimoPrecio() {
        return $this->FechaUltimoPrecio;
    }

    public function setVigente($Vigente) {
        $this->Vigente = $Vigente;
    }

    public function getVigente() {
        if (!($this->Vigente instanceof ValoresSN))
            $this->Vigente = new ValoresSN($this->Vigente);
        return $this->Vigente;
    }

    public function setInventario($Inventario) {
        $this->Inventario = $Inventario;
    }

    public function getInventario() {
        if (!($this->Inventario instanceof ValoresSN))
            $this->Inventario = new ValoresSN($this->Inventario);
        return $this->Inventario;
    }

    public function setTrazabilidad($Trazabilidad) {
        $this->Trazabilidad = $Trazabilidad;
    }

    public function getTrazabilidad() {
        if (!($this->Trazabilidad instanceof ValoresSN))
            $this->Trazabilidad = new ValoresSN($this->Trazabilidad);
        return $this->Trazabilidad;
    }

    public function setBajoPedido($BajoPedido) {
        $this->BajoPedido = $BajoPedido;
    }

    public function getBajoPedido() {
        if (!($this->BajoPedido instanceof ValoresSN))
            $this->BajoPedido = new ValoresSN($this->BajoPedido);
        return $this->BajoPedido;
    }

    public function setPackingCompras($PackingCompras) {
        $this->PackingCompras = $PackingCompras;
    }

    public function getPackingCompras() {
        return $this->PackingCompras;
    }

    public function setPackingVentas($PackingVentas) {
        $this->PackingVentas = $PackingVentas;
    }

    public function getPackingVentas() {
        return $this->PackingVentas;
    }

    public function setMerma($Merma) {
        $this->Merma = $Merma;
    }

    public function getMerma() {
        return $this->Merma;
    }

    public function setBloqueoStock($BloqueoStock) {
        $this->BloqueoStock = $BloqueoStock;
    }

    public function getBloqueoStock() {
        if (!($this->BloqueoStock instanceof ValoresSN))
            $this->BloqueoStock = new ValoresSN($this->BloqueoStock);
        return $this->BloqueoStock;
    }

    public function setIDEstado1($IDEstado1) {
        $this->IDEstado1 = $IDEstado1;
    }

    public function getIDEstado1() {
        if (!($this->IDEstado1 instanceof ErpArticulosEstados))
            $this->IDEstado1 = new ErpArticulosEstados($this->IDEstado1);
        return $this->IDEstado1;
    }

    public function setIDEstado2($IDEstado2) {
        $this->IDEstado2 = $IDEstado2;
    }

    public function getIDEstado2() {
        if (!($this->IDEstado2 instanceof ErpArticulosEstados))
            $this->IDEstado2 = new ErpArticulosEstados($this->IDEstado2);
        return $this->IDEstado2;
    }

    public function setIDEstado3($IDEstado3) {
        $this->IDEstado3 = $IDEstado3;
    }

    public function getIDEstado3() {
        if (!($this->IDEstado3 instanceof ErpArticulosEstados))
            $this->IDEstado3 = new ErpArticulosEstados($this->IDEstado3);
        return $this->IDEstado3;
    }

    public function setIDEstado4($IDEstado4) {
        $this->IDEstado4 = $IDEstado4;
    }

    public function getIDEstado4() {
        if (!($this->IDEstado4 instanceof ErpArticulosEstados))
            $this->IDEstado4 = new ErpArticulosEstados($this->IDEstado4);
        return $this->IDEstado4;
    }

    public function setIDEstado5($IDEstado5) {
        $this->IDEstado5 = $IDEstado5;
    }

    public function getIDEstado5() {
        if (!($this->IDEstado5 instanceof ErpArticulosEstados))
            $this->IDEstado5 = new ErpArticulosEstados($this->IDEstado5);
        return $this->IDEstado5;
    }

    public function setStockMinimo($StockMinimo) {
        $this->StockMinimo = $StockMinimo;
    }

    public function getStockMinimo() {
        return $this->StockMinimo;
    }

    public function setStockMaximo($StockMaximo) {
        $this->StockMaximo = $StockMaximo;
    }

    public function getStockMaximo() {
        return $this->StockMaximo;
    }

    public function setMinimoVentaAlto($MinimoVentaAlto) {
        $this->MinimoVentaAlto = $MinimoVentaAlto;
    }

    public function getMinimoVentaAlto() {
        return $this->MinimoVentaAlto;
    }

    public function setMinimoVentaAncho($MinimoVentaAncho) {
        $this->MinimoVentaAncho = $MinimoVentaAncho;
    }

    public function getMinimoVentaAncho() {
        return $this->MinimoVentaAncho;
    }

    public function setMinimoVenta($MinimoVenta) {
        $this->MinimoVenta = $MinimoVenta;
    }

    public function getMinimoVenta() {
        return $this->MinimoVenta;
    }

    public function setMultiploAlto($MultiploAlto) {
        $this->MultiploAlto = $MultiploAlto;
    }

    public function getMultiploAlto() {
        return $this->MultiploAlto;
    }

    public function setMultiploAncho($MultiploAncho) {
        $this->MultiploAncho = $MultiploAncho;
    }

    public function getMultiploAncho() {
        return $this->MultiploAncho;
    }

    public function setRecargoEnergetico($RecargoEnergetico) {
        $this->RecargoEnergetico = $RecargoEnergetico;
    }

    public function getRecargoEnergetico() {
        if (!($this->RecargoEnergetico instanceof ValoresSN))
            $this->RecargoEnergetico = new ValoresSN($this->RecargoEnergetico);
        return $this->RecargoEnergetico;
    }

    public function setUMB($UMB) {
        $this->UMB = $UMB;
    }

    public function getUMB() {
        if (!($this->UMB instanceof ErpUnidadesMedida))
            $this->UMB = new ErpUnidadesMedida($this->UMB);
        return $this->UMB;
    }

    public function setUMC($UMC) {
        $this->UMC = $UMC;
    }

    public function getUMC() {
        if (!($this->UMC instanceof ErpUnidadesMedida))
            $this->UMC = new ErpUnidadesMedida($this->UMC);
        return $this->UMC;
    }

    public function setCUMC($CUMC) {
        $this->CUMC = $CUMC;
    }

    public function getCUMC() {
        return $this->CUMC;
    }

    public function setUMA($UMA) {
        $this->UMA = $UMA;
    }

    public function getUMA() {
        if (!($this->UMA instanceof ErpUnidadesMedida))
            $this->UMA = new ErpUnidadesMedida($this->UMA);
        return $this->UMA;
    }

    public function setCUMA($CUMA) {
        $this->CUMA = $CUMA;
    }

    public function getCUMA() {
        return $this->CUMA;
    }

    public function setUMV($UMV) {
        $this->UMV = $UMV;
    }

    public function getUMV() {
        if (!($this->UMV instanceof ErpUnidadesMedida))
            $this->UMV = new ErpUnidadesMedida($this->UMV);
        return $this->UMV;
    }

    public function setCUMV($CUMV) {
        $this->CUMV = $CUMV;
    }

    public function getCUMV() {
        return $this->CUMV;
    }

}

// END class ErpArticulos
?>