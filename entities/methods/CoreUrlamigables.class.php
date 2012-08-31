<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 30.08.2012 18:36:45
 */

/**
 * @orm:Entity(core_urlamigables)
 */
class CoreUrlamigables extends CoreUrlamigablesEntity {
	public function __toString() {
		return $this->getIDUrlAmigable();
	}
}
?>