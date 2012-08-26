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

            $app = explode("/",$row['NombreModulo']);

            if ($app[0] != $appAnterior) {

                $aplicacion = new CoreAplicaciones();
                $aplicacion = $aplicacion->find("CodigoApp", $app[0]);

                $imagen = new CoreImagenes();
                $imagen = $imagen->getImagen();
                $menu[$app[0]] = array(
                    'titulo' => $aplicacion->getNombreApp(),
                    'descripcion' => $aplicacion->getDescripcion(),
                    'icono' => $imagen->getPathName(),
                );
                unset($aplicacion);
                unset($imagen);

            } else {

                $modulo = new CoreModulos();
                $modulo = $modulo->find('NombreModulo',$row['NombreModulo']);
                $menu[$app[0]]['modulos'][$app[1]] = array(
                    'titulo' => $modulo->getTitulo(),
                    'descripcion' => $modulo->getDescripcion(),
                    'funcinalidades' => $row['Funcionalidades'],
                    'controller' => $app[0] . $app[1],
                    'icono' =>'',
                );
                unset($modulo);

            }

            $appAnterior = $app[0];

        }
        return $menu;
    }

}

?>