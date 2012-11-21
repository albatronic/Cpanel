<?php

/**
 * CONTROLLER FOR CpanDocs
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL
 * @date 30.09.2012 21:04:21

 * Extiende a la clase controller
 */
class CpanDocsController extends Controller {

    protected $entity = "CpanDocs";
    protected $parentEntity = "";

    public function __construct($request) {
        parent::__construct($request);

        $variables = new CpanVariables('Mod', 'Env', $this->entity);
        $this->varEnvMod = $variables->getValores();
        $this->values['varEnvMod'] = $this->varEnvMod;

        $variables = new CpanVariables('Mod', 'Web', $this->entity);
        $this->varWebMod = $variables->getValores();
        $this->values['varWebMod'] = $this->varWebMod;
    }

    public function listAction($entidad = '', $idEntidad = '', $tipo = '') {

        if ($this->values['permisos']['permisosModulo']['CO']) {

            if ($entidad == '')
                $entidad = $this->request[2];
            if ($idEntidad == '')
                $idEntidad = $this->request[3];
            if ($tipo == '')
                $tipo = $this->request[4];

            // Leer las variables de entorno del módulo en curso
            $variables = new CpanVariables('Mod', 'Env', $entidad);
            $this->varEnvMod = $variables->getValores();
            unset($variables);
            //$this->values['varEnvMod'] = $this->varEnvMod;
            // Añadir un documento nuevo vacio
            $objetoNuevo = new CpanDocs();
            $objetoNuevo->setEntity($entidad);
            $objetoNuevo->setIdEntity($idEntidad);
            $objetoNuevo->setType($tipo);
            $lineas[] = $objetoNuevo;
            unset($objetoNuevo);

            $lis = new CpanDocs();
            $filtro = "Entity='{$entidad}' AND IdEntity='{$idEntidad}' AND Type='{$tipo}' AND IsThumbnail='0'";
            $rows = $lis->cargaCondicion('Id', $filtro, 'SortOrder ASC');
            foreach ($rows as $row) {
                $lineas[] = new CpanDocs($row['Id']);
            }

            unset($lis);

            // Tamaño máximo del archivo
            switch ($tipo) {
                case 'galery':
                    $maxFileSize = $this->varEnvMod['maxSizes']['image'];
                    break;
                case 'document':
                case 'video':
                case 'audio':
                    $maxFileSize = $this->varEnvMod['maxSizes'][$tipo];
                    break;
            }

            $this->values['maxFileSize'] = $maxFileSize;
            $this->values['listado']['data'] = $lineas;
            $template = 'CpanDocs/form.html.twig';

            return array('template' => $template, 'values' => $this->values);
        } else {
            return array('template' => '_global/forbiden.html.twig');
        }
    }

    /**
     * Crea un registro nuevo
     *
     * Siempre viene por POST
     * Si viene por POST crea un registro
     *
     * @return array con el template y valores a renderizar
     */
    public function newAction() {

        if ($this->values['permisos']['permisosModulo']['IN']) {
            switch ($this->request["METHOD"]) {

                case 'POST': //CREAR NUEVO REGISTRO
                    $entidad = $this->request[$this->entity]['Entity'];
                    $idEntidad = $this->request[$this->entity]['IdEntity'];
                    $tipo = $this->request[$this->entity]['Type'];

                    $variables = new CpanVariables('Mod', 'Env', $entidad);
                    $this->varEnvMod = $variables->getValores();
                    unset($variables);
                    $this->values['varEnvMod'] = $this->varEnvMod;

                    $datos = new CpanDocs();
                    $datos->bind($this->request['CpanDocs']);
                    $datos->setArrayDoc($this->request['FILES']['documento']);

                    $rules = $this->getRules($this->request[$this->entity]['Type']);

                    switch ($this->request[$this->entity]['Type']) {
                        case 'galery':
                            if ($datos->valida($rules)) {
                                $documento = $datos->getArrayDoc();
                                $documento['maxWidth'] = $this->varEnvMod['galery']['maxWidthImage'];
                                $documento['maxHeight'] = $this->varEnvMod['galery']['maxHeightImage'];
                                $datos->setArrayDoc($documento);
                                $lastId = $datos->create();
                                if (!$lastId)
                                    $this->values['errores'] = $datos->getErrores();

                                // Subir Miniatura
                                if (($lastId) and ($this->varEnvMod['galery']['generateThumbnail'] == '1')) {
                                    $thumb = new CpanDocs();
                                    $thumb->bind($this->request['CpanDocs']);
                                    $thumb->setBelongsTo($lastId);
                                    $documento = $this->request['FILES']['documento'];
                                    $documento['maxWidth'] = $this->varEnvMod['galery']['widthThumbnail'];
                                    $documento['maxHeight'] = $this->varEnvMod['galery']['heightThumbnail'];
                                    $thumb->setArrayDoc($documento);
                                    $thumb->setIsThumbnail(1);
                                    if ($thumb->valida($rules))
                                        $lastId = $thumb->create();
                                    $this->values['errores'] = $thumb->getErrores();
                                }
                            } else {
                                $this->values['errores'] = $datos->getErrores();
                            }
                            break;
                        case 'document':
                        case 'video':
                        case 'audio':
                            if ($datos->valida($rules)) {

                                $lastId = $datos->create();
                                if (!$lastId)
                                    $this->values['errores'] = $datos->getErrores();

                                $this->values['alertas'] = $datos->getAlertas();

                                //Recargo el objeto para refrescar las propiedas que
                                //hayan podido ser objeto de algun calculo durante el proceso
                                //de guardado.
                                $datos = new CpanDocs($lastId);
                                $this->values['datos'] = $datos;
                            } else {
                                $this->values['datos'] = $datos;
                                $this->values['errores'] = $datos->getErrores();
                            }
                            break;
                    }

                    return $this->listAction($entidad, $idEntidad, $tipo);
                    break;
            }
        } else {
            return array('template' => '_global/forbiden.html.twig');
        }
    }

    /**
     * Edita, actualiza o borrar un registro
     *
     * Viene siempre por POST
     * Actualiza o Borrar según el valor de $this->request['accion']
     *
     * @return array con el template y valores a renderizar
     */
    public function editAction() {

        switch ($this->request['accion']) {
            case 'G': //GUARDAR DATOS
                if ($this->values['permisos']['permisosModulo']['UP']) {

                    $variables = new CpanVariables('Mod', 'Env', $this->request[$this->entity]['Entity']);
                    $this->varEnvMod = $variables->getValores();
                    unset($variables);
                    $this->values['varEnvMod'] = $this->varEnvMod;

                    $id = $this->request[$this->entity]['Id'];
                    $entidad = $this->request[$this->entity]['Entity'];
                    $idEntidad = $this->request[$this->entity]['IdEntity'];
                    $tipo = $this->request[$this->entity]['Type'];
                    $title = $this->request[$this->entity]['Title'];
                    $slug = $this->request[$this->entity]['Name'];
                    $showCaption = $this->request[$this->entity]['ShowCaption'];
                    $orden = $this->request[$this->entity]['SortOrder'];
                    $documento = $this->request['FILES']['documento'];
                    $documento['maxWidth'] = $this->varEnvMod['galery']['maxWidthImage'];
                    $documento['maxHeight'] = $this->varEnvMod['galery']['maxHeightImage'];

                    $rules = $this->getRules($this->request[$this->entity]['Type']);
                    // Para que deje actualizar aunque estemos en el límite del
                    // número máximo de documentos
                    $rules['numMaxDocs']++;

                    $doc = new CpanDocs($id);
                    $doc->setTitle($title);
                    $doc->setName($slug);
                    $doc->setShowCaption($showCaption);
                    $doc->setSortOrder($orden);
                    if ($documento['name'] != '')
                        $doc->setArrayDoc($documento);
                    $doc->setIsThumbnail(0);
                    if ($doc->valida($rules)) {
                        $ok = $doc->actualiza();
                        // Subir Miniatura
                        if (($ok) and ($this->varEnvMod['galery']['generateThumbnail'] == '1')) {
                            $thumbNail = $doc->getThumbNail();
                            $thumbNail->setTitle($title);
                            $thumbNail->setName($slug);
                            $thumbNail->setShowCaption($showCaption);
                            $thumbNail->setSortOrder($orden);
                            $thumbNail->setIsThumbnail(1);
                            if ($documento['name'] != '') {
                                $documento['maxWidth'] = $this->varEnvMod['galery']['widthThumbnail'];
                                $documento['maxHeight'] = $this->varEnvMod['galery']['heightThumbnail'];
                                $thumbNail->setArrayDoc($documento);
                            }
                            if ($thumbNail->valida($rules))
                                $ok = $thumbNail->actualiza();

                            unset($thumbNail);
                        }
                    }

                    $this->values['errores'] = $doc->getErrores();
                    $this->values['alertas'] = $doc->getAlertas();
                    unset($doc);

                    return $this->listAction($entidad, $idEntidad, $tipo);
                } else
                    return array('template' => '_global/forbiden.html.twig');

                break;

            case 'B': //BORRAR DATOS
                if ($this->values['permisos']['permisosModulo']['DE']) {

                    $id = $this->request[$this->entity]['Id'];
                    $entidad = $this->request[$this->entity]['Entity'];
                    $idEntidad = $this->request[$this->entity]['IdEntity'];
                    $tipo = $this->request[$this->entity]['Type'];

                    $datos = new CpanDocs($id);

                    if ($datos->erase()) {
                        // Borro los eventuales hijos del documento ( los thumbnails)
                        $thumbNail = new CpanDocs();
                        $rows = $thumbNail->cargaCondicion('Id', "BelongsTo='{$id}'");
                        foreach ($rows as $row) {
                            $thumbNail = new CpanDocs($row['Id']);
                            $thumbNail->erase();
                        }
                        unset($thumbNail);

                        //$this->values['datos'] = $datos;
                        $this->values['errores'] = $datos->getErrores();
                    }
                    unset($datos);
                    return $this->listAction($entidad, $idEntidad, $tipo);
                } else {
                    return array('template' => '_global/forbiden.html.twig');
                }
                break;
        }
    }

    private function getRules($tipoDocumento) {

        $rules['allowTypes'] = split(",", $this->varEnvPro['allowTypes']);
        $rules['type'] = $tipoDocumento;

        switch ($tipoDocumento) {
            case 'galery':
                $rules['maxFileSize'] = $this->varEnvMod['maxSizes']['image'];
                $rules['numMaxDocs'] = $this->varEnvPro['numMaxGalery'];
                break;
            case 'document':
                $rules['maxFileSize'] = $this->varEnvMod['maxSizes']['document'];
                $rules['numMaxDocs'] = $this->varEnvPro['numMaxDocuments'];
                break;
            case 'video':
                $rules['maxFileSize'] = $this->varEnvMod['maxSizes']['video'];
                $rules['numMaxDocs'] = $this->varEnvPro['numMaxVideos'];
                break;
            case 'audio':
                $rules['maxFileSize'] = $this->varEnvMod['maxSizes']['audio'];
                $rules['numMaxDocs'] = $this->varEnvPro['numMaxAudios'];
                break;
        }

        return $rules;
    }

}

?>