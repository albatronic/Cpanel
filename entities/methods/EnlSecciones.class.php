<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 04.09.2012 20:32:59
 */

/**
 * @orm:Entity(EnlSecciones)
 */
class EnlSecciones extends EnlSeccionesEntity {

    public function __toString() {

        return $this->Id;

    }

}

?>