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
     * Muestra la vista mediante la que se pueden enlazar
     * entidades a la actual
     * 
     * @param string $primaryKeyMD5 El valor de la primaryKey en formato MD5 de la entidad
     * a la que se va a realizar el enlace
     * @return array Array template, value
     */
    public function EnlazarAction($primaryKeyMD5 = '') {

        // Obtener las entidades con las que se pueden enlazar
        // los sliders
        $enlaces = new SldSlidersEnlaces();
        $this->enlazarCon = $enlaces->fetchAll('Descripcion', 0);
        unset($enlaces);

        return parent::EnlazarAction($primaryKeyMD5);
    }

    /**
     * Devuelve un array anidados de zonas de sliders con sus sliders
     * 
     * @return array Array de zonas y sliders
     */
    public function getArbol() {

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