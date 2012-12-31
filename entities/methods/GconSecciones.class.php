<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 29.10.2012 20:07:59
 */

/**
 * @orm:Entity(GconSecciones)
 */
class GconSecciones extends GconSeccionesEntity {

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
            // Poner las etiquetas web
            if ($this->EtiquetaWeb1 == '')
                $this->setEtiquetaWeb1($this->Titulo);
            if ($this->EtiquetaWeb2 == '')
                $this->setEtiquetaWeb2($this->Titulo);
            if ($this->EtiquetaWeb3 == '')
                $this->setEtiquetaWeb3($this->Titulo);
            if ($this->EtiquetaWeb4 == '')
                $this->setEtiquetaWeb4($this->Titulo);
            if ($this->EtiquetaWeb5 == '')
                $this->setEtiquetaWeb5($this->Titulo);

            // Poner el orden de los menus
            if ($this->OrdenMenu1 == 0)
                $this->setOrdenMenu1($this->SortOrder);
            if ($this->OrdenMenu2 == 0)
                $this->setOrdenMenu2($this->SortOrder);
            if ($this->OrdenMenu3 == 0)
                $this->setOrdenMenu3($this->SortOrder);
            if ($this->OrdenMenu4 == 0)
                $this->setOrdenMenu4($this->SortOrder);
            if ($this->OrdenMenu5 == 0)
                $this->setOrdenMenu5($this->SortOrder);

            // Asignar el nivel Jerárquico
            $nivelPadre = 0;
            if ($this->BelongsTo != 0) {
                $seccion = new GconSecciones($this->BelongsTo);
                $nivelPadre = $seccion->getNivelJerarquico();
                unset($seccion);
            }

            $this->setNivelJerarquico($nivelPadre + 1);
        }
    }

    /**
     * Devuelve un array con los contenidos correspondientes
     * a la sección indicada, o en su defecto a la sección actual.
     *
     * Si se indica $idContenido, se añade un elmento más que indica
     * si cada contenido está relacionado con el contenido $idContenido
     *
     * @param integer $idSeccion El id de la seccion
     * @param integer $idContenido El id del contenido
     * @return array Array Id, Value de contenidos
     */
    public function getContenidos($idSeccion = '', $idContenido = '') {

        if ($idSeccion == '')
            $idSeccion = $this->Id;

        $contenido = new GconContenidos();
        $contenidos = $contenido->cargaCondicion('Id as Id,Titulo as Value,PrimaryKeyMD5,Publish', "IdSeccion='{$idSeccion}'", "SortOrder ASC");
        unset($contenido);

        if ($idContenido) {
            foreach ($contenidos as $key => $contenido) {
                $relacion = new GconContenidosRelacionados();
                $contenidos[$key]['estaRelacionado'] = $relacion->estanRelacionados($idContenido, $contenido['Id']);
            }
            unset($relacion);
        }
        return $contenidos;
    }

    /**
     * Devuelve un array con el árbol de secciones y contenidos
     * 
     * Si se indica valor para el parámetro $idContenidoRelacionado, en el array
     * de contenidos se incluirá un elemento booleano que indica si cada contenido
     * está relacionado con el contenido cuyo valor es el parámetro.
     * 
     * El índice del array contiene el valor de la primaryKeyMD5 de cada sección y la estructura es:
     * 
     * - id => el id de la seccion
     * - titulo => el titulo de la seccion
     * - nivelJerarquico => el nivel jerárquico dentro del árbol de secciones
     * - hijos => array de secciones hijas (belongsTo) con la misma estructura
     * - nContenidos => el número de contenidos que posee la sección
     * - contenidos => array de contenidos de la seccion
     * 
     * @param integer $idContenidoRelacionado 
     * @return array Array de secciones
     */
    public function getArbolHijos($idContenidoRelacionado = '') {

        $arbol = array();

        $objeto = new $this();
        $rows = $objeto->cargaCondicion("Id,PrimaryKeyMD5,NivelJerarquico,Publish", "BelongsTo='0'", "SortOrder ASC");
        unset($objeto);

        foreach ($rows as $row) {
            $objeto = new $this($row['Id']);
            $arrayContenidos = $this->getContenidos($row['Id'],$idContenidoRelacionado);
            $arrayHijos = $objeto->getHijos();
            $arbol[$row['PrimaryKeyMD5']] = array(
                'id' => $row['Id'],
                'titulo' => $objeto->getTitulo(),
                'nivelJerarquico' => $row['NivelJerarquico'],
                'publish' => $row['Publish'],
                'nHijos' => count($arrayHijos),
                'hijos' => $arrayHijos,
                'nContenidos' => count($arrayContenidos),
                'contenidos' => $arrayContenidos,
            );
        }

        unset($objeto);
        return $arbol;
    }

    /**
     * Genera el árbol genealógico con las entidades hijas de la
     * entidad $idPadre.
     * 
     * El árbol se genera de forma recursiva sin límite de profundidad.
     * 
     * El array lleva valor únicamente en el índice, y dicho valor es el
     * id de las entidades.
     * 
     * @param integer $idPadre El id de la entidad padre
     * @return array
     */
    public function getHijos($idPadre = '') {

        if ($idPadre == '')
            $idPadre = $this->getPrimaryKeyValue();

        $this->getChildrens($idPadre);
        return $this->_hijos[$idPadre];
    }

    /**
     * Generar un árbol genealógico con las entidades hijas
     * de la entidad cuyo id es $idPadre
     *
     * @param integer $idPadre El id de la entidad padre
     * @return array Array con los objetos hijos
     */
    private function getChildrens($idPadre) {

        // Obtener todos los hijos del padre actual
        $hijos = $this->cargaCondicion('Id,PrimaryKeyMD5,NivelJerarquico,Publish', "BelongsTo='{$idPadre}'", "SortOrder ASC");

        foreach ($hijos as $hijo) {
            $aux = new $this($hijo['Id']);
            $arrayContenidos = $this->getContenidos($hijo['Id']);
            $arrayHijos = $this->getChildrens($hijo['Id']);
            $this->_hijos[$idPadre][$hijo['PrimaryKeyMD5']] = array(
                'id' => $hijo['Id'],
                'titulo' => $aux->getTitulo(),
                'nivelJerarquico' => $hijo['NivelJerarquico'],
                'publish' => $hijo['Publish'],                
                'nHijos' => count($arrayHijos),
                'hijos' => $arrayHijos,
                'nContenidos' => count($arrayContenidos),
                'contenidos' => $arrayContenidos,
            );
            unset($hijo);
        }

        return $this->_hijos[$idPadre];
    }

    /**
     * ESTOS MÉTODOS SON PARA TWIG
     */
    public function getMostrarEnMenuN($n) {
        return $this->{"MostrarEnMenu$n"};
    }

    public function getEtiquetaWebN($n) {
        return $this->{"EtiquetaWeb$n"};
    }
}

?>