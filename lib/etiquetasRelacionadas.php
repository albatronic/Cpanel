<?php

/*
 * Genera el codigo HTML para mostrar los documentos de una entidad
 *
 * Es llamado por AJAX
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

$v = $_GET;

$relacion = new EtiqRelaciones();
$existe = $relacion->cargaCondicion("Id", "IdModulo='{$v['idModulo']}' and IdEntidad='{$v['idEntidad']}' and IdEtiqueta='{$v['idEtiqueta']}'");

if ($v['onOff']) {
    // Hacer relacion si no existe aun
    if (!$existe[0]['Id']) {
        $relacion->setIdModulo($v['idModulo']);
        $relacion->setIdEntidad($v['idEntidad']);
        $relacion->setIdEtiqueta($v['idEtiqueta']);
        $relacion->create();
    }
} else {
    // Quitar la relación si existe
    if ($existe[0]['Id']) {
        $relacion = new EtiqRelaciones($existe[0]['Id']);
        $relacion->erase();
    }
}

unset($relacion);

$tag = "";

echo $tag;
?>
