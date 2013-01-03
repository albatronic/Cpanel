<?php

/**
 * CONTROLLER FOR EtiqEtiquetas
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL
 * @date 30.10.2012 18:46:08

 * Extiende a la clase controller
 */
class EtiqEtiquetasController extends Controller {

    protected $entity = "EtiqEtiquetas";
    protected $parentEntity = "";

    public function __construct($request) {
        parent::__construct($request);

        $this->values['objetoController'] = $this;
    }

    public function IndexAction() {
        return parent::newAction();
    }

    public function getArbolEtiquetas() {

        $arbol = array();
        
        $modulo = new CpanModulos();
        $modulos = $modulo->getModulosConEtiquetas();
        unset($modulo);

        foreach ($modulos as $modulo) {
            $etiqueta = new EtiqEtiquetas();
            $etiquetas = $etiqueta->cargaCondicion('Id', "IdModulo='{$modulo['Id']}'", "SortOrder ASC");
            unset($etiqueta);

            $arbol[$modulo['Id']]['titulo'] = $modulo['Value'];
            $arbol[$modulo['Id']]['nEtiquetas'] = count($etiquetas);
            foreach ($etiquetas as $etiqueta)
                $arbol[$modulo['Id']]['etiquetas'][] = new EtiqEtiquetas($etiqueta['Id']);
        }

        return $arbol;
    }

}

?>