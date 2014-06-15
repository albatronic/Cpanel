<?php

/**
 * CONTROLLER FOR WebUsuarios
 * @author: Sergio Perez <sergio.perez@albatronic.com>
 * @copyright: INFORMATICA ALBATRONIC SL 
 * @date 07.08.2013 21:27:18

 * Extiende a la clase controller
 */
class WebUsuariosController extends Controller {

    protected $entity = "WebUsuarios";
    protected $parentEntity = "";

    public function IndexAction() {
        return parent::listAction();
    }

    public function CargarAction() {

        // Cargar los municipios en array
        $mun = new CommMunicipios();
        $rows = $mun->cargaCondicion("Id,Municipio", "IdProvincia='18'");
        unset($mun);
        foreach ($rows as $key => $value)
            $municipios[strtoupper($value['Municipio'])] = $value['Id'];

        //ini_set("auto_detect_line_endings", true);

        $fichero = "tmp/" . $this->request[2] . ".txt";

        $archivo = new Archivo($fichero);
        $archivo->open();
        $errores = array();
        while (($row = $archivo->readLine()) and ( count($errores) == 0)) {

            // Validar email
            $email = trim($row[11]);
            if ($email == '')
                $email = "FALTA EMAIL " . $row[0];

            $u = new WebUsuarios();
            $usuario = $u->find('Email', $email);
            if ($usuario->getEmail())
                $email .= $row[0];
            unset($usuario);

            // Validar nombre y apellidos
            $apellidosNombre = strtoupper(trim($row[10]));
            $trozos = explode(" ", $apellidosNombre);
            $nombre = $trozos[0];
            if ($nombre == '')
                $nombre = '.';
            $apellidos = str_replace($nombre, "", $apellidosNombre);
            if ($apellidos == '')
                $apellidos = '.';

            $tipo = strtoupper(substr($row[0], 0, 1));
            $u = new WebUsuarios();
            $u->setIdPerfil(($tipo == 'F') ? 3 : 2);
            $u->setUsuario1($row[0]);
            $u->setEmpresa($row[1]);
            $u->setDNI($row[2]);
            $u->setDireccion($row[3]);
            $u->setCodigoPostal($row[4]);
            $u->setIdPais(68);
            $u->setIdProvincia(substr($row[4], 0, 2));
            $u->setIdMunicipio($municipios[strtoupper(trim($row[5]))]);
            $u->setTelefono($row[7]);
            $u->setFax($row[8]);
            $u->setMovil($row[9]);
            $u->setNombre($nombre);
            $u->setApellidos($apellidos);
            $u->setEMail($email);
            $u->setPublish(0);
            $u->setWeb($row[13]);
            $u->setPassword($row[0]);
            $id = $u->create();
            $errores = $u->getErrores();
            if ($id > 0) {
                $u->setSlug($u->getPrimaryKeyMD5());
                $u->setUrlFriendly("/" . $u->getPrimaryKeyMD5());
                $u->save();
                // Crear la url amigable en base a la primaryKeyMD5
                $url = new CpanUrlAmigables();
                $url->setIdioma(0);
                $url->setUrlFriendly("/{$u->getPrimaryKeyMD5()}");
                $url->setController("Instalador");
                $url->setAction("Ficha");
                $url->setTemplate("index.html.twig");
                $url->setEntity("WebUsuarios");
                $url->setIdEntity($id);
                $url->create();
                if (count($url->getErrores()))
                    print_r($url->getErrores());
            }
        }
        $archivo->close();

        if (count($errores))
            print_r($errores);

        return $this->IndexAction();
    }

}

?>