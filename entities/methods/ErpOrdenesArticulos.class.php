<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 08.02.2013 13:00:03
 */

/**
 * @orm:Entity(ErpOrdenesArticulos)
 */
class ErpOrdenesArticulos extends ErpOrdenesArticulosEntity {

    public function __toString() {
        return $this->getId();
    }

    public function save() {
        $this->Publish = 1;
        return parent::save();
    }

    public function create() {
        $this->Publish = 1;
        return parent::create();
    }

    /**
     * Devuelve un array con los id's de las reglas a las
     * que está sujeto el artículo
     * 
     * @param int $idArticulo El id de articulo
     * @return array
     */
    public function getReglasArticulo($idArticulo) {

        $array = array();

        $reglas = $this->cargaCondicion("DISTINCT IdRegla", "IdArticulo='{$idArticulo}'");
        foreach ($reglas as $regla)
            $array[] = $regla['IdRegla'];

        return $array;
    }

    /**
     * Borra todas las entradas de la regla $idRegla en los
     * órdenes de articulos
     * 
     * @param int $idRegla El id de la regla
     */
    public function borraOrdenesRegla($idRegla) {
        $em = new EntityManager($this->getConectionName());
        if ($em->getDbLink()) {
            $query = "delete from {$this->getDataBaseName()}.{$this->getTableName()} WHERE IdRegla='{$idRegla}'";
            $em->query($query);
            $em->desConecta();
        }
        unset($em);
    }

    /**
     * Borra todas las entradas del artículo $idArticulo en los
     * órdenes de artículos
     * 
     * @param int $idArticulo El id del articulo
     */
    public function borraOrdenesArticulo($idArticulo) {
        $em = new EntityManager($this->getConectionName());
        if ($em->getDbLink()) {
            $query = "delete from {$this->getDataBaseName()}.{$this->getTableName()} WHERE IdArticulo='{$idArticulo}'";
            $em->query($query);
            $em->desConecta();
        }
        unset($em);
    }

    /**
     * Devuelve un array de objetos articulos que cumplen la
     * regla $idRegla, ordenados por SortOrder ASC
     * 
     * @param int $idRegla El id de la regla
     * @return \ErpArticulos array de objetos Articulos
     */
    public function getArticulos($idRegla) {

        $array = array();

        $em = new EntityManager($this->getConectionName());
        if ($em->getDbLink()) {
            $query = "
                SELECT a.Id as Id
                FROM {$em->getDataBase()}.ErpOrdenesArticulos r, {$em->getDataBase()}.ErpArticulos a
                WHERE r.IdRegla='{$idRegla}' AND r.IdArticulo=a.Id AND a.Publish='1' AND a.Vigente='1' AND a.Deleted='0'
                ORDER BY r.SortOrder ASC";
            $em->query($query);
            $rows = $em->fetchResult();
            $em->desConecta();
        }
        unset($em);

        if (is_array($rows))
            foreach ($rows as $row)
                $array[] = new ErpArticulos($row['Id']);

        return $array;
    }

}

?>