<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 04.09.2012 20:32:58
 */

/**
 * @orm:Entity(CpanPermisos)
 */
class CpanPermisos extends CpanPermisosEntity {

    public function __toString() {
        return $this->getId();
    }

}

?>