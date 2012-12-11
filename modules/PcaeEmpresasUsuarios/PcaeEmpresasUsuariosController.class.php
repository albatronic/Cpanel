<?php

/**
 * CONTROLLER FOR PcaeEmpresasUsuarios
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 02.12.2012 20:13:00

 * Extiende a la clase controller
 */
class PcaeEmpresasUsuariosController extends Controller {

    protected $entity = "PcaeEmpresasUsuarios";
    protected $parentEntity = "PcaeEmpresas";

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
        $this->cargaVariables();

        $this->values['atributos'] = $this->form->getAtributos($this->values['permisos']['enCurso']['modulo']);

        // Poner la solapa activa de los campos comunes
        ($this->request['solapaActiva'] == '') ? $this->values['solapaActiva'] = 'general' : $this->values['solapaActiva'] = $this->request['solapaActiva'];
    }

    /**
     * Devuelve todas los usuarios de una empresa
     * indicada en la posicion 2 del request.
     * 
     * No muestra al usuario super
     * 
     * @return array
     */
    public function listAction($idEmpresa = '') {

        if ($this->values['permisos']['permisosModulo']['CO']) {
            if ($idEmpresa == '')
                $idEmpresa = $this->request[2];

            $objetoNuevo = new $this->entity();
            $objetoNuevo->setIDEmpresa($idEmpresa);
            $lineas[] = $objetoNuevo;
            unset($objetoNuevo);

            $lis = new $this->entity();
            $rows = $lis->cargaCondicion('Id', "IdEmpresa='{$idEmpresa}' AND IdUsuario<>'1'", 'Id ASC');
            unset($lis);
            foreach ($rows as $row) {
                $lineas[] = new $this->entity($row['Id']);
            }

            $this->values['linkBy']['value'] = $idEmpresa;
            $this->values['listado']['data'] = $lineas;

            unset($lineas);

            return array('template' => $this->entity . '/form.html.twig', 'values' => $this->values);
        } else {
            return array('template' => '_global/forbiden.html.twig');
        }
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

                case 'POST': //CREAR NUEVO REGISTRO
                    //COGER EL LINK A LA ENTIDAD PADRE
                    if ($this->values['linkBy']['id'] != '') {
                        $this->values['linkBy']['value'] = $this->request[$this->entity][$this->values['linkBy']['id']];
                    }

                    $datos = new $this->entity();
                    $datos->bind($this->request[$this->entity]);

                    if ($datos->valida($this->form->getRules())) {
                        $datos->create();
                        $this->values['alertas'] = $datos->getAlertas();

                        //Recargo el objeto para refrescar las propiedas que
                        //hayan podido ser objeto de algun calculo durante el proceso
                        //de guardado.
                        $datos = new $this->entity($datos->getPrimaryKeyValue());
                        $this->values['datos'] = $datos;
                    } else {
                        $this->values['datos'] = $datos;
                        $this->values['errores'] = $datos->getErrores();
                    }
                    unset($datos);
                    return $this->listAction($this->values['linkBy']['value']);
                    break;
            }
        } else {
            return array('template' => '_global/forbiden.html.twig');
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

        //COGER DEL REQUEST EL LINK A LA ENTIDAD PADRE
        if ($this->values['linkBy']['id'] != '') {
            $this->values['linkBy']['value'] = $this->request[$this->entity][$this->values['linkBy']['id']];
        }

        switch ($this->request['accion']) {
            case 'G': //GUARDAR DATOS
                if ($this->values['permisos']['permisosModulo']['UP']) {
                    $datos = new $this->entity($this->request[$this->entity]['Id']);
                    $datos->bind($this->request[$this->entity]);
                    if ($this->request[$this->entity]['IdUsuario']) {
                        $datos->save();
                        $this->values['errores'] = $datos->getErrores();
                        $this->values['alertas'] = $datos->getAlertas();

                        //Recargo el objeto para refrescar las propiedas que
                        //hayan podido ser motivo de algun calculo durante el proceso
                        //de guardado.
                        $datos = new $this->entity($this->request[$this->entity][$datos->getPrimaryKeyName()]);
                    } else {
                        $this->values['errores'][] = "Usuario: Valor requerido";
                    }

                    $this->values['datos'] = $datos;
                    unset($datos);
                    return $this->listAction($this->values['linkBy']['value']);
                } else {
                    return array('template' => '_global/forbiden.html.twig');
                }
                break;

            case 'B': //BORRAR DATOS
                if ($this->values['permisos']['permisosModulo']['DE']) {
                    $datos = new $this->entity($this->request[$this->entity]['Id']);

                    if ($datos->erase()) {
                        $datos = new $this->entity();
                        $this->values['datos'] = $datos;
                        $this->values['errores'] = array();
                    } else {
                        $this->values['datos'] = $datos;
                        $this->values['errores'] = $datos->getErrores();
                    }
                    unset($datos);
                    return $this->listAction($this->values['linkBy']['value']);
                } else {
                    return array('template' => '_global/forbiden.html.twig');
                }
                break;
        }
    }

}

?>