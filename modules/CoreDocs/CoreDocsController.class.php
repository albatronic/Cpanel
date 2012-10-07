<?php

/**
 * CONTROLLER FOR CoreDocs
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL
 * @date 30.09.2012 21:04:21

 * Extiende a la clase controller
 */
class CoreDocsController extends Controller {

    protected $entity = "CoreDocs";
    protected $parentEntity = "";

    public function __construct($request) {
        parent::__construct($request);

        $variables = new CoreVariables('Mod', 'Env', $this->entity);
        $this->varEnvMod = $variables->getValores();
        $this->values['varEnvMod'] = $this->varEnvMod;

        $variables = new CoreVariables('Mod', 'Web', $this->entity);
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
            $variables = new CoreVariables('Mod', 'Env', $entidad);
            $this->varEnvMod = $variables->getValores();
            unset($variables);
            //$this->values['varEnvMod'] = $this->varEnvMod;
            // Añadir un documento nuevo vacio
            $objetoNuevo = new CoreDocs();
            $objetoNuevo->setEntity($entidad);
            $objetoNuevo->setIdEntity($idEntidad);
            $objetoNuevo->setType($tipo);
            $lineas[] = $objetoNuevo;
            unset($objetoNuevo);

            $lis = new CoreDocs();
            $filtro = "Entity='{$entidad}' AND IdEntity='{$idEntidad}' AND Type='{$tipo}' AND IsThumbnail='0'";
            $rows = $lis->cargaCondicion('Id', $filtro, 'SortOrder ASC');
            foreach ($rows as $row) {
                $lineas[] = new CoreDocs($row['Id']);
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
            $template = 'CoreDocs/form.html.twig';

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

                    $variables = new CoreVariables('Mod', 'Env', $entidad);
                    $this->varEnvMod = $variables->getValores();
                    unset($variables);
                    $this->values['varEnvMod'] = $this->varEnvMod;

                    $datos = new CoreDocs();
                    $datos->bind($this->request['CoreDocs']);
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
                                    $documento = $datos->getArrayDoc();
                                    $documento['maxWidth'] = $this->varEnvMod['galery']['widthThumbnail'];
                                    $documento['maxHeight'] = $this->varEnvMod['galery']['heightThumbnail'];
                                    $datos->setArrayDoc($documento);
                                    $datos->setIsThumbnail(1);
                                    $lastId = $datos->create();
                                }
                                $this->values['alertas'] = $datos->getAlertas();

                                //Recargo el objeto para refrescar las propiedas que
                                //hayan podido ser objeto de algun calculo durante el proceso
                                //de guardado.
                                $datos = new CoreDocs($lastId);
                                $this->values['datos'] = $datos;
                            } else {
                                $this->values['datos'] = $datos;
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
                                $datos = new CoreDocs($lastId);
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

                    $id = $this->request[$this->entity]['Id'];
                    $entidad = $this->request[$this->entity]['Entity'];
                    $idEntidad = $this->request[$this->entity]['IdEntity'];
                    $tipo = $this->request[$this->entity]['Type'];
                    $title = $this->request[$this->entity]['Title'];
                    $slug = $this->request[$this->entity]['Name'];
                    $showCaption = $this->request[$this->entity]['ShowCaption'];
                    $orden = $this->request[$this->entity]['SortOrder'];
                    $documento = $this->request['FILES']['documento' . $id];
                    $documento['maxWidth'] = $this->varEnvMod['galery']['maxWidthImage'];
                    $documento['maxHeight'] = $this->varEnvMod['galery']['maxHeightImage'];

                    $rules = $this->getRules($this->request[$this->entity]['Type']);
                    // Para que deje actualizar aunque estemos en el límite del
                    // número máximo de documentos
                    $rules['numMaxDocs'] ++;

                    if ($documento['tmp_name']) {
                        $doc = new CoreDocs();
                        $doc->setArrayDoc($documento);
                        $ok = $doc->validaArchivo($rules);
                        if (!$ok)
                            $this->values['errores'] = $doc->getErrores();
                    } else
                        $ok = 1;

                    if ($ok) {
                        $doc = new CoreDocs($id);
                        $ok = $doc->actualiza($title, $slug, $showCaption, $documento, 0, $orden);
                    }

                    $this->values['errores'] = $doc->getErrores();
                    $this->values['alertas'] = $doc->getAlertas();
                    unset($doc);

                    return $this->listAction($entidad, $idEntidad, $tipo);
                } else {
                    return array('template' => '_global/forbiden.html.twig');
                }
                break;

            case 'B': //BORRAR DATOS
                if ($this->values['permisos']['permisosModulo']['DE']) {

                    $entidad = $this->request[$this->entity]['Entity'];
                    $idEntidad = $this->request[$this->entity]['IdEntity'];
                    $tipo = $this->request[$this->entity]['Type'];

                    $datos = new CoreDocs($this->request[$this->entity]['Id']);

                    if (!$datos->erase()) {
                        $this->values['datos'] = $datos;
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