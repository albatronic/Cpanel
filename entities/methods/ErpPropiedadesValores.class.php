<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 26.01.2013 19:57:09
 */

/**
 * @orm:Entity(ErpPropiedadesValores)
 */
class ErpPropiedadesValores extends ErpPropiedadesValoresEntity {

    public function __toString() {
        return $this->getId();
    }

    public function save() {
        
        $this->Publish = 1;
        
        return parent::save();
    }
    
    /**
     * Comprueba la unicidad de la dupla propiedad-valor
     */
    public function validaLogico() {
        
        parent::validaLogico();

        // Comprobar la unicidad de la dupla propiedad-valor
        $valores = new ErpPropiedadesValores();
        $duplicado = $valores->find('Valor', $this->Valor);
        unset($valores);

        if (($duplicado->getId() > 0) and ($this->Id != $duplicado->getId()))
            $this->_errores[] = "Ya existe el valor '{$this->Valor}' para la propiedad";
        
        unset($duplicado);
    }

}

?>