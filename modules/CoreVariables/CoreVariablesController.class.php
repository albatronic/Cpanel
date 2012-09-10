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

        // Desactivo los permisos de creación
        $this->values['permisos']['IN'] = FALSE;
        $this->values['permisos']['DE'] = TRUE;
        $this->values['permisos']['UP'] = TRUE;

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
    public function indexAction($tipo = '', $ambito = '', $nombre = '') {

        if ($tipo == '')
            $tipo = $this->request[1];
        if ($ambito == '')
            $ambito = $this->request[2];
        if ($nombre == '')
            $nombre = $this->request[3];

        $objeto = array(
            'ambito' => $ambito,
            'tipo' => $tipo,
            'nombre' => $nombre,
        );

        $variables = new CoreVariables($objeto);
        $this->values['errores'] = $variables->getErrores();
        $datos = $variables->getDatosYml();

        if ($ambito == 'Mod') {

            $templateComun = 'CoreVariables/varMod' . $tipo . '.html.twig';

            switch ($tipo) {
                case 'Env':
                    // Constuyo array con los nombres de las columnas del modulo(=entidad)
                    // para mostrar en el template las variables Web/Env de cada columna.
                    $archivoConfig = new Form($objeto['nombre']);
                    $columnasEntidad = $archivoConfig->getNode('columns');
                    unset($archivoConfig);
                    // Creo el nodo 'columns' creando si no existen o asignado valores por defecto si no tienen
                    // provinientes del 'config.yml' de cada módulo
                    // SI SE AÑADE UNA COLUMNA NUEVA EN config.yml TAMBIEN SERÁ AÑADIDA EN EL FORMULARIO DE VARIABLES
                    if (is_array($columnasEntidad)) {
                        foreach ($columnasEntidad as $columna => $atributos) {
                            // Compruebo que exista la columna, si no la creo
                            if (!is_array($datos['columns'][$columna])) {
                                $datos['columns'][$columna] = array();
                            }

                            foreach (VariablesEnv::$varEnvMod as $keyVar => $keyColumnaConfig)
                                if (!isset($datos['columns'][$columna][$keyVar]))
                                    $datos['columns'][$columna][$keyVar] = $atributos[$keyColumnaConfig];

                            /** Pongo valores por defecto si no tiene
                              if (!isset($datos['columns'][$columna]['visible']))
                              $datos['columns'][$columna]['visible'] = ($atributos['form'] == 'YES');
                              if (!isset($datos['columns'][$columna]['updatable']))
                              $datos['columns'][$columna]['updatable'] = ($atributos['form'] == 'YES');
                              if (!isset($datos['columns'][$columna]['caption']))
                              $datos['columns'][$columna]['caption'] = $atributos['title'];
                              if (!isset($datos['columns'][$columna]['default']))
                              $datos['columns'][$columna]['default'] = $atributos['default'];
                              if (!isset($datos['columns'][$columna]['permission']))
                              $datos['columns'][$columna]['permission'] = ''; */
                            // SI LA COLUMNA ESTA VINCULADA A UNA ENTIDAD, CREA LA LISTA DE VALORES
                            if ($atributos['aditional_filter']['entity']) {
                                $entidad = $atributos['aditional_filter']['entity'];
                                $metodo = $atributos['aditional_filter']['method'];
                                $objeto = new $entidad();
                                $listaValores = $objeto->$metodo($atributos['aditional_filter']['params']);
                                $datos['columns'][$columna]['listaValores'] = $listaValores;
                            }
                        }
                    }
                    break;
                case 'Web':
                    break;
            }
        }

        $template = $variables->getTemplate();

        $this->values['tipo'] = $tipo;
        $this->values['ambito'] = $ambito;
        $this->values['nombre'] = $nombre;
        $this->values['titulo'] = $variables->getTitulo();
        $this->values['archivoDatos'] = $variables->getPathYml();
        $this->values['datos'] = $datos;
        $this->values['templateComun'] = $templateComun;
        unset($variables);

        return array(
            'template' => $template,
            'values' => $this->values,
        );
    }

    public function EditAction() {

        if ($this->request['METHOD'] == 'POST') {

            $objeto = array(
                'tipo' => $this->request['tipo'],
                'ambito' => $this->request['ambito'],
                'nombre' => $this->request['nombre'],
            );

            switch ($this->request['accion']) {

                case 'Guardar':
                    if ($this->values['permisos']['UP']) {
                        $variables = new CoreVariables($objeto);
                        $variables->setDatosYml($this->request['datos']);
                        $variables->save();
                        $this->values['errores'] = $variables->getErrores();
                        unset($variables);

                        return $this->indexAction($objeto['tipo'], $objeto['ambito'], $objeto['nombre']);
                    } else {
                        return array('template' => '_global/forbiden.html.twig', 'values' => $this->values);
                    }

                    break;

                case 'Borrar':
                    if ($this->values['permisos']['DE']) {
                        $variables = new CoreVariables($objeto);
                        $variables->delete();
                        $this->values['errores'] = $variables->getErrores();
                        unset($variables);

                        return $this->indexAction($objeto['tipo'], $objeto['ambito'], $objeto['nombre']);
                    } else {
                        return array('template' => '_global/forbiden.html.twig', 'values' => $this->values);
                    }

                    break;
            }
        } else
            return array('template' => '_global/forbiden.html.twig', array());
    }

}

?>
