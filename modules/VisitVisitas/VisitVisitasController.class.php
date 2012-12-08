<?php

/**
 * CONTROLLER FOR VisitVisitas
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 02.12.2012 00:09:39

 * Extiende a la clase controller
 */
class VisitVisitasController extends Controller {

    protected $entity = "VisitVisitas";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>