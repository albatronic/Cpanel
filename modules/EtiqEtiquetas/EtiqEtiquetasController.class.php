<?php

/**
 * CONTROLLER FOR EtiqEtiquetas
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL
 * @date 30.10.2012 18:46:08

 * Extiende a la clase controller
 */
class EtiqEtiquetasController extends Controller {

    protected $entity = "EtiqEtiquetas";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::ListAction();
    }

}

?>