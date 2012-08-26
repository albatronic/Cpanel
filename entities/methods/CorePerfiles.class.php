<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 24.08.2012 17:27:15
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