<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 17.10.2012 00:16:48
 */

/**
 * @orm:Entity(PcaePermisos)
 */
class PcaePermisos extends PcaePermisosEntity {

    protected $Publish = '1';
    protected $Privacy = '1';

    public function __toString() {
        return $this->getId();
    }

    /**
     * Asigno permiso al usuario-proyecto-app
     * 
     * Y además creo el usuario en el cpanel del proyecto.
     * 
     * @return boolean
     */
    public function create() {

        $id = parent::create();

        if ($id) {
            // Para saber el perfil que tiene el usuario con la empresa.
            $usuario = new PcaeUsuarios($this->IdUsuario);
            $perfil = $usuario->getPerfilEmpresa($this->IdEmpresa);
            $idPerfil = $perfil->getId();
            unset($usuario);
            unset($perfil);

            $proyectoApp = new PcaeProyectosApps();
            $filtro = "IdProyecto='{$this->IdProyecto}' AND IdApp='{$this->IdApp}'";

            $rows = $proyectoApp->cargaCondicion("*", $filtro);
            unset($proyectoApp);
            $row = $rows[0];
            if ($row['Id']) {
                $connection = array(
                    'dbEngine' => $row['DbEngine'],
                    'host' => $row['Host'],
                    'user' => $row['User'],
                    'password' => $row['Password'],
                    'dataBase' => $row['Database'],
                );

                switch ($this->IdApp) {
                    case '1': //Cpanel
                        $em = new EntityManager($connection);
                        if ($em->getDbLink()) {
                            $query = "select Id from {$connection['dataBase']}.CpanUsuarios where IdUsuario='{$this->IdUsuario}'";
                            $em->query($query);
                            $rows = $em->fetchResult();
                            $id = $rows[0]['Id'];

                            if ($id) {
                                $query = "update {$connection['dataBase']}.CpanUsuarios set IdPerfil='{$idPerfil}', Publish='1' where Id='{$id}'";
                                $em->query($query);
                            } else {
                                $query = "insert into {$connection['dataBase']}.CpanUsuarios (IdUsuario,IdPerfil,IdRol,IdTipoUsuario,Publish) values ('{$this->IdUsuario}','{$idPerfil}','1','1','1');";
                                $em->query($query);
                                $id = $em->getInsertId();
                                $query = "update {$connection['dataBase']}.CpanUsuarios set SortOrder='{$id}', PrimaryKeyMD5='" . md5($id) . "' WHERE Id='{$id}'";
                                $em->query($query);
                            }
                            $em->desConecta();
                        }
                        unset($em);
                        break;

                    case '2': //Erp
                        $em = new EntityManager($connection);
                        if ($em->getDbLink()) {
                            $query = "select IDAgente from {$connection['dataBase']}.ErpUsuarios where IDAgente='{$this->IdUsuario}'";
                            $em->query($query);
                            $rows = $em->fetchResult();
                            $id = $rows[0]['IDAgente'];

                            if ($id) {
                                $query = "update {$connection['dataBase']}.ErpUsuarios set IDPerfil='{$idPerfil}', Activo='1', Publish='1' where IDAgente='{$id}'";
                                $em->query($query);
                            } else {
                                $query = "insert into {$connection['dataBase']}.ErpUsuarios (IDAgente,IDPerfil,IDRol,IDTipo,IDSucursal,IDAlmacen,Activo,Publish) values ('{$this->IdUsuario}','{$idPerfil}','1','1','1','1','1','1');";
                                $em->query($query);
                                $id = $em->getInsertId();
                                $query = "update {$connection['dataBase']}.ErpUsuarios set SortOrder='{$this->IdUsuario}', PrimaryKeyMD5='" . md5($this->IdUsuario) . "' WHERE IDAgente='{$this->IdUsuario}'";
                                $em->query($query);
                            }
                            $em->desConecta();
                        }
                        unset($em);
                        break;
                }
            }
        }
        
        return $id;
    }

    /**
     * Borra el permiso y deshabilito el usuario
     * en la app correspondiente
     */
    public function erase() {

        $proyectoApp = new PcaeProyectosApps();
        $filtro = "IdProyecto='{$this->IdProyecto}' AND IdApp='{$this->IdApp}'";

        $rows = $proyectoApp->cargaCondicion("*", $filtro);
        unset($proyectoApp);
        $row = $rows[0];
        if ($row['Id']) {
            $connection = array(
                'dbEngine' => $row['DbEngine'],
                'host' => $row['Host'],
                'user' => $row['User'],
                'password' => $row['Password'],
                'dataBase' => $row['Database'],
            );

            switch ($this->IdApp) {
                case '1': //Cpanel
                    $em = new EntityManager($connection);
                    if ($em->getDbLink()) {
                        $query = "update {$connection['dataBase']}.CpanUsuarios set Publish='0' where IdUsuario='{$this->IdUsuario}'";
                        $em->query($query);
                        $em->desConecta();
                    }
                    unset($em);
                    break;

                case '2': //Erp
                    $em = new EntityManager($connection);
                    if ($em->getDbLink()) {
                        $query = "update {$connection['dataBase']}.ErpUsuarios set Activo='0' where IDAgente='{$this->IdUsuario}'";
                        $em->query($query);
                        $em->desConecta();
                    }
                    unset($em);
                    break;
            }

            parent::erase();
        }

    }

}

?>