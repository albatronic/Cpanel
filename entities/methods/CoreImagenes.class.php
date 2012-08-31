<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 30.08.2012 18:13:36
 */

/**
 * @orm:Entity(core_imagenes)
 */
class CoreImagenes extends CoreImagenesEntity {
	public function __toString() {
		return $this->getId();
	}
}
?>