<?php

/**
 * GENERA EL FORMULARIO DE VARIABLES DE ENTORNO DE UNA COLUMNA DE UN MODULO
 * A PETICION DEL SCRIPT AJAX 'showFormVariablesEnv' Y DEVUELVE UN TEXTO PLANO CON EL CODIGO HTML
 *
 * LOS PARAMETROS POST QUE RECIBE SON:
 *
 * t          -> EL TIPO DE DESPLEGABLE, O SEA SOBRE QUE TABLA SE GENERARA EL DESPLEGABLE
 * idselect   -> EL ID QUE TENDRA EL DESPLEGABLE
 * nameselect -> EL NAME QUE TENDRA EL DESPLEGABLE
 * filtro     -> VALOR PARA LA CLAUSULA 'WHERE' DE LA SENTENCIA SQL
 *
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright Informatica ALBATRONIC
 * @since 27.05.2011
 */
session_start();

if (!file_exists('../config/config.yml')) {
    echo "NO EXISTE EL FICHERO DE CONFIGURACION";
    exit;
}

if (file_exists("../bin/yaml/lib/sfYaml.php")) {
    include "../bin/yaml/lib/sfYaml.php";
} else {
    echo "NO EXISTE LA CLASE PARA LEER ARCHIVOS YAML";
    exit;
}

// ---------------------------------------------------------------
// CARGO LOS PARAMETROS DE CONFIGURACION.
// ---------------------------------------------------------------
$config = sfYaml::load('../config/config.yml');
$app = $config['config']['app'];

// ---------------------------------------------------------------
// ACTIVAR EL AUTOLOADER DE CLASES Y FICHEROS A INCLUIR
// ---------------------------------------------------------------
define(APP_PATH, $_SERVER['DOCUMENT_ROOT'] . $app['path'] . "/");
include_once "../" . $app['framework'] . "Autoloader.class.php";
Autoloader::setCacheFilePath(APP_PATH . 'tmp/class_path_cache.txt');
Autoloader::excludeFolderNamesMatchingRegex('/^CVS|\..*$/');
Autoloader::setClassPaths(array(
    '../' . $app['framework'],
    '../entities/',
    '../lib/',
));
spl_autoload_register(array('Autoloader', 'loadClass'));


$modulo = $_GET['modulo'];
$columna = $_GET['columna'];
$tipo = 'Env';

$objeto = array(
    'ambito' => 'Mod',
    'tipo' => $tipo,
    'nombre' => $modulo,
);

$variables = new CoreVariables($objeto);
$archivoYml = $variables->getPathYml();
$variablesColumna = $variables->getColumn($columna);
unset($variables);

if (is_array($variablesColumna)) {
    //Leer la plantilla para el formulario
    $plantillaHtml = new Archivo($_SERVER['DOCUMENT_ROOT'] . $_SESSION['appPath'] . "/modules/_global/plantillaFormAjax.html.twig");
    $html = $plantillaHtml->read();
    unset($plantillaHtml);

    $titulo = "Variables {$tipo} de '{$columna}'";
    foreach ($variablesColumna as $key => $value) {
        $tag .= "<div class='form_grid_12'>\n
                 \t<label class='field_title'>{$key}</label>\n
                 \t<div class='form_input'>\n";

        $tag .= "<input type='text' name='datos[{$key}]' id='{$key}' value='{$value}' size='10'>\n";

        $tag .= "\t</div>\n</div>\n";
    }


    // Poner el código generado en la plantilla
    $html = str_replace('{{values.variables}}', $tag, $html);
    $html = str_replace('{{values.titulo}}', $titulo, $html);
    $html = str_replace('{{values.controller}}', $modulo, $html);
    $html = str_replace('{{values.modulo}}', $modulo, $html);
    $html = str_replace('{{values.tipo}}', $tipo, $html);
    $html = str_replace('{{values.ambito}}', $ambito, $html);
    $html = str_replace('{{values.columna}}', $columna, $html);
    $html = str_replace('{{values.archivoYml}}', $archivoYml, $html);
} else
    $html = "<p>No se ha podido localizar el archivo de variables ({$archivoYml}) , puede que aún no haya sido inicializado</p>";


/**
 * DEVUELVE EL SELECT CONSTRUIDO
 */
echo $html;
//------------------------------------------------------------------------------
?>
