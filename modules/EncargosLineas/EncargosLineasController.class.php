<?php

/**
 * CONTROLLER FOR EncargosLineas
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 20.02.2013 15:47:58

 * Extiende a la clase controller
 */
class EncargosLineasController extends Controller {

    protected $entity = "EncargosLineas";
    protected $parentEntity = "EncargosCab";

    public function listAction($idEncargo) {
        return parent::listAction("IdEncargo='{$idEncargo}'");
    }
}

?>