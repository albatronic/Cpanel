<?php

/**
 * GESTION DE VARIABLES WEB Y DE ENTORNO
 *
 * CONSTRUYE EL OBJETO VARIABLES EN BASE AL ambito, tipo y nombre
 *
 * SUS MÉTODOS PERMITEN EDITARLAS, BORRARLAS Y GUARDARLAS EN LOS
 * ARCHIVOS YML DEL PROYECTO
 *
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 09-sep-2012 12:48:45
 */
class CpanVariables extends CpanVariablesEntity {

    protected $tiposDeVariables = array('Web', 'Env');
    protected $ambitosDeVariables = array('Pro', 'App', 'Mod');
    protected $objeto = array();
    protected $pathYml = FALSE;     // La url completa al archivo yml de las variables
    protected $fileEspecificas;
    protected $titulo;
    protected $template;
    protected $pathProject;         // La url al proyecto
    protected $errores;
    protected $ok = FALSE;

    /**
     * Construye el objeto variables correspondiente al ámbito, tipo y nombre
     *
     * @param string $ambito El ambito de las variables: Pro, App ó Mod
     * @param string $tipo El tipo de variable: Env, Web
     * @param string $nombre El nombre de la app o del modulo según $ambito
     */
    public function __construct($ambito, $tipo, $nombre = '') {

        $this->pathProject = $_SESSION['project']['ftp']['server'] . "/" . $_SESSION['project']['ftp']['folder'];

        if ($this->valida($ambito, $tipo, $nombre)) {

            $this->objeto = array(
                'ambito' => $ambito,
                'tipo' => $tipo,
                'nombre' => $nombre,
                'pathYml' => $this->getPathYml(),
                'template' => $this->getTemplate(),
                'titulo' => $this->getTitulo(),
                'datos' => $this->getDatosYml(),
            );
        }
    }

    public function __toString() {
        return $this->getId();
    }

    /**
     * Devuelve el array objeto que contiene todos los valores:
     *
     *      ambito =>
     *      tipo =>
     *      nombre =>
     *      pathYml =>  la ruta completa al archivo yml de variables
     *      template => el nombre del template a utilizar para mostrar las variables
     *      titulo => string con el titulo a mostrar en el template
     *      datos   => array con las variables y sus valores
     *
     * @return array Array con el objeto completo
     */
    public function getObjeto() {
        return $this->objeto;
    }

    /**
     * Devuelve un array con los valores de las variables que
     * están en el proyecto en curso
     *
     * @return array Array con los valores de las variables
     */
    public function getValores() {
        return $this->objeto['datos'];
    }

    /**
     * Devuelve el fullpath del archivo yml
     * correspondiente a las variables en curso
     *
     * EL QUE TENGA VALOR NO IMPLICA QUE EXISTA FÍSICAMENTE EL ARCHIVO
     *
     * @return string El path completo
     */
    public function getPathYml() {
        return $this->pathYml;
    }

    /**
     * Devuelve el nombre del template que se debe usar
     * para renderizar las variables en curso
     *
     * @return string El template
     */
    public function getTemplate() {
        return $this->template;
    }

    /**
     * Devuelve el titulo de las variables en curso
     *
     * @return string El titulo
     */
    public function getTitulo() {
        return $this->titulo;
    }

    /**
     * Devuelve el array completo de variables correspondientes
     *
     * @return array Array con las variables
     */
    public function getDatosYmlFtp() {

        $arrayYml = array();

        $localFile = "tmp/" . md5($_SESSION['USER']['user']['Id']) . ".yml";

        $ftp = new Ftp(
                        $_SESSION['project']['ftp']['server'],
                        $_SESSION['project']['ftp']['user'],
                        $_SESSION['project']['ftp']['password']
        );
        $ok = $ftp->downLoad($this->pathYml, $localFile);
        if ($ok) {
            $arrayYml = sfYaml::load($localFile);
            @unlink($localFile);
        } else
            $this->errores = $ftp->getErrores();
        unset($ftp);

        return $arrayYml;
    }

    public function getDatosYml() {

        $ftp = new Ftp('', '', '');
        $result = $ftp->getFileContent($this->pathYml);
        $arrayYml = sfYaml::load($result['result']);

        return $arrayYml;
    }

    /**
     * Pone en el objeto el array de variables
     *
     * @param array $variables
     */
    public function setDatosYml(array $variables) {

        $this->objeto['datos'] = $variables;
    }

    public function getFirma() {
        return $this->objeto['datos']['firma'];
    }

    /**
     * Devuelve un array con la definicion de las variables especificas
     * del objeto en curso
     *
     * @return array Array de variables
     */
    public function getArrayEspecificas() {

        if (file_exists($this->fileEspecificas))
            $arrayEspecificas = sfYaml::load($this->fileEspecificas);

        if (!is_array($arrayEspecificas))
            $arrayEspecificas = array();

        return $arrayEspecificas;
    }

    /**
     * Actualiza un nodo del objeto.
     *
     * NO GUARDA, la actualización se produce el array que está en memoria.
     *
     * @param string $nombreNodo El nombre del nodo
     * @param array $nodo Array con los valores del nodo
     */
    public function setNode($nombreNodo, array $nodo) {
        $this->objeto['datos'][$nombreNodo] = $nodo;
    }

    /**
     * Devuelve el contenido de un nodo
     *
     * @param type $nombreNodo
     * @return mixed Texto plano o array
     */
    public function getNode($nombreNodo) {
        return $this->objeto['datos'][$nombreNodo];
    }

    /**
     * Devuelve un array con los valores de una columna
     *
     * @param string $nombreColumna El nombre de columna
     * @return array Array con los valores de una columna
     */
    public function getColumn($nombreColumna) {
        return $this->objeto['datos']['columns'][$nombreColumna];
    }

    /**
     * Actualiza el array de valores de una columna
     * NO GUARDA, la actualización se produce el array que está en memoria
     *
     * @param string $nombreColumna El nombre de la columna
     * @param array $valores Array de valores
     */
    public function setColumn($nombreColumna, array $valores) {
        $this->objeto['datos']['columns'][$nombreColumna] = $valores;
    }

    /**
     * Almacena las variables en un archivo en base a
     * lo contenido en $this->objeto
     *
     * Si son variables Web de Módulo, también pone la visibilidad
     * en las variables de entorno de dicho módulo
     *
     * @return boolean TRUE si se guardó correctamente
     */
    public function save() {

        $cabecera = "# {$this->objeto['pathYml']}\n";
        $cabecera .= "# Fecha : " . date('d-m-Y H:i:s') . "\n";
        $cabecera .= "# Usuario: " . $_SESSION['USER']['user']['Id'] . " " . $_SESSION['USER']['user']['Nombre'] . "\n\n";
        $cabecera .= "firma: " . md5(date('d-m-Y H:i:s'));
        $datosYml = $cabecera;

        if (is_array($this->objeto['datos'])) {
            $cuerpo = sfYaml::dump($this->objeto['datos'], 3);
            $datosYml .= $cuerpo;
        }

        $archivo = new Archivo($this->objeto['pathYml']);
        $ok = $archivo->write($datosYml);
        if (!$ok)
            $this->errores = $archivo->getErrores();
        elseif (($this->objeto['ambito'] == 'Mod') and ($this->objeto['tipo'] == 'Web'))
            $this->ponVisibilidad();

        unset($archivo);

        return $ok;
    }

    /**
     * Borrar el archivo yml de las variables
     * @return boolean TRUE se se ha borrado correctamente
     */
    public function delete() {

        $archivo = new Archivo($this->objeto['pathYml']);
        $ok = $archivo->delete();
        if (!$ok)
            $this->errores = $archivo->getErrores();
        elseif (($this->objeto['ambito'] == 'Mod') and ($this->objeto['tipo'] == 'Web'))
            $this->quitaVisibilidad();

        unset($archivo);

        return $ok;
    }

    /**
     * Devuelve un array con los errores producidos
     *
     * @return array Array con errores
     */
    public function getErrores() {
        return $this->errores;
    }

    /**
     * Comprueba que el ambito y tipo de variables indicadas
     * correspondan a alguno de los valores posibles definidos
     * en $this->ambitosdeVariables y $this->tiposDeVariables respectivamente
     *
     * @param string $ambito El ambito de las variables: Pro, App ó Mod
     * @param string $tipo El tipo de variable: Env, Web
     * @param string $nombre El nombre de la app o del modulo
     *
     * @return boolean TRUE si el ambito y tipo son válidos
     */
    private function valida($ambito, $tipo, $nombre) {

        $this->ok = ( (in_array($ambito, $this->ambitosDeVariables)) and (in_array($tipo, $this->tiposDeVariables)) );

        if ($this->ok) {
            switch ($ambito) {
                case 'Pro':
                    $archivoDatos = "/config/varPro";
                    $this->titulo = 'Variables ' . $tipo . ' del Proyecto "' . $_SESSION['project']['title'] . '"';
                    $this->template = "CpanVariables/fieldsVarPro{$tipo}.html.twig";
                    break;

                case 'App':
                    $archivoDatos = "/config/varApp_{$nombre}";
                    $app = new CpanAplicaciones();
                    $app = $app->find('CodigoApp', $nombre);
                    $this->titulo = 'Variables ' . $tipo . ' de la Aplicación "' . $app->getNombreApp() . '"';
                    unset($app);
                    $this->template = "CpanVariables/fieldsVar{$ambito}{$tipo}.html.twig";
                    $this->fileEspecificas = APP_PATH . "modules/{$nombre}/var{$tipo}.yml";
                    break;

                case 'Mod':
                    $archivoDatos = "/config/varMod_{$nombre}";
                    $modulo = new CpanModulos();
                    $modulo = $modulo->find('NombreModulo', $nombre);
                    $this->titulo = 'Variables ' . $tipo . ' del Módulo "' . $modulo->getTitulo() . '"';
                    unset($modulo);
                    $this->template = "CpanVariables/fieldsVar{$ambito}{$tipo}.html.twig";
                    $this->fileEspecificas = APP_PATH . "modules/{$nombre}/var{$tipo}.yml";
                    break;

                default:
                    $archivoDatos = "";
            }

            if ($archivoDatos) {
                $this->pathYml = "{$this->pathProject}{$archivoDatos}_{$tipo}.yml";
            } else {
                $this->pathYml = false;
                $this->errores[] = "No se ha podido construir el nombre del archivo de variables en base a los parámetros recibibos (Ambito={$this->objeto['ambito']}, Tipo={$this->objeto['tipo']}, Nombre={$this->objeto['nombre']})";
            }
        }
        else
            $this->errores[] = "Los valores indicados en ambito y/o tipo no son válidos";

        return $this->ok;
    }

    /**
     * Quita las variables de entorno del modulo en curso
     * relativas al control de visibilidad de sus variables web
     *
     * @return void
     */
    private function quitaVisibilidad() {

        $variables = new CpanVariables('Mod', 'Env', $this->objeto['nombre']);
        $variables->setNode('showVarWeb', array());
        $variables->save();
        unset($variables);
    }

    /**
     * Pone las variables de entorno del modulo en curso
     * relativas al control de visibilidad de sus variables web
     *
     * Respeta los valores que hubiera en el yml del proyecto respecto
     * a las variables web definidas.
     *
     * @return void
     */
    private function ponVisibilidad() {

        $variables = new CpanVariables('Mod', 'Env', $this->objeto['nombre']);
        $valoresActuales = $variables->getNode('showVarWeb');

        foreach ($this->objeto['datos']['globales'] as $key => $value)
            if (!isset($valoresActuales['globales'][$key]))
                $valores['globales'][$key] = 0;
            else
                $valores['globales'][$key] = $valoresActuales['globales'][$key];

        foreach ($this->objeto['datos']['especificas'] as $key => $value)
            if (!isset($valoresActuales['especificas'][$key]))
                $valores['especificas'][$key] = 0;
            else
                $valores['especificas'][$key] = $valoresActuales['especificas'][$key];


        $variables->setNode('showVarWeb', $valores);
        $variables->save();

        unset($variables);
    }

}

?>
