<?php

/**
 * CONTROLLER FOR CpanFuncionalidades
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 08.12.2012 02:03:38

 * Extiende a la clase controller
 */
class CpanFuncionalidadesController extends Controller {

    protected $entity = "CpanFuncionalidades";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>