<?php

/**
 * Description of CoreVariablesController
 *
 * Gestión las Variables de Entorno y Web
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 28-ago-2012 17:59:49
 */
class CoreVariablesController {

    /**
     * Variables enviadas en el request por POST o por GET
     * @var request
     */
    protected $request;

    /**
     * Objeto de la clase 'form' con las propiedades y métodos
     * del formulario obtenidos del fichero de configuracion
     * del formulario en curso
     * @var from
     */
    protected $form;

    /**
     * Valores a devolver al controlador principal para
     * que los renderice con el twig correspondiente
     * @var array
     */
    protected $values;

    /**
     * Objeto de la clase 'controlAcceso'
     * para gestionar los permisos de acceso a los métodos del controller
     * @var ControlAcceso
     */
    protected $permisos;
    protected $entity = "CoreVariables";
    protected $tipos = array('Web', 'Env');
    protected $ambitos = array('Pro', 'App', 'Mod');

    public function __construct($request) {

        // Cargar lo que viene en el request
        $this->request = $request;

        // Cargar la configuracion del modulo (modules/moduloName/config.yml)
        $this->form = new Form($this->entity);

        // Cargar los permisos.
        // Si la entidad no está sujeta a control de permisos, se habilitan todos
        //if ($this->form->getPermissionControl()) {
        //    if ($this->parentEntity == '')
        //        $this->permisos = new ControlAcceso($this->entity);
        //    else
        //        $this->permisos = new ControlAcceso($this->parentEntity);
        //} else
        $this->permisos = new ControlAcceso();

        $this->values['ayuda'] = $this->form->getHelpFile();
        $this->values['permisos'] = $this->permisos->getPermisos();
        $this->values['request'] = $this->request;

        $includesHead = $this->form->getNode('includesHead');

        $this->values['twigCss'] = $includesHead['twigCss'];
        $this->values['twigJs'] = $includesHead['twigJs'];
    }

    /**
     * Muestra el formulario de mantenimineto de las variables de entorno y web
     * a nivel global, de app, o de módulo, dependiendo de los valores GET request.
     *
     * La posicion 1 del request indica el tipo de variable. Valores posibles:
     *
     *      Web   : Variables web
     *      Env   : Variables entorno
     *
     * La posicion 2 del request indica el ámbito. Valores posibles:
     *
     *      Pro: para las variables de entorno globales al projecto
     *      App: para las variables de entorno de un aplicación
     *      Mod: para las variables de entorno de un modulo
     *
     * Si la posicion 2 es 'App' ó 'Mod', la posición 3 del request indica
     * el nombre de la aplicación o del módulo
     *
     * Si no viene nada en el request, no se mostrar
     * @return array Array(template,values)
     */
    public function indexAction() {

        switch ($this->request['METHOD']) {
            case 'GET' :
                $tipo = $this->request[1];
                $ambito = $this->request[2];
                $nombre = $this->request[3];
                break;
            case 'POST':
                $tipo = $this->request['tipo'];
                $ambito = $this->request['ambito'];
                $nombre = $this->request['nombre'];
                break;
        }

        if (!in_array($tipo, $this->tipos))
            $tipo = $this->tipos[0];

        if (!in_array($ambito, $this->ambitos))
            $ambito = $this->ambitos[0];

        switch ($ambito) {
            case 'Pro':
                $this->values['titulo'] = 'Variables ' . $tipo . ' del Proyecto';
                $template = '_global/fieldsVarPro' . $tipo . '.html.twig';
                $archivoDatos = $_SERVER['DOCUMENT_ROOT'] . $_SESSION['project']['folder'] . '/config/varPro' . $tipo . '.yml';
                break;
            case 'App':
                $this->values['titulo'] = 'Variables ' . $tipo . ' de la Aplicación';
                $template = $_SESSION['project']['prefix'] . '/fieldsVar' . $nombre . $tipo . '.html.twig';
                $archivoDatos = $_SERVER['DOCUMENT_ROOT'] . $_SESSION['project']['folder'] . '/config/varApps.yml';
                break;
            case 'Mod':
                $this->values['titulo'] = 'Variables ' . $tipo . ' del Módulo';
                $template = $nombre . '/fieldsVar' . $tipo . '.html.twig';
                $archivoDatos = $_SERVER['DOCUMENT_ROOT'] . $_SESSION['project']['folder'] . '/modules/' . $nombre . '/var' . $tipo . 'yml';
                break;
            default:
        }

        switch ($this->request['METHOD']) {

            case 'GET':
                if (file_exists($archivoDatos)) {
                    $datos = sfYaml::load($archivoDatos);
                }
                break;

            case 'POST':
                $datos = $this->request['datos'];
                $datosYml = sfYaml::dump($datos);
                $fp = @fopen($archivoDatos, "w");
                if ($fp) {
                    fwrite($fp, $datosYml);
                    fclose($fp);
                } else
                    echo 'Error al crear el archivo ' . $archivoDatos;
                break;
        }

        $this->values['datos'] = $datos;

        return array(
            'template' => $template,
            'values' => $this->values,
        );
    }

}

?>
