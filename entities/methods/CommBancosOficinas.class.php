<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 16.10.2012 16:33:55
 */

/**
 * @orm:Entity(CommBancosOficinas)
 */
class CommBancosOficinas extends CommBancosOficinasEntity {
	public function __toString() {
		return $this->getId();
	}
}
?>