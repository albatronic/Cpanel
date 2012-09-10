<?php

//*************************************************
// CLASS ControlAcceso
// Author: Sergio Pérez Sánchez
// Company: Informática ALBATRONIC, SL
// Date: 17-10-2010
//-------------------------------------------------
// CONTROL DE ACCESO A LOS CONTROLADORES SEGUN EL
// PERFIL DE USUARIO Y CONTROLLER RECIBIDOS COMO PARAMETROS
// LA VALIDACION SE HACE CONTRA LA TABLA DE PERFILES DE USUARIOS.
//
// SI NO SE INDICA NINGUN CONTROLER SE PONEN TODOS LOS PERMISOS A TRUE
//
// DEVUELVE UN ARRAY ASOCIATIVO. EL INDICE INDICA EL
// TIPO DE PERMISO, EL VALOR '0' DENIEGA Y '1' CONCEDE ACCESO
//
// LOS VALORES DEL INDICE SON:
//
//	C	= Consulta
//	I	= Inserción
//	B	= Borrado
//	A	= Actualización
//	L	= Listado
//	E	= Exportar información a Excel, XML, etc.

class ControlAcceso {

    /**
     * El ID del usuario logeado
     * @var integer
     */
    private $idPerfil;

    /**
     * El nombre del Controller
     * @var string
     */
    private $controller;

    /**
     * Array asociativo con los tipos de permisos.
     * @var array
     */
    private $permisos = array();

    public function __construct($controller = '', $idPerfil = '') {
        if ($idPerfil == '') {
            $this->idPerfil = $_SESSION['USER']['user']['IdPerfil'];
        } else {
            $this->idPerfil = $idPerfil;
        }

        $this->controller = $controller;

        // Si se ha indicado un controlador, se cargan sus permisos
        // en caso contrario se ponen todos los permisos a true
        if ($this->controller)
            $this->load();
        else
            $this->setPermisos(TRUE);
    }

    private function load() {

        $permiso = new CorePermisos();
        $rows = $permiso->cargaCondicion("Funcionalidades", "IdPerfil='{$this->idPerfil}' AND NombreModulo='{$this->controller}'");
        unset($permiso);

        if ($rows[0]['Funcionalidades'] != '') {

            $modulo = new CoreModulos();
            $modulo = $modulo->find('NombreModulo', $this->controller);
            $this->permisos['enCurso'] = array(
                'app' => $modulo->getCodigoApp(),
                'modulo' => $modulo->getNombreModulo(),
            );
            unset($modulo);

            $aux = explode(',', $rows[0]['Funcionalidades']);
            foreach ($aux as $value)
                $this->permisos[$value] = TRUE;
        }
    }

    /**
     * Devuelve un array asociativo con los permisos
     * @return array
     */
    public function getPermisos() {
        return $this->permisos;
    }

    /**
     * Cambia TODOS los permisos a verdadero o falso
     *
     * @param boolean $onOff
     */
    public function setPermisos($onOff) {

        $tiposFuncionalidad = new CoreFuncionalidades();
        $rows = $tiposFuncionalidad->cargaCondicion("Codigo");
        unset($tiposFuncionalidad);

        foreach ($rows as $row)
            $this->setPermiso($row['Codigo'], $onOff);
    }

    /**
     * Cambia el permiso $permiso al valor $onOff
     *
     * @param string $permiso
     * @param boolean $onOff
     */
    public function setPermiso($permiso, $onOff) {
        $this->permisos[$permiso] = $onOff;
    }

}

?>