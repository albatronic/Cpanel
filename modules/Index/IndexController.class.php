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

        if (!isset($_SESSION['USER']['menu'])) {
            // Está logeado (viene del portal), pero es la primera vez que entra
            unset($_SESSION['USER']['accesosPortal']);

            // Carga la cadena de conexion a la base de datos del proyecto
            $proyectoApp = new PcaeProyectosApps();
            $proyectoApp = $proyectoApp->find('PrimaryKeyMD5', $this->request[1]);
            $_SESSION['project']['Id'] = $proyectoApp->getId();
            $_SESSION['project']['title'] = $proyectoApp->getIdProyecto()->getProyecto();
            $_SESSION['project']['conection'] = array(
                'dbEngine' => $proyectoApp->getDbEngine(),
                'host' => $proyectoApp->getHost(),
                'user' => $proyectoApp->getUser(),
                'password' => $proyectoApp->getPassword(),
                'database' => $proyectoApp->getDatabase(),
                );
            // Carla la cadena de conexión al servidor ftp del proyecto
            $_SESSION['project']['ftp'] = array(
                'server' => $proyectoApp->getFtpServer(),
                'folder' => $proyectoApp->getFtpFolder(),
                'user' => $proyectoApp->getFtpUser(),
                'password' => $proyectoApp->getFtpPassword(),
            );

            unset($proyectoApp);

            // Establece el perfil del usuario para el proyecto y carga
            // el menú en base a su perfil
            $usuario = new CpanUsuarios($_SESSION['USER']['user']['Id']);
            $_SESSION['USER']['user']['IdPerfil'] = $usuario->getIdPerfil()->getId();
            $_SESSION['USER']['menu'] = $usuario->getArrayMenu();
            unset($usuario);

            // Carga las variables de entorno y web del proyecto
            $this->cargaVariables();

        } else {

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
        }

        return array(
            'template' => $this->entity . '/index.html.twig',
            'values' => $this->values,
        );
    }

    /**
     * Muestra el template para el caso que un usuario
     * no logeado en el portal quiera entrar directamente.
     *
     * Además, borra cualquier dato que hubiese en $_SESSION
     *
     * @return array Array template, values
     */
    public function NoLogedAction() {

        unset($_SESSION);

        return array(
            'template' => $this->entity . '/noLoged.html.twig',
            'values' => $this->values,
        );
    }

    /**
     * Carga en la sesión las variables de entorno y web del proyecto
     */
    private function cargaVariables() {

        // Variables de entorno del proyecto
        if (!isset($_SESSION['VARIABLES']['EnvPro'])) {
            $variables = new CpanVariables('Pro', 'Env');
            $this->varEnvPro = $variables->getValores();
            $_SESSION['VARIABLES']['EnvPro'] = $this->varEnvPro;
        } else
            $this->varEnvPro = $_SESSION['VARIABLES']['EnvPro'];
        $this->values['varEnvPro'] = $this->varEnvPro;

        // Variables web del proyecto
        if (!isset($_SESSION['VARIABLES']['WebPro'])) {
            $variables = new CpanVariables('Pro', 'Web');
            $this->varWebPro = $variables->getValores();
            $_SESSION['VARIABLES']['WebPro'] = $this->varWebPro;
        } else
            $this->varWebPro = $_SESSION['VARIABLES']['WebPro'];
        $this->values['varWebPro'] = $this->varWebPro;

    }

    /**
     * Cambio de proyecto
     *
     * @return array Array template, values
     */
    public function ChangeProjectUserAction() {

        $_SESSION['project'] = $_SESSION['projects'][$this->request['project']];
        $_SESSION['project']['name'] = $this->request['project'];

        $usuario = new CpanUsuarios($this->request['user']);
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
