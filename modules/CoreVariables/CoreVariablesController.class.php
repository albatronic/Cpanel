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

        $this->values['ayuda'] = $this->form->getHelpFile();

        // Desactivo los permisos de creación y borrado
        $this->values['permisos']['IN'] = FALSE;
        $this->values['permisos']['DE'] = FALSE;
        $this->values['permisos']['UP'] = TRUE;

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
    public function indexAction($tipo = '', $ambito = '', $nombre = '') {

        if ($tipo == '')
            $tipo = $this->request[1];
        if ($ambito == '')
            $ambito = $this->request[2];
        if ($nombre == '')
            $nombre = $this->request[3];

        if (!in_array($tipo, $this->tipos))
            $tipo = $this->tipos[0];

        if (!in_array($ambito, $this->ambitos))
            $ambito = $this->ambitos[0];

        switch ($ambito) {
            case 'Pro':
                $this->values['titulo'] = 'Variables ' . $tipo . ' del Proyecto "' . $_SESSION['project']['title'] . '"';
                $template = '_global/fieldsVarPro' . $tipo . '.html.twig';
                $archivoDatos = $_SERVER['DOCUMENT_ROOT'] . $_SESSION['project']['folder'] . '/config/varPro';
                break;
            case 'App':
                $app = new CoreAplicaciones();
                $app = $app->find('CodigoApp', $nombre);
                $this->values['titulo'] = 'Variables ' . $tipo . ' de la Aplicación "' . $app->getNombreApp() . '"';
                unset($app);
                $template = $nombre . '/fieldsVar' . $tipo . '.html.twig';
                $archivoDatos = $_SERVER['DOCUMENT_ROOT'] . $_SESSION['project']['folder'] . "/config/varApp_" . $nombre;
                break;
            case 'Mod':
                $modulo = new CoreModulos();
                $modulo = $modulo->find('NombreModulo', $nombre);
                $this->values['titulo'] = 'Variables ' . $tipo . ' del Módulo "' . $modulo->getTitulo() . '"';
                unset($modulo);
                $template = $nombre . '/fieldsVar' . $tipo . '.html.twig';
                $archivoDatos = $_SERVER['DOCUMENT_ROOT'] . $_SESSION['project']['folder'] . '/modules/' . $nombre . '/var_' . $nombre;
                break;
            default:
        }

        $archivoDatos .= "_{$tipo}.yml";

        if (file_exists($archivoDatos)) {
            $datos = sfYaml::load($archivoDatos);
        } else
            $datos = array();

        $this->values['tipo'] = $tipo;
        $this->values['ambito'] = $ambito;
        $this->values['nombre'] = $nombre;
        $this->values['archivoDatos'] = $archivoDatos;
        $this->values['datos'] = $datos;

        return array(
            'template' => $template,
            'values' => $this->values,
        );
    }

    public function EditAction() {

        if (($this->request['METHOD'] == 'POST') and ($this->request['accion'] == 'Guardar')) {
            $tipo = $this->request['tipo'];
            $ambito = $this->request['ambito'];
            $nombre = $this->request['nombre'];
            $archivoDatos = $this->request['archivoDatos'];

            $cabecera = "# {$archivoDatos}\n";
            $cabecera .= "# Fecha : " . date('d-m-Y H:i:s') . "\n";
            $cabecera .= "# Usuario: " . $_SESSION['USER']['user']['id'] . " " . $_SESSION['USER']['user']['nombre'] . "\n\n";
            $datosYml = $cabecera;

            $datos = $this->request['datos'];
            if (is_array($datos)) {
                $cuerpo = sfYaml::dump($datos);
                $datosYml .= $cuerpo;
            }

            $archivo = new Archivo($archivoDatos);
            if (!$archivo->write($datosYml))
                $this->values['errores'][] = 'Error al crear el archivo ' . $archivoDatos;
            unset($archivo);
            return $this->indexAction($tipo, $ambito, $nombre);
        } else
            return array('template' => '_global/forbiden.html.twig', array());
    }

    /**
     * Muestra el template de ayuda asociado al controlador
     * El nombre del template de ayuda está definido en el
     * nodo <help_file> del config.yml del controlador
     * Si no existiera, se muestra un template indicando esta
     * circunstancia
     *
     * @return array con el template a renderizar
     */
    public function helpAction() {
        $template = $this->entity . '/' . $this->form->getHelpFile();
        $file = "modules/" . $template;
        if (!is_file($file) or ($this->form->getHelpFile() == '')) {
            $template = "_help/noFound.html.twig";
        }

        $values['title'] = $this->form->getTitle();
        $values['idVideo'] = $this->form->getIdVideo();
        $values['urlVideo'] = $this->form->getUrlVideo();

        return array('template' => $template, 'values' => $values);
    }
}

?>
