<?php

/**
 * CONTROLLER FOR PcaeProyectos
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL
 * @date 04.11.2012 20:25:21

 * Extiende a la clase controller
 */
class PcaeProyectosController extends Controller {

    protected $entity = "PcaeProyectos";
    protected $parentEntity = "PcaeEmpresas";

    public function __construct11($request) {

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
     * Devuelve todas los proyectos de una empresa
     * indicada en la posicion 2 del request.
     * @return array
     */
    public function listAction($idEmpresa = '') {

        if ($idEmpresa == '')
            $idEmpresa = $this->request[2];

        $tabla = $this->form->getDataBaseName() . "." . $this->form->getTable();
        $filtro = $tabla . ".IdEmpresa='" . $this->request[2] . "'";

        $this->values['linkBy']['value'] = $idEmpresa;

        return parent::listAction($filtro);
    }

    /**
     * Devuelve todos los proyectos de una empresa
     * indicada en la posicion 2 del request.
     * @return array
     */
    public function listadoAction($idEmpresa = '') {

        if ($idEmpresa == '')
            $idEmpresa = $this->request[2];

        $this->listado->filter['columnSelected'] = $this->form->getLinkBy();
        $this->listado->filter['value'] = $idEmpresa;
        $this->values['linkBy']['value'] = $idEmpresa;

        return parent::listadoAction();
    }

}

?>