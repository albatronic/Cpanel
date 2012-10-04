<?php

/**
 * CONTROLLER FOR CoreDocs
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL
 * @date 30.09.2012 21:04:21

 * Extiende a la clase controller
 */
class CoreDocsController extends Controller {

    protected $entity = "CoreDocs";
    protected $parentEntity = "";

    public function __construct($request) {
        parent::__construct($request);

        $variables = new CoreVariables('Mod', 'Env', $this->entity);
        $this->varEnvMod = $variables->getValores();
        $this->values['varEnvMod'] = $this->varEnvMod;

        $variables = new CoreVariables('Mod', 'Web', $this->entity);
        $this->varWebMod = $variables->getValores();
        $this->values['varWebMod'] = $this->varWebMod;
    }

    public function listAction($entidad='', $idEntidad='') {

        if ($this->values['permisos']['permisosModulo']['CO']) {

            if ($entidad == '')
                $entidad = $this->request[2];
            if ($idEntidad == '')
                $idEntidad = $this->request[3];


            // Añadir una imagen nueva vacia
            $objetoNuevo = new CoreDocs();
            $objetoNuevo->setEntity($entidad);
            $objetoNuevo->setIdEntity($idEntidad);
            $objetoNuevo->setType('galeria');
            $lineas[] = $objetoNuevo;
            unset($objetoNuevo);

            $lis = new CoreDocs();
            $filtro = "Entity='{$entidad}' AND IdEntity='{$idEntidad}' AND Type='galeria' AND IsThumbnail='0'";
            $rows = $lis->cargaCondicion('Id', $filtro, 'SortOrder ASC');
            foreach ($rows as $row) {
                $lineas[] = new CoreDocs($row['Id']);
            }

            unset($lis);

            $this->values['listado']['data'] = $lineas;
            $template = 'CoreDocs/form.html.twig';

            return array('template' => $template, 'values' => $this->values);
        } else {
            return array('template' => '_global/forbiden.html.twig');
        }
    }

    /**
     * Crea un registro nuevo
     *
     * Siempre viene por POST
     * Si viene por POST crea un registro
     *
     * @return array con el template y valores a renderizar
     */
    public function newAction() {

        if ($this->values['permisos']['permisosModulo']['IN']) {
            switch ($this->request["METHOD"]) {

                case 'POST': //CREAR NUEVO REGISTRO
                    $variables = new CoreVariables('Mod', 'Env', $this->request[$this->entity]['Entity']);
                    $this->varEnvMod = $variables->getValores();
                    $this->values['varEnvMod'] = $this->varEnvMod;
                    unset($variables);
                    $medidas = array (
                        'width' => $this->varEnvMod['galeria']['maxWidthImage'],
                        'height' => $this->varEnvMod['galeria']['maxHeightImage'],
                    );

                    $datos = new CoreDocs();
                    $datos->bind($this->request['CoreDocs']);

                    if ($datos->valida(array())) {
                        $lastId = $datos->subeGaleria('',$datos->getEntity(), $datos->getIdEntity(), $datos->getType(), $_FILES['imagen0'], $medidas, $datos->getName(), FALSE);
                        $this->values['alertas'] = $datos->getAlertas();

                        //Recargo el objeto para refrescar las propiedas que
                        //hayan podido ser objeto de algun calculo durante el proceso
                        //de guardado.
                        $datos = new CoreDocs($lastId);
                        $this->values['datos'] = $datos;
                    } else {
                        $this->values['datos'] = $datos;
                        $this->values['errores'] = $datos->getErrores();
                    }
                    return $this->listAction($datos->getEntity(), $datos->getIdEntity());
                    break;
            }
        } else {
            return array('template' => '_global/forbiden.html.twig');
        }
    }

    /**
     * Edita, actualiza o borrar un registro
     *
     * Viene siempre por POST
     * Actualiza o Borrar según el valor de $this->request['accion']
     *
     * @return array con el template y valores a renderizar
     */
    public function editAction() {

        $entidad = $this->request[$this->entity]['Entity'];
        $idEntidad = $this->request[$this->entity]['IdEntity'];

        switch ($this->request['accion']) {
            case 'G': //GUARDAR DATOS
                if ($this->values['permisos']['permisosModulo']['UP']) {

                    $datos = new $this->entity($this->request[$this->entity]['Id']);
                    $datos->bind($this->request[$this->entity]);
                    if ($datos->valida()) {
                        $datos->save();
                        $this->values['errores'] = $datos->getErrores();
                        $this->values['alertas'] = $datos->getAlertas();

                        //Recargo el objeto para refrescar las propiedas que
                        //hayan podido ser motivo de algun calculo durante el proceso
                        //de guardado.
                        $datos = new $this->entity($this->request[$this->entity][$datos->getPrimaryKeyName()]);
                    } else
                        $this->values['errores'] = $datos->getErrores();

                    $this->values['datos'] = $datos;
                    unset($datos);
                    return $this->listAction($entidad, $idEntidad);
                } else {
                    return array('template' => '_global/forbiden.html.twig');
                }
                break;

            case 'B': //BORRAR DATOS
                if ($this->values['permisos']['permisosModulo']['DE']) {
                    $datos = new $this->entity($this->request[$this->entity]['Id']);

                    if ($datos->erase()) {
                        $datos = new $this->entity();
                        $this->values['datos'] = $datos;
                        $this->values['errores'] = array();
                    } else {
                        $this->values['datos'] = $datos;
                        $this->values['errores'] = $datos->getErrores();
                    }
                    unset($datos);
                    return $this->listAction($entidad, $idEntidad);
                } else {
                    return array('template' => '_global/forbiden.html.twig');
                }
                break;
        }
    }

}

?>