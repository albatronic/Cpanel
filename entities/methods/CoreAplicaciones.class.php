<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 25.08.2012 23:35:42
 */

/**
 * @orm:Entity(core_aplicaciones)
 */
class CoreAplicaciones extends CoreAplicacionesEntity {
	public function __toString() {
		return $this->getIDApp();
	}
}
?>