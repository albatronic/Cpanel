<?php

/**
 * CONTROLLER FOR AnmCategorias
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 18.03.2013 13:04:51

 * Extiende a la clase controller
 */
class AnmCategoriasController extends Controller {

    protected $entity = "AnmCategorias";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::newAction();
    }    
}

?>