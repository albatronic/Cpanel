<?php

/**
 * CONTROLLER FOR RrhhDptos
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 12.03.2013 21:48:35

 * Extiende a la clase controller
 */
class RrhhDptosController extends Controller {

    protected $entity = "RrhhDptos";
    protected $parentEntity = "";
    
    public function IndexAction() {
        return parent::newAction();
    }    

}

?>