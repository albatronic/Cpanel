<?php

/**
 * CONTROLLER FOR RrhhPuestos
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 12.03.2013 21:49:25

 * Extiende a la clase controller
 */
class RrhhPuestosController extends Controller {

    protected $entity = "RrhhPuestos";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>