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
    protected $variables;

    public function __construct($request) {

        // Cargar lo que viene en el request
        $this->request = $request;

        // Cargar la configuracion del modulo (modules/moduloName/config.yml)
        $this->form = new Form($this->entity);

        $this->values['ayuda'] = $this->form->getHelpFile();

        // LE DOY PERMISOS SOLO AL SUPER
        if ($_SESSION['USER']['user']['IdPerfil'] == '1') {
            $this->values['permisos']['IN'] = FALSE;
            $this->values['permisos']['DE'] = TRUE;
            $this->values['permisos']['UP'] = TRUE;
            $this->values['permisos']['VW'] = TRUE;
        }

        $this->values['enCurso'] = array('app' => 'CoreVariables', 'modulo' => 'CoreVariables');
        $this->values['request'] = $this->request;

        $includesHead = $this->form->getIncludesHead();

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
    public function indexAction($ambito = '', $tipo = '', $nombre = '') {

        if ($tipo == '')
            $tipo = $this->request[1];
        if ($tipo == '')
            $tipo = 'Env';

        if ($ambito == '')
            $ambito = $this->request[2];
        if ($ambito == '')
            $ambito = 'Pro';

        if ($nombre == '')
            $nombre = $this->request[3];

        $this->variables = new CoreVariables($ambito, $tipo, $nombre);
        $this->values['errores'] = array_merge((array) $this->values['errores'], (array) $this->variables->getErrores());
        $datos = $this->variables->getDatosYml();

        if ($ambito == 'Mod') {

            switch ($tipo) {
                case 'Env':
                    // Constuyo array con los nombres de las columnas del modulo(=entidad)
                    // para mostrar en el template las variables Web/Env de cada columna.
                    $archivoConfig = new Form($nombre);
                    $columnasConfig = $archivoConfig->getNode('columns');
                    unset($archivoConfig);
                    // Creo el nodo 'columns' creando si no existen o asignado valores por defecto si no tienen
                    // provinientes del 'config.yml' de cada módulo
                    // SI SE AÑADE UNA COLUMNA NUEVA EN config.yml TAMBIEN SERÁ AÑADIDA EN EL FORMULARIO DE VARIABLES
                    if (is_array($columnasConfig)) {
                        foreach ($columnasConfig as $columnaConfig => $atributosConfig) {
                            $valoresActuales = $datos['columns'][$columnaConfig];
                            $datos['columns'][$columnaConfig] = $this->ponAtributos($valoresActuales, $atributosConfig);
                        }
                    }

                    // Variables especificas
                    $datos['especificas'] = $this->getEspecificas($datos['especificas']);
                    break;

                case 'Web':
                    // Variables especificas
                    $datos['especificas'] = $this->getEspecificas($datos['especificas']);
                    break;
            }
        }

        $template = $this->variables->getTemplate();
        $this->values['tipo'] = $tipo;
        $this->values['ambito'] = $ambito;
        $this->values['nombre'] = $nombre;
        $this->values['titulo'] = $this->variables->getTitulo();
        $this->values['archivoDatos'] = $this->variables->getPathYml();
        $this->values['datos'] = $datos;
        $this->values['template'] = $this->variables->getTemplate();
        unset($this->variables);

        return array(
            'template' => $template,
            'values' => $this->values,
        );
    }

    /**
     * Guarda o borra las variables y sus valores en el proyecto
     *
     * Si se trata de variables web, también actualiza el control
     * de visibilidad de estas en las variables de entorno
     * del módulo correspondiente
     *
     * @return array Array template, values
     */
    public function EditAction() {

        if ($this->request['METHOD'] == 'POST') {

            $tipo = $this->request['tipo'];
            $ambito = $this->request['ambito'];
            $nombre = $this->request['nombre'];

            switch ($this->request['accion']) {

                case 'Guardar':
                    if ($this->values['permisos']['UP']) {
                        $variables = new CoreVariables($ambito, $tipo, $nombre);
                        $variables->setDatosYml($this->request['datos']);
                        $variables->save();
                        $this->values['errores'] = $variables->getErrores();
                        unset($variables);

                        return $this->indexAction($ambito, $tipo, $nombre);
                    } else {
                        return array('template' => '_global/forbiden.html.twig', 'values' => $this->values);
                    }

                    break;

                case 'Borrar':
                    if ($this->values['permisos']['DE']) {
                        $variables = new CoreVariables($ambito, $tipo, $nombre);
                        $variables->delete();
                        $this->values['errores'] = $variables->getErrores();
                        unset($variables);

                        return $this->indexAction($ambito, $tipo, $nombre);
                    } else {
                        return array('template' => '_global/forbiden.html.twig', 'values' => $this->values);
                    }

                    break;
            }
        } else
            return array('template' => '_global/forbiden.html.twig', array());
    }

    /**
     * Edita las variables de entorno de un nodo
     *
     * @return array Array template, values
     */
    public function EditNodeAction() {

        if ($_SESSION['USER']['user']['IdPerfil'] == '1') {

            switch ($this->request['METHOD']) {

                case 'GET':

                    $tipo = $this->request['3'];
                    $ambito = $this->request['2'];
                    $nombre = $this->request['4'];
                    $columna = $this->request['5'];
                    $titulo = "Variables {$this->request['3']} de '{$columna}'";

                    $variables = new CoreVariables($ambito, $tipo, $nombre);
                    $archivoYml = $variables->getPathYml();
                    $variablesColumna = $variables->getColumn($columna);
                    unset($variables);

                    $archivoConfig = new Form($nombre);
                    $columnasConfig = $archivoConfig->getNode('columns');
                    unset($archivoConfig);
                    $datos = $this->ponAtributos($variablesColumna, $columnasConfig[$columna]);

                    $this->values['titulo'] = $titulo;
                    $this->values['tipo'] = $tipo;
                    $this->values['ambito'] = $ambito;
                    $this->values['nombre'] = $nombre;
                    $this->values['columna'] = $columna;
                    $this->values['datos'] = $datos;
                    $this->values['archivoDatos'] = $archivoYml;

                    $template = $this->entity . '/formPlantillaVariables.html.twig';
                    break;

                case 'POST':

                    $tipo = $this->request['tipo'];
                    $ambito = $this->request['ambito'];
                    $nombre = $this->request['nombre'];
                    $columna = $this->request['columna'];
                    $titulo = "Variables {$tipo} de '{$columna}'";

                    $variables = new CoreVariables($ambito, $tipo, $nombre);
                    $archivoYml = $variables->getPathYml();
                    $variables->setColumn($columna, $this->request['datos']);
                    $variables->save();

                    $this->values['titulo'] = $titulo;
                    $this->values['tipo'] = $tipo;
                    $this->values['ambito'] = $ambito;
                    $this->values['nombre'] = $nombre;
                    $this->values['columna'] = $columna;
                    $this->values['errores'] = $variables->getErrores();
                    $this->values['datos'] = $variables->getColumn($columna);
                    $this->values['archivoDatos'] = $archivoYml;
                    unset($variables);

                    $template = $this->entity . '/formPlantillaVariables.html.twig';
                    break;
            }
        } else
            $template = '_global/forbiden.html.twig';

        return array('template' => $template, 'values' => $this->values);
    }

    /**
     * Recibos dos array:
     *
     *      el primero tiene los atributos y valores que hay en el archivo
     *      de variables de entorno
     *
     *      el segundo tiene los atributos predefinidos en el config.yml del modulo
     *
     * Devuelve un array de atributos para la columna obtenido 'mezclando' los dos,
     * teniendo en cuenta que los valores que prevalecen son los del archivo
     * de variables de entorno. Si en el config.yml hubiera algún atributo nuevo,
     * este es incluido.
     *
     * En el array devuelto se incluye (eventualmente) un elemento adicional 'listaValores' que
     * es un array con los valores posibles a tomar por el atributo.
     *
     * @param array $datos Array de los atributos que hay en las variables de entorno
     * @param array $atributosConfig Array de los atributos que hay en el config.yml
     * @return array Array de atributos de una columna
     */
    private function ponAtributos(array $datos, array $atributosConfig) {

        // Compruebo que exista la columna, si no la creo
        if (!is_array($datos)) {
            $datos = array();
        }

        foreach (VariablesEnv::$varEnvMod as $keyVar => $keyColumnaConfig)
            if (!isset($datos[$keyVar]))
                $datos[$keyVar] = $atributosConfig[$keyColumnaConfig];

        // SI LA COLUMNA ESTA VINCULADA A UNA ENTIDAD, CREA LA LISTA DE VALORES
        if ($atributosConfig['aditional_filter']['entity']) {
            $entidad = $atributosConfig['aditional_filter']['entity'];
            $metodo = $atributosConfig['aditional_filter']['method'];
            $objeto = new $entidad();
            $listaValores = $objeto->$metodo($atributosConfig['aditional_filter']['params'], 0);
            $datos['listaValores'] = $listaValores;
        }

        return $datos;
    }

    /**
     * Construye un array con las variables específicas en base
     * a los establecido en el archivo yml del módulo y los valores
     * definidos en el proyecto.
     *
     * @param type $datosEspecificas
     * @return array Array con las variables específicas
     */
    private function getEspecificas($datosEspecificas) {

        foreach ($this->variables->getArrayEspecificas() as $key => $caption) {
            $valorActual = $datosEspecificas[$key];

            $especificas[$key] = array(
                'value' => $valorActual,
                'caption' => $caption,
            );
        }
        return $especificas;
    }

    /**
     * Construye un array con las variables específicas en base
     * a los establecido en el archivo yml del módulo y los valores
     * definidos en el proyecto.
     *
     * @param type $datosEspecificas
     * @return array Array con las variables específicas
     */
    private function getShowVarWeb($datosShowVarWeb) {

        foreach ($this->variables->getNode('showVarWeb') as $key => $value) {
            $valorActual = $datosEspecificas[$key];

            $showVarWeb[$key] = array(
                'value' => $valorActual,
                'caption' => $caption,
            );
        }
        return $showVarWeb;
    }

}

?>
