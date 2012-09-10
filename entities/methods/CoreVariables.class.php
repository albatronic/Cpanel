<?php

/**
 * GESTION DE VARIABLES WEB Y DE ENTORNO
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 09-sep-2012 12:48:45
 */
class CoreVariables {

    protected $tiposDeVariables = array('Web', 'Env');
    protected $ambitosDeVariables = array('Pro', 'App', 'Mod');
    protected $objeto = array();
    protected $pathYml = FALSE;
    protected $titulo;
    protected $template;
    protected $pathProject;
    protected $errores = array();
    protected $ok = FALSE;

    /**
     * Recibe un array y construye el objeto variables correspondiente
     *
     * El array debe tener al menos dos elementos:
     *
     *      ambito => El ámbito de la variable: 'Pro', 'App', 'Mod'
     *
     *      tipo   => El tipo de variable: 'Web', 'Env'
     *
     * @param array $objeto
     */
    public function __construct(array $objeto) {

        $this->pathProject = $_SERVER['DOCUMENT_ROOT'] . $_SESSION['project']['folder'];

        if ($this->valida($objeto)) {

            $this->objeto = array(
                'ambito' => $objeto['ambito'],
                'tipo' => $objeto['tipo'],
                'nombre' => $objeto['nombre'],
                'pathYml' => $this->getPathYml(),
                'template' => $this->getTemplate(),
                'titulo' => $this->getTitulo(),
                'datos' => $this->getDatosYml(),
            );
        }
    }

    public function getObjeto() {
        return $this->objeto;
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
    public function getDatosYml() {

        $yml = array();

        if (file_exists($this->pathYml)) {
            $yml = sfYaml::load($this->pathYml);
        }

        return $yml;
    }

    /**
     * Pone en el objeto el array de variables
     *
     * @param array $variables
     */
    public function setDatosYml(array $variables) {

        $this->objeto['datos'] = $variables;
    }

    /**
     * Actualiza un nodo del objeto
     * NO GUARDA, la actualización se produce el array que está en memoria
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
     * @return boolean TRUE si se guardó correctamente
     */
    public function save() {

        $cabecera = "# {$this->objeto['pathYml']}\n";
        $cabecera .= "# Fecha : " . date('d-m-Y H:i:s') . "\n";
        $cabecera .= "# Usuario: " . $_SESSION['USER']['user']['Id'] . " " . $_SESSION['USER']['user']['Nombre'] . "\n\n";
        $datosYml = $cabecera;

        if (is_array($this->objeto['datos'])) {
            $cuerpo = sfYaml::dump($this->objeto['datos'], 1);
            $datosYml .= $cuerpo;
        }

        $archivo = new Archivo($this->objeto['pathYml']);
        $ok = $archivo->write($datosYml);
        if (!$ok)
            $this->errores[] = "Error al crear el archivo {$this->objeto['pathYml']}";
        unset($archivo);

        return $ok;
    }

    /**
     * Borrar el archivo yml de las variables
     * @return boolean TRUE se se ha borrado correctamente
     */
    public function delete() {

        $ok = @unlink($this->objeto['pathYml']);

        if (!$ok) $this->errores[] = "Error al borrar el archivo {$this->objeto['pathYml']}";

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
     * @param array $objeto El objeto
     *
     * @return boolean TRUE si el ambito y tipo son válidos
     */
    private function valida($objeto) {

        $this->ok = ( (in_array($objeto['ambito'], $this->ambitosDeVariables)) and (in_array($objeto['tipo'], $this->tiposDeVariables)) );

        if ($this->ok) {
            switch ($objeto['ambito']) {
                case 'Pro':
                    $archivoDatos = "/config/varPro";
                    $this->titulo = 'Variables ' . $objeto['tipo'] . ' del Proyecto "' . $_SESSION['project']['title'] . '"';
                    $this->template = "_global/fieldsVarPro{$objeto['tipo']}.html.twig";
                    break;

                case 'App':
                    $archivoDatos = "/config/varApp_{$objeto['nombre']}";
                    $app = new CoreAplicaciones();
                    $app = $app->find('CodigoApp', $objeto['nombre']);
                    $this->titulo = 'Variables ' . $objeto['tipo'] . ' de la Aplicación "' . $app->getNombreApp() . '"';
                    unset($app);
                    $this->template = "{$objeto['nombre']}/fieldsVar{$objeto['tipo']}.html.twig";
                    break;

                case 'Mod':
                    //$archivoDatos = "/modules/{$objeto['nombre']}/var_{$objeto['nombre']}";
                    $archivoDatos = "/modules/{$objeto['nombre']}/var";
                    $modulo = new CoreModulos();
                    $modulo = $modulo->find('NombreModulo', $objeto['nombre']);
                    $this->titulo = 'Variables ' . $objeto['tipo'] . ' del Módulo "' . $modulo->getTitulo() . '"';
                    unset($modulo);
                    $this->template = "{$objeto['nombre']}/fieldsVar{$objeto['tipo']}.html.twig";
                    break;

                default:
                    $archivoDatos = "";
            }

            if ($archivoDatos) {
                $this->pathYml = "{$this->pathProject}{$archivoDatos}_{$objeto['tipo']}.yml";
            } else {
                $this->pathYml = false;
                $this->errores[] = "No se ha podido construir el nombre del archivo de variables en base a los parámetros recibibos (Ambito={$this->objeto['ambito']}, Tipo={$this->objeto['tipo']}, Nombre={$this->objeto['nombre']})";
            }
        }
        else
            $this->errores[] = "Los valores indicados en ambito y/o tipo no son válidos";

        return $this->ok;
    }

}

?>
