<?php

/**
 * CONTROLADOR MULTIPROPOSITO PARA REDENRIZAR INFORMACION EN PANTALLAS EMERGENTES
 *
 * LA INFORMACION QUE SE MOSTRARA DEPENDE DEL METODO LLAMADO
 *
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL 
 * @since 27.07.2011 11:10:13

 */
class _EmergenteController {

    protected $request;
    protected $values;

    public function __construct($request) {
        // Cargar lo que viene en el request
        $this->request = $request;
        $this->values['request'] = $this->request;
        
        $this->values['twigCss'] = '_global/css.html.twig';
        $this->values['twigJs'] = '_global/js.html.twig';        
    }

    public function BannBannersAction($keyMD5) {
        
        return array('template' => '_Emergente/enlazar.html.twig', 'values' => $this->values);        
    }
    
    public function SldSlidersAction($keyMD5) {
        
        return array('template' => '_Emergente/enlazar.html.twig', 'values' => $this->values);        
    }    


    /**
     * Devuelve array con los posibles formatos de documentos para
     * el tipo de documento indicado como parámetro o en la posicion 2 del request
     *
     * El controlador que generará el documento viene en la posicion 3 del request
     * El id del objeto a imprimir viene en la posicion 4 del request
     *
     * Los formatos están definidos en  docs/docsXXX/tipoDocumento.yml
     * Se mostrarán solo aquellos que el perfil del usuario tenga acceso.
     *
     * En el nodo <idPerfil> se indican los IDs (separados por comas) de los perfiles que tendrán acceso
     * al documento. Si el nodo está vacio, se entiende que pueden acceder todos.
     *
     * @param string Tipo de Documento
     * @return array Con el template y values 
     */
    public function formatosDocumentosAction($tipoDocumento='') {

        switch ($this->request["METHOD"]) {
            case 'GET':
                if ($tipoDocumento == '')
                    $tipoDocumento = $this->request['2'];

                $controlador = $this->request['3'];
                $idDocumento = $this->request['4'];

                $documento = new DocumentoPdf();
                $formatos = $documento->getFormatos($tipoDocumento);
                unset($documento);

                $this->values = array(
                    'numeroDeFormatos' => count($formatos),
                    'tipoDocumento' => $tipoDocumento,
                    'formatos' => $formatos,
                    'controlador' => $controlador,
                    'idDocumento' => $idDocumento,
                );
                break;

            case 'POST':
                break;
        }
        return array('template' => '_Emergente/formatosDocumentos.html.twig', 'values' => $this->values);
    }


}

?>