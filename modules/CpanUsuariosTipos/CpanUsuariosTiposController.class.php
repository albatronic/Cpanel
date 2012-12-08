<?php

/**
 * CONTROLLER FOR CpanUsuariosTipos
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 08.12.2012 01:28:39

 * Extiende a la clase controller
 */
class CpanUsuariosTiposController extends Controller {

    protected $entity = "CpanUsuariosTipos";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>