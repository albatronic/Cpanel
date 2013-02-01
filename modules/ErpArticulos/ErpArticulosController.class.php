<?php

/**
 * CONTROLLER FOR ErpArticulos
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 26.01.2013 19:57:08

 * Extiende a la clase controller
 */
class ErpArticulosController extends Controller {

    protected $entity = "ErpArticulos";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::newAction();
    }

}

?>