<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 30.10.2012 18:46:55
 */

/**
 * @orm:Entity(GconContenidosEtiquetas)
 */
class GconContenidosEtiquetas extends GconContenidosEtiquetasEntity {
	public function __toString() {
		return $this->getId();
	}

    /**
     * Devuelve el id de la relacion entre un contenido y una etiqueta
     *
     * @param integer $idContenido
     * @param integer $idEtiqueta
     * @return integer El id de la relacion
     */
    public function getIdRelacion($idContenido, $idEtiqueta) {

        $relacion = new GconContenidosEtiquetas();
        $row = $relacion->cargaCondicion('Id', "IdContenido='{$idContenido}' and IdEtiqueta='{$idEtiqueta}'");
        unset($relacion);

        return ($row[0]['Id']);
    }
}
?>