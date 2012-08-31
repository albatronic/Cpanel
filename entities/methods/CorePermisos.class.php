<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 30.08.2012 18:13:36
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