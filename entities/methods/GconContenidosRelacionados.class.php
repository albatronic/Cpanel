<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 29.10.2012 20:08:29
 */

/**
 * @orm:Entity(GconContenidosRelacionados)
 */
class GconContenidosRelacionados extends GconContenidosRelacionadosEntity {

    public function __toString() {
        return $this->getId();
    }

    /**
     * Devuelve true o false si existe o no relación entre
     * el contenido $idContenido1 y el $idContenido2
     *
     * @param integer $idContenido1
     * @param integer $idContenido2
     * @return boolean TRUE se hay relacion
     */
    public function estanRelacionados($idContenido1, $idContenido2) {

        $relacion = new GconContenidosRelacionados();
        $row = $relacion->cargaCondicion('Id', "IdOrigen='{$idContenido1}' and IdRelacionado='{$idContenido2}'");
        unset($relacion);

        return ($row[0]['Id'] != '');
    }

    /**
     * Devuelve el id de la relacion entre dos contenidos
     * 
     * @param integer $idContenido1
     * @param integer $idContenido2
     * @return integer El id de la relacion
     */
    public function getIdRelacion($idContenido1, $idContenido2) {

        $relacion = new GconContenidosRelacionados();
        $row = $relacion->cargaCondicion('Id', "IdOrigen='{$idContenido1}' and IdRelacionado='{$idContenido2}'");
        unset($relacion);

        return ($row[0]['Id']);
    }

}

?>