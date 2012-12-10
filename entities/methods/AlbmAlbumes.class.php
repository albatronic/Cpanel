<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 05.12.2012 00:51:11
 */

/**
 * @orm:Entity(AlbmAlbumes)
 */
class AlbmAlbumes extends AlbmAlbumesEntity {

    public function __toString() {
        return $this->getId();
    }

    /**
     * Pone el orden 'OrdenPortada'
     */
    public function validaLogico() {

        parent::validaLogico();

        if (count($this->_errores) == 0) 
            $this->OrdenPortada = $this->SortOrder;
    }    
}

?>