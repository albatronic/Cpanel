<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 01.02.2013 20:16:29
 */

/**
 * @orm:Entity(CpanRelaciones)
 */
class CpanRelaciones extends CpanRelacionesEntity {

    public function __toString() {
        return $this->getId();
    }


    /**
     * Devuelve el id de la eventual relación entre una entidad-idEntidad origen y 
     * otra entidad-idEntidad destino
     * 
     * @param string $entidadOrigen
     * @param integer $idOrigen
     * @param string $entidadDestino
     * @param integer $idDestino
     * @return integer
     */
    public function getIdRelacion($entidadOrigen, $idOrigen, $entidadDestino, $idDestino) {

        $filtro = "EntidadOrigen='{$entidadOrigen}' AND IdEntidadOrigen='{$idOrigen}' AND EntidadDestino='{$entidadDestino}' AND IdEntidadDestino='{$idDestino}'";
        $row = $this->cargaCondicion('Id', $filtro);

        return ($row[0]['Id']);
    }
}

?>