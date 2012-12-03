<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 16.10.2012 16:33:56
 */

/**
 * @orm:Entity(PcaeEmpresasUsuarios)
 */
class PcaeEmpresasUsuarios extends PcaeEmpresasUsuariosEntity {

    public function __toString() {
        return $this->getId();
    }

    /**
     * Comprueba la unicidad de IdEmpresa-IdUsuario
     */
    public function validaLogico() {
        
        parent::validaLogico();

        $empUsu = new PcaeEmpresasUsuarios();
        $rows = $empUsu->cargaCondicion("Id", "IdEmpresa='{$this->IdEmpresa}' and IdUsuario='{$this->IdUsuario}'");
        unset($empUsu);
        if (count($rows))
            $this->_errores[] = "Ya existe el usuario en la empresa";
    }

}

?>