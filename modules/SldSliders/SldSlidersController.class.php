<?php

/**
 * CONTROLLER FOR SldSliders
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 10.12.2012 17:38:33

 * Extiende a la clase controller
 */
class SldSlidersController extends Controller {

    protected $entity = "SldSliders";
    protected $parentEntity = "";

    public function __construct($request) {
        parent::__construct($request);

        $this->values['objetoController'] = $this;
    }

    public function IndexAction() {
        return parent::newAction();
    }

    /**
     * Devuelve un array anidado de zonas de sliders con sus sliders
     * 
     * @return array Array de zonas y sliders
     */
    public function getArbolZonasSliders() {

        $zonas = new SldZonas();
        $rows = $zonas->cargaCondicion("Id,Titulo", "1", "SortOrder ASC");
        unset($zonas);

        $arbol = array();

        foreach ($rows as $row) {
            $slider = new SldSliders();
            $sliders = $slider->cargaCondicion('Id', "IdZona='{$row['Id']}'", "SortOrder ASC");
            unset($slider);

            $arbol[$row['Id']]['titulo'] = $row['Titulo'];
            foreach ($sliders as $slider)
                $arbol[$row['Id']]['sliders'][] = new SldSliders($slider['Id']);
        }

        return $arbol;
    }

}

?>