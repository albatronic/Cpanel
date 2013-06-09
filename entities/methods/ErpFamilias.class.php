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

    /**
     * Guardo la familia y actualizo sus articulos
     * haciendo que hereden ciertas características.
     * 
     * @return boolean
     */
    public function save() {

        $ok = parent::save();

        if ($ok) {
            $this->conecta();

            $articulo = new ErpArticulos();
            $dbName = $articulo->getDataBaseName();
            $tableName = $articulo->getTableName();
            unset($articulo);

            if (is_resource($this->_dbLink)) {
                $query = "UPDATE {$dbName}.{$tableName} set
                            Inventario='{$this->Inventario}',
                            Trazabilidad='{$this->Trazabilidad}',
                            Publish='{$this->Publish}',
                            ActiveFrom = CASE
                              WHEN ActiveFrom<'{$this->ActiveFrom}' THEN '{$this->ActiveFrom}' ELSE ActiveFrom
                            END,
                            ActiveTo = CASE
                              WHEN ActiveTo>'{$this->ActiveTo}' THEN '{$this->ActiveTo}' ELSE ActiveTo
                            END
                            where (IDCategoria='{$this->Id}') 
                                or (IDFamilia='{$this->Id}') 
                                or (IDSubfamilia='{$this->Id}');";
                $this->_em->query($query);
                $this->_em->desConecta();
            }
            unset($this->_em);
        }

        return $ok;
    }

    /**
     * Devuelve un array con los articulos correspondientes
     * a la familia indicada, o en su defecto a la familia actual.
     *
     * Si se indica $entidadRelacionada e $idEntidadRelacionada, se añade un elmento más que indica
     * si cada articulo está relacionado con $entidadRelacionada e $idEntidadRelacionada
     *
     * El array tiene los siguientes elementos:
     * 
     * - Id: El id del articulo
     * - Value: La descripcion del articulo
     * - PrimaryKeyMD5: la primarykey MD5
     * - Publish: TRUE/FALSE
     * - estaRelacionado: El id de la eventual relacion
     * 
     * @param integer $idFamilia El id de la familia
     * @param string $idEntidadRelacionada La entidad con la que existe una posible relación
     * @param integer $idEntidadRelacionada El id de entidad con la que existe una posible relación
     * @return array Array Id, Value de articulos
     */
    public function getArticulos($idFamilia = '', $entidadRelacionada = '', $idEntidadRelacionada = '') {

        if ($idFamilia == '')
            $idFamilia = $this->Id;

        $articulo = new ErpArticulos();
        $articulos = $articulo->cargaCondicion('Id as Id,Descripcion as Value,PrimaryKeyMD5,Publish', "IDFamilia='{$idFamilia}'", "SortOrder ASC");
        unset($articulo);

        if ($entidadRelacionada) {
            foreach ($articulos as $key => $articulo) {
                $relacion = new CpanRelaciones();
                $articulos[$key]['estaRelacionado'] = $relacion->getIdRelacion('ErpArticulos', $articulo['Id'], $entidadRelacionada, $idEntidadRelacionada);
            }
            unset($relacion);
        }
        return $articulos;
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
     * - nArticulos => el número de artículos que posee la familia
     * - articulos => array de artículos de la familia
     * 
     * @param boolean $conArticulos
     * @param string $entidadRelacionada
     * @param integer $idEntidadRelacionada 
     * @return array Array de familias y articulos
     */
    public function getArbolHijos($conArticulos = false, $entidadRelacionada = '', $idEntidadRelacionada = '') {

        $arbol = array();

        $objeto = new $this();
        $rows = $objeto->cargaCondicion("Id,PrimaryKeyMD5,NivelJerarquico,Publish,BelongsTo", "BelongsTo='0'", "SortOrder ASC");
        unset($objeto);

        foreach ($rows as $row) {
            $objeto = new $this($row['Id']);
            $arrayArticulos = ($conArticulos) ? $this->getArticulos($row['Id'], $entidadRelacionada, $idEntidadRelacionada) : array();
            $arrayHijos = $objeto->getHijos('', $conArticulos, $entidadRelacionada, $idEntidadRelacionada);

            $arbol[$row['PrimaryKeyMD5']] = array(
                'id' => $row['Id'],
                'titulo' => $objeto->getTitulo(),
                'nivelJerarquico' => $row['NivelJerarquico'],
                'publish' => $row['Publish'],
                'belongsTo' => $row['BelongsTo'],
                'nHijos' => count($arrayHijos),
                'hijos' => $arrayHijos,
                'nArticulos' => count($arrayArticulos),
                'articulos' => $arrayArticulos,
            );
            if ($entidadRelacionada) {
                $relacion = new CpanRelaciones();
                $arbol[$row['PrimaryKeyMD5']]['estaRelacionado'] = $relacion->getIdRelacion($entidadRelacionada, $idEntidadRelacionada, 'ErpFamilias', $row['Id']);
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
    public function getHijos($idPadre = '', $conArticulos = FALSE, $entidadRelacionada = '', $idEntidadRelacionada = '') {

        if ($idPadre == '')
            $idPadre = $this->getPrimaryKeyValue();

        $this->getChildrens($idPadre, $conArticulos, $entidadRelacionada, $idEntidadRelacionada);
        return $this->_hijos[$idPadre];
    }

    /**
     * Generar un árbol genealógico con las entidades hijas
     * de la entidad cuyo id es $idPadre
     *
     * @param integer $idPadre El id de la entidad padre
     * @return array Array con los objetos hijos
     */
    private function getChildrens($idPadre, $conArticulos, $entidadRelacionada, $idEntidadRelacionada) {

        // Obtener todos los hijos del padre actual
        $hijos = $this->cargaCondicion('Id,PrimaryKeyMD5,NivelJerarquico,Publish,BelongsTo', "BelongsTo='{$idPadre}'", "SortOrder ASC");

        foreach ($hijos as $hijo) {
            $aux = new $this($hijo['Id']);
            $arrayArticulos = ($conArticulos) ? $this->getArticulos($hijo['Id']) : array();
            $arrayHijos = $this->getChildrens($hijo['Id'], $conArticulos, $entidadRelacionada, $idEntidadRelacionada);
            $this->_hijos[$idPadre][$hijo['PrimaryKeyMD5']] = array(
                'id' => $hijo['Id'],
                'titulo' => $aux->getTitulo(),
                'nivelJerarquico' => $hijo['NivelJerarquico'],
                'publish' => $hijo['Publish'],
                'belongsTo' => $hijo['BelongsTo'],
                'nHijos' => count($arrayHijos),
                'hijos' => $arrayHijos,
                'nArticulos' => count($arrayArticulos),
                'articulos' => $arrayArticulos,
            );
            if ($entidadRelacionada) {
                $relacion = new CpanRelaciones();
                $this->_hijos[$idPadre][$hijo['PrimaryKeyMD5']]['estaRelacionado'] = $relacion->getIdRelacion($entidadRelacionada, $idEntidadRelacionada, 'ErpFamilias', $hijo['Id']);
            }
            unset($hijo);
        }

        return $this->_hijos[$idPadre];
    }

}

?>