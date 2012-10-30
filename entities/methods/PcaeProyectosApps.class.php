<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 25.10.2012 19:17:27
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