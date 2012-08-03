<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 03.08.2012 21:15:37
 */

/**
 * @orm:Entity(funcionalidades)
 */
class Funcionalidades extends FuncionalidadesEntity {
	public function __toString() {
		return $this->getIDFuncionalidad();
	}
}
?>