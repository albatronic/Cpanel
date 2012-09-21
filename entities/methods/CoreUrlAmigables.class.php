<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 18.09.2012 17:45:10
 */

/**
 * @orm:Entity(CoreUrlAmigables)
 */
class CoreUrlAmigables extends CoreUrlAmigablesEntity {
	public function __toString() {
		return $this->getId();
	}
}
?>