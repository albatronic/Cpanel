<?php

/**
 * CONTROLLER FOR CommBancosOficinas
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL
 * @date 04.11.2012 20:25:21

 * Extiende a la clase controller
 */
class CommBancosOficinasController extends Controller {

    protected $entity = "CommBancosOficinas";
    protected $parentEntity = "CommBancos";

    /**
     * Devuelve todas las oficinas de un Banco
     * indicado en la posicion 2 del request.
     * @return array
     */
    public function listAction($idBanco = '') {

        if ($idBanco == '')
            $idBanco = $this->request[2];

        $tabla = $this->form->getDataBaseName() . "." . $this->form->getTable();
        $filtro = $tabla . ".IdBanco='" . $this->request[2] . "'";

        $this->values['linkBy']['value'] = $idBanco;

        return parent::listAction($filtro);
    }

    /**
     * Devuelve todas las oficinas de un Banco
     * indicado en la posicion 2 del request.
     * @return array
     */
    public function listadoAction($idBanco = '') {

        if ($idBanco == '')
            $idBanco = $this->request[2];

        $this->listado->filter['columnSelected'] = $this->form->getLinkBy();
        $this->listado->filter['value'] = $idBanco;
        $this->values['linkBy']['value'] = $idBanco;

        return parent::listadoAction();
    }

}

?>