<?php

/**
 * Description of IndexController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 3-Agosto-2012
 *
 */
class IndexController extends Controller {

    protected $entity = "Index";

    public function IndexAction() {

        return array(
            'template' => $this->entity . '/index.html.twig',
            'values' => $this->values
        );
    }

}

?>
