<?php

/**
 * CONTROLLER FOR CommMonedas
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 23.10.2012 02:51:54

 * Extiende a la clase controller
 */
class CommMonedasController extends Controller {

    protected $entity = "CommMonedas";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>