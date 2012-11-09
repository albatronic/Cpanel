<?php
/**
* CONTROLLER FOR GconContenidosEtiquetas
* @author: Sergio Perez <sergio.perez@albatronic.com>
* @copyright: INFORMATICA ALBATRONIC SL
* @date 02.11.2012 10:58:56

* Extiende a la clase controller
*/

class GconContenidosEtiquetasController extends Controller {

	protected $entity = "GconContenidosEtiquetas";
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

        $arbolEtiquetas = array();

        // Contruir el arbol de secciones y contenidos
        // -------------------------------------------

        $etiqueta = new GconEtiquetas();
        $etiquetas = $etiqueta->fetchAll();


        // Recorro todas las etiquetas y 
        foreach ($secciones as $key => $seccion) {

            $idSeccion = $seccion['Id'];
            // Para cada seccion, obtengo sus contenidos
            $contenidos = $objetoSeccion->getContenidos($idSeccion, $idContenidoOrigen);

            $arbolContenidos[$idSeccion]['titulo'] = $seccion['Value'];
            $arbolContenidos[$idSeccion]['contenidos'] = $contenidos;

        }

        unset($objetoSeccion);

        $template = $this->entity . '/list.html.twig';

        $this->values['datos'] = $arbolEtiquetas;
        $this->values['idContenidoOrigen'] = $idContenidoOrigen;

        return array('template' => $template, 'values' => $this->values);
    }

}
?>