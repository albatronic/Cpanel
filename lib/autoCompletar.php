<?php

/**
 * UTILIDADES DE AUTOCOMPLETAR.
 *
 * ESTE SCRIPT ES LLAMADO POR LAS FUNCIONES AJAX.
 * DEVUELVE UN STRING CON CODIGO HTML QUE SERÁ UTILIZADO
 * PARA REPOBLAR EL TAG HTML QUE CORRESPONDA
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
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

/**
 * Calse auxiliar para cargar el array que se devolverrá
 */
class Elemento {

    var $id;
    var $value;

    function __construct($id, $value) {
        $this->id = $id;
        $this->value = $value;
    }

}

switch ($_GET['entidad']) {

    // BUSCA URLS AMIGABLES POR %UrlFriendly%
    case 'urlsAmigables':
        $url = new CpanUrlAmigables();
        $filtro = "UrlFriendly LIKE '%{$_GET['term']}%'";
        $rows = $url->cargaCondicion("UrlFriendly as Id, UrlFriendly as Value", $filtro, "UrlFriendly");
        unset($url);
        break;

    // BUSCA PAISES POR %Pais%
    case 'paises':
        $pais = new CommPaises();
        $rows = $pais->cargaCondicion("Id as Id, Pais as Value", "Pais LIKE '%{$_GET['term']}%'", "Pais");
        unset($pais);
        break;

    // BUSCA PROVINCIAS POR %Provincia%
    case 'provincias':
        $filtro = "Provincia LIKE '%{$_GET['term']}%'";
        if ($_GET['filtroAdicional'])
            $filtro .= " and IDPais='{$_GET['filtroAdicional']}'";

        $provincia = new CommProvincias();
        $rows = $provincia->cargaCondicion("Id as Id, Provincia as Value", $filtro, "Provincia");
        unset($provincia);
        break;

    // BUSCA MUNICIPIOS POR %Municipio%
    case 'municipios':
        $filtro = "Municipio LIKE '%{$_GET['term']}%'";
        if ($_GET['filtroAdicional'])
            $filtro .= " and IDProvincia='{$_GET['filtroAdicional']}'";
        $municipio = new CommMunicipios();
        $rows = $municipio->cargaCondicion("Id as Id, Municipio as Value", $filtro, "Municipio");
        unset($municipio);
        break;

    // BUSCA MONEDAS POR %Moneda%
    case 'monedas':
        $filtro = "Moneda LIKE '%{$_GET['term']}%'";
        $moneda = new CommMonedas();
        $rows = $moneda->cargaCondicion("Id as Id, Moneda as Value", $filtro, "Moneda");
        unset($moneda);
        break;

    // BUSCA MONEDAS POR %Moneda%
    case 'zonasHorarias':
        $filtro = "Zona LIKE '%{$_GET['term']}%'";
        $zona = new CommZonasHorarias();
        $rows = $zona->cargaCondicion("Id as Id, Zona as Value", $filtro, "Zona");
        unset($zona);
        break;

    // BUSCA ARTICULOS POR %CODIGO%, %DESCRIPCION% Y %CODIGOEAN%
    case 'articulos':
        $articulo = new Articulos();
        $filtro = "(Vigente='1') and ((Codigo LIKE '%{$_GET['term']}%') or (Descripcion LIKE '%{$_GET['term']}%') or (CodigoEAN LIKE '%{$_GET['term']}%'))";
        $rows = $articulo->cargaCondicion("IDArticulo as Id, Descripcion as Value", $filtro, "Descripcion");
        unset($articulo);
        break;

    // BUSCA ARTICULOS DE LA FAMILIA INDICADA POR %CODIGO%, %DESCRIPCION% Y %CODIGOEAN%
    // EN ESTE CASO UTILIZA LA VARIABLE 'idSucursal' COMO LA FAMILIA
    case 'articulosFamilia':
        $articulo = new Articulos();
        if ($_GET['idSucursal'] == '0')
            $filtro = '1';
        else
            $filtro = "IDFamilia='{$_GET['idSucursal']}'";

        $filtro .= " and (Vigente='1') and ((Codigo LIKE '%{$_GET['term']}%') or (Descripcion LIKE '%{$_GET['term']}%') or (CodigoEAN LIKE '%{$_GET['term']}%'))";
        $rows = $articulo->cargaCondicion("IDArticulo as Id, Codigo, Descripcion as Value", $filtro, "Descripcion");
        unset($articulo);
        break;

    // BUSCA LAS UBICACIONES DE UN LOTE EN UN ALMACEN
    // EN $_GET['idSucursal'] VIENE SEPARADOS POR @ EL ID DEL ALMACEN Y EL ID DEL LOTE RESPECTIVAMENTE.
    case 'ubicacionesLote':
        $valores = explode("@", $_GET['idSucursal']);
        $idAlmacen = $valores[0];
        $idLote = $valores[1];

        $lote = new Lotes($idLote);
        $rows = $lote->getUbicaciones($idAlmacen, "%{$_GET['term']}%");
        unset($lote);
        break;

    // BUSCA LAS UBICACIONES DE UN ARTICULO EN UN ALMACEN
    // MUESTRA PRIMERO AQUELLAS DONDE HAY STOCK Y DESPUES
    // MUESTRA EL RESTO DE UBICACIONES DEL ALMACEN
    // EN $_GET['idSucursal'] VIENE SEPARADOS POR @ EL ID DEL ALMACEN Y EL ID DEL ARTICULO RESPECTIVAMENTE.
    case 'ubicacionesAlmacenArticulo':

        $valores = explode("@", $_GET['idSucursal']);
        $idAlmacen = $valores[0];
        $idArticulo = $valores[1];

        // Busca las ubicaciones con existencias
        $articulo = new Articulos($idArticulo);
        $rows = $articulo->getUbicaciones($idAlmacen, "%{$_GET['term']}%");
        unset($articulo);
        break;

    // DEVUELVE LAS UBICACIONES DE UN ALMACEN
    // EN ESTE CASO UTILIZA LA VARIABLE 'idSucursal' COMO EL ID DE ALMACEN
    case 'ubicacionesAlmacen':
        $idAlmacen = $_GET['idSucursal'];

        $almacen = new Almacenes($idAlmacen);
        $rows = $almacen->getUbicaciones("%{$_GET['term']}%");
        unset($almacen);
        break;

    // DEVUELVE LOS LOTES DEL ARTICULO INDEPENDIENTEMENTE
    // DEL ALMACEN Y DE SUS EXISTENCIAS. O SEA, TODOS LOS
    // LOTES QUE SE HAN DEFINIDO PARA EL ARTÍCULO.
    case 'lotesArticulo':
        $idArticulo = $_GET['idSucursal'];

        $lotes = new Lotes();
        $rows = $lotes->fetchAll($idArticulo, 'Lote', "%{$_GET['term']}%");
        unset($lotes);
        break;
}

// Creo el array de obetos que se va a devolver
// El compo value se codifica en utf8 porque se supone que van caracteres
$arrayElementos = array();
foreach ($rows as $value) {
    array_push($arrayElementos, new Elemento($value["Id"], $value["Value"]));
}

// El array creado se devuelve en formato JSON, requerido asi
// por el autocomplete de jQuery
print_r(json_encode($arrayElementos));
?>
