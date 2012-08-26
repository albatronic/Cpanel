<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 24.08.2012 17:27:15
 */

/**
 * @orm:Entity(core_permisos)
 */
class CorePermisos extends CorePermisosEntity {
	public function __toString() {
		return $this->getIDPermiso();
	}
}
?>