<?php

/**
 * CONTROLLER FOR CpanRoles
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 08.12.2012 01:31:49

 * Extiende a la clase controller
 */
class CpanRolesController extends Controller {

    protected $entity = "CpanRoles";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

}

?>