<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 16.10.2012 16:33:55
 */

/**
 * @orm:Entity(CommImpuestos)
 */
class CommImpuestos extends CommImpuestosEntity {

    public function __toString() {
        return $this->getNombre();
    }

    public function fetchAll($column = '', $default = TRUE) {
        if ($column == '')
            $column = 'Nombre';
        return parent::fetchAll($column, $default);
    }

}

?>