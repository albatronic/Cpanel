<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 29.10.2012 20:09:46
 */

/**
 * @orm:Entity(GconContenidos)
 */
class GconContenidos extends GconContenidosEntity {

    public function __toString() {
        return $this->getTitulo();
    }

    public function fetchAll($column = '', $default = TRUE) {
        if ($column == '')
            $column = 'Titulo';
        return parent::fetchAll($column, $default);
    }

    public function validaLogico() {

        parent::validaLogico();

        if (count($this->_errores) == 0) {
            if ($this->BlogOrden == 0)
                $this->setBlogOrden($this->getSortOrder());
            if ($this->NoticiaOrden == 0)
                $this->setNoticiaOrden($this->getSortOrder());
        }
    }

    /**
     * Devuelve un array con los ids de las etiquetas relacionadas
     * con el contenido $idContenido.
     *
     * Si no se indica contenido, se toma el actual.
     *
     * @param integer $idContenido El id del contenido, opcional
     * @return array Array
     */
    public function getEtiquetas($idContenido='') {

        if ($idContenido == '')
            $idContenido = $this->Id;

        $etiqueta = new GconEtiquetas();
        $etiquetas = $etiqueta->fetchAll();
        unset($etiqueta);

        $relacion = new GconContenidosEtiquetas();
        $etiquetasRelacionadas = $relacion->cargaCondicion('IdEtiqueta',"IdContenido='{$idContenido}'");
        unset($relacion);

        foreach ($etiquetas as $key => $etiqueta) {
            if ($etiqueta['Id'] == '1');
        }

        return $rows;
    }

}

?>