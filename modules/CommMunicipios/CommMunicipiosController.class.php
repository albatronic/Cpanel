<?php

/**
 * CONTROLLER FOR CommMunicipios
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 23.10.2012 03:02:09

 * Extiende a la clase controller
 */
class CommMunicipiosController extends Controller {

    protected $entity = "CommMunicipios";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>