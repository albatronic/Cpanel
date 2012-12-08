<?php

/**
 * CONTROLLER FOR CpanUsuarios
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 07.12.2012 23:55:49

 * Extiende a la clase controller
 */
class CpanUsuariosController extends Controller {

    protected $entity = "CpanUsuarios";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>