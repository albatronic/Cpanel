<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.01.2013 19:57:09
 */

/**
 * @orm:Entity(ErpPropiedadesValores)
 */
class ErpPropiedadesValores extends ErpPropiedadesValoresEntity {
	public function __toString() {
		return $this->getId();
	}
}
?>