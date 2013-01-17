<?php

/**
 * CONTROLLER FOR Networking
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 16.01.2013 19:04:53

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