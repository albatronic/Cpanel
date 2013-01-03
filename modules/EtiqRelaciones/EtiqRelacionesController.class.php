<?php

/**
 * CONTROLLER FOR EtiqRelaciones
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 02.01.2013 17:48:04

 * Extiende a la clase controller
 */
class EtiqRelacionesController extends Controller {

    protected $entity = "EtiqRelaciones";
    protected $parentEntity = "";

    public function listAction() {

        $nombreModulo = $this->request[2];
        $idEntidad = $this->request[3];

        $modulos = new CpanModulos();

        $modulo = $modulos->find('NombreModulo', $nombreModulo);        
        $idModulo = $modulo->getId();
        unset($modulos);
        unset($modulo);

        $etiqueta = new EtiqEtiquetas();
        $etiquetasRelacionadas = $etiqueta->cargaCondicion("Id as IdEtiqueta,IdModulo,Etiqueta", "IdModulo='{$idModulo}'","SortOrder ASC");

        // Ver las que están relacionadas
        $relacion = new EtiqRelaciones();
        foreach ($etiquetasRelacionadas as $key => $etiqueta) {
            $idRelacion = $relacion->cargaCondicion("Id", "IdModulo='{$idModulo}' and IdEntidad='{$idEntidad}' and IdEtiqueta='{$etiqueta['IdEtiqueta']}'");
            $etiquetasRelacionadas[$key]['IdRelacion'] = ($idRelacion[0]['Id'] == '') ? 0 : $idRelacion[0]['Id'];
            $etiquetasRelacionadas[$key]['IdEntidad'] = $idEntidad;
        }
        unset($relacion);

        $this->values['etiquetasRelacionadas'] = $etiquetasRelacionadas;
      
        return array(
            'template' => $this->entity . '/list.html.twig',
            'values' => $this->values,
        );
    }

}

?>