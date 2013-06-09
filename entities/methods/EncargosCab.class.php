<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 20.02.2013 15:47:22
 */

/**
 * @orm:Entity(EncargosCab)
 */
class EncargosCab extends EncargosCabEntity {

    public function __toString() {
        return $this->getId();
    }

    /**
     * Marca de borrado un encargo y sus líneas
     *
     * @return boolean
     */
    public function delete() {

        $ok = parent::delete();

        if ($ok) {
            $lineas = new EncargosLineas();
            $rows = $lineas->cargaCondicion("Id", "IdEncargo='{$this->Id}'");
            unset($lineas);
            foreach ($rows as $row) {
                $linea = new EncargosLineas($row['Id']);
                $linea->delete();
            }
            unset($linea);
        }

        return $ok;
    }

}

?>