<?php

/**
 * CONTROLLER FOR RrhhPersonal
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 12.03.2013 21:52:04

 * Extiende a la clase controller
 */
class RrhhPersonalController extends Controller {

    protected $entity = "RrhhPersonal";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::newAction();
    }

}

?>