<?php

/**
 * CONTROLLER FOR GconContenidosRelacionados
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL
 * @date 01.11.2012 00:08:45

 * Extiende a la clase controller
 */
class GconContenidosRelacionadosController extends Controller {

    protected $entity = "GconContenidosRelacionados";
    protected $parentEntity = "";

    public function __construct($request) {

        // Cargar lo que viene en el request
        $this->request = $request;

        // Cargar la configuracion del modulo (modules/moduloName/config.yaml)
        $this->form = new Form($this->entity);

        $this->values['request'] = $this->request;
    }

    public function indexAction($idContenido = '') {

        if ($idContenido == '')
            $idContenido = $this->request[2];

        return $this->listAction($idContenido);
    }

    public function listAction($idContenidoOrigen = '') {

        if ($idContenidoOrigen == '')
            $idContenidoOrigen = $this->request[2];

        $arbolContenidos = array();

        // Contruir el arbol de secciones y contenidos
        // -------------------------------------------

        $objetoSeccion = new GconSecciones();
        $secciones = $objetoSeccion->cargaCondicion('Id as Id, Titulo as Value', "1", "SortOrder ASC");

        // Recorro todas las secciones
        foreach ($secciones as $key => $seccion) {

            $idSeccion = $seccion['Id'];
            // Para cada seccion, obtengo sus contenidos
            $contenidos = $objetoSeccion->getContenidos($idSeccion, $idContenidoOrigen);

            $arbolContenidos[$idSeccion]['titulo'] = $seccion['Value'];
            $arbolContenidos[$idSeccion]['contenidos'] = $contenidos;

            /**
             * Para cada contenido, construyo su arbol

            $objetoContenido = new GconContenidos();
            foreach ($contenidos as $key => $contenido) {
                $idContenido = $contenido['Id'];
                $arbolContenidos[$idSeccion]['contenidos'][$idContenido]['titulo'] = $contenido['Value'];
                //if ($idContenidoOrigen == $idContenido)
                $arbolContenidos[$idSeccion]['contenidos'][$idContenido]['hijos'] =
                $objetoContenido->getChildEntities($idContenidoOrigen, $idContenido);
            }

            unset($objetoContenido);
            */
        }

        unset($objetoSeccion);

        $template = $this->entity . '/list.html.twig';

        $this->values['datos'] = $arbolContenidos;
        $this->values['idContenidoOrigen'] = $idContenidoOrigen;

        return array('template' => $template, 'values' => $this->values);
    }

}

?>