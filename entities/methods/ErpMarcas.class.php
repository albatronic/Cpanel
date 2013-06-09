<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.01.2013 19:57:09
 */

/**
 * @orm:Entity(ErpMarcas)
 */
class ErpMarcas extends ErpMarcasEntity {

    public function __toString() {
        return $this->getTitulo();
    }

    public function fetchAll($column = '', $default = TRUE) {
        if ($column == '')
            $column = 'Titulo';
        return parent::fetchAll($column, $default);
    }
    
    /**
     * Guardo la marca y actualizo sus articulos
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
                            Publish='{$this->Publish}',
                            ActiveFrom = CASE
                              WHEN ActiveFrom<'{$this->ActiveFrom}' THEN '{$this->ActiveFrom}' ELSE ActiveFrom
                            END,
                            ActiveTo = CASE
                              WHEN ActiveTo>'{$this->ActiveTo}' THEN '{$this->ActiveTo}' ELSE ActiveTo
                            END
                            where (IDMarca='{$this->Id}');";
                $this->_em->query($query);
                $this->_em->desConecta();
            }
            unset($this->_em);
        }

        return $ok;
    }    
}
?>