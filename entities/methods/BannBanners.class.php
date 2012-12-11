<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 09.12.2012 09:27:33
 */

/**
 * @orm:Entity(BannBanners)
 */
class BannBanners extends BannBannersEntity {

    public function __toString() {
        return $this->Titulo;
    }

    public function fetchAll($column = '', $default = TRUE) {
        if ($column == '')
            $column = 'Titulo';
        return parent::fetchAll($column, $default);
    }

    /**
     * Antes de insertar hay que comprobar que no se exceda
     * el número máximo de banners permitido por zona
     */
    public function validaLogico() {
        parent::validaLogico();

        if ($this->getPrimaryKeyValue() == '') {
            // Voy a insertar
            $zona = new BannZonas($this->IdZona);
            $banner = new BannBanners();
            $rows = $banner->cargaCondicion("count(Id) as nMax", "IdZona='{$this->IdZona}'");
            if ($zona->getNumeroMaximoBanners() < ($rows[0]['nMax'] + 1))
                $this->_errores[] = "Se ha superado el número de banners para la zona {$zona->getTitulo()}. Consulte con el administrador de la web";
            unset($banner);
            unset($zona);
        }

        if (count($this->_errores) == 0)
            $this->OrdenMostrarEnListado = $this->SortOrder;
    }

}

?>