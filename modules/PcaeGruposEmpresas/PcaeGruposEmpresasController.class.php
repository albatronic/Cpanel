<?php

/**
 * CONTROLLER FOR PcaeGruposEmpresas
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 23.10.2012 02:01:16

 * Extiende a la clase controller
 */
class PcaeGruposEmpresasController extends Controller {

    protected $entity = "PcaeGruposEmpresas";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>