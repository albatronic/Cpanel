<?php

/**
 * Description of Controller
 *
 * Controlador común a todos los módulos del CPanel
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @date 24-agosto-2012 19:39
 */
class Controller {

    /**
     * Variables enviadas en el request por POST o por GET
     * @var request
     */
    protected $request;

    /**
     * Objeto de la clase 'form' con las propiedades y métodos
     * del formulario obtenidos del fichero de configuracion
     * del formulario en curso
     * @var from
     */
    protected $form;

    /**
     * Valores a devolver al controlador principal para
     * que los renderice con el twig correspondiente
     * @var array
     */
    protected $values;

    /**
     * Objeto de la clase 'controlAcceso'
     * para gestionar los permisos de acceso a los métodos del controller
     * @var ControlAcceso
     */
    protected $permisos;

    /**
     * Array con las variables Web del modulo
     * @var array
     */
    protected $varWeb;

    public function __construct($request) {

        // Cargar lo que viene en el request
        $this->request = $request;

        // Cargar la configuracion del modulo (modules/moduloName/config.yml)
        $this->form = new Form($this->entity);

        // Instanciar el objeto listado con los parametros del modulo
        // y los eventuales valores del filtro enviados en el request
        if ($this->form->getTieneListado()) {
            $this->listado = new Listado($this->form, $this->request);
            $this->values['listado'] = array(
                'filter' => $this->listado->getFilter(),
            );
        }

        // Cargar los permisos.
        // Si la entidad no está sujeta a control de permisos, se habilitan todos
        if ($this->form->getPermissionControl()) {
            if ($this->parentEntity == '')
                $this->permisos = new ControlAcceso($this->entity);
            else
                $this->permisos = new ControlAcceso($this->parentEntity);
        } else
            $this->permisos = new ControlAcceso();

        $this->values['titulo'] = $this->form->getTitle();
        $this->values['ayuda'] = $this->form->getHelpFile();
        $this->values['permisos'] = $this->permisos->getPermisos();
        $this->values['enCurso'] = $this->values['permisos']['enCurso'];
        $this->values['tieneListado'] = $this->form->getTieneListado();
        $this->values['request'] = $this->request;
        $this->values['linkBy'] = array(
            'id' => $this->form->getLinkBy(),
            'value' => '',
        );

        $includesHead = $this->form->getNode('includesHead');

        $this->values['twigCss'] = $includesHead['twigCss'];
        $this->values['twigJs'] = $includesHead['twigJs'];

        // VARIABLES WEB Y DE ENTORNO
        //print_r($this->values['permisos']);

    }

    public function IndexAction() {

        if ($this->values['permisos']['AC'])
            $template = $this->entity . "/index.html.twig";
        else
            $template = "_global/forbiden.html.twig";

        return array(
            'template' => $template,
            'values' => $this->values,
        );
    }

    /**
     * Edita, actualiza o borrar un registro
     *
     * Si viene por GET es editar
     * Si viene por POST puede ser actualizar o borrar
     * según el valor de $this->request['accion']
     *
     * @return array con el template y valores a renderizar
     */
    public function editAction() {

        switch ($this->request["METHOD"]) {
            case 'GET':
                if ($this->values['permisos']['CO']) {
                    //SI EN LA POSICION 3 DEL REQUEST VIENE ALGO,
                    //SE ENTIENDE QUE ES EL VALOR DE LA CLAVE PARA LINKAR CON LA ENTIDAD PADRE
                    //ESTO SE UTILIZA PARA LOS FORMULARIOS PADRE->HIJO
                    if ($this->request['3'] != '')
                        $this->values['linkBy']['value'] = $this->request['3'];

                    //MOSTRAR DATOS. El ID viene en la posicion 2 del request
                    $datos = new $this->entity($this->request[2]);
                    if ($datos->getStatus()) {
                        $this->values['datos'] = $datos;
                        $this->values['errores'] = $datos->getErrores();
                    } else {
                        $this->values['errores'] = array("Valor no encontrado. El objeto que busca no existe. Es posible que haya sido eliminado por otro usuario.");
                    }
                    $template = $this->entity . '/form.html.twig';
                } else {
                    $template = '_global/forbiden.html.twig';
                }

                return array('template' => $template, 'values' => $this->values);
                break;

            case 'POST':
                //COGER DEL REQUEST EL LINK A LA ENTIDAD PADRE
                if ($this->values['linkBy']['id'] != '') {
                    $this->values['linkBy']['value'] = $this->request[$this->entity][$this->values['linkBy']['id']];
                }

                switch ($this->request['accion']) {
                    case 'Guardar': //GUARDAR DATOS
                        if ($this->values['permisos']['UP']) {
                            // Cargo la entidad
                            $datos = new $this->entity($this->request[$this->entity][$this->form->getPrimaryKey()]);
                            // Vuelco los datos del request
                            $datos->bind($this->request[$this->entity]);
                            if ($datos->valida($this->form->getRules())) {
                                $this->values['alertas'] = $datos->getAlertas();
                                $datos->save();

                                //Recargo el objeto para refrescar las propiedas que
                                //hayan podido ser objeto de algun calculo durante el proceso
                                //de guardado.
                                $datos = new $this->entity($this->request[$this->entity][$datos->getPrimaryKeyName()]);
                            } else {
                                $this->values['errores'] = $datos->getErrores();
                                $this->values['alertas'] = $datos->getAlertas();
                            }
                            $this->values['datos'] = $datos;
                            return array('template' => $this->entity . '/form.html.twig', 'values' => $this->values);
                        } else {
                            return array('template' => '_global/forbiden.html.twig', 'values' => $this->values);
                        }
                        break;

                    case 'Borrar': //BORRAR DATOS
                        if ($this->values['permisos']['DE']) {
                            $datos = new $this->entity($this->request[$this->entity][$this->form->getPrimaryKey()]);

                            if ($datos->erase()) {
                                $datos = new $this->entity();
                                $this->values['datos'] = $datos;
                                $this->values['errores'] = array();
                                unset($datos);
                                return array('template' => $this->entity . '/form.html.twig', 'values' => $this->values);
                            } else {
                                $this->values['datos'] = $datos;
                                $this->values['errores'] = $datos->getErrores();
                                $this->values['alertas'] = $datos->getAlertas();
                                unset($datos);
                                return array('template' => $this->entity . '/form.html.twig', 'values' => $this->values);
                            }
                        } else {
                            return array('template' => '_global/forbiden.html.twig', 'values' => $this->values);
                        }
                        break;
                }
                break;
        }
    }

    /**
     * Crea un registro nuevo
     *
     * Si viene por GET muestra un template vacio
     * Si viene por POST crea un registro
     *
     * @return array con el template y valores a renderizar
     */
    public function newAction() {

        if ($this->values['permisos']['IN']) {
            switch ($this->request["METHOD"]) {
                case 'GET': //MOSTRAR FORMULARIO VACIO
                    //SI EN LA POSICION 2 DEL REQUEST VIENE ALGO,
                    //SE ENTIENDE QUE ES EL VALOR DE LA CLAVE PARA LINKAR CON LA ENTIDAD PADRE
                    //ESTO SE UTILIZA PARA LOS FORMULARIOS PADRE->HIJO
                    if ($this->request['2'] != '')
                        $this->values['linkBy']['value'] = $this->request['2'];

                    $datos = new $this->entity();
                    $this->values['datos'] = $datos;
                    $this->values['errores'] = array();
                    $template = $this->entity . '/form.html.twig';
                    break;

                case 'POST': //CREAR NUEVO REGISTRO
                    //COGER EL LINK A LA ENTIDAD PADRE
                    if ($this->values['linkBy']['id'] != '') {
                        $this->values['linkBy']['value'] = $this->request[$this->entity][$this->values['linkBy']['id']];
                    }

                    $datos = new $this->entity();
                    $datos->bind($this->request[$this->entity]);

                    if ($datos->valida($this->form->getRules())) {
                        $datos->create();
                        $this->values['errores'] = $datos->getErrores();
                        $this->values['alertas'] = $datos->getAlertas();

                        //Recargo el objeto para refrescar las propiedas que
                        //hayan podido ser objeto de algun calculo durante el proceso
                        //de guardado.
                        $datos = new $this->entity($datos->getPrimaryKeyValue());
                        $this->values['datos'] = $datos;

                        $template = $this->entity . '/form.html.twig';
                    } else {
                        $this->values['datos'] = $datos;
                        $this->values['errores'] = $datos->getErrores();
                        $this->values['alertas'] = $datos->getAlertas();
                        $template = $this->entity . '/form.html.twig';
                    }
                    break;
            }
        } else {
            $template = '_global/forbiden.html.twig';
        }

        return array('template' => $template, 'values' => $this->values);
    }

    /**
     * Muestra el template de ayuda asociado al controlador
     * El nombre del template de ayuda está definido en el
     * nodo <help_file> del config.yml del controlador
     * Si no existiera, se muestra un template indicando esta
     * circunstancia
     *
     * @return array con el template a renderizar
     */
    public function helpAction() {
        $template = $this->entity . '/' . $this->form->getHelpFile();
        $file = "modules/" . $template;
        if (!is_file($file) or ($this->form->getHelpFile() == '')) {
            $template = "_help/noFound.html.twig";
        }

        $values['title'] = $this->form->getTitle();
        $values['idVideo'] = $this->form->getIdVideo();
        $values['urlVideo'] = $this->form->getUrlVideo();

        return array('template' => $template, 'values' => $values);
    }

    /**
     * Genera una listado por pantalla en base al filtro.
     * Puede recibir un filtro adicional
     *
     * @param string $aditionalFilter
     * @return array con el template y valores a renderizar
     */
    public function listAction($aditionalFilter = '') {

        if ($this->values['permisos']['CO']) {
            $this->values['listado'] = $this->listado->getAll($aditionalFilter);
            $template = $this->entity . '/list.html.twig';
        } else {
            $template = '_global/forbiden.html.twig';
        }

        return array('template' => $template, 'values' => $this->values);
    }

    /**
     * Genera un listado en formato PDF en base a los parametros obtenidos
     * del fichero listados.yml de cada controlador y los datos filtrados
     * segun el request
     * @return array Template y valores
     */
    public function listadoAction($aditionalFilter = '') {

        if ($this->values['permisos']['LI']) {
            // Lee la configuracion del listado
            $formato = new Form($this->entity, 'listados.yml');
            $parametros = $formato->getFormatoListado($this->request['formatoListado']);
            unset($formato);

            $this->values['archivo'] = $this->listado->getPdf($parametros, $aditionalFilter);
            $template = '_global/listadoPdf.html.twig';
        } else {
            $template = "_global/forbiden.html.twig";
        }

        return array('template' => $template, 'values' => $this->values);
    }

    /**
     * Renderiza el documento indicado en $this->values['archivo']
     * @return array Template y valores
     */
    public function imprimirAction() {
        if ($this->values['permisos']['LI']) {

            if ($this->request['METHOD'] == 'GET') {
                $idDocumento = $this->request['2'];
                $tipoDocumento = $this->request['3'];
                $formato = $this->request['4'];
            } else {
                $idDocumento = $this->request['idDocumento'];
                $tipoDocumento = $this->request['tipoDocumento'];
                $formato = $this->request['formato'];
            }

            $this->values['archivo'] = $this->generaPdf($tipoDocumento, array('0' => $idDocumento), $formato);
            $template = '_global/documentoPdf.html.twig';
        } else {
            $template = "_global/forbiden.html.twig";
        }

        return array('template' => $template, 'values' => $this->values,);
    }

    /**
     * Enviar por email el documento indicado en $this->values['archivo']
     * @return array Template y valores
     */
    public function enviarAction() {
        return array('template' => $this->entity . '/mail.html.twig', 'values' => $this->values,);
    }

    /**
     * Realiza el proceso de exportación de información en base a
     * los datos que le pasa cada controlador en $this->values['export']
     *
     * Puede generar distintos tipos de archivos (xml, excel).
     * Despues de generar el archivo, muestra un template para descargarlo
     *
     * @return array
     */
    public function exportarAction($aditionalFilter = '') {

        if ($this->values['permisos']['EX']) {

            if ($this->values['export']['title'] == '')
                $this->values['export']['title'] = $this->entity;

            switch ($this->request['exportType']) {
                case 'xml':
                    $this->values['export']['file'] = $this->listado->getXml($this->request['formatoListado'], $aditionalFilter);
                    break;
                case 'xls':
                    $this->values['export']['file'] = $this->listado->getXls($this->request['formatoListado'], $aditionalFilter);
                    break;
                case 'Yaml':
                    $this->values['export']['file'] = $this->listado->getYaml($this->request['formatoListado'], $aditionalFilter);
                    break;
                case 'cvs':
                    $this->values['export']['file'] = $this->listado->getCvs($this->request['formatoListado'], $aditionalFilter);
                    break;
            }

            $template = '_global/exportar.html.twig';
        } else {
            $template = '_global/forbiden.html.twig';
        }
        return array('template' => $template, 'values' => $this->values,);
    }

    /**
     * Sube o quita del servidor los documentos (imagenes, etc) asociados
     * a la entidad.
     *
     * @return array
     */
    public function DocumentoAction() {

        $tipo = $this->request['tipo'];
        if ($tipo == '')
            $tipo = "images";

        $idEntidad = $this->request[$this->entity][$this->form->getPrimaryKey()];

        switch ($this->request['accion']) {
            case 'Enviar':
                if ($this->values['permisos']['UP']) {

                    $path = "docs/docs" . $_SESSION['project']['folder'] . "/" . $tipo . "/" . $this->entity . "/" . $idEntidad . "_" . date('His');
                    $archivo = new Archivo($path);

                    if ($archivo->upLoad($_FILES['document'])) {
                        // Actualiza el registro de documentos/imagenes
                        if ($tipo == 'documents')
                            $doc = new CoreDocumentos();
                        else
                            $doc = new CoreImagenes();

                        $doc->setEntidad($this->entity);
                        $doc->setIdEntidad($idEntidad);
                        $doc->setPathName($path);
                        $doc->create();
                        unset($doc);
                    } else
                        $this->values['errores'][] = $archivo->getErrores();
                    unset($archivo);

                    $template = $this->entity . '/form.html.twig';
                } else {
                    $template = "_global/forbiden.html.twig";
                }
                break;

            case 'Quitar':
                if ($this->values['permisos']['DE']) {
                    $fileName = "docs/docs" . $_SESSION['project']['folder'] . "/" . $tipo . "/" . $this->entity . "/" . $this->request['documentoBorrar'];
                    if (file_exists($fileName)) {
                        if (unlink($fileName)) {
                            // Borro la entrada en el registro de documentos o imagenes
                            if ($tipo == 'documents')
                                $doc = new CoreDocumentos();
                            else
                                $doc = new CoreImagenes();
                            $objeto = $doc->getObjeto($this->entity, $idEntidad, $fileName);
                            $objeto->erase();
                            unset($doc);
                            unset($objeto);
                        }
                    }
                    $template = $this->entity . '/form.html.twig';
                } else {
                    $template = "_global/forbiden.html.twig";
                }
                break;
        }

        $this->values['datos'] = new $this->entity($idEntidad);
        return array('template' => $template, 'values' => $this->values);
    }

    /**
     * Actualiza el registro de accesos favoritos.
     * LLeva un contador de accesos para cada agente-url
     *
     * Si el acceso es al propio contralador de favoritos, no se tiene en cuenta
     *
     */
    protected function actualizaFavoritos() {

        switch ($this->request['METHOD']) {
            case 'POST':
                $url = $this->request['controller'];
                break;
            case 'GET':
                $url = $this->request[0];
                break;
        }


        if (($url != 'Favoritos') and ($url != 'Index')) {

            $idAgente = $_SESSION['USER']['user']['id'];
            $favorito = new Favoritos();
            $rows = $favorito->cargaCondicion("Id", "(IDAgente='{$idAgente}') and (Url='{$url}')");
            $row = $rows[0];
            if (!$row['Id']) {
                $favorito->setIDAgente($idAgente);
                $favorito->setTitulo($this->form->getTitle());
                $favorito->setUrl($url);
                $favorito->setAccesos(1);
                $favorito->create();
            } else {
                $favorito = new Favoritos($row['Id']);
                $favorito->setAccesos($favorito->getAccesos() + 1);
                $favorito->save();
            }
            unset($favorito);
        }
    }

    /**
     * Devuelve un array con el número ($nFavoritos) de accesos favoritos
     * del agente $idAgente
     *
     * @param integer $idAgente
     * @param integer $nFavoritos
     * @return array Los accesos favoritos
     */
    protected function getTopFavoritos($idAgente = '', $nFavoritos = 10) {

        $favoritos = array();
        $favorito = new Favoritos();

        if ($idAgente == '')
            $idAgente = $_SESSION['USER']['user']['id'];

        $favoritos = $favorito->cargaCondicion("*", "IDAgente='{$idAgente}'", "Accesos Desc limit {$nFavoritos}");
        unset($favorito);

        return $favoritos;
    }

    /**
     * Genera un documento pdf
     *
     * @param string $tipoDocumento El tipo de documento: albaranes, pedidos, etc.
     * @param array $idsDocumento Array con los ids de la entidad a imprimir. Ej. id de albaran, pedido, etc.
     * @param integer $formato El formato del documento (defecto=0)
     * @return string Nombre del archivo pdf generado con la ruta completa
     */
    protected function generaPdf($tipoDocumento, array $idsDocumento, $formato = 0) {

        // Cargo en un array el archivo de configuracion
        // del tipo de documento y formato
        $config = DocumentoPdf::getConfigFormato($tipoDocumento, $formato);

        // LLamo al método específico de cada controlador para que obtenga
        // la información necesaria del documento.
        // Le paso el array con los ids de documentos (ej: id de albaran, pedido, factura, etc)
        $datos = $this->getDatosDocumento($idsDocumento);

        // CREAR EL DOCUMENTO----------------------------------------------------
        $fichero = Archivo::getTemporalFileName();

        if ($fichero) {
            $pdf = new DocumentoPdf($config['orientation'], $config['unit'], $config['format']);
            $pdf->generaDocumento($config, $datos['master'], $datos['detail'], $fichero);
        }

        return $fichero;
    }

}

?>
