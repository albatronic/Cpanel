<?php

/**
 * CONTROLLER FOR CommBancos
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 23.10.2012 03:16:42

 * Extiende a la clase controller
 */
class CommBancosController extends Controller {

    protected $entity = "CommBancos";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>