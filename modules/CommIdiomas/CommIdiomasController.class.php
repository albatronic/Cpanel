<?php

/**
 * CONTROLLER FOR CommIdiomas
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 23.10.2012 02:46:18

 * Extiende a la clase controller
 */
class CommIdiomasController extends Controller {

    protected $entity = "CommIdiomas";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>