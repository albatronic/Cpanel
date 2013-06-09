<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 13.05.2013 15:38:57
 */

/**
 * @orm:Entity(CpanEsqueletoWeb)
 */
class CpanEsqueletoWeb extends CpanEsqueletoWebEntity {

    public function __toString() {
        return $this->getId();
    }

}

?>