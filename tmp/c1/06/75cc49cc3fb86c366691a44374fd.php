<?php

/* CpanVariables/fieldsVarProWeb.html.twig */
class __TwigTemplate_c10675cc49cc3fb86c366691a44374fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CpanVariables/form.html.twig");

        $this->blocks = array(
            'template' => array($this, 'block_template'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CpanVariables/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["numeroContenidosFijos"] = 4;
        // line 10
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        $context["esSuper"] = ($this->getAttribute($this->getAttribute($_user_, "IdPerfil"), "Id") == "1");
        // line 11
        $context["ValoresIzqDcha"] = array("0" => array("Id" => "0", "Value" => "Izquierda"), "1" => array("Id" => "1", "Value" => "Derecha"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_template($context, array $blocks = array())
    {
        // line 14
        echo "<div id=\"tabs\" class=\"ui-tabs ui-widget ui-widget-content ui-corner-all\">
    <ul class=\"ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all\">
        <li class=\"ui-state-default ui-corner-top ui-tabs-selected ui-state-active\"><a href=\"#tabs-global\">Global [globales]</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-mail\">Mail [mail]</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-meta\">SEO [meta]</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-firmas\">Firmas [signatures]</a></li>
        <li class=\"ui-state-default ui-corner-top\"><a href=\"#tabs-contenidosFijos\">Contenidos fijos [staticContents]</a></li>        
    </ul>

    <div id=\"tabs-global\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        
        ";
        // line 25
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["esSuper"])) { $_esSuper_ = $context["esSuper"]; } else { $_esSuper_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[dominio] Dominio", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "dominio", array(), "array") || $_esSuper_), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][dominio]", 4 => "datos_global_dominio", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "dominio"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 26
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["esSuper"])) { $_esSuper_ = $context["esSuper"]; } else { $_esSuper_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[empresa] Empresa / Titular", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "empresa", array(), "array") || $_esSuper_), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][empresa]", 4 => "datos_global_empresa", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "empresa"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "            
        ";
        // line 27
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["esSuper"])) { $_esSuper_ = $context["esSuper"]; } else { $_esSuper_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[cif] CIF/DNI", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "cif", array(), "array") || $_esSuper_), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][cif]", 4 => "datos_global_cif", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "cif"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "            
        ";
        // line 28
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["esSuper"])) { $_esSuper_ = $context["esSuper"]; } else { $_esSuper_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[direccion] Dirección", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "direccion", array(), "array") || $_esSuper_), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][direccion]", 4 => "datos_global_direccion", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "direccion"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 29
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["esSuper"])) { $_esSuper_ = $context["esSuper"]; } else { $_esSuper_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[poblacion] Población", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "poblacion", array(), "array") || $_esSuper_), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][poblacion]", 4 => "datos_global_poblacion", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "poblacion"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 30
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["esSuper"])) { $_esSuper_ = $context["esSuper"]; } else { $_esSuper_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[provincia] Provincia", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "provincia", array(), "array") || $_esSuper_), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][provincia]", 4 => "datos_global_provincia", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "provincia"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 31
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["esSuper"])) { $_esSuper_ = $context["esSuper"]; } else { $_esSuper_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[codigoPostal] Código Postal", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "codigoPostal", array(), "array") || $_esSuper_), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][codigoPostal]", 4 => "datos_global_codigoPostal", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "codigoPostal"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 32
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["esSuper"])) { $_esSuper_ = $context["esSuper"]; } else { $_esSuper_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[telefono1] Teléfono1", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "telefono1", array(), "array") || $_esSuper_), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][telefono1]", 4 => "datos_global_telefono1", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "telefono1"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 33
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["esSuper"])) { $_esSuper_ = $context["esSuper"]; } else { $_esSuper_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[telefono2] Teléfono2", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "telefono2", array(), "array") || $_esSuper_), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][telefono2]", 4 => "datos_global_telefono2", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "telefono2"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "            
        ";
        // line 34
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["esSuper"])) { $_esSuper_ = $context["esSuper"]; } else { $_esSuper_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[emailInfo] Email Info", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "emailInfo", array(), "array") || $_esSuper_), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][emailInfo]", 4 => "datos_global_emailInfo", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "emailInfo"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 35
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["esSuper"])) { $_esSuper_ = $context["esSuper"]; } else { $_esSuper_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[logoOldBrowser] Archivo imagen logo navegador antiguo", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "logoOldBrowser", array(), "array") || $_esSuper_), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][logoOldBrowser]", 4 => "datos_global_logoOldBrowser", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "logoOldBrowser"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 36
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["esSuper"])) { $_esSuper_ = $context["esSuper"]; } else { $_esSuper_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[lang] Idiomas disponibles", "visible" => ($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "visibilidad"), "globales"), "lang", array(), "array") || $_esSuper_), "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[globales][lang]", 4 => "datos_global_lang", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "globales"), "lang"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "

    </div>

    <div id=\"tabs-mail\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 41
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[socket] Tipo de servidor (smtp)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][socket]", 4 => "datos_mail_socket", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "mail"), "socket"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 42
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[host] Servidor mail", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][host]", 4 => "datos_mail_host", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "mail"), "host"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 43
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[smtp_auth] Requiere autenticación (true)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][smtp_auth]", 4 => "datos_mail_smtp_auth", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "mail"), "smtp_auth"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 44
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[port] Puerto (25)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][port]", 4 => "datos_mail_port", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "mail"), "port"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 45
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[user_name] Usuario", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][user_name]", 4 => "datos_mail_user_name", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "mail"), "user_name"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 46
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[password] Password", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][password]", 4 => "datos_mail_password", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "mail"), "password"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 47
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[from] Email envío", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][from]", 4 => "datos_mail_from", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "mail"), "from"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 48
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[from_name] Nombre", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][from_name]", 4 => "datos_mail_from_name", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "mail"), "from_name"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 49
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[timeout] Tiempo espera (30seg)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][timeout]", 4 => "datos_mail_timeout", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "mail"), "timeout"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 50
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[mensajeConfirmacion] Mensaje de confirmación", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][mensajeConfirmacion]", 4 => "datos_mail_mensajeConfirmacion", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "mail"), "mensajeConfirmacion"), 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 51
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[mensajeExito] Mensaje de éxito", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][mensajeExito]", 4 => "datos_mail_mensajeExito", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "mail"), "mensajeExito"), 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 52
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[mensajeError] Mensaje de error", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[mail][mensajeError]", 4 => "datos_mail_mensajeError", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "mail"), "mensajeError"), 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 53
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "textarea", array(0 => array("caption" => "[textoLOPD] Texto LOPD", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[mail][textoLOPD]", 3 => "datos_mail_textoLOPD", 4 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "mail"), "textoLOPD"), 5 => null, 6 => null, 7 => "textarea", 8 => 100), "method"), "html", null, true);
        echo "           
    </div>
        
    <div id=\"tabs-meta\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 57
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[webName] Nombre de la Web", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][webName]", 4 => "datos_meta_webName", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "webName"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 58
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "textarea", array(0 => array("caption" => "[title] Título", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[meta][title]", 3 => "datos_meta_title", 4 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "title"), 5 => null, 6 => null, 7 => "textarea", 8 => 100), "method"), "html", null, true);
        echo "              
        ";
        // line 59
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "textarea", array(0 => array("caption" => "[description] Description", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[meta][description]", 3 => "datos_meta_description", 4 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "description"), 5 => null, 6 => null, 7 => "textarea", 8 => 100), "method"), "html", null, true);
        echo "              
        ";
        // line 60
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "textarea", array(0 => array("caption" => "[keyWords] Keywords (separados por coma)", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[meta][keyWords]", 3 => "datos_meta_keyWords", 4 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "keyWords"), 5 => null, 6 => null, 7 => "textarea", 8 => 100), "method"), "html", null, true);
        echo "              
        ";
        // line 61
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[titleSimple] TitleSimple", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "checkbox", 3 => "datos[meta][titleSimple]", 4 => "datos_meta_titleSimple", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "titleSimple"), 6 => "1", 7 => "CampoTextoLargo", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 62
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        if (isset($context["ValoresIzqDcha"])) { $_ValoresIzqDcha_ = $context["ValoresIzqDcha"]; } else { $_ValoresIzqDcha_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "select", array(0 => array("caption" => "[titlePosition] TitlePosition", "visible" => "1", "updatable" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "datos[meta][titlePosition]", 3 => "datos_meta_titlePosition", 4 => null, 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "titlePosition"), 6 => $_ValoresIzqDcha_, 7 => "chzn-select", 8 => 1), "method"), "html", null, true);
        echo "                
        ";
        // line 63
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[revisitAfter] revisitAfter", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][revisitAfter]", 4 => "datos_meta_revisitAfter", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "revisitAfter"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 64
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[author] Author", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][author]", 4 => "datos_meta_author", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "author"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 65
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[owner] Propietario", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][owner]", 4 => "datos_meta_owner", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "owner"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 66
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[geoRegion] geoRegion", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][geoRegion]", 4 => "datos_meta_geoRegion", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "geoRegion"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 67
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[geoPlaceName] geoPlaceName", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][geoPlaceName]", 4 => "datos_meta_geoPlaceName", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "geoPlaceName"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 68
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[geoPositionLongitude] geoPositionLongitude", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][geoPositionLongitude]", 4 => "datos_meta_geoPositionLongitude", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "geoPositionLongitude"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 69
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[geoPositionLatitude] geoPositionLatitude", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][geoPositionLatitude]", 4 => "datos_meta_geoPositionLatitude", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "geoPositionLatitude"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 70
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[idGoogleAnalytics] Identificador de Google Analytics", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[meta][idGoogleAnalytics]", 4 => "datos_meta_idGoogleAnalytics", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "meta"), "idGoogleAnalytics"), 6 => "50", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        </div>

    <div id=\"tabs-firmas\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 74
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[links] Links separados por coma", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[signatures][links]", 4 => "datos_signatures_links", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "signatures"), "links"), 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "
        ";
        // line 75
        if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => "[locations] Localizaciones geográficas separadas por coma", "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => "datos[signatures][locations]", 4 => "datos_signatures_links", 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "signatures"), "locations"), 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
        echo "

        ";
        // line 77
        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "signatures"), "services"));
        foreach ($context['_seq'] as $context["language"] => $context["services"]) {
            // line 78
            echo "            ";
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["language"])) { $_language_ = $context["language"]; } else { $_language_ = null; }
            if (isset($context["services"])) { $_services_ = $context["services"]; } else { $_services_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => (("[services][" . $_language_) . "] Servicios separados por coma"), "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("datos[signatures][services][" . $_language_) . "]"), 4 => ("datos_signatures_services_" . $_language_), 5 => $_services_, 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['language'], $context['services'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 80
        echo "    </div>

    <div id=\"tabs-contenidosFijos\" class=\"ui-tabs-panel ui-widget-content ui-corner-bottom\">
        ";
        // line 83
        if (isset($context["numeroContenidosFijos"])) { $_numeroContenidosFijos_ = $context["numeroContenidosFijos"]; } else { $_numeroContenidosFijos_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, $_numeroContenidosFijos_));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 84
            echo "        ";
            if (isset($context["macro"])) { $_macro_ = $context["macro"]; } else { $_macro_ = null; }
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_macro_, "input", array(0 => array("caption" => ((("[" . $_i_) . "] Contenido fijo ") . $_i_), "visible" => "1", "varEnv" => "0"), 1 => "field_title", 2 => "text", 3 => (("datos[staticContents][" . $_i_) . "]"), 4 => ("datos_staticContents_sc" . $_i_), 5 => $this->getAttribute($this->getAttribute($this->getAttribute($_values_, "datos"), "staticContents"), $_i_, array(), "array"), 6 => "255", 7 => "CampoTextoCorto", 8 => "1"), "method"), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 86
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CpanVariables/fieldsVarProWeb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 86,  348 => 84,  343 => 83,  338 => 80,  326 => 78,  321 => 77,  314 => 75,  308 => 74,  299 => 70,  293 => 69,  287 => 68,  281 => 67,  275 => 66,  269 => 65,  263 => 64,  257 => 63,  250 => 62,  244 => 61,  238 => 60,  232 => 59,  226 => 58,  220 => 57,  211 => 53,  205 => 52,  199 => 51,  193 => 50,  187 => 49,  181 => 48,  175 => 47,  169 => 46,  163 => 45,  157 => 44,  151 => 43,  145 => 42,  139 => 41,  128 => 36,  121 => 35,  114 => 34,  107 => 33,  100 => 32,  93 => 31,  86 => 30,  79 => 29,  72 => 28,  65 => 27,  58 => 26,  51 => 25,  38 => 14,  35 => 13,  30 => 11,  27 => 10,  25 => 9,);
    }
}
