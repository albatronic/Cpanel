<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 04.11.2012 20:25:21
 */

/**
 * @orm:Entity(CommBancosOficinas)
 */
class CommBancosOficinas extends CommBancosOficinasEntity {

    public function __toString() {
        return $this->getCodigo() . "-" . $this->getDireccion();
    }

}

?>