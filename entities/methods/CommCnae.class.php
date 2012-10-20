<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 18.10.2012 00:22:15
 */

/**
 * @orm:Entity(CommCnae)
 */
class CommCnae extends CommCnaeEntity {
	public function __toString() {
		return $this->getId();
	}
}
?>