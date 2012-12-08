<?php

/**
 * CONTROLLER FOR CommProvincias
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 25.10.2012 23:34:38

 * Extiende a la clase controller
 */
class CommProvinciasController extends Controller {

    protected $entity = "CommProvincias";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>