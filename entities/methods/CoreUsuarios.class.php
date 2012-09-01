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

        $em = new EntityManager('cpanel');
        if ($em->getDbLink()) {
            $query = "
                select m.CodigoApp ,p.NombreModulo, p.Funcionalidades, m.Publicar
                from core_permisos as p, core_modulos as m
                where  m.NombreModulo = p.NombreModulo and
                p.IDPerfil = '" . $this->IDPerfil . "'
                order by p.NombreModulo,p.Orden ASC";
            $em->query($query);
            $rows = $em->fetchResult();
            $em->desConecta();
        }
        unset($em);

        $appAnterior = '';
        foreach($rows as $row) {

            $icono = '';

            if ($row['CodigoApp'] != $appAnterior) {

                $aplicacion = new CoreAplicaciones();
                $aplicacion = $aplicacion->find("CodigoApp", $row['CodigoApp']);

                $iconos = $aplicacion->getDocuments('images');
                if (is_object($iconos[0])) $icono = $iconos[0]->getFullPath();

                $menu[$row['CodigoApp']] = array(
                    'titulo' => $aplicacion->getNombreApp(),
                    'descripcion' => $aplicacion->getDescripcion(),
                    'funcinalidades' => $row['Funcionalidades'],
                    'publicar' => $row['Publicar'],
                    'icono' => $icono,
                );
                unset($aplicacion);

            } else {

                $modulo = new CoreModulos();
                $modulo = $modulo->find('NombreModulo',$row['NombreModulo']);

                $iconos = $modulo->getDocuments('images');
                if (is_object($iconos[0])) $icono = $iconos[0]->getFullPath();

                $menu[$row['CodigoApp']]['modulos'][$row['NombreModulo']] = array(
                    'titulo' => $modulo->getTitulo(),
                    'descripcion' => $modulo->getDescripcion(),
                    'funcinalidades' => $row['Funcionalidades'],
                    'controller' => $row['NombreModulo'],
                    'publicar' => $row['Publicar'],
                    'icono' =>$icono,
                );
                unset($modulo);

            }

            $appAnterior = $row['CodigoApp'];

        }
        return $menu;
    }

}

?>