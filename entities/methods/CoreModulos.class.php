<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 24.08.2012 17:27:15
 */

/**
 * @orm:Entity(core_modulos)
 */
class CoreModulos extends CoreModulosEntity {
	public function __toString() {
		return $this->getIDModulo();
	}
}
?>