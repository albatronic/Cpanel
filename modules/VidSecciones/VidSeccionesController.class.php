<?php

/**
 * CONTROLLER FOR VidSecciones
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 24.12.2012 12:52:25

 * Extiende a la clase controller
 */
class VidSeccionesController extends Controller {

    protected $entity = "VidSecciones";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>