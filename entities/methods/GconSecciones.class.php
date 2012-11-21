<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 29.10.2012 20:07:59
 */

/**
 * @orm:Entity(GconSecciones)
 */
class GconSecciones extends GconSeccionesEntity {

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
            if ($this->EtiquetaWeb1 == '')
                $this->setEtiquetaWeb1($this->Titulo);
            if ($this->EtiquetaWeb2 == '')
                $this->setEtiquetaWeb2($this->Titulo);
            if ($this->EtiquetaWeb3 == '')
                $this->setEtiquetaWeb3($this->Titulo);
            if ($this->EtiquetaWeb4 == '')
                $this->setEtiquetaWeb4($this->Titulo);
            if ($this->EtiquetaWeb5 == '')
                $this->setEtiquetaWeb5($this->Titulo);
        }
    }

    /**
     * Devuelve un array con los contenidos correspondientes
     * a la sección indicada, o en su defecto a la sección actual.
     *
     * Si se indica $idContenido, se añade un elmento más que indica
     * si cada contenido está relacionado con el contenido $idContenido
     *
     * @param integer $idSeccion El id de la seccion
     * @param integer $idContenido El id del contenido
     * @return array Array Id, Value de contenidos
     */
    public function getContenidos($idSeccion='', $idContenido='') {

        if ($idSeccion == '') $idSeccion = $this->Id;

        $contenido = new GconContenidos();
        $contenidos = $contenido->cargaCondicion('Id as Id,Titulo as Value',"IdSeccion='{$idSeccion}'","SortOrder ASC");
        unset($contenido);

        if ($idContenido) {
            foreach ($contenidos as $key => $contenido) {
                $relacion = new GconContenidosRelacionados();
                $contenidos[$key]['estaRelacionado'] = $relacion->estanRelacionados($idContenido,$contenido['Id']);
            }
            unset($relacion);
        }
        return $contenidos;

    }
}

?>