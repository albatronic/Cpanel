<?php

/**
 * DEFINICION DE LAS VARIABLES DE ENTORNO DE CADA COLUMNA
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 10-sep-2012 13:31:08
 */
class VariablesEnv {

    /**
     * Tabla de correspondencias entre la variables
     * de entorno módulo y los valores del config.yml
     * @var array
     */
    static $varEnvMod = array(
        'caption' => 'title',
        'default' => 'default',
        'visible' => 'form',
        'updatable' => 'updatable',
        'help' => 'help',
        'permission' => 'permission',
        'editorTiny' => '',
        'saveTinyAsFile' => true, // Guardar el texto del tiny en un fichero (no en la BD)
    );

}

?>
