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
        return $this->Idioma();
    }

    public function fetchAll($column = '', $default = TRUE) {
        if ($column == '')
            $column = 'Idioma';
        return parent::fetchAll($column, $default);
    }

    /**
     * Devuelve array (Id,Value) con los idiomas definidos en
     * la variable Web de Proyecto [globales][lang]
     * 
     * Si no se ha definido ninguno, devuelve el español
     * 
     * @return array
     */
    public function getArrayIdiomas($opcionTodos = FALSE) {

        $listaIdiomas = trim($_SESSION['VARIABLES']['WebPro']['globales']['lang']);
        if ($listaIdiomas == '')
            $listaIdiomas = "es";
        $arrayIdiomas = explode(",", $listaIdiomas);

        if ($opcionTodos) {
            $array[] = array("Id" => "", "Value" => "** Todos **");
        }
        foreach ($arrayIdiomas as $value) {
            $filtro = "Codigo='" . trim($value) . "'";
            $rows = $this->cargaCondicion("Codigo as Id, Idioma as Value", $filtro);
            $array[] = $rows[0];
        }

        return $array;
    }
}

?>