<?php

/**
 * Description of LoginController
 *
 * @author Sergio Pérez <sergio.perez@albatronic.com>
 * @copyright Informática ALBATRONIC, SL
 * @date 28-may-2011
 *
 */
class LoginController extends Controller {

    protected $entity = "Login";
    protected $semilla = "verano";

    public function __construct($request) {

        parent::__construct($request);

        unset($_SESSION['USER']);

        $fileConfig = $_SERVER['DOCUMENT_ROOT'] . $_SESSION['appPath'] . "/config/config.yml";

        if (file_exists($fileConfig)) {
            $yaml = sfYaml::load($fileConfig);
            $projects = $yaml['config']['conections'];
        } else {
            $this->error[] = "Login: ERROR AL LEER EL ARCHIVO DE CONFIGURACION. NO EXISTE\n";
        }

        $this->values['titulo'] = 'Iniciar sesión';
        $this->values['projects'] = $projects;
        $this->values['user'] = $this->request['user'];
        $this->values['password'] = $this->request['password'];
    }

    public function IndexAction() {

        return array(
            'template' => $this->entity . "/login.html.twig",
            'values' => $this->values,
        );
    }

    public function LoginAction() {

        $user = new CoreUsuarios();
        $usuario = $user->find("Login", $this->request['user']);
        unset($user);

        if ($usuario->getLogin() != '') {
            if ($usuario->getPassword() == md5($this->request['password'] . $this->semilla)) {

                $_SESSION['USER'] = array(
                    'user' => array(
                        'id' => $usuario->getIDUsuario(),
                        'nombre' => $usuario->getNombreApellidos(),
                        'IDPerfil' => $usuario->getIDPerfil()->getIDPerfil(),
                    ),
                );
                $_SESSION['project'] = $this->values['projects'][$this->request['project']];
                $_SESSION['project']['name'] = $this->request['project'];

                //Actualizar el registro de entradas
                $usuario->setNLogin($usuario->getNLogin() + 1);
                $usuario->setUltimoLogin(date('Y-m-d H:i:s'));
                $usuario->save();

                $_SESSION['USER']['menu'] = $usuario->getArrayMenu();

                // Ejecuto el controlador index y recojo sus valores
                include_once 'modules/Index/IndexController.class.php';
                $controlador = new IndexController($this->request);
                $array = $controlador->IndexAction();
                unset($controlador);
                $this->values = $array['values'];
                $template = $array['template'];
            } else {
                $this->values['mensaje'] = 'Password Incorrecta';
                $template = $this->entity . "/login.html.twig";
            }
        } else {
            $this->values['mensaje'] = 'Usuario no registrado';
            $template = $this->entity . "/login.html.twig";
        }

        return array(
            'template' => $template,
            'values' => $this->values,
        );
    }

    /**
     * Olvidó la contraseña
     *
     * Regenera la contraseña del usuario y se la envía por email
     *
     */
    public function ForgotAction() {

        switch ($this->request['METHOD']) {
            case 'GET':
                $this->values['mensaje'] = "Indique el usuario";
                $template = $this->entity . "/forgot.html.twig";
                break;

            case 'POST':
                $user = new CoreUsuarios();
                $usuario = $user->find("Login", $this->request['user']);
                unset($user);

                if ($usuario->getIDUsuario() != '') {
                    $passw = new Password(6);
                    $nueva = $passw->genera();
                    unset($passw);
                    $usuario->setPassword(md5($nueva . $this->semilla));
                    $usuario->save();

                    $config = sfYaml::load('config/config.yml');

                    $to = $usuario->getEmail();
                    $subject = " Password regenerada";
                    $message = "<p>" . $config['config']['app']['name'] . "</p><p>Le ha sido generada una contrase&ntilde;a nueva de acceso al sistema.</p>" .
                            "<p>La contrase&ntilde;a nueva es: " . $nueva . "</p>";

                    $mail = new Mail();
                    $this->values['mensaje'] = $mail->send($to, '', 'Administrador Cpanel', $subject, $message, array());
                    unset($mail);

                    $template = $this->entity . "/index.html.twig";
                } else {
                    $this->values['mensaje'] = "Ese usuario no consta en nuestra base de datos.";
                    $template = $this->entity . "/forgot.html.twig";
                }

                unset($usuario);


                break;
        }

        return array('template' => $template, 'values' => $this->values,);
    }

}

?>