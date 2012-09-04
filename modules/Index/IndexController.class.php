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

    /**
     * Crea la variable de sesion $_SESSION['USER']['menu']
     *
     * @return array Array template, values
     */
    public function IndexAction() {

        $aplicacion = $this->request[1];

        if ($aplicacion != '') {
            // Ha seleccionado una app, hay que mostrar sus modulos públicos (Publicar = 1)
            $this->values['titulo'] = $_SESSION['USER']['menu'][$aplicacion]['titulo'];
            $this->values['menu']['tipo'] = "modulos";
            $this->values['menu']['perteneceA'] = $aplicacion;
            foreach ($_SESSION['USER']['menu'][$aplicacion]['modulos'] as $key => $value)
                if ($value['publicar'])
                    $this->values['menu']['modulos'][$key] = $value;
        } else {
            // No ha seleccionado ninguna app, hay que mostrar todas las apps públicas (Publicar = 1)
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
    public function changeProjectAction() {

        $_SESSION['project'] = $_SESSION['projects'][$this->request['project']];
        $_SESSION['project']['name'] = $this->request['project'];

        return $this->IndexAction();
    }

    /**
     * Cambio de usuario realizando un logeo interno
     * sin comprobar password
     *
     * @return array Array template, values
     */
    public function changeUser() {

        $user = new CoreUsuarios();
        $usuario = $user->find("Login", $this->request['user']);
        unset($user);

        if ($usuario->getLogin() != '') {
            $_SESSION['USER'] = array(
                'user' => array(
                    'id' => $usuario->getIDUsuario(),
                    'nombre' => $usuario->getNombreApellidos(),
                    'IDPerfil' => $usuario->getIDPerfil()->getIDPerfil(),
                ),
            );

            // Crear la variable de sesion con el array del menu
            $_SESSION['USER']['menu'] = $usuario->getArrayMenu();

            return $this->IndexAction();
        } else {
            $this->values['mensaje'] = 'Usuario no registrado';
            $template = $this->entity . "/login.html.twig";
            return array('template' => $template, 'values' => $this->values);
        }

    }

}

?>
