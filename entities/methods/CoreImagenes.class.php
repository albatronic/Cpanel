<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.08.2012 20:01:33
 */

/**
 * @orm:Entity(core_imagenes)
 */
class CoreImagenes extends CoreImagenesEntity {

    public function __toString() {
        return $this->getId();
    }

    /**
     * Devuelve el objeto imagen correspondiente a la entidad, id de entidad
     * y nombre de archivo indicados
     *
     * @param string $entidad El nombre de la entidad
     * @param integer $idEntidad El id de la entidad
     * @param string $fileName El nombre completo del archivo
     * @return \CoreImagenes Objeto Imagen
     */
    public function getObject($entidad, $idEntidad, $fileName) {

        $row = $this->cargaCondicion("Id", "Entidad='{$entidad}' AND IDEntidad='{$idEntidad}' AND PathName='{$fileName}'");

        return new CoreImagenes($row[0]['Id']);
    }

}

?>