<?php

/**
 * CONTROLLER FOR ErpMarcas
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 26.01.2013 19:57:09

 * Extiende a la clase controller
 */
class ErpMarcasController extends Controller {

    protected $entity = "ErpMarcas";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::newAction();
    }

}

?>