<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.01.2013 19:57:09
 */

/**
 * @orm:Entity(ErpArticulos)
 */
class ErpArticulos extends ErpArticulosEntity {

    public function __toString() {
        return $this->getId();
    }
   /**
     * Pongo el precio medio de compra igual al precio de costo
     *
     * @return integer El id del ultimo articulo creado
     */
    public function create() {

        $this->Pmc = $this->Pvd;

        return parent::create();
    }

    /**
     * Si hay stock no se puede cambiar el estado de inventario ni las unidades de medida
     * Si las unidades de media son iguales, los factores de conversión los pongo a 1
     * Calculo el precio de venta sobre EL PRECIO MEDIO DE COSTO
     * Si columna 'etiqueta' está vacía, le pongo valor de la descripción del artículo
     * Crear la Url Amigable
     */
    protected function validaLogico() {

        // Si hay stock no se puede cambiar el estado de inventario ni las unidades de medida
        $exi = new ErpExistencias();

        if ($exi->hayRegistroExistencias($this->Id)) {
            // Hay registro de existencias
            $articulo = new $this($this->Id);
            $this->setInventario($articulo->getInventario()->getIDTipo());
            $this->setUMA($articulo->getUMA()->getId());
            $this->setUMC($articulo->getUMC()->getId());
            $this->setUMV($articulo->getUMV()->getId());
            unset($articulo);
            $this->_alertas[] = "Hay Stock, no puede cambiar ni el estado de Inventario ni las Unidades de Medida";
        } else {
            // Si no es inventariable, pongo los valores relativos
            // al inventario a 0.
            if ($this->Inventario == 0) {
                $this->Trazabilidad = 0;
                $this->BloqueoStock = 0;
                $this->StockMinimo = 0;
                $this->StockMaximo = 0;
                $this->Caducidad = 0;
            }

            // Si las unidades de media son iguales, los factores de conversión los pongo a 1
            if ($this->UMC == $this->UMB)
                $this->CUMC = 1;
            if ($this->UMA == $this->UMB)
                $this->CUMA = 1;
            if ($this->UMV == $this->UMB)
                $this->CUMV = 1;
        }

        // Calculo el precio de venta sobre EL PRECIO MEDIO DE COSTO
        if ($this->Pmc == 0)
            $this->Pmc = $this->Pvd;
        if ($this->Pmc != 0)
            $this->Pvp = $this->Pmc * ( 1 + $this->Margen / 100);

        // Si columna 'etiqueta' está vacía, le pongo valor
        if ($this->Etiqueta == '')
            $this->setEtiqueta($this->Descripcion);

        unset($exi);
    }

}

?>