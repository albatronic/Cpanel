<?php

/**
 * CONTROLLER FOR CommCnae
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 23.10.2012 03:13:47

 * Extiende a la clase controller
 */
class CommCnaeController extends Controller {

    protected $entity = "CommCnae";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>