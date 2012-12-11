<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 16.10.2012 23:18:51
 */

/**
 * @orm:Entity(PcaeEmpresas)
 */
class PcaeEmpresas extends PcaeEmpresasEntity {

    public function __toString() {
        return $this->getId();
    }

    /**
     * Devuelve un array de objetos \PcaeUsuarios que están
     * vinculados a las empresa en curso
     *
     * @return array Array de objetos \PcaeUsuarios
     */
    public function getUsuarios() {

        $usuarios = array();

        $empUsu = new PcaeEmpresasUsuarios();
        $rows = $empUsu->cargaCondicion("IdUsuario", "IdEmpresa='{$this->Id}'");
        unset($empUsu);

        foreach ($rows as $row)
            $usuarios[] = new PcaeUsuarios($row['IdUsuario']);

        return $usuarios;
    }

    /**
     * Devuelve un array de objetos \PcaeProyectos asociados
     * a la empresa en curso.
     * 
     * @return array Array de objetos \PcaeProyectos
     */
    public function getProyectos() {

        $proyectos = array();

        $pro = new PcaeProyectos();
        $rows = $pro->cargaCondicion("Id", "IdEmpresa='{$this->Id}'");
        unset($pro);

        foreach ($rows as $row)
            $proyectos[] = new PcaeProyectos($row['Id']);

        return $proyectos;
    }

    /**
     * Al crear una empresa, le asigno el usuario SUPER
     */
    public function create() {
        $IdEmpresa = parent::create();
        
        if ($IdEmpresa) {
            $empUsu = new PcaeEmpresasUsuarios();
            $empUsu->setIdEmpresa($IdEmpresa);
            $empUsu->setIdUsuario(1);
            $empUsu->setIdPerfil(1);
            $empUsu->create();
            unset($empUsu);
        }
        
        return $IdEmpresa;
    }
}

?>