<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 20.10.2012 20:42:36
 */

/**
 * @orm:Entity(PcaeVariables)
 */
class PcaeVariables extends PcaeVariablesEntity {
	public function __toString() {
		return $this->getId();
	}
}
?>