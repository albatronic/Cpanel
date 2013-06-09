<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 20.02.2013 15:47:58
 */

/**
 * @orm:Entity(EncargosLineas)
 */
class EncargosLineas extends EncargosLineasEntity {

    public function __toString() {
        return $this->getId();
    }

}

?>