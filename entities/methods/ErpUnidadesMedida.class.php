<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.01.2013 23:24:50
 */

/**
 * @orm:Entity(ErpUnidadesMedida)
 */
class ErpUnidadesMedida extends ErpUnidadesMedidaEntity {

    public function __toString() {
        return $this->getId();
    }

}

?>