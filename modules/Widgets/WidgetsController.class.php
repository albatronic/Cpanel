<?php

/**
 * CONTROLLER FOR Widgets
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 25.10.2013 22:32:33

 * Extiende a la clase controller
 */
class WidgetsController extends Controller {

    protected $entity = "Widgets";
    protected $parentEntity = "";

    public function IndexAction() {

        // Cargar los widgets disponibles
        $file = "modules/" . $this->entity . "/widgets.yml";
        $wg = (file_exists($file)) ? sfYaml::load($file) : array();
        $this->values['widgets'] = $wg['widgets'];

        // Cargar las zonas de widgets definidas
        $widget = new Widgets();
        $rows = $widget->cargaCondicion("Id");
        unset($widget);
        foreach ($rows as $row)
            $arrayZonas[$row['Id']] = new Widgets($row['Id']);
        $this->values['zonas'] = $arrayZonas;

        // Cargar los controllers posibles
        $url = new CpanUrlAmigables();
        $rows = $url->cargaCondicion("distinct(Controller) as controller", "1", "Controller ASC");
        unset($url);
        foreach ($rows as $row)
            $arrayControllers[] = $row['controller'];

        $this->values['controllers'] = $arrayControllers;

        return parent::IndexAction();
    }

    public function CrearZonaAction() {

        $zona = new Widgets();
        $rows = $zona->cargaCondicion("Id", "Name='{$this->request['nombre']}'");
        if (!$rows[0]['Id']) {
            $zona->setName($this->request['nombre']);
            $zona->setTitle($this->request['titulo']);
            $zona->setControllers($this->request['controladores']);
            $zona->setObservations($this->request['descripcion']);
            $zona->create();
        }

        return $this->IndexAction();
    }

}

?>