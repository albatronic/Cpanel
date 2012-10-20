<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 18.10.2012 13:01:23
 */

/**
 * @orm:Entity(PcaeProyectosApps)
 */
class PcaeProyectosApps extends PcaeProyectosAppsEntity {
	public function __toString() {
		return $this->getId();
	}
}
?>