<?php

/**
 * CONTROLLER FOR EvenEventos
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 08.12.2012 01:14:51

 * Extiende a la clase controller
 */
class EvenEventosController extends Controller {

    protected $entity = "EvenEventos";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>