<?php

/**
 * CONTROLLER FOR ErpFamilias
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 26.01.2013 19:57:09

 * Extiende a la clase controller
 */
class ErpFamiliasController extends Controller {

    protected $entity = "ErpFamilias";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::newAction();
    }
    
}

?>