<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 04.09.2012 20:32:58
 */

/**
 * @orm:Entity(CoreModulos)
 */
class CoreModulos extends CoreModulosEntity {
	public function __toString() {
		return $this->getId();
	}
}
?>