<?php

/**
 * CONTROLLER FOR VidVideos
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 05.12.2012 01:09:09

 * Extiende a la clase controller
 */
class VidVideosController extends Controller {

    protected $entity = "VidVideos";
    protected $parentEntity = "";

    public function __construct($request) {
        parent::__construct($request);

        $this->values['objetoController'] = $this;
    }

    public function IndexAction() {
        return parent::newAction();
    }

    /**
     * Devuelve un array anidado de secciones de videos con sus videos
     * 
     * @return array Array de secciones y videos
     */
    public function getArbolSeccionesVideos() {

        $seccion = new VidSecciones();
        $secciones = $seccion->cargaCondicion("Id,Titulo", "1", "SortOrder ASC");
        unset($seccion);

        $arbol = array();

        foreach ($secciones as $seccion) {
            $video = new VidVideos();
            $videos = $video->cargaCondicion('Id', "IdSeccion='{$seccion['Id']}'", "SortOrder ASC");
            unset($video);

            $arbol[$seccion['Id']]['titulo'] = $seccion['Titulo'];
            $arbol[$seccion['Id']]['nVideos'] = count($videos);               
            foreach ($videos as $video)
                $arbol[$seccion['Id']]['videos'][] = new VidVideos($video['Id']);
        }

        return $arbol;
    }

}

?>