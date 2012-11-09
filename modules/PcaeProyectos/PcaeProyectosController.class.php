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