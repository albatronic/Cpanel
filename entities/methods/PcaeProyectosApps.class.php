<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 25.10.2012 19:17:27
 */

/**
 * @orm:Entity(PcaeProyectosApps)
 */
class PcaeProyectosApps extends PcaeProyectosAppsEntity {

    public function __toString() {
        return $this->getId();
    }

    /**
     * Asigna una app a un proyecto
     * y le da permisos de acceso al usuario en curso
     * 
     * @return boolean
     */
    public function create() {
        $id = parent::create();
        
        if ($id) {
            // Asignar permiso de acceso al usuario en curso
            $permiso = new PcaePermisos();
            $permiso->setIdUsuario($_SESSION['USER']['user']['Id']);
            $permiso->setIdEmpresa($this->getIdProyecto()->getIdEmpresa()->getId());
            $permiso->setIdProyecto($this->getIdProyecto()->getId());
            $permiso->setIdApp($this->IdApp);
            $permiso->create();
        }
        
        return $id;
    }
    
    /**
     * Borra físicamente el registro que vincula la app al proyecto
     * y elimina todos los permisos relativos a ese proyecto y app
     * @return boolean
     */
    public function delete() {

        $idProyecto = $this->IdProyecto;        
        $idEmpresa = $this->getIdProyecto()->getIdEmpresa()->getId();
        $idApp = $this->IdApp;
        
        $ok = parent::erase();
        
        if ($ok) {
            // Borrar todos los permisos de acceso a la app borrada
            $em = new EntityManager($this->getConectionName());
            if ($em->getDbLink()) {
                $query = "DELETE FROM {$em->getDataBase()}.PcaePermisos WHERE IdEmpresa='{$idEmpresa}' AND IdProyecto='{$idProyecto}' AND IdApp='{$idApp}'";
                $em->query($query);
                $this->_errores = $em->getError();
                $em->desConecta();
            }
            unset($em);
        }
        
        return $ok;
    }
}

?>