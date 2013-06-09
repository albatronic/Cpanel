<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 24.08.2012 17:27:15
 */

/**
 * @orm:Entity(core_usuarios)
 */
class CpanUsuarios extends CpanUsuariosEntity {

    public function __toString() {
        return $this->getNombreApellidos();
    }

    public function getNombreApellidos() {

        $usuario = new PcaeUsuarios($this->IdUsuario);
        $nombreApellidos = $usuario->getNombre() . " " . $usuario->getApellidos();
        unset($usuario);

        return $nombreApellidos;
    }

    /**
     * Devuelve un array de dos dimensiones con las aplicaciones
     * y módulos a los que tiene acceso el ususario en base a su perfil
     *
     * @return array $menu El el array con el menu
     */
    public function getArrayMenu() {

        $menu = array();

        $em = new EntityManager($_SESSION['project']['conection']);
        if ($em->getDbLink()) {
            $query = "
                select m.CodigoApp ,p.NombreModulo, p.Funcionalidades, m.Publish
                from CpanPermisos as p, CpanModulos as m
                where  m.NombreModulo = p.NombreModulo and
                p.IdPerfil = '{$this->getIdPerfil()->getId()}' AND
                LOCATE('AC',p.Funcionalidades)
                order by m.CodigoApp ASC ,m.SortOrder ASC";
            $em->query($query);
            $rows = $em->fetchResult();
            $em->desConecta();
        } else echo "NO HAY CONEXION CON LA BASE DE DATOS";
        unset($em);

        $appAnterior = '';
        foreach($rows as $row) {

            if ($row['CodigoApp'] != $appAnterior) {

                $aplicacion = new CpanAplicaciones();
                $aplicacion = $aplicacion->find("CodigoApp", $row['CodigoApp']);

                $menu[$row['CodigoApp']] = array(
                    'titulo' => $aplicacion->getNombreApp(),
                    'descripcion' => $aplicacion->getDescripcion(),
                    'funcionalidades' => $row['Funcionalidades'],
                    'publicar' => $row['Publish'],
                );
                unset($aplicacion);

            } else {

                $modulo = new CpanModulos();
                $modulo = $modulo->find('NombreModulo',$row['NombreModulo']);

                $menu[$row['CodigoApp']]['modulos'][$row['NombreModulo']] = array(
                    'titulo' => $modulo->getTitulo(),
                    'descripcion' => $modulo->getDescripcion(),
                    'funcinalidades' => $row['Funcionalidades'],
                    'controller' => $row['NombreModulo'],
                    'publicar' => $row['Publish'],
                );
                unset($modulo);

            }

            $appAnterior = $row['CodigoApp'];

        }
        return $menu;
    }

}

?>