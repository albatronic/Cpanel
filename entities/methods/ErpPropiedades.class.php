<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.01.2013 19:57:09
 */

/**
 * @orm:Entity(ErpPropiedades)
 */
class ErpPropiedades extends ErpPropiedadesEntity {
	public function __toString() {
		return $this->getId();
	}
}
?>