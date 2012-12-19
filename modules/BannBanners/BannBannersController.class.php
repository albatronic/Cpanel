<?php

/**
 * CONTROLLER FOR BannBanners
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 09.12.2012 08:36:04

 * Extiende a la clase controller
 */
class BannBannersController extends Controller {

    protected $entity = "BannBanners";
    protected $parentEntity = "";

    public function __construct($request) {
        parent::__construct($request);

        $this->values['objetoController'] = $this;
    }

    public function IndexAction() {
        return parent::newAction();
    }
    
    /**
     * Devuelve un array anidado de zonas de banners con sus banners
     * 
     * @return array Array de zonas y banners
     */
    public function getArbolZonasBanners() {

        $zonas = new BannZonas();
        $rows = $zonas->cargaCondicion("Id,Titulo", "1", "SortOrder ASC");
        unset($zonas);

        $arbol = array();

        foreach ($rows as $row) {
            $banner = new BannBanners();
            $banners = $banner->cargaCondicion('Id', "IdZona='{$row['Id']}'", "SortOrder ASC");
            unset($banner);

            $arbol[$row['Id']]['titulo'] = $row['Titulo'];
            foreach ($banners as $banner)
                $arbol[$row['Id']]['banners'][] = new BannBanners($banner['Id']);
        }

        return $arbol;
    }

}

?>