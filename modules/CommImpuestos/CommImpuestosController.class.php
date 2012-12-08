<?php

/**
 * CONTROLLER FOR CommImpuestos
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 23.10.2012 03:07:42

 * Extiende a la clase controller
 */
class CommImpuestosController extends Controller {

    protected $entity = "CommImpuestos";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>