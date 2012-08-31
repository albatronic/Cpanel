<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 30.08.2012 18:13:37
 */

/**
 * @orm:Entity(enl_enlaces)
 */
class EnlEnlaces extends EnlEnlacesEntity {
	public function __toString() {
		return $this->getIDEnlace();
	}
}
?>