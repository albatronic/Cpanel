<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 03.08.2012 21:15:37
 */

/**
 * @orm:Entity(perfiles)
 */
class Perfiles extends PerfilesEntity {
	public function __toString() {
		return $this->getIDPerfil();
	}
}
?>