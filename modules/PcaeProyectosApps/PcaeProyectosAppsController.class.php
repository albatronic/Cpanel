<?php

/**
 * CONTROLLER FOR PcaeProyectosApps
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 25.10.2012 19:10:00

 * Extiende a la clase controller
 */
class PcaeProyectosAppsController extends Controller {

    protected $entity = "PcaeProyectosApps";
    protected $parentEntity = "PcaeProyectos";

    public function __construct($request) {

        // Cargar lo que viene en el request, incluidos los eventuales
        // ficheros a subir
        $this->request = $request;

        // Cargar la configuracion del modulo (modules/moduloName/config.yml)
        $this->form = new Form($this->entity);

        // Pongo la app a la que pertenece
        $this->app = $this->form->getNode('app');

        // Pongo si es o no el modulo raiz de la app
        $this->isModuleRoot = $this->form->getNode('isModuleRoot');

        // Instanciar el objeto listado con los parametros del modulo
        // y los eventuales valores del filtro enviados en el request
        if ($this->form->getTieneListado()) {
            $this->listado = new Listado($this->form, $this->request);
            $this->values['listado'] = array(
                'filter' => $this->listado->getFilter(),
            );
        }

        // Cargar los permisos.
        $this->permisos = new ControlAcceso('PcaeEmpresas');

        $this->values['titulo'] = $this->form->getTitle();
        $this->values['ayuda'] = $this->form->getHelpFile();
        $this->values['permisos'] = $this->permisos->getPermisos();
        $this->values['enCurso'] = $this->values['permisos']['enCurso'];
        $this->values['tieneListado'] = $this->form->getTieneListado();
        $this->values['request'] = $this->request;
        $this->values['linkBy'] = array(
            'id' => $this->form->getLinkBy(),
            'value' => '',
        );

        // Cargar los includes del Head html
        $includesHead = $this->form->getIncludesHead();
        $this->values['twigCss'] = $includesHead['twigCss'];
        $this->values['twigJs'] = $includesHead['twigJs'];

        // Cargas las variables
        //$this->cargaVariables();

        $this->values['atributos'] = $this->form->getAtributos($this->entity);

        // Poner la solapa activa de los campos comunes
        ($this->request['solapaActiva'] == '') ? $this->values['solapaActiva'] = 'general' : $this->values['solapaActiva'] = $this->request['solapaActiva'];
    }

    /**
     * Devuelve todas los proyectos de una empresa
     * indicada en la posicion 2 del request.
     * @return array
     */
    public function listAction($idProyecto = '') {

        if ($idProyecto == '')
            $idProyecto = $this->request[2];

        $tabla = $this->form->getDataBaseName() . "." . $this->form->getTable();
        $filtro = $tabla . ".IdProyecto='" . $this->request[2] . "'";

        $this->values['linkBy']['value'] = $idProyecto;

        return parent::listAction($filtro);
    }

    /**
     * Devuelve todos los proyectos de una empresa
     * indicada en la posicion 2 del request.
     * @return array
     */
    public function listadoAction($idProyecto = '') {

        if ($idProyecto == '')
            $idProyecto = $this->request[2];

        $this->listado->filter['columnSelected'] = $this->form->getLinkBy();
        $this->listado->filter['value'] = $idProyecto;
        $this->values['linkBy']['value'] = $idProyecto;

        return parent::listadoAction();
    }

    public function ProbarConexionAction() {

        $app = new PcaeProyectosApps($this->request[$this->entity]['Id']);

        // Probrar la conexión ftp
        $parametrosFtp = array(
            'server' => $app->getFtpServer(),
            'user' => $app->getFtpUser(),
            'password' => $app->getFtpPassword(),
            'port' => $app->getFtpPort(),
            'timeout' => $app->getFtpTimeout(),
        );
        $ftp = new Ftp($parametrosFtp);
        if (count($ftp->getErrores()) == 0) {
            $this->values['alertas'][] = "Conexión ftp con EXITO. Directorio de conexión '{$ftp->pwd()}'";
            if ($ftp->chdir($app->getFtpFolder()))
                $this->values['alertas'][] = "Carpeta ftp '{$app->getFtpFolder()}' OK";
            else
                $this->values['alertas'][] = "La carpeta ftp NO existe o NO está accesible";

            $ftp->close();
        } else
            $this->values['errores'] = $ftp->getErrores();
        unset($ftp);
        
        // Probar la conexión de la base de datos
        $dbLink = mysql_connect($app->getHost(), $app->getUser(), $app->getPassword());
        if ($dbLink) {
            $this->values['alertas'][] = "Conexión a la base de datos con EXITO.";
            mysql_close($dbLink);
        } else
            $this->values['errores'][] = "No se ha establecido la conexión con el servidor de datos";


        $template = $this->entity . '/form.html.twig';
        $this->values['datos'] = $app;
        $this->values['linkBy']['value'] = $this->request[$this->entity]['IdProyecto'];
        unset($app);

        return array('template' => $template, 'values' => $this->values);
    }

    /**
     * Devuelve un template mostrando los usuarios de la empresa e indicando si tienen
     * o no permiso de accesso al proyecto-app
     * 
     * La actuliazación de datos se hace via ajax
     * 
     * @return array Array(template, values)
     */
    public function PermisosAction() {
        
        $proApps = new PcaeProyectosApps();
        $proApp = $proApps->find('PrimaryKeyMD5',$this->request[2]);
        unset($proApps);

        $idEmpresa = $proApp->getIdProyecto()->getIdEmpresa()->getId();
        $idProyecto = $proApp->getIdProyecto()->getId();
        $idApp = $proApp->getIdApp()->getId();
        $tituloApp = $proApp->getIdApp()->getAplicacion();
        unset($proApp);
        
        $empresa = new PcaeEmpresas($idEmpresa);
        $usuarios = $empresa->getUsuarios();
        unset($empresa);
        
        $permiso = new PcaePermisos();
        $rows = $permiso->cargaCondicion("IdUsuario","IdEmpresa='{$idEmpresa}' AND IdProyecto='{$idProyecto}' AND IdApp='$idApp'");
        unset($permiso);
        foreach ($rows as $row) {
            $permiso[$row['IdUsuario']] = true;
        }
        
        $permisos = array();
        
        // Para cada usuario de la empresa, miro si tiene permiso de acceso al proyecto-app
        foreach ($usuarios as $usuario) {
            
            $permisos[] = array(
                'idUsuario' => $usuario->getId(),
                'nombreApellidos' => $usuario->getApellidosNombre(),
                'email' => $usuario->getEMail(),
                'tienePermiso' => isset($permiso[$usuario->getId()]),
            );
        }

        $this->values['tituloApp'] = $tituloApp;
        $this->values['idEmpresa'] = $idEmpresa;
        $this->values['idProyecto'] = $idProyecto;
        $this->values['idApp'] = $idApp;
        $this->values['usuarios'] = $permisos;
  
        return array(
            'template' => $this->entity . '/permisos.html.twig',
            'values' => $this->values,
        );
        
    }
}

?>