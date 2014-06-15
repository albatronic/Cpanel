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
     * Crea la variable de sesion $_SESSION['usuarioPortal']['menu']
     *
     * @return array Array template, values
     */
    public function IndexAction() {
        
        switch ($this->request[1]) {
            case '':
                // No ha selecionado ninguna app, muestro todas las disponibles                
                $this->setAplicaciones();
                $template = $this->entity . "/index.html.twig";
                break;

            case 'app':
                // Ha seleccionado una app, hay que mostrar sus modulos públicos (Publicar = 1)
                $aplicacion = $this->request[2];
                $permisos = new ControlAcceso($aplicacion);
                $this->values['permisos'] = $permisos->getPermisos();
                unset($permisos);

                $this->values['enCurso']['app'] = $aplicacion;
                $this->values['titulo'] = $_SESSION['usuarioPortal']['menu'][$aplicacion]['titulo'];
                $this->values['menu']['tipo'] = "modulos";
                $this->values['menu']['perteneceA'] = $aplicacion;
                foreach ($_SESSION['usuarioPortal']['menu'][$aplicacion]['modulos'] as $key => $value) {
                    if ($value['publicar']) {
                        $this->values['menu']['modulos'][$key] = $value;
                    }
                }

                $template = $this->entity . "/index.html.twig";
                break;

            default:
                if (!isset($_SESSION['usuarioPortal']['menu'])) {

                    // Está logeado (viene del portal), pero es la primera vez que entra
                    $_SESSION['usuarioPortal']['accesosPortal'] = array();

                    // Carga la cadena de conexion a la base de datos del proyecto
                    $proyectoApp = new PcaeProyectosApps();
                    $proyectoApp = $proyectoApp->find('PrimaryKeyMD5', $this->request[1]);
                    $_SESSION['project']['Id'] = $proyectoApp->getId();
                    $_SESSION['project']['IdEmpresa'] = $proyectoApp->getIdProyecto()->getIdEmpresa()->getId();
                    $_SESSION['project']['empresa'] = $proyectoApp->getIdProyecto()->getIdEmpresa()->getRazonSocial();
                    $_SESSION['project']['title'] = $proyectoApp->getIdProyecto()->getProyecto();
                    $_SESSION['project']['url'] = $proyectoApp->getUrl();
                    $_SESSION['project']['conection'] = array(
                        'dbEngine' => $proyectoApp->getDbEngine(),
                        'host' => $proyectoApp->getHost(),
                        'user' => $proyectoApp->getUser(),
                        'password' => $proyectoApp->getPassword(),
                        'database' => $proyectoApp->getDatabase(),
                    );
                    // Carga la cadena de conexión al servidor ftp del proyecto
                    $_SESSION['project']['ftp'] = array(
                        'server' => $proyectoApp->getFtpServer(),
                        'port' => $proyectoApp->getFtpPort(),
                        'timeout' => $proyectoApp->getFtpTimeout(),
                        'folder' => $proyectoApp->getFtpFolder(),
                        'user' => $proyectoApp->getFtpUser(),
                        'password' => $proyectoApp->getFtpPassword(),
                    );
                    unset($proyectoApp);

                    // Establece el perfil del usuario para el proyecto y carga
                    // el menú en base a su perfil
                    $usuarios = new CpanUsuarios();
                    $usuario = $usuarios->find("IdUsuario", $_SESSION['usuarioPortal']['Id']);
                    unset($usuarios);
                    if ($usuario->getStatus()) {
                        $_SESSION['usuarioPortal']['IdPerfil'] = $usuario->getIdPerfil()->getId();
                        $_SESSION['usuarioPortal']['menu'] = $usuario->getArrayMenu();
                        // Carga las variables de entorno y web del proyecto
                        $this->cargaVariables();

                        // Establece los idiomas en base a la varible web del proyecto
                        /**
                        $langs = trim($_SESSION['VARIABLES']['WebPro']['globales']['lang']);
                        $_SESSION['idiomas']['disponibles'] = ($langs == '') ? array('0' => 'es') : explode(",", $langs);

                        if (!isset($_SESSION['idiomas']['actual'])){
                            $_SESSION['idiomas']['actual'] = 0;
                        }*/

                        $this->setAplicaciones();
                        $template = $this->entity . "/index.html.twig";
                    } else {
                        $template = $this->entity . "/noLoged.html.twig";
                    }
                    unset($usuario);
                }
                $template = $this->entity . "/index.html.twig";
                break;
        }

        return array(
            'template' => $template,
            'values' => $this->values,
        );
    }

    public function setAplicaciones() {

        $this->values['permisos'] = array(
            'VW' => true,
        );

        $this->values['titulo'] = 'Apps disponibles';
        $this->values['menu']['tipo'] = 'apps';
        foreach ($_SESSION['usuarioPortal']['menu'] as $key => $value)
            if ($value['publicar']) {
                $this->values['menu']['apps'][$key] = array(
                    'titulo' => $value['titulo'],
                    'descripcion' => $value['descripcion'],
                );
            }
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
    protected function cargaVariables() {

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
            $_SESSION['usuarioPortal'] = array(
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