<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 16.10.2012 16:33:55
 */

/**
 * @orm:Entity(CommZonasHorarias)
 */
class CommZonasHorarias extends CommZonasHorariasEntity {

    public function __toString() {
        return $this->getZona();
    }

    public function fetchAll($column = '', $default = TRUE) {
        if ($column == '')
            $column = 'Zona';
        return parent::fetchAll($column, $default);
    }

}

?>