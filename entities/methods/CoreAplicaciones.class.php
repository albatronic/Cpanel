<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 30.08.2012 18:13:36
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