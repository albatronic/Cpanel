<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 24.08.2012 18:22:41
 */

/**
 * @orm:Entity(core_roles)
 */
class CoreRoles extends CoreRolesEntity {
	public function __toString() {
		return $this->getIDRol();
	}
}
?>