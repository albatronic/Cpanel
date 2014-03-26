<?php

/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 25.10.2013 22:32:33
 */

/**
 * @orm:Entity(Widgets)
 */
class Widgets extends WidgetsEntity {

    public function __toString() {
        return $this->getTitle();
    }

}

?>