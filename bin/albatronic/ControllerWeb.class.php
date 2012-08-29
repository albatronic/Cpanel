<?php

/**
 * Description of ControllerWeb
 *
 * Controlador común a todos los módulos
 *
 * @author Administrador
 */
class ControllerWeb {

    /**
     * Variables enviadas en el request por POST o por GET
     * @var request
     */
    protected $request;

    /**
     * Objeto de la clase 'form' con las propiedades y métodos
     * del formulario obtenidos del fichero de configuracion
     * del formulario en curso
     * @var from
     */
    protected $form;

    /**
     * Valores a devolver al controlador principal para
     * que los renderice con el twig correspondiente
     * @var array
     */
    protected $values;

    /**
     * Objeto de la clase 'controlAcceso'
     * para gestionar los permisos de acceso a los métodos del controller
     * @var ControlAcceso
     */
    protected $permisos;

    /**
     * Array con las variables Web del modulo
     * @var array
     */
    protected $varWeb;

    public function __construct($request) {

        // Cargar lo que viene en el request
        $this->request = $request;


        // Cargar la configuracion del modulo (modules/moduloName/config.yml)
        $this->form = new Form($this->entity);

        $includesHead = $this->form->getNode('includesHead');

        $this->varWeb = $this->form->getVarweb();

        switch ($_SESSION['browser']) {

            case 'mobile':
                if ($_SESSION['iuWeb'] >0) {
                    $this->values['twigCss'] = $includesHead['mobilePrivate']['twigCss'];
                    $this->values['twigJs'] = $includesHead['mobilePrivate']['twigJs'];
                }else{
                    $this->values['twigCss'] = $includesHead['mobilePublic']['twigCss'];
                    $this->values['twigJs'] = $includesHead['mobilePublic']['twigJs'];
                }

                break;

            case 'lapTop':
                if ($_SESSION['iuWeb'] >0) {
                    $this->values['twigCss'] = $includesHead['lapTopPrivate']['twigCss'];
                    $this->values['twigJs'] = $includesHead['lapTopPrivate']['twigJs'];
                }else{
                    $this->values['twigCss'] = $includesHead['lapTopPublic']['twigCss'];
                    $this->values['twigJs'] = $includesHead['lapTopPublic']['twigJs'];
                }

                break;

            default:
                break;
        }

    }

    public function IndexAction() {

        return array(
            'template' => $this->entity . "/Index.html.twig",
            'values' => $this->values,
        );
    }
}

?>
