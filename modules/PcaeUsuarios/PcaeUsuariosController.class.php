<?php

/**
 * CONTROLLER FOR PcaeUsuarios
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 23.10.2012 01:02:46

 * Extiende a la clase controller
 */
class PcaeUsuariosController extends Controller {

    protected $entity = "PcaeUsuarios";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>