<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 18.03.2013 13:04:51
 */

/**
 * @orm:Entity(AnmCategorias)
 */
class AnmCategorias extends AnmCategoriasEntity {

    public function __toString() {
        return $this->getTitulo();
    }

    public function fetchAll($column = '', $default = TRUE) {
        if ($column == '')
            $column = 'Titulo';
        return parent::fetchAll($column, $default);
    }

    /**
     * Al borrar una categoría, borro (erase) todas sus posibles
     * relaciones con otras entidades de la tabla CpanRelaciones
     */
    public function delete() {
        
        $idCategoria = $this->Id;
        
        $ok = parent::delete();
        
        if ($ok) {
            $relaciones = new CpanRelaciones();
            $relaciones->eraseRelaciones($this->getClassName(), $idCategoria);
            unset($relaciones);
        }
        
        return $ok;
    }
    
    /**
     * Devuelve un array con los animales correspondientes
     * a la categoria indicada, o en su defecto a la categoria actual.
     *
     * Si se indica $entidadRelacionada e $idEntidadRelacionada, se añade un elmento más que indica
     * si cada animal está relacionado con $entidadRelacionada e $idEntidadRelacionada
     *
     * El array tiene los siguientes elementos:
     * 
     * - Id: El id del animal
     * - Value: la raza del animal
     * - PrimaryKeyMD5: la primarykey MD5
     * - Publish: TRUE/FALSE
     * - estaRelacionado: El id de la eventual relacion
     * 
     * @param integer $idCategoria El id de la categoria
     * @param string $idEntidadRelacionada La entidad con la que existe una posible relación
     * @param integer $idEntidadRelacionada El id de entidad con la que existe una posible relación
     * @return array Array Id, Value de animales
     */
    public function getAnimales($idCategoria = '', $entidadRelacionada = '', $idEntidadRelacionada = '') {

        if ($idCategoria == '')
            $idCategoria = $this->Id;

        $animal = new AnmAnimales();
        $animales = $animal->cargaCondicion('Id as Id,Raza as Value,PrimaryKeyMD5,Publish', "IdCategoria='{$idCategoria}'", "SortOrder ASC");
        unset($animal);

        if ($entidadRelacionada) {
            foreach ($animales as $key => $animal) {
                $relacion = new CpanRelaciones();
                $animales[$key]['estaRelacionado'] = $relacion->getIdRelacion($entidadRelacionada, $idEntidadRelacionada, 'AnmAnimales', $animal['Id']);
            }
            unset($relacion);
        }
        return $animales;
    }

    /**
     * Devuelve un array con el árbol de categorias de animales y animales
     * 
     * Si se indica valor para el parámetro $idAnimalRelacionado, en el array
     * de animales se incluirá un elemento booleano que indica si cada animal
     * está relacionado con el animal cuyo valor es el parámetro.
     * 
     * El índice del array contiene el valor de la primaryKeyMD5 de cada categoría y la estructura es:
     * 
     * - id => el id de la categoría
     * - titulo => el titulo de la categoría
     * - nivelJerarquico => el nivel jerárquico dentro del árbol de categorías
     * - publish => Publicar TRUE/FALSE
     * - belongsTo => El id del padre al que pertenece
     * - nHijos => El número de categorías hijas
     * - hijos => array de categorias hijas (belongsTo) con la misma estructura
     * - nAnimales => el número de animales que posee la categoria
     * - animales => array de animales de la categoria
     * 
     * @param boolean $conAnimales
     * @param string $entidadRelacionada
     * @param integer $idEntidadRelacionada 
     * @return array Array de categorias
     */
    public function getArbolHijos($conAnimales = FALSE, $entidadRelacionada = '', $idEntidadRelacionada = '') {

        $arbol = array();

        $objeto = new $this();
        $rows = $objeto->cargaCondicion("Id,PrimaryKeyMD5,NivelJerarquico,Publish,BelongsTo", "BelongsTo='0'", "SortOrder ASC");
        unset($objeto);

        foreach ($rows as $row) {
            $objeto = new $this($row['Id']);
            $arrayAnimales = ($conAnimales) ? $this->getAnimales($row['Id'], $entidadRelacionada, $idEntidadRelacionada) : array();
            $arrayHijos = $objeto->getHijos('', $conAnimales, $entidadRelacionada, $idEntidadRelacionada);
            $arbol[$row['PrimaryKeyMD5']] = array(
                'id' => $row['Id'],
                'titulo' => $objeto->getTitulo(),
                'nivelJerarquico' => $row['NivelJerarquico'],
                'publish' => $row['Publish'],
                'belongsTo' => $row['BelongsTo'],
                'nHijos' => count($arrayHijos),
                'hijos' => $arrayHijos,
                'nAnimales' => count($arrayAnimales),
                'animales' => $arrayAnimales,
            );
            if ($entidadRelacionada) {
                $relacion = new CpanRelaciones();
                $arbol[$row['PrimaryKeyMD5']]['estaRelacionado'] = $relacion->getIdRelacion($entidadRelacionada, $idEntidadRelacionada, 'AnmCategorias', $row['Id']);
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
    public function getHijos($idPadre = '', $conAnimales = FALSE, $entidadRelacionada = '', $idEntidadRelacionada = '') {

        if ($idPadre == '')
            $idPadre = $this->getPrimaryKeyValue();

        $this->getChildrens($idPadre, $conAnimales, $entidadRelacionada, $idEntidadRelacionada);
        return $this->_hijos[$idPadre];
    }

    /**
     * Generar un árbol genealógico con las entidades hijas
     * de la entidad cuyo id es $idPadre
     *
     * @param integer $idPadre El id de la entidad padre
     * @return array Array con los objetos hijos
     */
    private function getChildrens($idPadre, $conAnimales, $entidadRelacionada, $idEntidadRelacionada) {

        // Obtener todos los hijos del padre actual
        $hijos = $this->cargaCondicion('Id,PrimaryKeyMD5,NivelJerarquico,Publish,BelongsTo', "BelongsTo='{$idPadre}'", "SortOrder ASC");

        foreach ($hijos as $hijo) {
            $aux = new $this($hijo['Id']);
            $arrayAnimales = ($conAnimales) ? $this->getAnimales($hijo['Id']) : array();
            $arrayHijos = $this->getChildrens($hijo['Id'], $conAnimales, $entidadRelacionada, $idEntidadRelacionada);
            $this->_hijos[$idPadre][$hijo['PrimaryKeyMD5']] = array(
                'id' => $hijo['Id'],
                'titulo' => $aux->getTitulo(),
                'nivelJerarquico' => $hijo['NivelJerarquico'],
                'publish' => $hijo['Publish'],
                'belongsTo' => $hijo['BelongsTo'],
                'nHijos' => count($arrayHijos),
                'hijos' => $arrayHijos,
                'nAnimales' => count($arrayAnimales),
                'animales' => $arrayAnimales,
            );
            if ($entidadRelacionada) {
                $relacion = new CpanRelaciones();
                $this->_hijos[$idPadre][$hijo['PrimaryKeyMD5']]['estaRelacionado'] = $relacion->getIdRelacion($entidadRelacionada, $idEntidadRelacionada, 'AnmCategorias', $hijo['Id']);
            }
            unset($hijo);
        }

        return $this->_hijos[$idPadre];
    }

}

?>