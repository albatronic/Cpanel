<?php

/**
 * Description of IndexController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 3-Agosto-2012
 *
 */
class IndexController {

    public function IndexAction() {
        $values = array();
        return array('template' => 'Index/Index.html.twig', 'values' => $values);
    }

}

?>
