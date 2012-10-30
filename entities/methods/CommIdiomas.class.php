<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 16.10.2012 16:33:55
 */

/**
 * @orm:Entity(CommIdiomas)
 */
class CommIdiomas extends CommIdiomasEntity {

    public function __toString() {
        return $this->getIdioma();
    }

    public function fetchAll($column = '', $default = TRUE) {
        if ($column == '')
            $column = 'Idioma';
        return parent::fetchAll($column, $default);
    }

}

?>