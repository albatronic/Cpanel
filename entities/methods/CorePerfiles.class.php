<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 30.08.2012 18:13:36
 */

/**
 * @orm:Entity(core_perfiles)
 */
class CorePerfiles extends CorePerfilesEntity {
	public function __toString() {
		return $this->getIDPerfil();
	}
}
?>