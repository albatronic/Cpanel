<?php

/**
 * CONTROLLER FOR ErpPropiedadesValores
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 26.01.2013 19:57:09

 * Extiende a la clase controller
 */
class ErpPropiedadesValoresController extends Controller {

    protected $entity = "ErpPropiedadesValores";
    protected $parentEntity = "ErpPropiedades";

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
        $this->permisos = new ControlAcceso('ErpPropiedades');

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

    public function IndexAction() {
        return parent::listAction();
    }

    /**
     * Crea un registro nuevo
     *
     * Siempre viene por POST
     * Si viene por POST crea un registro
     *
     * @return array con el template y valores a renderizar
     */
    public function newAction() {

        if ($this->values['permisos']['permisosModulo']['IN']) {
            switch ($this->request["METHOD"]) {

                case 'GET':
                case 'POST': //CREAR NUEVO REGISTRO
                    $rules = $this->form->getRules();
                    $datos = new $this->entity();
                    $datos->bind($this->request[$this->entity]);
                    if ($datos->valida($rules)) {
                        if ($datos->create()) {
                            $this->values['alertas'] = $datos->getAlertas();
                        } else {
                            $this->values['errores'] = $datos->getErrores();
                        }
                    } else {
                        $this->values['datos'] = $datos;
                        $this->values['errores'] = $datos->getErrores();
                        $this->values['alertas'] = $datos->getAlertas();
                    }
                    unset($datos);
                    return $this->listPopupAction($this->request[$this->entity]['IdPropiedad']);
                    break;
            }
        } else {
            return array(
                'template' => '_global/forbiden.html.twig',
                'values' => $this->values);
        }
    }

    /**
     * Edita, actualiza o borrar un registro
     *
     * Viene siempre por POST
     * Actualiza o Borrar según el valor de $this->request['accion']
     *
     * @return array con el template y valores a renderizar
     */
    public function editAction() {

        switch ($this->request['accion']) {
            case 'G': //GUARDAR DATOS
                if ($this->values['permisos']['permisosModulo']['UP']) {
                    $rules = $this->form->getRules();
                    $datos = new $this->entity($this->request[$this->entity]['Id']);
                    $datos->bind($this->request[$this->entity]);
                    if ($datos->valida($rules)) {
                        if ($datos->save()) {
                            $this->values['errores'] = $datos->getErrores();
                            $this->values['alertas'] = $datos->getAlertas();
                        } else
                            $this->values['errores'] = $datos->getErrores();
                    } else {
                        $this->values['datos'] = $datos;
                        $this->values['errores'] = $datos->getErrores();
                        $this->values['alertas'] = $datos->getAlertas();
                    }
                    unset($datos);
                    return $this->listPopupAction($this->request[$this->entity]['IdPropiedad']);
                } else {
                    return array('template' => '_global/forbiden.html.twig');
                }
                break;

            case 'B': //BORRAR DATOS
                if ($this->values['permisos']['permisosModulo']['DE']) {
                    $datos = new $this->entity($this->request[$this->entity]['Id']);

                    if ($datos->erase()) {
                        $this->values['errores'] = array();
                    } else {
                        $this->values['errores'] = $datos->getErrores();
                    }
                    unset($datos);
                    return $this->listPopupAction($this->request[$this->entity]['IdPropiedad']);
                } else {
                    return array('template' => '_global/forbiden.html.twig');
                }
                break;
        }
    }

    public function listPopupAction($idPropiedad = '') {

        if ($idPropiedad == '')
            $idPropiedad = $this->request[2];

        $valor = new ErpPropiedadesValores();
        $valor->setIdPropiedad($idPropiedad);
        $lineas[] = $valor;

        $valores = $valor->cargaCondicion("Id", "IdPropiedad='{$idPropiedad}'", "SortOrder ASC");
        unset($valor);

        foreach ($valores as $valor) {
            $lineas[] = new ErpPropiedadesValores($valor['Id']);
        }

        $this->values['valores'] = $lineas;

        return array(
            'template' => $this->entity . '/listPopup.html.twig',
            'values' => $this->values,
        );
    }

}

?>