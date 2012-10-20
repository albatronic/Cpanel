<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 18.10.2012 00:44:21
 */

/**
 * @orm:Entity(EnlSecciones)
 */
class EnlSecciones extends EnlSeccionesEntity {
	public function __toString() {
		return $this->getId();
	}
}
?>