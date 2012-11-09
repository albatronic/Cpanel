<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 04.09.2012 20:32:58
 */

/**
 * @orm:Entity(CpanModulos)
 */
class CpanModulos extends CpanModulosEntity {

    public function __toString() {
        return $this->getNombreModulo();
    }

    public function fetchAll($column = '', $default = TRUE) {
        if ($column == '')
            $column = 'NombreModulo';
        return parent::fetchAll($column, $default);
    }
}
?>