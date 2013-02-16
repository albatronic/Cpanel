<?php

/**
 * CONTROLLER FOR CpanUsuarios
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 07.12.2012 23:55:49

 * Extiende a la clase controller
 */
class CpanUsuariosController extends Controller {

    protected $entity = "CpanUsuarios";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

    
    /**
     * Edita, actualiza o borrar un registro
     *
     * Si viene por GET es editar
     * Si viene por POST puede ser actualizar o borrar
     * según el valor de $this->request['accion']
     *
     * @return array con el template y valores a renderizar
     */
    public function editAction() {

        switch ($this->request["METHOD"]) {

            case 'GET':
                if ($this->values['permisos']['permisosModulo']['CO']) {
                    //SI EN LA POSICION 3 DEL REQUEST VIENE ALGO,
                    //SE ENTIENDE QUE ES EL VALOR DE LA CLAVE PARA LINKAR CON LA ENTIDAD PADRE
                    //ESTO SE UTILIZA PARA LOS FORMULARIOS PADRE->HIJO
                    if ($this->request['3'] != '')
                        $this->values['linkBy']['value'] = $this->request['3'];

                    //MOSTRAR DATOS. El ID viene en la posicion 2 del request
                    $datos = new $this->entity();
                    $datos = $datos->find('PrimaryKeyMD5', $this->request[2]);
                    if ($datos->getStatus()) {
                        $this->values['datos'] = $datos;
                        $this->values['errores'] = $datos->getErrores();
                    } else {
                        $this->values['errores'] = array("Valor no encontrado. El objeto que busca no existe. Es posible que haya sido eliminado por otro usuario.");
                    }
                    $template = $this->entity . '/form.html.twig';
                } else {
                    $template = '_global/forbiden.html.twig';
                }

                return array('template' => $template, 'values' => $this->values);
                break;

            case 'POST':
                //COGER DEL REQUEST EL LINK A LA ENTIDAD PADRE
                if ($this->values['linkBy']['id'] != '') {
                    $this->values['linkBy']['value'] = $this->request[$this->entity][$this->values['linkBy']['id']];
                }

                switch ($this->request['accion']) {
                    case 'Guardar': //GUARDAR DATOS
                        if ($this->values['permisos']['permisosModulo']['UP']) {
                            // Cargo la entidad
                            $datos = new $this->entity($this->request[$this->entity][$this->form->getPrimaryKey()]);
                            // Vuelco los datos del request
                            $datos->bind($this->request[$this->entity]);
                            $usuario = new PcaeUsuarios($this->request[$this->entity]['IdUsuario']);
                            $usuario->bind($this->request['PcaeUsuarios']);
                            $form = new Form('PcaeUsuarios');
                            $rules = $form->getRules();
                            unset($form);
                            if ($usuario->valida($rules)) {
                                $this->values['alertas'] = $usuario->getAlertas();
                                if ($usuario->save()) {
                                    $datos->save();
                                } else $this->values['errores'] = $usuario->getErrores ();

                                //Recargo el objeto para refrescar las propiedas que
                                //hayan podido ser objeto de algun calculo durante el proceso
                                //de guardado.
                                $datos = new $this->entity($this->request[$this->entity][$datos->getPrimaryKeyName()]);
                            } else {
                                $this->values['errores'] = $usuario->getErrores();
                                $this->values['alertas'] = $usuario->getAlertas();
                            }
                            $this->values['datos'] = $datos;
                            return array('template' => $this->entity . '/form.html.twig', 'values' => $this->values);
                        } else {
                            return array('template' => '_global/forbiden.html.twig', 'values' => $this->values);
                        }
                        break;

                    case 'Borrar': //MARCA EL OBJETO COMO BORRADO, PERO NO BORRA FÍSICAMENTE

                        break;
                }
                break;
        }
    }
    
    /**
     * Crea un registro nuevo
     *
     * Si viene por GET muestra un template vacio
     * Si viene por POST crea un registro
     *
     * @return array con el template y valores a renderizar
     */
    public function newAction() {

        if ($this->values['permisos']['permisosModulo']['IN']) {

            switch ($this->request["METHOD"]) {
                case 'GET': //MOSTRAR FORMULARIO VACIO                

                    $datos = new $this->entity();
                    $datos->setDefaultValues((array) $this->varEnvMod['columns']);
                    $this->values['datos'] = $datos;
                    $this->values['errores'] = array();
                    $template = $this->entity . '/form.html.twig';
                    break;

                case 'POST': //CREAR NUEVO REGISTRO

                    $datos = new $this->entity();
                    $datos->bind($this->request[$this->entity]);
                    $usuario = new PcaeUsuarios();
                    $usuario->bind($this->request['PcaeUsuarios']);

                    $form = new Form('PcaeUsuarios');

                    $rules = $form->getRules();
                    $rules['GLOBALES']['numMaxPages'] = $this->varEnvPro['numMaxPages'];
                    $rules['GLOBALES']['numMaxRecords'] = $this->varEnvMod['numMaxRecords'];

                    if ($usuario->valida($rules)) {
                        $lastIdUsuario = $usuario->create();
                        if ($lastIdUsuario) {
                            // Se ha creado el usuario en Pcae, creo el vínculo con la empresa
                            // poniéndole perfil 3 (acceso)
                            $empresaUsuario = new PcaeEmpresasUsuarios();
                            $empresaUsuario->setIdEmpresa($_SESSION['project']['IdEmpresa']);
                            $empresaUsuario->setIdUsuario($lastIdUsuario);
                            $empresaUsuario->setIdPerfil(3);
                            $empresaUsuario->create();
                            unset($empresaUsuario);
                            
                            // Creo el usuario en la base de datos del proyecto
                            $datos->setIdUsuario($lastIdUsuario);
                            $lastIdUser = $datos->create();
                            if (!$lastIdUser) {
                                $this->values['errores'] = $datos->getErrores();
                                $this->values['alertas'] = $datos->getAlertas();
                            }                            
                            // Darle acceso al proyecto-app
                            $proyectoApp = new PcaeProyectosApps($_SESSION['project']['Id']);
                            $permisos = new PcaePermisos();
                            $permisos->setIdUsuario($lastIdUsuario);
                            $permisos->setIdEmpresa($_SESSION['project']['IdEmpresa']);
                            $permisos->setIdProyecto($proyectoApp->getIdProyecto()->getId());
                            $permisos->setIdApp($proyectoApp->getIdApp()->getId());
                            $permisos->create();
                            unset($proyectoApp);
                            unset($permisos);
                            

                        } else {
                            $this->values['errores'] = $usuario->getErrores();
                            $this->values['alertas'] = $usuario->getAlertas();
                        }

                        //Recargo el objeto para refrescar las propiedades que
                        //hayan podido ser objeto de algun calculo durante el proceso
                        //de guardado y pongo valores por defecto (urlamigable, etc)
                        if ($lastIdUser) {
                            $datos = new $this->entity($lastIdUser);
                            //$this->gestionUrlMeta($datos);
                            $this->values['errores'] = $datos->getErrores();
                            $this->values['alertas'] = $datos->getAlertas();
                        }
                        $this->values['datos'] = $datos;

                        $template = $this->entity . '/form.html.twig';
                    } else {
                        $this->values['datos'] = $datos;
                        $this->values['errores'] = $usuario->getErrores();
                        $this->values['alertas'] = $usuario->getAlertas();
                        $template = $this->entity . '/form.html.twig';
                    }
                    break;
            }
        } else {
            $template = '_global/forbiden.html.twig';
        }

        return array('template' => $template, 'values' => $this->values);
    }

}

?>