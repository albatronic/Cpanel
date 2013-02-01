<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.01.2013 19:57:09
 */

/**
 * @orm:Entity(ErpFamilias)
 */
class ErpFamilias extends ErpFamiliasEntity {

    public function __toString() {
        return $this->getTitulo();
    }

    public function fetchAll($column = '', $default = TRUE) {
        if ($column == '')
            $column = 'Titulo';
        return parent::fetchAll($column, $default);
    }

    public function validaLogico() {

        parent::validaLogico();

        if (count($this->_errores) == 0) {

            // Asignar el nivel Jerárquico
            $nivelPadre = 0;
            if ($this->BelongsTo != 0) {
                $familia = new ErpFamilias($this->BelongsTo);
                $nivelPadre = $familia->getNivelJerarquico();
                unset($familia);
            }

            $this->setNivelJerarquico($nivelPadre + 1);
        }
    }
    
    
}
?>