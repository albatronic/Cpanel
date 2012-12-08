<?php

/**
 * CONTROLLER FOR CpanPerfiles
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 08.12.2012 01:21:59

 * Extiende a la clase controller
 */
class CpanPerfilesController extends Controller {

    protected $entity = "CpanPerfiles";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>