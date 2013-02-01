<?php

/**
 * CONTROLLER FOR Networking
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 18.01.2013 11:37:50

 * Extiende a la clase controller
 */
class NetworkingController extends Controller {

    protected $entity = "Networking";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::newAction();
    }

}

?>