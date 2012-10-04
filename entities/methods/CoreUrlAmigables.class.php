<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 30.09.2012 16:42:34
 */

/**
 * @orm:Entity(CoreUrlAmigables)
 */
class CoreUrlAmigables extends CoreUrlAmigablesEntity {

    public function __toString() {
        return $this->getId();
    }


    /**
     * Marca como borrado un registro y borra el archivo asociado.
     *
     * @return bollean
     */
    public function delete() {

        $this->conecta();

        if (is_resource($this->_dbLink)) {
            // Auditoria
            $fecha = date('Y-m-d H:i:s');
            $query = "UPDATE `{$this->_dataBaseName}`.`{$this->_tableName}` SET `Deleted` = '1', `DeletedAt` = '{$fecha}', `DeletedBy` = '{$_SESSION['USER']['user']['Id']}' WHERE `{$this->_primaryKeyName}` = '{$this->getPrimaryKeyValue()}'";
            if (!$this->_em->query($query))
                $this->_errores = $this->_em->getError();

            $this->_em->desConecta();
        } else
            $this->_errores = $this->_em->getError();

        unset($this->_em);

        $ok = (count($this->_errores) == 0);

        return $ok;
    }

    /**
     * Borra físicamente un registro (delete) y su archivo asociado.
     *
     * @return boolean
     */
    public function erase() {

        $this->conecta();

        if (is_resource($this->_dbLink)) {
            $query = "DELETE FROM `{$this->_dataBaseName}`.`{$this->_tableName}` WHERE `{$this->_primaryKeyName}` = '{$this->getPrimaryKeyValue()}'";
            if (!$this->_em->query($query))
                $this->_errores = $this->_em->getError();

            $this->_em->desConecta();
        } else
            $this->_errores = $this->_em->getError();

        unset($this->_em);

        $ok = (count($this->_errores) == 0);

        return $ok;
    }

    /**
     * Borrar el registro de urlamigables correspondiente a $entidad y $idEntidad
     *
     * @param string $entidad
     * @param integer $idEntidad
     * @return boolean TRUE si el borrado se hizo con éxito
     */
    public function borraUrl($entidad, $idEntidad) {

        $row = $this->cargaCondicion("Id", "Entity='{$entidad}' and IdEntity='{$idEntidad}'");
        $url = new CoreUrlAmigables($row[0]['Id']);
        $ok = $url->erase();
        unset($url);

        return $ok;
    }

}

?>