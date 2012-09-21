<?php

/**
 * Description of IndexController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 3-Agosto-2012
 *
 */
class IndexController extends Controller {

    protected $entity = "Index";

    public function __construct($request) {

        // Cargar lo que viene en el request
        $this->request = $request;

        // Cargar la configuracion del modulo (modules/moduloName/config.yml)
        $this->form = new Form($this->entity);

        // Cargar los permisos.
        // Si la entidad no está sujeta a control de permisos, se habilitan todos
        if ($this->form->getPermissionControl()) {
            if ($this->parentEntity == '')
                $this->permisos = new ControlAcceso($this->entity);
            else
                $this->permisos = new ControlAcceso($this->parentEntity);
        } else
            $this->permisos = new ControlAcceso();

        $this->values['titulo'] = $this->form->getTitle();
        $this->values['ayuda'] = $this->form->getHelpFile();
        $this->values['permisos'] = $this->permisos->getPermisos();
        $this->values['enCurso'] = $this->values['permisos']['enCurso'];
        $this->values['request'] = $this->request;

        $includesHead = $this->form->getIncludesHead();

        $this->values['twigCss'] = $includesHead['twigCss'];
        $this->values['twigJs'] = $includesHead['twigJs'];

        // VARIABLES WEB Y DE ENTORNO
        //print_r($this->values['permisos']);
    }

    /**
     * Crea la variable de sesion $_SESSION['USER']['menu']
     *
     * @return array Array template, values
     */
    public function IndexAction() {

        $aplicacion = $this->request[1];

        if ($aplicacion != '') {
            // Ha seleccionado una app, hay que mostrar sus modulos públicos (Publicar = 1)

            $permisos = new ControlAcceso($aplicacion);
            $this->values['permisos'] = $permisos->getPermisos();
            unset($permisos);

            $this->values['enCurso']['app'] = $aplicacion;
            $this->values['titulo'] = $_SESSION['USER']['menu'][$aplicacion]['titulo'];
            $this->values['menu']['tipo'] = "modulos";
            $this->values['menu']['perteneceA'] = $aplicacion;
            foreach ($_SESSION['USER']['menu'][$aplicacion]['modulos'] as $key => $value)
                if ($value['publicar'])
                    $this->values['menu']['modulos'][$key] = $value;
        } else {
            // No ha seleccionado ninguna app, hay que mostrar todas las apps públicas (Publicar = 1)

            $this->values['permisos'] = array(
                'VW' => true,
            );

            $this->values['titulo'] = 'Apps disponibles';
            $this->values['menu']['tipo'] = 'apps';
            foreach ($_SESSION['USER']['menu'] as $key => $value)
                if ($value['publicar']) {
                    $this->values['menu']['apps'][$key] = array(
                        'titulo' => $value['titulo'],
                        'descripcion' => $value['descripcion'],
                    );
                }
        }

        return array(
            'template' => $this->entity . '/index.html.twig',
            'values' => $this->values,
        );
    }

    /**
     * Cambio de proyecto
     *
     * @return array Array template, values
     */
    public function ChangeProjectUserAction() {

        $_SESSION['project'] = $_SESSION['projects'][$this->request['project']];
        $_SESSION['project']['name'] = $this->request['project'];

        $usuario = new CoreUsuarios($this->request['user']);
        if ($usuario->getLogin() != '') {
            $_SESSION['USER'] = array(
                'user' => array(
                    'Id' => $usuario->getId(),
                    'nombre' => $usuario->getNombreApellidos(),
                    'IdPerfil' => $usuario->getIdPerfil()->getId(),
                ),
                'menu' => $usuario->getArrayMenu(),
            );

            return $this->IndexAction();
        } else {
            $this->values['mensaje'] = 'Usuario no registrado';
            $template = "Login/login.html.twig";
            return array('template' => $template, 'values' => $this->values);
        }

        return $this->IndexAction();
    }

}

?>
