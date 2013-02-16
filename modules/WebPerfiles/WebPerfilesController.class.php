<?php

/**
 * CONTROLLER FOR WebPerfiles
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 15.02.2013 17:35:40

 * Extiende a la clase controller
 */
class WebPerfilesController extends Controller {

    protected $entity = "WebPerfiles";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>