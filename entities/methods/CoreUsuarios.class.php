<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 24.08.2012 17:27:15
 */

/**
 * @orm:Entity(core_usuarios)
 */
class CoreUsuarios extends CoreUsuariosEntity {

    public function __toString() {
        return $this->getNombreApellidos();
    }

    public function getNombreApellidos() {
        return $this->getNombre() . " " . $this->getApellidos();
    }

    /**
     * Devuelve un array de dos dimensiones con las aplicaciones
     * y módulos a los que tiene acceso el ususario en base a su perfil
     *
     * @return array $menu El el array con el menu
     */
    public function getArrayMenu() {

        $menu = array();

        $permisos = new CorePermisos();
        $rows = $permisos->cargaCondicion("*","IDPerfil='{$this->IDPerfil}'","NombreModulo,Orden ASC");
        unset($permisos);

        $appAnterior = '';
        foreach($rows as $row) {

            $icono = '';
            $app = explode("/",$row['NombreModulo']);

            if ($app[0] != $appAnterior) {

                $aplicacion = new CoreAplicaciones();
                $aplicacion = $aplicacion->find("CodigoApp", $app[0]);

                $iconos = $aplicacion->getDocuments('images');
                if (is_object($iconos[0])) $icono = $iconos[0]->getFullPath();

                $menu[$app[0]] = array(
                    'titulo' => $aplicacion->getNombreApp(),
                    'descripcion' => $aplicacion->getDescripcion(),
                    'icono' => $icono,
                );
                unset($aplicacion);

            } else {

                $modulo = new CoreModulos();
                $modulo = $modulo->find('NombreModulo',$row['NombreModulo']);

                $iconos = $modulo->getDocuments('images');
                if (is_object($iconos[0])) $icono = $iconos[0]->getFullPath();

                $menu[$app[0]]['modulos'][$app[1]] = array(
                    'titulo' => $modulo->getTitulo(),
                    'descripcion' => $modulo->getDescripcion(),
                    'funcinalidades' => $row['Funcionalidades'],
                    'controller' => $app[0] . $app[1],
                    'icono' =>$icono,
                );
                unset($modulo);

            }

            $appAnterior = $app[0];

        }
        return $menu;
    }

}

?>