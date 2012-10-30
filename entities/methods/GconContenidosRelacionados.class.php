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
}
?>