<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 27.08.2012 21:05:00
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