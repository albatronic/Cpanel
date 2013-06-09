<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 18.03.2013 10:33:06
 */

/**
 * @orm:Entity(AnmAnimales)
 */
class AnmAnimales extends AnmAnimalesEntity {

    public function __toString() {
        return $this->getRaza();
    }

    public function fetchAll($column = '', $default = TRUE) {
        if ($column == '')
            $column = 'Raza';
        return parent::fetchAll($column, $default);
    }

    /**
     * Devuelve un array anidado de categorias de animales
     * 
     * @return array Array
     */
    public function getArbolHijos($conAnimales = true, $entidadRelacionada = '', $idEntidadRelacionada = '') {

        if ($conAnimales == '') $conAnimales = true;
        
        $categorias = new AnmCategorias();
        $arbolCategorias = $categorias->getArbolHijos($conAnimales, $entidadRelacionada, $idEntidadRelacionada);
        unset($categorias);

        return $arbolCategorias;
    }

}

?>