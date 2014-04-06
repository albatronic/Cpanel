<?php

/*
 * ACTUALIZA LOS PERMISOS DE ACCESO A LAS APPS DEL CPANEL
 *
 * Es llamado por AJAX
 *
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright Informatica ALBATRONIC
 * @since 27.10.2013
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
define("APP_PATH", $_SERVER['DOCUMENT_ROOT'] . $app['path'] . "/");
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
$filtro = "IdUsuario='{$v['idUsuario']}' and IdEmpresa='{$v['idEmpresa']}' and IdProyecto='{$v['idProyecto']}' and IdApp='{$v['idApp']}'";
$permiso = new PcaePermisos();
$rows = $permiso->cargaCondicion("Id",$filtro);
$idPermiso = $rows[0]['Id'];

if ($v['permiso']) {
    // Conceder Permiso
    if (!$idPermiso) {
        $permiso = new PcaePermisos();
        $permiso->setIdUsuario($v['idUsuario']);
        $permiso->setIdEmpresa($v['idEmpresa']);
        $permiso->setIdProyecto($v['idProyecto']);
        $permiso->setIdApp($v['idApp']);
        $permiso->setPublish(1);
        $permiso->create();
    }
} else {
    // Quitar la relación
    if ($idPermiso) {
        $permiso = new PcaePermisos($idPermiso);
        $permiso->erase();
    }
}

$tag = json_encode($permiso->getErrores());
unset($permiso);

echo $tag;
?>
