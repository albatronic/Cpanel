<?php

/**
 * CONTROLLER FOR AnmEnfermedades
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 18.03.2013 10:33:06

 * Extiende a la clase controller
 */
class AnmEnfermedadesController extends Controller {

    protected $entity = "AnmEnfermedades";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::newAction();
    }

}

?>
