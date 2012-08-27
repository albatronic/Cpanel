<?php

/**
 * Description of IndexController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 3-Agosto-2012
 *
 */
class IndexController extends Controller {

    protected $entity = "Index";

    public function IndexAction() {

        $aplicacion = $this->request[1];

        if ($aplicacion != '') {
            // Ha seleccionado una app, hay que mostrar sus modulos
            $this->values['menu']['tipo'] = "modulos";
            $this->values['menu']['perteneceA'] = $aplicacion;
            foreach ($_SESSION['USER']['menu'][$aplicacion]['modulos'] as $key => $value) {
                $this->values['menu']['modulos'][$key] = $value;
            }
        } else {
            // No ha seleccionado ninguna app, hay que mostrar todas las apps
            $this->values['menu']['tipo'] = 'apps';
            foreach ($_SESSION['USER']['menu'] as $key => $value) {
                $this->values['menu']['apps'][$key] = array(
                    'titulo' => $value['titulo'],
                    'descripcion' => $value['descripcion'],
                    'icono' => $value['icono'],
                    );
            }
        }
print_r($this->values);
        return array(
            'template' => $this->entity . '/index.html.twig',
            'values' => $this->values,
        );
    }

}

?>
