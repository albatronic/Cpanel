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

        $em = new EntityManager($_SESSION['project']['name']);
        if ($em->getDbLink()) {
            $query = "
                select m.CodigoApp ,p.NombreModulo, p.Funcionalidades, m.Publish
                from CorePermisos as p, CoreModulos as m
                where  m.NombreModulo = p.NombreModulo and
                p.IdPerfil = '" . $this->IdPerfil . "'
                order by p.NombreModulo,m.Order ASC";
            $em->query($query);
            $rows = $em->fetchResult();
            $em->desConecta();
        }
        unset($em);

        $appAnterior = '';
        foreach($rows as $row) {

            if ($row['CodigoApp'] != $appAnterior) {

                $aplicacion = new CoreAplicaciones();
                $aplicacion = $aplicacion->find("CodigoApp", $row['CodigoApp']);

                $menu[$row['CodigoApp']] = array(
                    'titulo' => $aplicacion->getNombreApp(),
                    'descripcion' => $aplicacion->getDescripcion(),
                    'funcinalidades' => $row['Funcionalidades'],
                    'publicar' => $row['Publish'],
                );
                unset($aplicacion);

            } else {

                $modulo = new CoreModulos();
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