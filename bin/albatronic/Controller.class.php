<?php

/**
 * Description of Controller
 *
 * Controlador común a todos los módulos del Cpanel
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @date 24-agosto-2012 19:39
 */
class Controller {

    /**
     * Variables enviadas en el request por POST o por GET
     * @var array
     */
    protected $request;

    /**
     * Objeto de la clase 'form' con las propiedades y métodos
     * del formulario obtenidos del fichero de configuracion
     * del formulario en curso
     * @var array
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
     * String con el nombre de la app a la que pertenece el módulo
     * @var string
     */
    protected $app;

    /**
     * Indica si es el módulo raiz de la app
     * @var boolean
     */
    protected $isModuleRoot;

    /**
     * Array con las variables Web del modulo
     * @var array
     */
    protected $varWebMod;

    /**
     * Array con las variables de entorno del modulo
     * @var array
     */
    protected $varEnvMod;

    /**
     * Array con las variables Web de la app
     * @var array
     */
    protected $varWebApp;

    /**
     * Array con las variables de entorno de la app
     * @var array
     */
    protected $varEnvApp;

    /**
     * Array con las variables de entorno del proyecto
     * @var array
     */
    protected $varEnvPro;

    public function __construct($request) {

        // Cargar lo que viene en el request, incluidos los eventuales
        // ficheros a subir
        $this->request = $request;

        // Cargar la configuracion del modulo (modules/moduloName/config.yml)
        $this->form = new Form($this->entity);

        // Pongo la app a la que pertenece
        $this->app = $this->form->getNode('app');

        // Pongo si es o no el modulo raiz de la app
        $this->isModuleRoot = $this->form->getNode('isModuleRoot');

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

        // Cargar los includes del Head html
        $includesHead = $this->form->getIncludesHead();
        $this->values['twigCss'] = $includesHead['twigCss'];
        $this->values['twigJs'] = $includesHead['twigJs'];

        // Cargas las variables
        $this->cargaVariables();

        $this->values['atributos'] = $this->form->getAtributos($this->values['permisos']['enCurso']['modulo']);

        // Poner la solapa activa de los campos comunes
        ($this->request['solapaActiva'] == '') ? $this->values['solapaActiva'] = 'general' : $this->values['solapaActiva'] = $this->request['solapaActiva'];
    }

    public function IndexAction() {

        if ($this->values['permisos']['permisosModulo']['AC'])
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
                if ($this->values['permisos']['permisosModulo']['CO']) {
                    //SI EN LA POSICION 3 DEL REQUEST VIENE ALGO,
                    //SE ENTIENDE QUE ES EL VALOR DE LA CLAVE PARA LINKAR CON LA ENTIDAD PADRE
                    //ESTO SE UTILIZA PARA LOS FORMULARIOS PADRE->HIJO
                    if ($this->request['3'] != '')
                        $this->values['linkBy']['value'] = $this->request['3'];

                    //MOSTRAR DATOS. El ID viene en la posicion 2 del request
                    $datos = new $this->entity();
                    $datos = $datos->find('PrimaryKeyMD5', $this->request[2]);
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
                        if ($this->values['permisos']['permisosModulo']['UP']) {
                            // Cargo la entidad
                            $datos = new $this->entity($this->request[$this->entity][$this->form->getPrimaryKey()]);
                            // Vuelco los datos del request
                            $datos->bind($this->request[$this->entity]);

                            $rules = $this->form->getRules();
                            if ($datos->valida($rules)) {
                                $this->values['alertas'] = $datos->getAlertas();
                                if ($datos->save()) {

                                    if ($datos->getUrlTarget() == '') {
                                        $this->gestionUrlMeta($datos);

                                        // Salvar los campos Controller, action, template y parameters
                                        // del objeto CpanUrlAmigables asociado
                                        if ($this->request['objetoUrlAmigable']) {
                                            $arrayUrlAmigable = $this->request['objetoUrlAmigable'];
                                            $objetoUrl = new CpanUrlAmigables($arrayUrlAmigable['Id']);
                                            $objetoUrl->setController($arrayUrlAmigable['Controller']);
                                            $objetoUrl->setAction($arrayUrlAmigable['Action']);
                                            $objetoUrl->setTemplate($arrayUrlAmigable['Template']);
                                            $objetoUrl->setParameters($arrayUrlAmigable['Parameters']);

                                            if (!$objetoUrl->save())
                                                $this->values['errores'] = $objetoUrl->getErrores();

                                            unset($objetoUrl);
                                        }
                                    }
                                }

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

                    case 'Borrar': //MARCA EL OBJETO COMO BORRADO, PERO NO BORRA FÍSICAMENTE
                        if ($this->values['permisos']['permisosModulo']['DE']) {
                            $datos = new $this->entity($this->request[$this->entity][$this->form->getPrimaryKey()]);

                            if ($datos->delete()) {
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

        if ($this->values['permisos']['permisosModulo']['IN']) {

            switch ($this->request["METHOD"]) {
                case 'GET': //MOSTRAR FORMULARIO VACIO
                    //SI EN LA POSICION 2 DEL REQUEST VIENE ALGO,
                    //SE ENTIENDE QUE ES EL VALOR DE LA CLAVE PARA LINKAR CON LA ENTIDAD PADRE
                    //ESTO SE UTILIZA PARA LOS FORMULARIOS PADRE->HIJO
                    if ($this->request['2'] != '')
                        $this->values['linkBy']['value'] = $this->request['2'];

                    $datos = new $this->entity();
                    $datos->setDefaultValues((array) $this->varEnvMod['columns']);
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

                    $rules = $this->form->getRules();
                    $rules['GLOBALES']['numMaxPages'] = $this->varEnvPro['numMaxPages'];
                    $rules['GLOBALES']['numMaxRecords'] = $this->varEnvMod['numMaxRecords'];

                    if ($datos->valida($rules)) {
                        $lastId = $datos->create();
                        $this->values['errores'] = $datos->getErrores();
                        $this->values['alertas'] = $datos->getAlertas();

                        //Recargo el objeto para refrescar las propiedades que
                        //hayan podido ser objeto de algun calculo durante el proceso
                        //de guardado y pongo valores por defecto (urlamigable, etc)
                        if (($lastId) and ($datos->getUrlTarget() == '')) {
                            $datos = new $this->entity($lastId);
                            $this->gestionUrlMeta($datos);
                            $this->values['errores'] = $datos->getErrores();
                            $this->values['alertas'] = $datos->getAlertas();
                        }
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

        if ($this->values['permisos']['permisosModulo']['CO']) {
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

        if ($this->values['permisos']['permisosModulo']['LI']) {
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
        if ($this->values['permisos']['permisosModulo']['LI']) {

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

        if ($this->values['permisos']['permisosModulo']['EX']) {

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
    public function ImagenAction() {

        $rules = array(
            'allowTypes' => split(",", $this->varEnvPro['allowTypes']),
            'maxFileSize' => $this->varEnvMod['maxSizes']['image'], // Tamaño expresado en bytes
        );

        $idEntidad = $this->request[$this->entity][$this->form->getPrimaryKey()];

        switch ($this->request['accion']) {
            case 'EnviarMaster':
                if ($this->values['permisos']['permisosModulo']['UP']) {

                    $variables = new CpanVariables('Mod', 'Env', $this->entity);
                    $varEnv = $variables->getValores();
                    unset($variables);
                    $datos = new $this->entity($idEntidad);
                    $columnaSlug = $varEnv['fieldGeneratorUrlFriendly'];
                    $slug = $datos->{"get$columnaSlug"}();
                    unset($datos);

                    $doc = new CpanDocs();
                    $doc->setArrayDoc($_FILES['imagenMaster']);
                    if ($doc->validaArchivo($rules)) {

                        // Borrar las eventuales imagenes que existieran
                        $img = new CpanDocs();
                        $img->borraDocs($this->entity, $idEntidad, 'image%');
                        unset($img);

                        foreach ($this->varEnvMod['images'] as $key => $value)
                            if ($value['visible'] == '1') {

                                $_FILES['imagenMaster']['maxWidth'] = $value['width'];
                                $_FILES['imagenMaster']['maxHeight'] = $value['height'];

                                $doc = new CpanDocs();
                                $doc->setEntity($this->entity);
                                $doc->setIdEntity($idEntidad);
                                $doc->setPathName($this->entity . $idEntidad);
                                $doc->setName($slug);
                                $doc->setTitle($slug);
                                $doc->setType('image' . $key);
                                $doc->setArrayDoc($_FILES['imagenMaster']);
                                $doc->setIsThumbnail(0);
                                if ($doc->valida($rules))
                                    $lastId = $doc->create();
                                $this->values['errores'] = $doc->getErrores();
                                if (count($doc->getErrores())) {
                                    $doc->borraDocs($this->entity, $idEntidad, 'image%');
                                    $lastId = 0;
                                }

                                // Subir Miniatura
                                if (($lastId) and ($value['generateThumbnail'] == '1')) {

                                    $_FILES['imagenMaster']['maxWidth'] = $value['widthThumbnail'];
                                    $_FILES['imagenMaster']['maxHeight'] = $value['heightThumbnail'];
                                    $doc = new CpanDocs();
                                    $doc->setEntity($this->entity);
                                    $doc->setIdEntity($idEntidad);
                                    $doc->setPathName($this->entity . $idEntidad);
                                    $doc->setName($slug);
                                    $doc->setTitle($slug);
                                    $doc->setType('image' . $key);
                                    $doc->setArrayDoc($_FILES['imagenMaster']);
                                    $doc->setIsThumbnail(1);
                                    $doc->setBelongsTo($lastId);
                                    if ($doc->valida($rules))
                                        $ok = $doc->create();
                                    if (!$ok)
                                        $this->values['errores'] = $doc->getErrores();
                                }
                            }
                    } else
                        $this->values['errores'] = $doc->getErrores();

                    $template = $this->entity . '/form.html.twig';
                } else {
                    $template = "_global/forbiden.html.twig";
                }
                break;

            case 'GuardarCambios':
                if ($this->values['permisos']['permisosModulo']['UP']) {

                    $idImagen = $this->request['idImagenEnviar'];

                    $id = $this->request['image'][$idImagen]['Id'];
                    $tipo = $this->request['image'][$idImagen]['Tipo'];
                    $title = trim($this->request['image'][$idImagen]['Title']);
                    $slug = trim($this->request['image'][$idImagen]['Name']);
                    $showCaption = $this->request['image'][$idImagen]['ShowCaption'];
                    $orden = $this->request['image'][$idImagen]['SortOrder'];
                    $publicar = $this->request['image'][$idImagen]['Publish'];
                    $documento = $this->request['FILES'][$tipo];
                    $documento['maxWidth'] = $this->varEnvMod['images'][$idImagen]['width'];
                    $documento['maxHeight'] = $this->varEnvMod['images'][$idImagen]['height'];

                    $doc = new CpanDocs($id);
                    $doc->setTitle($title);
                    $doc->setName($slug);
                    $doc->setShowCaption($showCaption);
                    $doc->setSortOrder($orden);
                    $doc->setPublish($publicar);
                    if ($documento['name'] != '')
                        $doc->setArrayDoc($documento);
                    $doc->setIsThumbnail(0);
                    if ($doc->valida($rules)) {
                        $ok = $doc->actualiza();
                        // Subir Miniatura
                        if (($ok) and ($this->varEnvMod['images'][$idImagen]['generateThumbnail'] == '1')) {
                            $thumbNail = $doc->getThumbNail();
                            $thumbNail->setTitle($title);
                            $thumbNail->setName($slug);
                            $thumbNail->setShowCaption($showCaption);
                            $thumbNail->setSortOrder($orden);
                            $thumbNail->setIsThumbnail(1);
                            if ($documento['name'] != '') {
                                $documento['maxWidth'] = $this->varEnvMod['images'][$idImagen]['widthThumbnail'];
                                $documento['maxHeight'] = $this->varEnvMod['images'][$idImagen]['heightThumbnail'];
                                $thumbNail->setArrayDoc($documento);
                            }
                            if ($thumbNail->valida($rules)) {

                                $ok = $thumbNail->actualiza();
                            }


                            unset($thumbNail);
                        }
                    }

                    $template = $this->entity . '/form.html.twig';
                } else {
                    $template = "_global/forbiden.html.twig";
                }
                break;

            case 'Quitar':
                if ($this->values['permisos']['permisosModulo']['DE']) {
                    $idImagen = $this->request['idImagenEnviar'];
                    $tipo = $this->request['image'][$idImagen]['Tipo'];
                    $img = new CpanDocs();
                    if (!$img->borraDocs($this->entity, $idEntidad, $tipo))
                        $this->values['errores'] = $img->getErrores();
                    unset($img);
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

    /**
     * Crea o actualiza la url amigable y el metatagTitle
     *
     * @param array $datos
     */
    private function gestionUrlMeta($datos) {

        $objetoAuxuliar = new $this->entity($datos->getPrimaryKeyValue());

        if ($this->varEnvMod['urlFriendlyManagement'])
            $urlAmigable = $this->calculaUrlAmigable($objetoAuxuliar);

        if ($this->varEnvMod['metatagTitleManagement'])
            $metatagTitle = $this->calculaMetatagTitle($objetoAuxuliar);

        unset($objetoAuxuliar);

        if (count($urlAmigable) or ($metatagTitle != '')) {

            if ($urlAmigable != '') {
                $datos->setUrlPrefix($urlAmigable['prefix']);
                $datos->setSlug($urlAmigable['slug']);
                $datos->setUrlFriendly($urlAmigable['url']);
            }

            if ($metatagTitle != '') {
                $datos->setMetatagTitle($metatagTitle);
            }

            $datos->save();
        }
    }

    protected function calculaUrlAmigable($datos) {

        $urlPrefix = '';
        $urlAmigable = '';
        $slug = '';

        $columnaSlug = $this->varEnvMod['fieldGeneratorUrlFriendly'];

        // Si hay que generar la url amigable
        if ($columnaSlug) {

            $bloqueoUrlPrefix = ( $datos->getLockUrlPrefix()->getIDTipo() == '1' );
            $datos->setLockUrlPrefix($bloqueoUrlPrefix);
            $bloqueoSlug = ( $datos->getLockSlug()->getIDTipo() == '1' );
            $datos->setLockSlug($bloqueoSlug);
            $perteneceA = $datos->getBelongsTo()->getPrimaryKeyValue();

            // CALCULAR EL PREFIJO DE LA URL -----------------------------------
            //
            // Si está bloqueado el prefijo, se calcula
            if ($bloqueoUrlPrefix) {

                if ($this->isModuleRoot) {
                    // Es el módulo padre de la app
                    if ($perteneceA) {
                        $objetoPadre = new $this->entity($perteneceA);
                        if ($objetoPadre->getUrlHeritable() == '1') {
                            $urlPrefix = $objetoPadre->getUrlFriendly();
                        } else {
                            $urlPrefix = "/" . $this->varEnvApp['globales']['urlPrefix'];
                        }
                        unset($objetoPadre);
                    } else {
                        $urlPrefix = "/" . $this->varEnvApp['globales']['urlPrefix'];
                    }
                } else {
                    // No es el módulo padre de la app. Miro a ver si
                    // está linkado con otro módulo
                    $linkModule = $this->form->getNode('linkModule');
                    if (($linkModule['fromColumn'] != '') and ($linkModule['toEntity'] != '') and ($linkModule['toColumn'] != '')) {
                        // Está linkado con otro módulo. El prefijo será la url amigable
                        // del padre si es heradable

                        $moduloPadre = new $linkModule['toEntity']($datos->getColumnValue($linkModule['fromColumn']));
                        if ($moduloPadre->getUrlHeritable() == '1') {
                            $urlPrefix = $moduloPadre->getUrlFriendly();
                        } else {
                            $urlPrefix = "/" . $this->varEnvApp['globales']['urlPrefix'];
                        }
                        unset($moduloPadre);
                    }
                }
            } else {
                // Si no está bloqueado, se toma el indicado por el usuario y se limpia
                $urlPrefix = Textos::limpia($datos->getUrlPrefix());
                if ($urlPrefix)
                    $urlPrefix = "/" . $urlPrefix;
            }
            // -----------------------------------------------------------------
            // CALCULAR EL SLUG ------------------------------------------------
            //
            // Si está bloquedo el slug, se calcula
            if ($bloqueoSlug) {
                $slug = $datos->{"get$columnaSlug"}();
            } else {
                // Si no está bloqueado, se toma el indicado por el usuario
                $slug = $datos->getSlug();
            }

            $slug = Textos::limpia($slug);
            // -----------------------------------------------------------------
            // Construir la url amigable, límito su longitud al valor indicado
            // en la variable de entorno del proyecto
            if ($urlPrefix != '')
                $urlAmigable = $urlPrefix;
            $urlAmigable .= "/{$slug}";
            $urlAmigable = str_replace("//", "/", $urlAmigable);
            $urlAmigable = substr($urlAmigable, 0, $this->varEnvPro['maxLengthUrlsFriendly']);

            $urls = new CpanUrlAmigables();
            $rows = $urls->cargaCondicion("Id", "Entity='{$this->entity}' and IdEntity='{$datos->getPrimaryKeyValue()}'");
            $idUrl = $rows[0]['Id'];

            if (!$idUrl) {
                $urls->setUrlFriendly($this->entity . $datos->getPrimaryKeyValue());
                $urls->setController($this->varEnvMod['controller']);
                $urls->setAction($this->varEnvMod['action']);
                $urls->setTemplate($this->varEnvMod['template']);
                $urls->setParameters($this->varEnvMod['parametros']);
                $urls->setEntity($this->entity);
                $urls->setIdEntity($datos->getPrimaryKeyValue());
                $idUrl = $urls->create();
            }

            $rows = $urls->cargaCondicion("Id, Entity, IdEntity", "(UrlFriendly='{$urlAmigable}')");
            $row = $rows[0];
            if (($row['Id']) and ($row['Entity'] != "{$this->entity}" or $row['IdEntity'] != "{$datos->getPrimaryKeyValue()}")) {
                // Ya existe esa url amigable, le pongo al final el id
                $urlAmigable .= "-" . $idUrl;
                $slug .= "-" . $idUrl;
            }
            $urls = new CpanUrlAmigables($idUrl);
            $urls->setUrlFriendly($urlAmigable);
            $urls->setController($this->varEnvMod['controller']);
            $urls->setAction($this->varEnvMod['action']);
            $urls->setTemplate($this->varEnvMod['template']);
            $urls->setParameters($this->varEnvMod['parametros']);
            $urls->setEntity($this->entity);
            $urls->setIdEntity($datos->getPrimaryKeyValue());
            $urls->save();
        }

        $array = array();

        if ($urlPrefix . $urlAmigable . $slug)
            $array = array(
                'prefix' => $urlPrefix,
                'url' => $urlAmigable,
                'slug' => $slug,
            );

        return $array;
    }

    protected function calculaMetatagTitle($datos) {

        // Obtener el metatagtitle

        $bloqueoMetatagTitle = ($datos->getLockMetatagTitle()->getIDTipo() == '1');
        $datos->setLockMetatagTitle($bloqueoMetatagTitle);

        if ($bloqueoMetatagTitle) {
            $columnaMetatagTitle = $this->varEnvMod['fieldGeneratorMetatagTitle'];
            if ($columnaMetatagTitle != '')
                $metatagTitle = $datos->{"get$columnaMetatagTitle"}();
        } else
            $metatagTitle = $datos->getMetatagTitle();

        return $metatagTitle;
    }

    protected function cargaVariables() {

        // Variables de entorno del proyecto
        if (!isset($_SESSION['VARIABLES']['EnvPro'])) {
            $variables = new CpanVariables('Pro', 'Env');
            $this->varEnvPro = $variables->getValores();
            $_SESSION['VARIABLES']['EnvPro'] = $this->varEnvPro;
        } else
            $this->varEnvPro = $_SESSION['VARIABLES']['EnvPro'];
        $this->values['varEnvPro'] = $this->varEnvPro;

        if (count($this->values['varEnvPro']) == 0)
            $this->values['errores'][] = "No se han definido las variables de entorno del proyecto";

        // Variables de entorno del modulo
        $variables = new CpanVariables('Mod', 'Env', $this->entity);
        $this->varEnvMod = $variables->getValores();
        $this->values['varEnvMod'] = $this->varEnvMod;
        if (count($this->values['varEnvMod']) == 0)
            $this->values['errores'][] = "No se han definido las variables de entorno del módulo";

        // Variables web del modulo
        if (!isset($_SESSION['VARIABLES']['WebMod'])) {
            $variables = new CpanVariables('Mod', 'Web', $this->entity);
            $this->varWebMod = $variables->getValores();
            $_SESSION['VARIABLES']['WebMod'] = $this->varWebMod;
        } else
            $this->varWebMod = $_SESSION['VARIABLES']['WebMod'];
        $this->values['varWebMod'] = $this->varWebMod;
        if (count($this->values['varWebMod']) == 0)
            $this->values['errores'][] = "No se han definido las variables web del módulo";

        // Variables de entorno de la app
        if (!isset($_SESSION['VARIABLES']['EnvApp'])) {
            $variables = new CpanVariables('App', 'Env', $this->app);
            $this->varEnvApp = $variables->getValores();
            $_SESSION['VARIABLES']['EnvApp'] = $this->varEnvApp;
        } else
            $this->varEnvApp = $_SESSION['VARIABLES']['EnvApp'];
        $this->values['varEnvApp'] = $this->varEnvApp;
        if (count($this->values['varEnvApp']) == 0)
            $this->values['errores'][] = "No se han definido las variables de entorno de la App";

        // Variables web de la app
        if (!isset($_SESSION['VARIABLES']['WebApp'])) {
            $variables = new CpanVariables('App', 'Web', $this->app);
            $this->varWebApp = $variables->getValores();
            $_SESSION['VARIABLES']['WebApp'] = $this->varWebApp;
        } else
            $this->varWebApp = $_SESSION['VARIABLES']['WebApp'];
        $this->values['varWebApp'] = $this->varWebApp;
        if (count($this->values['varWebApp']) == 0)
            $this->values['errores'][] = "No se han definido las variables web de la App";

        unset($variables);
    }

}

?>
