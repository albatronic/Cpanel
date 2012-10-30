<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 16.10.2012 16:33:55
 */

/**
 * @orm:Entity(CommPaises)
 */
class CommPaises extends CommPaisesEntity {

    public function __toString() {
        return $this->getPais();
    }

    public function fetchAll($column = '', $default = TRUE) {
        if ($column == '')
            $column = 'Pais';
        return parent::fetchAll($column, $default);
    }

}

?>