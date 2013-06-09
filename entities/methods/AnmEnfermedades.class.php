<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 18.03.2013 10:35:36
 */

/**
 * @orm:Entity(AnmEnfermedades)
 */
class AnmEnfermedades extends AnmEnfermedadesEntity {

    public function __toString() {
        return $this->Titulo;
    }

    public function fetchAll($column = '', $default = TRUE) {
        if ($column == '')
            $column = 'Titulo';
        return parent::fetchAll($column, $default);
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
     * - publish => Publicar TRUE/FALSE
     * - belongsTo => El id del padre al que pertenece
     * - nHijos => El número de secciones hijas
     * - hijos => array de secciones hijas (belongsTo) con la misma estructura
     * - nContenidos => el número de contenidos que posee la sección
     * - contenidos => array de contenidos de la seccion
     * 
     * @param boolean $conContenidos
     * @param string $entidadRelacionada
     * @param integer $idEntidadRelacionada 
     * @return array Array de secciones
     */
    public function getArbolHijos($nada = '', $entidadRelacionada = '', $idEntidadRelacionada = '') {

        $arbol = array();

        $objeto = new $this();
        $rows = $objeto->cargaCondicion("Id,PrimaryKeyMD5,NivelJerarquico,Publish,BelongsTo", "BelongsTo='0'", "SortOrder ASC");
        unset($objeto);

        foreach ($rows as $row) {
            $objeto = new $this($row['Id']);
            $arrayHijos = $objeto->getHijos('', $nada, $entidadRelacionada, $idEntidadRelacionada);
            $arbol[$row['PrimaryKeyMD5']] = array(
                'id' => $row['Id'],
                'titulo' => $objeto->getTitulo(),
                'nivelJerarquico' => $row['NivelJerarquico'],
                'publish' => $row['Publish'],
                'belongsTo' => $row['BelongsTo'],
                'nHijos' => count($arrayHijos),
                'hijos' => $arrayHijos,
            );
            if ($entidadRelacionada) {
                $relacion = new CpanRelaciones();
                $arbol[$row['PrimaryKeyMD5']]['estaRelacionado'] = $relacion->getIdRelacion($entidadRelacionada, $idEntidadRelacionada, $this->getClassName(), $row['Id']);
            }
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
    public function getHijos($idPadre = '', $nada = FALSE, $entidadRelacionada = '', $idEntidadRelacionada = '') {

        if ($idPadre == '')
            $idPadre = $this->getPrimaryKeyValue();

        $this->getChildrens($idPadre, $nada, $entidadRelacionada, $idEntidadRelacionada);
        return $this->_hijos[$idPadre];
    }

    /**
     * Generar un árbol genealógico con las entidades hijas
     * de la entidad cuyo id es $idPadre
     *
     * @param integer $idPadre El id de la entidad padre
     * @return array Array con los objetos hijos
     */
    private function getChildrens($idPadre, $nada, $entidadRelacionada, $idEntidadRelacionada) {

        // Obtener todos los hijos del padre actual
        $hijos = $this->cargaCondicion('Id,PrimaryKeyMD5,NivelJerarquico,Publish,BelongsTo', "BelongsTo='{$idPadre}'", "SortOrder ASC");

        foreach ($hijos as $hijo) {
            $aux = new $this($hijo['Id']);
            $arrayHijos = $this->getChildrens($hijo['Id'], $nada, $entidadRelacionada, $idEntidadRelacionada);
            $this->_hijos[$idPadre][$hijo['PrimaryKeyMD5']] = array(
                'id' => $hijo['Id'],
                'titulo' => $aux->getTitulo(),
                'nivelJerarquico' => $hijo['NivelJerarquico'],
                'publish' => $hijo['Publish'],
                'belongsTo' => $hijo['BelongsTo'],
                'nHijos' => count($arrayHijos),
                'hijos' => $arrayHijos,
            );
            if ($entidadRelacionada) {
                $relacion = new CpanRelaciones();
                $this->_hijos[$idPadre][$hijo['PrimaryKeyMD5']]['estaRelacionado'] = $relacion->getIdRelacion($entidadRelacionada, $idEntidadRelacionada, $this->getClassName(), $hijo['Id']);
            }
            unset($hijo);
        }

        return $this->_hijos[$idPadre];
    }

}

?>