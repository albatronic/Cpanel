<?php

/**
 * CONTROLLER FOR CpanModulos
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 08.12.2012 00:07:48

 * Extiende a la clase controller
 */
class CpanModulosController extends Controller {

    protected $entity = "CpanModulos";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>