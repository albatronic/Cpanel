<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 05.12.2012 01:09:10
 */

/**
 * @orm:Entity(VidVideos)
 */
class VidVideos extends VidVideosEntity {

    public function __toString() {
        return $this->getId();
    }

    public function validaLogico() {
        parent::validaLogico();

        if (count($this->_errores) == 0) {
            if ($this->OrdenPortada == 0)
                $this->OrdenPortada = $this->SortOrder;
        }
    }

}

?>