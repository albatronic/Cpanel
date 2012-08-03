<?php

/**
 * Description of ValoresPrivacidad
 * 
 * INDICA SI UN CONTENIDO ES PRIVADO, PÚBLICO O AMBOS CASOS
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @since 03-08-2012
 *
 */

/**
 * VALORES PRIVADO, PÚBLICO, AMBOS
 */
class ValoresPrivacidad extends Tipos {

    protected $tipos = array(
        array('Id' => '0', 'Value' => 'Privado'),
        array('Id' => '1', 'Value' => 'Público'),
        array('Id' => '2', 'Value' => 'Ambos'),
    );

}

?>
