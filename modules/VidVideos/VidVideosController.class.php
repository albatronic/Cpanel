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

        $secciones = new VidSecciones();
        $rows = $secciones->cargaCondicion("Id,Titulo", "1", "SortOrder ASC");
        unset($secciones);

        $arbol = array();

        foreach ($rows as $row) {
            $video = new VidVideos();
            $videos = $video->cargaCondicion('Id', "IdSeccion='{$row['Id']}'", "SortOrder ASC");
            unset($video);

            $arbol[$row['Id']]['titulo'] = $row['Titulo'];
            foreach ($videos as $video)
                $arbol[$row['Id']]['videos'][] = new VidVideos($video['Id']);
        }

        return $arbol;
    }

}

?>