<?php

/**
 * @copyright GRUPO TREVENQUE
 * @date 03.03.2015 23:33:14
 */

/**
 * @orm:Entity(CpanMapeoUrls)
 */
class CpanMapeoUrls extends CpanMapeoUrlsEntity {

    public function __toString() {
        return ($this->Id) ? $this->Id : '';
    }

}
